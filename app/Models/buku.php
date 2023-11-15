<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\pengarang;
use App\Models\penerbit;
use App\Models\pengembalian;


class buku extends Model
{
    use HasFactory;

    public function pengarang()
    {
        return $this->belongsTo(pengarang::class);
    }
    public function penerbit()
    {
        return $this->belongsTo(penerbit::class);
    }
    public function pengembalian()
    {
        return $this->belongsTo(pengembalian::class);
    }
}
