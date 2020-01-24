<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;
use Carbon\Carbon;
class ManagePostController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('admin.post.posts', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //dd(auth()->user());
        return view('admin.post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //dd(request()->all());
         request()->validate([
            'titre' => 'required',
            'description' => 'required',
            'categorie' => 'required',
            'image' => 'required',
        ]);

        // Post::insert([
        //     'titre' => request('titre'),
        //     'description' => request('description'),
        //     'categorie' => request('categorie'),
        //     'image' => request('image'),
        //     'date_publication' => Carbon::now(),
        //     'user_id' => request('user_id'),
        // ]);
       
        auth()->user()->posts()->create(request()->all() + ['date_publication' => Carbon::now()]);
        //Post::create(request()->all() + ['date_publication' => Carbon::now() , 'user_id' => auth()->id()]);

        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
