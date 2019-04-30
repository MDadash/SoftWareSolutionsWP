<?php
function theme_name_scripts() {
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style( 'hover', get_template_directory_uri() . '/css/hover.css');
    wp_enqueue_style( 'aos', get_template_directory_uri() . '/css/aos.css');    
    wp_enqueue_style( 'fonts', get_template_directory_uri() . '/css/fonts.css');
    wp_enqueue_style( 'font', get_template_directory_uri() . '/css/font-awesome.min.css');
        wp_enqueue_style( 'magnific-styles', get_template_directory_uri() . '/css/magnific-popup.css');
    wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style( 'slick', get_template_directory_uri() . '/css/slick.css');
    wp_enqueue_style( 'slick-lightbox', get_template_directory_uri() . '/css/slick-lightbox.css');
    wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/css/slick-theme.css');

    
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.3.1.min.js');
    wp_enqueue_script('magnific', get_template_directory_uri() . '/js/jquery.magnific-popup.js');
    wp_enqueue_script('nicescroll', get_template_directory_uri() . '/js/jquery.nicescroll.js');
    wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js');
    wp_enqueue_script('slider', get_template_directory_uri() . '/js/aos.js');
    wp_enqueue_script('easyscroll', get_template_directory_uri() . '/js/jquery.easeScroll.js');
    wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js');
    wp_enqueue_script('jquery-mask', get_template_directory_uri() . '/js/jquery.mask.js');
    wp_enqueue_script('slick', get_template_directory_uri() . '/js/slick.min.js');
    wp_enqueue_script('slick-lightbox', get_template_directory_uri() . '/js/slick-lightbox.js');
}
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

register_nav_menus(array(
  'navbar'    => 'Верхнее меню',    //Название месторасположения меню в шаблоне
  'bottom' => 'Нижнее меню'      //Название другого месторасположения меню в шаблоне
));
/*Register menu*/

add_theme_support( 'post-thumbnails' );

function set_excerpt_length(){
    return 20;
}
add_filter('excerpt_length','set_excerpt_length');

function font_awesome() {
  if (!is_admin()) {
    wp_register_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css');
    wp_enqueue_style('font-awesome');
  }
}
add_action('wp_enqueue_scripts', 'font_awesome');

/**вывод страниц отдельными постами **/
        add_filter('single_template', 'check_for_category_single_template');
        function check_for_category_single_template( $t ){
            foreach( (array) get_the_category() as $cat ){
                if ( file_exists(TEMPLATEPATH . "/single-category-{$cat->slug}.php") ) return TEMPLATEPATH . "/single-category-{$cat->slug}.php";
                if($cat->parent){
                    $cat = get_the_category_by_ID( $cat->parent );
                    if ( file_exists(TEMPLATEPATH . "/single-category-{$cat->slug}.php") ) return TEMPLATEPATH . "/single-category-{$cat->slug}.php";
                }
            }
            return $t;
        }

remove_filter( 'the_content', 'wpautop' );

add_action( 'wp_footer', 'mycustom_wp_footer' );
 
function mycustom_wp_footer() {
?>
<script type="text/javascript">
document.addEventListener( 'wpcf7mailsent', function( event ) {
    gtag('event', 'sendForm', {'event_category': 'ContactForm', 'event_action': 'Submit' });
}, false );
</script>
<?php
}

add_action( 'admin_print_footer_scripts', 'add_sheensay_quicktags' );
function add_sheensay_quicktags() {
   if (wp_script_is('quicktags')) :
?>
    <script type="text/javascript">
      if (QTags) {  
        // QTags.addButton( id, display, arg1, arg2, access_key, title, priority, instance );
        QTags.addButton( 'sheens_p', 'p', '<p>', '</p>', 'p', 'Параграф', 1 );
        QTags.addButton( 'sheens_h2', 'h2', '<h2>', '</h2>', 'h', 'Заголовок 2 уровня', 2 );
        QTags.addButton('line', 'line', '<div class="sqare">', '</div>');  
      }
    </script>
<?php endif;
}
?>

