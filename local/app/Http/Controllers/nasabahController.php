<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\nasabah;
use Input;
use Validator;
use Redirect;
use PDF;
use Excel;
use Carbon\Carbon;

class nasabahController extends Controller
{
    public function indexnas()
    {
        $nasabah = nasabah::paginate(50); // get data dgn paginasi 20
        return view('pembiayaan.nasabah_index',compact('nasabah')); // load view dan kirim data
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createnas()
    {

        $kode = nasabah::lists('id')->max()+10000001;
        //$kdnas = $kode;
        //nasabah::create(compact('kdnas'));
        

        return view('pembiayaan.nasabah_create', compact('kode')); // menuju halaman create
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storenas(Request $request)
    {
        $input = Input::all();
        //aturan validasi
        $aturan = array(
                        'kdnas'=>'required|min:3|numeric',
                        'nama'=>'required',
                        'alamat'=>'required',
                        'tglahir'=>'required|date',
                        'namaibu'=>'required',
                        'noktp'=>'required|numeric|digits_between:5,20',
                        );
        // custom pesan validasi
        $pesan = array(
                        'kdnas.required'=> 'Kode nasabah harus diisi',
                        'kdnas.min' => 'Kode nasabah minimal 4 angka',
                        'kdnas.numeric' => 'Kode nasabah harus angka',
                        'nama.required'=>'nama harus diisi',
                        'alamat.required'=>'alamat harus diisi',
                        'tglahir.required'=>'tanggal lahir harus diisi',
                        'tglahir.date'=>'format tanggal salah',
                        'namaibu.required'=>'nama ibu harus diisi',
                        'noktp.required'=>'no ktp harus diisi',
                        'noktp.digits_between' => 'No KTP antara 5 - 20 digit',
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
            //$umur       = Carbon::createFromDate(1975, 5, 21)->age;
            
            $kdnas 		= nasabah::lists('id')->max()+10000001;
            $nama       = Input::get('nama');
            $alamat     = Input::get('alamat');
            $kelurahan     = Input::get('kelurahan');
            $kecamatan     = Input::get('kecamatan');
            $kota       = Input::get('kota');
            $kdpos      = Input::get('kdpos');
            $tptlahir   = Input::get('tptlahir'); 
            $tglahir    = date("Y-m-d", strtotime(Input::get('tglahir'))); 
            $umur       = Carbon::createFromFormat('Y-m-d', $tglahir)->age;
            $namaibu    = Input::get('namaibu');
            $telp       = Input::get('telp');
            $noktp      = Input::get('noktp');           
            $npwp       = Input::get('npwp');
            $pekerjaan  = Input::get('pekerjaan');
            
            
            
            //lalu isi ke database
            nasabah::create(compact('kdnas', 'nama','alamat', 'kelurahan', 'kecamatan', 'kota', 'kdpos', 'telp', 'noktp', 'tglahir', 'umur', 'namaibu', 'tptlahir', 'npwp', 'pekerjaan'));
            //kehalaman home dengan pesan sukses
            return Redirect::Route('nasindex')->withpesan('Input Nasabah Berhasil');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function shownas($id)
    {
        $datas = nasabah::find($id); // get data dgn id
        return view('pembiayaan.nasabah_show', compact('datas')); // load view dan kirim data
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editnas($id)
    {
        $datas = nasabah::find($id); // get data dgn id
       
        return view('pembiayaan.nasabah_update', compact('datas')); // load view dan kirim data
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatenas(Request $request, $id)
    {

        $input = Input::all();
        //aturan validasi
        $aturan = array(
                        'kdnas'=>'required|min:3|numeric',
                        'nama'=>'required',
                        'alamat'=>'required',
                        'tglahir'=>'required|date',
                        'namaibu'=>'required',
                        'noktp'=>'required|numeric|digits_between:5,20',
                        );
        // custom pesan validasi
        $pesan = array(
                        'kdnas.required'=> 'Kode nasabah harus diisi',
                        'kdnas.min' => 'Kode nasabah minimal 4 angka',
                        'kdnas.numeric' => 'Kode nasabah harus angka',
                        'nama.required'=>'nama harus diisi',
                        'alamat.required'=>'alamat harus diisi',
                        'tglahir.required'=>'tanggal lahir harus diisi',
                        'tglahir.date'=>'format tanggal salah',
                        'namaibu.required'=>'nama ibu harus diisi',
                        'noktp.required'=>'no ktp harus diisi',
                        'noktp.numeric' => 'No KTP harus angka',
                        'noktp.digits_between' => 'No KTP antara 5 - 20 digit',
                        );          
        //buat validasi
        $validasi = Validator::make($input, $aturan, $pesan);
        //jika validasi gagal
        if ($validasi->fails()){

            return Redirect::back()->withErrors($validasi)->withinput(); 
        }
        // jika sukses
        else {
            //baca database berdasarkan id
            $edit = nasabah::find($id);

            //letakan di database
            $edit->kdnas      = Input::get('kdnas');
            $edit->nama       = Input::get('nama');
            $edit->alamat     = Input::get('alamat');
            $edit->kelurahan  = Input::get('kelurahan');
            $edit->kecamatan  = Input::get('kecamatan');
            $edit->kota       = Input::get('kota');
            $edit->kdpos      = Input::get('kdpos');
            $edit->tptlahir   = Input::get('tptlahir');
            $edit->tglahir    = date("Y-m-d", strtotime(Input::get('tglahir')));
            $edit->umur       = Carbon::createFromFormat('Y-m-d', date("Y-m-d", strtotime(Input::get('tglahir'))))->age;
            $edit->namaibu    = Input::get('namaibu');
            $edit->telp       = Input::get('telp');
            $edit->noktp      = Input::get('noktp');
            $edit->npwp       = Input::get('npwp');
            $edit->pekerjaan  = Input::get('pekerjaan');
            $edit->save();
            
            //kehalaman home dengan pesan sukses
            return Redirect::Route('nasindex')->withpesan('Data Baru Berhasil Diedit');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deletenas($id)
    {
        nasabah::find($id)->delete(); // cari id dan delete

        return Redirect::back()->withpesan('data berhasil dihapus'); // redirect dan pesan sukses
    }

    public function searchnas()
    {
        $input = Input::get('carinas');
        $cari = nasabah::where('nama', 'LIKE', '%'.$input.'%')->orWhere('kdnas', 'LIKE', '%'.$input.'%')->orWhere('namaibu', 'LIKE', '%'.$input.'%')->orWhere('noktp', 'LIKE', '%'.$input.'%')->get(); // fungsi cari dalam table
        return view('pembiayaan.nasabah_search', compact('cari')); // load view & kirim value
    }

    public function printpdfnas() {
        $nasabah = nasabah::all(); // get data
        $pdf = PDF::loadView('pembiayaan.nasabah_pdf', compact('nasabah'))->setPaper('a4')->setOrientation('landscape'); // load view Jns_penggunaan_pdf & kirim value
        return $pdf->stream(); // fungsi print preview
    }

    public function savepdfnas() {
        $nasabah = nasabah::all(); // get data
        $pdf = PDF::loadView('pembiayaan.nasabah_pdf', compact('nasabah'))->setPaper('a4')->setOrientation('landscape'); // load view Jns_penggunaan_pdf & kirim value
        return $pdf->download('kode_nasabah.pdf'); // fungsi download
    }

    public function excelnas() {
        $nasabah = nasabah::all(); // get data 
        Excel::create('NASABAH', function($excel) use ($nasabah) { //nama file
            $excel->sheet('nasabah', function($sheet) use ($nasabah)  { //nama sheet
                
                $row=1; // Awal mulai row excel
                $sheet->row($row, array(
                    'ID', 'KODE NASABAH', 'NAMA', 'ALAMAT', 'KODE POS', 'TEMPAT LAHIR', 'TANGGAL LAHIR', 'UMUR', 'IBU KANDUNG', 'TELEPON', 'NO KTP', 'NPWP', 'PEKERJAAN')); // isi header column
                foreach ($nasabah as $value) {
                    $sheet->row(++$row, array( // looping isi table dgn array
                        $value->id,
                        $value->kdnas,
                        $value->nama,
                        $value->alamat,
                        $value->kdpos,
                        $value->tptlahir, 
                        $value->tglahir,
                        $value->umur,
                        $value->namaibu,
                        $value->telp,
                        $value->noktp,
                        $value->npwp,
                        $value->pekerjaan));
                }

            });

        })->export('xls');
    }
}


