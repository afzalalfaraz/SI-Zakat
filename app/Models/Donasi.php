<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donasi extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'deskripsi'];
    public function pembayaran()
    {
        return $this->hasMany(Pembayaran::class, 'donasi_id');
    }
}
