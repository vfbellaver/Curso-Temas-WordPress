<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php wp_title() ?></title>

    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>


<header>
    <div class="barra-topo">
        <div class="container">
            <div class="row">
                <div class="redes-sociais col-md-9">Redes Sociais</div>
                <div class="pesquisa col-md-3 text-right">
                    <?php get_search_form();?>
                </div>
            </div>
        </div>

    </div>

    <div class="area-menu">
        <div class="container">
            <div class="row">
                <div class="logo col-md-3">Logo</div>
                <div class="menu-principal col-md-9 text-right">
                    <?php wp_nav_menu( array( 'theme_location' => 'meu_menu_principal') ); ?>
                </div>
            </div>
        </div>
    </div>

</header>
