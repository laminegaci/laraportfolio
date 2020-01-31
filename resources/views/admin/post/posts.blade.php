@extends('layouts.app')

@section('content')
@include('errors')  
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">show posts <a href="{{route('posts.create')}}">ajouter nv post</a></div>

                <div class="card-body">
                   
                    <ul>
                        <a href=" {{route('dashboard')}} "><li>dashboard</li></a>
                        <a href=" {{route('posts.index')}} "><li>posts</li></a>
                        <a href=" {{route('portfolios.index')}} "><li>projets</li></a>
                        <a href=" {{route('messages.index')}} "><li>messages</li></a>
                    </ul>

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">titre</th>
                                <th scope="col">description</th>
                                <th scope="col">categorie</th>
                                <th scope="col">image</th>
                                <th scope="col">date publication</th>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach($posts as $post)
                           <tr>
                                <th scope="row">{{$post->id}}</th>
                                <td>{{ Str::limit($post->titre,10) }}</td>
                                <td>{{ Str::limit($post->description,20) }}</td>
                                <td>{{$post->categorie}}</td>
                                <td>{{ Str::limit($post->image,10) }}</td>
                                <td>{{$post->date_publication}}</td>
                            </tr>
                           @endforeach
                        </tbody>
                    </table>

                </div>
               
            </div>
            
          
        </div>
    </div>
    

</div>
@endsection
