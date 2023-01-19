<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_umur extends Model
{
    use HasFactory;

    // protected $table = 'tb_rens_usia_pr';
    protected $table = 'tb_umur';
    // protected $guarded = ['id'];
    // protected $dates=['tgl_lahir'];

    // public function tb_penduduk()
    // {
    //     return $this->belongsTo(tb_penduduk::class);
    // }
}
