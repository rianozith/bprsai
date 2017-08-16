<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pembiayaan extends Model
{
    protected $table = 'pembiayaans';
    protected $fillable = array( 
    	'namaao', 'pengajuanbiaya', 'tujuanbiaya', 'jangkawaktu', 'jnspmbiayaan', 'bagihasilbank', 'biayaadmin', 'bagihasilnasabah', 'biayaadmin', 
    	'brgjaminan','kepemilikanjaminan', 'jaminannama', 'jaminanumur', 'jaminanpekerjaan', 'jaminanalamat', 'jaminanktp', 'marginbank', 'totalkewajiban', 'tglmohon', 'angsuranpokok', 'angsuranpokok', 'angsuranmargin', 'angsuranpokokakhir', 
    	'angsuranmarginakhir', 'biayatagih', 'pemilikjaminan', 'sifata', 'jnspenggunaan', 'golongan', 'sektor', 'agunan', 'hrgperolehan', 'njop', 
    	'ikat', 'wilayah', 'biaya', 'metodebghasil', 'noregister', 'tujuankepemilikan', 'lokasiusaha', 'lokasiusaha', 'namapembiayaan', 'golpiutang', 
    	'tglrealisasi', 'nopp', 'nosph', 'nottun', 'nilaiagunan', 'tglakhir','pengajuanbiayainteger', 'pengajuanbiayaterbilang', 'biayaadmininteger', 
    	'biayaadminterbilang', 'marginbankinteger', 'marginbankterbilang',  'marginbankterbilang', 'totalkewajibaninteger', 'totalkewajibanterbilang', 
    	'angsuranpokokinteger', 'angsuranpokokterbilang', 'angsuranmargininteger', 'angsuranmarginterbilang', 'angsuranpokokakhirinteger', 'angsuranpokokakhirterbilang', 
    	'angsuranmarginakhirinteger', 'angsuranmarginakhirterbilang', 'biayatagihinteger', 'biayatagihterbilang', 'njopinteger', 'njopterbilang', 'hrgperolehaninteger', 
    	'hrgperolehanterbilang', 'nilaiagunaninteger', 'nilaiagunanterbilang', 'ditaksasioleh', 'id_nasabah', 'memokomite');
    public function nasabah()
    {
        return $this->belongsTo('App\nasabah', 'id_nasabah');
    }

    public function converttgl ($tanggal) {
        $tgl = date("d-m-Y", strtotime($tanggal));
        return $tgl;
    }

    public function convertint ($angka) {
        $nilai = preg_replace("/[^0-9]/", "", $angka);
        return $nilai;
    }

    public function rupiah ($angka) {
        $rupiah = number_format($angka ,0, ',' , '.' );
        return $rupiah;
    }

    public function terbilang ($angka) {
        $angka = (float)$angka;
        $bilangan = array('','Satu','Dua','Tiga','Empat','Lima','Enam','Tujuh','Delapan','Sembilan','Sepuluh','Sebelas');
        if ($angka < 12) {
            return $bilangan[$angka];
        } else if ($angka < 20) {
            return $bilangan[$angka - 10] . ' Belas';
        } else if ($angka < 100) {
            $hasil_bagi = (int)($angka / 10);
            $hasil_mod = $angka % 10;
            return trim(sprintf('%s Puluh %s', $bilangan[$hasil_bagi], $bilangan[$hasil_mod]));
        } else if ($angka < 200) { return sprintf('Seratus %s', $this->terbilang($angka - 100));
        } else if ($angka < 1000) { $hasil_bagi = (int)($angka / 100); $hasil_mod = $angka % 100; return trim(sprintf('%s Ratus %s', $bilangan[$hasil_bagi], $this->terbilang($hasil_mod)));
        } else if ($angka < 2000) { return trim(sprintf('Seribu %s', $this->terbilang($angka - 1000)));
        } else if ($angka < 1000000) { $hasil_bagi = (int)($angka / 1000); $hasil_mod = $angka % 1000; return sprintf('%s Ribu %s', $this->terbilang($hasil_bagi), $this->terbilang($hasil_mod));
        } else if ($angka < 1000000000) { $hasil_bagi = (int)($angka / 1000000); $hasil_mod = $angka % 1000000; return trim(sprintf('%s Juta %s', $this->terbilang($hasil_bagi), $this->terbilang($hasil_mod)));
        } else if ($angka < 1000000000000) { $hasil_bagi = (int)($angka / 1000000000); $hasil_mod = fmod($angka, 1000000000); return trim(sprintf('%s Milyar %s', $this->terbilang($hasil_bagi), $this->terbilang($hasil_mod)));
        } else if ($angka < 1000000000000000) { $hasil_bagi = $angka / 1000000000000; $hasil_mod = fmod($angka, 1000000000000); return trim(sprintf('%s Triliun %s', $this->terbilang($hasil_bagi), $this->terbilang($hasil_mod)));
        } else {
            return 'Data Salah';
        }
    }

    public function digit($number) {
        if (strlen($number)===1){$char='00';}
        else if (strlen($number)===2){$char='0';}
            else {$char='';}
        return $char;
    }
}
