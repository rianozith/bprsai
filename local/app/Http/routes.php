<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('index2');
// });

Route::get('test1', function() {

		# Temukan mahasiswa dengan NIM 1015015072
		$nasabah = \App\nasabah::select('*')->where('id', '=', '1')->first();
		$biaya = \App\pembiayaan::select('id')->get();

		# Tampilkan nama dosen pembimbing
		return $biaya;

	});

Route::get('index', function () {
    return view('index2');
});

Route::get('/about',function(){ 
	return view('about');
});

Route::get('/home', ['middleware' => 'auth', function () {
	return view('home');
}]);

Route::get('/form',function(){ 
	return view('form');
});

Route::get('/newlogin', function () {
    return view('auth/newlogin2');
});


Route::get('dcnasabah', array('as'=>'dcnasabah', 'uses' => 'DcnasabahController@dcn'));
Route::get('realisasi_perjanjian', array('as'=>'realisasi_perjanjian', 'uses' => 'DcnasabahController@realisasiperjanjian'));
Route::get('akad_pembiayaan', array('as'=>'akad_pembiayaan', 'uses' => 'DcnasabahController@akadpembiayaan'));



Route::get('tabungan', array('as'=>'gettabungan', 'uses' => 'TabunganController@tabungan'));
Route::get('tabungan/masterdata', array('as'=>'getmasterdata', 'uses' => 'TabunganController@masterdata'));
Route::get('tabungan/transaksi', array('as'=>'gettransaksi', 'uses' => 'TabunganController@transaksi'));
Route::get('tabungan/laporan', array('as'=>'getlaporan', 'uses' => 'TabunganController@laporan'));

Route::get('/', array('as'=> 'getLogin', 'uses'=> 'Auth\AuthController@getLogin'));
Route::get('/login', array('as'=> 'getLogin', 'uses'=> 'Auth\AuthController@getLogin'));
Route::get('/auth/login', array('as'=> 'getLogin', 'uses'=> 'Auth\AuthController@getLogin'));
Route::post('auth/login', array('as'=> 'postLogin', 'uses'=> 'Auth\AuthController@postLogin'));
Route::get('auth/logout', array('as'=> 'getLogout', 'uses'=> 'Auth\AuthController@getLogout'));

Route::get('auth/register', array('as'=> 'getRegister', 'uses'=> 'Auth\AuthController@getRegister'));
Route::post('auth/register', array('as'=> 'postRegister', 'uses'=> 'Auth\AuthController@postRegister'));

Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

Route::get('pembiayaan/indexsektor', array('as'=>'indexsek', 'uses'=> 'sektorController@indexsektor'));
Route::get('pembiayaan/createsektor', array('as'=>'createsek', 'uses'=> 'sektorController@createsektor'));
Route::post('pembiayaan/createsektor', array('as'=>'storesek', 'uses'=>'sektorController@storesektor'));
Route::get('pembiayaan/showsektor/{id}', array('as'=>'showsek', 'uses'=>'sektorController@showsektor'));
Route::get('pembiayaan/editsektor/{id}', array('as'=>'editsek', 'uses'=> 'sektorController@editsektor'));
Route::put('pembiayaan/editsektor/{id}', array('as'=>'updatesek', 'uses'=> 'sektorController@updatesektor'));
Route::get('pembiayaan/deletesektor/{id}', array('as'=>'deletesek', 'uses'=> 'sektorController@deletesektor'));
Route::get('pembiayaan/searchsektor', array('as'=>'searchsek', 'uses'=> 'sektorController@searchsektor'));

Route::any('pembiayaan/printpdfsektor', array('as'=>'printpdfsek', 'uses'=> 'sektorController@printpdfsektor'));
Route::any('pembiayaan/savepdfsektor', array('as'=>'savepdfsek', 'uses'=> 'sektorController@savepdfsektor'));
Route::any('pembiayaan/excelsektor', array('as'=>'excelsek', 'uses'=> 'sektorController@excelsektor'));

//===================================================================================================================

