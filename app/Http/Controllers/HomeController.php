<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Story;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $stories = Story::all();

        $categories = [
            [
                'name' => 'necklaces & pendants',
                'image_path' => 'categories_images/pendants.webp'
            ],
            [
                'name' => 'earrings',
                'image_path' => 'categories_images/earrings.webp'
            ],
            [
                'name' => 'rings',
                'image_path' => 'categories_images/rings.webp'
            ],
            [
                'name' => 'bracelets',
                'image_path' => 'categories_images/bracelets.webp'
            ],
            [
                'name' => 'engagement rings',
                'image_path' => 'categories_images/engagement.webp'
            ],
            [
                'name' => 'home decor',
                'image_path' => 'categories_images/home.webp'
            ],
        ];

        return view('home', [
            'most_recent_products' => $products,
            'categories' => $categories,
            'stories' => $stories,
        ]);
    }
}
