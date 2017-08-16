<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class officer extends Model
{
	protected $table = 'officers';
    protected $fillable = array('kd_officer','nama', 'inisial', 'ao');
}
