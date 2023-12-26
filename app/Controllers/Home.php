<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('index');
    }

    public function about(): string
    {
        return view('about');
    }
    
    public function service(): string
    {
        return view('service');
    }
    
    public function team(): string
    {
        return view('team');
    }
    
    public function contact(): string
    {
        return view('contact');
    }
}
