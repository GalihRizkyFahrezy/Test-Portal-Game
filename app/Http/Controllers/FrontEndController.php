<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontEndController extends Controller
{
    public function index()
    {
        //$data = DB::select("select * from maincontent");
        $data = DB::select("select categories.id as id_category, categories.category, maincontent.id, maincontent.title, maincontent.photo, maincontent.created from categories join maincontent on categories.id = maincontent.category order by created asc;");
        $categories = DB::select("select * from categories;");

        return view('welcome',compact('data','categories'));
    }


    public function read($id)
    {
        $data = DB::select("select users.name, maincontent.title, maincontent.category, maincontent.photo, maincontent.created, maincontent.content from users inner join maincontent on users.id=maincontent.id_penulis where maincontent.id={$id}");
        return view("frontend/content", compact('data'));
    }
}
