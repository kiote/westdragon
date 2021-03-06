<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php
if(function_exists('language_attributes')) { 
	language_attributes(); 
}else{
	echo "<h1>Oops:</h1><font color=\"red\">This theme only works with WordPress 2.1.* or higher. You seem to have an <b>outdated version</b> of wordpress. Please download the latest <a href=\"http://www.wordpress.com\">WordPress</a> to use this theme and also get the latest security patches.</font>";
//	exit();
}
?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>

<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory') ?>/reset-fonts-grids-tabs.css" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_head(); ?>
</head>
<body>
<div id="doc" class="yui-t1">
<table border="0">
    <tr valign="bottom">
        <td>
            <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000"
            codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,0,0"
            width="360" height="97" id="mitki" align="middle">
            <param name="allowScriptAccess" value="always" />
            <param name="movie" value="<?php bloginfo('stylesheet_directory'); ?>/images/left.swf" />
            <param name="quality" value="high" />
            <param name="bgcolor" value="#000000" />
            <embed src="<?php bloginfo('stylesheet_directory'); ?>/images/left.swf" quality="high" bgcolor="#000000" width="360" height="97" name="mitki"
             align="middle" allowScriptAccess="sameDomain" type="application/x-shockwave-flash"
             pluginspage="http://www.macromedia.com/go/getflashplayer" />
            </object>
        </td>

        <td>
            <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000"
            codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,0,0"
            width="285" height="396" id="mitki" align="middle">
            <param name="allowScriptAccess" value="always" />
            <param name="movie" value="<?php bloginfo('stylesheet_directory'); ?>/images/logo.swf" />
            <param name="quality" value="high" />
            <param name="bgcolor" value="#000000" />
            <embed src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.swf" quality="high" bgcolor="#000000" width="285" height="396" name="mitki"
             align="middle" allowScriptAccess="sameDomain" type="application/x-shockwave-flash"
             pluginspage="http://www.macromedia.com/go/getflashplayer" />
            </object>
            
        </td>

        <td>
            <a href="#"><img src="/wp-content/themes/wpthemegen/images/kids.jpg" alt="kids" /></a>
            <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000"
            codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,0,0"
            width="355" height="97" id="mitki" align="left">
            <param name="allowScriptAccess" value="always" />
            <param name="movie" value="<?php bloginfo('stylesheet_directory'); ?>/images/right.swf" />
            <param name="quality" value="high" />
            <param name="bgcolor" value="#000000" />
            <embed src="<?php bloginfo('stylesheet_directory'); ?>/images/right.swf" quality="high" bgcolor="#000000" width="355" height="97" name="mitki"
             align="middle" allowScriptAccess="sameDomain" type="application/x-shockwave-flash"
             pluginspage="http://www.macromedia.com/go/getflashplayer" />
            </object>
        </td>
    </tr>
</table>
<div class="tail"></div>
