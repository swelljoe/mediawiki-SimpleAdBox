<?php
class SimpleAdBox {
        static function SimpleAdBoxInSidebar( $skin, &$bar ) {
		// XXX This doesn't seem to be working to load CSS
        	$skin->getOutput()->addModules( 'ext.simpleadbox' );
		global $wgSimpleAdBoxURL, $wgSimpleAdBoxDest;
		$bar['Sponsored by'] = "<div id='adunit'><p><a href=\"$wgSimpleAdBoxDest\"><img style=\"border: 1px solid #ccc\" class=\"simpleadbox\" alt=\"Ad banner\" src=\"$wgSimpleAdBoxURL\"></a></p></div>\n";

		return true;
	}
}
