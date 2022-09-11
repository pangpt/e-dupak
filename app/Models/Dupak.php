<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dupak extends Model
{
    // use HasFactory;
    protected $table = 'dupak';

    public function modul_kegiatan()
    {
        return $this->belongsTo(ModulKegiatan::class);
    }
}
