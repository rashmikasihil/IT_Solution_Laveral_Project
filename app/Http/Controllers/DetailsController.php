<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailsController extends Controller
{
    public function detil()
    {
        // Return a view for the detailed services page
        return view('services.detils');
    }
}