<?php

class PhotoBookController extends BaseController {

    public function __construct()
    {
        //Asset::add('jquery', 'scripts/core/jquery-2.1.1.js');
    }

    public function index() {
        return View::make('PhotoBook', array('name' => 'World!'));
    }

}