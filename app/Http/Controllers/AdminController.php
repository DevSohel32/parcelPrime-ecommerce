<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view("BackEnd.dashboard.index");
    }

    public function brands(){
        $brands = Brand::orderBy('id','desc')->paginate(10);
        return view("BackEnd.brands.index", compact('brands'));
    }
    public function brands_create(){
        return view("BackEnd.brands.create");
    }
}
