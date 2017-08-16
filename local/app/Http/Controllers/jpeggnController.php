<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\jpeggn;
use Input;
use Validator;
use Redirect;
use PDF;
use Excel;

class jpeggnController extends Controller
{
    public function indexjpeggn()
    {
        $jnspeng = jpeggn::paginate(20); // get data dgn paginasi 20
        return view('pembiayaan.Jns_penggunaan_index',compact('jnspeng')); // load view dan kirim data
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createjpeggn()
    {
        return view('pembiayaan.Jns_penggunaan_create'); // menuju halaman Jns_penggunaan_create
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storejpeggn(Request $request)
    {
        $input = Input::all();
        //aturan validasi
        $aturan = array(
                        'kd_jpeggn'=>'required|min:2|integer',
                        'ket'=>'required',
                        );
        // custom pesan validasi
        $pesan = array(
                        'kd_jpeggn.required'=> 'Kode jenis penggunaan harus diisi',
                        'kd_jpeggn.min' => 'Kode jenis penggunaan minimal 1 angka',
                        'kd_jpeggn.integer' => 'Kode jenis penggunaan harus angka',
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
            $kd_jpeggn = Input::get('kd_jpeggn');
            $ket 	   = Input::get('ket');
            $otorisasi = Input::get('otorisasi');
            
            
            //lalu isi ke database
            jpeggn::create(compact('kd_jpeggn', 'ket', 'otorisasi'));
            //kehalaman home dengan pesan sukses
            return Redirect::Route('jpeggnindex')->withpesan('input kode jenis penggunaan berhasil');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showjpeggn($id)
    {
        $datas = jpeggn::find($id); // get data dgn id
        return view('pembiayaan.Jns_penggunaan_show', compact('datas')); // load view dan kirim data
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editjpeggn($id)
    {
        $datas = jpeggn::find($id); // get data dgn id
        return view('pembiayaan.Jns_penggunaan_update', compact('datas')); // load view dan kirim data
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatejpeggn(Request $request, $id)
    {

        // $input = Input::all();
        // //aturan validasi
        // $aturan = array(
        //                 'kd_sektor1'=>'required|min:3|integer',
        //                 'ket'=>'required',
        //                 );
        // // custom pesan validasi
        // $pesan = array(
        //                 'kd_sektor1.required'=> 'kode sektor harus diisi',
        //                 'kd_sektor1.min' => 'kode sektor minimal 3 angka',
        //                 'kd_sektor1.integer' => 'kode sektor harus angka',
        //                 'ket.required' => 'keterangan harus diisi'
        //                 );            
        // //buat validasi
        // $validasi = Validator::make($input, $aturan, $pesan);
        // //jika validasi gagal
        // if ($validasi->fails()){

        //     return Redirect::back()->withErrors($validasi)->withinput(); 
        // }
        // // jika sukses
        // else {
        //     //baca database berdasarkan id
        //     $edit = new_sektor::find($id);

        //     //letakan di variable
        //     $edit->kd_sektor1 = Input::get('kd_sektor1');
        //     $edit->ket = Input::get('ket');
        //     $edit->otorisasi = Input::get('otorisasi');
        //     $edit->save();
            
        //     //kehalaman home dengan pesan sukses
        //     return Redirect::Route('indexsek')->withpesan('data baru berhasil di edit');
        // }
        $input = Input::all();
        //aturan validasi
        $aturan = array(
                        'kd_jpeggn'=>'required|min:2|integer',
                        'ket'=>'required',
                        );
        // custom pesan validasi
        $pesan = array(
                        'kd_jpeggn.required'=> 'Kode jenis penggunaan harus diisi',
                        'kd_jpeggn.min' => 'Kode jenis penggunaan minimal 1 angka',
                        'kd_jpeggn.integer' => 'Kode jenis penggunaan harus angka',
                        'ket.required'=> 'keterangan harus diisi'
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
            $edit = jpeggn::find($id);

            //letakan di variable
            $edit->kd_jpeggn = Input::get('kd_jpeggn');
            $edit->ket = Input::get('ket');
            $edit->otorisasi = Input::get('otorisasi');
            $edit->save();
            
            //kehalaman home dengan pesan sukses
            return Redirect::Route('jpeggnindex')->withpesan('data baru berhasil di edit');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deletejpeggn($id)
    {
        jpeggn::find($id)->delete(); // cari id dan delete

        return Redirect::back()->withpesan('data berhasil dihapus'); // redirect dan pesan sukses
    }

    public function searchjpeggn()
    {
        $input = Input::get('carijpeggn');
        $cari = jpeggn::where('ket', 'LIKE', '%'.$input.'%')->orWhere('kd_jpeggn', 'LIKE', '%'.$input.'%')->get(); // fungsi cari dalam table
        return view('pembiayaan.Jns_penggunaan_search', compact('cari')); // load view & kirim value
    }

    public function printpdfjpeggn() {
        $jnspeng = jpeggn::all(); // get data
        $pdf = PDF::loadView('pembiayaan.Jns_penggunaan_pdf', compact('jnspeng')); // load view Jns_penggunaan_pdf & kirim value
        return $pdf->stream(); // fungsi print preview
    }

    public function savepdfjpeggn() {
        $jnspeng = jpeggn::all(); // get data
        $pdf = PDF::loadView('pembiayaan.Jns_penggunaan_pdf', compact('jnspeng')); // load view Jns_penggunaan_pdf & kirim value
        return $pdf->download('kode_accountOfficer.pdf'); // fungsi download
    }

    public function exceljpeggn() {
        $jnspeng = jpeggn::all(); // get data 
        Excel::create('JPEGGN', function($excel) use ($jnspeng) { //nama file
            $excel->sheet('Jenis Penggunaan', function($sheet) use ($jnspeng)  { //nama sheet
                
                $row=1; // Awal mulai row excel
                $sheet->row($row, array(
                    'KD_JPEGGN', 'KET', 'OTORISASI')); // isi header column
                foreach ($jnspeng as $value) {
                    $sheet->row(++$row, array( // looping isi table dgn array
                        $value->kd_jpeggn,
                        $value->ket,
                        $value->otorisasi));
                }

            });

        })->export('xls');
    }
}
