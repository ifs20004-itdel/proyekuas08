<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;
use App\Models\Posts;

class BlogController extends Controller
{
    public function create(){
        return  view('admin.createBlog');
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'tags' => 'required',
        ]);

        // Explode tags
        $tags = $request->tags;
        $tags = json_decode($tags);
        $result = "";
        foreach($tags as $tag){
            $result .= $tag->value." ";
        }

        Posts::insert([
            'id_article'=>rand(10000,100000),
            'title'=>$request->title,
            'tags'=>$result,
            'description'=>$request->description,
            'created_at'=> now()
        ]);
        Alert::success('Sukses', 'Dokumen Anda Sudah Diposting.');
        return redirect()->route('dashboard');
    }
    
    public function upload(Request $request){
    //    $fileName = $request->file('file')->getClientOriginalName();
    //    $path = $request()->file('file')->storeAs('uploads',$fileName,'public');
    //    return response()->json(['location'=>"/storage/$path"]);

        $imgpath = request()->file('file')->store('uploads','public');
        return response()->json(['location'=>"/storage/$imgpath"]);
    }
}
