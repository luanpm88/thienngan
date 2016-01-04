<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
<head>

<!-- Basic Page Needs
================================================== -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Black & Green</title>

<meta name="description" content="">
<meta name="author" content="">

<!-- Mobile Specific
================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/thienngan/css/flexslider.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/thienngan/css/style.css">

<link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/thienngan/css/layout.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/thienngan/css/wide.css" name="layout">
<link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/thienngan/css/skins/green.css" name="skins">
<link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/thienngan/css/switcher.css">

<!-- Java Script
================================================== -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/thienngan/js/jquery.flexslider-min.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/thienngan/js/jquery.cookie.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/thienngan/js/superfish.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/thienngan/js/isotope.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/thienngan/js/switcher.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/thienngan/js/main.js"></script>


<script type="text/javascript" charset="utf-8">
  $(window).load(function() {
    $('.flexslider').flexslider({
		controlNav: true,
		animation: 'slide',
		pauseOnHover: true
	});
	
	$('li.active a').addClass("active");
  });
</script>
</head>
<body>

<!-- Wrapper Start -->
<div id="wrap">

	<header>
		<div class="container">
			<div class="one-third column">
				<div class="logo">
					<a href="index.html" style="
    display: block;
    font-family: arial;
    font-size: 28px;
    margin-top: 25px;
">
						Cây <span class="color">Thiên Ngân</span>
					</a>
				</div>
			</div>
			<div class="two-thirds column">
				<nav id="menu" class="navigation">
					
					<jdoc:include type="modules" name="main-menu" />
					
				</nav>
			</div>
			<div class="sixteen columns">
				<hr class="line" />
			</div>
		</div>
	</header>
	<div class="container main">
		<jdoc:include type="message" />
		<jdoc:include type="component" />
			
	</div>
	<footer>
		<div class="container">
			<div class="four columns">
				<div class="company">
					<img src="<?php echo $this->baseurl ?>/templates/thienngan/images/footer_logo.png" />
					<p>Alice drew her foot as far down the chimney as she could and waited till she heard a little animal scratching and scrambling about in the chimney close above her; then she gave one sharp kick and waited to see what would happen next.</p>
				</div>
			</div>
			<div class="four columns">
				<h3>Contact information</h3>
				<p>6334 Central Luminous Boulevard,<br />
				Los Angeles Coast, CA 903211<br /><br />
				Phone: 021-345-124<br />
				Fax: 542-456-765<br /><br />
				E-mail: <a href="#">support@black&amp;orange.com</a></p>
			</div>
			<div class="four columns">
				<h3>Recent tweets</h3>
				<p>If you happen to be in Europe in Oct, join "Test The Web Forward" conf in Paris with editors of Web standards - <a href="#">http://testthewebforward.org/paris-2012.html</a><br />
				<span class="tweet_time">12 hours ago</span><br />
				A useful case-study: How to Make Your Own App Promo Cards - <a href="#">http://bit.ly/PV5cjh</a><br />
				<span class="tweet_time">13 hours ago</span></p>
			</div>
			<div class="four columns">
				<div class="flickr clearfix">
					<h3>From Flickr</h3>
					<a href="#"><img src="images/imgs/flickr/flickr01.jpg" /></a>
					<a href="#"><img src="images/imgs/flickr/flickr02.jpg" /></a>
					<a href="#"><img src="images/imgs/flickr/flickr03.jpg" /></a>
					<a href="#"><img src="images/imgs/flickr/flickr04.jpg" /></a>
					<a href="#"><img src="images/imgs/flickr/flickr03.jpg" /></a>
					<a href="#"><img src="images/imgs/flickr/flickr05.jpg" /></a>
					<a href="#"><img src="images/imgs/flickr/flickr06.jpg" /></a>
					<a href="#"><img src="images/imgs/flickr/flickr01.jpg" /></a>
					<a href="#"><img src="images/imgs/flickr/flickr06.jpg" /></a>
					<a href="#"><img src="images/imgs/flickr/flickr07.jpg" /></a>
					<a href="#"><img src="images/imgs/flickr/flickr08.jpg" /></a>
					<a href="#"><img src="images/imgs/flickr/flickr02.jpg" /></a>
				</div>
			</div>
			<div class="sixteen columns">
				<hr class="line footer" />
			</div>
			<div class="eight columns">
				<div class="copyright">
					&copy; Copyright 2013
					<a href="index.html">Black&amp;Green</a>.
					All Rights Reserved. Theme by 
					<a target="_blank" href="http://themeforest.net/user/The_Silverman">silviu andrei</a>.
				</div>
			</div>
			<div class="eight columns">
				<div class="social">
					<a href="#">
						<img src="images/social/dribbble.png" />
					</a>
					<a href="#">
						<img src="images/social/twitter.png" />
					</a>
					<a href="#">
						<img src="images/social/vimeo.png" />
					</a>
					<a href="#">
						<img src="images/social/facebook.png" />
					</a>
					<a href="#">
						<img src="images/social/youtube.png" />
					</a>
					<a href="#">
						<img src="images/social/digg.png" />
					</a>
				</div>
			</div>
		</div>
	</footer>

</div>
<!-- Wrap End -->

<!-- Start Switcher -->
	<div class="switcher"></div>
<!-- End Switcher -->

</body>
</html>