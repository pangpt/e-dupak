<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModulKegiatan extends Model
{
    use HasFactory;
    protected $table = 'modul_kegiatan';

    public function subbab_kegiatan()
    {
        return $this->belongsTo(SubbabKegiatan::class);
    }
}
