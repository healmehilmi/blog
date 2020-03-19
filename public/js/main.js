
//unsplash foto downloader


const numItemsToGenerate = 1; //how many gallery items you want on the screen
const numImagesAvailable = 529; //how many total images are in the collection you are pulling from
const imageWidth = 1080; //your desired image width in pixels
const imageHeight = 1080; //desired image height in pixels
const collectionID = 312299; //the collection ID from the original url
function renderGalleryItem(randomNumber){
   fetch(`https://source.unsplash.com/collection/${collectionID}/${imageWidth}x${imageHeight}/?sig=${randomNumber}`) 
  .then((response)=> {    
    let main_banner = document.querySelector('banner');
  
  })
}
for(let i=0;i<numItemsToGenerate;i++){
  let randomImageIndex = Math.floor(Math.random() * numImagesAvailable);
  renderGalleryItem(randomImageIndex);
}










//kitchen slider

$(document).ready(function() {
    // Swiper: Slider
    new Swiper(".swiper-container", {
      loop: true,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      slidesPerView: 4,
      paginationClickable: true,
      spaceBetween: 10,
      breakpoints: {
        1920: {
          slidesPerView: 6,
          spaceBetween: 10,
          
        },
        1028: {
          slidesPerView: 5,
          spaceBetween: 10
        },
        600: {
            slidesPerView: 3,
            spaceBetween: 10
          },
        480: {
          slidesPerView: 2,
          spaceBetween: 10
        }
      }
    });
  });
  