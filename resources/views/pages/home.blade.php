@extends('layout.app')

@section('pageTitle')
    | Home
@endsection

@section('content')
<div id="homepage">
    <div class="container">
        <h1 class="pt-3">I am <a href="{{ route('movies') }}">Home</a> but if you click me I will turn Movies</h1>
    </div>
</div>
@endsection