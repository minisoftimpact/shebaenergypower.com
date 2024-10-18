<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function products()
    {
        return view('pages.products');
    }

    public function services()
    {
        return view('pages.services');
    }

    public function media()
    {
        return view('pages.media');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function about()
    {
        return view('pages.about');
    }
}
