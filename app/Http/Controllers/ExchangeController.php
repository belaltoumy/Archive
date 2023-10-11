<?php

namespace App\Http\Controllers;
use App\Models\Exchange;

use Illuminate\Http\Request;

class ExchangeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('exchange.index',[
            'exchange' => Exchange::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('exchange.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate([
            'Many_Tl' => 'required',
            'Many_DR' => 'required',
            'exchange_rate' => 'required',
        ]);

       $exchange = new Exchange();
       $exchange -> Many_Tl   = strip_tags($request -> input('Many_Tl')) ;
       $exchange -> Many_DR   = strip_tags($request -> input('Many_DR')) ;
       $exchange -> exchange_rate   = strip_tags($request -> input('exchange_rate')) ;
       $exchange -> save();

       return redirect() -> route ('exchange.index');

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
        $exchange = Exchange::find($id);

        return view('exchange.edit', compact('exchange'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'Many_Tl' => 'required',
            'Many_DR' => 'required',
            'exchange_rate' => 'required',
        ]);

        // Retrieve the exchange
        $exchange = Exchange::find($id);
        // Update the exchange attributes with the validated data
        $exchange->update($validatedData);

        // Redirect or respond as needed
        return redirect()->route('exchange.index')->with('success', 'exchange updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($exchange)
    {
        $to_delete =  Exchange::findOrFail($exchange);
        $to_delete -> delete();
        return redirect() -> route ('exchange.index');

    }
}
