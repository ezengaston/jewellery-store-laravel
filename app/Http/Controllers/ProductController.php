<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Material;

class ProductController extends Controller
{
    public function index()
    {
        $materials = Material::all();

        return view('products', [
            'materials' => $materials,
        ]);
    }

    public function show()
    {
        return null;
    }
}
