<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Material;
use App\Models\Category;

class ProductController extends Controller
{
    public function index()
    {
        $materials = Material::all();
        $categories = Category::all();

        return view('products', [
            'materials' => $materials,
            'categories' => $categories,
        ]);
    }

    public function show()
    {
        return null;
    }
}
