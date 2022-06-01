<?php 
// ******************** Clean WP Head ********************** //
function crunchify_remove_version() {
	return '';
}
add_filter('the_generator', 'crunchify_remove_version');
 
remove_action('wp_head', 'rest_output_link_wp_head', 10);
remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);
remove_action('template_redirect', 'rest_output_link_header', 11, 0);
 
remove_action ('wp_head', 'rsd_link');
remove_action( 'wp_head', 'wlwmanifest_link');
remove_action( 'wp_head', 'wp_shortlink_wp_head');
 
function crunchify_cleanup_query_string( $src ){ 
	$parts = explode( '?', $src ); 
	return $parts[0]; 
} 
add_filter( 'script_loader_src', 'crunchify_cleanup_query_string', 15, 1 ); 
add_filter( 'style_loader_src', 'crunchify_cleanup_query_string', 15, 1 );


function my_filter_head() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'my_filter_head');

//Images
add_theme_support( 'post-thumbnails' );

//Menu
add_theme_support('menus');
function register_my_menus() {
    register_nav_menus(
        ['main' => __( 'Main' ),'jogos' => __( 'Jogos' ),'socials' => __( 'Socials' ),'footer' => _('Footer Menu')]
    );
}
add_action('init', 'register_my_menus');

//My Scripts
// function theme_scripts() {
//     wp_register_script('main-script', get_template_directory_uri() . '/js/app.js', [], false, true);

//     wp_enqueue_script('main-script');
// }
// add_action('wp_enqueue_scripts', 'theme_scripts');


//CMB2 Fields
function cmb2_fields_home() {
    $args = ['id' => 'home_box','title' => 'home','object_types' => ['page'], 'show_on' => ['key' => 'page-template', 'value' => 'page-home.php'],];
    $cmb = new_cmb2_box($args);

    $cmb->add_field([
        'name' => 'Footer About',
        'id' => 'footer_about',
        'type' => 'text',
    ]);    

}
add_action('cmb2_admin_init', 'cmb2_fields_home');

function cmb2_fields_social() {
    $args = [
        'id' => 'social_box',
        'title' => 'Socials',
        'object_types' => ['page'],
        'show_on' => ['key' => 'page-template', 'value' => 'page-home.php'],
    ];
    $cmb = new_cmb2_box($args);

    $cmb->add_field([
        'name' => 'Linkedin',
        'id' => 'linkedin',
        'type' => 'text_url',
    ]);

    $cmb->add_field([
        'name' => 'Github',
        'id' => 'github',
        'type' => 'text_url',
    ]);

    $cmb->add_field([
        'name' => 'Twitter',
        'id' => 'twitter',
        'type' => 'text_url',
    ]);

    $cmb->add_field([
        'name' => 'Portfolio',
        'id' => 'portfolio',
        'type' => 'text_url',
    ]);
 
}
add_action('cmb2_init', 'cmb2_fields_social');

function cmb2_field_banner(){
    $args = [
        'id' => 'banner_box',
        'title' => 'Banner',
        'object_types' => ['page']
    ];
    $cmb = new_cmb2_box($args);

    $cmb->add_field([
        'name' => 'Banner',
        'id' => 'banner',
        'type' => 'file',
    ]);
}
add_action('cmb2_init', 'cmb2_field_banner');

function cmb2_field_about(){
    $args = [
        'id' => 'about_box',
        'title' => 'About Background',
        'object_types' => ['page'],
        'show_on' => ['key' => 'page-template', 'value' => 'page-about.php'],
    ];
    $cmb = new_cmb2_box($args);

    $cmb->add_field([
        'name' => 'About Background',
        'id' => 'about_bg',
        'type' => 'file',
    ]);
}
add_action('cmb2_init', 'cmb2_field_about');

//Create WP Query
function custom_post_type_lol() {
    $labels = [
        'name' => 'League of Legends',
        'singular_name' => 'League of Legends',
        'add_new' => 'Adicionar Novo',
        'add_new_item' => 'Adicionar Post',
        'edit_item' => 'Editar LOL Post',
        'new_item' => 'Novo LOL Post',
        'view_item' => 'Ver LOL Post',
        'search_items' => 'Procurar LOL Posts',
        'not_found' => 'Nenhum Post Encontrado',
        'not_found_in_trash' => 'Nenhum Post Encontrado na Lixeira',
        'parent_item_colon' => 'LOL Main',
        'menu_name' => 'League of Legends',
    ];
    $args = [
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => ['title', 'editor', 'thumbnail', 'excerpt', 'comments','page-attributes','post-formats']
    ];
    register_post_type('lol', $args);
}
add_action('init', 'custom_post_type_lol');

function custom_post_type_valorant() {
    $labels = [
        'name' => 'Valorant',
        'singular_name' => 'Valorant',
        'add_new' => 'Adicionar Novo',
        'add_new_item' => 'Adicionar Post',
        'edit_item' => 'Editar Valorant Post',
        'new_item' => 'Novo Valorant Post',
        'view_item' => 'Ver Valorant Post',
        'search_items' => 'Procurar Valorant Posts',
        'not_found' => 'Nenhum Post Encontrado',
        'not_found_in_trash' => 'Nenhum Post Encontrado na Lixeira',
        'parent_item_colon' => 'Valorant Main',
        'menu_name' => 'Valorant',
    ];
    $args = [
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => ['title', 'editor', 'thumbnail', 'excerpt', 'comments','page-attributes','post-formats']
    ];
    register_post_type('valorant', $args);
}
add_action('init','custom_post_type_valorant');

function custom_post_type_tournaments_lol() {
    $labels = [
        'name' => 'Tournaments League of Legends',
        'singular_name' => 'Tournament Leaugue of Legends',
        'add_new' => 'Adicionar Novo',
        'add_new_item' => 'Adicionar Novo Tournament',
        'edit_item' => 'Editar Tournament Post',
        'new_item' => 'Novo Tournament Post',
        'view_item' => 'Ver Tournament Post',
        'search_items' => 'Procurar Tournament Posts',
        'not_found' => 'Nenhum Post Encontrado',
        'not_found_in_trash' => 'Nenhum Post Encontrado na Lixeira',
        'parent_item_colon' => 'Tournament Main',
        'menu_name' => 'Tournaments League of Legends',
    ];
    $args = [
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => ['title', 'editor', 'thumbnail', 'excerpt', 'comments','page-attributes','post-formats']
    ];
    register_post_type('loltournaments', $args);
}
add_action('init', 'custom_post_type_tournaments_lol');

function custom_post_type_tournaments_valorant() {
    $labels = [
        'name' => 'Tournaments Valorant',
        'singular_name' => 'Tournament Valorant',
        'add_new' => 'Adicionar Novo',
        'add_new_item' => 'Adicionar Novo Tournament',
        'edit_item' => 'Editar Tournament Post',
        'new_item' => 'Novo Tournament Post',
        'view_item' => 'Ver Tournament Post',
        'search_items' => 'Procurar Tournament Posts',
        'not_found' => 'Nenhum Post Encontrado',
        'not_found_in_trash' => 'Nenhum Post Encontrado na Lixeira',
        'parent_item_colon' => 'Tournament Main',
        'menu_name' => 'Tournaments Valorant',
    ];
    $args = [
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => ['title', 'editor', 'thumbnail', 'excerpt', 'comments','page-attributes','post-formats']
    ];
    register_post_type('valoranttournaments', $args);
}
add_action('init', 'custom_post_type_tournaments_valorant');


?>