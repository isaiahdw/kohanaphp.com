<div class="span-22 prefix-1 suffix-1 last">

	<h1>Help, it doesn't work!</h1>

	<p class="intro">Documentation is provided for both v2.x and v3.x, in separate places.</p>

	<div class="version first">
		<div class="green-box center">
			<h2>Latest Kohana 2 User Guide:</h2>
			<?php echo html::anchor('userguide/2.4','Kohana 2.4 User Guide',array('class'=>'button')) ?>
		</div>
	</div>
	
	<div class="version">
		<div class="green-box center">
			<h2>Latest Kohana 3 User Guide:</h2>
			<?php echo html::anchor('userguide/3.0','Kohana 3.0 User Guide',array('class'=>'button')) ?>
		</div>
	</div>
	<div class="clear"></div>

	<h3>Still need help?</h3>

	<p>The Kohana <?php echo HTML::anchor(Route::get('page')->uri(array('lang' => Request::instance()->param('lang'), 'action'=>'community')), 'user community') ?> may be able to help you find the answer you are looking for.</p>
	
	<h3>Userguide Archives:</h3>
	
	<p><?php echo html::anchor('userguide/2.3','Kohana 2.3 User Guide') ?></p>

</div>