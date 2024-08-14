<?php

namespace App\Http\Controllers;

use App\Models\MainContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainContentController extends Controller
{
    public function index()
    {
        $data = DB::select("select users.id, users.name, maincontent.id, maincontent.title, maincontent.category, maincontent.created from users inner join maincontent on users.id = maincontent.id_penulis;");
        return view('dashboard', compact('data'));
    }

    public function create()
    {
        $data = DB::select("select * from categories");

        return view('create-main-content', compact('data'));
    }

    public function postcreate(Request $request)
    {

                $data = MainContent::create($request->all());
                if($request->hasFile('photo'));
                {
                    $request->file('photo')->move('maincontent/',$request->file('photo')->getClientOriginalName());
                    $data->photo=$request->file('photo')->getClientOriginalName();
                    $data->save();
                }
                return redirect()->Route('dashboard');
    }

    public function deletemaincontent($id)
    {

        $data = MainContent::find($id);
        $data->delete();
        return redirect()->Route('dashboard');
    }

    public function edit($id)
    {
        //        $data = DB::select("select categories.id as kategori_id, categories.category, maincontent.id, maincontent.id, maincontent.title, maincontent.photo from categories join maincontent on categories.id = maincontent.category where maincontent.id ={} ");
        $data = MainContent::find($id);
        
        return view('edit-main-content',compact('data'));
    }

    public function update($id, Request $request)
    {
        $data = MainContent::find($id);
        
        $data->update($request->all());
        if($request->photo != null)
        {
            if($request->hasFile('photo'));
            {
                $request->file('photo')->move('maincontent/',$request->file('photo')->getClientOriginalName());
                $data->photo=$request->file('photo')->getClientOriginalName();
                $data->save();
            }
        }

        return redirect()->route('dashboard');
    }
}
