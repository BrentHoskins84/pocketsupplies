<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $products = Product::inRandomOrder()->take(8)->get();

        return view('landing-page')->with('products', $products);
    }
}
