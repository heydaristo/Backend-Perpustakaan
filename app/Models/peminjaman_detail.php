<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\peminjaman;
use App\Models\buku;

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
