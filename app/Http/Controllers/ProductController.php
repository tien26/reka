<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\TypeProducts;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {

        $products = Products::with('type')->get();



        foreach ($products as $value) {
            $data[] = [
                'product' => $value,
            ];
        }

        return response()->json([
            'status' => true,
            'data' => $data
        ], 200);
    }

    public function type()
    {
        $type = TypeProducts::with('products')->get();

        foreach ($type as $value) {
            $data[] = [
                'type' => $value,
            ];
        }

        return response()->json([
            'status' => true,
            'data' => $data
        ], 200);
    }
}
