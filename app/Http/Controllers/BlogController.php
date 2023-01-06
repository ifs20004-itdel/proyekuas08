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

        // Get the thumbnail image
        // $file = $request->hasFile('thumbnail');
        $file = $request->hasFile('thumbnail');
        $file_name = "";
        if($file){
            $newFile = $request->file('thumbnail');
            $file_name .= $newFile->store('thumbnails');
            // $imgpath = request()->file('file')->store('uploads','public');
        }

        Posts::insert([
            'id_article'=>rand(10000,100000),
            'title'=>$request->title,
            'tags'=>$result,
            'caption'=>$request->caption,
            'thumbnail'=>$file_name,
            'description'=>$request->description,
            'created_at'=> now()
        ]);
        Alert::success('Sukses', 'Dokumen Anda Sudah Diposting.');
        return redirect()->route('dashboard');
    }
    
    public function show($id_article){
        $post = Posts::where('id_article',$id_article)->first();
        return view('blog.showArticle',compact('post'));
    }

    public function upload(Request $request){
        $imgpath = request()->file('file')->store('uploads','public');
        return response()->json(['location'=>"/storage/$imgpath"]);
    }
}
