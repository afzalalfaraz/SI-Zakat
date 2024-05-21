<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;
    protected $fillable = [
        'donasi_id',    // Foreign key dari tabel Donasi
        'nama_bank',    // Nama bank
        'no_rek',       // Nomor rekening
        'nama_pengirim', // Nama pengirim
        'jumlah',       // Jumlah donasi
        'bukti',        // Bukti pembayaran (misalnya, nama file)
    ];
    public function donasi()
    {
        return $this->belongsTo(Donasi::class, 'donasi_id');
    }
}
