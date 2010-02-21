<?php defined('SYSPATH') or die('No direct script access.');

//-- Environment setup --------------------------------------------------------

/**
 * Set the default time zone.
 *
 * @see  http://docs.kohanaphp.com/features/localization#time
 * @see  http://php.net/timezones
 */
date_default_timezone_set('America/Chicago');

/**
 * Enable the Kohana auto-loader.
 *
 * @see  http://docs.kohanaphp.com/features/autoloading
 * @see  http://php.net/spl_autoload_register
 */
spl_autoload_register(array('Kohana', 'auto_load'));

/**
 * Set the environment status by the domain.
 */
if (strpos($_SERVER['HTTP_HOST'], 'kohanaphp.com') !== FALSE)
{
	// We are live!
	Kohana::$environment = 'live';

	// Turn off notices and strict errors
	error_reporting(E_ALL ^ E_NOTICE ^ E_STRICT);
}

/**
 * Initialize Kohana, setting the default options.
 *
 * The following options are available:
 *
 * - string   base_url    path, and optionally domain, of your application   NULL
 * - string   index_file  name of your index file, usually "index.php"       index.php
 * - string   charset     internal character set used for input and output   utf-8
 * - string   cache_dir   set the internal cache directory                   APPPATH/cache
 * - boolean  errors      enable or disable error handling                   TRUE
 * - boolean  profile     enable or disable internal profiling               TRUE
 * - boolean  caching     enable or disable internal caching                 FALSE
 */
Kohana::init(array(
	'base_url'   => Kohana::$environment === 'live' ? '/' : '/kohanaphp.com/',
	'caching'    => Kohana::$environment === 'live',
	'profile'    => Kohana::$environment !== 'live',
	'index_file' => FALSE,
));

/**
 * Attach the file write to logging. Multiple writers are supported.
 */
Kohana::$log->attach(new Kohana_Log_File(APPPATH.'logs'));

/**
 * Attach a file reader to config. Multiple readers are supported.
 */
Kohana::$config->attach(new Kohana_Config_File);

/**
 * No language
 */
Route::set('lang_check', '')
		->defaults(array(
			'controller' => 'page',
			'action'     => 'lang_redirect'));

/**
 * Set the routes. Each route must have a minimum of a name, a URI and a set of
 * defaults for the URI.
 */
Route::set('page', '<lang>(/<action>)', array('lang' => '[a-z]{2}', 'action' => '.+'))
	->defaults(array(
		'controller' => 'page',
		'action'     => 'home',
		'lang'       => 'en',
	));

// This 404 route will be hit if a url without a language is supplied, like "kohanaphp.com/download" or "kohanaphp.com/i_dont_exists"
Route::set('404', '<page>',array('page'=>'.+'))
	->defaults(array(
		'controller' => 'page',
		'action'	 => 'error',
		'lang'       => 'en',
	));

/**
 * Execute the main request using PATH_INFO. If no URI source is specified,
 * the URI will be automatically detected.
 */
$request = Request::instance();

try
{
	$request->execute();
}
catch (Exception $e)
{
	// If we are in development and the error wasn't a 404, show the stack trace.
	if ( Kohana::$environment == "development" AND $e->getCode() != 404 )
	{
		throw $e;
	}
	
	// Log the error
	Kohana::$log->add(Kohana::ERROR, Kohana::exception_text($e));
	
	// Set the response to the 404 page
	$request->status = 404;
	$request->response = View::factory('template',array(
		'title' => 'Oops',
		'content' => View::factory('pages/error'),
	));
}

/**
 * Display the request response.
 */
$request->headers['Content-Length'] = strlen( (string) $request->response);
echo $request->send_headers()->response;