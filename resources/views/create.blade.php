@extends('home')

@section('content')
        @if ($errors->any())
        @foreach ($errors->all() as $error)
        <p class="text-danger">{{ $error }}</p>
        @endforeach
        @endif
<form method="POST" action="{{ route('pinjamans.store') }}">
    @csrf
    <div class="form-group">
        <label for="member_id">Select a member who want to borrow:</label>
        <select name="member_id" id="member_id" class="form-control py-2">
            @foreach ($members as $member)
        <option value="{{ $member->id }}">{{ $member->name }}</option>
            @endforeach
        </select>
        <label for="book_id">Select a Book to Borrow:</label>
        <select name="book_id" id="book_id" class="form-control py-2">
            @foreach ($books as $book)
        <option value="{{ $book->id }}">{{ $book->title }}</option>
            @endforeach
        </select>
        <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker py-2" inline="true">
            <input placeholder="Select date" type="date" id="tanggal_pinjam" name="tanggal_pinjam" class="form-control">
            <i class="fas fa-calendar input-prefix"></i>
          </div>
    </div>
    <div class="text-center">
    <button type="submit" name="proses" class="btn btn-primary">Borrow</button>
    </div>
</form>
@endsection
