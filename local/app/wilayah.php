<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class wilayah extends Model
{
    protected $table = 'wilayahs';
    protected $fillable = array('kd_wilayah','ket');
}
