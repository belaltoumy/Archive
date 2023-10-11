<?php

namespace App\Http\Controllers;

use App\Models\Expenses;
use Illuminate\Http\Request;

class ExpensesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('expenses.index',[
            'expenses' => Expenses::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('expenses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate([
            'name' => 'required',
            'price' => 'required',
            'Date' => 'required',
        ]);
        $expenses = new Expenses();
        $expenses -> name   = strip_tags($request -> input('name')) ;
        $expenses -> price   = strip_tags($request -> input('price')) ;
        $expenses -> DAte   = strip_tags($request -> input('Date')) ;
        $expenses -> save();

 // return $request -> input('name');
         return redirect() -> route ('expenses.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $expenses = Expenses::find($id);

        return view('expenses.show', compact('expenses'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $expenses = Expenses::find($id);

        return view('expenses.edit', compact('expenses'));

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
            'Date' => 'required',
        ]);

        // Retrieve the expenses
        $expenses = Expenses::find($id);

        // Update the expenses attributes with the validated data
        $expenses->update($validatedData);

        // Redirect or respond as needed
        return redirect()->route('expenses.index')->with('success', 'expenses updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($expenses)
    {
        $to_delete =  Expenses::findOrFail($expenses);
        $to_delete -> delete();
        return redirect() -> route ('expenses.index');
    }
}
