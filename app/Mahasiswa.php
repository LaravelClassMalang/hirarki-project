<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    // Nama Tabel
    protected $table = "mahasiswa";

    // Mengeset Primary Key
    protected $primaryKey = "id";

    // Mengeset kolom yang bisa di isi
    protected $fillable = [
      "nim", 
      "nama", 
      "alamat", 
      "telp",
      "email"
    ];

    // Kolom yang disembunyikan saat get data
    protected $hidden = [
      "create_at",
      "update_at"
    ];
}
