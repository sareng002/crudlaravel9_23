<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class opction extends Model
{
    use HasFactory;

    protected $table = 'opctions';

    protected $guarded = ['id'];
}
