<?php

namespace App\Http\Controllers;

use App\Models\notebooks;
use Illuminate\Http\Request;

class NotebookControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        {
            $notebook = notebooks::all();
        
            return view('pages/index',compact('notebook'));
        }
    }

    public function index2()
    {
        {
            $notebooks = notebooks::all();
        
            return view('notebooks/index',compact('notebooks'));
        }
    }

    public function create()
    {
            return view('notebooks/create');
    }
    public function edit($id)
    {
        $notebooks = notebooks::findOrFail($id);

        return view('notebooks/edit', compact('notebooks'));
    }

    public function show($id)
    {
        $notebook = notebooks::find($id);
        return view('pages/info',compact('notebook'));
    }


    public function store(Request $request)
    {
        notebooks::create($request->all());
        return redirect('/notebooks');
    }


    public function update(Request $request, $id)
    {
        $notebook = notebooks::find($id);
        $notebook->update($request->all());

        return redirect('/notebooks');
    }


    public function destroy($id)
    {
        notebooks::destroy($id);
        return redirect('/notebooks');
    }
}
