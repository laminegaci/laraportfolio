<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use Carbon\Carbon;
class messageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages = Message::latest('date_envoie')->get();
        return view('admin.message.messages', compact('messages'));
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
        //dd(request()->all());
        request()->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required',
            'contenu' => 'required',
        ]);
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
    Message::create(request()->all() + ['date_envoie' => Carbon::now()]);

    return redirect()->route('contact.create')->withsuccess('Votre message a été envoyer avec succès');
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
