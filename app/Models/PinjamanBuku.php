<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PinjamanBuku extends Model
{
    protected $guarded = ['id'];
    protected $fillable = [
        'book_id',
        'member_id',
        'tanggal_pinjam',
    ];
    use HasFactory;

    public function books(){
        return $this->hasMany(Books::class);
    }
    public function members(){
        return $this->hasMany(Member::class);
    }
}
