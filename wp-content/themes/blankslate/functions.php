<?php
add_action( 'after_setup_theme', 'blankslate_setup' );
function blankslate_setup()
{
load_theme_textdomain( 'blankslate', get_template_directory() . '/languages' );
add_theme_support( 'title-tag' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );
global $content_width;
if ( ! isset( $content_width ) ) $content_width = 640;
register_nav_menus(
array( 'main-menu' => __( 'Main Menu', 'blankslate' ) )
);
}
add_action( 'wp_enqueue_scripts', 'blankslate_load_scripts' );
function blankslate_load_scripts()
{
wp_enqueue_script( 'jquery' );

wp_register_script( 'scripts.js', get_template_directory_uri() . '/js/scripts.js', '', NULL, false);
wp_register_script( 'classie.js', get_template_directory_uri() . '/js/classie.js', '', NULL, false);
wp_register_script( 'jquery.slicknav.min.js', get_template_directory_uri() . '/js/jquery.slicknav.min.js', array('jquery'), NULL, false);

wp_register_style( 'normalize.css', get_template_directory_uri() . '/css/normalize.css', '', '', 'screen');
wp_register_style( 'titillium', 'https://fonts.googleapis.com/css?family=Titillium+Web', '', '', 'screen');
wp_register_style( 'main.css', get_template_directory_uri() . '/css/main.css', '', '', 'screen');
wp_register_style( 'slicknav.css', get_template_directory_uri() . '/css/slicknav.css', '', '', 'screen');
wp_register_style( 'header.css', get_template_directory_uri() . '/css/header.css', '', '', 'screen');
wp_register_style( 'index.css', get_template_directory_uri() . '/css/index.css', '', '', 'screen');

wp_enqueue_script( 'scripts.js' );
wp_enqueue_script( 'classie.js' );
wp_enqueue_script( 'jquery.slicknav.min.js' );

wp_enqueue_style( 'normalize.css' );
wp_enqueue_style( 'titillium' );
wp_enqueue_style( 'main.css' );
wp_enqueue_style( 'slicknav.css' );
wp_enqueue_style( 'header.css' );
wp_enqueue_style( 'index.css' );
}
add_action( 'comment_form_before', 'blankslate_enqueue_comment_reply_script' );
function blankslate_enqueue_comment_reply_script()
{
if ( get_option( 'thread_comments' ) ) { wp_enqueue_script( 'comment-reply' ); }
}
add_filter( 'the_title', 'blankslate_title' );
function blankslate_title( $title ) {
if ( $title == '' ) {
return '&rarr;';
} else {
return $title;
}
}
add_filter( 'wp_title', 'blankslate_filter_wp_title' );
function blankslate_filter_wp_title( $title )
{
return $title . esc_attr( get_bloginfo( 'name' ) );
}
add_action( 'widgets_init', 'blankslate_widgets_init' );
function blankslate_widgets_init()
{
register_sidebar( array (
'name' => __( 'Sidebar Widget Area', 'blankslate' ),
'id' => 'primary-widget-area',
'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
'after_widget' => "</li>",
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
}
function blankslate_custom_pings( $comment )
{
$GLOBALS['comment'] = $comment;
?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
<?php
}
add_filter( 'get_comments_number', 'blankslate_comments_number' );
function blankslate_comments_number( $count )
{
if ( !is_admin() ) {
global $id;
$comments_by_type = &separate_comments( get_comments( 'status=approve&post_id=' . $id ) );
return count( $comments_by_type['comment'] );
} else {
return $count;
}
}
