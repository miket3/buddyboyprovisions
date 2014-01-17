<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Products_Turkey extends Controller_Base {

	public function before()
	{
		parent::before();
		
	}
	
	public function action_index() {
		$view_product = new View_Products_Turkey;
		$this->view->content = Kostache::factory()->render($view_product);
		$this->view->custom_head ='<link href="'.$this->base_url.'assets/css/products.css" rel="stylesheet">';
		$this->response->body(Kostache::factory()->render($this->view));
	}

}

// End Welcome
