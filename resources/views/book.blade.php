@extends('home')

@section('content')
<table class="table table-responsive">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Code</th>
        <th scope="col">Title</th>
        <th scope="col">Author</th>
        <th scope="col">Stock</th>
      </tr>
    </thead>
    @foreach ($books as $bk)
    <tbody>
      <tr>
        <th scope="row">{{ $bk->id }}</th>
        <td>{{ $bk->code }}</td>
        <td>{{ $bk->title }}</td>
        <td>{{ $bk->author }}</td>
        <td>{{ $bk->stock }}</td>
      </tr>
    </tbody>
    @endforeach
</table>
@endsection
