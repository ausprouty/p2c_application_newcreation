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
    public function english_ebook()
    {
        return view('ebook', ['iso'=> 'en']);
    }
    public function ebook($iso)
    {
        return view('ebook', ['iso'=> $iso]);
    }
    public function test()
    {
        return view('test');
    }
    
    
}
