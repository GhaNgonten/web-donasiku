<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KategoriDonasi extends Model
{
    protected $table = 'kategori';
    protected $fillable = ['nama_kategori', 'deskripsi'];

    public function donasi()
    {
        return $this->hasMany(Donasi::class, 'kategori_id');
    }       
}