Route::get('pembiayaan/indexao', array('as'=>'aoindex', 'uses'=> 'AccountOfficerController@indexao'));
Route::get('pembiayaan/createao', array('as'=>'aocreate', 'uses'=> 'AccountOfficerController@createao'));
Route::post('pembiayaan/createao', array('as'=>'aostore', 'uses'=>'AccountOfficerController@storeao'));
Route::get('pembiayaan/showao/{id}', array('as'=>'aoshow', 'uses'=>'AccountOfficerController@showao'));
Route::get('pembiayaan/editao/{id}', array('as'=>'aoedit', 'uses'=> 'AccountOfficerController@editao'));
Route::put('pembiayaan/editao/{id}', array('as'=>'aoupdate', 'uses'=> 'AccountOfficerController@updateao'));
Route::get('pembiayaan/deleteao/{id}', array('as'=>'aodelete', 'uses'=> 'AccountOfficerController@deleteao'));
Route::get('pembiayaan/searchao', array('as'=>'aosearch', 'uses'=> 'AccountOfficerController@searchao'));

Route::any('pembiayaan/printpdfao', array('as'=>'aoprintpdf', 'uses'=> 'AccountOfficerController@printpdfao'));
Route::any('pembiayaan/savepdfao', array('as'=>'aosavepdf', 'uses'=> 'AccountOfficerController@savepdfao'));
Route::any('pembiayaan/excelao', array('as'=>'aoexcel', 'uses'=> 'AccountOfficerController@excelao'));

//===================================================================================================================

Route::get('pembiayaan/indexjpeggn', array('as'=>'jpeggnindex', 'uses'=> 'jpeggnController@indexjpeggn'));
Route::get('pembiayaan/createjpeggn', array('as'=>'jpeggncreate', 'uses'=> 'jpeggnController@createjpeggn'));
Route::post('pembiayaan/createjpeggn', array('as'=>'jpeggnstore', 'uses'=>'jpeggnController@storejpeggn'));
Route::get('pembiayaan/showjpeggn/{id}', array('as'=>'jpeggnshow', 'uses'=>'jpeggnController@showjpeggn'));
Route::get('pembiayaan/editjpeggn/{id}', array('as'=>'jpeggnedit', 'uses'=> 'jpeggnController@editjpeggn'));
Route::put('pembiayaan/editjpeggn/{id}', array('as'=>'jpeggnupdate', 'uses'=> 'jpeggnController@updatejpeggn'));
Route::get('pembiayaan/deletejpeggn/{id}', array('as'=>'jpeggndelete', 'uses'=> 'jpeggnController@deletejpeggn'));
Route::get('pembiayaan/searchjpeggn', array('as'=>'jpeggnsearch', 'uses'=> 'jpeggnController@searchjpeggn'));

Route::any('pembiayaan/printpdfjpeggn', array('as'=>'jpeggnprintpdf', 'uses'=> 'jpeggnController@printpdfjpeggn'));
Route::any('pembiayaan/savepdfjpeggn', array('as'=>'jpeggnsavepdf', 'uses'=> 'jpeggnController@savepdfjpeggn'));
Route::any('pembiayaan/exceljpeggn', array('as'=>'jpeggnexcel', 'uses'=> 'jpeggnController@exceljpeggn'));

//===================================================================================================================

Route::get('pembiayaan/indexgol', array('as'=>'golindex', 'uses'=> 'golonganController@indexgol'));
Route::get('pembiayaan/creategol', array('as'=>'golcreate', 'uses'=> 'golonganController@creategol'));
Route::post('pembiayaan/creategol', array('as'=>'golstore', 'uses'=>'golonganController@storegol'));
Route::get('pembiayaan/showgol/{id}', array('as'=>'golshow', 'uses'=>'golonganController@showgol'));
Route::get('pembiayaan/editgol/{id}', array('as'=>'goltedit', 'uses'=> 'golonganController@editgol'));
Route::put('pembiayaan/editgol/{id}', array('as'=>'golupdate', 'uses'=> 'golonganController@updategol'));
Route::get('pembiayaan/deletegol/{id}', array('as'=>'goldelete', 'uses'=> 'golonganController@deletegol'));
Route::get('pembiayaan/searchgol', array('as'=>'golsearch', 'uses'=> 'golonganController@searchgol'));

