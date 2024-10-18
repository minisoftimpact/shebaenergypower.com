<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(Request $request)
    {
        if (!$request->ajax()) {
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

            return view('shop.index', compact('brands', 'countries'));
        }

        $query = Product::query();

        // Apply search filter
        if ($request->has('search')) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        // Apply brand filter
        if ($request->has('brand')) {
            $query->whereIn('brand', $request->brand);
        }

        // Apply country of origin filter
        if ($request->has('country')) {
            $query->whereIn('country', $request->country);
        }

        // Apply price filter
        if ($request->has('price')) {
            if ($request->price == 'high-to-low') {
                $query->orderBy('price', 'desc');
            } elseif ($request->price == 'low-to-high') {
                $query->orderBy('price', 'asc');
            }
        }

        // $products = $query->get();

        // Paginate results
        $products = $query->latest('id')->paginate(12);
        
        return response()->json([
            'html' => view('shop.partials.products', compact('products'))->render(),
            'pagination' => $products->links()->toHtml(),
        ]);
    }

    public function show(Product $product)
    {
        return view('shop.show', compact('product'));
    }
}
