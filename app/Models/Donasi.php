<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Donasi extends Model
{
    protected $table = 'donasi';

    protected $fillable = ['donatur_id', 'kategori_id', 'nominal', 'pesan', 'tanggal_donasi'];

    public function donatur()
    {
        return $this->belongsTo(Donatur::class, 'donatur_id');
    }

    public function kategori()
    {
        return $this->belongsTo(KategoriDonasi::class, 'kategori_id');
    }
}
