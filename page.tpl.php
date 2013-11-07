<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="<?php print $language->language ?>" xml:lang="<?php print $language->language ?>" xmlns="http://www.w3.org/1999/xhtml">

<head profile="http://gmpg.org/xfn/11">

<meta name="description" content="<?php print $site_name; ?>"/> 
<meta name="author" content="Arts and Sciences Technology Services Office"/> 
<meta name="keywords" content="<?php print strtr($site_name, array(" " => ", ")); ?>, Arts and Sciences, OSU, Ohio State"/> 

<title><?php print $head_title ?></title>
<?php print $head ?>
<?php print $styles ?>
<?php print $scripts ?>
	
</head>
<body class="<?php print $body_classes ?>">

	<div id="osu_navbar" role="navigation">
			<div class="container">
				<h2 class="osu-semantic">Ohio State nav bar</h2>
			<a href="#page-content" id="skip" class="osu-semantic">Skip to main content</a>
				<div class="univ_info">
					<p class="univ_name"><a href="http://osu.edu" title="The Ohio State University">The Ohio State University</a></p>
				</div><!-- /univ_info -->
				<div class="univ_links">
					<div class="links">
						<ul>
							<li><a href="http://www.osu.edu/help.php" class="help">Help</a></li>
							<li><a href="http://buckeyelink.osu.edu/" class="buckeyelink" >BuckeyeLink</a></li>
							<li><a href="http://www.osu.edu/map/" class="map">Map</a></li>
							<li><a href="http://www.osu.edu/findpeople.php" class="findpeople">Find People</a></li>
							<li><a href="https://email.osu.edu/" class="webmail">Webmail</a></li> 
							<li><a href="http://www.osu.edu/search/" class="search">Search Ohio State</a></li>
						</ul>
					</div><!-- /links -->
				</div><!-- /univ_links -->
			</div><!-- /container -->
	</div><!-- /osu_navbar -->

	<div id="header">
		<div class="container">
			<div id="header-container" class="span-24">
				<?php if(false && !$is_front){ ?>
					<div id="small-banner-1"><a href="http://artsandsciences.osu.edu/" id="aslink" title="Arts and Sciences homepage">&nbsp;</a></div>
				<? } ?>
				<div id="logo">
					<?php if($logo){ ?>
						<a href="<?php global $base_url; print $base_url; ?>" title="Back to <?php print $site_name; ?> home"><img alt="<?php print $site_name; ?> Logo" src="<?php print $logo ?>"/></a>
					<?php } ?>
				</div><!-- .logo -->
				<a href="http://www.osu.edu/" id="osulogo" title="Ohio State University homepage">&nbsp;</a>

				<div id="navigation">
					<?php print $MainNav; ?>			
				</div><!-- #navigation -->
			</div>
		</div> <!-- .container -->
		<div id="header-tile">&nbsp;</div>
	</div> <!-- #header -->
	<div id="headerbar">&nbsp;</div>

	<?php include($is_front ? "front.tpl.php" : "inner.tpl.php"); ?>

	<hr id="footer-border"/>
	<div id="footer">
		<div class="container">
			<?php if(!$is_front){ ?>
				<div id="small-banner-2"><a href="http://artsandsciences.osu.edu/" id="aslink-2" title="Arts and Sciences homepage">&nbsp;</a></div>
			<? } ?>
			<div id="contact" class="span-6">
				<?php if(user_access('administer site configuration')){ ?>
				<ul class="tabs primary">
					<li class="active">
						<a class="active" href="<?=url();?>admin/settings/site-information">Edit Text</a>
					</li>
				</ul>
				<?php } ?>
				<?php print $footer_message; ?>
				<div id="uicons"><?php include(path_to_theme() . "/icons/uicons.php"); ?></div>
			</div><!-- .contact -->
			<div class="span-1">&nbsp;</div>
			<div id="footer-right" class="span-17 last">
				<div id="footer-top" class="span-17 last">
					<?php print $footer; ?>
				</div>
				<div id="footer-bottom" class="span-17 last">
					<?php print $footer_menu; ?>
				</div>
			</div>
		</div><!-- .container -->
	</div><!-- #footer -->


<?php print $closure;?>

</body>

</html>
