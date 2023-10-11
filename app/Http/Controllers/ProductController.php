<?php

namespace App\Http\Controllers;

use App\Models\Categores;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\Console\Input\Input;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('Product.index', [
            'products' => Products::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.create', [
            'categories' => Categores::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    $request->validate([
        'name' => 'required',
        'price' => 'required',
    ]);

    $product = new Products();
    $product->name = strip_tags($request->input('name'));
    $product->price = strip_tags($request->input('price'));
    $product->id_category = $request->input('id_category');
    $product->save();

    // Set the code after saving the product
    $product->code = $request->input('id_category') . "_" . $product->id;

    // Update the product with the new code
    $product->update(['code' => $product->code]);

    return redirect()->route('product.index');
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Products::find($id);
        $categores = Categores::all();

        return view('product.edit', compact('product', 'categores'));
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
        $product = Products::find($id);

        // Update the category attributes with the validated data
        $product->update($validatedData);

        // Redirect or respond as needed
        return redirect()->route('product.index')->with('success', 'product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($product)
    {
        $to_delete =  Products::findOrFail($product);
        $to_delete->delete();
        return redirect()->route('product.index');
    }
}
