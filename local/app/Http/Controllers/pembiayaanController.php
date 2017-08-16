<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\nasabah;
use App\pembiayaan;
use Carbon\Carbon;
use Input;
use Validator;
use Redirect;
use PDF;
use Excel;


class pembiayaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexpembiayaan()
    {
        
        $index = \DB::table('pembiayaans')
            ->join('nasabahs', 'pembiayaans.id_nasabah', '=', 'nasabahs.id')
            ->select(
                'pembiayaans.id',
                'pembiayaans.noregister',
                'pembiayaans.namaao',
                'pembiayaans.pengajuanbiaya',
                'pembiayaans.tglmohon',
                'nasabahs.kdnas',
                'nasabahs.nama',
                'nasabahs.alamat'
            )
            ->paginate(10);
        $model = new pembiayaan();



        return view('pembiayaan.pembiayaan_index',compact('index', 'model')); // load view dan kirim data
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createpembiayaan($id)
    {
        $inisial = \Auth::user()->inisial;
        $datas = nasabah::find($id); // get data dgn id
        $jpeggn  = \App\jpeggn::lists('ket', 'ket' ); // get data dlm table 
        $sektor  = \App\new_sektor::lists('ket', 'ket' ); // get data dlm table 
        $golongan  = \App\golnasabah::lists('keterangan', 'sandi' ); // get data dlm table 
        $officer  = \App\officer::lists('nama', 'nama' ); // get data dlm table 
        $agunan   = \App\agunan::lists('nama', 'nama' ); // get data dlm table 
        $dati   = \App\dati::lists('keterangan', 'keterangan' ); // get data dlm table 
        $wilayah = \App\wilayah::lists('ket', 'ket' ); // get data dlm table 
        $ikat = \App\ikat::lists('ket', 'ikat' ); // get data dlm table 
        $callmodel = new pembiayaan();
        $idreg  = \DB::table('pembiayaans')->max('pembiayaans.id')+1;
        $thn = Carbon::now()->year;
        $bln = Carbon::now()->month;
        $digit          = $callmodel->digit($idreg);
        $noregister     = $digit.$idreg.'/'.$bln.'/REG-MKT/AI/'.$thn;//Input::get('noregister');

        return view('pembiayaan.pembiayaan_create2', compact('inisial', 'datas', 'sektor', 'jpeggn', 'golongan', 'officer', 'agunan', 'dati', 'wilayah','ikat', 'idreg','thn','bln', 'noregister')); // load view dan kirim data
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storepembiayaan(Request $request)
    {
        $input = Input::all();
        //aturan validasi
        $aturan = array(
                        'namaao'=>'required',
                        'pengajuanbiaya'=>'required',
                        'tujuanbiaya'=>'required',
                        'jangkawaktu'=>'required|max:999|numeric',
                        'jnspmbiayaan'=>'required',
                        'bagihasilbank'=>'integer',
                        'bagihasilnasabah'=>'integer',
                        'biayaadmin'=>'required',
                        'brgjaminan'=>'required',
                        'marginbank'=>'required',
                        'tglmohon'=>'required',
                        'bagihasilbank' => 'numeric',
                        'bagihasilnasabah' => 'numeric',
                        'angsuranpokok'=>'required',
                        'angsuranmargin'=>'required',
                        'angsuranpokokakhir'=>'required',
                        'angsuranmarginakhir'=>'required',
                        'biayatagih'=>'required',
                        'pemilikjaminan'=>'required',
                        'jnspenggunaan'=>'required',
                        'golongan'=>'required',
                        'sektor'=>'required',
                        'agunan'=>'required',
                        'hrgperolehan'=>'required',
                        'hrgperolehaninteger'=>'required',
                        'wilayah'=>'required',                        
                        'metodebghasil'=>'required',
                        'noregister'=>'required',
                        'tujuankepemilikan'=>'required',
                        'namapembiayaan'=>'required',
                        'golpiutang'=>'required',
                        'tglrealisasi'=>'required',

                        );
        // custom pesan validasi
        $pesan = array(
                        'namaao.required' => 'Harus Diisi',
                                                
                        'pengajuanbiaya.required' => 'Harus Diisi',
                        
                        'tujuanbiaya.required' => 'Harus Diisi',
                        
                        'jangkawaktu.required' => 'Harus Diisi',
                        'jangkawaktu.numeric' => 'Input Berupa Angka ',
                        'jangkawaktu.max' => 'Maksimal 3 Angka ',
                        
                        'jnspmbiayaan.required' => 'Harus Diisi',
                        
                        'bagihasilbank.required' => 'Harus Diisi',
                        
                        'bagihasilnasabah.required' => 'Harus Diisi',
                        
                        'biayaadmin.required' => 'Harus Diisi',
                        
                        'brgjaminan.required' => 'Harus Diisi',
                        
                        'marginbank.required' => 'Harus Diisi',
                        
                        'tglmohon.required' => 'Harus Diisi',

                        'bagihasilbank.numeric' => 'Harus Berupa Angka',

                        'bagihasilnasabah.numeric' => 'Harus Berupa Angka',
                        
                        'angsuranpokok.required' => 'Harus Diisi',
                        
                        'angsuranmargin.required' => 'Harus Diisi',
                        
                        'angsuranpokokakhir.required' => 'Harus Diisi',
                        
                        'angsuranmarginakhir.required' => 'Harus Diisi',
                        
                        'biayatagih.required' => 'Harus Diisi',
                        
                        'pemilikjaminan.required' => 'Harus Diisi',
                        
                        'jnspenggunaan.required' => 'Harus Diisi',
                        
                        'golongan.required' => 'Harus Diisi',
                        
                        'sektor.required' => 'Harus Diisi',
                        
                        'agunan.required' => 'Harus Diisi',
                        
                        'hrgperolehan.required' => 'Harus Diisi',

                        'hrgperolehaninteger.required' => 'Terbilang Belum Tampil',
                        
                        'wilayah.required' => 'Harus Diisi',
                                                
                        'metodebghasil.required' => 'Harus Diisi',
                        
                        'noregister.required' => 'Harus Diisi',
                        
                        'tujuankepemilikan.required' => 'Harus Diisi',
                        
                        'namapembiayaan.required' => 'Harus Diisi',
                        
                        'golpiutang.required' => 'Harus Diisi',
                        
                        'tglrealisasi.required' => 'Harus Diisi',
                        
                        );
        //buat validasi
        $validasi = Validator::make($input, $aturan, $pesan);
        //jika validasi gagal
        if ($validasi->fails()){

            return Redirect::back()->withErrors($validasi)->withinput();
        }
        // jika sukses
        else {
            //buat variable tiap inputan
            $callmodel = new pembiayaan();
            $namaao             = Input::get('namaao');

            $pengajuanbiaya     = $callmodel->convertint(Input::get('pengajuanbiaya'));
            $pengajuanbiayainteger = Input::get('pengajuanbiayainteger');
            $pengajuanbiayaterbilang = Input::get('pengajuanbiayaterbilang');

            $tujuanbiaya        = Input::get('tujuanbiaya');
            $jangkawaktu        = Input::get('jangkawaktu');
            $jnspmbiayaan       = Input::get('jnspmbiayaan');
            $bagihasilbank      = Input::get('bagihasilbank');
            $bagihasilnasabah   = Input::get('bagihasilnasabah');

            $biayaadmin         = $callmodel->convertint(Input::get('biayaadmin'));
            $biayaadmininteger     = Input::get('biayaadmininteger');
            $biayaadminterbilang     = Input::get('biayaadminterbilang');

            $brgjaminan          = Input::get('brgjaminan');
            $kepemilikanjaminan    = Input::get('kepemilikanjaminan');
            $jaminannama         = Input::get('jaminannama');
            $jaminanumur         = Input::get('jaminanumur');
            $jaminanpekerjaan    = Input::get('jaminanpekerjaan');
            $jaminanalamat       = Input::get('jaminanalamat');
            $jaminanktp          = Input::get('jaminanktp');

            $marginbank         = $callmodel->convertint(Input::get('marginbank'));
            $marginbankinteger     = Input::get('marginbankinteger');
            $marginbankterbilang     = Input::get('marginbankterbilang');

            $totalkewajiban          = $callmodel->convertint(Input::get('totalkewajiban'));
            $totalkewajibaninteger      = Input::get('totalkewajibaninteger');
            $totalkewajibanterbilang      = Input::get('totalkewajibanterbilang');

            $tglmohon           = date("Y-m-d", strtotime(Input::get('tglmohon')));

            $angsuranpokok      = $callmodel->convertint(Input::get('angsuranpokok'));
            $angsuranpokokinteger  = Input::get('angsuranpokokinteger');
            $angsuranpokokterbilang  = Input::get('angsuranpokokterbilang');

            $angsuranmargin     = $callmodel->convertint(Input::get('angsuranmargin'));
            $angsuranmargininteger = Input::get('angsuranmargininteger');
            $angsuranmarginterbilang = Input::get('angsuranmarginterbilang');

            $angsuranpokokakhir         = $callmodel->convertint(Input::get('angsuranpokokakhir'));
            $angsuranpokokakhirinteger     = Input::get('angsuranpokokakhirinteger');
            $angsuranpokokakhirterbilang     = Input::get('angsuranpokokakhirterbilang');

            $angsuranmarginakhir        = $callmodel->convertint(Input::get('angsuranmarginakhir'));
            $angsuranmarginakhirinteger    = Input::get('angsuranmarginakhirinteger');
            $angsuranmarginakhirterbilang    = Input::get('angsuranmarginakhirterbilang');

            $biayatagih         = $callmodel->convertint(Input::get('biayatagih'));
            $biayatagihinteger     = Input::get('biayatagihinteger');
            $biayatagihterbilang     = Input::get('biayatagihterbilang');

            $pemilikjaminan = Input::get('pemilikjaminan');
            $sifata         = Input::get('sifata');
            $jnspenggunaan  = Input::get('jnspenggunaan');
            $golongan       = Input::get('golongan');
            $sektor         = Input::get('sektor');
            $agunan         = Input::get('agunan');

            $njop           = $callmodel->convertint(Input::get('njop'));
            $njopinteger       = Input::get('njopinteger');
            $njopterbilang       = Input::get('njopterbilang');

            $ikat           = Input::get('ikat');

            $hrgperolehan       = $callmodel->convertint(Input::get('hrgperolehan'));
            $hrgperolehaninteger   = Input::get('hrgperolehaninteger');
            $hrgperolehanterbilang   = Input::get('hrgperolehanterbilang');

            $wilayah        = Input::get('wilayah');
            $metodebghasil  = Input::get('metodebghasil');

            $nomor          = \DB::table('pembiayaans')->max('pembiayaans.id')+1;
            $tahun          = Carbon::now()->year;
            $bulan          = Carbon::now()->month;
            $digit          = $callmodel->digit($nomor);
            $noregister     = $digit.$nomor.'/'.$bulan.'/REG-MKT/AI/'.$tahun;//Input::get('noregister'); 

            $tujuankepemilikan      = Input::get('tujuankepemilikan');
            $lokasiusaha    = Input::get('lokasiusaha');
            $namapembiayaan = Input::get('namapembiayaan');
            $golpiutang     = Input::get('golpiutang');
            $tglrealisasi   = date("Y-m-d", strtotime(Input::get('tglrealisasi')));
            $nopp           = Input::get('nopp');
            $nosph          = Input::get('nosph');
            $nottun         = Input::get('nottun');
            $id_nasabah         = Input::get('id_nasabah'); 

            $nilaiagunan    = $callmodel->convertint(Input::get('nilaiagunan'));
            $nilaiagunaninteger   = Input::get('nilaiagunaninteger');
            $nilaiagunanterbilang   = Input::get('nilaiagunanterbilang');

            $ditaksasioleh  = Input::get('ditaksasioleh');
            $tglakhir       = Carbon::createFromFormat("Y-m-d",$tglrealisasi)->addMonths(Input::get('jangkawaktu'));
            
            //lalu isi ke database
            pembiayaan::create(compact('namaao', 'pengajuanbiaya', 'tujuanbiaya', 'jangkawaktu', 'jnspmbiayaan', 'bagihasilbank', 'biayaadmin', 'bagihasilnasabah', 'biayaadmin', 'brgjaminan', 'kepemilikanjaminan', 'jaminannama', 'jaminanumur', 'jaminanpekerjaan', 'jaminanalamat', 'jaminanktp', 'totalkewajiban', 'marginbank', 'tglmohon', 'angsuranpokok', 'angsuranpokok', 'angsuranmargin', 'angsuranpokokakhir', 'angsuranmarginakhir', 'biayatagih', 'pemilikjaminan', 'sifata', 'jnspenggunaan', 'golongan', 'sektor', 'agunan', 'hrgperolehan', 'njop', 'ikat', 'wilayah', 'metodebghasil', 'noregister', 'tujuankepemilikan', 'lokasiusaha', 'namapembiayaan', 'golpiutang', 'tglrealisasi', 'nopp', 'nosph', 'nottun', 'id_nasabah', 'nilaiagunan', 'tglakhir',
                'pengajuanbiayainteger', 'pengajuanbiayaterbilang', 'biayaadmininteger', 'biayaadminterbilang', 'marginbankinteger', 'marginbankterbilang', 'marginbankterbilang', 'totalkewajibaninteger', 'totalkewajibanterbilang', 'angsuranpokokinteger', 'angsuranpokokterbilang', 'angsuranmargininteger', 'angsuranmarginterbilang', 'angsuranpokokakhirinteger', 'angsuranpokokakhirterbilang', 'angsuranmarginakhirinteger', 'angsuranmarginakhirterbilang', 'biayatagihinteger', 'biayatagihterbilang', 'njopinteger', 'njopterbilang', 'hrgperolehaninteger', 'hrgperolehanterbilang', 'nilaiagunaninteger', 'nilaiagunanterbilang', 'ditaksasioleh', 'memokomite'));
            //kehalaman index dengan pesan sukses
            return Redirect::Route('pembiayaanindex')->withpesan('Input Pembiayaan Berhasil');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showpembiayaan($id)
    {
        // get data dgn id
        $datas = pembiayaan::find($id); 
        $values = \DB::table('pembiayaans')
            ->join('nasabahs', 'pembiayaans.id_nasabah', '=', 'nasabahs.id')
            ->select('*')
            ->where('pembiayaans.id','=',$id)->first();

        if ($values->jnspmbiayaan === 'mudhorobah' || $values->jnspmbiayaan === 'Mudhorobah'){
            $status=1;
        }
        else {
                $status=2;
            }

        return view('pembiayaan.pembiayaan_show', compact('datas', 'values', 'status')); // load view dan kirim data
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editpembiayaan($id)
    {
        $inisial = \Auth::user()->inisial;
        //$datas = nasabah::find($id); // get data dgn id
        $jpeggn  = \App\jpeggn::lists('ket', 'ket' ); // get data dlm table 
        $sektor  = \App\new_sektor::lists('ket', 'ket' ); // get data dlm table 
        $golongan  = \App\golnasabah::lists('keterangan', 'sandi' ); // get data dlm table 
        $officer  = \App\officer::lists('nama', 'nama' ); // get data dlm table 
        $agunan   = \App\agunan::lists('nama', 'nama' ); // get data dlm table 
        $dati   = \App\dati::lists('keterangan', 'keterangan' ); // get data dlm table 
        $wilayah = \App\wilayah::lists('ket', 'ket' ); // get data dlm table 
        $ikat = \App\ikat::lists('ket', 'ikat' ); // get data dlm table 
        // $idreg  = pembiayaan::lists('id')->max()+1;
        $thn = Carbon::now()->year;
        // get data dgn id
        $values = \DB::table('pembiayaans')
            ->leftjoin('nasabahs', 'pembiayaans.id_nasabah', '=', 'nasabahs.id')
            ->select('*', 'pembiayaans.id AS idx')
            ->where('pembiayaans.id','=',$id)->first();
        $model = new pembiayaan();
        
       
        return view('pembiayaan.pembiayaan_update', compact('model', 'inisial', 'datas', 'sektor', 'jpeggn', 'golongan', 'officer', 'agunan', 'dati', 'wilayah', 'ikat', 'idreg','thn', 'values')); // load view dan kirim data
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatepembiayaan(Request $request, $id)
    {
        $input = Input::all();
        //aturan validasi
        $aturan = array(
                        'namaao'=>'required',
                        'pengajuanbiaya'=>'required',
                        'tujuanbiaya'=>'required',
                        'jangkawaktu'=>'required|max:999|numeric',
                        'jnspmbiayaan'=>'required',
                        'bagihasilbank'=>'integer',
                        'bagihasilnasabah'=>'integer',
                        'biayaadmin'=>'required',
                        'brgjaminan'=>'required',
                        'marginbank'=>'required',
                        'tglmohon'=>'required',
                        'bagihasilbank' => 'numeric',
                        'bagihasilnasabah' => 'numeric',
                        'angsuranpokok'=>'required',
                        'angsuranmargin'=>'required',
                        'angsuranpokokakhir'=>'required',
                        'angsuranmarginakhir'=>'required',
                        'biayatagih'=>'required',
                        'pemilikjaminan'=>'required',
                        'jnspenggunaan'=>'required',
                        'golongan'=>'required',
                        'sektor'=>'required',
                        'agunan'=>'required',
                        'hrgperolehan'=>'required',
                        'hrgperolehaninteger'=>'required',
                        'wilayah'=>'required',                        
                        'metodebghasil'=>'required',
                        'noregister'=>'required',
                        'tujuankepemilikan'=>'required',
                        'namapembiayaan'=>'required',
                        'golpiutang'=>'required',
                        'tglrealisasi'=>'required',

                        );
        // custom pesan validasi
        $pesan = array(
                        'namaao.required' => 'Harus Diisi',
                                                
                        'pengajuanbiaya.required' => 'Harus Diisi',
                        
                        'tujuanbiaya.required' => 'Harus Diisi',
                        
                        'jangkawaktu.required' => 'Harus Diisi',
                        'jangkawaktu.numeric' => 'input berupa angka ',
                        'jangkawaktu.max' => 'maksimal 3 angka ',
                        
                        'jnspmbiayaan.required' => 'Harus Diisi',
                        
                        'bagihasilbank.required' => 'Harus Diisi',
                        
                        'bagihasilnasabah.required' => 'Harus Diisi',
                        
                        'biayaadmin.required' => 'Harus Diisi',
                        
                        'brgjaminan.required' => 'Harus Diisi',
                        
                        'marginbank.required' => 'Harus Diisi',
                        
                        'tglmohon.required' => 'Harus Diisi',

                        'bagihasilbank.numeric' => 'Harus Berupa Angka',

                        'bagihasilnasabah.numeric' => 'Harus Berupa Angka',
                        
                        'angsuranpokok.required' => 'Harus Diisi',
                        
                        'angsuranmargin.required' => 'Harus Diisi',
                        
                        'angsuranpokokakhir.required' => 'Harus Diisi',
                        
                        'angsuranmarginakhir.required' => 'Harus Diisi',
                        
                        'biayatagih.required' => 'Harus Diisi',
                        
                        'pemilikjaminan.required' => 'Harus Diisi',
                        
                        'jnspenggunaan.required' => 'Harus Diisi',
                        
                        'golongan.required' => 'Harus Diisi',
                        
                        'sektor.required' => 'Harus Diisi',
                        
                        'agunan.required' => 'Harus Diisi',
                        
                        'hrgperolehan.required' => 'Harus Diisi',

                        'hrgperolehaninteger.required' => 'Harus Diisi',
                        
                        'wilayah.required' => 'Harus Diisi',
                                                
                        'metodebghasil.required' => 'Harus Diisi',
                        
                        'noregister.required' => 'Harus Diisi',
                        
                        'tujuankepemilikan.required' => 'Harus Diisi',
                        
                        'namapembiayaan.required' => 'Harus Diisi',
                        
                        'golpiutang.required' => 'Harus Diisi',
                        
                        'tglrealisasi.required' => 'Harus Diisi',
                        
                        );
        //buat validasi
        $validasi = Validator::make($input, $aturan, $pesan);
        //jika validasi gagal
        if ($validasi->fails()){

            return Redirect::back()->withErrors($validasi)->withinput();
        }
        // jika sukses
        else {
            $edit = pembiayaan::find($id);
            $edit->id_nasabah = Input::get('id_nasabah');
            $edit->namaao             = Input::get('namaao');

            $edit->pengajuanbiaya     = $edit->convertint(Input::get('pengajuanbiaya'));

            $edit->tujuanbiaya        = Input::get('tujuanbiaya');
            $edit->jangkawaktu        = Input::get('jangkawaktu');
            $edit->jnspmbiayaan       = Input::get('jnspmbiayaan');
            $edit->bagihasilbank      = Input::get('bagihasilbank');
            $edit->bagihasilnasabah   = Input::get('bagihasilnasabah');

            $edit->biayaadmin         = $edit->convertint(Input::get('biayaadmin'));

            $edit->brgjaminan         = Input::get('brgjaminan');
            $edit->kepemilikanjaminan    = Input::get('kepemilikanjaminan');
            $edit->jaminannama         = Input::get('jaminannama');
            $edit->jaminanumur         = Input::get('jaminanumur');
            $edit->jaminanpekerjaan    = Input::get('jaminanpekerjaan');
            $edit->jaminanalamat       = Input::get('jaminanalamat');
            $edit->jaminanktp          = Input::get('jaminanktp');

            $edit->marginbank         = $edit->convertint(Input::get('marginbank'));

            $edit->totalkewajiban          = $edit->convertint(Input::get('totalkewajiban'));

            $edit->tglmohon           = date("Y-m-d", strtotime(Input::get('tglmohon')));

            $edit->angsuranpokok      = $edit->convertint(Input::get('angsuranpokok'));

            $edit->angsuranmargin     = $edit->convertint(Input::get('angsuranmargin'));

            $edit->angsuranpokokakhir         = $edit->convertint(Input::get('angsuranpokokakhir'));

            $edit->angsuranmarginakhir        = $edit->convertint(Input::get('angsuranmarginakhir'));

            $edit->biayatagih         = $edit->convertint(Input::get('biayatagih'));

            $edit->pemilikjaminan = Input::get('pemilikjaminan');
            $edit->sifata         = Input::get('sifata');
            $edit->jnspenggunaan  = Input::get('jnspenggunaan');
            $edit->golongan       = Input::get('golongan');
            $edit->sektor         = Input::get('sektor');
            $edit->agunan         = Input::get('agunan');

            $edit->njop           = $edit->convertint(Input::get('njop'));
            $edit->njopinteger       = Input::get('njopinteger');
            $edit->njopterbilang       = Input::get('njopterbilang');

            $edit->ikat           = Input::get('ikat');

            $edit->hrgperolehan       = $edit->convertint(Input::get('hrgperolehan'));

            $edit->wilayah        = Input::get('wilayah');
            $edit->metodebghasil  = Input::get('metodebghasil');
            $edit->noregister     = Input::get('noregister');
            $edit->tujuankepemilikan      = Input::get('tujuankepemilikan');
            $edit->lokasiusaha    = Input::get('lokasiusaha');
            $edit->namapembiayaan = Input::get('namapembiayaan');
            $edit->golpiutang     = Input::get('golpiutang');
            $tglrealisasi         = date("Y-m-d", strtotime(Input::get('tglrealisasi')));
            $edit->tglrealisasi   = $tglrealisasi;
            $edit->nopp           = Input::get('nopp');
            $edit->nosph          = Input::get('nosph');
            $edit->nottun         = Input::get('nottun');
            $edit->id_nasabah         = Input::get('id_nasabah'); 

            $edit->nilaiagunan    = $edit->convertint(Input::get('nilaiagunan'));

            $edit->ditaksasioleh = Input::get('ditaksasioleh');
            $edit->memokomite = Input::get('memokomite');

            
            $edit->tglakhir       = Carbon::createFromFormat("Y-m-d",$tglrealisasi)->addMonths(Input::get('jangkawaktu'));
            $edit->save();            //save ke database
            
            //kehalaman index dengan pesan sukses
            return Redirect::Route('pembiayaanindex')->withpesan('Update Pembiayaan Berhasil');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deletepembiayaan($id)
    {
        pembiayaan::find($id)->delete(); // cari id dan delete

        return Redirect::back()->withpesan('data berhasil dihapus'); // redirect dan pesan sukses
    }

    public function searchpembiayaan()
    {
        $input = Input::get('caripembiayaan');        
        $cari = \DB::table('pembiayaans')->join('nasabahs', 'pembiayaans.id_nasabah', '=', 'nasabahs.id')->where('pembiayaans.noregister', 'LIKE', '%'.$input.'%')->orWhere('nasabahs.nama', 'LIKE', '%'.$input.'%')->orWhere('nasabahs.kdnas', 'LIKE', '%'.$input.'%')->orWhere('nasabahs.noktp', 'LIKE', '%'.$input.'%')->get(); // fungsi cari dalam table
        return view('pembiayaan.Pembiayaan_search', compact('cari')); // load view & kirim value
    }
    
    public function printperjanjianmdh($id) {
        $datas = \DB::table('pembiayaans')
            ->join('nasabahs', 'pembiayaans.id_nasabah', '=', 'nasabahs.id')
            ->where('pembiayaans.id', '=', $id)
            ->first();

        setlocale(LC_TIME, 'id');
        $tglrealisasi = Carbon::createFromFormat('Y-m-d', $datas-> tglrealisasi);
        $tglakhir = Carbon::createFromFormat('Y-m-d', $datas-> tglakhir);

        $pdf = PDF::loadView('pembiayaan.print.suratperjanjianmdh', compact('datas', 'tglrealisasi', 'tglakhir'))->setPaper('legal', 'portrait'); // load view  & kirim value
        return $pdf->stream(); // fungsi print preview
    }

    public function printperjanjianmrb($id) {
        $datas = \DB::table('pembiayaans')
            ->join('nasabahs', 'pembiayaans.id_nasabah', '=', 'nasabahs.id')
            ->where('pembiayaans.id', '=', $id)
            ->first();
        setlocale(LC_TIME, 'id');
        $tglrealisasi = Carbon::createFromFormat('Y-m-d', $datas-> tglrealisasi);
        $tglakhir = Carbon::createFromFormat('Y-m-d', $datas-> tglakhir);

        $pdf = PDF::loadView('pembiayaan.print.suratperjanjianmrb', compact('datas', 'tglrealisasi', 'tglakhir'))->setPaper('legal', 'portrait'); // load view  & kirim value
        return $pdf->stream(); // fungsi print preview
        
    }

    public function printpersetujuan($id) {
        $datas = \DB::table('pembiayaans')
            ->join('nasabahs', 'pembiayaans.id_nasabah', '=', 'nasabahs.id')
            ->where('pembiayaans.id', '=', $id)
            ->first();
        setlocale(LC_TIME, 'id');
        $tglrealisasi = Carbon::createFromFormat('Y-m-d', $datas-> tglrealisasi);
        $tglakhir = Carbon::createFromFormat('Y-m-d', $datas-> tglakhir);
        $model = new pembiayaan();

        $pdf = PDF::loadView('pembiayaan.print.suratpersetujuan', compact('datas', 'tglrealisasi', 'tglakhir', 'model'))->setPaper('a4', 'portrait'); // load view  & kirim value
        return $pdf->stream(); // fungsi print preview
    }

    public function printpengakuan($id) {
        $datas = \DB::table('pembiayaans')
            ->join('nasabahs', 'pembiayaans.id_nasabah', '=', 'nasabahs.id')
            ->where('pembiayaans.id', '=', $id)
            ->first();
        setlocale(LC_TIME, 'id');
        $tglrealisasi = Carbon::now();
        $tglakhir = Carbon::now();
        $umurmtd= Carbon::createFromDate(1956, 6, 25)->age;
        $pdf = PDF::loadView('pembiayaan.print.suratpengakuanhutang', compact('datas', 'tglrealisasi', 'tglakhir', 'umurmtd'))->setPaper('legal', 'portrait'); // load view  & kirim value
        return $pdf->stream(); // fungsi print preview
    }

    public function printkuasajual($id) {
        $datas = \DB::table('pembiayaans')
            ->join('nasabahs', 'pembiayaans.id_nasabah', '=', 'nasabahs.id')
            ->where('pembiayaans.id', '=', $id)
            ->first();
        setlocale(LC_TIME, 'id');
        $tglrealisasi = Carbon::createFromFormat('Y-m-d', $datas-> tglrealisasi);
        $tglakhir = Carbon::createFromFormat('Y-m-d', $datas-> tglakhir);
        $umurmtd= Carbon::createFromDate(1956, 6, 25)->age;
        $pdf = PDF::loadView('pembiayaan.print.suratkuasajual', compact('datas', 'tglrealisasi', 'tglakhir', 'umurmtd'))->setPaper('legal', 'portrait'); // load view  & kirim value
        return $pdf->stream(); // fungsi print preview
    }

    public function printrepayment($id) {
        $datas = \DB::table('pembiayaans')
            ->join('nasabahs', 'pembiayaans.id_nasabah', '=', 'nasabahs.id')
            ->where('pembiayaans.id', '=', $id)
            ->first();
            $angsuran = $datas->angsuranpokok + $datas->angsuranmargin;
        setlocale(LC_TIME, 'id');
        $tglrealisasi = Carbon::createFromFormat('Y-m-d', $datas-> tglrealisasi);
        $tglakhir = Carbon::createFromFormat('Y-m-d', $datas-> tglakhir);
        
        $pdf = PDF::loadView('pembiayaan.print.repayment', compact('datas', 'tglrealisasi'))->setPaper('a4', 'landscape'); // load view  & kirim value
        return $pdf->stream(); // fungsi print preview
    }

    public function printkartu($id) {
        $datas = \DB::table('pembiayaans')
            ->join('nasabahs', 'pembiayaans.id_nasabah', '=', 'nasabahs.id')
            ->where('pembiayaans.id', '=', $id)
            ->first();
            $angsuran = $datas->angsuranpokok + $datas->angsuranmargin;
        setlocale(LC_TIME, 'id');
        $tglrealisasi = Carbon::createFromFormat('Y-m-d', $datas-> tglrealisasi);
        $tglakhir = Carbon::createFromFormat('Y-m-d', $datas-> tglakhir);
        
        $pdf = PDF::loadView('pembiayaan.print.kartupengawasan', compact('datas', 'tglrealisasi'))->setPaper('a4', 'landscape'); // load view  & kirim value
        return $pdf->stream(); // fungsi print preview
    }

    public function printinfopembiayaan($id) {
        $datas = \DB::table('pembiayaans')
            ->join('nasabahs', 'pembiayaans.id_nasabah', '=', 'nasabahs.id')
            ->where('pembiayaans.id', '=', $id)
            ->first();
        setlocale(LC_TIME, 'id');
        $tglrealisasi = Carbon::createFromFormat('Y-m-d', $datas-> tglrealisasi);
        $tglakhir = Carbon::createFromFormat('Y-m-d', $datas-> tglakhir);

        $oke1 = \App\pembiayaan::find($id);
        $test = \App\pembiayaan::find($id)->rupiah($datas->nilaiagunaninteger);

        $test1 = \App\pembiayaan::find($id)->terbilang($datas->nilaiagunaninteger);

        $x = '123.345.567';
        $coba = preg_replace("/[^0-9]/","",$x);
        $coba1 = \App\pembiayaan::find($id)->convertint($datas->njop);

        $new = new pembiayaan();
        $char = $new->digit(40);
        
        $pdf = PDF::loadView('pembiayaan.print.infopembiayaan', compact('char','datas', 'tglrealisasi', 'test', 'test1', 'oke1', 'coba', 'coba1'))->setPaper('a4', 'landscape'); // load view  & kirim value
        return $pdf->stream(); // fungsi print preview
    }

}
