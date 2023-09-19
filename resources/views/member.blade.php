@extends('home')

@section('content')
<table class="table table-responsive">
    @foreach ($members as $mb)
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Code</th>
        <th scope="col">Name</th>
        <th scope="col">Buku</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">{{ $mb->id }}</th>
        <td>{{ $mb->code }}</td>
        <td>{{ $mb->books->title ?? 'no borrow book' }}</td>
        <td>{{ $mb->name }}</td>
        <td>
            <a href="{{ url('borrow')}}">Pinjam Buku</a>
        </td>
      </tr>
    </tbody>
    @endforeach
</table>
@endsection
