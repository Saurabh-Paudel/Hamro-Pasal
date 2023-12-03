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
        return view('admin.category.category', compact('category'));
    }

    public function create()
    {
        return view('admin.category.create-category');
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
        session()->flash('success', 'Record inserted successfully.');
        return redirect('/admin/category');
    }
    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.category.edit', compact('category'));
    }
    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/services');
            $category->update([
                'image' => Storage::url($imagePath),
            ]);
        }
        $category->update([
            'name' => $request->name,
            'slug' => $request->slug,
            'status' => $request->status,
        ]);
        session()->flash('success', 'Record updated successfully.');
        return redirect('/admin/category');
    }
    public function delete($id)
    {
        $category = Category::find($id);
        $category->delete();
        session()->flash('success', 'Record deleted successfully.');
        return redirect('/admin/category');
    }
}
