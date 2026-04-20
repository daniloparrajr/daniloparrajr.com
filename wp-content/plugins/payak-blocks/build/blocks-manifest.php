<?php
// This file is generated. Do not modify it manually.
return array(
	'accordion' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'payak-blocks/accordion',
		'version' => '1.0.1',
		'title' => 'Accordion',
		'category' => 'payak-blocks',
		'supports' => array(
			'interactivity' => true,
			'html' => false,
			'typography' => array(
				'fontSize' => true,
				'lineHeight' => true,
				'__experimentalFontFamily' => true,
				'__experimentalFontWeight' => true,
				'__experimentalFontStyle' => true,
				'__experimentalTextTransform' => true,
				'__experimentalTextDecoration' => true,
				'__experimentalLetterSpacing' => true,
				'__experimentalDefaultControls' => array(
					'fontSize' => true
				)
			),
			'color' => array(
				'gradients' => true,
				'link' => true,
				'__experimentalDefaultControls' => array(
					'background' => true,
					'text' => true
				)
			),
			'spacing' => array(
				'margin' => true,
				'padding' => true,
				'blockGap' => true,
				'__experimentalDefaultControls' => array(
					'margin' => false,
					'padding' => false
				)
			)
		),
		'attributes' => array(
			'headingLevel' => array(
				'type' => 'integer',
				'default' => 3
			),
			'autoclose' => array(
				'type' => 'boolean',
				'default' => false
			)
		),
		'providesContext' => array(
			'payak-blocks/headingLevel' => 'headingLevel'
		),
		'allowedBlocks' => array(
			'payak-blocks/accordion-item'
		),
		'textdomain' => 'payak-blocks',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'render' => 'file:./render.php',
		'viewScriptModule' => 'file:./view.js'
	),
	'accordion-header' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'payak-blocks/accordion-header',
		'version' => '1.0.1',
		'title' => 'Accordion Header',
		'category' => 'payak-blocks',
		'supports' => array(
			'interactivity' => true,
			'html' => false,
			'typography' => array(
				'fontSize' => true,
				'lineHeight' => true,
				'__experimentalFontFamily' => true,
				'__experimentalFontWeight' => true,
				'__experimentalFontStyle' => true,
				'__experimentalTextTransform' => true,
				'__experimentalTextDecoration' => true,
				'__experimentalLetterSpacing' => true,
				'__experimentalDefaultControls' => array(
					'fontSize' => true
				)
			),
			'color' => array(
				'background' => true,
				'text' => true,
				'gradients' => false,
				'__experimentalDefaultControls' => array(
					'background' => true,
					'text' => true
				)
			),
			'spacing' => array(
				'margin' => true,
				'padding' => true,
				'__experimentalDefaultControls' => array(
					'margin' => false,
					'padding' => false
				)
			)
		),
		'attributes' => array(
			'content' => array(
				'type' => 'string'
			)
		),
		'parent' => array(
			'payak-blocks/accordion-item'
		),
		'usesContext' => array(
			'payak-blocks/headingLevel'
		),
		'textdomain' => 'payak-blocks',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'render' => 'file:./render.php',
		'viewScriptModule' => 'file:./view.js'
	),
	'accordion-item' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'payak-blocks/accordion-item',
		'version' => '1.0.1',
		'title' => 'Accordion Item',
		'category' => 'payak-blocks',
		'attributes' => array(
			'openByDefault' => array(
				'type' => 'boolean',
				'default' => false
			),
			'mapZoom' => array(
				'type' => 'integer',
				'default' => 8
			),
			'mapCenter' => array(
				'type' => 'object',
				'default' => array(
					'lng' => 0,
					'lat' => 0
				)
			),
			'mapMarkers' => array(
				'type' => 'array',
				'default' => array(
					
				)
			)
		),
		'supports' => array(
			'interactivity' => true,
			'html' => false,
			'typography' => array(
				'fontSize' => true
			),
			'color' => array(
				'gradients' => false,
				'text' => true,
				'background' => true,
				'__experimentalDefaultControls' => array(
					'background' => true,
					'text' => true
				)
			),
			'spacing' => array(
				'margin' => true,
				'padding' => true,
				'blockGap' => false,
				'__experimentalDefaultControls' => array(
					'margin' => false,
					'padding' => false
				)
			)
		),
		'parent' => array(
			'payak-blocks/accordion'
		),
		'allowedBlocks' => array(
			'payak-blocks/accordion-header',
			'payak-blocks/accordion-panel'
		),
		'textdomain' => 'payak-blocks',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'render' => 'file:./render.php',
		'viewScriptModule' => 'file:./view.js'
	),
	'accordion-panel' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'payak-blocks/accordion-panel',
		'version' => '1.0.1',
		'title' => 'Accordion Panel',
		'category' => 'payak-blocks',
		'supports' => array(
			'interactivity' => true,
			'html' => false,
			'typography' => array(
				'fontSize' => true,
				'lineHeight' => true,
				'__experimentalFontFamily' => true,
				'__experimentalFontWeight' => true,
				'__experimentalFontStyle' => true,
				'__experimentalTextTransform' => true,
				'__experimentalTextDecoration' => true,
				'__experimentalLetterSpacing' => true,
				'__experimentalDefaultControls' => array(
					'fontSize' => true
				)
			),
			'color' => array(
				'gradients' => true,
				'link' => true,
				'__experimentalDefaultControls' => array(
					'background' => true,
					'text' => true
				)
			),
			'spacing' => array(
				'margin' => true,
				'padding' => true,
				'blockGap' => true,
				'__experimentalDefaultControls' => array(
					'margin' => false,
					'padding' => false
				)
			),
			'layout' => true
		),
		'attributes' => array(
			'isOpen' => array(
				'type' => 'boolean'
			)
		),
		'parent' => array(
			'payak-blocks/accordion-item'
		),
		'allowedBlocks' => array(
			'core/paragraph',
			'core/columns',
			'core/buttons',
			'core/heading',
			'core/image',
			'core/group',
			'payak-blocks/advanced-list',
			'payak-blocks/advanced-columns'
		),
		'textdomain' => 'payak-blocks',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'render' => 'file:./render.php',
		'viewScriptModule' => 'file:./view.js'
	)
);
