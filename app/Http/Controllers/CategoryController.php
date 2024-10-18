<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function perkins()
    {
        // return
        $products = Product::query()
            ->where('brand', 'perkins')
            ->get();

        return view('categories.perkins', compact('products'));
    }

    public function cummins()
    {
        // return
        $products = Product::query()
            ->where('brand', 'cummins')
            ->get();

        return view('categories.cummins', compact('products'));
    }

    public function hyundai()
    {
        // return
        $products = Product::query()
            ->where('brand', 'hyundai')
            ->get();

        return view('categories.hyundai', compact('products'));
    }

    public function deutz()
    {
        // return
        $products = Product::query()
            ->where('brand', 'deutz')
            ->get();

        return view('categories.deutz', compact('products'));
    }

    public function ricardo()
    {
        // return
        $products = Product::query()
            ->where('brand', 'ricardo')
            ->get();

        return view('categories.ricardo', compact('products'));
    }

    public function gasoline()
    {
        // return
        $products = Product::query()
            ->where('brand', 'gasoline')
            ->get();

        return view('categories.gasoline', compact('products'));
    }
}
