<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Intervention\Image\Laravel\Facades\Image;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return
        $products = Product::query()
            ->latest()
            ->paginate();

        return view("products.index", compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $product = new Product();

        // return
        $brands = Product::query()
            ->distinct()
            ->pluck('brand')
            ->toArray();

        // return
        $countries = Product::query()
            ->distinct()
            ->pluck('country')
            ->toArray();

        return view("products.create", compact(
            'product',
            'brands',
            'countries',
        ));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request;

        $product = Product::create(
            $this->getValidatedData($request)
            + $this->getPhotoData($request)
        );

        return to_route('products.show', $product->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return to_route('products.index', [
            'product' => $product->id, 
        ]);

        return $product;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        // return
        $brands = Product::query()
            ->distinct()
            ->pluck('brand')
            ->toArray();

        // return
        $countries = Product::query()
            ->distinct()
            ->pluck('country')
            ->toArray();

        return view("products.edit", compact(
            'product',
            'brands',
            'countries',
        ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        // return $request;

        $product->update(
            $this->getValidatedData($request, $product->id) 
            + $this->getPhotoData($request, $product->photos)
        );

        return to_route('products.show', $product->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        return $product;
    }

    protected function getValidatedData($request, $id = '')
    {
        return $request->validate([
            "name" => "required|string",
            "slug" => [
                'required',
                Rule::unique('products')->ignore($id),
            ],
            "price" => "",
            "brand" => "required|string",
            "model" => "required|string",
            "country" => "required|string",
            "description" => "",
            // "photos" => "array",
            "specifications" => "array",
        ]);
    }

    protected function getPhotoData($request, $photos = [])
    {
        if(!$request->hasFile('photos')) {
            return [];  
        }

        foreach($request->file('photos') as $index => $file) {
            $image = Image::read($file);

            $photos[$index] = $image->toGif()->toDataUri();
        }

        return [
            "photos" => $photos
        ];
    }
}
