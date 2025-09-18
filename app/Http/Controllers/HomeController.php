<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show()
    {
    return view('index');
    }
    public function show_contact()
    {
    return view('contact');
    }
    public function show_about()
    {
    return view('about');
    }
    public function show_product()
    {
    return view('product');
    }

}
