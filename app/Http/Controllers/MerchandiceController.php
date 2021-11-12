<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Merchandice;

class MerchandiceController extends Controller
{
    public function index()
    {
        $merchandices = Merchandice::all();

        return view('pages.merchandices',['merchandices'=>$merchandices]);
    }
}
