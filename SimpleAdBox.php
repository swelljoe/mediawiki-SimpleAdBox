<?php
if ( !defined( 'MEDIAWIKI' ) ) {
        die( 'This file is a MediaWiki extension, it is not a valid entry point' );
}

$wgSimpleAdBoxURL = 'none';
$wgSimpleAdBoxDest = 'none';

$wgExtensionCredits['other'][] = array(
        'path'           => __FILE__,
        'name'           => 'SimpleAdBox',
        'version'        => '1.0.0',
        'author'         => 'Joe Cooper',
        'descriptionmsg' => 'simpleadbox-desc',
        'url'            => 'https://github.com/swelljoe/mediawiki-SimpleAdBox',
);

$dir = dirname( __FILE__ ) . '/';
$wgAutoloadClasses['SimpleAdBox'] = $dir . 'SimpleAdBox.class.php';

// Hook to modify the sidebar
$wgHooks['SkinBuildSidebar'][] = 'SimpleAdBox::SimpleAdBoxInSidebar';

// Client-side resource modules
$wgResourceModules['ext.simpleadbox'] = array(
        'styles' => 'resources/ext.simpleadbox.css',
        'localBasePath' => $dir,
        'remoteExtPath' => 'SimpleAdBox',
);

