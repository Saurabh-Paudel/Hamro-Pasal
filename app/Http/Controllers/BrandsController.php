<?php

namespace App\Http\Controllers;

class BrandsController extends Controller
{
    public function index()
    {
        return view('admin.brands.brands');
    }
}
