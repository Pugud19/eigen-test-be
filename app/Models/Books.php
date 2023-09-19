<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    protected $guarded = ['id'];
    protected $fillable = [
        'code',
        'title',
        'author',
        'stock',
    ];
    public function pinjamans(){
        return $this->belongsTo(PinjamanBuku::class);
    }
    use HasFactory;
}
