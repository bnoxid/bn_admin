<?php
/**
 * Metadata version
 */
$sMetadataVersion = '2.0';
/**
 * Module information
 */
$aModule = array(
    'id'           => 'bn_admin',
    'title'        => 'bnoxid | Admin Konfiguration',
    'description'  => 'Modul zum Abschalten von Preisalarm etc.',
    'thumbnail'    => '../bn_logo.png',
    'author'       => 'Benedikt Nünemann',
    'email'        => 'benedikt@nuenemann.net',
    'url'          => 'https://www.nuenemann.net',	
    'version'      => '2.0',
    'extend'       => [
		\OxidEsales\Eshop\Application\Component\Widget\ArticleDetails::class => bnoxid\bn_admin\Component\Widget\ArticleDetails::class,
    ],
	'blocks'	=>	[
		[	'template' => 'layout/sidebar.tpl',
			'block'    => 'sidebar_shopluperatings',
			'file'     => 'views/blocks/bnadmin_shopluperatings.tpl'
	    	],
		[	'template' => 'layout/sidebar.tpl',
			'block'    => 'sidebar_partners',
			'file'     => 'views/blocks/bnadmin_partners.tpl'
	    	]	
	],
    'settings' => [
		['group' => 'bnadminSettings', 'name' => 'blpricealarm', 'type' => 'bool',  'value' => false, 'position' => 0],
		['group' => 'bnadminSettings', 'name' => 'blmerkzettel', 'type' => 'bool',  'value' => false, 'position' => 2],
		['group' => 'bnadminSettings', 'name' => 'blshoplupe', 'type' => 'bool',  'value' => false, 'position' => 5],
		['group' => 'bnadminSettings', 'name' => 'blpartner', 'type' => 'bool',  'value' => false, 'position' => 6]
    ]
);
