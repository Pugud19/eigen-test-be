@extends('home')

@section('content')
<a href="{{ route('pinjamans.create')}}" class="btn btn-primary">Tambah</a>
<table class="table table-responsive">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Book id</th>
        <th scope="col">Member id</th>
        <th scope="col">Tanggal Pinjam</th>
      </tr>
    </thead>
    @foreach ($pinjamans as $pj)
    <tbody>
      <tr>
        <th scope="row">{{ $pj->id }}</th>
        <td>{{ $pj->book_id }}</td>
        <td>{{ $pj->member_id }}</td>
        <td>{{ $pj->tanggal_pinjam }}</td>
      </tr>
    </tbody>
    @endforeach
</table>
@endsection
