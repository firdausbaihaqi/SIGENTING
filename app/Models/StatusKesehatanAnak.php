<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class StatusKesehatanAnak extends Model
{
    protected $table = 'status_kesehatan_anak';
    protected $guarded = [];

    public function anak()
    {
        return $this->BelongsTo('App\Models\Anak', 'id_anak');
    }

    public function tracking()
    {
        return $this->hasOne('App\Models\Tracking');
    }
}
