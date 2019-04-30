<?php get_header() ?>
<body lang="en">
  <header id="header">
    <nav class="container navbar navbar-custom" id="top-of-the-page">
      <div class="container navbar-position">
        <div class="navbar-header">
          <button type="button" class="hvr-wobble-horizontal navbar-toggle collapsed display-none" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="burger"></span>
            <span class="burger"></span>
            <span class="burger"></span>
          </button>
            <a class="navbar-brand" href="#header">Software Solutions</a>
        </div>      
        <div class="collapse navbar-collapse" id="navbar-collapse">
             
            <div class="menu-nav-menu-en-container">
              <ul id="menu-nav-menu-en" class="menu">
                <li id="menu-item-296" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-296">
                  <a href="#main-slider" onclick="gtag('event', 'clickOnPortfolio', {'event_category': 'portfolioH', 'event_action': 'click' });">Portfolio</a>
                </li>
                <li id="menu-item-297" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-297">
                  <a href="#technologies" onclick="gtag('event', 'clickOntechnologies', {'event_category': 'technologiesH', 'event_action': 'click' });">Technologies</a>
                </li>
                <li id="menu-item-298" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-298">
                  <a href="#directions" onclick="gtag('event', 'clickOnServices', {'event_category': 'servicesH', 'event_action': 'click' });">Services</a>
                </li>
                <li id="menu-item-299" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-299">
                  <a href="#main-contact-form" onclick="gtag('event', 'clickOnContactus', { 'event_category': 'contactusH',  'event_action': 'click' });">Contact Us</a>
                </li>
                <li id="menu-item-300" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-105 current_page_item menu-item-300">
                  <a href="#main-info" onclick="gtag('event', 'clickOnAboutus', {'event_category': 'aboutusH', 'event_action': 'click' });">About Us</a>
                </li>
          <!--       <li id="menu-item-301" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-301">
                  <a href="">Home</a>
                </li> -->
              </ul>
            </div>
        
        </div>
      </div>
    </nav>

    <div class="container hdr-pdg">
    	<div class="col-md-6 head-blur">
          <div id="square"></div>
        	<h1>Software<br>Solutions</h1>
      	</div>
      	<div class="col-md-6 head-blur">
        	<img src="<?php bloginfo('template_url') ?>/images/header-image.png" alt="">
      	</div>
    </div>
  </header>

  <section id="nav-bubbles">
    <a class="nav-link-bubble active-bubble hvr-shrink bold bubble-one" href="#bubble-tab-one" role="tab" data-toggle="tab" id="nav-active1" data-content="Creativity" data-first-letter="C">C</a>
    <a class="nav-link-bubble hvr-shrink bold bubble-two" href="#bubble-tab-two" role="tab" data-toggle="tab" data-content="Optimism" data-first-letter="O">O</a>
    <a class="nav-link-bubble hvr-shrink bold bubble-three" href="#bubble-tab-three" role="tab" data-toggle="tab" data-content="Luck" data-first-letter="L">L</a>
    <a class="nav-link-bubble hvr-shrink bold bubble-four" href="#bubble-tab-four" role="tab" data-toggle="tab" data-content="Wisdom" data-first-letter="W">W</a>
  </section>
  <section id="main-contact-form">
    <div class="container">
     	<div class="row tab-content">
	      	<div role="tabpanel" class="tab-pane fade in active" id="bubble-tab-one">
		        <div data-aos="flip-left" data-aos-duration="1500" class="col-md-6 col-xs-12 form-right">
             <?php $query = new WP_Query( array( 'category_name' => 'how_can_we_help' ) );while ( $query->have_posts() ) { $query->the_post(); ?>
		          <h2 class="padding-top-bottom"><?php the_title() ?></h2>
              <?php } ?>             
		          <?php echo do_shortcode('[contact-form-7 id="87" title="Contact form 1"]'); ?>
		        </div>
		        <div data-aos="flip-right" data-aos-duration="1500" class="col-md-6 col-xs-12 left-image">
		          <img src="<?php bloginfo('template_url') ?>/images/contact-form-main-img.png" alt="">
		          <p class="company-feature company-feature--blue">Creativity</p>
		        </div>        
		    </div>

	      	<div role="tabpanel" class="tab-pane fade in" id="bubble-tab-two">
		        <div data-aos="flip-left" data-aos-duration="1500" class="col-md-6 col-xs-12 form-right">
		          <h2 class="padding-top-bottom">How Can We Be Of Service?</h2>
		          <?php echo do_shortcode('[contact-form-7 id="87" title="Contact form 1"]'); ?>
		        </div>
		        <div data-aos="flip-right" data-aos-duration="1500" class="col-md-6 col-xs-12 left-image">
		          <img src="<?php bloginfo('template_url') ?>/images/contact-form-main-img2.png" alt="">
		          <p class="company-feature company-feature--yellow">Optimism</p>
		        </div>        
		    </div>

	      	<div role="tabpanel" class="tab-pane fade in" id="bubble-tab-three">
		        <div data-aos="flip-left" data-aos-duration="1500" class="col-md-6 col-xs-12 form-right">
		          <h2 class="padding-top-bottom">How Can We Be Of Service?</h2>
		          <?php echo do_shortcode('[contact-form-7 id="87" title="Contact form 1"]'); ?>
		        </div>
		        <div data-aos="flip-right" data-aos-duration="1500" class="col-md-6 col-xs-12 left-image">
		          <img src="<?php bloginfo('template_url') ?>/images/contact-form-main-img3.png" alt="">
		          <p class="company-feature company-feature--red">Luck</p>
		        </div>        
		    </div>

	      	<div role="tabpanel" class="tab-pane fade in" id="bubble-tab-four">
		        <div data-aos="flip-left" data-aos-duration="1500" class="col-md-6 col-xs-12 form-right">
		          <h2 class="padding-top-bottom">How Can We Be Of Service?</h2>
		          <?php echo do_shortcode('[contact-form-7 id="87" title="Contact form 1"]'); ?>
		        </div>
		        <div data-aos="flip-right" data-aos-duration="1500" class="col-md-6 col-xs-12 left-image">
		          <img src="<?php bloginfo('template_url') ?>/images/contact-form-main-img4.png" alt="">
		          <p class="company-feature company-feature-purple">Wisdom</p>
		        </div>        
		    </div>		    		    		    
	    </div>
	</div>
  </section>

 
  <section id="main-info">
    <div class="container">
      <div class="row">
        <div class="col-md-offset-5 col-md-7"  data-aos="fade-up" >
          <ul class="nav nav-tabs nav-custom padding-top-bottom" role="tablist">
            <li class="nav-item active">
              <?php $query = new WP_Query( array( 'category_name' => 'main-tab-one-title' ) );while ( $query->have_posts() ) { $query->the_post(); ?>
              <a class="nav-link active" href="#whoweare-tab-main" role="tab" data-toggle="tab" id="nav-active"><?php the_title() ?></a>
              <?php } ?>
            </li>
