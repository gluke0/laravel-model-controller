@extends('layout.app')

@section('pageTitle')
    | Movies
@endsection

@section('content')
<div id="moviespage">
    <div class="container">
        <h1 class="mb-5 pt-3">I am <a href="{{ route('home') }}">Movies &#127902;</a> but if you click me I will be &#127968;</h1>
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
                        <h4 class="card-title text-primary">{{$elem['original_title']}}</h4>
                        <h6>{{$elem['title']}}</h6>
                        <span class="btn btn-primary">{{$elem['vote']}}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>  
</div>
@endsection