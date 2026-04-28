<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    protected $fillable = ['transaksi_id', 'durasi', 'total_bayar', 'metode', 'status'];

    public function transaksi()
    {
        return $this->belongsTo(Transaksi::class);
    }
}
