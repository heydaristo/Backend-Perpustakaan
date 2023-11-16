<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\profile;
use App\Models\pengembalian_detail;
use App\Models\buku;
use App\Models\peminjaman;


class pengembalian extends Model
{
    use HasFactory;

    public function pengembalian_detail()
    {
        return $this->hasOne(pengembalian_detail::class);
    }
    public function profile()
    {
        return $this->belongsTo(profile::class);
    }
    public function peminjaman()
    {
        return $this->belongsTo(peminjaman::class);
    }
}
