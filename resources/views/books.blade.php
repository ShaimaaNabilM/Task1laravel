@extends('layout')
@extends('dashboard')
@section('content')

            <h1>{{$page}}</h1>

<table class="table table-dark">
<thead>
<tr>
  <th scope="col">#</th>
  <th scope="col">Title</th>
  <th scope="col">price</th>
  <th scope="col">View</th>
  <th scope="col">Edit</th>
 
  
  <th scope="col">Delete</th>
 
</tr>
</thead>


<tbody>
            @foreach ($books as $index => $book)
                <tr>
                    <th scope="row">{{ $book["id"] }}</th>
                    <td>{{ $book['title'] }}</td>
                    <td>{{ $book['price'] }}</td>
                   
                        <td><a href="{{ route('books.show',$book->id)}}">View</a></td>
                        <td><a href="{{ route('books.edit', $book->id) }}" class="btn btn-success">Edit</a></td>
                        <td>
                        <form action="{{ route('books.destroy',$book->id)}}" method="POST" class="d-inline">
                            @csrf
                            @method('Delete')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure want to delete this book?')">Delete</buton>
</form>
</td>

                </tr>
            @endforeach


            </tbody>
</table>
{{$books->links()}}
@endsection