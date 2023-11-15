<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peminjaman_detail extends Model
{
    use HasFactory;

    public function peminjaman() {
        return $this->belongTo(peminjaman::class);
    }

    public function buku()
    {
        return $this->hasOne(buku::class);
    }
}
