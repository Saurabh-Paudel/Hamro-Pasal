<?php

namespace App\Http\Controllers;

use App\Models\Brands;
use Illuminate\Http\Request;

class BrandsController extends Controller
{
    public function index()
    {
        $brands = Brands::all();
        return view('admin.brands.brands', compact('brands'));
    }

    public function create()
    {
        return view('admin.brands.create-brands');
    }

    public function store(Request $request)
    {
        Brands::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'status' => $request->status,
        ]);
        session()->flash('success', 'Record inserted successfully.');
        return redirect('/admin/brands');
    }

    public function edit($id)
    {
        $brands = Brands::find($id);
        return view('admin.brands.edit', compact('brands'));
    }

    public function update(Request $request, $id)
    {
        $brands = Brands::find($id);
        $brands->update([
            'name' => $request->name,
            'slug' => $request->slug,
            'status' => $request->status,
        ]);
        session()->flash('success', 'Record updated successfully.');
        return redirect('/admin/brands');
    }

    public function delete($id)
    {
        $brands = Brands::find($id);
        $brands->delete();
        session()->flash('success', 'Record deleted successfully.');
        return redirect('/admin/brands');
    }
}
