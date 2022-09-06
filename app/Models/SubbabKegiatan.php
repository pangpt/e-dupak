<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubbabKegiatan extends Model
{
    use HasFactory;
    protected $table = 'subbab_kegiatan';

    public function bab_kegiatan()
    {
        return $this->belongsTo(BabKegiatan::class);
    }
}
