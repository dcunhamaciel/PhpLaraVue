<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Business;

class BusinessController extends Controller
{
    public function index()
    {
        $businesses = Business::all();
        
        //$business = Business::find(1);
        
        //$businessWhere = Business::where('name', 'Mueller PLC')->get();

        //$businessWhereFirst = Business::where('name', 'Mueller PLC')->first();

        //dd($businesses, $business, $businessWhere, $businessWhereFirst);

        return view('businesses', [
            'businesses' => $businesses
        ]);
    }

    public function store(Request $request)
    {
        $input = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'address' => 'string',
            'logo' => 'file',
        ]);

        $file = $input['logo'];
        $path = $file->store('logos');
        $input['logo'] = $path;

        $business = Business::create($input);

        return redirect()->route('businesses.index');
    }

    public function update(int $id)
    {
        $business = Business::find($id);
        $business->name = 'Diego';
        $business->email = 'diego@laravel.com';
        $business->save();

        dd($business);
    }

    public function delete(int $id)
    {
        $business = Business::find($id);
        $business->delete();

        dd($business);
    }
}
