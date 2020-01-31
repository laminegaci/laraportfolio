<?php

namespace App\Http\Controllers;
use App\Post;
use App\Category;
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
        $categories = Category::all();
        return view('admin.post.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->file('image'));
        // dd(request()->all());
        $request->validate([
            'titre' => 'required|min:5',
            'description' => 'required',
            'categorie' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if($file   =   $request->file('image')) {
 
            $name      =   time().time().'.'.$file->getClientOriginalExtension();
             
            $target_path    =   public_path('/uploads/');
             
                if($file->move($target_path, $name)) {
                    
                    // save file name in the database
                    auth()->user()->posts()->create([
                        'titre' => request('titre'),
                        'description' => request('description'),
                        'categorie' => request('categorie'),
                        'image' => "$name",
                        'date_publication' => Carbon::now()
                        ]);
                    
                    
                        return redirect()->route('posts.index')->with("successPost", "Post est ajouté avec succès");
                }
            }
       
        // auth()->user()->posts()->create($request->all() + ['date_publication' => Carbon::now());
        //Post::create(request()->all() + ['date_publication' => Carbon::now() , 'user_id' => auth()->id()]);   
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
