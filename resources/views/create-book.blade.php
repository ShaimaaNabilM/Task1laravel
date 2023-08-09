@extends('layout')
@section('content')
@extends('dashboard')

            <h1>{{$page}}</h1>



<tbody>
<form method="POST" action="{{route('books.store')}}">
    @csrf
<div class="form-group">
    <label for="exampleInputTitle1">Title</label>
    <input type="text" class="form-control" name="title"  placeholder="EnterTitle">
  </div>
  <div class="form-group ">
    <label for="inputPrice2" class="sr-only">Price</label>
    <input type="number" class="form-control"  placeholder="Price">
  </div>
    <div class="form-check">
    <label for="exampleInputText" class="sr-only">Description</label>
      <textarea class="form-control" name="description" name="description" cols="30" rows="10"></textarea>

    </div>
  
  <button type="submit" class="btn btn-primary mb-2">Confirm identity</button>
</form>

@endsection