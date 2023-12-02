<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::all();
        return view('admin.category', compact('category'));
    }

    public function create()
    {
        return view('admin.create-category');
    }

    public function store(Request $request)
    {
        $image = Storage::disk('local')->put('public/services', $request->image);
        $imageLocation = Storage::url($image);
        Category::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'status' => $request->status,
            'image' => 'http://localhost:8000' . $imageLocation,
        ]);
        return redirect('/admin/category');
    }
}
