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
        $gemstoneSelected = Gemstone::where('name', request('gemstone'))->get();
        $search = request('search');

        $categorySelectedName = 'any';
        $materialSelectedName = 'any';
        $gemstoneSelectedName = 'any';

        $categorySelectedId = '%';
        $materialSelectedId = '%';
        $gemstoneSelectedId = '%';

        $data = [];

        if (count($categorySelected) > 0) {
            $categorySelectedId = $categorySelected[0]->id;
            $categorySelectedName = $categorySelected[0]->name;

            if ($categorySelectedId === 4) {
                $categorySelectedId = '%';
            }
        }

        if (count($materialSelected) > 0) {
            $materialSelectedId = $materialSelected[0]->id;
            $materialSelectedName = $materialSelected[0]->name;

            if ($materialSelectedId === 5) {
                $materialSelectedId = '%';
            }
        }

        if (count($gemstoneSelected) > 0) {
            $gemstoneSelectedId = $gemstoneSelected[0]->id;
            $gemstoneSelectedName = $gemstoneSelected[0]->name;

            if ($gemstoneSelectedId === 4) {
                $gemstoneSelectedId = '%';
            }
        }

        if (!$search) {
            $data = Product::where('category', 'like', $categorySelectedId)
                            ->where('material', 'like', $materialSelectedId)
                            ->where('gemstone', 'like', $gemstoneSelectedId)
                            ->get();
        } else {
            $categorySelectedName = "any";
            $materialSelectedName = "any";
            $gemstoneSelectedName = "any";

            $data = Product::where('name', 'like', $search . '%')->get();
        }

        return view('products', [
            'materials' => $materials,
            'categories' => $categories,
            'gemstones' => $gemstones,
            'search' => $search,
            'products' => $data,
            'categorySelected' => $categorySelectedName,
            'materialSelected' => $materialSelectedName,
            'gemstoneSelected' => $gemstoneSelectedName,
        ]);
    }

    public function show()
    {
        return null;
    }
}
