@extends('home')

@section('content')
<table class="table table-responsive">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Code</th>
        <th scope="col">Name</th>
      </tr>
    </thead>
    @foreach ($members as $mb)
    <tbody>
      <tr>
        <th scope="row">{{ $mb->id }}</th>
        <td>{{ $mb->code }}</td>
        <td>{{ $mb->name }}</td>
      </tr>
    </tbody>
    @endforeach
</table>
@endsection
