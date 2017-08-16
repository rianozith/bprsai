<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\new_sektor;

class sektorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexsektor()
    {
        $sektor = new_sektor::paginate(10); // get data dgn paginasi 10
        return view('pembiayaan.sector_index',compact('sektor')); // load view dan kirim data
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createsektor()
    {
        return view('pembiayaan.sector_create'); // menuju halaman sector_create
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storesektor(Request $request)
    {
        $input = Input::all();
        //aturan validasi
        $aturan = array(
                        'kd_sektor1'=>'required|min:3|integer',
                        'ket'=>'required',
                        );
        // custom pesan validasi
        $pesan = array(
                        'kd_sektor1.required'=> 'kode sektor harus diisi',
                        'kd_sektor1.min' => 'kode sektor minimal 3 angka',
                        'kd_sektor1.integer' => 'kode sektor harus angka',
                        'ket.required'=> 'keterangan harus diisi',
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
            $kd_sektor1 = Input::get('kd_sektor1');
            $ket = Input::get('ket');
            $otorisasi = Input::get('otorisasi');
            
            //lalu isi ke database
            new_sektor::create(compact('kd_sektor1', 'ket', 'otorisasi'));
            //kehalaman home dengan pesan sukses
            return Redirect::Route('indexsek')->withpesan('input kode sektor berhasil');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showsektor($id)
    {
        $datas = new_sektor::find($id); // get data dgn id
        return view('pembiayaan.sector_show', compact('datas')); // load view dan kirim data
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editsektor($id)
    {
        $datas = new_sektor::find($id); // get data dgn id
        return view('pembiayaan.sector_update', compact('datas')); // load view dan kirim data
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatesektor(Request $request, $id)
    {
        $input = Input::all();
        //aturan validasi
        $aturan = array(
                        'kd_sektor1'=>'required|min:3|integer',
                        'ket'=>'required',
                        );
        // custom pesan validasi
        $pesan = array(
                        'kd_sektor1.required'=> 'kode sektor harus diisi',
                        'kd_sektor1.min' => 'kode sektor minimal 3 angka',
                        'kd_sektor1.integer' => 'kode sektor harus angka',
                        'ket.required' => 'keterangan harus diisi'
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
            $edit = new_sektor::find($id);

            //letakan di variable
            $edit->kd_sektor1 = Input::get('kd_sektor1');
            $edit->ket = Input::get('ket');
            $edit->otorisasi = Input::get('otorisasi');
            $edit->save();
            
            //kehalaman home dengan pesan sukses
            return Redirect::Route('indexsek')->withpesan('data baru berhasil di edit');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deletesektor($id)
    {
        new_sektor::find($id)->delete(); // cari id dan delete

        return Redirect::back()->withpesan('data berhasil dihapus'); // redirect dan pesan sukses
    }

    public function searchsektor()
    {
        $input = Input::get('carisek');
        $cari = new_sektor::where('ket', 'LIKE', '%'.$input.'%')->orWhere('kd_sektor1', 'LIKE', '%'.$input.'%')->get(); // fungsi cari dalam table
        return view('pembiayaan.sector_search', compact('cari')); // load view & kirim value
    }

    public function printpdfsektor() {
        $sektor = new_sektor::all(); // get data
        $pdf = PDF::loadView('pembiayaan.sector_pdf', compact('sektor')); // load view sector_pdf & kirim value
        return $pdf->stream(); // fungsi print preview
    }

    public function savepdfsektor() {
        $sektor = new_sektor::all(); // get data
        $pdf = PDF::loadView('pembiayaan.sector_pdf', compact('sektor')); // load view sector_pdf & kirim value
        return $pdf->download('kode_sektor.pdf'); // fungsi download
    }

    public function excelsektor() {
        $kdsektor = new_sektor::all(); // get data 
        Excel::create('NEW_SEK', function($excel) use ($kdsektor) { //nama file
            $excel->sheet('Kode Sektor', function($sheet) use ($kdsektor)  { //nama sheet
                
                $row=1; // Awal mulai row excel
                $sheet->row($row, array(
                    'KD_SEKTOR1', 'KET', 'OTORISASI')); // isi header column
                foreach ($kdsektor as $value) {
                    $sheet->row(++$row, array( // looping isi table dgn array
                        $value->kd_sektor1,
                        $value->ket,
                        $value->otorisasi,));
                }

            });

        })->export('xls');
    }


    
}
