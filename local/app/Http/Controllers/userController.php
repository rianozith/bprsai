<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use Input;
use Validator;
use Redirect;

class userController extends Controller
{
    public function indexuser()
    {
        $users = User::paginate(10); // get data dgn paginasi 20
        return view('users.daftar_user',compact('users')); // load view dan kirim data
    }

    public function createuser()
    {
        $role  = \App\role::lists('ket', 'role' ); // get data dlm table roles
        $inisial = \App\officer::lists('inisial', 'inisial');
        return view('users.daftar_user_create', compact('role', 'inisial')); // menuju halaman create user
    }

    public function storeuser(Request $request)
    {
        $input = Input::all();
        //aturan validasi
        $aturan = array(
                        'name'=>'required|min:3',
                        'username'=>'required|min:3',
                        'email'=>'email|required',
                        'in:admin,user,supervisor,cs,teller,adm,finance,ao,report,kas,legal',
                        'password'=>'required',
                        );
        // custom pesan validasi
        $pesan = array(
                        'name.required'=> 'nama harus diisi',
                        'name.min' => 'nama minimal 3 huruf',
                        'username.required'=> 'username harus diisi',
                        'username.min'=> 'username minimal 3 huruf',
                        
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
            $name      = Input::get('name');
            $username  = Input::get('username');
            $inisial  = Input::get('inisial');
            $email     = Input::get('email');
            $role      = Input::get('role');
            $password    = bcrypt(Input::get('password'));
            
            
            //lalu isi ke database
            User::create(compact('name', 'username', 'inisial', 'email', 'role', 'password'));
            //kehalaman home dengan pesan sukses
            return Redirect::Route('userindex')->withpesan('Input User Berhasil');
        }

    }
    
    public function edituser($id)
    {
        $datas = User::find($id); // get data dgn id
        $role  = \App\role::lists('ket', 'role' ); // get data dlm table roles
        return view('users.daftar_user_update', compact('datas', 'role')); // load view dan kirim data
    }

    public function updateuser(Request $request, $id)
    {

        $input = Input::all();
        //aturan validasi
        $aturan = array(
                        'name'=>'required|min:3',
                        'username'=>'required|min:3',
                        'email'=>'email|required',
                        'in:admin,user,supervisor,cs,teller,adm,finance,ao,report,kas,legal',
                        'password'=>'required',
                        );
        // custom pesan validasi
        $pesan = array(
                        'name.required'=> 'nama harus diisi',
                        'name.min' => 'nama minimal 3 huruf',
                        'username.required'=> 'username harus diisi',
                        'username.min'=> 'username minimal 3 huruf',
                        
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
            $edit = User::find($id);

            //letakan di variable
            $edit->name  	  = Input::get('name');
            $edit->username = Input::get('username');
            $edit->inisial = Input::get('inisial');
            $edit->email = Input::get('email');
            $edit->role = Input::get('role');
            $edit->password = bcrypt(Input::get('password'));
            $edit->save();
            
            //kehalaman home dengan pesan sukses
            return Redirect::Route('userindex')->withpesan('Data Baru Berhasil Diedit');
        }
    }

    public function deleteuser($id)
    {
        User::find($id)->delete(); // cari id dan delete

        return Redirect::back()->withpesan('Data Berhasil Dihapus'); // redirect dan pesan sukses
    }
}
