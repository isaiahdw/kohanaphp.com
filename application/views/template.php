<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo Kohana::$charset ?>" />
	<title>Kohana: <?php echo $title ?></title>
	<?php foreach ($styles as $style => $media)
		echo HTML::style($style, array('media' => $media)), "\n" ?>
	<?php foreach ($meta_tags as $meta)
		echo '<meta'.HTML::attributes($meta).' />' ?>
	</head>
	<body>
		<div id="topline">
			<ul id="quicklinks">
				<li><a class="active" href="#">Kohana</a></li>
				<li><a href="#">Community</a></li>
				<li><a href="#">Development</a></li>
				<li><a href="#">Documentation</a></li>
			</ul>
			<ul id="languages">
				<li><a href="#" class="active"><img width="16" height="11" src="http://kohanaphp.com/media/img/flags/en_US.png" alt="en_US"></a></li>
				<li><a href="#" class=""><img width="16" height="11" src="http://kohanaphp.com/media/img/flags/pt_BR.png" alt="pt_BR"></a></li>
				<li><a href="#" class=""><img width="16" height="11" src="http://kohanaphp.com/media/img/flags/de_DE.png" alt="de_DE"></a></li>
				<li><a href="#" class=""><img width="16" height="11" src="http://kohanaphp.com/media/img/flags/es_ES.png" alt="es_ES"></a></li>
				<li><a href="#" class=""><img width="16" height="11" src="http://kohanaphp.com/media/img/flags/fr_FR.png" alt="fr_FR"></a></li>
				<li><a href="#" class=""><img width="16" height="11" src="http://kohanaphp.com/media/img/flags/it_IT.png" alt="it_IT"></a></li>
				<li><a href="#" class=""><img width="16" height="11" src="http://kohanaphp.com/media/img/flags/nl_NL.png" alt="nl_NL"></a></li>
				<li><a href="#" class=""><img width="16" height="11" src="http://kohanaphp.com/media/img/flags/pl_PL.png" alt="pl_PL"></a></li>
				<li><a href="#" class=""><img width="16" height="11" src="http://kohanaphp.com/media/img/flags/ru_RU.png" alt="ru_RU"></a></li>
			</ul>
		</div>
		<div id="header">
			<div class="container">
				<?php echo HTML::anchor('', HTML::image('media/img/kohana.png', array('alt' => 'Kohana: Develop Swiftly')), array('id' => 'logo')) ?>
				<div id="menu">
					<ul>
						<li class="home first selected"><?php echo HTML::anchor('', 'Home') ?></li>
						<li class="download"><?php echo HTML::anchor('download', 'Download') ?></li>
						<li class="documentation"><?php echo HTML::anchor('documentation', 'Documentation') ?></li>
						<li class="community"><?php echo HTML::anchor('community', 'Community') ?></li>
						<li class="development last"><?php echo HTML::anchor('development', 'Development') ?></li>
					</ul>
				</div>
			</div>
		</div>
		<div id="content">
			<div class="wrapper">
				<div class="container">
					<?php echo $content ?>
				</div>
			</div>
		</div>
		<div id="footer">
			<div class="container">
				<div class="copyright">
					<p><?php echo HTML::anchor('', HTML::image('media/img/kohana_dark.png', array('alt' => 'Kohana: Develop Swiftly')), array('class' => 'logo')) ?></p>
					<p>Copyright &copy;2007-2009</p>
					<p>All rights reserved</p>
					<p>The awesome <?php echo HTML::anchor('team', 'Kohana Team') ?></p>
				</div>
				<div class="discussions feed span-8">

				</div>
				<div class="changes feed span-8 suffix-1 last">

				</div>
			</div>
		</div>
		<?php foreach ($scripts as $script)
			echo HTML::script($script), "\n" ?>
	</body>
</html>