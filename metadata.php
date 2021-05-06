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
    'title'        => 'nuenemann | Admin Konfiguration',
    'description'  => 'Modul zum Abschalten von Preisalarm etc.',
    'thumbnail'    => '../bn_logo.png',
    'author'       => 'Benedikt Nünemann',
    'email'        => 'benedikt@nuenemann.de',
    'url'          => 'http://www.nuenemann.de',	
    'version'      => '2.0',
    'extend'       => array(
		\OxidEsales\Eshop\Application\Component\Widget\ArticleDetails::class => \nuenemann\bn_admin\Component\Widget\ArticleDetails::class,
		// 'oxviewconfig' =>  'nuenemann/bn_admin/extend/bnadmin_main',
		// 'bnadmin_base' =>  'nuenemann/bn_admin/extend/bnadmin_base',
    ),
	'blocks'	=>	array(
			array(	'template' => 'layout/footer.tpl',
		    		'block'    => 'footer_main',
		    		'file'     => 'views/blocks/bnadmin_newsletter.tpl'
	    	),
			array(	'template' => 'widget/footer/info.tpl',
		    		'block'    => 'footer_information',
		    		'file'     => 'views/blocks/bnadmin_information.tpl'
	    	),
			array(	'template' => 'layout/sidebar.tpl',
		    		'block'    => 'sidebar_shopluperatings',
		    		'file'     => 'views/blocks/bnadmin_shopluperatings.tpl'
	    	),
			array(	'template' => 'layout/sidebar.tpl',
		    		'block'    => 'sidebar_partners',
		    		'file'     => 'views/blocks/bnadmin_partners.tpl'
	    	)	
	),
    'settings' => array(
		array('group' => 'bnadminSettings', 'name' => 'blpricealarm', 'type' => 'bool',  'value' => '', 'position' => 0),
		array('group' => 'bnadminSettings', 'name' => 'blcomments', 'type' => 'bool',  'value' => '', 'position' => 1),
		array('group' => 'bnadminSettings', 'name' => 'blmerkzettel', 'type' => 'bool',  'value' => '', 'position' => 2),
		array('group' => 'bnadminSettings', 'name' => 'blnewsletter', 'type' => 'bool',  'value' => '', 'position' => 4),
		array('group' => 'bnadminSettings', 'name' => 'blshoplupe', 'type' => 'bool',  'value' => '', 'position' => 5),
		array('group' => 'bnadminSettings', 'name' => 'blpartner', 'type' => 'bool',  'value' => '', 'position' => 6)
    )
);