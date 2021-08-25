<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

 class BlogController extends Controller 
 {
     public function view(){

        $blogs=Blog::all();

        return view('blog.blogs')->with('blogs', $blogs);

     }
     public function show($id){

        $blog=Blog::where('id', $id)->first();
        // dd($blog);

        return view('blog.show')->with('blog', $blog);

     }

     
     public function store(Request $request){
         $blog = new Blog();

         $blog->title  = $request->title;
         $blog->author  = $request->author;
         $blog->content  =$request->content;

         $blog->save();

         return "Saved";
     }
 }
 



?>