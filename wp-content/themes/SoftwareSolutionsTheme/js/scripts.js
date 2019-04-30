/* scrolls
-----------------------------------------------------------------*/
jQuery(document).ready(function(){   
    jQuery('#up').click(function () {
        jQuery('body,html').animate({
            scrollTop: 0
        }, 400);
        return false;
    });
});
jQuery(document).ready(function(){
  jQuery(window).scroll(function() {
    var scroll = jQuery(window).scrollTop();
  	jQuery(".head-blur").css({
  		top: -(scroll/150)  + "%",
  		"-webkit-filter": "blur(" + (scroll/150) + "px)",
  		filter: "blur(" + (scroll/150) + "px)"
  	});
  });
});

jQuery(document).ready(function(){
    jQuery("#menu-nav-menu-en").on("click","a", function (event) {
        event.preventDefault();
        var id  = jQuery(this).attr('href'),
        top = jQuery(id).offset().top;
    jQuery('body,html').animate({scrollTop: top}, 500);
  });
});

jQuery(document).ready(function(){
    jQuery(".footer-nav").on("click","a", function (event) {
        event.preventDefault();
        var id  = jQuery(this).attr('href'),
        top = jQuery(id).offset().top;
    jQuery('body,html').animate({scrollTop: top}, 500);
  });
});

jQuery(document).scroll(function() {
  var y = jQuery(this).scrollTop();
  if (y > 600) {
    jQuery('#up').fadeIn();
  } else {
    jQuery('#up').fadeOut();
  }
});

/* tabs
-----------------------------------------------------------------*/

jQuery(document).ready(function(){ 
    document.getElementById('nav-active1').focus();
});


jQuery(document).ready(function(){
    jQuery('.nav-link-bubble').on('click', function(){
        jQuery('.nav-link-bubble').removeClass('active-bubble');
        jQuery(this).addClass('active-bubble');
    })
});
/* jQuery Mask plugin
-----------------------------------------------------------------*/
jQuery(document).ready(function(){
    jQuery('.phone').mask('0(000)-000-00000');
});

/* Menus
-----------------------------------------------------------------*/
jQuery(document).ready(function(){
  jQuery( "#menu-nav-menu-en-1 li, #menu-nav-menu-rus-1 li" ).addClass( "padding-top-bottom , hvr-underline-from-center");
});

/* Magnific Lightbox
-----------------------------------------------------------------*/
jQuery(document).ready(function() {
          jQuery('.popup-gallery').magnificPopup({
            delegate: 'a',
            alignTop: true,
            fixedBgPos: true,
            fixedContentPos: true,
            type: 'image',
            tLoading: 'Loading image #%curr%...',
            mainClass: 'mfp-img-mobile',
            gallery: {
              enabled: true,
              navigateByImgClick: true,
              preload: [0,1] // Will preload 0 - before current, and 1 after the current image
            },
            image: {
              tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
              titleSrc: function(item) {
                return '<h5 class="workTitle">' + item.el.attr('title') + '</h5>' + 
                       '<div class="workDescription">' + 
                       '<div class="workDescription-margin">' + 
                       item.el.attr('data-firstfield') +
                       '</div>' + '</div>';
              }
            },
            callbacks: {
              updateStatus: function(data) {
                jQuery('.workDescription').wrapInner('<div class="fake"/>')
                  .each(function(i,el){
                    if(jQuery('.fake',el).height() > jQuery(el).height()){
                      jQuery(".workDescription").niceScroll({
                        autohidemode: false,
                        touchbehavior: false
                      });
                    }
                  });
                  
                jQuery('.workDescription').find("p, h2").each(function () {
                  if (jQuery.trim(jQuery(this).text()) == "") {
                    jQuery(this).remove();
                  }
                });
              }
            }
          });
        });