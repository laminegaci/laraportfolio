<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class messageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function create()
    {   
        //dd(auth()->user());
        return view('contact');
    }

   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd(request()->all());
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
