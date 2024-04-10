<?php

namespace App\Http\Controllers\Guest;

use App\Models\Train;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $trains = Train::where('departure_date', '>=', date('Y-m-d-h-m-s'))->get();
        return view('home', compact("trains"));
    }
}
