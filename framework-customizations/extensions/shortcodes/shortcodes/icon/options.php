<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'icon'       => array(
		'type' => 'icon',
		'label' => __( 'Icon', 'fw' )
	),
	'title'    => array(
		'type'  => 'text',
		'label' => __( 'Title', 'fw' ),
		'desc'  => __( 'Icon title', 'fw' ),
	),
//	custom
	'url'    => array(
		'type'  => 'text',
		'label' => __( 'Url', 'clean' ),
		'desc'  => __( 'If link is necessary', 'clean' ),
	),
);