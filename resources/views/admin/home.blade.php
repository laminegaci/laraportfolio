@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in
                    <div class="row">
                    <div class="col-md-4 bg-danger">aaa</div>
                    <div class="col-md-4 bg-info">bbb</div>
                    <div class="col-md-4 bg-danger">ccc</div>
                    </div>
                    <ul>
                        <a href=" {{route('dashboard')}} "><li>dashboard</li></a>
                        <a href=" {{route('posts.index')}} "><li>posts</li></a>
                        <a href=" {{route('portfolios.index')}} "><li>projets</li></a>
                        <a href=" {{route('messages.index')}} "><li>messages</li></a>
                    </ul>

                </div>
               
            </div>
            
          
        </div>
    </div>
    

</div>
@endsection
