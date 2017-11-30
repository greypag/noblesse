<?php
return array(
	'name' => __( 'Google+ Button', 'js_composer' ),
	'base' => 'vc_googleplus',
	'icon' => 'icon-wpb-application-plus',
	'category' => __( 'Social', 'js_composer' ),
	'description' => __( 'Recommend on Google', 'js_composer' ),
	'params' => array(
		array(
			'type' => 'dropdown',
			'heading' => __( 'Button size', 'js_composer' ),
			'param_name' => 'type',
			'admin_label' => true,
			'value' => array(
				__( 'Standard', 'js_composer' ) => 'standard',
				__( 'Small', 'js_composer' ) => 'small',
				__( 'Medium', 'js_composer' ) => 'medium',
				__( 'Tall', 'js_composer' ) => 'tall',
			),
			'description' => __( 'Select button size.', 'js_composer' ),
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Annotation', 'js_composer' ),
			'param_name' => 'annotation',
			'admin_label' => true,
			'value' => array(
				__( 'Bubble', 'js_composer' ) => 'bubble',
				__( 'Inline', 'js_composer' ) => 'inline',
				__( 'None', 'js_composer' ) => 'none',
			),
			'std' => 'bubble',
			'description' => __( 'Select type of annotation.', 'js_composer' ),
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Width', 'js_composer' ),
			'param_name' => 'widget_width',
			'dependency' => array(
				'element' => 'annotation',
				'value' => array( 'inline' ),
			),
			'description' => __( 'Minimum width of 120px to display. If annotation is set to "inline", this parameter sets the width in pixels to use for button and its inline annotation. Default width is 450px.', 'js_composer' ),
		),
		array(
			'type' => 'css_editor',
			'heading' => __( 'CSS box', 'js_composer' ),
			'param_name' => 'css',
			'group' => __( 'Design Options', 'js_composer' ),
		),
	),
);