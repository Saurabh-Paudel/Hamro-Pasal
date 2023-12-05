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
        $subCategory = new SubCategory();
        $subCategory->category_id = $request->input('category');
        $subCategory->name = $request->input('name');
        $subCategory->slug = $request->input('slug');
        $subCategory->status = $request->input('status');
        $subCategory->save();
        session()->flash('success', 'Record inserted successfully.');
        return redirect('/admin/sub-category');
    }

    public function edit(Request $request, $id)
    {
        {
            $subCategory = SubCategory::find($id);
            $categories = Category::all();
            return view('admin.subcategory.edit', compact('subCategory', 'categories'));
        }
    }

    public function update(Request $request, $id)
    {
        $subCategory = SubCategory::find($id);
        $subCategory->update([
            'category_id' => $request->input('category'),
            'name' => $request->input('name'),
            'slug' => $request->input('slug'),
            'status' => $request->input('status'),
        ]);
        session()->flash('success', 'Record updated successfully.');
        return redirect('/admin/sub-category');
    }

    public function delete($id)
    {
        $subCategory = SubCategory::find($id);
        $subCategory->delete();
        session()->flash('success', 'Record deleted successfully.');
        return redirect('/admin/sub-category');
    }

}
