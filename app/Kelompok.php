<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelompok extends Model
{
    protected $table = 'kelompok';
    protected $fillable = ['judul', 'asal_kampus', 'instansi', 'proposal', 'suratpengantar'];
}
