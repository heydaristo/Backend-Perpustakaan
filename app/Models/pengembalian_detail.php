<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\pengembalian;

class pengembalian_detail extends Model
{
    use HasFactory;

    public function buku()
    {
        return $this->hasOne(buku::class);
    }
    
    public function pengembalian() {
        return $this->belongsTo(pengembalian::class);
    }
}
