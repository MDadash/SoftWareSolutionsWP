	<?php $query = new WP_Query( array( 'category_name' => 'how-can-we-help-rus' ) );while ( $query->have_posts() ) { $query->the_post(); ?>
<h2 class="padding-top-bottom"><?php the_title() ?></h2>
<?php } ?> 
<?php $query = new WP_Query( array( 'category_name' => 'main-tab-one-title-rus' ) );while ( $query->have_posts() ) { $query->the_post(); ?>
<a class="nav-link active" href="#whoweare-tab-main" role="tab" data-toggle="tab" id="nav-active"><?php the_title() ?></a>
<?php } ?>
</li>
<?php $query = new WP_Query( array( 'category_name' => 'main-tab-two-title-rus' ) );while ( $query->have_posts() ) { $query->the_post(); ?>         
<a class="nav-link" href="#specialties-tab-main2" role="tab" data-toggle="tab"><?php the_title() ?></a>
<?php } ?>
<?php $query = new WP_Query( array( 'category_name' => 'main-tab-three-title-rus' ) );while ( $query->have_posts() ) { $query->the_post(); ?>
<a class="nav-link" href="#technologies-tab-main3" role="tab" data-toggle="tab"><?php the_title() ?></a>
<?php } ?>
<?php $query = new WP_Query( array( 'category_name' => 'main-tab-one-content-rus' ) );while ( $query->have_posts() ) { $query->the_post(); ?>
<div role="tabpanel" class="tab-pane fade in active" id="whoweare-tab-main">
   <div class="col-md-5 col-xs-12">
      <?php the_post_thumbnail() ?>
   </div>
   <div class="col-md-7 col-xs-12">
      <p class="margin-p"><?php the_content() ?></p>
   </div>
</div>
<?php } ?> 
<?php $query = new WP_Query( array( 'category_name' => 'main-tab-two-content-rus' ) );while ( $query->have_posts() ) { $query->the_post(); ?>
<div role="tabpanel" class="tab-pane fade" id="specialties-tab-main2">
   <div class="col-md-5 col-xs-12">
      <?php the_post_thumbnail() ?>
   </div>
   <div class="col-md-7 col-xs-12">
      <p class="margin-p"><?php the_content() ?></p>
   </div>
</div>
<?php } ?>
<?php $query = new WP_Query( array( 'category_name' => 'main-tab-three-content-rus' ) );while ( $query->have_posts() ) { $query->the_post(); ?>
<div role="tabpanel" class="tab-pane fade" id="technologies-tab-main3">
   <div class="col-md-5 col-xs-12">
      <?php the_post_thumbnail() ?>
   </div>
   <div class="col-md-7 col-xs-12">
      <p class="margin-p"><?php the_content() ?></p>
   </div>
</div>
<?php } ?>  
<?php $query = new WP_Query( array( 'category_name' => 'main-tabs-rus' ) );while ( $query->have_posts() ) { $query->the_post(); ?>
<section data-aos="fade-right" id="main-info">
   <div class="container">
      <div class="row">
         <div class="col-md-12 col-xs-12">
            <ul class="nav nav-tabs nav-custom padding-top-bottom" role="tablist">
               <li class="nav-item">
                  <a class="nav-link active" href="#whoweare-tab-main" role="tab" data-toggle="tab" id="nav-active"><?php the_title() ?></a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#specialties-tab-main2" role="tab" data-toggle="tab"><?php the_field('rus-tab-two') ?></a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#technologies-tab-main3" role="tab" data-toggle="tab"><?php the_field('rus-tab-three') ?></a>
               </li>
            </ul>
         </div>
      </div>
      <div class="row">
         <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade in active" id="whoweare-tab-main">
               <div class="col-md-5 col-xs-12">
                  <?php the_field('tab_one_img') ?>
               </div>
               <div class="col-md-7 col-xs-12">
                  <p class="margin-p"><?php the_content() ?></p>
               </div>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="specialties-tab-main2">
               <div class="col-md-5 col-xs-12">
                  <?php the_field('tab_two_image') ?>
               </div>
               <div class="col-md-7 col-xs-12">
                  <p class="margin-p"><?php the_field('tab-two-description-rus') ?></p>
               </div>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="technologies-tab-main3">
               <div class="col-md-5 col-xs-12">
                  <?php the_field('tab_three_image') ?>
               </div>
               <div class="col-md-7 col-xs-12">
                  <p class="margin-p"><?php the_field('tab-three-description-rus') ?></p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<?php } ?>
