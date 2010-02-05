<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Page extends Controller_Website {

	protected $page_titles = array(
		'home' => 'The Swift PHP Framework',
	);

	public function before()
	{
		parent::before();

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

		$this->template->title   = $title;
		$this->template->content = View::factory('pages/'.$this->request->action);
	}

	public function action_home()
	{
		$kohana = Kohana_Config::instance()->load('kohana');
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