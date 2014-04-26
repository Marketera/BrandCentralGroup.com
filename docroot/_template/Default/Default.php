<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	<link rel="stylesheet" href="<?php echo Hark::CacheBuster('assets/styles/generated/template.css') ?>"/>

	<title><?php echo $Title; if (!$HideSiteTitle) echo " &ndash; BrandCentral"; ?></title>
	<meta name="description" content="<?php echo $Description ?>"/>
	<link rel="canonical" href="<?php echo ($CanonicalURL) ? $CanonicalURL : Hark::CanonicalURL(); ?>" />

	<script src="<?php echo Hark::CacheBuster('assets/scripts/lib/modernizr.min.js') ?>"></script>
	<!--[if lt IE 9]><script type="text/javascript" src="<?php echo Hark::CacheBuster('assets/scripts/lib/html5shiv.min.js') ?>"></script><![endif]-->

	<?php echo $CustomHead ?>
</head>
<body class="<?php echo Hark::BodyClasses(is_array($BodyClasses) ? $BodyClasses : array());?>">

<nav class="top-bar" data-topbar>
	<ul class="title-area">
		<li class="name">
			<h1><a href="#">My Site</a></h1>
		</li>
	</ul>

	<section class="top-bar-section">
		<!-- Right Nav Section -->
		<ul class="right">
			<li class="active"><a href="#">Right Nav Button Active</a></li>
			<li class="has-dropdown">
				<a href="#">Right Button with Dropdown</a>
				<ul class="dropdown">
					<li><a href="#">First link in dropdown</a></li>
				</ul>
			</li>
		</ul>

		<!-- Left Nav Section -->
		<ul class="left">
			<li><a href="#">Left Nav Button</a></li>
		</ul>
	</section>
</nav>

<?php echo $CONTENT ?>

<script src="<?php echo Hark::CacheBuster('assets/scripts/lib/jquery.min.js') ?>"></script>
<script src="<?php echo Hark::CacheBuster('assets/scripts/lib/foundation.min.js') ?>"></script>
<script src="<?php echo Hark::CacheBuster('assets/scripts/template.js') ?>"></script>
<?php echo $CustomFoot ?>
</body>
</html>
