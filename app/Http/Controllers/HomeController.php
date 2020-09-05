<?php

namespace App\Http\Controllers;

use App\Produk;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Produk::all();
        $users = User::all();
        $latest_products = Produk::latest()->get()->take(5);
        $expensive_products = Produk::orderBy('harga', 'DESC')->get()->take(5);

        return view('home', compact('products', 'users', 'latest_products', 'expensive_products'));
    }
}
