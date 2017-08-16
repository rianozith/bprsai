<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sifat extends Model
{
	protected $table = 'sifats';
    protected $fillable = array('kd_sifat','ket');
}
