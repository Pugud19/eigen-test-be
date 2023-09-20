<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\Member;
use App\Models\PinjamanBuku;
use Illuminate\Http\Request;

class PinjamanController extends Controller
{
    //
    public function index(){
        $pinjamans = PinjamanBuku::all();

        return view('pinjaman', compact('pinjamans'));
    }
    public function create(){
        $members = Member::all();
        $books = Books::all();
        $pinjamans = PinjamanBuku::all();

        return view('create', compact('members', 'books', 'pinjamans'));
    }
    public function store(Request $request){
        $request->validate([
            'book_id' => 'required',
            'member_id' => 'required',
            'tanggal_pinjam' => 'required'
        ]);

        $input = $request->all();
        $memberId = $input['member_id'];
        $bookId = $input['book_id'];

        $borrowedCountMember = PinjamanBuku::where('member_id', $memberId)
            ->count();
        $borrowedCountBook = PinjamanBuku::where('book_id', $bookId)
            ->count();

        if ($borrowedCountMember >= 2 && $borrowedCountBook >= 1) {
            return redirect()->back()
                ->with('error', 'Maaf, Anda tidak dapat meminjam buku ini lagi.');
        }


        try {
            PinjamanBuku::create($input);

            return redirect()->to('pinjamans');
        } catch (\Exception $e){
            return redirect()->back()
                ->with('error', 'Maaf ada beberapa kesalahan!');
        }
    }
}
