<?php

namespace App\Http\Controllers;

use App\Models\Categores;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // $categores= Categores::all();
        // return view('Categore.index')->with('Categore', $categores);
        return view('Categore.index',[
            'categories' => Categores::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categore.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate([
            'name' => 'required',
            'price' => 'required',
        ]);

       $category = new Categores();
       $category -> name   = strip_tags($request -> input('name')) ;
       $category -> price   = strip_tags($request -> input('price')) ;

       $category -> save();
// return $request -> input('name');
       return redirect() -> route ('categore.index');
    }



    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $category = Categores::find($id);

        return view('categore.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Categores::find($id);

        return view('categore.edit', compact('category'));
        // return "lgkh";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required',
            'price' => 'required',
        ]);

        // Retrieve the category
        $category = Categores::find($id);

        // Update the category attributes with the validated data
        $category->update($validatedData);

        // Redirect or respond as needed
        return redirect()->route('categore.index')->with('success', 'Category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($category)
    {
        $to_delete =  Categores::findOrFail($category);
        $to_delete -> delete();
        return redirect() -> route ('categore.index');
    }
}
