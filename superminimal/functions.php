<?php

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since Superminimal 1.0
 */
if ( ! isset( $content_width ) ) {
	$content_width = 960;
}

if ( ! function_exists( 'superminimal_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 * @since Superminimal 1.0
 */
function superminimal_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on twentyfifteen, use a find and replace
	 * to change 'twentyfifteen' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'superminimal', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 825, 510, true );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'superminimal' )
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
	) );


	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background');

}
endif; // superminimal_setup
add_action( 'after_setup_theme', 'superminimal_setup' );

/**
* Enqueue theme's stylesheet
*/
function superminimal_styles() {
    wp_enqueue_style( 'superminimal-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'superminimal_styles' );

/**
* Include Kirki as a library for this theme 
*/
include_once( dirname( __FILE__ ) . '/inc/kirki/kirki.php' );

/**
* Configure Kirki 
*/
function superminimal_customizer_config() {
	
    /**
     * If you need to include Kirki in your theme,
     * then you may want to consider adding the translations here
     * using your textdomain.
     * 
     * If you're using Kirki as a plugin then you can remove these.
     */

    $strings = array(
        'background-color' => __( 'Background Color', 'superminimal' ),
        'background-image' => __( 'Background Image', 'superminimal' ),
        'no-repeat' => __( 'No Repeat', 'superminimal' ),
        'repeat-all' => __( 'Repeat All', 'superminimal' ),
        'repeat-x' => __( 'Repeat Horizontally', 'superminimal' ),
        'repeat-y' => __( 'Repeat Vertically', 'superminimal' ),
        'inherit' => __( 'Inherit', 'superminimal' ),
        'background-repeat' => __( 'Background Repeat', 'superminimal' ),
        'cover' => __( 'Cover', 'superminimal' ),
        'contain' => __( 'Contain', 'superminimal' ),
        'background-size' => __( 'Background Size', 'superminimal' ),
        'fixed' => __( 'Fixed', 'superminimal' ),
        'scroll' => __( 'Scroll', 'i-max' ),
        'background-attachment' => __( 'Background Attachment', 'superminimal' ),
        'left-top' => __( 'Left Top', 'superminimal' ),
        'left-center' => __( 'Left Center', 'superminimal' ),
        'left-bottom' => __( 'Left Bottom', 'superminimal' ),
        'right-top' => __( 'Right Top', 'superminimal' ),
        'right-center' => __( 'Right Center', 'superminimal' ),
        'right-bottom' => __( 'Right Bottom', 'superminimal' ),
        'center-top' => __( 'Center Top', 'superminimal' ),
        'center-center' => __( 'Center Center', 'superminimal' ),
        'center-bottom' => __( 'Center Bottom', 'superminimal' ),
        'background-position' => __( 'Background Position', 'superminimal' ),
        'background-opacity' => __( 'Background Opacity', 'superminimal' ),
        'ON' => __( 'ON', 'superminimal' ),
        'OFF' => __( 'OFF', 'superminimal' ),
        'all' => __( 'All', 'superminimal' ),
        'cyrillic' => __( 'Cyrillic', 'superminimal' ),
        'cyrillic-ext' => __( 'Cyrillic Extended', 'superminimal' ),
        'devanagari' => __( 'Devanagari', 'superminimal' ),
        'greek' => __( 'Greek', 'superminimal' ),
        'greek-ext' => __( 'Greek Extended', 'superminimal' ),
        'khmer' => __( 'Khmer', 'superminimal' ),
        'latin' => __( 'Latin', 'superminimal' ),
        'latin-ext' => __( 'Latin Extended', 'superminimal' ),
        'vietnamese' => __( 'Vietnamese', 'superminimal' ),
        'serif' => _x( 'Serif', 'font style', 'superminimal' ),
        'sans-serif' => _x( 'Sans Serif', 'font style', 'superminimal' ),
        'monospace' => _x( 'Monospace', 'font style', 'superminimal' ),
    );	

	$args = array(
  
        // Change the logo image. (URL) Point this to the path of the logo file in your theme directory
        // The developer recommends an image size of about 250 x 250
        'logo_image'   => get_template_directory_uri() . '/imgs/logo.png',
  
        // The accent color. This will be used on selected items and control details.
        'color_accent' => '#ca9797',
  
        // The background color. This will be used on sections and panels titles.
        'color_back' => '#f2e6e6',
		
        // Only use this if you are bundling the plugin with your theme (see above)
        'url_path'     => get_stylesheet_directory_uri() . '/inc/kirki/',

        'textdomain'   => 'superminimal',
		
        'i18n'         => $strings,		
		
		
	);
	
	
	return $args;
}
add_filter( 'kirki/config', 'superminimal_customizer_config' );

/**
* Add a Customizer Panel and Sections
*/
function superminimal_demo_panels_sections( $wp_customize ) {
    /**
     * Add panel
     */
    $wp_customize->add_panel( 'sitepoint_demo_panel', array(
        'priority'    => 10,
        'title'       => __( 'SitePoint Demo Panel', 'superminimal' ),
        'description' => __( 'This panel contains the controls to show Kirki integration for our SitePoint demo', 'superminimal' ),
    ) );
    
    /**
     * Add a Section for Site Colors
     */
    $wp_customize->add_section( 'superminimal_text_colors', array(
        'title'       => __( 'Site Text Colors', 'superminimal' ),
        'priority'    => 10,
        'panel'       => 'sitepoint_demo_panel',
        'description' => __( 'From this panel you control the text and link colors of your site.', 'superminimal' ),
    ) );
    
    /**
     * Add a Section for Site Layout
     */
    $wp_customize->add_section( 'superminimal_site_layout', array(
        'title'       => __( 'Site Layout', 'superminimal' ),
        'priority'    => 10,
        'panel'       => 'sitepoint_demo_panel',
        'description' => __( 'From this panel you control the site layout.', 'superminimal' ),
    ) );
    
    /**
     * Add a Section for Footer Text
     */
    $wp_customize->add_section( 'superminimal_footer_text', array(
        'title'       => __( 'Footer Text', 'superminimal' ),
        'priority'    => 10,
        'panel'       => 'sitepoint_demo_panel',
        'description' => __( 'From this panel you can add some text to the footer.', 'superminimal' ),
    ) );
}

add_action( 'customize_register', 'superminimal_demo_panels_sections' );

/**
* Add Fields to the sections
*/
function superminimal_demo_fields( $fields ) {
    /**
     * Add a Field to change the body text color in the Text Colors Section
     */
    $fields[] = array(
        'type'        => 'color',
        'setting'     => 'superminimal_body_color',
        'label'       => __( 'Body Color', 'superminimal' ),
        'description' => __( 'Choose a color for the main body of your site', 'superminimal' ),
        'section'     => 'superminimal_text_colors',
        'priority'    => 10,
        'default'     => '#555555',   
        'output'      => array(
            array(
                'element'  => 'body, p',
                'property' => 'color'
            ),
        ),
        'transport'   => 'postMessage',
        'js_vars'     => array(
            array(
                'element'  => 'body, p',
                'function' => 'css',
                'property' => 'color',
            ),
        )
    );
    
    /**
     * Add a Field to change the links color in the Text Colors Section
     */
    $fields[] = array(
        'type'        => 'color',
        'setting'     => 'superminimal_links_color',
        'label'       => __( 'Links Color', 'superminimal' ),
        'description' => __( 'Choose a color for the site links', 'superminimal' ),
        'section'     => 'superminimal_text_colors',
        'priority'    => 10,
        'default'     => '#de3495',   
        'output'      => array(
            array(
                'element'  => 'a, a:active',
                'property' => 'color'
            ),
        ),
        'transport'   => 'postMessage',
        'js_vars'     => array(
            array(
                'element'  => 'a, a:active',
                'function' => 'css',
                'property' => 'color',
            ),
        )
    );
    
    /**
     * Add a Field to change the footer text color in the Text Colors Section
     */
    $fields[] = array(
        'type'        => 'color',
        'setting'     => 'superminimal_footer_color',
        'label'       => __( 'Footer Color', 'superminimal' ),
        'description' => __( 'Choose a color for the footer area of your site', 'superminimal' ),
        'section'     => 'superminimal_text_colors',
        'priority'    => 10,
        'default'     => '#ffffff',   
        'output'      => array(
            array(
                'element'  => 'footer, footer p, footer a',
                'property' => 'color'
            ),
        ),
        'transport'   => 'postMessage',
        'js_vars'     => array(
            array(
                'element'  => 'footer, footer p, footer a',
                'function' => 'css',
                'property' => 'color',
            ),
        )
    );
    
    /**
     * Add a Field to change the site layout
     */
    $fields[] = array(
        'type'        => 'radio-image',
        'setting'     => 'superminimal_layout',
        'label'       => __( 'Site Layout', 'superminimal' ),
        'description' => __( 'Choose from a left sidebar layout, fullwidh layout, or a right sidebar layout', 'superminimal' ),
        'section'     => 'superminimal_site_layout',
        'default'     => 'fullwidth',
        'priority'    => 10,
        'choices'     => array(
            'sidebar-left' => admin_url() . '/images/align-left-2x.png',
            'fullwidth' => admin_url() . '/images/align-center-2x.png',
            'sidebar-right' => admin_url() . '/images/align-right-2x.png',
        ),
        'transport'   => 'postMessage',
        'js_vars'     => array(
            array(
                'element'  => '#content',
                'function' => 'superminimal_customizer_live_preview'
            ),
        ),
    );
    
    /**
    * Add a checkbox field: if checked the textarea to enter footer text is revealed
    */
    // unchecked
    $fields[] = array(
        'type'        => 'checkbox',
        'setting'     => 'superminimal_reveal_footer_text',
        'label'       => __( 'Change Footer Text', 'superminimal' ),
        'description' => __( 'Check the box if you would like to change the text in the footer area', 'superminimal' ),
        'section'     => 'superminimal_footer_text',
        'default'     => 0,
        'priority'    => 10,   
    );
    
    /**
     * Add a Field to change the footer text only if checkbox is checked
     */
    $fields[] = array(
        'type'        => 'textarea',
        'setting'     => 'superminimal_footer_text',
        'label'       => __( 'Footer Text', 'superminimal' ),
        'description' => __( 'Add some text to the footer', 'superminimal' ),
        'section'     => 'superminimal_footer_text',
        'default'     => 'Superminimal Theme &ndash; Kirki Toolkit Demo for SitePoint',
        'priority'    => 20,
        'required'  => array(
            array(
                'setting'  => 'superminimal_reveal_footer_text',
                'operator' => '==',
                'value'    => 1,
            ),
        ),
        'transport'   => 'postMessage',
        'js_vars'     => array(
            array(
                'element'  => 'footer',
                'function' => 'html'
            ),
        ),
    );
    
    
    return $fields;
    
}

add_filter( 'kirki/fields', 'superminimal_demo_fields' );

/**
* Add AJAX live preview for layout field: enqueue the js script that handles the live preview
*/

function superminimal_customizer_live_preview() {
    wp_enqueue_script( 'superminimal_css_preview', get_template_directory_uri().'/js/superminimal-customizer-preview.js', array( 'customize-preview', 'jquery' ), '', true );
}
add_action( 'customize_preview_init', 'superminimal_customizer_live_preview' );
