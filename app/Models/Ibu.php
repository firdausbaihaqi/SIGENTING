<?php

namespace App\Models;

use App\Models\Anak;
use Illuminate\Database\Eloquent\Model;

class Ibu extends Model
{
    protected $table = 'ibu_hamil';
    protected $fillable = ['nama', 'alamat', 'no_hp'];

    public function anak()
    {
        return $this->hasMany('App\Models\Anak');
    }
}
