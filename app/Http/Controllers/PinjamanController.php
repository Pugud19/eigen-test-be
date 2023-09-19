<?php

namespace App\Http\Controllers;

use App\Models\PinjamanBuku;
use Illuminate\Http\Request;

class PinjamanController extends Controller
{
    //
    public function index(){
        $pinjamans = PinjamanBuku::all();

        return view('pinjaman', compact('pinjamans'));
    }
}
