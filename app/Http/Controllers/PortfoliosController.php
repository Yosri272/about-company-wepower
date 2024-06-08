<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfoliosController extends Controller
{
    public function show(Request $request ,$id)
    {
      // dd($request);
        // Use $id variable to fetch the necessary portfolio details
        // $portfolio = Portfolio::findOrFail($id);

        return view('portfolio-details'); // Make sure this matches your view file name
    }
}
