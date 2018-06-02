<?php 


add_action('wp_enqueue_scripts', 'add_scripts');
function add_scripts(){
	wp_enqueue_style('bootstrap_css', get_template_directory_uri().'/css/bootstrap.min.css');
	wp_enqueue_script('bootstrap_js', get_template_directory_uri().'/js/bootstrap.min.js');
}


add_action('init', 'news_register');

add_theme_support('post-thumbnails', array('news_posts'));  
  
function news_register() {  
    $args = array(  
        'label' => 'Новости',  
        'singular_label' => "Новость",  
        'public' => true,  
        'show_ui' => true,  
        'menu_position' => 8,
        'capability_type' => 'post',  
        'hierarchical' => false,  
        'rewrite' => true,  
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_icon' => 'dashicons-media-default' 
       );  
  
    register_post_type("news_posts" , $args );  
    set_post_thumbnail_size( 500 );
}  

add_shortcode( 'type_hw' , 'type_hello' );

function type_hello(){
	return "<div class='test-shortcode'>Hello Wordl!</div>";
}


function true_register_wp_sidebars() {
 
	/* Главная -  сайдбар */
	register_sidebar(
		array(
			'id' => 'true_side', // уникальный id
			'name' => 'Главная', // название сайдбара
			'description' => 'Простой сайдбар', // описание
			'before_widget' => '<div id="%1$s" class="side widget %2$s">', // по умолчанию виджеты выводятся <li>-списком
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">', // по умолчанию заголовки виджетов в <h2>
			'after_title' => '</h3>'
		)
	);
 
}
 
add_action( 'widgets_init', 'true_register_wp_sidebars' );


 ?>