<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index()
    {
        $data = Image::all();

        return view('image',compact('data'));
    }

    public function insert(Request $request)
    {
        $data = Image::create($request->all());
                if($request->hasFile('name'));
                {
                    $request->file('name')->move('images/',$request->file('name')->getClientOriginalName());
                    $data->name=$request->file('name')->getClientOriginalName();
                    $data->save();
                }
                return redirect()->Route('image');
    }
}
