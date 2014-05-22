<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	<link rel="stylesheet" href="<?php Hark::CacheBuster('assets/styles/generated/template.css') ?>"/>

	<title><?php echo $Title; if (!$HideSiteTitle && $Title) echo " &ndash; "; if (!$HideSiteTitle) echo "Brand Central"; ?></title>
	<meta name="description" content="<?php echo $Description ?>"/>
	<link rel="canonical" href="<?php echo ($CanonicalURL) ? $CanonicalURL : Hark::CanonicalURL(); ?>" />

	<!-- Temporary Typekit Inclusion -->
	<!-- TODO: Remove and replace with self-hosted solution OR with Brand Central's own TypeKit -->
	<script type="text/javascript" src="//use.typekit.net/okw0knp.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	<!-- Temporary Typekit Inclusion -->

	<script src="<?php Hark::CacheBuster('assets/scripts/lib/modernizr.min.js') ?>"></script>
	<?php echo $CustomHead ?>
</head>
<body class="<?php echo Hark::BodyClasses(is_array($BodyClasses) ? $BodyClasses : array());?>">

<div id="header-bar" class="contain-to-grid fixed">
	<nav class="top-bar" data-topbar>
		<ul class="title-area">
			<li class="name show-for-large-up"><h1><a class="home-link" href="<?php echo HarkConfig::HomeURL() ?>/#"><img src="<?php Hark::CacheBuster('assets/images/template/brand-central.png') ?>" alt="Brand Central"></a></h1></li>
			<li class="name show-for-medium-down"><h1><a class="home-link" href="<?php echo HarkConfig::HomeURL() ?>/#" style="overflow:hidden;width:60px;"><img style="max-width:none;" src="<?php Hark::CacheBuster('assets/images/template/brand-central.png') ?>" alt="Brand Central"></a></h1></li>
			<li class="toggle-topbar menu-icon"><a href="#" id="menu-link"><span>Menu</span></a></li>
		</ul>
		<section class="top-bar-section">
			<!-- Right Nav Section -->
			<ul class="right show-for-large-up">
				<li><a target="_blank" href="#"><img src="<?php Hark::CacheBuster('assets/images/template/iconset/facebook.png') ?>" alt="Facebook"></a></li>
				<li><a target="_blank" href="#"><img src="<?php Hark::CacheBuster('assets/images/template/iconset/twitter.png') ?>" alt="Twitter"></a></li>
				<li><a target="_blank" href="#"><img src="<?php Hark::CacheBuster('assets/images/template/iconset/pinterest.png') ?>" alt="Pinterest"></a></li>
				<li><a target="_blank" href="#"><img src="<?php Hark::CacheBuster('assets/images/template/iconset/google-plus.png') ?>" alt="Google Plus"></a></li>
			</ul>

			<!-- Left Nav Section -->
			<ul class="left">
				<li class="hide-for-medium-only active"><a class="nav-link home" href="#">Home</a></li>
				<li><a class="nav-link Services" href="#Services">Services</a></li>
				<li><a class="nav-link" href="#CaseStudies">Case Studies</a></li>
				<li><a class="nav-link" href="#Clients">Clients</a></li>
				<!-- <li><a class="nav-link-disabled" href="javascript:alert('I need somewhere to go!')">Team</a></li>
				<li><a class="nav-link-disabled" href="javascript:alert('I need somewhere to go!')">Blog</a></li> -->
				<li><a class="nav-link" href="#Contact">Contact</a></li>
			</ul>
		</section>
	</nav>
</div>

<?php echo $CONTENT ?>

<div id="footer-bar">
	<div class="row">
		<p class="small-12 columns"><small>Copyright &copy; <?php echo date('Y') ?> Brand Central LLC. All rights reserved.</small></p>
	</div>
</div>

<script src="<?php Hark::CacheBuster('assets/scripts/lib/jquery.min.js') ?>"></script>
<script src="<?php Hark::CacheBuster('assets/scripts/lib/foundation.min.js') ?>"></script>
<script src="<?php Hark::CacheBuster('assets/scripts/template.js') ?>"></script>
<?php echo $CustomFoot ?>
</body>
</html>
