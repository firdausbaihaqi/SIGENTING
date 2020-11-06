<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Ibu;

class Anak extends Model
{

    protected $table = 'anak';
    protected $guarded = [];


    public function ibu()
    {
        return $this->belongsTo('App\Models\Ibu', 'id_ibu');
    }
}