Route::any('pembiayaan/printpdfgol', array('as'=>'golprintpdf', 'uses'=> 'golonganController@printpdfgol'));
Route::any('pembiayaan/savepdfgol', array('as'=>'golsavepdf', 'uses'=> 'golonganController@savepdfgol'));
Route::any('pembiayaan/excelgol', array('as'=>'golexcel', 'uses'=> 'golonganController@excelgol'));
//===================================================================================================================
Route::get('pembiayaan/indexsifat', array('as'=>'sifatindex', 'uses'=> 'sifatController@indexsifat'));
//===================================================================================================================
Route::get('users/daftaruser', array('as'=>'userindex', 'middleware' => ['auth', 'role:admin'], 'uses'=> 'userController@indexuser'));
Route::get('users/createdaftaruser', array('as'=>'usercreate', 'middleware' => ['auth', 'role:admin'],  'uses'=> 'userController@createuser'));
Route::post('users/createdaftaruser', array('as'=>'usercreate', 'middleware' => ['auth', 'role:admin'],  'uses'=> 'userController@storeuser'));
Route::get('users/editdaftaruser/{id}', array('as'=>'useredit', 'middleware' => ['auth', 'role:admin'],  'uses'=> 'userController@edituser'));
Route::put('users/editdaftaruser/{id}', array('as'=>'userupdate', 'middleware' => ['auth', 'role:admin'], 'uses'=> 'userController@updateuser'));
Route::get('users/deletedaftaruser/{id}', array('as'=>'userdelete', 'middleware' => ['auth', 'role:admin'], 'uses'=> 'userController@deleteuser'));


//===================================================================================================================

Route::get('pembiayaan/indexnasabah', array('as'=>'nasindex', 'uses'=> 'nasabahController@indexnas'));
Route::get('pembiayaan/createnasabah', array('as'=>'nascreate', 'uses'=> 'nasabahController@createnas'));
Route::post('pembiayaan/createnasabah', array('as'=>'nasstore', 'uses'=>'nasabahController@storenas'));
Route::get('pembiayaan/shownasabah/{id}', array('as'=>'nasshow', 'uses'=>'nasabahController@shownas'));
Route::get('pembiayaan/editnasabah/{id}', array('as'=>'nastedit', 'uses'=> 'nasabahController@editnas'));
Route::put('pembiayaan/editnasabah/{id}', array('as'=>'nasupdate', 'uses'=> 'nasabahController@updatenas'));
Route::get('pembiayaan/deletenasabah/{id}', array('as'=>'nasdelete', 'uses'=> 'nasabahController@deletenas'));
Route::get('pembiayaan/searchnasabah', array('as'=>'nassearch', 'uses'=> 'nasabahController@searchnas'));

Route::any('pembiayaan/printpdfnasabah', array('as'=>'nasprintpdf', 'uses'=> 'nasabahController@printpdfnas'));
Route::any('pembiayaan/savepdfnasabah', array('as'=>'nassavepdf', 'uses'=> 'nasabahController@savepdfnas'));
Route::any('pembiayaan/excelnasabah', array('as'=>'nasexcel', 'uses'=> 'nasabahController@excelnas'));


//===================================================================================================================

Route::get('calonasabah/indexcalonasabah', array('as'=>'calonindex', 'uses'=> 'calonasabahController@indexcalon'));
Route::get('calonasabah/createcalonasabah', array('as'=>'caloncreate', 'uses'=> 'calonasabahController@createcalon'));
Route::post('calonasabah/createcalonasabah', array('as'=>'calonstore', 'uses'=>'calonasabahController@storecalon'));
Route::get('calonasabah/showcalonasabah/{id}', array('as'=>'calonshow', 'uses'=>'calonasabahController@showcalon'));
Route::get('calonasabah/calonpembiayaan/{id}', array('as'=>'calonpmby', 'uses'=>'calonasabahController@calonpmby'));
Route::get('calonasabah/editcalonasabah/{id}', array('as'=>'calontedit', 'uses'=> 'calonasabahController@editcalon'));
Route::put('calonasabah/editcalonasabah/{id}', array('as'=>'calonupdate', 'uses'=> 'calonasabahController@updatecalon'));
Route::get('calonasabah/deletecalonasabah/{id}', array('as'=>'calondelete', 'uses'=> 'calonasabahController@deletecalon'));
Route::get('calonasabah/searchcalonasabah', array('as'=>'calonsearch', 'uses'=> 'calonasabahController@searchcalon'));

Route::any('calonasabah/printpdfcalonasabah', array('as'=>'calonprintpdf', 'uses'=> 'calonasabahController@printpdfcalon'));
Route::any('calonasabah/savepdfcalonasabah', array('as'=>'calonsavepdf', 'uses'=> 'calonasabahController@savepdfcalon'));
Route::any('calonasabah/excelcalonasabah', array('as'=>'calonexcel', 'uses'=> 'calonasabahController@excelcalon'));

//===================================================================================================================

