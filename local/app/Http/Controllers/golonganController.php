<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\golnasabah;
use Input;
use Validator;
use Redirect;
use PDF;
use Excel;

class golonganController extends Controller
{
    public function indexgol()
    {
        $golongan = golnasabah::paginate(20); // get data dgn paginasi 20
        return view('pembiayaan.Golongan_index',compact('golongan')); // load view dan kirim data
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function creategol()
    {
        return view('pembiayaan.Golongan_create'); // menuju halaman Jns_penggunaan_create
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storegol(Request $request)
    {
        $input = Input::all();
        //aturan validasi
        $aturan = array(
                        'sandi'=>'required|min:4|integer',
                        'keterangan'=>'required',
                        );
        // custom pesan validasi
        $pesan = array(
                        'sandi.required'=> 'Kode golongan harus diisi',
                        'sandi.min' => 'Kode golongan minimal 4 angka',
                        'sandi.integer' => 'Kode golongan harus angka',
                        'keterangan.required'=> 'keterangan harus diisi',
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
            $sandi 		= Input::get('sandi');
            $keterangan = Input::get('keterangan');
            
            
            
            //lalu isi ke database
            golnasabah::create(compact('sandi', 'keterangan'));
            //kehalaman home dengan pesan sukses
            return Redirect::Route('golindex')->withpesan('input kode golongan berhasil');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showgol($id)
    {
        $datas = golnasabah::find($id); // get data dgn id
        return view('pembiayaan.Golongan_show', compact('datas')); // load view dan kirim data
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editgol($id)
    {
        $datas = golnasabah::find($id); // get data dgn id
        return view('pembiayaan.Golongan_update', compact('datas')); // load view dan kirim data
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updategol(Request $request, $id)
    {

        $input = Input::all();
        //aturan validasi
        $aturan = array(
                        'sandi'=>'required|min:4|integer',
                        'keterangan'=>'required',
                        );
        // custom pesan validasi
        $pesan = array(
                        'sandi.required'=> 'Kode golongan harus diisi',
                        'sandi.min' => 'Kode golongan minimal 4 angka',
                        'sandi.integer' => 'Kode golongan harus angka',
                        'keterangan.required'=> 'keterangan harus diisi'
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
            $edit = golnasabah::find($id);

            //letakan di variable
            $edit->sandi  	  = Input::get('sandi');
            $edit->keterangan = Input::get('keterangan');
            $edit->save();
            
            //kehalaman home dengan pesan sukses
            return Redirect::Route('golindex')->withpesan('data baru berhasil di edit');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deletegol($id)
    {
        golnasabah::find($id)->delete(); // cari id dan delete

        return Redirect::back()->withpesan('data berhasil dihapus'); // redirect dan pesan sukses
    }

    public function searchgol()
    {
        $input = Input::get('carigol');
        $cari = golnasabah::where('keterangan', 'LIKE', '%'.$input.'%')->orWhere('sandi', 'LIKE', '%'.$input.'%')->get(); // fungsi cari dalam table
        return view('pembiayaan.Golongan_search', compact('cari')); // load view & kirim value
    }

    public function printpdfgol() {
        $golnasabah = golnasabah::all(); // get data
        $pdf = PDF::loadView('pembiayaan.Golongan_pdf', compact('golnasabah')); // load view Jns_penggunaan_pdf & kirim value
        return $pdf->stream(); // fungsi print preview
    }

    public function savepdfgol() {
        $golnasabah = golnasabah::all(); // get data
        $pdf = PDF::loadView('pembiayaan.Golongan_pdf', compact('golnasabah')); // load view Jns_penggunaan_pdf & kirim value
        return $pdf->download('kode_golongan_nasabah.pdf'); // fungsi download
    }

    public function excelgol() {
        $golnasabah = golnasabah::all(); // get data 
        Excel::create('GOLNASABAH', function($excel) use ($golnasabah) { //nama file
            $excel->sheet('Golongan', function($sheet) use ($golnasabah)  { //nama sheet
                
                $row=1; // Awal mulai row excel
                $sheet->row($row, array(
                    'SANDI', 'KETERANGAN')); // isi header column
                foreach ($golnasabah as $value) {
                    $sheet->row(++$row, array( // looping isi table dgn array
                        $value->sandi,
                        $value->keterangan));
                }

            });

        })->export('xls');
    }
}
