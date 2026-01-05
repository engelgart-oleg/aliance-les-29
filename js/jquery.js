//создаем JQuery функцию, которая будет подгружать изображения в буфер
jQuery.preloadImages = function()
 {
  for(var i = 0; i < arguments.length; i++)
  {
   jQuery("<img>").attr("src", arguments[ i ]);
  }
 };

//указываем путь к изображению, которое нужно подгрузить
$.preloadImages(
  "../img/header_bg.png",
  "../img/production/1.png",
  "../img/production/2.png",
  "../img/production/3.png",
  "../img/founder.png",
  "../img/client-logo-rgb.png",
  "../img/blog/blog-photo-1.png",
  "../img/blog/blog-photo-2.png",
  "../img/cta.png",
  "../img/experts.png",
  "../img/experts-2.png",
  "../img/experts-3.png",
  "../img/production-photo-1.png",
  "../img/production-photo-2.png",
  "../img/distributor-bg.png",
  "../img/head/head-image.png",
  "../img/blog-more-image.png"
);
