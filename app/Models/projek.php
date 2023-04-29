<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class projek extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = "projek";
    protected $fillable = ['tglprojek','nmprojek','nmclient','alamatclient'];
    protected $dates = ['tglprojek'];
}
