<?php

defined('ABSPATH') || exit;

add_action('wp_enqueue_scripts', 'register_styles_scripts');
add_action('init', 'register_post_types');
add_theme_support('post-thumbnails');
add_action('widgets_init', 'register_widgets');
add_image_size( 'team', 350, 400 , true);
add_image_size( 'blog', 1110, 340 , true);
add_filter('comment_form_fields', 'reorder_comment_fields' );
add_action('acf/init', 'be_register_blocks' );


function register_styles_scripts() {
    wp_enqueue_style('jquery-modal', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css');
    wp_enqueue_style('slick-theme', get_template_directory_uri() . '/assets/css/slick-theme.css');
    wp_enqueue_style('slick', get_template_directory_uri() . '/assets/css/slick.css');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css');
    wp_enqueue_style('css_slider', get_template_directory_uri() . '/assets/css/css_slider.css');
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css');
    wp_enqueue_style('animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css');

    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js', [], null, true);
    wp_enqueue_script('jquery-modal', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js', [], null, true);
    wp_enqueue_script('dae82c83f7', 'https://kit.fontawesome.com/dae82c83f7.js', [], null, true);
    wp_enqueue_script('slick-min', get_template_directory_uri() . '/assets/js/slick.min.js', [], null, true);
    wp_enqueue_script('wow', get_template_directory_uri() . '/assets/js/wow.min.js', [], null, true);
    wp_enqueue_script( 'googleapis', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyCDCApeoMpSTQxvz14Yhh09zlsw8FhB2ck&libraries', [], null, true );
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', [], null, true);
};

register_nav_menus([
    'nav_menu' => 'Головне меню'
]);

function register_post_types() {
    register_post_type('slider', [
        'labels' => [
            'name' => 'Головний слайдер',
            'singular_name' => 'Головний слайдер',
            'add_new' => 'Додати слайдер',
            'add_new_item' => 'Додавання слайдера',
            'edit_item' => 'Редагування слайдера',
            'new_item' => 'Новий слайдер',
            'view_item' => 'Дивитись слайдер',
            'search_items' => 'Шукати слайдер',
            'not_found' => 'Не знайдено',
            'not_found_in_trash' => 'Не знайдено в корзині',
            'parent_item_colon' => '',
            'menu_name' => 'Головний слайдер',
        ],
        'public' => true,
        'menu_position' => 4,
        'menu_icon' => 'dashicons-format-aside',
        'hierarchical' => true,
        'supports' => ['title', 'editor', 'comments', 'thumbnail'],
        'has_archive' => true,
        'rewrite' => true,
        'query_var' => true,
    ]);

    register_post_type('about', [
        'labels' => [
            'name' => 'Про нас',
            'singular_name' => 'Про нас',
            'add_new' => 'Додати про нас',
            'add_new_item' => 'Додавання про нас',
            'edit_item' => 'Редагування про нас',
            'new_item' => 'Новий',
            'view_item' => 'Дивитись про нас',
            'search_items' => 'Шукати про нас',
            'not_found' => 'Не знайдено',
            'not_found_in_trash' => 'Не знайдено в корзині',
            'parent_item_colon' => '',
            'menu_name' => 'Про нас',
        ],
        'public' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-format-aside',
        'hierarchical' => true,
        'supports' => ['title', 'comments','excerpt', 'editor', 'thumbnail'],
        'has_archive' => true,
        'rewrite' => true,
        'query_var' => true,
    ]);

    register_post_type('services', [
        'labels' => [
            'name' => 'Наші послуги',
            'singular_name' => 'Наші послуги',
            'add_new' => 'Додати послугу',
            'add_new_item' => 'Додавання послуги',
            'edit_item' => 'Редагування послуги',
            'new_item' => 'Нова послуга',
            'view_item' => 'Дивитись послугу',
            'search_items' => 'Шукати послугу',
            'not_found' => 'Не знайдено',
            'not_found_in_trash' => 'Не знайдено в корзині',
            'parent_item_colon' => '',
            'menu_name' => 'Наші послуги',
        ],
        'public' => true,
        'menu_position' => 6,
        'menu_icon' => 'dashicons-format-aside',
        'hierarchical' => true,
        'supports' => ['title', 'excerpt', 'editor', 'thumbnail'],
        'has_archive' => true,
        'rewrite' => true,
        'query_var' => true,
    ]);

    register_post_type('team', [
        'labels' => [
            'name' => 'Наша команда',
            'singular_name' => 'Наша команда',
            'add_new' => 'Додати в команду',
            'add_new_item' => 'Додавання в команду',
            'edit_item' => 'Редагування команди',
            'new_item' => 'Новий в команді',
            'view_item' => 'Дивитись команду',
            'search_items' => 'Шукати команду',
            'not_found' => 'Не знайдено',
            'not_found_in_trash' => 'Не знайдено в корзині',
            'parent_item_colon' => '',
            'menu_name' => 'Наша команда',
        ],
        'public' => true,
        'menu_position' => 7,
        'menu_icon' => 'dashicons-format-aside',
        'hierarchical' => true,
        'supports' => ['title', 'excerpt', 'thumbnail'],
        'has_archive' => true,
        'rewrite' => true,
        'query_var' => true,
    ]);
};

function getSliders() {
    return get_posts([
        'numberposts' => -1,
        'orderby' => 'date',
        'order' => 'DESC',
        'post_status' => 'publish',
        'post_type' => 'slider',
    ]);
};

function getSchedule() {
    return get_field('schedule', 'options');
};

function getAbout() {
    return get_posts([
        'numberposts' => -1,
        'orderby' => 'date',
        'order' => 'DESC',
        'post_status' => 'publish',
        'post_type' => 'about',
    ]);
};

function getServices() {
    return get_posts([
        'numberposts' => -1,
        'orderby' => 'date',
        'order' => 'DESC',
        'post_status' => 'publish',
        'post_type' => 'services',
    ]);
};

function getTeam() {
    return get_posts([
        'numberposts' => -1,
        'orderby' => 'date',
        'order' => 'DESC',
        'post_status' => 'publish',
        'post_type' => 'team',
    ]);
};

function getBlogs() {
    return get_posts([
        'numberposts' => -1,
        'orderby' => 'date',
        'order' => 'DESC',
        'post_status' => 'publish',
        'post_type' => 'post',
    ]);
};

function getContacts() {
    return get_field('contacts', 'options');
};

if (function_exists('acf_add_options_page')) {

    acf_add_options_page([
        'menu_title' => 'Додаткові поля',
        'menu_slug' => 'theme-general-settings',
        'position' => '5'
    ]);

    acf_add_options_sub_page([
        'page_title' => 'Блок знижок',
        'menu_title' => 'Discount',
        'parent_slug' => 'theme-general-settings',
    ]);
    acf_add_options_sub_page([
        'page_title' => 'Блок розкладу',
        'menu_title' => 'Schedule',
        'parent_slug' => 'theme-general-settings',
    ]);
    acf_add_options_sub_page([
        'page_title' => 'Блок запису на прийом',
        'menu_title' => 'Appointments',
        'parent_slug' => 'theme-general-settings',
    ]);
    acf_add_options_sub_page([
        'page_title' => 'Блок контактів',
        'menu_title' => 'Contacts',
        'parent_slug' => 'theme-general-settings',
    ]);
    acf_add_options_sub_page([
        'page_title' => 'Блок підвалу',
        'menu_title' => 'Footer',
        'parent_slug' => 'theme-general-settings',
    ]);

};

function register_widgets() {
    register_sidebar(['name' => 'Блог', 'id' => 'blog_single']);
};

function format_comment($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment; ?>
    <li class="media comment">
        <div class="img-fluid">
            <?php echo get_avatar( $comment, 75); ?>
        </div>
        <div class="media-body pt-xl-2 pl-3">
            <h5 class="d-inline"><?php comment_author(); ?></h5>
            <span class="date"><?php comment_date('d.m.Y g:i a');?></span>
            <p><?php comment_text(); ?></p>
            <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
        </div>
    </li>
<?php };

function reorder_comment_fields( $fields ){

    $new_fields = [];

    $myorder = ['author','email','comment'];

    foreach( $myorder as $key ){
        $new_fields[ $key ] = $fields[ $key ];
        unset( $fields[ $key ] );
    }
    if( $fields )
        foreach( $fields as $key => $val )
            $new_fields[ $key ] = $val;

    return $new_fields;
};

function getPostTypeName($postType){
    $obj = get_post_type_object( $postType);
    if ($obj->name === 'post') {
        return 'Блог';
    }
    return $obj->labels->singular_name;
}

function be_register_blocks() {
    if( ! function_exists('acf_register_block') )
        return;
    acf_register_block([
        'name'			=> 'gallery',
        'title'			=> 'Галерея',
        'render_template'	=> 'template-parts/gallery-block.php',
        'category'		=> 'formatting',
        'icon'			=> 'format-aside',
        'keywords'		=> array( 'profile', 'user', 'author' ),
    ]);
};

function getGallery() {
    return get_field('gallery');
};

//print_r(getGallery());