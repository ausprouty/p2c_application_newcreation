<?php

namespace App\Http\Controllers;

class SiteController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function clear()
    {
        return view('clear');
    }
    public function debug()
    {
        return view('debug');
    }
    public function ebook($iso)
    {
        //todo: I need to modify view with new content.
        return view('ebook', ['iso'=> $iso]);
    }
    public function test()
    {
        return view('test');
    }
    
    
}
