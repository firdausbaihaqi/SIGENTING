<?php

namespace App\Models;

use App\Models\Anak;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Ibu extends Authenticatable
{
    protected $table = 'ibu';
    protected $guarded = [];

    public function anak()
    {
        return $this->hasMany('App\Models\Anak');
    }

    public function status_kesehatan_ibu()
    {
        return $this->hasOne('App\Models\StatusKesehatanIbu');
    }
}
