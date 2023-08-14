@extends('layout')
@section('content')
@extends('dashboard')

            <h1>{{$page}}</h1>
            @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif



<tbody>
<form method="POST" action="{{route('books.store')}}" enctype="multipart/form-data">
    @csrf
<div class="form-group">
    <label for="exampleInputTitle1">Title</label>
    <input type="text" class="form-control" name="title"  placeholder="EnterTitle" value="{{ old('title') }}">
  </div>
  <div class="form-group ">
    <label for="inputPrice2" class="sr-only">Price</label>
    <input type="number" name="price" class="form-control"  placeholder="Price" value="{{ old('price') }}">
  </div>
    <div class="form-check">
    <label for="exampleInputText" class="sr-only">Description</label>
      <textarea class="form-control" name="description" value="{{ old('description') }}"name="description" cols="30" rows="10"></textarea>

    </div>
</br>
    <div class="form group">
    <label for="exampleInputSelect" class="sr-only">Category</label>
    <select name="category" class="form-select" aria-label="Default select example" value="{{ old('category') }}">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
 
</select>
    </div>
</br>

<div class="mb-3">
            <label for="formFile" class="form-label">Default file input example</label>
            <input class="form-control" name="pic" type="file" id="formFile">
        </div>
  
  <button type="submit" class="btn btn-primary mb-2">Confirm identity</button>
</form>

@endsection