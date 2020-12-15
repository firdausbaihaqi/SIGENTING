<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tracking extends Model
{
    protected $table = 'tracking';
    protected $guarded = [];

    public function status_kesehatan_anak()
    {
        return $this->BelongsTo('App\Models\Status_Kesehatan_Anak', 'id_status_kesehatan_anak');
    }

    public function anak()
    {
        return $this->belongsTo('App\Models\Anak','id_anak');
    }
}
