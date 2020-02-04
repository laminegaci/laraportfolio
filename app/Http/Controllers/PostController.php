<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Carbon\Carbon;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    


    public function index()
    {
        $posts = Post::latest('date_publication')->paginate(10);
       
        return view('posts.posts', compact('posts'));
    }
  
    public function show($titre)
    {
        $posts = Post::where('titre',$titre)->first();
        return view('posts.show', compact('posts'));   
    }
    public function technologie_cat(){
        $posts = Post::latest('date_publication')->where('categorie','technologie')->get();
        return view('posts.category.technologies', compact('posts'));
    }
    public function windows_cat(){
        $posts = Post::where('categorie','windows')->get();
        return view('posts.category.windows', compact('posts'));
    }
    public function programmation_cat(){
        $posts = Post::where('categorie','programmation')->get();
        return view('posts.category.programmation', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        //
    }
    

    

    /**
     * Store a newly created resource in storage.
     *->
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(Request $request)
    {
        //
    }

    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
