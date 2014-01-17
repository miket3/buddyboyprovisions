<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Home extends Controller_Base {

	public function before()
	{
		parent::before();
		
	}
	
	public function action_index() {
		$view_home = new View_Home;
		$this->view->content = Kostache::factory()->render($view_home);
		$this->response->body(Kostache::factory()->render($this->view));
	}

}

// End Welcome
