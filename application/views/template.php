<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo Kohana::$charset ?>" />
	<title>Kohana: <?php echo $title ?></title>

	<?php
	echo HTML::style('media/css/screen.css',array('media'=>'screen')), "\n";
	echo HTML::style('media/css/website.css',array('media'=>'screen')), "\n";
	echo HTML::style('media/css/print.css',array('media'=>'print')), "\n";

	echo HTML::script('media/js/jquery-1.3.2.min.js'), "\n";
	echo HTML::script('media/js/website.js'), "\n";
	echo HTML::script('media/js/jquery.cycle.min.js'), "\n";
	?>

	<!--[if lt IE 8]>
	<?php echo HTML::script('media/js/IE8.min.js') ?>
	<![endif]-->

</head>
<body>
	<div id="topline">
		<ul id="quicklinks">
			<li class="first active"><?php echo HTML::anchor('http://kohanaphp.com', html::image('media/img/kohana-small.png')) ?></li>
			<li><?php echo HTML::anchor('http://kohanaphp.com/userguide', 'User Guide') ?></li>
			<li><?php echo HTML::anchor('http://forum.kohanaphp.com/', 'Community') ?></li>
			<li><?php echo HTML::anchor('http://dev.kohanaphp.com/', 'Development') ?></li>
			<li><?php echo HTML::anchor('http://www.kohanajobs.com', 'Kohana Jobs') ?></li>
		</ul>
	</div>
	<div id="header">
		<div class="container">
			<?php echo HTML::anchor(Route::get('page')->uri(array('lang' => Request::instance()->param('lang'))), HTML::image('media/img/kohana.png', array('alt' => 'Kohana: Develop Swiftly')), array('id' => 'logo')) ?>
			<div id="menu">
				<ul>
					<?php
					$select = Request::instance()->action;
					?>
					<li class="home first<?php echo $select == 'home'?' selected':''?>"><?php echo HTML::anchor(Route::get('page')->uri(array('lang' => Request::instance()->param('lang'))), __('Home')) ?></li>
					<li class="download<?php echo $select == 'download'?' selected':''?>"><?php echo HTML::anchor(Route::get('page')->uri(array('lang' => Request::instance()->param('lang'), 'action'=>'download')), __('Download')) ?></li>
					<li class="userguide<?php echo $select == 'userguide'?' selected':''?>"><?php echo HTML::anchor(Route::get('page')->uri(array('lang' => Request::instance()->param('lang'), 'action'=>'userguide')), __('User Guide')) ?></li>
					<li class="community<?php echo $select == 'community'?' selected':''?>"><?php echo HTML::anchor(Route::get('page')->uri(array('lang' => Request::instance()->param('lang'), 'action'=>'community')), __('Community')) ?></li>
					<li class="development last<?php echo $select == 'development'?' selected':''?>"><?php echo HTML::anchor(Route::get('page')->uri(array('lang' => Request::instance()->param('lang'), 'action'=>'development')), __('Development')) ?></li>
				</ul>
			</div>
			<div id="languages">
				<ul>
					<?php foreach (Kohana::config('kohana')->languages as $lang => $inf): ?>
						<li><?php echo html::anchor(Route::get('page')->uri(array('lang'=>$lang,'action'=>Request::instance()->action)),html::image('media/img/flags/'.$inf['flag'].'.png',array('alt'=>$inf['name'],'title'=>$inf['name']))) ?></li>
					<?php endforeach; ?>
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
			<div class="copyright span-6 prefix-1">
				<p class="caps top"><?php echo HTML::anchor('', 'Kohana', array('class' => 'logo')) ?>
					Copyright &copy;2007-2009<br/>
					All rights reserved<br/>
					The awesome <?php echo HTML::anchor('team', 'Kohana Team') ?>
				</p>
			</div>
			<div class="discussions feed span-8">

			</div>
			<div class="changes feed span-8 suffix-1 last">

			</div>
		</div>
	</div>

</body>
</html>