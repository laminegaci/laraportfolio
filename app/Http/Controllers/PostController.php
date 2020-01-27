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
        $posts = Post::latest('date_publication')->get();;
        $lastposts = Post::latest('date_publication')->take(5)->get();
        return view('posts.posts', compact('posts','lastposts'));
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
    //     //dd(auth()->user());
    //     return view('admin.post.create');
    }
    

    

    /**
     * Store a newly created resource in storage.
     *->
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(Request $request)
    {
    //     //dd(request()->all());
    //     request()->validate([
    //         'titre' => 'required',
    //         'description' => 'required',
    //         'categorie' => 'required',
    //         'image' => 'required',
    //     ]);

    //     // Post::insert([
    //     //     'titre' => request('titre'),
    //     //     'description' => request('description'),
    //     //     'categorie' => request('categorie'),
    //     //     'image' => request('image'),
    //     //     'date_publication' => Carbon::now(),
    //     //     'user_id' => request('user_id'),
    //     // ]);
       
    //     auth()->user()->posts()->create(request()->all() + ['date_publication' => Carbon::now()]);
    //     //Post::create(request()->all() + ['date_publication' => Carbon::now() , 'user_id' => auth()->id()]);

    //     return redirect()->route('posts.index');
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
