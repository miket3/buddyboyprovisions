<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Base extends Controller {
public $view;
	public function before() {
		$this->base_url = Kohana::$base_url;
		$this->view = new View_Base;
		$this->view->base_url = Kohana::$base_url;
		$this->view->host = SITE_ENV;
	}

	public function action_index() {
//$this->response->body('hello, world!');
		$view_home = new View_Home;
		$this->view->content = Kostache::factory()->render($view_home);
//$view_contact = new View_Contact;
//$view->content = Kostache::factory()->render($view_contact);
//$view->title = "hello World";   // or  Kohana::$config->load("site.title");
		$this->response->body(Kostache::factory()->render($this->view));
	}

}

// End Base
