<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Unit;

class UnitController extends Controller
{
    public function index()
    {
        $units = Unit::all();

        return view('pages.units',['units'=>$units]);
    }
}
