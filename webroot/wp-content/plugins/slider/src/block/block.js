/**
 * BLOCK: slider
 *
 * Registering a basic block with Gutenberg.
 * Simple block, renders and saves the same content without any interactivity.
 */
//  Import CSS.
import './editor.scss';
import './style.scss';


const {__} = wp.i18n; // Import __() from wp.i18n
const {registerBlockType} = wp.blocks; // Import registerBlockType() from wp.blocks
const {FormFileUpload, Button} = wp.components;
const {InspectorControls, RichText, MediaUpload, MediaUploadCheck, PlainText} = wp.editor;
registerBlockType('slider/my-slider', {
  title: __('Slider'),
  icon: 'format-image',
  category: 'common',
  attributes: {
    slides: {
      type: 'array'
    },
  },
  edit: ({attributes, setAttributes}) => {

    /**
     * Submit Slides
     *
     * @param e
     */
    const submitSlides = (e) => {
      e.preventDefault();

      const numberOfSlides = e.target.numberOfSlides.value;
      let slides = [];
      for (let i = 0; i < numberOfSlides; i++)
        slides.push({});
      setAttributes({slides: slides});
    };

    /**
     * Media Render
     *
     * @param open
     * @param slide
     * @returns {*}
     */
    const mediaRender = (open, slide) => {
      return (
        <div className={'slider__image--wrapper'}>
          <Button onClick={open} className={'slider__image--button'}>
            <img src={slide.img !== undefined ? slide.img.url : 'http://placehold.it/500'}
                 className={'slider__image--img'}/>
          </Button>
        </div>
      )
    };

    /**
     * Media Select
     *
     * @param media
     * @param attributes
     * @param i
     */
    const mediaSelect = (media, attributes, i) => {
      attributes.slides[i].img = media;
      setAttributes({slides: attributes.slides});
      setAttributes({test: !attributes.test}); // Fix
    };

    /**
     * Set Title
     *
     * @param content
     * @param attributes
     * @param i
     */
    const setTitle = (content, attributes, i) => {
      attributes.slides[i].title = content;
      setAttributes({slides: attributes.slides});
      setAttributes({test: !attributes.test}) // Fix
    };

    /**
     * Set Description
     *
     * @param content
     * @param attributes
     * @param i
     */
    const setDescription = (content, attributes, i) => {
      attributes.slides[i].description = content;
      setAttributes({slides: attributes.slides});
      setAttributes({test: !attributes.test}) // Fix
    };

    const slideTpl = (slide, attributes, i) => {

      return (
        <div className={'slider'}>
          <div className={'slider__image'}>
            <MediaUploadCheck>
              <MediaUpload
                onSelect={(media) => mediaSelect(media, attributes, i)}
                value={slide !== undefined && slide.img !== undefined ? slide.img.id : null}
                render={({open}) => mediaRender(open, slide)}
              />
            </MediaUploadCheck>
          </div>
          <div className={"slider__text"}>
            <RichText
              tagName="h3"
              className={'slider__text--title'}
              value={slide !== undefined ? slide.title : 'Title'}
              placeholder="Enter Slides Title"
              onChange={(content) => setTitle(content, attributes, i)}
            />
            <RichText
              tagName="p"
              className={'slider__text--content'}
              value={slide !== undefined ? slide.description : 'Description'}
              placeholder="Enter Your Content"
              onChange={(content) => setDescription(content, attributes, i)}
            />
          </div>
        </div>
      )
    };

    /**
     * Add More Slides
     *
     * @param slides
     * @param newSlide
     */
    const addMoreSlides = () => {
      slides = [...attributes.slides];

      slides.push(slideTpl());
      setAttributes({slides: slides});
    };

    const numberOfSlides = attributes.slides !== undefined ? attributes.slides.length : 0;

    // Initial form
    const form = (
      <form onSubmit={submitSlides}>
        <input name="numberOfSlides" type="number" placeholder="Number of Slides" defaultValue={numberOfSlides}/>
        <input type="submit" value="Submit"/>
      </form>
    );

    if (numberOfSlides < 1) return form;

    let slides = [];
    attributes.slides.forEach((slide, i) => {
      slides.push(slideTpl(slide, attributes, i))
    });

    return (
      <div>
        {slides}
        <Button
          className="add__more"
          onClick={() => addMoreSlides(undefined, attributes, attributes.slides.length + 1)}>
          Add more slides
        </Button>
      </div>
    )
  },

  save: ({attributes, setAttributes}) => {

    let slides = [];

    attributes.slides.forEach((slide, i) => {
      slides.push(
        <div className={'slider-front'}>
          <div className={'slider-front__wrapper'}>
            <img src={slide.img !== undefined ? slide.img.url : null} className={'slider-front__img'}/>
          </div>
          <div className={'slider-front__text'}>
            <RichText.Content
              tagName="h3"
              className={'slider-front__text--title'}
              value={slide.title}
            />
            <RichText.Content
              tagName="p"
              className={'slider-front__text--content'}
              value={slide.description}
            />
          </div>
        </div>
      )
    });

    return (
      <div>
        {slides}
      </div>
    );
  },
});
