<?php

namespace App\Http\Controllers\Control;

use Illuminate\Http\Request;
use App\Models\Advertisement;
use App\Http\Controllers\Controller;

class AdvertisementsController extends Controller
{
    public function index()
    {
        $advertisements = Advertisement::all();
        return view('control.advertisements.index', compact('advertisements'));
    }
    
}
