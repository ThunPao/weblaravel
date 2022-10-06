<?php

namespace App\Http\Controllers;

use App\Models\brands;
use Illuminate\Http\Request;

class BrandControllers extends Controller
{

    public function index()
    {
        {
            $brands = brands::all();
        
            return view('brands/index',compact('brands'));
        }
    }

    public function store(Request $request)
    {
        brands::create($request->all());
        return redirect('/brands');
    }

    public function create()
    {
            return view('brands/create');
    }
    public function edit($id)
    {
        $brands = brands::findOrFail($id);

        return view('brands/edit', compact('brands'));
    }

    public function show($id)
    {
        $brand = brands::find($id);
        return view('/brands',compact('brand'));
    }


    public function update(Request $request, $id)
    {
        $brand = brands::find($id);
        $brand->update($request->all());

        return redirect('/brands');
    }


    public function destroy($id)
    {
        brands::destroy($id);
        return redirect('/brands');
    }
}
