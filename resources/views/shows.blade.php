
@extends('layout')
@extends('dashboard')

@section('title')
   Book Details
@endsection

@section('content')
<div class="card" style="width: 37rem;">
  <div class="card-body">
    <h1>Title: {{ $book->title }}</h1>
    <h1>Price: {{ $book->price }}</h1>
  </div>
</div>
@endsection