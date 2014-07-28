<?php

class HomeController extends BaseController {

	public function index() {
		return View::make('home', array('name' => 'World!'));
		//return "Hello world!";
	}

}
