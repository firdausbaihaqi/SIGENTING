<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Anak extends Model
{

    protected $table = 'anak';
    protected $guarded = [];


    public function ibu()
    {
        return $this->belongsTo('App\Models\Ibu', 'id_ibu');
    }

    public function status_kesehatan_anak()
    {
        return $this->hasOne('App\Models\StatusKesehatanAnak');
    }

    public function tracking()
    {
        return $this->hasMany('App\Models\Tracking');
    }
    
}
