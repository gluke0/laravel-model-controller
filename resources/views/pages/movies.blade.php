@extends('layout.app')

@section('pageTitle')
    Laravel App | Movies
@endsection

@section('content')
<h1>Movies</h1>

<div class="container">
    <div class="row">
        @foreach($movies as $elem) 
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <div>
                        <span class="text-danger">{{$elem['id']}}</span>
                        <span><strong> | {{$elem['date']}} | </strong></span>
                        <span class="font-italic">{{$elem['nationality']}}</span>
                    </div>
                    <h2 class="card-title text-primary">{{$elem['original_title']}}</h2>
                    <h5>{{$elem['title']}}</h5>
                    <span class="btn btn-primary">{{$elem['vote']}}</span>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>  

@endsection