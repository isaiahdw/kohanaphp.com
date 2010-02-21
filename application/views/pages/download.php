<div id="download" class="span-22 prefix-1 suffix-1 last">
	<h1>Get yours today!</h1>
	<?php if ($download_url): ?>
		<div id="starting_download">
			<p>Thank you for downloading Kohana. If your download doesn't start in a few seconds, <a href="<?php echo $download_url?>">click here to start it manually</a>.</p>
		</div>
	<?php endif; ?>
	<p class="intro">Kohana has a couple different versions to choose from. <?php echo html::anchor(Route::get('page')->uri(array('action' => 'versions', 'lang' => Request::instance()->param('lang'))),'Not sure which version is best for you?') ?></p>
	<div class="version first">
		<div class="green-box release">

			<?php if (count($versions['ko2']['release']) > 0): ?>
				<?php foreach($versions['ko2']['release'] AS $version => $details): ?>
					<p class="title">Kohana 2.x Current Release:</p>
					<h2>v<?php echo $version?> <?php echo empty($details['codename']) ? '' : '<small class="fancy">"'.$details['codename'].'"</small>'?></h2>
					<p>
						<?php echo ! empty($details['status']) ? HTML::anchor($details['status'], 'Status') : ''  ?>
						<?php echo ! empty($details['changelog']) ? HTML::anchor($details['changelog'], 'Changelog') : ''  ?>
						<?php echo ! empty($details['issues']) ? HTML::anchor($details['issues'], 'Issues') : ''  ?>
						<?php echo ! empty($details['repository']) ? HTML::anchor($details['repository'], 'Repository') : ''  ?>
					</p>
					<?php echo ! empty($details['download']) ? HTML::anchor('download?get='.$version, 'Version '.$version,array('class'=>'download-button')) : '' ?>
				<?php endforeach; ?>
			<?php else: ?>
				<p>No release versions are available at this time.</p>
			<?php endif; ?>
		</div>
		<div class="tan-box development">

			<h2>Under Development</h2>
			<?php if (count($versions['ko2']['development']) > 0): ?>
				<?php foreach($versions['ko2']['development'] AS $version => $details): ?>
					<h3 class="bottom">v<?php echo $version?> <?php echo empty($details['codename']) ? '' : '<small class="fancy">"'.$details['codename'].'"</small>'?></h3>
					<p>
						<?php echo ! empty($details['download']) ? HTML::anchor('download?get='.$version, 'Download (zip)') : '' ?>
						<?php echo ! empty($details['status']) ? HTML::anchor($details['status'], 'Status') : ''  ?>
						<?php echo ! empty($details['changelog']) ? HTML::anchor($details['changelog'], 'Changelog') : ''  ?>
						<?php echo ! empty($details['issues']) ? HTML::anchor($details['issues'], 'Issues') : ''  ?>
						<?php echo ! empty($details['repository']) ? HTML::anchor($details['repository'], 'Repository') : ''  ?>
					</p>
				<?php endforeach; ?>
			<?php else: ?>
				<p>No development versions are available at this time.</p>
			<?php endif; ?>
		</div>

		<div class="tan-box archive">
			<h2>Release History</h2>
			<?php if (count($versions['ko2']['archive']) > 0): ?>
				<?php foreach($versions['ko2']['archive'] AS $version => $details): ?>
					<h3 class="bottom">v<?php echo $version?> <?php echo empty($details['codename']) ? '' : '<small class="fancy">"'.$details['codename'].'"</small>'?></h3>
					<p>
						<?php echo ! empty($details['download']) ? HTML::anchor('download?get='.$version, 'Download (zip)') : '' ?>
						<?php echo ! empty($details['status']) ? HTML::anchor($details['status'], 'Status') : ''  ?>
						<?php echo ! empty($details['changelog']) ? HTML::anchor($details['changelog'], 'Changelog') : ''  ?>
						<?php echo ! empty($details['issues']) ? HTML::anchor($details['issues'], 'Issues') : ''  ?>
						<?php echo ! empty($details['repository']) ? HTML::anchor($details['repository'], 'Repository') : ''  ?>
					</p>
				<?php endforeach; ?>
			<?php else: ?>
				<p>No previous versions are available at this time.</p>
			<?php endif; ?>
		</div>
	</div>
	<div class="version">
		<div class="green-box release">
			<?php if (count($versions['ko3']['release']) > 0): ?>
				<?php foreach($versions['ko3']['release'] AS $version => $details): ?>
					<p class="title">Kohana 3.x Current Release:</p>
					<h2>v<?php echo $version?> <?php echo empty($details['codename']) ? '' : '<small class="fancy">"'.$details['codename'].'"</small>'?></h2>
					<p>
						<?php echo empty($details['status']) ? '' : HTML::anchor($details['status'], 'Status')  ?>
						<?php echo empty($details['changelog']) ? '' : HTML::anchor($details['changelog'], 'Changelog')  ?>
						<?php echo empty($details['issues']) ? '' : HTML::anchor($details['issues'], 'Issues')  ?>
						<?php echo empty($details['repository']) ? '' : HTML::anchor($details['repository'], 'Repository')  ?>
					</p>
					<?php echo empty($details['download']) ? '' : HTML::anchor('download?get='.$version, 'Version '.$version,array('class'=>'download-button')) ?>
				<?php endforeach; ?>
			<?php else: ?>
				<p>No release versions are available at this time.</p>
			<?php endif; ?>
		</div>
		<div class="tan-box development">
			<h2>Under Development</h2>
			<?php if (count($versions['ko3']['development']) > 0): ?>
				<?php foreach($versions['ko3']['development'] AS $version => $details): ?>
					<h3 class="bottom">v<?php echo $version?> <?php echo empty($details['codename']) ? '' : '<small class="fancy">"'.$details['codename'].'"</small>'?></h3>
					<p>
						<?php echo ! empty($details['download']) ? HTML::anchor('download?get='.$version, 'Download (zip)') : '' ?>
						<?php echo ! empty($details['status']) ? HTML::anchor($details['status'], 'Status') : ''  ?>
						<?php echo ! empty($details['changelog']) ? HTML::anchor($details['changelog'], 'Changelog') : ''  ?>
						<?php echo ! empty($details['issues']) ? HTML::anchor($details['issues'], 'Issues') : ''  ?>
						<?php echo ! empty($details['repository']) ? HTML::anchor($details['repository'], 'Repository') : ''  ?>
					</p>
				<?php endforeach; ?>
			<?php else: ?>
				<p>No development versions are available at this time.</p>
			<?php endif; ?>
		</div>
		<div class="tan-box archive">
			<h2>Release History</h2>
			<?php if (count($versions['ko3']['archive']) > 0): ?>
				<?php foreach($versions['ko3']['archive'] AS $version => $details): ?>
					<h3 class="bottom">v<?php echo $version?> <?php echo empty($details['codename']) ? '' : '<small class="fancy">"'.$details['codename'].'"</small>'?></h3>
					<p>
						<?php echo ! empty($details['download']) ? HTML::anchor('download?get='.$version, 'Download (zip)') : '' ?>
						<?php echo ! empty($details['status']) ? HTML::anchor($details['status'], 'Status') : ''  ?>
						<?php echo ! empty($details['changelog']) ? HTML::anchor($details['changelog'], 'Changelog') : ''  ?>
						<?php echo ! empty($details['issues']) ? HTML::anchor($details['issues'], 'Issues') : ''  ?>
						<?php echo ! empty($details['repository']) ? HTML::anchor($details['repository'], 'Repository') : ''  ?>
					</p>
				<?php endforeach; ?>
			<?php else: ?>
				<p>No previous versions are available at this time.</p>
			<?php endif; ?>
		</div>
	</div>
</div>
