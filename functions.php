<?php

// Incluindo arquivo do customizer
require get_template_directory().'/inc/customizer.php';

// Remove versão do wordpress
remove_action('wp_head', 'wp_generator');

// Funcao para carregamento dos scripts
function carrega_scripts()
{
    // Enfileirando Bootstrap
    wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', array(), '3.3.7', 'all');
    wp_enqueue_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'), null, true);
    // Enfileirando estilos e scripts próprios
    wp_enqueue_style('template', get_template_directory_uri() . '/css/template.css', array(), '1.0', 'all');
    wp_enqueue_script('template', get_template_directory_uri() . '/js/template.js', array(), null, true);
}

add_action('wp_enqueue_scripts', 'carrega_scripts');
add_action('pre_get_posts', 'num_itens_blog', 1);

// Funcao para carregamento do menu
register_nav_menus(
    array(
        'meu_menu_principal' => 'Menu Principal',
        'menu_rodape' => 'Menu Rodape'
    )
);

// Funcoes de suporte para o tema
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_theme_support('post-formats', array('video', 'image'));
add_theme_support('html5', array('search-form'));

// Registrando pagina lateral
if (function_exists('register_sidebar')) {
    register_sidebar(
        array(
            'name' => 'Barra Lateral 1',
            'id' => 'sidebar-1',
            'description' => 'Barra lateral da página home',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-titulo">',
            'after_title' => '</h2>',
        )
    );
    register_sidebar(
        array(
            'name' => 'Barra Lateral 2',
            'id' => 'sidebar-2',
            'description' => 'Barra lateral da página blog',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-titulo">',
            'after_title' => '</h2>',
        )
    );
    register_sidebar(
        array(
            'name' => 'Redes Sociais',
            'id' => 'redes-sociais',
            'description' => 'Widget para redes sociais',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-titulo">',
            'after_title' => '</h2>',
        )
    );
}

// Alterar o numero de itens por pagina no blog
function num_itens_blog($query)
{
    if (is_admin() || !$query->is_main_query())
        return;
    // verificando  se estamos na pagina BLOG
    if (is_home() || is_search()) {
        $query->set('posts_per_page', 2);
        return;
    }
}

// Mostrar telefone se ele estiver no celular, na página de contato.
function mostrar_telefone()
{
    if (wp_is_mobile()) {
        $resultado = '<div class="telefone">
                        <p>Ligue agora: <a href="tel:06799999999">(067) 99999-9999</a></p>
                      </div>';

        return $resultado;
    }
}

add_shortcode('meutelefone', 'mostrar_telefone');

