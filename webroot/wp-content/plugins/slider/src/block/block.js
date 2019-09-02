/**
 * BLOCK: slider
 *
 * Registering a basic block with Gutenberg.
 * Simple block, renders and saves the same content without any interactivity.
 */
//  Import CSS.
import './editor.scss';
import './style.scss';


const { __ } = wp.i18n; // Import __() from wp.i18n
const { registerBlockType } = wp.blocks; // Import registerBlockType() from wp.blocks
const { FormFileUpload, Button } =  wp.components;
const { InspectorControls, RichText, MediaUpload, MediaUploadCheck, PlainText } = wp.editor;
registerBlockType( 'slider/my-slider', {
    title: __( 'Slider' ),
    icon: 'format-image',
    category: 'common',
  attributes: {
    slides:{
      type: 'array'
    },
  },
    edit: ( {attributes, setAttributes} ) => {
    /**
      * Submit Slides
      *
      * @param e
    */
    const submitSlides = (e) => {
      e.preventDefault();

      const numberOfSlides = e.target.numberOfSlides.value;
      let slides = [];
      for (let i = 0; i<numberOfSlides; i++)
        slides.push({});
      setAttributes({slides: slides});
    };


    /**
      * Media Render
      *
      *@param open
      * @param slide
      * @returns {*}
      */
      const mediaRender = (open, slide) => {
        return (
          <div className={'slider__image--wrapper'}>
            <Button onClick={open} className={'slider__image--button'}>
             <img src={slide.img !== undefined ? slide.img.url : 'http://placehold.it/500'} className={'slider__image--img'}/>
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
        * Title
        *
        * @param media
        * @param attributes
        * @param i
        */

        const setTitle = (content, attributes, i) => {
          attributes.slides[i].title = content;
          setAttributes({slides: attributes.slides});
          setAttributes({test: !attributes.test}) // Fix
        };


        const setDescription = (content, attributes, i ) => {
          attributes.slides[i].description = content;
          setAttributes({slides: attributes.slides});
          setAttributes({test: !attributes.test}) // Fix
        };

        const onChangeTest = (newTest) => {
          setAttributes({author: newTest})
        }

        const addMoreSlides = (slides, newSlide) => {
          slides.push(newSlide);


          setAttributes({slides: slides});
          console.log('addMoreSlides')
        }

    const numberOfSlides = attributes.slides !== undefined ? attributes.slides.length : 0;

    const form = (
      <form  onSubmit={submitSlides} >
        <input name="numberOfSlides" type="number" placeholder="Number of Slides" defaultValue={numberOfSlides} />
        <input type="submit" value="Submit"/>
      </form>
    );

    if(numberOfSlides < 1) return form;

    let slides = [];
    attributes.slides.forEach((slide, i) => {
      slides.push(
        <div className={'slider'}>
          <div className={'slider__image'}>
            <MediaUploadCheck>
              <MediaUpload
                onSelect={ ( media ) => mediaSelect(media, attributes, i)}
                value={slide.img !== undefined ? slide.img.id : null}
                render={ ( { open } ) => mediaRender(open, slide)}
              />
            </MediaUploadCheck>
          </div>
          <div className={"slider__text"}>
            <RichText
              tagName="h3"
              className={'slider__text--title'}
              value={slide.title}
              placeholder="Enter Slides Title"
              onChange={(content) => setTitle(content, attributes, i)}
              />
            <RichText
              tagName="p"
              className={'slider__text--content'}
              value={slide.description}
              placeholder="Enter Your Content"
              onChange={ ( content ) => setDescription(content, attributes, i) }
            />
          </div>
        </div>
      )
    });

    let newSlide = (newSlide, i) => {
      return (
      <div className={'slider'}>
        <div className={'slider__image'}>
          <MediaUploadCheck>
            <MediaUpload
              className={'slider__image--img'}
              onSelect={ ( media ) => mediaSelect(media, attributes, i)}
              value={newSlide.img !== undefined ? newSlide.img.id : null}
              render={ ( { open } ) => mediaRender(open, slide)}
            />
          </MediaUploadCheck>
        </div>
        <div className={'slider__text'}>
          <RichText
            tagName="h3"
            className={'slider__text--title'}
            value={newSlide.title}
            placeholder="Enter Slides Title"
            onChange={(content) => setTitle(content, attributes, i)}
            />
          <RichText
            tagName="p"
            className={'slider__text--content'}
            value={newSlide.description}
            placeholder="Enter Your Content"
            onChange={ ( content ) => setDescription(content, attributes, i) }
          />
        </div>
      </div>
    )};

    return (
    <div>
      {slides}
      <Button
        className="add__more"
        onClick={(slide) => addMoreSlides(slides, newSlide) }>
          Add more slides
      </Button>
    </div>
  )
    },

    save: ( {attributes, setAttributes }) => {

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
} );
