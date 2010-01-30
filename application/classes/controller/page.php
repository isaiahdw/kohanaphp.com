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
		$versions['ko2'] = current($kohana['ko2']['current']);
		$versions['ko3'] = current($kohana['ko3']['current']);

		$this->template->content->versions = $versions;
	}

	public function action_download()
	{

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

} // End Page