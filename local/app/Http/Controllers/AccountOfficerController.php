<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\officer;
use Input;
use Validator;
use Redirect;
use PDF;
use Excel;

class AccountOfficerController extends Controller
{
    public function indexao()
    {
        $officer = officer::paginate(20); // get data dgn paginasi 20
        return view('pembiayaan.Accofficer_index',compact('officer')); // load view dan kirim data
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createao()
    {
        return view('pembiayaan.Accofficer_create'); // menuju halaman Accofficer_create
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeao(Request $request)
    {
        $input = Input::all();
        //aturan validasi
        $aturan = array(
                        'kd_officer'=>'required|integer',
                        'nama'=>'required',
                        'inisial' => 'required|alpha',
                        );
        // custom pesan validasi
        $pesan = array(
                        'kd_officer.required'=> 'Kode officer harus diisi',
                        'kd_officer.integer' => 'Kode officer harus angka',
                        'nama.required'=> 'Nama harus diisi',
                        'inisial.required'   => 'Inisial harus diisi',
                        'inisial.alpha'   => 'Inisial harus alphabetic'
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
            $kd_officer = Input::get('kd_officer');
            $nama = Input::get('nama');
            $inisial = Input::get('inisial');
            $ao = Input::get('ao');
            
            //lalu isi ke database
            officer::create(compact('kd_officer', 'nama', 'inisial', 'ao'));
            //kehalaman home dengan pesan sukses
            return Redirect::Route('aoindex')->withpesan('input kode officer berhasil');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showao($id)
    {
        $datas = officer::find($id); // get data dgn id
        return view('pembiayaan.Accofficer_show', compact('datas')); // load view dan kirim data
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editao($id)
    {
        $datas = officer::find($id); // get data dgn id
        return view('pembiayaan.Accofficer_update', compact('datas')); // load view dan kirim data
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateao(Request $request, $id)
    {
        $input = Input::all();
        //aturan validasi
        $aturan = array(
                        'kd_officer'=>'required|min:3|integer',
                        'nama'=>'required',
                        );
        // custom pesan validasi
        $pesan = array(
                        'kd_officer.required'=> 'kode officer harus diisi',
                        'kd_officer.min' => 'kode officer minimal 3 angka',
                        'kd_officer.integer' => 'kode officer harus angka',
                        'nama.required' => 'keterangan harus diisi'
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
            $edit = officer::find($id);

            //letakan di variable
            $edit->kd_officer = Input::get('kd_officer');
            $edit->nama = Input::get('nama');
            $edit->otorisasi = Input::get('otorisasi');
            $edit->ao = Input::get('ao');
            $edit->save();
            
            //kehalaman home dengan pesan sukses
            return Redirect::Route('aoindex')->withpesan('data baru berhasil di edit');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteao($id)
    {
        officer::find($id)->delete(); // cari id dan delete

        return Redirect::back()->withpesan('data berhasil dihapus'); // redirect dan pesan sukses
    }

    public function searchao()
    {
        $input = Input::get('cariao');
        $cari = officer::where('nama', 'LIKE', '%'.$input.'%')->orWhere('kd_officer', 'LIKE', '%'.$input.'%')->get(); // fungsi cari dalam table
        return view('pembiayaan.Accofficer_search', compact('cari')); // load view & kirim value
    }

    public function printpdfao() {
        $officer = officer::all(); // get data
        $pdf = PDF::loadView('pembiayaan.Accofficer_pdf', compact('officer')); // load view Accofficer_pdf & kirim value
        return $pdf->stream(); // fungsi print preview
    }

    public function savepdfao() {
        $officer = officer::all(); // get data
        $pdf = PDF::loadView('pembiayaan.Accofficer_pdf', compact('officer')); // load view Accofficer_pdf & kirim value
        return $pdf->download('kode_accountOfficer.pdf'); // fungsi download
    }

    public function excelao() {
        $kdofficer = officer::all(); // get data 
        Excel::create('OFFICER', function($excel) use ($kdofficer) { //nama file
            $excel->sheet('Kode Officer', function($sheet) use ($kdofficer)  { //nama sheet
                
                $row=1; // Awal mulai row excel
                $sheet->row($row, array(
                    'KD_OFFICER', 'NAMA', 'OTORISASI', 'AO')); // isi header column
                foreach ($kdofficer as $value) {
                    $sheet->row(++$row, array( // looping isi table dgn array
                        $value->kd_officer,
                        $value->nama,
                        $value->otorisasi,
                        $value->ao,));
                }

            });

        })->export('xls');
    }
}
