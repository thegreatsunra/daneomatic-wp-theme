<html lang="en" class="no-js">
<head>
<meta charset="utf-8" />
<!--[if IE]><![endif]-->
<title><?php bloginfo('name'); if ( is_404() ) : _e(' &raquo; ', 'sandbox'); _e('Not Found', 'sandbox'); elseif ( is_front_page() || is_home() ) : _e(' &raquo; ', 'sandbox'); bloginfo('description'); else : wp_title(); endif; ?></title>

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

<meta name="author" content="Dane Petersen" />
<meta name="copyright" content="Copyright (c) 2006-2013 Dane Petersen" />

<meta name="DC.title" content="Daneomatic" />
<meta name="DC.subject" content="Experience Design" />
<meta name="DC.creator" content="Dane Petersen" />

<meta name="ICBM" content="37.86, -122.27" />
<meta name="keywords" content="dane petersen experience design blog weblog website development minnesota oregon indiana university bloomington hcid bay area san francisco berkeley" />
<meta name="description" content="Daneomatic is the weblog of Dane Petersen, a designer who talks too loud and waves his hands too much." />
<meta name="viewport" content="width=970" />

<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon-32.png" />
<link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/images/touch-icon-114.png"/>

<script src="<?php bloginfo('template_url'); ?>/modernizr-1.6.min.js"></script>

	<!--[if IE]><![if gt IE 6]><![endif]--><link rel="stylesheet" type="text/css" media="screen, projection" href="<?php bloginfo('stylesheet_url'); ?>" /><!--[if IE]><![endif]><![endif]-->
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url') ?>" title="<?php echo wp_specialchars(get_bloginfo('name'), 1) ?> <?php _e('Posts RSS feed', 'sandbox'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url') ?>" />
<?php wp_head() ?>

</head>

<body class="<?php sandbox_body_class() ?>">

<div id="wrapper" class="hfeed">

	<!--[if lt IE 7]><div class="fuckyouie" style="color: #c00;">
		<p>Yikes! It appears you are visiting Daneomatic in Microsoft Internet Explorer 6 or lower, which does not display the design of this website. All of the content is here, but it's damn ugly, eh? For a more pleasant experience, I recommend you use a web browser that is less than nine years old. <a href="http://www.mozilla.com/firefox">Firefox</a> or <a href="http://www.google.com/chrome">Google Chrome</a> are both fine choices, or <a href="http://www.microsoft.com/windows/internet-explorer/default.aspx">Internet Explorer 7 or above</a> will all do as well.</p>
	</div><![endif]-->
		
	<nav class="topnavigation">
	<div class="container">
		<ul>
			<li><a href="/">Home</a></li>
			<li><a href="http://brainsideout.com/" rel="external" title="Dane's Online Portfolio at Brainside Out">Portfolio</a></li>
			<li><a href="http://flickr.com/photos/thegreatsunra" rel="external" title="Dane's Photography at Flickr">Flickr</a></li>
			<li><a href="http://twitter.com/thegreatsunra" rel="external" title="Dane's terse words at Twitter">Twitter</a></li>
			<li><a href="http://thegreatsunra.tumblr.com/" rel="external" title="Dane's randomly awesome discoveries at Tumblr">Tumblr</a></li>
			<li><a href="http://vimeo.com/thegreatsunra" rel="external" title="Dane's videos at Vimeo">Vimeo</a></li>
			<li><a href="http://www.linkedin.com/in/danepetersen" rel="external" title="Dane's Profile at LinkedIn">LinkedIn</a></li>
		</ul>
	</div>
	</nav>
	
	<div class="header" id="header">
	<div class="container">
		<h1 id="blog-title"><span><a href="/" title="<?php bloginfo('name') ?>" rel="home"><?php bloginfo('name') ?></a></span></h1>
		<div id="blog-description"><p><?php bloginfo('description') ?></p></div>
	</div>
	</div><!--  #header -->
