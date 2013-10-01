<!DOCTYPE html>
<html class="no-js wf-loading" lang="en">
	<head>
		<title><? echo ( is_single() ? 'If you'. wp_title( '',FALSE,'' ) .', then fuck you. - '. get_bloginfo( 'name' ) : get_bloginfo( 'name' ) ); ?></title>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
	  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<? echo ( is_single() ? 'If you'. wp_title( '',FALSE,'' ) .', then fuck you. - '. get_bloginfo( 'name' ) : get_bloginfo( 'name' ) ); ?>">
        <meta name="google-site-verification" content="WyOnO65ODNjdEyNs1NYgEjH9UIa6hpXGKb2viSCUITQ" />
		<?php wp_head(); ?>
        <script>
            !function(a){"use strict";a.picturefill=function(){for(var b=a.document.getElementsByTagName("span"),c=0,d=b.length;d>c;c++)if(null!==b[c].getAttribute("data-picture")){for(var e=b[c].getElementsByTagName("span"),f=[],g=0,h=e.length;h>g;g++){var i=e[g].getAttribute("data-media");(!i||a.matchMedia&&a.matchMedia(i).matches)&&f.push(e[g])}var j=b[c].getElementsByTagName("img")[0];if(f.length){var k=f.pop();j&&"NOSCRIPT"!==j.parentNode.nodeName||(j=a.document.createElement("img"),j.alt=b[c].getAttribute("data-alt")),j.src=k.getAttribute("data-src"),k.appendChild(j)}else j&&j.parentNode.removeChild(j)}},a.addEventListener?(a.addEventListener("resize",a.picturefill,!1),a.addEventListener("DOMContentLoaded",function(){a.picturefill(),a.removeEventListener("load",a.picturefill,!1)},!1),a.addEventListener("load",a.picturefill,!1)):a.attachEvent&&a.attachEvent("onload",a.picturefill)}(this);
        </script>
	</head>
	<body <?php body_class(); ?>>
