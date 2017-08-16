<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\agunan;
use Input;
use Validator;
use Redirect;
use PDF;
use Excel;

class agunanController extends Controller
{
    public function indexagunan()
    {
        $agunan = agunan::paginate(10); // get data
        return view('pembiayaan.Agunan_index',compact('agunan')); // load view dan kirim data
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createagunan()
    {
        return view('pembiayaan.Agunan_create'); // menuju halaman create
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeagunan(Request $request)
    {
        $input = Input::all();
        //aturan validasi
        $aturan = array(
                        'kd_agunan'=>'required|min:2|integer',
                        'nama'=>'required',
                        );
        // custom pesan validasi
        $pesan = array(
                        'kd_agunan.required'=> 'Kode jenis agunan harus diisi',
                        'kd_agunan.min' => 'Kode jenis agunan minimal 2 angka',
                        'kd_agunan.integer' => 'Kode jenis agunan harus angka',
                        'nama.required'=> 'keterangan harus diisi',
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
            $kd_agunan = Input::get('kd_agunan');
            $nama 	   = Input::get('nama');
            $otorisasi = Input::get('otorisasi');
            
            
            //lalu isi ke database
            agunan::create(compact('kd_agunan', 'nama'));
            //kehalaman home dengan pesan sukses
            return Redirect::Route('agunanindex')->withpesan('input kode jenis agunan berhasil');
        }

    }
}
