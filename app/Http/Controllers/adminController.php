<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function quotes(){
        return view('admin.quotes');
    }
}
