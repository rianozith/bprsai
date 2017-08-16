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

class calonasabahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexcalon()
    {
        
            
        $kdnas      = nasabah::lists('id')->max()+1000000;
        nasabah::create(compact('kdnas'));
        //kehalaman home dengan pesan sukses
        
        
        $kode = $kdnas;

        $jpeggn  = \App\jpeggn::lists('ket', 'kd_jpeggn' ); // get data dlm table 
        $sektor  = \App\new_sektor::lists('ket', 'kd_sektor1' ); // get data dlm table 
        $golongan  = \App\golnasabah::lists('keterangan', 'sandi' ); // get data dlm table 
        $officer  = \App\officer::lists('nama', 'kd_officer' ); // get data dlm table 
        $agunan   = \App\agunan::lists('nama', 'kd_agunan' ); // get data dlm table 
        $wilayah   = \App\dati::lists('keterangan', 'sandi' ); // get data dlm table 
        return view('calonasabah.calon_form', compact('kode', 'jpeggn', 'sektor', 'golongan', 'officer', 'agunan', 'wilayah'));
    }

    public function direct($id)
    {
        $datas = nasabah::find($id); // get data dgn id
       
        return view('calonasabah.calon_form', compact('datas')); // load view dan kirim data
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createcalon()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storecalon(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showcalon($id)
    {
        //
    }

    public function calonpmby($id)
    {
        
        $datas = nasabah::find($id); // get data dgn id
        $jpeggn  = \App\jpeggn::lists('ket', 'kd_jpeggn' ); // get data dlm table 
        $sektor  = \App\new_sektor::lists('ket', 'kd_sektor1' ); // get data dlm table 
        $golongan  = \App\golnasabah::lists('keterangan', 'sandi' ); // get data dlm table 
        $officer  = \App\officer::lists('nama', 'kd_officer' ); // get data dlm table 
        $agunan   = \App\agunan::lists('nama', 'kd_agunan' ); // get data dlm table 
        $wilayah   = \App\dati::lists('keterangan', 'sandi' ); // get data dlm table 
        return view('calonasabah.calon_pmby', compact('kode', 'datas', 'sektor', 'jpeggn', 'golongan', 'officer', 'agunan', 'wilayah')); // load view dan kirim data
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editcalon($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatecalon(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deletecalon($id)
    {
        //
    }

        public function searchcalon()
    {
        $input = Input::get('carinas');
        $cari = nasabah::where('nama', 'LIKE', '%'.$input.'%')->orWhere('kdnas', 'LIKE', '%'.$input.'%')->orWhere('namaibu', 'LIKE', '%'.$input.'%')->get(); // fungsi cari dalam table
        return view('pembiayaan.nasabah_search', compact('cari')); // load view & kirim value
    }

    public function printpdfcalon() {
        $nasabah = nasabah::all(); // get data
        $pdf = PDF::loadView('pembiayaan.nasabah_pdf', compact('nasabah'))->setPaper('a4')->setOrientation('landscape'); // load view Jns_penggunaan_pdf & kirim value
        return $pdf->stream(); // fungsi print preview
    }

    public function savepdfcalon() {
        $nasabah = nasabah::all(); // get data
        $pdf = PDF::loadView('pembiayaan.nasabah_pdf', compact('nasabah'))->setPaper('a4')->setOrientation('landscape'); // load view Jns_penggunaan_pdf & kirim value
        return $pdf->download('kode_nasabah.pdf'); // fungsi download
    }

    public function excelcalon() {
        $nasabah = nasabah::all(); // get data 
        Excel::create('NASABAH', function($excel) use ($nasabah) { //nama file
            $excel->sheet('nasabah', function($sheet) use ($nasabah)  { //nama sheet
                
                $row=1; // Awal mulai row excel
                $sheet->row($row, array(
                    'KODE NASABAH', 'NAMA', 'ALAMAT', 'TANGGAL LAHIR', 'IBU KANDUNG', 'KODE POS', 'TELEPON', 'NO KTP')); // isi header column
                foreach ($nasabah as $value) {
                    $sheet->row(++$row, array( // looping isi table dgn array
                        $value->kdnas,
                        $value->nama,
                        $value->alamat,
                        $value->tglahir,
                        $value->namaibu,
                        $value->kdpos,
                        $value->telp,
                        $value->noktp));
                }

            });

        })->export('xls');
    }
}
