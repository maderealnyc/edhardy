<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // Google Chrome Frame for IE ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title><?php if(wp_title('')!=null) { wp_title(''); } else { echo ' Ed Hardy '; } ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<?php // icons & favicons ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<!-- Rockwell Font -->
		<script type="text/javascript" src="http://fast.fonts.net/jsapi/e46af804-e87a-4682-b3ae-89da7497cf4c.js"></script>

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/library/js/libs/html5shiv.js"></script>
		<![endif]-->

		<?php // Google Analytics ?>
		<!-- Google Analytics Tag -->
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		  ga('create', 'UA-1444952-31', 'edhardyshop.com');
		  ga('send', 'pageview');
		</script>
		<!-- End Google Analytics tag -->
		<?php // End Google Analytics ?>

		<?php // Quantcast Universal Tag ?>
		<!-- Quantcast Tag -->
		<script type="text/javascript">
		var _qevents = _qevents || [];
		 
		(function() {
		  var elem = document.createElement('script');
		  elem.src = (document.location.protocol == "https:" ? "https://secure" : "http://edge") + ".quantserve.com/quant.js";
		  elem.async = true;
		  elem.type = "text/javascript";
		  var scpt = document.getElementsByTagName('script')[0];
		  scpt.parentNode.insertBefore(elem, scpt);
		})();
		 
		function p2l(pathname,query,hash){
		  pathname = pathname.replace(/\//gi,"__")
		  if(pathname === "__") {
		    pathname = "homepage";
		  }
		  pathname = pathname.replace(/\./gi,"_");
		  query = query.replace(/\?/gi,'-');
		  params = query.split('&');
		  args = []
		  for(arg = 0; arg < params.length; arg++){
		    args.push(params[arg].split('=')[0]);
		  }
		  pathname += args.join('-');
		  pathname += hash.replace(/#/gi,"-");
		  return pathname;
		};
		 
		_qevents.push({
		  qacct:"p-D3qHGKYuVJfvd",
		  labels: "_fp.event." + p2l(document.location.pathname,
		  document.location.search, document.location.hash)
		});
		</script>
		 
		<noscript>
		  <div style="display:none;">
		    <img src="//pixel.quantserve.com/pixel/p-D3qHGKYuVJfvd.gif" border="0" height="1" width="1" alt="Quantcast"/>
		  </div>
		</noscript>
		<!-- End Quantcast tag -->
		<?php // End Quantcast Universal Tag ?>

	</head>

	<body <?php body_class(); ?>>

		<div id="container">

			<header class="header" role="banner">

				<div id="inner-header" class="wrap clearfix">

					<?php // to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> ?>
					<a id="logo" class="image-replacement" href="<?php echo home_url(); ?>" rel="nofollow">Ed Hardy</a>

					<?php // if you'd like to use the site description you can un-comment it below ?>
					<?php // bloginfo('description'); ?>


					<nav role="navigation">
						<?php bones_main_nav(); ?>
						<?php bones_social_links(); ?>
					</nav>

				</div>

			</header>
