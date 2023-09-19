<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        $members = Member::all();
        // $member = Member::find(1);
        // dd($member);
        return view('member')->with('members', $members);
    }
    public function create()
    {
        $books = Books::all();
        // tambah input ke form
        return view('create', compact('books'));
    }
    public function borrow(Request $request){
        $request->validate([
            'book_id' => 'required|exists:books,id',
        ]);
        $members = new Member();
        $members->book_id = $request->input('book_id');

        // Save the members record
        $members->save();

        return redirect()->route('member')->with('success', 'Book borrowed successfully');
    }

}
