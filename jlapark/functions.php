<?
function enqueue_styles() {
    wp_enqueue_style( 'style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'enqueue_styles');


add_theme_support( 'post-thumbnails' );


register_nav_menu( 'topMenu', 'topMenu' );


function wpb1_adding_scripts() {
    wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js','','2.2', false);
    wp_enqueue_script('jquery');

    wp_register_script('custom', get_template_directory_uri() . '/js/customjs.js',['jquery'],'2.2', true);
    wp_enqueue_script('custom');

}

add_action( 'wp_enqueue_scripts', 'wpb1_adding_scripts' );



function add_responsive_class($content){

    $content = mb_convert_encoding($content, 'HTML-ENTITIES', "UTF-8");
    $document = new DOMDocument();
    libxml_use_internal_errors(true);
    if($content) {
        $document->loadHTML(utf8_decode($content));
    }
    $imgs = $document->getElementsByTagName('img');
    foreach ($imgs as $img) {
//    $img->setAttribute('class','img-responsive');
        $existing_class = $img->getAttribute('class');
        $img->setAttribute('class', "img-responsive center-block $existing_class");
    }

    $html = $document->saveHTML();
    return $html;
}
add_filter('the_content', 'add_responsive_class');


add_filter('the_excerpt', 'do_shortcode', 11);
add_filter('the_content', 'do_shortcode', 11);


add_filter('show_admin_bar', '__return_false'); // turn off

