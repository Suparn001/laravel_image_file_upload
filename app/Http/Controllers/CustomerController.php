<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Customer');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $file = $request->file('photo');
        $request->validate([
            'photo'=>'required|mimes:jpeg,jpg,png|max:10240'
        ]);
        $path = $request->file('photo')->store('images','public');
        //return $path;
        $fileName = time().'-'.$file->getClientOriginalExtension();
        $path = $request->file('photo')->storeAs('images',$fileName,'public');
        
         User::create([
            'file_name'=>$path
         ]
            
         );
        
        //return $path ;
        //return redirect()->route('photo.index')->with('status','done successfully');
        //dd($file);

    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
