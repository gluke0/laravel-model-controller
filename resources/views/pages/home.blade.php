@extends('layout.app')

@section('pageTitle')
    | Home
@endsection

@section('content')
<div id="homepage">
    <div class="container">
        <h1 class="pt-3">I am <a href="{{ route('movies') }}">Home &#127968; </a> but if you click me I will be &#127902; </h1>
    </div>
</div>
@endsection