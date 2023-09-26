<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\form_data;
class showformcont extends Controller
{
    public function show(){
        $data=form_data::all();
        return view('showform', compact('data'));
    }
}
