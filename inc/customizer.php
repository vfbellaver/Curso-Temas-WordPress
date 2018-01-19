<?php
function meupersonalizador($wp_customize)
{
    // Seção copyright
    $wp_customize->add_section('sec_copyright',
        array(
            'title'         => 'Copyright',
            'description'   => 'Seção para o copyright'
        ));

    $wp_customize->add_setting('set_copyright',
        array(
            'type'      => 'theme_mod',
            'default'   => 'Copyright - Todos os direitos reservados'
        ));

    $wp_customize->add_control('ctrl_copyright',
        array(
            'label'         => 'Copyright',
            'description'   => 'Informe o Copyright',
            'section'       => 'sec_copyright',
            'settings'      => 'set_copyright',
            'type'          => 'text'
        ));

    // Seção serviços
    $wp_customize->add_section('sec_servicos',
        array(
            'title'         => 'Serviços',
            'description'   => 'Seção para os serviços'
        ));

    // Serviço 1
    $wp_customize->add_setting('set_servicos1',
        array(
            'default'   => ''
        ));

    $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize,
        'ctrl_servicos_item1',array(
            'label'     => 'Imagem do Serviço 1',
            'width'     => 200,
            'height'    => 200,
            'section'       => 'sec_servicos',
            'settings'      => 'set_servicos1',
        )));

    // Serviço 2
    $wp_customize->add_setting('set_servicos2',
        array(
            'default'   => ''
        ));

    $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize,
        'ctrl_servicos_item2',array(
            'label'     => 'Imagem do Serviço 2',
            'width'     => 200,
            'height'    => 200,
            'section'       => 'sec_servicos',
            'settings'      => 'set_servicos2',
        )));

    // Serviço 3
    $wp_customize->add_setting('set_servicos3',
        array(
            'default'   => ''
        ));

    $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize,
        'ctrl_servicos_item3',array(
            'label'     => 'Imagem do Serviço 3',
            'width'     => 200,
            'height'    => 200,
            'section'       => 'sec_servicos',
            'settings'      => 'set_servicos3',
        )));
}

add_action('customize_register','meupersonalizador');