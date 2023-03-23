<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 */

/**
 * This function is called when the theme is activated. This is where we
 * will add all of our scripts and styles.
 * @return void
 */
function theme_scripts_and_styles()
{
    // Load CSS Reset
    wp_enqueue_style(
        'css-reset',
        'https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css',
        [],
        null
    );
    // Load in Google Fonts
    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap',
        [],
        null
    );

    // Load in local CSS {@link https://developer.wordpress.org/reference/functions/wp_enqueue_style/}
    wp_enqueue_style(
        'idm250-styles', // name of the stylesheet
        get_template_directory_uri() . '/dist/styles/main.css', // http://localhost:250/wp-content/themes/idm250-theme-02/dist/styles/main.css
        [], // dependencies
        filemtime(get_template_directory() . '/dist/styles/main.css'), // version number
        'all' // media
    );

    // Load in local JS {@link https://developer.wordpress.org/reference/functions/wp_enqueue_script/}
    wp_enqueue_script(
        'idm250-scripts', // name of the script
        get_template_directory_uri() . '/dist/scripts/main.js', // http://localhost:250/wp-content/themes/idm250-theme-02/dist/scripts/main.js
        [], // dependencies
        filemtime(get_template_directory() . '/dist/scripts/main.js'), // version number
        true // load in footer
    );
}
add_action('wp_enqueue_scripts', 'theme_scripts_and_styles');

add_theme_support ('post-thumbnails');

// add support for pages to have excerpt
add_post_type_support ('page', 'excerpt');

/**
 * Function to register custom post types
 * @link https://developer.wordpress.org/reference/functions/register_post_type/
 * @return void
 */
// function register_custom_post_types()
// {
//     // Register Courses post type
//     register_post_type(
//         'Courses',
//         [
//             'labels' => [
//                 'name' => __('Courses'),
//                 'singular_name' => __('Course')
//             ],
//             'public' => true,
//             'has_archive' => true,
//             'rewrite' => ['slug' => 'course'],
//             'supports' => ['title', 'editor', 'thumbnail', 'excerpt'],
//             'show_in_rest' => true,
//         ]
//     );
// }


/**
 * Register custom taxonomies
 * @link https://developer.wordpress.org/reference/functions/register_taxonomy/
 * @return void
 */
function register_custom_taxonomies()
{
    $args = [
        'labels' => [
            'name' => 'Project Categories',
            'singular_name' => 'Project Category',
            'search_items' => 'Search Project Categories',
            'all_items' => 'All Project Categories',
            'parent_item' => 'Parent Project Category',
            'parent_item_colon' => 'Parent Project Type:',
            'edit_item' => 'Edit Project Category',
            'update_item' => 'Update Project Category',
            'add_new_item' => 'Add New Project Category',
            'new_item_name' => 'New Project Type Name',
            'menu_name' => 'Project Categories',
        ],
        'hierarchical' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => ['slug' => 'project/categories'],
        'show_in_rest' => true,

    ];

    $taxonomy_name = 'project-categories'; // name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces).
    $taxonomy_association = ['projects']; // post types to associate with this taxonomy
    register_taxonomy($taxonomy_name, $taxonomy_association, $args);
}
add_action('init', 'register_custom_taxonomies');


// I dont know where to put this
// 'taxonomies' => ['project-categories']

/**
 * Register custom sidebars
 * @link https://developer.wordpress.org/reference/functions/register_sidebar/
 * @return void
 */
function register_theme_sidebars()
{
    register_sidebar([
        'name' => 'Page Sidebar',
        'id' => 'page-sidebar',
    ]);
}
add_action('widgets_init', 'register_theme_sidebars');

function remove_archive_title_prefix($title)
{
    if (is_category()) {
        $title = single_cat_title('', false);
    } elseif (is_tag()) {
        $title = single_tag_title('', false);
    } elseif (is_author()) {
        $title = '<span class="vcard">' . get_the_author() . '</span>';
    } elseif (is_post_type_archive()) {
        $title = post_type_archive_title('', false);
    } elseif (is_tax()) {
        $title = single_term_title('', false);
    }
    return $title;
}
add_filter('get_the_archive_title', 'remove_archive_title_prefix');

function my_acf_json_save_point($path)
{
    // update path
    $path = get_stylesheet_directory() . '/my-custom-folder';

    // return
    return $path;
}
add_filter('acf/settings/save_json', 'my_acf_json_save_point');


function my_acf_json_load_point( $paths ) {
    
    // remove original path (optional)
    unset($paths[0]);
    
    
    // append path
    $paths[] = get_stylesheet_directory() . '/my-custom-folder';
    
    
    // return
    return $paths;
    
}
add_filter('acf/settings/load_json', 'my_acf_json_load_point');