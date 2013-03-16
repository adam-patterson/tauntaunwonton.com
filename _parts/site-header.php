<?php
	require_once('_config/config.php');
	$page = substr($_SERVER['REQUEST_URI'], 1);
?>
<!doctype html>
<html lang=en>
	<head>
		<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
		<meta http-equiv="content-script-type" content="application/javascript">
	
		<title>TauntaunWonton Consulting</title>
	
	<!--	<link rel="icon" type="image/png" href="/_resources/images/favicon.png"> -->
		
		<meta name="author" content="TauntaunWonton Development and Consulting">
		<meta name="robots" content="index,nofollow">
		
		<!-- Pull in webfonts -->
		<?php
		/*
		Open sans: Site titles and headings
		Merriweather: content body text
		Volkorn: quotes, blockquotes, and pop-out text
		Lato: Post headings
		*/
		?>
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet" type="text/css">
		<link href="http://fonts.googleapis.com/css?family=Merriweather:400,900" rel="stylesheet" type="text/css">
		<link href="http://fonts.googleapis.com/css?family=Vollkorn:400italic,400" rel="stylesheet" type="text/css">
		<link href="http://fonts.googleapis.com/css?family=Lato:100,900" rel="stylesheet" type="text/css">
		
		<!-- Font Awesome -->
		<link href="/resources/styles/font-awesome.min.css" rel="stylesheet" type="text/css">

		<!-- Tauntaun specifics -->
		<link href="/resources/styles/chrome.css" rel="stylesheet" type="text/css">
		<link href="/resources/styles/main.css" rel="stylesheet" type="text/css">
		<!-- Page specific -->
		<link href="/resources/styles/<?= $page; ?>.css" rel="stylesheet" type="text/css">

		<!-- Pull in jQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="application/javascript"></script>
	
		<!-- Tag for browser/feature specificity -->
		<script type="application/javascript">
		function css_browser_selector(u){var ua = u.toLowerCase(),is=function(t){return ua.indexOf(t)>-1;},g='gecko',w='webkit',s='safari',o='opera',h=document.documentElement,b=[(!(/opera|webtv/i.test(ua))&&/msie\s(\d)/.test(ua))?('ie ie'+RegExp.$1):is('firefox/2')?g+' ff2':is('firefox/3.5')?g+' ff3 ff3_5':is('firefox/3')?g+' ff3':is('gecko/')?g:is('opera')?o+(/version\/(\d+)/.test(ua)?' '+o+RegExp.$1:(/opera(\s|\/)(\d+)/.test(ua)?' '+o+RegExp.$2:'')):is('konqueror')?'konqueror':is('chrome')?w+' chrome':is('iron')?w+' iron':is('applewebkit/')?w+' '+s+(/version\/(\d+)/.test(ua)?' '+s+RegExp.$1:''):is('mozilla/')?g:'',is('j2me')?'mobile':is('iphone')?'iphone':is('ipod')?'ipod':is('mac')?'mac':is('darwin')?'mac':is('webtv')?'webtv':is('win')?'win':is('freebsd')?'freebsd':(is('x11')||is('linux'))?'linux':'','js']; c = b.join(' '); h.className += ' '+c; return c;}; css_browser_selector(navigator.userAgent);
		</script>
	</head>
	<?php flush(); /* improves browser page load performance for most browsers */ ?>
	<body>