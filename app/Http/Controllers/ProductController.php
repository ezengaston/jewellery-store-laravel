<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Material;
use App\Models\Category;
use App\Models\Gemstone;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $materials = Material::all();
        $categories = Category::all();
        $gemstones = Gemstone::all();

        $categorySelected = Category::where('name', request('category'))->get();
        $materialSelected = Material::where('name', request('material'))->get();

        $categorySelectedName = "bracelets";
        $materialSelectedName = "gold";

        $categorySelectedId = null;
        $materialSelectedId = null;

        if (count($categorySelected) > 0) {
            $categorySelectedId = $categorySelected[0]->id;
            $categorySelectedName = $categorySelected[0]->name;
        }

        if (count($materialSelected) > 0) {
            $materialSelectedId = $materialSelected[0]->id;
            $materialSelectedName = $materialSelected[0]->name;
        }

        $data = Product::where('category', $categorySelectedId)
                        ->where('material', $materialSelectedId)
                        ->get();

        return view('products', [
            'materials' => $materials,
            'categories' => $categories,
            'gemstones' => $gemstones,
            'data' => $data,
            'categorySelected' => $categorySelectedName,
            'materialSelected' => $materialSelectedName,
        ]);
    }

    public function show()
    {
        return null;
    }
}
