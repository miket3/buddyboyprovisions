<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Vsboarshead extends Controller_Base {

	public function before()
	{
		parent::before();
		
	}
	
	public function action_index() {
		$view_vs = new View_Vsboarshead;
		$view_vs->base_url = Kohana::$base_url;
		$this->view->content = Kostache::factory()->render($view_vs);
		$this->view->custom_head ='<link href="'.$this->base_url.'assets/css/products.css" rel="stylesheet">';
		$this->response->body(Kostache::factory()->render($this->view));
	}

}

// End Welcome
