<!DOCTYPE html>

<html>

<head>

<title>Retouche photo professionnelles et grand public, photographie, creation graphique - MDcreatis.com</title>

<meta charset="utf-8">
<meta name="keywords" content="retouche, retoucher, photo, photos, images, création graphique, affiche, foyer">
<meta name="description" content="Bienvenue sur le site Internet de MDCreatis">
<link rel="shortcut icon" href="theme/normal/index/favicon.ico">
<link rel="icon" type="image/x-icon" href="theme/normal/index/favicon.ico">

<link rel="stylesheet" type="text/css" href="css/style_reset.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/style_mod.css">
<link rel="stylesheet" type="text/css" href="css/style_main.css">
<link rel="stylesheet" type="text/css" href="css/style_frame.css">

<!--[if lt IE 9]>
<link rel="stylesheet" type="text/css" href="css/style_ie.css" />
<![endif]-->

<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Courgette' rel='stylesheet' type='text/css'>

<!-- NoScript -->
<noscript><link rel="stylesheet" href="css/noscript.css"></noscript>

<!-- jQuery -->
<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="js/modernizr.custom.79639.js"></script>

<!-- IDX NEWS -->
<?php if($_REQUEST['page']=='index' || 'retouch_svc1'){ ?>
<script type="text/javascript" src="js/jquery.slitslider.js"></script> <?php
} ?>

<!-- RET (uCompare) -->
<?php if($_REQUEST['page']=='index' || 'retouch'){ ?>
<script type="text/javascript" src="js/jquery.ucompare.js"></script> <?php
} ?>

<!-- RET (liteAccordion) -->
<?php if($_REQUEST['page']=='retouch' || 'retouch_svc1'){ ?>
<script type="text/javascript" src="js/liteaccordion.jquery.min.js"></script> <?php
} ?>
<?php if($_REQUEST['page']=='index' || 'retouch' || 'test'){ ?>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script> <?php
} ?>

<!--[if lt IE 9]>
	<script>
		document.createElement('figure');
		document.createElement('figcaption');           
	</script>
<![endif]-->

<!-- MOV (Video) -->
<?php if($_REQUEST['page']=='movie'){ ?>
<script type="text/javascript" src="js/init.js"></script> <?php
} ?>

<?php if($_REQUEST['page']=='movie'){ ?>
<script src="http://www.google.com/jsapi" type="text/javascript"></script> <?php
} ?>

<?php include("script/google_mov.php"); ?>












<!-- RET (Accordeon) -->
<?php if($_REQUEST['page']=='test' || 'retouch'){ ?>
<script type="text/javascript" src="js/jquery.contentcarousel.js"></script> <?php
} ?>








<!-- ALL (Slide) -->
<?php if($_REQUEST['page']=='retouch' || 'design' || 'formation'){ ?>
<script type="text/javascript" src="js/jquery.nivo.slider.js"></script> <?php
} ?>

<!-- ALL (Scroll) -->
<script type="text/javascript">
	$(function() {
		$('#header ul a').bind('click',function(event){
			var $anchor = $(this);

			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top
			}, 1500,'easeInOutExpo');
			/*
			if you don't want to use the easing effects:
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top
			}, 1000);
			*/
			event.preventDefault();
		});
	});
</script>

<!-- ALL (Tab) -->
<?php if($_REQUEST['page']=='picture' || 'formation'){ ?>
<script type="text/javascript" src="js/tabbed.layout.js"></script> <?php
} ?>

<!-- ALL (Form) -->
<?php if($_REQUEST['page']=='picture' || 'formation'){ ?>
<script type="text/javascript" src="js/jquery.inputfocus-0.9.min.js"></script> <?php
} ?>
<?php if($_REQUEST['page']=='picture' || 'formation'){ ?>
<script type="text/javascript" src="js/jquery.main.js"></script> <?php
} ?>

<!-- ALL (facebook like) -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/fr_FR/all.js#xfbml=1&appId=416231255075676";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- ALL (twitter like) -->
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

</head>

