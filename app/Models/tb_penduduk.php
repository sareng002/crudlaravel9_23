<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; // tambahkan baris ini di model anda
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Scout\Searchable;

class tb_penduduk extends Model
{
    use HasFactory;
    use SoftDeletes; //funsi menghapus sementara  dari data base
    use Searchable; // tambahkan baris ini di model anda

    protected $table = 'tb_penduduk';

    protected $guarded = ['id'];

    protected $dates = ['tgl_lahir'];

    public function scopefilter($query, array $filters)
    {
        $query->when($filters['cari'] ?? false, function ($query, $cari) {
            return $query->where('nama', 'like', '%'.$cari.'%')
                ->orwhere('nik', 'like', '%'.$cari.'%')
                ->orwhere('kk', 'like', '%'.$cari.'%')
                ->orwhere('agama', 'like', '%'.$cari.'%')
                ->orwhere('alamat', 'like', '%'.$cari.'%');
        });
    }
}
