<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ibu extends Model
{
    protected $table = 'ibu_hamil';
    protected $fillable = ['nama', 'alamat', 'no_hp'];
}