Route::get('pembiayaan/indexagunan', array('as'=>'agunanindex', 'uses'=> 'agunanController@indexagunan'));
Route::get('pembiayaan/createagunan', array('as'=>'agunancreate', 'uses'=> 'agunanController@createagunan'));
Route::post('pembiayaan/createagunan', array('as'=>'agunanstore', 'uses'=>'agunanController@storeagunan'));
Route::get('pembiayaan/showagunan/{id}', array('as'=>'agunanshow', 'uses'=>'agunanController@showagunan'));
Route::get('pembiayaan/editagunan/{id}', array('as'=>'agunantedit', 'uses'=> 'agunanController@editagunan'));
Route::put('pembiayaan/editagunan/{id}', array('as'=>'agunanupdate', 'uses'=> 'agunanController@updateagunan'));
Route::get('pembiayaan/deleteagunan/{id}', array('as'=>'agunandelete', 'uses'=> 'agunanController@deleteagunan'));
Route::get('pembiayaan/searchagunan', array('as'=>'agunansearch', 'uses'=> 'agunanController@searchagunan'));

Route::any('pembiayaan/printpdfagunan', array('as'=>'agunanprintpdf', 'uses'=> 'agunanController@printpdfagunan'));
Route::any('pembiayaan/savepdfagunan', array('as'=>'agunansavepdf', 'uses'=> 'agunanController@savepdfagunan'));
Route::any('pembiayaan/excelagunan', array('as'=>'agunanexcel', 'uses'=> 'agunanController@excelagunan'));


//===================================================================================================================

Route::get('pembiayaan/indexpembiayaan', array('as'=>'pembiayaanindex', 'uses'=> 'pembiayaanController@indexpembiayaan'));
Route::get('pembiayaan/createpembiayaan/{id}', array('as'=>'pembiayaancreate', 'uses'=> 'pembiayaanController@createpembiayaan'));
Route::post('pembiayaan/createpembiayaan', array('as'=>'pembiayaanstore', 'uses'=>'pembiayaanController@storepembiayaan'));
Route::get('pembiayaan/showpembiayaan/{id}', array('as'=>'pembiayaanshow', 'uses'=>'pembiayaanController@showpembiayaan'));
Route::get('pembiayaan/editpembiayaan/{id}', array('as'=>'pembiayaantedit', 'uses'=> 'pembiayaanController@editpembiayaan'));
Route::put('pembiayaan/editpembiayaan/{id}', array('as'=>'pembiayaanupdate', 'uses'=> 'pembiayaanController@updatepembiayaan'));
Route::get('pembiayaan/deletepembiayaan/{id}', array('as'=>'pembiayaandelete', 'uses'=> 'pembiayaanController@deletepembiayaan'));
Route::get('pembiayaan/searchpembiayaan', array('as'=>'pembiayaansearch', 'uses'=> 'pembiayaanController@searchpembiayaan'));

Route::any('pembiayaan/printperjanjianmdh/{id}', array('as'=>'printperjanjianmdh', 'uses'=> 'pembiayaanController@printperjanjianmdh'));
Route::any('pembiayaan/printperjanjianmrb/{id}', array('as'=>'printperjanjianmrb', 'uses'=> 'pembiayaanController@printperjanjianmrb'));
Route::any('pembiayaan/printpersetujuan/{id}', array('as'=>'printpersetujuan', 'uses'=> 'pembiayaanController@printpersetujuan'));
Route::any('pembiayaan/printpengakuan/{id}', array('as'=>'printpengakuan', 'uses'=> 'pembiayaanController@printpengakuan'));
Route::any('pembiayaan/printkuasajual/{id}', array('as'=>'printkuasajual', 'uses'=> 'pembiayaanController@printkuasajual'));
Route::any('pembiayaan/printrepayment/{id}', array('as'=>'printrepayment', 'uses'=> 'pembiayaanController@printrepayment'));
Route::any('pembiayaan/printkartu/{id}', array('as'=>'printrepayment', 'uses'=> 'pembiayaanController@printkartu'));
Route::any('pembiayaan/printinfopembiayaan/{id}', array('as'=>'printinfopembiayaan', 'uses'=> 'pembiayaanController@printinfopembiayaan'));
Route::any('pembiayaan/savepdfpembiayaan', array('as'=>'pembiayaansavepdf', 'uses'=> 'pembiayaanController@savepdfpembiayaan'));
Route::any('pembiayaan/excelpembiayaan', array('as'=>'pembiayaanexcel', 'uses'=> 'pembiayaanController@excelpembiayaan'));