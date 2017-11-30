<?php 

add_filter( 'rwmb_meta_boxes', 'your_prefix_meta_boxes' );
function your_prefix_meta_boxes( $meta_boxes ) {
    $meta_boxes[] = array(
        'title'      => __( 'Informações Adicionais', 'textdomain' ),
        'post_types' => 'post',
        'fields'     => array(
            array(
                'id'   => 'subtitulo',
                'name' => __( 'SubTítulo', 'textdomain' ),
                'type' => 'text',
            ),
            array(
                'id'   => 'resumo',
                'name' => __( 'Resumo', 'textdomain' ),
                'type' => 'textarea',
            ),
            array(
                'id'   => 'data',
                'name' => __( 'Data', 'textdomain' ),
                'type' => 'text',
            ),
        ),
    );
    return $meta_boxes;
}

?>