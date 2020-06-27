document.addEventListener('DOMContentLoaded', () => {
  // Fix viewport units for height
  let vh = window.innerHeight * 0.01;
  document.documentElement.style.setProperty('--vh', `${vh}px`);

  /**
   * Main slider
   */
  class Slider {
    constructor(options) {
      this.slider = options.slider;
      this.itemsSlider = options.itemsSlider;
      this.mode = options.mode || false;
      this.delay = options.delay || 3000;
      this.isNav = options.isNav;
      this.navOptions = options.navOptions;
      this.createdItemsNav = false;
      this.indexOfSlide = 0;
      this.timerId = null;
      this.touchStartX = 0;
      this.touchEndX = 0;
      this.slider.addEventListener('touchstart', (e) => {
        this.touchStartX = e.touches[0].clientX;
      }, {passive: true} );
      this.slider.addEventListener('touchend', (e) => {
        this.touchEndX = e.changedTouches[0].clientX;
        this.handleGesture(e);
      });
  
      this.isNav && this.createdList(this.isNav);
      this.handleMode(this.mode);
      this.init(this.indexOfSlide);
    }
  
    hideSlides() {
      this.itemsSlider.forEach(item => item.classList.remove('active'));
    }
  
    showSlide(n) {
      this.itemsSlider[n].classList.add('active');
    }
  
    async checkIndex(n) {
      if (n < 0) {
        this.indexOfSlide = this.itemsSlider.length - 1;
      }
      if (n >= this.itemsSlider.length) {
        this.indexOfSlide = 0;
      }
  
      return this.indexOfSlide;
    }
  
    handleGesture(e) {
      let target = e.target;
      if (this.touchEndX - this.touchStartX >= 30 && !target.closest('ul')) {
        this.handleMode(false);
        this.init(--this.indexOfSlide);
      }
  
      if (this.touchStartX - this.touchEndX >= 30 && !target.closest('ul')) {
        this.handleMode(false);
        this.init(++this.indexOfSlide);
      }
    }
  
    async init(i) {
      const n = await this.checkIndex(i);
      this.hideSlides();
      this.showSlide(n);
      this.createdItemsNav && this.showActiveItemNav(n);
    }
  
    handleMode(mode) {
      if (mode === 'auto') {
        this.timerId = setInterval(() => this.init(++this.indexOfSlide), this.delay);
      } else {
        this.timerId && clearInterval(this.timerId);
      }
    }
  
    createdList(isNav) {
      if (isNav) {
        let nav = this.navOptions.nav;
        let ul = document.createElement('ul');
        ul.classList.add(this.navOptions.list);
  
        this.itemsSlider.forEach((item) => {
          let title = item.querySelector('h1').textContent;
          let li = document.createElement('li');
          li.classList.add(this.navOptions.item);
          li.textContent = title || 'Item';
          ul.append(li);
        });
        nav.append(ul);
        this.handlerNav(ul);
      }
    }
  
    handlerNav(ul) {
      if (ul) {
        let items = ul.querySelectorAll('li');
        items.forEach((item, i) => {
          item.addEventListener('click', () => {
            this.handleMode(false);
            this.init(this.indexOfSlide = i);
          });
        });
  
        this.createdItemsNav = items;
      }
    }
  
    addActiveNavItem(item) {
      item.classList.add('active');
    }
  
    removeActiveNavItems(items) {
      items.forEach(item => item.classList.remove('active'));
    }
  
    showActiveItemNav(n) {
      this.removeActiveNavItems(this.createdItemsNav);
      this.addActiveNavItem(this.createdItemsNav[n]);
  
      let isScroll = this.navOptions.nav.scrollWidth > this.navOptions.nav.clientWidth;
  
      if (isScroll && n > 0) {
        this.navOptions.nav.scrollLeft += this.createdItemsNav[n].getBoundingClientRect().x - 20;
      } else {
        this.navOptions.nav.scrollLeft = 0;
      }
    }
  }
  
  const slider = document.querySelector('.nav-slider');
  if (slider) {
    (() => new Slider({
      slider: document.querySelector('.nav-slider'),
      itemsSlider: document.querySelectorAll('.nav-slider__item'),
      mode: 'auto',
      delay: 5000,
      isNav: true,
      navOptions: {
        nav: document.querySelector('.nav-slider__nav'),
        list: 'nav-slider__list',
        item: 'nav-slider__list-item',
      }
    }))();
  }

  /**
   * Slider services 
   */
  {
    const initSlider = (el, container) => {
      let slider = document.querySelector(el);
      if(slider) {
        let prev = slider.querySelector('.cards-offer__button--prev');
        let next = slider.querySelector('.cards-offer__button--next');
        let init = tns({
          container: container,
          items: 1,
          gutter: 20,
          responsive: {
            768: {
              items: 3,
              gutter: 10
            },
            1200: {
              items: 4,
              gutter: 25
            }
          },
          slideBy: 'page',
          controls: false,
          nav: false,
        });

        prev.addEventListener( 'click', () => init.goTo('prev') );
        next.addEventListener( 'click', () => init.goTo('next') );
      }
    }
    initSlider('.cards-offer--services', '.cards-offer__items--services');
    initSlider('.cards-offer--products', '.cards-offer__items--products');
  }

  /**
  * Handler of forms
  */

  const form = document.querySelectorAll('.form--post');

  if (form) {
    (() => new PostForm({
      form: form,
      url: '',
      method: 'POST',
      alertOpt: {
        alert: document.querySelector('.alert'),
        classSuccess: 'alert--success',
        classError: 'alert--error',
        message: document.querySelector('.alert__message'),
      },
    }))();
  }

  const alert = document.querySelector('.alert');
  if (alert) {
    new Alert({
      alert: document.querySelector('.alert'),
      cancel: document.querySelector('.alert__close'),
    }).closeAlert();
  }

  /**
   * Form callback
   */
  const phoneCallback = document.querySelector('.b-callback');
  if(phoneCallback) {
    let opener = phoneCallback.querySelector('.b-callback__button--opener');
    let close = phoneCallback.querySelector('.b-callback__close');
    let form = phoneCallback.querySelector('.b-callback__form');

    let openForm = () => {
      opener.style.display = 'none';
      phoneCallback.classList.add('open');
    }

    let closeForm = () => {
      phoneCallback.classList.remove('open');
      opener.style.display = 'block';
    }

    opener.addEventListener('click', () => openForm());
    close.addEventListener('click', () => closeForm());
    form.addEventListener('submit', () => {
      setTimeout(() => {
        closeForm();
      }, 1500);
    });
  }

  /**
   * Form order
   */
  const modalOrderButton = document.querySelector('.button--order');
  const modalOrderForm = document.querySelector('.form-order');
  if(modalOrderButton && modalOrderForm) {
    modalOrderButton.addEventListener('click', () => modalOrderForm.style.display = 'block');

    let close = modalOrderForm.querySelector('.form-order__close');
    close.addEventListener('click', () => modalOrderForm.style.display = 'none');
  }

  /**
   * Slider portfolio
   */
  const portfolio = document.querySelector('.p-portfolio');
  if(portfolio) {
    let itemsPortfolio = portfolio.querySelectorAll('.p-portfolio__item');
    let sliderPortfolio = portfolio.querySelectorAll('.slider-portfolio');

    if(itemsPortfolio && sliderPortfolio) {
      itemsPortfolio.forEach( (item, i) => {
        item.addEventListener( 'click', () => {
          let currentScroll = parseInt( window.pageYOffset );
          let heightPortfolio = parseInt( sliderPortfolio[i].clientHeight );
          sliderPortfolio[i].style.top = `${currentScroll - heightPortfolio + 30}px`;
          sliderPortfolio[i].classList.add('open');
        } )
      } );


      // Init slider
      sliderPortfolio.forEach(item => {
        let close = item.querySelector('.slider-portfolio__close');
        let prev = item.querySelector('.slider-portfolio__button--prev');
        let next = item.querySelector('.slider-portfolio__button--next');

        let slider = tns({
          container: item.querySelector('.slider-portfolio__items'),
          items: 1,
          controlsContainer: item.querySelector('.slider-portfolio__buttons'),
          navContainer: item.querySelector('.slider-portfolio__thumbnails'),
          navAsThumbnails: true,
          swipeAngle: false,
          controls: false,
        });

        prev.addEventListener( 'click', () => slider.goTo('prev') );
        next.addEventListener( 'click', () => slider.goTo('next') );

        close.addEventListener('click', () => {
          item.classList.remove('open');
        });
      });

    }
  }

  /**
   * Slider post
   */
  const sliderPost = document.querySelector('.slider-post');
  if(sliderPost) {
    let prev = sliderPost.querySelector('.slider-post__button--prev');
    let next = sliderPost.querySelector('.slider-post__button--next');

    let slider = tns({
      container: '.slider-post__items',
      items: 1,
      slideBy: 'page',
      controls: false,
      // nav: false,
    });

    prev.addEventListener( 'click', () => slider.goTo('prev') );
    next.addEventListener( 'click', () => slider.goTo('next') );
  }

});
