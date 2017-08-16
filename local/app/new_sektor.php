<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class new_sektor extends Model
{
    protected $table = 'new_sektors';
    protected $fillable = array('kd_sektor1','ket','otorisasi');
}