<?php $query = new WP_Query( array( 'category_name' => 'examples-rus' ) );while ( $query->have_posts() ) { $query->the_post(); ?> 
<a class="button gallery" onclick="on()">
   <h2 class="hvr-underline-from-center padding-top-bottom"><?php the_title() ?></h2>
</a>
<?php } ?> 
<?php $query = new WP_Query( array( 'category_name' => 'examples-line-one-rus' ) );while ( $query->have_posts() ) { $query->the_post(); ?> 
<div class="col-xs-12 col-sm-4 col-md-3 hvr-grow">
   <div data-aos="zoom-in" class="card-inner-shadow">
      <?php the_post_thumbnail() ?>
      <br>
      <h3><?php the_title() ?></h3>
      <br>
      <p><?php the_content('') ?></p>
   </div>
</div>
<?php } ?>    
<?php $query = new WP_Query( array( 'category_name' => 'examples-line-two-rus' ) );while ( $query->have_posts() ) { $query->the_post(); ?> 
<div class="col-xs-12 col-sm-6 col-md-4 hvr-grow">
   <div data-aos="zoom-in" class="card-inner-shadow">
      <?php the_post_thumbnail() ?>
      <br>
      <h3><?php the_title() ?></h3>
      <br>
      <p><?php the_content() ?></p>
   </div>
</div>
<?php } ?>
<?php $query = new WP_Query( array( 'category_name' => 'how-can-we-help-rus' ) );while ( $query->have_posts() ) { $query->the_post(); ?>
<section data-aos="fade-up" id="main-contact-bottom" class="contact-scroll padding-top-bottom">
   <div class="container">
      <div class="row">
         <div class="col-md-5 col-xs-12">
         </div>
         <div class="col-md-7 col-xs-12">
            <h2><?php the_title() ?></h2>
            <p><?php the_content() ?></p>
            <a href="#main-contact-form"><button type="button" class="hvr-sweep-to-right btn" id="btn-contact"><?php the_field('contact') ?></button></a>
         </div>
      </div>
   </div>
</section>
<?php } ?>
<?php $query = new WP_Query( array( 'category_name' => 'technologies-rus' ) );while ( $query->have_posts() ) { $query->the_post(); ?>
<h2><?php the_title() ?></h2>
<?php } ?> 
<?php $query = new WP_Query( array( 'category_name' => 'directions-rus' ) );while ( $query->have_posts() ) { $query->the_post(); ?>
<h2><?php the_title() ?></h2>
<?php } ?> 
<?php $query = new WP_Query( array( 'category_name' => 'directions-line-one-rus' ) );while ( $query->have_posts() ) { $query->the_post(); ?>
<div class="col-md-4 directions-cards">
   <?php the_post_thumbnail() ?>
   <br>
   <h3 class="bold"><?php the_title() ?></h3>
   <p><?php the_content() ?></p>
</div>
<?php } ?>   
<?php $query = new WP_Query( array( 'category_name' => 'directions-line-two-rus' ) );while ( $query->have_posts() ) { $query->the_post(); ?>  
<div data-aos="fade-up" class="col-md-6 directions-cards">
   <?php the_post_thumbnail() ?>
   <br>
   <h3 class="bold"><?php the_title() ?></h3>
   <p><?php the_content() ?></p>
</div>
<?php } ?> 
<?php $query = new WP_Query( array( 'category_name' => 'bottom-pure-text-rus' ) );while ( $query->have_posts() ) { $query->the_post(); ?>
<section id="article" class="padding-top-bottom">
   <div data-aos="fade-right" data-aos-duration="1500" class="container">
      <div class="row">
         <div class="col-xs-12 col-md-12">
            <p><?php the_content() ?></p>
         </div>
      </div>
   </div>
</section>
<?php } ?>