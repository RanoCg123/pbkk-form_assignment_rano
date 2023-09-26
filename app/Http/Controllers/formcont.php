<?php

namespace App\Http\Controllers;

use App\Models\form_data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\formdata;
class formcont extends Controller
{
    public function create(){
        return view('form');
    }
public function store(Request $request)
{
    $validator = Validator::make($request->all(), [
        'nama' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'gambar' => 'required|image|mimes:jpeg,jpg,png|max:2048', 
        'number' => 'required|numeric|between:2.50,99.99',
        'text' => 'required|string|max:255',
    ]);

    if ($validator->fails()) {
        return redirect('/form')
            ->withErrors($validator)
            ->withInput();
    }
    $name = $request->nama;
    $email = $request->email;
    $number = $request->number;
    $picname = $request->file('gambar') -> getClientOriginalName();
    $picsize = $request->file('gambar') -> getSize();
    $text = $request->text;
    $request->file('gambar')->storeAs('public/images/', $picname);
    $data = new form_data();
    $data -> nama = $name;
    $data -> email = $email;
    $data -> number = $number;
    $data -> picname = $picname;
    $data -> picsize = $picsize;
    $data -> text = $text;
    $data ->save();
    return redirect('/form')->with('success', 'Data Anda berhasil diinputkan dengan sukses!');
}
}
