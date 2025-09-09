<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('product', ['products' => $products]);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $products = $request->all();
        Product::create();
        return redirect('/products/register', ['products' => $product]);
    }

    public function productPaginated()
    {
        $products = Product::Paginate(6);
		return view('index', ['products' => $products]);
    }
}
