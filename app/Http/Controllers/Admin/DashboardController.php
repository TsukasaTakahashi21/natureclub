<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;

class DashboardController extends Controller
{
    public function index()
    {
        $newItems = Product::with('category', 'images')->latest()->take(5)->get();

        $sweat = Product::with('category', 'images')->whereHas('category',function ($query) {
            $query->where('name', 'sweat');
        })->get();
        $tshirt = Product::with('category', 'images')->whereHas('category',function ($query) {
            $query->where('name', 'T-shirt');
        })->get();
        $cap = Product::with('category', 'images')->whereHas('category',function ($query) {
            $query->where('name', 'cap');
        })->get();

        return view('admin.dashboard', compact('newItems', 'sweat', 'tshirt', 'cap'));
    }
}
