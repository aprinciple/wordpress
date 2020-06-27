document.addEventListener('DOMContentLoaded', () => {

  // top menu
  const menuToggle = document.querySelector('.btn-burger');
  const menuTop = document.querySelector('.top-menu');

  if(menuToggle && menuTop) {
    const close = document.querySelector('.menu-close');
    menuToggle.addEventListener('click', () => {
      menuTop.style.display = 'block';
      close.style.display = 'block';
    });

    close.addEventListener('click', () => {
      menuTop.style.display = 'none';
      close.style.display = 'none';
    });
  }

  const homeClients = document.querySelector('.home-clients');
  const homeReviews = document.querySelector('.home-reviews');
  const postSlider = document.querySelector('.slider-post');

  if(homeReviews) {
    let prev = homeReviews.querySelector('.home-reviews__button--prev');
    let next = homeReviews.querySelector('.home-reviews__button--next');

    let slider = tns({
      container: homeReviews.querySelector('.home-reviews__items'),
      items: 2,
      responsive: {
        640: {
          items: 4
        }
      },
      controls: false,
      nav: false,
    });

    prev.addEventListener( 'click', () => slider.goTo('prev') );
    next.addEventListener( 'click', () => slider.goTo('next') );
  }

  if(homeClients) {
    let prev = homeClients.querySelector('.home-clients__button--prev');
    let next = homeClients.querySelector('.home-clients__button--next');

    let slider = tns({
      container: homeClients.querySelector('.home-clients__items'),
      items: 2,
      responsive: {
        640: {
          items: 4
        },
        1200: {
          items: 5
        }
      },
      controls: false,
      nav: false,
    });

    prev.addEventListener( 'click', () => slider.goTo('prev') );
    next.addEventListener( 'click', () => slider.goTo('next') );
  }

  if(postSlider) {
    let prev = postSlider.querySelector('.slider-post__button--prev');
    let next = postSlider.querySelector('.slider-post__button--next');

    let slider = tns({
      container: postSlider.querySelector('.slider-post__items'),
      items: 1,
      responsive: {
        640: {
          items: 2
        },
        1200: {
          items: 4
        }
      },
      controls: false,
      nav: false,
    });

    prev.addEventListener( 'click', () => slider.goTo('prev') );
    next.addEventListener( 'click', () => slider.goTo('next') );
  }

  // menu
  const topMenu = document.querySelector('.top-menu');
  const catalogMenu = document.querySelector('.nav-catalog');
  if(topMenu && catalogMenu) {
    itemCatalog = topMenu.querySelectorAll('li')[1];
    itemCatalog.addEventListener('click', (e) => {
      if( e.target.closest('a') ) {
        e.preventDefault();
        catalogMenu.classList.toggle('open');
      }
    });
  }

  const portfolioTabs = document.querySelector('.portfolio-tabs');

  if(portfolioTabs) {
    let tabWorks = portfolioTabs.querySelector('#portfolio-tab-works');
    let tabServices = portfolioTabs.querySelector('#portfolio-tab-services');

    let tabsServices = portfolioTabs.querySelector('.portfolio-tabs__nav');

    let itemsWorks = portfolioTabs.querySelector('#portfolio-tabs-items-works');
    let itemsServices = portfolioTabs.querySelector('#portfolio-tabs-items-services');

    tabWorks.addEventListener('click', (e) => {
      e.preventDefault();
      tabServices.classList.remove('portfolio-tabs__tab--active');
      tabWorks.classList.add('portfolio-tabs__tab--active');
      tabsServices.style.display = 'none';

      itemsServices.style.display = 'none';
      itemsWorks.style.display = 'grid';
    })

    tabServices.addEventListener('click', (e) => {
      e.preventDefault();
      tabWorks.classList.remove('portfolio-tabs__tab--active');
      tabServices.classList.add('portfolio-tabs__tab--active');
      tabsServices.style.display = 'grid';

      itemsWorks.style.display = 'none';
      itemsServices.style.display = 'grid';
    });

    let itemsPortfolio = portfolioTabs.querySelectorAll('.portfolio-tabs__item');
    let sliderPortfolio = document.querySelectorAll('.slider-portfolio');

    if(itemsPortfolio && sliderPortfolio) {
      itemsPortfolio.forEach( (item, i) => {
        item.addEventListener( 'click', () => {
          let currentScroll = parseInt( window.pageYOffset );
          let heightPortfolio = parseInt( sliderPortfolio[i].clientHeight );
          if( window.matchMedia("(min-width: 1200px)").matches ) {
            sliderPortfolio[i].style.top = `${currentScroll - heightPortfolio - 130}px`;
          } else {
            sliderPortfolio[i].style.top = `${currentScroll - heightPortfolio}px`;
          }
          sliderPortfolio[i].classList.add('open');
        } )
      } );
    }
  }

  const sliderPortfolio = document.querySelectorAll('.slider-portfolio');

  if(sliderPortfolio) {

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

  const phoneCallback = document.querySelector('.b-callback');
  if(phoneCallback) {
    let opener = phoneCallback.querySelector('.b-callback__button--opener');
    let form = phoneCallback.querySelector('.b-callback__form');
    opener.addEventListener('click', (e) => {
      opener.style.display = 'none';
      form.style.display = 'block';
    });

    form.addEventListener('submit', () => {
      setTimeout(() => {
        form.style.display = 'none';
        opener.style.display = 'block';
      }, 1500);
    });
  }
});


/**
 * Handler of forms
 */

document.addEventListener('DOMContentLoaded', () => {
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
});

document.addEventListener('DOMContentLoaded', () => {
  const alert = document.querySelector('.alert');
  if (alert) {
    new Alert({
      alert: document.querySelector('.alert'),
      cancel: document.querySelector('.alert__close'),
    }).closeAlert();
  }
});