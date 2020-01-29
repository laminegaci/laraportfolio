@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">show portfolios <a href="{{ route('portfolios.create') }}">ajouter nv projet</a></div>

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
                                <th scope="col">type</th>
                                <th scope="col">description</th>
                                <th scope="col">image</th>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach($portfolios as $portfolio)
                           <tr>
                                <th scope="row">{{$portfolio->id}}</th>
                                <td>{{ ($portfolio->type) }}</td>
                                <td>{{ Str::limit($portfolio->description,20) }}</td>
                                <td>{{ Str::limit($portfolio->image,10) }}</td>
                                
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
