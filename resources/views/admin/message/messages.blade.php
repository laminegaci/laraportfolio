@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">show messages</div>

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
                                <th scope="col">nom</th>
                                <th scope="col">prenom</th>
                                <th scope="col">email</th>
                                <th scope="col">Contenu</th>
                                <th scope="col">date d'envoi</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                           @foreach($messages as $message)
                                <tr>
                                    <td>{{ $message->id }}</td>
                                    <td> {{ $message->nom }} </td>
                                    <td> {{ $message->prenom }} </td>
                                    <td> {{ $message->email }} </td>
                                    <td> {{ $message->Contenu }} </td>
                                    <td> {{ Carbon\Carbon::parse($message->date_envoie)->diffForHumans() }} </td>
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
