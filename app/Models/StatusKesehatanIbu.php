<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StatusKesehatanIbu extends Model
{
    protected $table = 'status_kesehatan_ibu';
    protected $guarded = [];


    public function ibu()
    {
        return $this->BelongsTo('App\Models\Ibu', 'id_ibu');
    }
}
