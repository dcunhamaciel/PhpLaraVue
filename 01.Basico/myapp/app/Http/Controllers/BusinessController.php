<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Business;

class BusinessController extends Controller
{
    public function index()
    {
        $businesses = Business::all();
        
        $business = Business::find(1);
        
        $businessWhere = Business::where('name', 'Mueller PLC')->get();

        $businessWhereFirst = Business::where('name', 'Mueller PLC')->first();

        dd($businesses, $business, $businessWhere, $businessWhereFirst);
    }

    public function store()
    {
        $business = Business::create([
            'name' => 'Jon Snow',
            'email' => 'jon@snow.com',
            'address' => 'Rua Jon by Snow',
        ]);

        dd($business);
    }
}
