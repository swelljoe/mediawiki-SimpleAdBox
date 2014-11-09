mediawiki-SimpleAdBox
=====================

A simple side bar ad block extension for MediaWiki

Installation
============

Copy this directory to the mediawiki/extensions directory. Rename it to SimpleAdBox, while you're at it.

Usage
=====

```php
require_once "$IP/extensions/SimpleAdBox/SimpleAdBox.php";
$wgSimpleAdBoxURL = "/images/banner.png";
$wgSimpleAdBoxDest = "http://www.yourdomain.com";
```

The only supported ad format is a 120Wx240H sidebar banner. There is no plan to add other formats. Because it is simple.
