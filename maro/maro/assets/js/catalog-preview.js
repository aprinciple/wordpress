const catalogPreview = document.querySelectorAll('.catalog-preview__wrapper');
if(catalogPreview) {
  catalogPreview.forEach( (item) => {
    let lightImg = item.querySelector('.catalog-preview__image--light');
    let darkImg = item.querySelector('.catalog-preview__image--dark');
  
    if(lightImg && darkImg) {

      item.addEventListener('mouseover', () => {
        lightImg.style.display = 'none';
        darkImg.style.display = 'block';
      });

      item.addEventListener('mouseleave', () => {
        darkImg.style.display = 'none';
        lightImg.style.display = 'block';
      });
    }
  } );
}