 
  <footer>
    <div class="container" id="bottom">
      <div class="footer-nav menu-nav-menu-en-container">
        <ul id="menu-nav-menu-en" class="menu">
          <li id="menu-item-296" class="padding-top-bottom hvr-underline-from-center menu-item menu-item-type-post_type menu-item-object-page menu-item-296">
            <a href="#main-slider" onclick="gtag('event', 'clickOnPortfolioF', {'event_category': 'portfolioF', 'event_action': 'click' });">Portfolio</a>
          </li>
          <li id="menu-item-297" class="padding-top-bottom hvr-underline-from-center menu-item menu-item-type-post_type menu-item-object-page menu-item-297">
            <a href="#technologies" onclick="gtag('event', 'clickOntechnologiesF', {'event_category': 'technologiesF', 'event_action': 'click' });">Technologies</a>
          </li>
          <li id="menu-item-298" class="padding-top-bottom hvr-underline-from-center menu-item menu-item-type-post_type menu-item-object-page menu-item-298">
            <a href="#directions" onclick="gtag('event', 'clickOnServicesF', {'event_category': 'servicesF', 'event_action': 'click' });">Services</a>
          </li>
          <li id="menu-item-299" class="padding-top-bottom hvr-underline-from-center menu-item menu-item-type-post_type menu-item-object-page menu-item-299">
            <a href="#main-contact-form" onclick="gtag('event', 'clickOnContactusF', { 'event_category': 'contactusF',  'event_action': 'click' });">Contact Us</a>
          </li>
          <li id="menu-item-300" class="padding-top-bottom hvr-underline-from-center menu-item menu-item-type-post_type menu-item-object-page menu-item-300">
            <a href="#main-info" onclick="gtag('event', 'clickOnAboutusF', {'event_category': 'aboutusF', 'event_action': 'click' });">About Us</a>
          </li>
         <!--  <li id="menu-item-301" class="padding-top-bottom hvr-underline-from-center menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-2 current_page_item menu-item-301">
            <a href="http://demo.pinofran.com/demo/SoftWareSolutionsWP/index.php/sample-page/">Home</a>
          </li> -->
        </ul>
      </div>
      <div class="row footer-contacts padding-top-bottom">
        <div class="col-xs-12 col-sm-4 adress">
          <a href="javascript:void(0);" onclick="gtag('event', 'clickOnAboutusF', {'event_category': 'aboutusF', 'event_action': 'click' });">
            <i class="fa fa-map-marker"></i>Kyiv, Ukraine
          </a>
        </div>
        
        <div class="col-xs-12 col-sm-4 social-icons-box">
          <ul class="social-icons">
            <li>
              <a href="https://twitter.com/SoftwareSolut12" target="_blank" onclick="gtag('event', 'clickOnTwitter', {'event_category': 'twitter', 'event_action': 'click' });">
                <i class="fa fa-twitter-square"></i>
              </a>
            </li>
            <li>
              <a href="https://www.facebook.com/groups/1890848537884098" target="_blank" onclick="gtag('event', 'clickOnFacebook', {'event_category': 'facebook', 'event_action': 'click' });">
                <i class="fa fa-facebook-square"></i>
              </a>
            </li>
            <li>
              <a href="https://www.linkedin.com/in/software-solutions-596531169" target="_blank" onclick="gtag('event', 'clickOnLinkedin', {'event_category': 'linkedin', 'event_action': 'click' });">
                <i class="fa fa-linkedin-square"></i>
              </a>
            </li>
           <!--  <li>
              <a href="javascript:void(0);" target="_blank">
                <i class="fa fa-google-plus-square"></i>
              </a>
            </li>
            <li>
              <a href="javascript:void(0);" target="_blank">
                <i class="fa fa-instagram"></i>
              </a>
            </li> -->
          </ul>

          <ul id="up">
            <li>
              <a href="javascript:void(0);" target="_blank">
                <i class="fa fa-chevron-up"></i>
              </a>
            </li>
          </ul>
        </div>
		  
		<div class="col-xs-12 col-sm-4 mail-to">
			<a href="mailto:manager@softsln.net">manager@softsln.net</a>
        </div>
      </div>
    </div>
  </footer>

<script type="text/javascript">
  jQuery(document).ready(function(){ 
    AOS.init();
    window.addEventListener('load', AOS.refresh);
  });
</script>
<script type="text/javascript">
  jQuery(document).ready(function(){ 
    jQuery( "#menu-nav-menu-en-1 li, #menu-nav-menu-rus-1 li" ).addClass( "padding-top-bottom , hvr-underline-from-center");
  });
</script>
<script type="text/javascript">

 jQuery(document).ready(function(){ 
  jQuery('.slick-slider').slick({
    infinite        : true,
    slidesToShow    : 2,
    slidesToScroll  : 1,
    mobileFirst     : true,
    autoplay        : false,
    arrows: true,
    prevArrow: "<span class='slick-prev'><i class='fa fa-angle-left'></i></span>", 
    nextArrow: "<span class='slick-next'><i class='fa fa-angle-right'></i></span>",
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 300,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });
});

</script>
</body>
</html>
 <?php wp_footer() ?>