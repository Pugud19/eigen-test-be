<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $guarded = ['id'];
    protected $fillable = [
        'code',
        'name',
    ];

    public function pinjamans(){
        return $this->belongsTo(PinjamanBuku::class);
    }
    use HasFactory;
}
