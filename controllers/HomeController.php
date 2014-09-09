<?php

class HomeController extends BaseController {

    public function __construct()
    {
        //Asset::add('jquery', 'scripts/core/jquery-2.1.1.js');
    }

	public function index() {
		return View::make('home', array('name' => 'World!'));
	}

}
