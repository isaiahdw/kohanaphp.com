<div class="span-22 prefix-1 last">
	<h1>Which version of Kohana should I use?</h1>

	<h3>A Tale of Two Frameworks</h3>
	<p>Kohana has two main branches which are both still actively developed. This has come about as the result of the community-driven ethic - different branches fulfill different purposes for developers within the community. The two branches now though are very different code bases and should not be considered interchangeable or compatible, although they share many features and philosophies.</p>
	<p>The 2.x branch was originally a fork of Code Igniter. It has been stable for several years with many large sites based on the Kohana 2 code base.</p>
	<p>Kohana 3.x is a ground-up re-write that simplifies some aspects of the framework whilst adding power to others. It was released in the summer of 2009 and is considered stable. Kohana 3 goes beyond standard MVC architecture by completely encapsulating the request, allowing the use of sub-requests. This design is generally referred to as HMVC.</p>
	<p>TODO: Talk about future versions here (i.e. will we release more 2.x versions, etc)</p>

	<h3>Which version should I pick?</h3>
	<p>TODO: What to write...</p>

	<h3>Version Numbers</h3>
	<p>In general minor point revisions (i.e. 2.3.3 to 2.3.4) in version number are bug fixes and feature enhancements and should never contain significant API changes. Major point revisions (2.3 to 2.4) are likely to contain API changes and should be carefully reviewed before updating live applications as they may require some modification of application code.</p>

	<p>As mentioned before 2.x and 3.x are essentially different frameworks and as such there is no 'upgrade path' recognized. To move an application from one to the other may be relatively easy but it is essentially a port rather than an upgrade.</p>

	<h4>Did that help you decide what Kohana version is best for you?</h4>
	<ul>
		<li><?php echo HTML::anchor(Route::get('page')->uri(array('action' => 'download', 'lang' => Request::instance()->param('lang'))),'Yes, take me to the downloage page please!') ?></li>
		<li><?php echo HTML::anchor(Route::get('page')->uri(array('action' => 'community', 'lang' => Request::instance()->param('lang'))),'No, I\'m still confused.') ?></li>
	</ul>
</div>