 <?php

 //imagens destacadas

 add_theme_support('post-thumbnails');


// pegar o arquivo marca header
require get_template_directory() . '/inc/marca.php';

// pegar o arquivo metabox
require get_template_directory() . '/inc/metabox.php';


// Register Custom Navigation Walker
require_once('inc/wp_bootstrap_navwalker.php');
register_nav_menus( array(
    'primary' => __( 'Menu Principal', 'vof' ),
) );

//Registro de sidebar widgets
if( function_exists('register_sidebar'))
{
    register_sidebar(array(
    'name' => __('Pesquisa'),
    'ID'=>'SIDEBAR - 1',
    'DESCRIPTION'=> __('Dados do blog'),
    'before_title' =>'<h1>',
    'after_title' => '</h1>',
     ));

     register_sidebar(array(
    'name' => __('sidebar'),
    'id' =>'sidebar-internas',
    'description'=> __('Elementos da sidebar single e page'),
    'before_title' =>'<h2>',
    'after_title' => '</h2>',
     ));
}

 ?> 