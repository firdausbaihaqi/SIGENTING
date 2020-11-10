<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StatusKesehatanAnak extends Model
{
    protected $table = 'status_kesehatan_anak';
    protected $guarded = [];

    public function anak()
    {
        return $this->BelongsTo('App\Models\Anak', 'id_anak');
    }
}
