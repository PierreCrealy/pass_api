<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{
    public function index()
    {
        return response()
            ->json([
                'products' => Product::where('proposed', 1)->get()
            ]);
    }


    public function show(Product $product)
    {
        return response()
            ->json([
                'product' => $product,
            ]);
    }

    public function getGroupedByCategory()
    {
        return response()
            ->json([
                'products' => Product::where('proposed', 1)->get()->groupBy('category'),
            ]);
    }

    public function getByCategory(string $category)
    {
        return response()
            ->json([
                'products' => Product::where(['category' => $category, 'proposed' => 1])->get(),
            ]);
    }
}
