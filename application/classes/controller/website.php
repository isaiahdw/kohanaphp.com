<?php defined('SYSPATH') or die('No direct script access.');

abstract class Controller_Website extends Controller_Template {

	public function before()
	{
		parent::before();

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
	}

} // End Website
