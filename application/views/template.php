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
	<p>Kohana is a <strong>PHP 5 framework</strong> that uses the <strong>Model View Controller</strong> architectural pattern. It aims to be <strong>secure</strong>, <strong>lightweight</strong>, and <strong>easy</strong> to use.</p>
</div>

<div id="header">
	<div class="container">
		<?php echo HTML::anchor('', HTML::image('media/img/kohana.png', array('alt' => 'Kohana: Develop Swiftly')), array('id' => 'logo')) ?>
		
		<div id="kohanaDwl">
			<div>
				<h2>Download Kohana</h2>
				<small><a href="">Which version should I use ?</a></small>
			</div>
			<ul>
				<li><a href="<?php echo url::base().'download?get='.$versions['ko2']['version'] ?>"><img src="<?php echo URL::base(TRUE) ?>media/img/icons/16/disk.png"/> v<?php echo $versions['ko2']['version'] ?></a></li>
				<li><a href="<?php echo url::base().'download?get='.$versions['ko3']['version'] ?>"><img src="<?php echo URL::base(TRUE) ?>media/img/icons/16/disk.png"/> v<?php echo $versions['ko3']['version'] ?></a></li>
			</ul>
		</div>
		
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