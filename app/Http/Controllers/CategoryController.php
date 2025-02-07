<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function perkins()
    {
        // return
        $products = $this->getBrandProducts('perkins');

        return view('categories.perkins', compact('products'));
    }

    public function cummins()
    {
        // return
        $products = $this->getBrandProducts('cummins');

        return view('categories.cummins', compact('products'));
    }

    public function hyundai()
    {
        // return
        $products = $this->getBrandProducts('hyundai');

        return view('categories.hyundai', compact('products'));
    }

    public function deutz()
    {
        // return
        $products = $this->getBrandProducts('deutz');

        return view('categories.deutz', compact('products'));
    }

    public function ricardo()
    {
        // return
        $products = $this->getBrandProducts('ricardo');

        return view('categories.ricardo', compact('products'));
    }

    public function gasoline()
    {
        // return
        $products = $this->getBrandProducts('gasoline');

        return view('categories.gasoline', compact('products'));
    }

    private function getBrandProducts($brand)
    {
        return Product::query()
            ->active()
            ->where('brand', $brand)
            ->get();
    }
}
