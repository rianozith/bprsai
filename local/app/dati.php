<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dati extends Model
{
    protected $table = 'datis';
    protected $fillable = array('sandi','keterangan');
}
