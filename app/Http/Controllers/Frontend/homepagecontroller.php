<?php

namespace App\Http\Controllers\frontend;

use App\Models\Car;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $cars = Car::latest()->get();
        return view('frontend.homepage', compact('cars'));
    }
}
