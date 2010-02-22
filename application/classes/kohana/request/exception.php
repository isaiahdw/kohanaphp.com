<?php defined('SYSPATH') or die('No direct script access.');

class Kohana_Request_Exception extends Kohana_Exception {

	/**
	 * Creates a new translated exception.
	 *
	 * @param   string   error message
	 * @param   array    translation variables
	 * @return  void
	 */
	public function __construct($message, array $variables = NULL, $code = 404)
	{
		// Pass the message to the parent
		parent::__construct($message, $variables, $code);
	}
}
