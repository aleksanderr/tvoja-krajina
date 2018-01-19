<?php 
if (!defined( 'FW' )) die('Forbidden');

$options = array(
    'intro' => array(
        'title' => __('Головний блок', 'tvoja-krajina-2018'),
        'options' => array(

            'intro-bg' =>  array(
                'type'  => 'upload',
                'label' => __('Фонове зображення', 'tvoja-krajina-2018'),
                'images_only' => true,
            )

        ),
    ),

    'about' => array(
        'title' => __('Про нас', 'tvoja-krajina-2018'),
        'options' => array(

            'about-primary-text' =>  array(
                'type'  => 'wp-editor',
                'label' => __('Головний текст', 'tvoja-krajina-2018'),
                'size' => 'small',
                'editor_height' => 200,
                'wpautop' => false,
                'editor_type' => false, 
            ),
            'about-additional-text' =>  array(
                'type'  => 'wp-editor',
                'label' => __('Додатковий текст', 'tvoja-krajina-2018'),
                'size' => 'small',
                'editor_height' => 200,
                'wpautop' => false,
                'editor_type' => false, 
            ),
            'subintro-bg' =>  array(
                'type'  => 'upload',
                'label' => __('Фонове зображення', 'tvoja-krajina-2018'),
                'images_only' => true,
            )

        ),
    ),

    'it-is' => array(
        'title' => __('Твоя країна - це', 'tvoja-krajina-2018'),
        'options' => array(

            'it-is-title' =>  array(
                'type'  => 'text',
                'label' => __('Заголовок', 'tvoja-krajina-2018'),
            ),
            'it-is-label-1' =>  array(
                'type'  => 'wp-editor',
                'label' => __('Текст для 1-го елементу', 'tvoja-krajina-2018'),
                'size' => 'small',
                'editor_height' => 100,
                'wpautop' => false,
                'editor_type' => false, 
            ),
            'it-is-label-2' =>  array(
                'type'  => 'wp-editor',
                'label' => __('Текст для 2-го елементу', 'tvoja-krajina-2018'),
                'size' => 'small',
                'editor_height' => 100,
                'wpautop' => false,
                'editor_type' => false, 
            ),
            'it-is-label-3' =>  array(
                'type'  => 'wp-editor',
                'label' => __('Текст для 3-го елементу', 'tvoja-krajina-2018'),
                'size' => 'small',
                'editor_height' => 100,
                'wpautop' => false,
                'editor_type' => false, 
            )

        ),
    ),

    'statistics' => array(
        'title' => __('Статистика', 'tvoja-krajina-2018'),
        'options' => array(

            'statistics-number-1' =>  array(
                'type'  => 'text',
                'label' => __('Цифра для 1-го лічильника', 'tvoja-krajina-2018'),
            ),
            'statistics-label-1' =>  array(
                'type'  => 'textarea',
                'label' => __('Текст для 1-го лічильника', 'tvoja-krajina-2018'),
            ),
            'statistics-number-2' =>  array(
                'type'  => 'text',
                'label' => __('Цифра для 2-го лічильника', 'tvoja-krajina-2018'),
            ),
            'statistics-label-2' =>  array(
                'type'  => 'textarea',
                'label' => __('Текст для 2-го лічильника', 'tvoja-krajina-2018'),
            ),
            'statistics-number-3' =>  array(
                'type'  => 'text',
                'label' => __('Цифра для 3-го лічильника', 'tvoja-krajina-2018'),
            ),
            'statistics-label-3' =>  array(
                'type'  => 'textarea',
                'label' => __('Текст для 3-го лічильника', 'tvoja-krajina-2018'),
            ),

        ),
    ),
);
?>