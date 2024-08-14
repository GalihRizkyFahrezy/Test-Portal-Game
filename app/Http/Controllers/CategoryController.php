<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{

    public function index()
    {
        $data = DB::select("select * from categories");

        return view('category', compact('data'));
    }

    public function insert(Request $request)
    {
        $category = $request->category;
       DB::insert("insert into categories (category) values ('?');",[$category]);

        return redirect()->route('category');
    }
}
