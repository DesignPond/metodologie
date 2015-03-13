<?php

class HomeController extends BaseController {

	public function index()
	{
		return View::make('index');
	}

	public function content()
	{
		return View::make('content');
	}

	public function detail()
	{
		return View::make('detail');
	}

    public function loi()
    {
        return View::make('loi');
    }

}
