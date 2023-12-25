<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(){
        $reviews = Review::select('reviews.*','products.name as product_name', 'products.price as product_price')
        ->leftJoin('products','reviews.product_id','products.id')
        ->orderBy('id','desc')
        ->paginate(5);

        return view('admin.dashboard',compact('reviews'));
    }
}
