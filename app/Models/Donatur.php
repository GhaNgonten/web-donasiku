<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Donatur extends Model
{
    protected $table = 'donatur';
    protected $fillable = ['nama_donatur', 'email', 'no_hp'];

    public function donasi()
    {
        return $this->hasMany(Donasi::class, 'donatur_id');
    }
}
