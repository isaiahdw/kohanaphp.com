<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Page extends Controller_Website {

	protected $page_titles = array(
		'home' => 'The Swift PHP Framework',
	);

	public function before()
	{
		parent::before();

		// Check for lang param
		$this->lang = $this->request->param('lang');
		$languages = Kohana::config('kohana')->languages;
		
		// If no lang param, check for lang cookie
		if ($this->lang == null)
		{
			$this->lang = Cookie::get('kohanaphp-lang','');
		}
		
		// If Lang is still null, try the ACCEPT_LANGUAGE http header:
		if ($this->lang == null)
		{
			foreach ($this->request->accept_lang() as $lang => $priority )
			{
				if (Arr::get($languages,$lang,null))
				{
					$this->lang = $lang;
					Cookie::set('kohanaphp-lang',$this->lang);
					break;
				}
			}
		}
		
		// If $this->lang differs from the lang param, it means no lang was given, but they either have a cookie or they want a certain language, so make sure the cookie is set and redirect
		if ($this->lang != $this->request->param('lang'))
		{
			
			$this->request->redirect(Route::get('page')->uri(array('lang'=>$this->lang,'action'=>$this->request->action)));
		}
		
		// Check if the language we have is a valid one
		if (Arr::get($languages,$this->lang,false))
		{
			Cookie::set('kohanaphp-lang',$this->lang);
		}
		else
		{
			$this->request->action = 'error';
		}

		if (isset($this->page_titles[$this->request->action]))
		{
			// Use the defined page title
			$title = $this->page_titles[$this->request->action];
		}
		else
		{
			// Use the page name as the title
			$title = ucwords(str_replace('_', ' ', $this->request->action));
		}

		if ($this->auto_render)
		{
			$this->template->meta_tags = array();

			$this->template->styles = array(
				'media/css/print.css'  => 'print',
				'media/css/screen.css' => 'screen',
				'media/css/website.css' => 'screen',
			);

			$this->template->scripts = array(
				'media/js/jquery-1.3.2.min.js',
				'media/js/website.js',
				'media/js/jquery.cycle.min.js',
			);
		}

		$this->template->title   = $title;
		$this->template->content = View::factory('pages/'.$this->request->action);
	}

	public function action_home()
	{
		$kohana = Kohana::config('kohana');
		$versions['ko2'] = current($kohana['ko2']['release']);
		$versions['ko3'] = current($kohana['ko3']['release']);

		$this->template->content->versions = $versions;
	}

	public function action_download()
	{
		$this->template->content->download_url = FALSE;

		$versions = Kohana_Config::instance()->load('kohana');

		if ($version = Arr::get($_GET, 'get'))
		{
			if (($requested_version = self::multi_array_key_exists($version, $versions)) !== FALSE)
			{
				// Try to start the download
				$this->template->content->download_url = Arr::get($requested_version, 'download');
				$this->template->meta_tags[] = array('http-equiv' => 'refresh', 'content' => '2; '.$requested_version['download']);
			}
		}

		$this->template->content->versions = $versions;
	}

	public function action_documentation()
	{

	}

	public function action_community()
	{

	}

	public function action_development()
	{

	}

	public function action_team()
	{

	}

	public function action_help()
	{

	}
	
	public function action_versions()
	{
		
	}
	
	protected function multi_array_key_exists($needle, $haystack)
	{
		foreach ($haystack as $key => $value)
		{
			if ($needle === $key)
				return $value;

			if (is_array($value))
			{
				if (($value = self::multi_array_key_exists($needle, $value)) !== FALSE)
					return $value;
			}
		}
		return FALSE;
	}

} // End Page