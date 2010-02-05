<?php defined('SYSPATH') or die('No direct script access.');

abstract class Controller_Website extends Controller_Template {

	public function before()
	{
		parent::before();

		if ($this->auto_render)
		{
			$this->template->meta_tags = array();

			$this->template->styles = array(
					'media/css/reset.css' => 'screen',
					'media/css/styles.css' => 'screen'
				);

			$this->template->scripts = array(
				'http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js',
				'media/js/website.js',
				'media/js/jquery.cycle.min.js',
			);
		}
	}
	
	function after() {
		parent::after();
		$kohana = Kohana_Config::instance()->load('kohana');
		$versions['ko2'] = current($kohana['ko2']['release']);
		$versions['ko3'] = current($kohana['ko3']['release']);

		$this->template->versions = $versions;
	}

} // End Website
