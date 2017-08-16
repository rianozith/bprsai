<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\sifat;
use Input;
use Validator;
use Redirect;
use PDF;
use Excel;

class sifatController extends Controller
{
    public function indexsifat()
    {
        $sifat = sifat::paginate(10); // get data dgn paginasi 10
        return view('pembiayaan.Sifat_index',compact('sifat')); // load view dan kirim data
    }
}
