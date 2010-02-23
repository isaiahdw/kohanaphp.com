<?php

// Displayed feeds are cached for 5 minutes
if ( ! Fragment::load('feed:'.$feed.':'.$limit, Date::MINUTE * 5)):

// Parse the feed
$items = Feed::parse($feed, $limit);

// Set the "link" and "title" variable names
isset($link)  or $link  = 'link';
isset($title) or $title = 'title';

?>
<?php foreach ($items as $item): ?>
<li><?php echo HTML::anchor($item[$link], html::chars(Text::limit_chars($item[$title], 50))) ?></li>
<?php endforeach ?>
<li>&raquo; <?php echo HTML::anchor($feed, $more) ?></li>
<?php Fragment::save(); endif ?>