<!--             <li class="nav-item">
              <?php $query = new WP_Query( array( 'category_name' => 'main-tab-two-title' ) );while ( $query->have_posts() ) { $query->the_post(); ?>           
              <a class="nav-link" href="#specialties-tab-main2" role="tab" data-toggle="tab"><?php the_title() ?></a>
              <?php } ?>
            </li> -->
            <li class="nav-item">
              <?php $query = new WP_Query( array( 'category_name' => 'main-tab-three-title' ) );while ( $query->have_posts() ) { $query->the_post(); ?>
              <a class="nav-link" href="#technologies-tab-main3" role="tab" data-toggle="tab"><?php the_title() ?></a>
              <?php } ?>
            </li>
          </ul>
        </div>
      </div>  
      <div class="row">
        <div class="tab-content">
          <?php $query = new WP_Query( array( 'category_name' => 'main-tab-one-content' ) );while ( $query->have_posts() ) { $query->the_post(); ?>
          <div role="tabpanel" class="tab-pane fade in active" id="whoweare-tab-main">
            <div class="static-block col-md-5 col-sm-5 col-xs-12">
              <?php the_post_thumbnail() ?>
            </div>
            <div class="col-md-7 col-sm-12 col-xs-12"  data-aos="fade-up" >
              <div class="tab-inside">
                <p class="margin-p"><?php the_content() ?></p> 
              </div>
            </div>
          </div>
          <?php } ?>           

        <!--   <?php $query = new WP_Query( array( 'category_name' => 'main-tab-two-content' ) );while ( $query->have_posts() ) { $query->the_post(); ?>
          <div role="tabpanel" class="tab-pane fade" id="specialties-tab-main2">
            <div class="static-block col-md-5 col-sm-5 col-xs-12">
              <?php the_post_thumbnail() ?>
            </div>
            <div class="col-md-7 col-sm-12 col-xs-12">
              <div class="tab-inside">
                <p class="margin-p"><?php the_content() ?></p>
              </div>
            </div>
          </div>
          <?php } ?> -->

          <?php $query = new WP_Query( array( 'category_name' => 'main-tab-three-content' ) );while ( $query->have_posts() ) { $query->the_post(); ?>
          <div role="tabpanel" class="tab-pane fade" id="technologies-tab-main3">
            <div class="static-block col-md-5 col-sm-5 col-xs-12">
              <?php the_post_thumbnail() ?>
            </div>
            <div class="col-md-7 col-sm-12 col-xs-12">
              <div class="tab-inside">
  							<?php the_content() ?>
              </div>
            </div>            
          </div>
          <?php } ?>        
        </div>
      </div>
    </div>
  </section>

  <section id="main-slider">
    <div class="container">
      <div class="row">
        <?php $query = new WP_Query( array( 'category_name' => 'examples' ) );while ( $query->have_posts() ) { $query->the_post(); ?> 
        <a class="button gallery"><h2 class="hvr-underline-from-center padding-top-bottom"><?php the_title() ?></h2></a>
        <?php } ?>       
      </div>

      <div class="slick-slider">
        <?php $query = new WP_Query( array( 'category_name' => 'lightbox-slider', 'posts_per_page'=>100 ) );while ( $query->have_posts() ) { $query->the_post(); ?>
            <div class="popup-gallery">
              <a href="<?php the_post_thumbnail_url(); ?>" class="buutton" title="<?php the_title() ?>" data-firstfield="<?php the_content() ?>" >
                <?php echo the_post_thumbnail(); ?>
              </a> 
          </div>
        <?php } ?>
      </div>
      <div class="btn-moreworks">
        <form action="http://blog.softsln.net" class="text-center">
          <input type="submit" value="See our works" id="btn-contact" class="btn">
        </form>
      </div>
    </div>
  </section>

  <section id="main-examples-of-work">
    <div class="container">
      <div class="row flexedblock">
    	<?php $query = new WP_Query( array( 'category_name' => 'examples_line_one' ) );while ( $query->have_posts() ) { $query->the_post(); ?> 
        <div class="hvr-grow flexedinnerblock flexedinnerblock-1">
          <div data-aos="zoom-in" class="card-inner-shadow">
            <?php the_post_thumbnail() ?>
            <br>
            <h3><?php the_title() ?></h3>
            <br>
            <p><?php the_content() ?></p>
          </div>  
        </div>
        <?php } ?>                           
      </div>

      <div class="row padding-col-4 flexedblock">
      <?php $query = new WP_Query( array( 'category_name' => 'examples_line_two' ) );while ( $query->have_posts() ) { $query->the_post(); ?> 
        <div class="hvr-grow flexedinnerblock flexedinnerblock-2">
          <div data-aos="zoom-in" class="card-inner-shadow">
            <?php the_post_thumbnail() ?>
            <br>
            <h3><?php the_title() ?></h3>
            <br>
            <p><?php the_content() ?></p>
          </div>  
        </div>
      <?php } ?>
      </div>
    </div>
  </section>

