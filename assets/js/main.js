$(document).ready(function(){

  $(window).scroll(function(){          

      if ($(window).scrollTop() <= $('section.entrada, section.conteudo-service').offset().top) {
          $('nav.navbar').removeClass('navbar-fixed-top');          
      } else {
          $('nav.navbar').addClass('navbar-fixed-top');
          
      }
  });
  
  $("#single_image").fancybox();
});


 
  
  

  
