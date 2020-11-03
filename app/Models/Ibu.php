<?php

namespace App\Models;

use App\Models\Anak;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Ibu extends Authenticatable
{
    protected $table = 'ibu_hamil';
    protected $guard = [];
    // protected $fillable = ['nama', 'alamat', 'no_hp'];

    public function anak()
    {
        return $this->hasMany('App\Models\Anak');
    }
}
