<?php

/**
 * Initialization file for the CanonURL extension.
 *
 * Source code:    https://github.com/Abhi-M/CanonURL
 * Documentation:  https://www.mediawiki.org/wiki/Extension:CanonURL
 * Support:        https://github.com/Abhi-M/CanonURL/issues
 *
 * @author Abhi M Balakrishnan https://www.mediawiki.org/wiki/User:Abhi_M_Balakrishnan
 * @license GNU GPL v3
 * @file
 * @ingroup Extensions
 */
if ( !defined( 'MEDIAWIKI' ) ) {
	echo( "This file is an extension to the MediaWiki software and cannot be used standalone.\n" );
	die( 1 );
}

define( 'CanonURL_VERSION', '0.3.0' );

$wgExtensionCredits['other'][] = array(
	'path' => __FILE__,
	'name' => 'CanonURL',
	'author' => array( '[https://www.mediawiki.org/wiki/User:Abhi_M_Balakrishnan Abhi M Balakrishnan]' ),
	'version' => CanonURL_VERSION,
	'url' => 'https://mediawiki.org/wiki/Extension:CanonURL',
	'descriptionmsg' => 'canonurl-desc',
);

$wgExtensionMessagesFiles['CanonURL'] = dirname( __FILE__ ) . '/CanonURL.i18n.php';

$wgHooks['BeforePageDisplay'][]  = 'efCanonURL';

/**
 * @param OutputPage $out
 * @param Skin $skin
 */
function efCanonURL( $out ) {
	$out->setCanonicalUrl( $out->getTitle()->getCanonicalURL() );
	return true;
}
