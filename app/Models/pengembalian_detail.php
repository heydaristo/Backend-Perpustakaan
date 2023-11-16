<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\peminjaman;

class pengembalian_detail extends Model
{
    use HasFactory;

    
    public function peminjaman() {
        return $this->belongsTo(peminjaman::class);
    }
}
