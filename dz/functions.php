<?php
add_action('after_setup_theme', 'theme_register_nav_menu');
function theme_register_nav_menu()
{
    register_nav_menu('top', 'Главное меню');
    register_nav_menu( 'footer', 'Подвальное меню');
};

add_filter('navigation_markup_template', 'customNavigation', 10, 2);
function customNavigation($template, $class)
{
    return '<nav class="col full pagination">%3$s</nav>';
};

add_filter('paginate_links_output', 'customPaginateLinks');
function customPaginateLinks($html){
    global $wp_query, $paged;
    $pages = explode("\n", $html);

    $html = '';
    if ($paged >= 1) {
        $html = array_shift($pages);
    }
    if ($paged < $wp_query->max_num_pages) {
        $html .= array_pop($pages);
    }
    return $html;
};
add_action('wp_enqueue_scripts', 'loadThemeScripts');
function loadThemeScripts(){
    wp_enqueue_script('modernizr', get_template_directory_uri().'/assets/js/modernizr.js', [], '1');
    wp_enqueue_script('jquery', get_template_directory_uri().'/assets/js/jquery.flexslider.js', [], '1', true);
    wp_enqueue_script('doubletaptogo', get_template_directory_uri().'/assets/js/doubletaptogo.js', ['jquery'], '1', true);
    wp_enqueue_script('init', get_template_directory_uri().'/assets/js/init.js', ['doubletaptogo'], '1', true);
};
add_action('widgets_init', 'widgetInit');
function widgetInit(){
    register_sidebar([
        'name' => 'Правая колонка',
        'id' => 'right-sidebar',
        'before_widget' => '<div class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="h6">',
        'after_title' => '</h3>',
    ]);
};

