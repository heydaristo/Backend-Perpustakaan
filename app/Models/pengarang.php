<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\buku;

class pengarang extends Model
{
    use HasFactory;

    public function buku()
    {
        return $this->hasOne(buku::class);
    }
}
