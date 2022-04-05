<?php 

    $uri = get_template_directory_uri();
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    add_action("after_setup_theme", "register_menu");
    
    function register_menu(){
        register_nav_menu("socialmedia", "Social media menu");
        register_nav_menu("main menu", "Main menu");
    }


    
    function myScript(){
        wp_enqueue_script('script', $uri . '/func.js', array(), false, true);
        
    }
    add_action('wp_enqueue_scripts', 'myScript');

/*     add_action('wp_head', 'myFunc', 98);
    add_action('wp_footer', 'myFunc', 98);


    function myFunc(){
        echo 'test';
    } */

/*   add_action('my info', 'myInfo');

    function myInfo(){
        echo 'bastard';
    } */
    ?>

<?php
// The proper way to enqueue GSAP script
// wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer );
function theme_gsap_script() {
    wp_enqueue_script( 'gsap-js', 'http://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.1/TweenMax.min.js', array(), false, true );
    wp_enqueue_script( 'gsap-js2', get_template_directory_uri() . '/main.js', array(), false, true );
}
add_action( 'wp_enqueue_scripts', 'theme_gsap_script' );
?>