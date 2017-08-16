<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class golnasabah extends Model
{
    protected $table = 'golnasabahs';
    protected $fillable = array('sandi','keterangan');
}
