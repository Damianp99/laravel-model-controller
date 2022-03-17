@extends('layouts.main')
@section('content')
@forelse ($movies as $movie)
@include('includes.card_movie')     
@empty
<p>Non c'è alcun film da vedere</p>
@endforelse
@endsection