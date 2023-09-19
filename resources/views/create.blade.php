@extends('home')

@section('content')
<form method="POST" action="{{ route('members.borrow') }}">
    @csrf
    <div class="form-group">
        <label for="book">Select a Book to Borrow:</label>
        <select name="book" id="book" class="form-control">
            @foreach ($books as $book)
        <option value="{{ $book->id }}">{{ $book->title }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Borrow</button>
</form>
@endsection
