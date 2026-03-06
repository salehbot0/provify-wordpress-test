
/**
 * Provify Test Theme functions.
 */

function provify_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption']);
}
add_action('after_setup_theme', 'provify_theme_setup');

function provify_enqueue_styles() {
    wp_enqueue_style('provify-style', get_stylesheet_uri(), [], '1.0.0');
}
add_action('wp_enqueue_scripts', 'provify_enqueue_styles');
