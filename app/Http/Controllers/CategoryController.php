<?php

namespace App\Http\Controllers;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.category');
    }

    public function create()
    {
        return view('admin.create-category');
    }
}
