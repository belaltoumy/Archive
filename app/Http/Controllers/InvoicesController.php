<?php

namespace App\Http\Controllers;

use App\Models\Invoices;
use Illuminate\Http\Request;

class InvoicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('invoices.index',[
            'invoices' => Invoices::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('invoices.create', [
            'invoices' => Invoices::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate([
            'code' => 'required',
            'Purchasing_price' => 'required',
            'selling_price' => 'required',
            'date' => 'required',
        ]);

       $invoices = new Invoices();
       $invoices -> code   = strip_tags($request -> input('code')) ;
       $invoices -> Purchasing_price   = strip_tags($request -> input('Purchasing_price')) ;
       $invoices -> selling_price   = strip_tags($request -> input('selling_price')) ;
       $invoices -> date   = strip_tags($request -> input('date')) ;

       $invoices -> save();
// return $request -> input('name');
       return redirect() -> route ('invoices.index');

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
        $invoices = Invoices::find($id);
        return view('invoices.edit', compact('invoices'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'code' => 'required',
            'Purchasing_price' => 'required',
            'selling_price' => 'required',
            'date' => 'required',
        ]);

        // Retrieve the invoices
        $invoices = Invoices::find($id);

        // Update the invoices attributes with the validated data
        $invoices->update($validatedData);

        // Redirect or respond as needed
        return redirect()->route('invoices.index')->with('success', 'invoices updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($invoices)
    {
        $to_delete =  Invoices::findOrFail($invoices);
        $to_delete -> delete();
        return redirect() -> route ('invoices.index');

    }
}
