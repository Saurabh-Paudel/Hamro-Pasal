<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    public function index(Request $request)
    {
        $subCategory = SubCategory::select('sub_categories.*', 'categories.name as categoryName')
            ->latest('id')
            ->leftJoin('categories', 'categories.id', '=', 'sub_categories.category_id')
            ->get();

        return view('admin.subcategory.subcategory', compact('subCategory'));
    }

    public function create()
    {
        $categories = Category::orderBy('name', 'ASC')->get();
        $data['categories'] = $categories;
        return view('admin.subcategory.create-subcategory', $data);
    }

    public function store(Request $request)
    {
        // Create a new SubCategory instance
        $subCategory = new SubCategory();
        $subCategory->category_id = $request->input('category');
        $subCategory->name = $request->input('name');
        $subCategory->slug = $request->input('slug');
        $subCategory->status = $request->input('status');

        // Save the sub-category to the database
        $subCategory->save();
        session()->flash('success', 'Record inserted successfully.');
        return redirect('/admin/sub-category');
    }

    public function edit(Request $request, $id)
    {
        {
            $subCategory = SubCategory::findOrFail($id);
            $categories = Category::all();

            return view('admin.subcategory.edit', compact('subCategory', 'categories'));
        }
    }
}
