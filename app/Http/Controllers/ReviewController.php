<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    public function index(){
        $review = Review::all();
        return response()->json($review);
    }
}
