<?php 

/**
 * Initialization file for the CanonURL extension.
 *
 * Documentation:	 		http://www.mediawiki.org/wiki/Extension:CanonURL
 * Support					http://www.mediawiki.org/wiki/Extension_talk:CanonURL
 * Source code:             https://github.com/Abhi-M/CanonURL/
 *
 * @file CanonURL.php
 * @ingroup CanonURL
 *
 * @licence GNU GPL v3
 *
 * @author Abhi M Balakrishnan http://www.mediawiki.org/wiki/User:Abhi_M_Balakrishnan with the help of Timo Tijhof (http://www.mediawiki.org/wiki/User:Krinkle)
 */ 
	if ( !defined( 'MEDIAWIKI' ) ) {
		echo( "This file is an extension to the MediaWiki software and cannot be used standalone.\n" );
		die( 1 );
	}
	
	define( 'CanonURL_VERSION', '0.3' );
	
	$wgExtensionCredits['other'][] = array(
		'path' => __FILE__,
		'name' => 'CanonURL',
		'version' => CanonURL_VERSION,
		'author' => array( '[http://www.mediawiki.org/wiki/User:Abhi_M_Balakrishnan Abhi M Balakrishnan]' ),
		'url' => 'https://mediawiki.org/wiki/Extension:CanonURL',
		'descriptionmsg' => 'canonurl-desc',
	);
	
	$wgExtensionMessagesFiles['CanonURL'] = dirname( __FILE__ ) . '/CanonURL.i18n.php';
	 
	global $wgHooks;
	$wgHooks['BeforePageDisplay'][]  = 'CanonURL';
	function CanonURL($out)
	{
		$out->addHeadItem( 'canonical',
		'<link rel="canonical" href="' . htmlspecialchars( $out->getTitle()->getCanonicalURL()) . '" />' . "\n"

	);	 
	return true;
}
