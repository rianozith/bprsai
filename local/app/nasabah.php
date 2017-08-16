<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nasabah extends Model
{
    protected $table = 'nasabahs';
    protected $fillable = array('kdnas','nama', 'alamat', 'kelurahan', 'kecamatan', 'kota' ,'kdpos', 'telp', 'noktp', 'tglahir', 'namaibu', 'umur', 'npwp', 'pekerjaan', 'tptlahir', 'kdnas_old');
    public function pembiayaans()
    {
        return $this->hasMany('App\pembiayaan', 'id_nasabah');
    }
    public function converttgl ($tanggal) {
        $tgl = date("d-m-Y", strtotime($tanggal));
        return $tgl;
    }
}
