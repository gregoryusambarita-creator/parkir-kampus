<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    protected $fillable = ['user_id','plat_nomor','jenis','merk','warna'];

public function user() {
    return $this->belongsTo(User::class);
}

public function transaksis() {
    return $this->hasMany(Transaksi::class);
}
}
