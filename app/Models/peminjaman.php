<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\buku;
use App\Models\peminjaman_detail;
use App\Models\pengembalian;
use App\Models\profile;

class peminjaman extends Model
{
    use HasFactory;

    public function buku()
    {
        return $this->hasOne(buku::class);
    }
    public function profile()
    {
        return $this->belongsTo(profile::class);
    }
    public function peminjaman_detail() {
        return $this->hasOne(peminjaman_detail::class);
    }
    public function pengembalian() {
        return $this->hasOne(pengembalian::class);
    }
}
