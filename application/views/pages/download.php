<div id="download" class="span-22 prefix-1 suffix-1 last">
	<h1>Get yours today!</h1>
	<?php if ($download_url): ?>
		<div id="starting_download">
			<p>Thank you for downloading Kohana. If your download doesn't start in a few seconds, <a href="<?php echo $download_url?>">click here to start it manually</a>.</p>
		</div>
	<?php endif; ?>
	<p class="intro">Kohana has a couple different versions to choose from. Not sure which version is best for you? Check the FAQ for answers</p>
	<div class="version span-10">

		<h1>Current Release</h1>
		<?php if (count($versions['ko3']['release']) > 0): ?>
			<?php foreach($versions['ko3']['release'] AS $version => $details): ?>
				<h2 class="bottom">v<?php echo $version?></h2>
				<p>
					<?php echo ! empty($details['download']) ? HTML::anchor('download?get='.$version, 'Download (zip)') : '' ?>
					<?php echo ! empty($details['status']) ? HTML::anchor($details['status'], 'Status') : ''  ?>
					<?php echo ! empty($details['changelog']) ? HTML::anchor($details['changelog'], 'Changelog') : ''  ?>
					<?php echo ! empty($details['issues']) ? HTML::anchor($details['issues'], 'Issues') : ''  ?>
					<?php echo ! empty($details['repository']) ? HTML::anchor($details['repository'], 'Repository') : ''  ?>
				</p>
			<?php endforeach; ?>
		<?php else: ?>
			<p>There are currently no release versions available.</p>
		<?php endif; ?>

		<h1>Development Release</h1>
		<?php if (count($versions['ko3']['development']) > 0): ?>
			<?php foreach($versions['ko3']['development'] AS $version => $details): ?>
				<h2 class="bottom">v<?php echo $version?></h2>
				<p>
					<?php echo ! empty($details['download']) ? HTML::anchor('download?get='.$version, 'Download (zip)') : '' ?>
					<?php echo ! empty($details['status']) ? HTML::anchor($details['status'], 'Status') : ''  ?>
					<?php echo ! empty($details['changelog']) ? HTML::anchor($details['changelog'], 'Changelog') : ''  ?>
					<?php echo ! empty($details['issues']) ? HTML::anchor($details['issues'], 'Issues') : ''  ?>
					<?php echo ! empty($details['repository']) ? HTML::anchor($details['repository'], 'Repository') : ''  ?>
				</p>
			<?php endforeach; ?>
		<?php else: ?>
			<p>There are currently no development versions available.</p>
		<?php endif; ?>

		<h1>Release History</h1>
		<?php if (count($versions['ko3']['archive']) > 0): ?>
			<?php foreach($versions['ko3']['archive'] AS $version => $details): ?>
				<h2 class="bottom">v<?php echo $version?></h2>
				<p>
					<?php echo ! empty($details['download']) ? HTML::anchor('download?get='.$version, 'Download (zip)') : '' ?>
					<?php echo ! empty($details['status']) ? HTML::anchor($details['status'], 'Status') : ''  ?>
					<?php echo ! empty($details['changelog']) ? HTML::anchor($details['changelog'], 'Changelog') : ''  ?>
					<?php echo ! empty($details['issues']) ? HTML::anchor($details['issues'], 'Issues') : ''  ?>
					<?php echo ! empty($details['repository']) ? HTML::anchor($details['repository'], 'Repository') : ''  ?>
				</p>
			<?php endforeach; ?>
		<?php else: ?>
			<p>There are currently no previous versions available.</p>
		<?php endif; ?>
	</div>
	<div class="version right span-10">

		<h1>Current Release</h1>
		<?php if (count($versions['ko2']['release']) > 0): ?>
			<?php foreach($versions['ko2']['release'] AS $version => $details): ?>
				<h2 class="bottom">v<?php echo $version?></h2>
				<p>
					<?php echo ! empty($details['download']) ? HTML::anchor('download?get='.$version, 'Download (zip)') : '' ?>
					<?php echo ! empty($details['status']) ? HTML::anchor($details['status'], 'Status') : ''  ?>
					<?php echo ! empty($details['changelog']) ? HTML::anchor($details['changelog'], 'Changelog') : ''  ?>
					<?php echo ! empty($details['issues']) ? HTML::anchor($details['issues'], 'Issues') : ''  ?>
					<?php echo ! empty($details['repository']) ? HTML::anchor($details['repository'], 'Repository') : ''  ?>
				</p>
			<?php endforeach; ?>
		<?php else: ?>
			<p>There are currently no release versions available.</p>
		<?php endif; ?>

		<h1>Development Release</h1>
		<?php if (count($versions['ko2']['development']) > 0): ?>
			<?php foreach($versions['ko2']['development'] AS $version => $details): ?>
				<h2 class="bottom">v<?php echo $version?></h2>
				<p>
					<?php echo ! empty($details['download']) ? HTML::anchor('download?get='.$version, 'Download (zip)') : '' ?>
					<?php echo ! empty($details['status']) ? HTML::anchor($details['status'], 'Status') : ''  ?>
					<?php echo ! empty($details['changelog']) ? HTML::anchor($details['changelog'], 'Changelog') : ''  ?>
					<?php echo ! empty($details['issues']) ? HTML::anchor($details['issues'], 'Issues') : ''  ?>
					<?php echo ! empty($details['repository']) ? HTML::anchor($details['repository'], 'Repository') : ''  ?>
				</p>
			<?php endforeach; ?>
		<?php else: ?>
			<p>There are currently no release versions available.</p>
		<?php endif; ?>

		<h1>Release History</h1>
		<?php if (count($versions['ko2']['archive']) > 0): ?>
			<?php foreach($versions['ko2']['archive'] AS $version => $details): ?>
				<h2 class="bottom">v<?php echo $version?></h2>
				<p>
					<?php echo ! empty($details['download']) ? HTML::anchor('download?get='.$version, 'Download (zip)') : '' ?>
					<?php echo ! empty($details['status']) ? HTML::anchor($details['status'], 'Status') : ''  ?>
					<?php echo ! empty($details['changelog']) ? HTML::anchor($details['changelog'], 'Changelog') : ''  ?>
					<?php echo ! empty($details['issues']) ? HTML::anchor($details['issues'], 'Issues') : ''  ?>
					<?php echo ! empty($details['repository']) ? HTML::anchor($details['repository'], 'Repository') : ''  ?>
				</p>
			<?php endforeach; ?>
		<?php else: ?>
			<p>There are currently no previous versions available.</p>
		<?php endif; ?>
	</div>
</div>