<?php $query = new WP_Query( array( 'category_name' => 'how_can_we_help' ) );while ( $query->have_posts() ) { $query->the_post(); ?>
  <section  id="main-contact-bottom" class="contact-scroll padding-top-bottom">
    <div class="container">
      <div class="row">
      	<div class="col-md-5 col-sm-5 col-xs-12">
      	</div>
        <div class="col-md-7 col-sm-7 col-xs-12" data-aos="fade-up">
          <div class="main-content">
            <h2><?php the_title() ?></h2>
            <p><?php the_content() ?></p>
            <a href="#main-contact-form"><button type="button" class="btn" id="btn-contact">contact us</button></a>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php } ?>

<?php $query = new WP_Query( array( 'category_name' => 'bottom_pure_text' ) );while ( $query->have_posts() ) { $query->the_post(); ?>
  <section id="article">
    <div data-aos="fade-up" data-aos-duration="1500" class="container">
      <div class="row">
        <div class="col-xs-12 col-md-12">
        <p class="article__article"><?php the_content() ?></p>
        </div>
      </div>
    </div>
  </section>
<?php } ?>

<section id="technologies">
	<div class="container">
    <?php $query = new WP_Query( array( 'category_name' => 'technologies' ) );while ( $query->have_posts() ) { $query->the_post(); ?>
		<h2><?php the_title() ?></h2>
    <?php } ?>   
		<div class="col-md-12 padding-top-bottom">
			<?php echo do_shortcode('[slick-carousel-slider slick-carousel-slider category="8" design="design-6" slidestoshow="6" autoplay="true"]'); ?>
		</div>
	</div>
</section>

<section id="directions">
	<div class="container padding-top-bottom">
    <?php $query = new WP_Query( array( 'category_name' => 'directions' ) );while ( $query->have_posts() ) { $query->the_post(); ?>
    <h2><?php the_title() ?></h2>
    <?php } ?>
			<div  data-aos="fade-up" class="col-md-12 col-xs-12">
				<?php $query = new WP_Query( array( 'category_name' => 'directions_line_one' ) );while ( $query->have_posts() ) { $query->the_post(); ?>
					<div class="col-md-4 directions-cards">
						<?php the_post_thumbnail() ?>
						<br>
						<h3 class="bold"><?php the_title() ?></h3>
						<!-- <p><?php the_content() ?></p> -->
					</div>
				<?php } ?>	
       
				<div class="padding-row-directions">
				<?php $query = new WP_Query( array( 'category_name' => 'directions_line_two' ) );while ( $query->have_posts() ) { $query->the_post(); ?>	
					<div data-aos="fade-up" class="col-md-6 directions-cards">
						<?php the_post_thumbnail() ?>
						<br>
						<h3 class="bold"><?php the_title() ?></h3>
						<!-- <p><?php the_content() ?></p>	 -->
					</div>
				<?php } ?>

				</div>	
			</div>
	</div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/slim-scroll/1.3.2/slimscroll.js" type="text/javascript"></script>
<script type="text/javascript">
	jQuery(document).ready(function(){
	  jQuery("html").easeScroll();
	});
</script>
<?php get_footer() ?>
