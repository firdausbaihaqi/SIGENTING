<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Bidan extends Authenticatable
{
    protected $guard = [];
    protected $table = 'bidan';
}
