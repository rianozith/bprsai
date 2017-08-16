@extends('layouts.home_master')

@section('breadcrumb')
<li class="active">
  Informasi Nasabah 
</li>
@stop

@section('link1')
        

@stop

@section('link2')

        <!--/.fluid-container-->
        <link href="{{asset('vendors/datepicker.css')}}" rel="stylesheet" media="screen">
        <link href="{{asset('vendors/uniform.default.css')}}" rel="stylesheet" media="screen">
        <link href="{{asset('vendors/chosen.min.css')}}" rel="stylesheet" media="screen">

        <link href="{{asset('vendors/wysiwyg/bootstrap-wysihtml5.css')}}" rel="stylesheet" media="screen">

        
        <script src="{{asset('vendors/jquery.uniform.min.js')}}"></script>
        <script src="{{asset('vendors/chosen.jquery.min.js')}}"></script>
        <script src="{{asset('vendors/bootstrap-datepicker.js')}}"></script>

        <script src="{{asset('vendors/wysiwyg/wysihtml5-0.3.0.js')}}"></script>
        <script src="{{asset('vendors/wysiwyg/bootstrap-wysihtml5.js')}}"></script>

        <script src="{{asset('vendors/wizard/jquery.bootstrap.wizard.min.js')}}"></script>

        <script type="text/javascript" src="{{asset('vendors/jquery-validation/dist/jquery.validate.min.js')}}"></script>
        <script src="{{asset('assets/form-validation.js')}}"></script>
              
        <script src="{{asset('assets/scripts.js')}}"></script>
        
        <script>

  jQuery(document).ready(function() {   
     FormValidation.init();
     
  });
  

        $(function() {
            $(".datepicker").datepicker();
            $(".uniform_on").uniform();
            $(".chzn-select").chosen();
            $('.textarea').wysihtml5();

            $('#rootwizard').bootstrapWizard({onTabShow: function(tab, navigation, index) {
                var $total = navigation.find('li').length;
                var $current = index+1;
                var $percent = ($current/$total) * 100;
                $('#rootwizard').find('.bar').css({width:$percent+'%'});
                // If it's the last tab then hide the last button and show the finish instead
                if($current >= $total) {
                    $('#rootwizard').find('.pager .next').hide();
                    $('#rootwizard').find('.pager .finish').show();
                    $('#rootwizard').find('.pager  .finish').removeClass('disabled');
                } else {
                    $('#rootwizard').find('.pager .next').show();
                    $('#rootwizard').find('.pager .finish').hide();
                }
            }});
            $('#rootwizard .finish').click(function() {
                alert('Data selesai diinput, Starting over!');
                $('#rootwizard').find("a[href*='tab1']").trigger('click');
            });
        });

        </script>

@stop

@section('content')
    
                    <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Info Nasabah Pembiayaan</div>
                                
                                {{-- <div class="pull-right"><span class="badge badge-warning">View More</span>
                                </div> --}}
                                <div class="btn-group pull-right">
                                        <button data-toggle="dropdown" class="btn dropdown-toggle">Print <i class="icon-print"></i><span class="caret"></span></button>
                                        <ul class="dropdown-menu">
@if(Gate::check('be-admin') || Gate::check('be-legal'))
                                            <li><a href="{{url('pembiayaan/printpersetujuan', $datas->id)}}" target="_blank"><i class="icon-print"></i>  Persetujuan Pembiayaan</a></li>
                            @if ($status === 1)
                                            <li><a href="{{url('pembiayaan/printperjanjianmdh', $datas->id)}}" target="_blank"><i class="icon-print"></i>  Perjanjian Pembiayaan Mudhorobah</a></li>
                            @else
                                            <li><a href="{{url('pembiayaan/printperjanjianmrb', $datas->id)}}" target="_blank"><i class="icon-print"></i>  Perjanjian Pembiayaan Murabahah</a></li>
                            @endif
                                            <li><a href="{{url('pembiayaan/printpengakuan', $datas->id)}}" target="_blank"><i class="icon-print"></i>  Pengakuan Hutang</a></li>
                                            <li><a href="{{url('pembiayaan/printkuasajual', $datas->id)}}" target="_blank"><i class="icon-print"></i>  Kuasa Menjual</a></li>
                                            <li><a href="{{url('pembiayaan/printrepayment', $datas->id)}}" target="_blank"><i class="icon-print"></i>  Repayment Schedule</a></li>
                                            <li><a href="{{url('pembiayaan/printkartu', $datas->id)}}" target="_blank"><i class="icon-print"></i>  Kartu Pengawasan</a></li>
@endif
@if(Gate::check('be-admin') || Gate::check('be-ao') || Gate::check('be-legal'))
                                            <li><a href="{{url('pembiayaan/printinfopembiayaan', $datas->id)}}" target="_blank"><i class="icon-print"></i>  Info Nasabah</a></li>
@endif
                                        </ul>
                                </div>

                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                    <ul class="nav nav-tabs">
                                        <li><a data-toggle="tab" href="#biodata" >Biodata Nasabah</a></li>
                                        <li class="active"><a data-toggle="tab" href="#pembiayaan1">Pembiayaan</a></li>
                                        <li><a data-toggle="tab" href="#pembiayaan2">Pembiayaan</a></li>
                                    </ul>

                                    <div class="tab-content">
                                        <div class="tab-pane" id="biodata"> 
                                        <h3>Informasi Nasabah</h3> 
                                            <form class="form-horizontal">
                                                      <div class="control-group">
                                                        {!! Form::label('kodenasabah', 'Kode Nasabah', array('class' => 'control-label')) !!}
                                                        <div class="controls">
                                                            <span class="input-xlarge uneditable-input">{{$values->kdnas}}</span>
                                                        </div>                    
                                                      </div>  

                                                      <div class="control-group">
                                                        {!! Form::label('namanasabah', 'Nama Nasabah', array('class' => 'control-label')) !!}
                                                        <div class="controls">
                                                          <span class="input-xlarge uneditable-input">{{$values->nama}}</span>
                                                        </div>
                                                      </div>

                                                      <div class="control-group">
                                                        {!! Form::label('alamat', 'Alamat', array('class' => 'control-label')) !!}
                                                        <div class="controls">
                                                          <span class="input-xlarge uneditable-input " style ="width: 810px; height: 200px">{{$values->alamat}}</span>
                                                          </div>
                                                      </div>  
                                                      <div class="control-group">
                                                        {!! Form::label('kelurahan', 'Kelurahan', array('class' => 'control-label')) !!}
                                                        <div class="controls">
                                                          <span class="input-xlarge uneditable-input " >{{$values->kelurahan}}</span>
                                                          </div>
                                                      </div>  
                                                      <div class="control-group">
                                                        {!! Form::label('kecamatan', 'Kecamatan', array('class' => 'control-label')) !!}
                                                        <div class="controls">
                                                          <span class="input-xlarge uneditable-input " >{{$values->kecamatan}}</span>
                                                          </div>
                                                      </div>  
                                                      <div class="control-group">
                                                        {!! Form::label('kota', 'Kota', array('class' => 'control-label')) !!}
                                                        <div class="controls">
                                                          <span class="input-xlarge uneditable-input " >{{$values->kota}}</span>
                                                          </div>
                                                      </div>  

                                                      <div class="control-group">
                                                        {!! Form::label('kodepos', 'Kode Pos', array('class' => 'control-label')) !!}
                                                        <div class="controls">
                                                          <span class="input-xlarge uneditable-input">{{$values->kdpos}}</span>
                                                          </div>
                                                      </div>

                                                      <div class="control-group">
                                                        {!! Form::label('tptlahir', 'Tempat Lahir', array('class' => 'control-label')) !!}
                                                        <div class="controls">
                                                          <span class="input-xlarge uneditable-input">{{$values->tptlahir}}</span>
                                                          </div>
                                                      </div>

                                                      <div class="control-group">
                                                        {!! Form::label('tglahir', 'Tanggal Lahir', array('class' => 'control-label')) !!}
                                                        <div class="controls">
                                                          <span class="input-xlarge uneditable-input">{{date("d-m-Y", strtotime($values->tglahir))}}</span>
                                                          </div>
                                                      </div>

                                                      <div class="control-group">
                                                        {!! Form::label('umur', 'Umur', array('class' => 'control-label')) !!}
                                                        <div class="controls">
                                                          <span class="input-xlarge uneditable-input">{{$values->umur}}</span>
                                                          </div>
                                                      </div>
                                                      
                                                      <div class="control-group">
                                                        {!! Form::label('namaibu', 'Nama Ibu', array('class' => 'control-label')) !!}
                                                        <div class="controls">
                                                          <span class="input-xlarge uneditable-input">{{$values->namaibu}}</span>
                                                          </div>
                                                      </div>

                                                      <div class="control-group">
                                                        {!! Form::label('telp', 'Telepon', array('class' => 'control-label')) !!}
                                                        <div class="controls">
                                                          <span class="input-xlarge uneditable-input">{{$values->telp}}</span>
                                                          </div>
                                                      </div>

                                                      <div class="control-group">
                                                        {!! Form::label('noktp', 'No KTP', array('class' => 'control-label')) !!}
                                                        <div class="controls">
                                                          <span class="input-xlarge uneditable-input">{{$values->noktp}}</span>
                                                          </div>
                                                      </div>

                                                      <div class="control-group">
                                                        {!! Form::label('npwp', 'No NPWP', array('class' => 'control-label')) !!}
                                                        <div class="controls">
                                                          <span class="input-xlarge uneditable-input">{{$values->npwp}}</span>
                                                          </div>
                                                      </div>

                                                      <div class="control-group">
                                                        {!! Form::label('pekerjaan', 'Pekerjaan', array('class' => 'control-label')) !!}
                                                        <div class="controls">
                                                          <span class="input-xlarge uneditable-input">{{$values->pekerjaan}}</span>
                                                          </div>
                                                      </div>
                                                  </div> <!-- end tab1-->
                                            </form>  
                                    

                                    <div id="pembiayaan1" class="tab-pane fade in active">
                                        <h3>Informasi Pembiayaan Nasabah</h3>
                                        <form class="form-horizontal">
                                            <div class="control-group">                                
                                                <label class="control-label">Inisial AO : </label>
                                                    <div class="controls">
                                                        
                                                        <input type="text" readonly value="{{$values -> namaao}}">
                                                    </div>
                                            </div>
                                            <div class="control-group">                                
                                                <label class="control-label">No Register : </label>
                                                    <div class="controls">
                                                        
                                                        <input type="text" readonly value="{{$values-> noregister}}">
                                                    </div>
                                            </div>
                                            <div class="control-group">                                
                                                <label class="control-label">Nilai Pembiayaan : </label>
                                                    <div class="controls">
                                                        
                                                        <input type="text" readonly value="{{$datas->rupiah($values -> pengajuanbiaya)}}">
                                                    </div>
                                            </div>
                                            <div class="control-group">                                
                                                <label class="control-label">Tujuan Pembiayaan : </label>
                                                    <div class="controls">
                                                        
                                                        <input type="text" readonly value="{{$values -> tujuanbiaya}}">
                                                    </div>
                                            </div>
                                            <div class="control-group">                                
                                                <label class="control-label">Jenis Penggunaan : </label>
                                                    <div class="controls">
                                                        
                                                        <input type="text" readonly value="{{$values -> jnspenggunaan}}">
                                                    </div>
                                            </div>
                                            <div class="control-group">                                
                                                <label class="control-label">Jangka Waktu : </label>
                                                    <div class="controls">
                                                        
                                                        <input type="text" readonly value="{{$values -> jangkawaktu}}">
                                                    </div>
                                            </div>
                                            <div class="control-group">                                
                                                <label class="control-label">Jenis Pembiayaan : </label>
                                                    <div class="controls">
                                                        
                                                        <input type="text" readonly value="{{$values -> jnspmbiayaan}}">
                                                    </div>
                                            </div>
                                            <div class="control-group">                                
                                                <label class="control-label">Bagi Hasil Untuk Bank : </label>
                                                    <div class="controls">
                                                        
                                                        <input type="text" readonly value="{{$values -> bagihasilbank}}">
                                                    </div>
                                            </div>
                                            <div class="control-group">                                
                                                <label class="control-label">Bagi Hasil Untuk Nasabah : </label>
                                                    <div class="controls">
                                                        
                                                        <input type="text" readonly value="{{$values -> bagihasilnasabah}}">
                                                    </div>
                                            </div>
                                            <div class="control-group">                                
                                                <label class="control-label">Tanggal Permohonan : </label>
                                                    <div class="controls">
                                                        
                                                        <input type="text" readonly value="{{date("d-m-Y", strtotime($values->tglmohon))}}">
                                                    </div>
                                            </div>

                                            <div class="control-group">                                
                                                <label class="control-label">Margin Bank : </label>
                                                    <div class="controls">
                                                        
                                                        <input type="text" readonly value="{{$datas->rupiah($values -> marginbank)}}">
                                                    </div>
                                            </div>
                                            <div class="control-group">                                
                                                <label class="control-label">Total Kewajiban : </label>
                                                    <div class="controls">
                                                        
                                                        <input type="text" readonly value="{{$datas->rupiah($values -> totalkewajiban)}}">
                                                    </div>
                                            </div>
                                            
                                            <div class="control-group">                                
                                                <label class="control-label">Tanggal Jangka Waktu Akhir : </label>
                                                    <div class="controls">
                                                        <input type="text" readonly value="{{date("d-m-Y", strtotime($values -> tglakhir))}}">
                                                        
                                                    </div>
                                            </div>
                                            <div class="control-group">                                
                                                <label class="control-label">Angsuran Pokok /bulan : </label>
                                                    <div class="controls">
                                                        
                                                        <input type="text" readonly value="{{$datas->rupiah($values -> angsuranpokok)}}">
                                                    </div>
                                            </div>
                                            <div class="control-group">                                
                                                <label class="control-label">Angsuran Margin /bulan : </label>
                                                    <div class="controls">
                                                        
                                                        <input type="text" readonly value="{{$datas->rupiah($values -> angsuranmargin)}}">
                                                    </div>
                                            </div>
                                            <div class="control-group">                                
                                                <label class="control-label">Angsuran Pokok Jatuh Tempo : </label>
                                                    <div class="controls">
                                                        
                                                        <input type="text" readonly value="{{$datas->rupiah($values -> angsuranpokokakhir)}}">
                                                    </div>
                                            </div>
                                            <div class="control-group">                                
                                                <label class="control-label">Angsuran Margin Jatuh Tempo : </label>
                                                    <div class="controls">
                                                        
                                                        <input type="text" readonly value="{{$datas->rupiah($values -> angsuranmarginakhir)}}">
                                                    </div>
                                            </div>
                                            <div class="control-group">                                
                                                <label class="control-label">Biaya Penagihan : </label>
                                                    <div class="controls">
                                                        
                                                        <input type="text" readonly value="{{$datas->rupiah($values -> biayatagih)}}">
                                                    </div>
                                            </div>
                                            <div class="control-group">                                
                                                <label class="control-label">Biaya Administrasi : </label>
                                                    <div class="controls">
                                                        
                                                        <input type="text" readonly value="{{$datas->rupiah($values -> biayaadmin)}}">
                                                    </div>
                                            </div>
                                            <div class="control-group">                                
                                                <label class="control-label">Barang Jaminan : </label>
                                                    <div class="controls">
                                                        
                                                        <textarea class="input-xlarge" style="width: 810px; height: 200px" readonly >{{$values -> brgjaminan}}</textarea>
                                                    </div>
                                            </div>

                                            <div class="control-group">                                
                                                <label class="control-label">Kepemilikan Jaminan : </label>
                                                    <div class="controls">
                                                      @if($values -> kepemilikanjaminan === 'Pribadi')
                                                        <input type="radio" name="kepemilikanjaminan" disabled checked value="{{$values -> kepemilikanjaminan}}"> Pribadi &nbsp;
                                                        <input type="radio" name="kepemilikanjaminan" disabled  value="{{$values -> kepemilikanjaminan}}"> Orang Lain
                                                      @else
                                                        <input type="radio" name="kepemilikanjaminan" disabled value="{{$values -> kepemilikanjaminan}}"> Pribadi &nbsp;
                                                        <input type="radio" name="kepemilikanjaminan" disabled checked value="{{$values -> kepemilikanjaminan}}"> Orang Lain
                                                      @endif
                                                    </div>
                                            </div>

                                            @if ($values -> kepemilikanjaminan != 'Pribadi')
                                            <div class="control-group">                                
                                                <label class="control-label">Identitas kepemilikan : </label>
                                                    <div class="controls">

                                                      <div class="control-group">
                                                        <label class="control-label">Nama : </label>
                                                          <div class="controls">
                                                            <input type="text" readonly value="{{$values -> jaminannama}}">
                                                          </div>
                                                      </div>

                                                      <div class="control-group">
                                                        <label class="control-label">Umur : </label>
                                                          <div class="controls">
                                                            <input type="text" readonly value="{{$values -> jaminanumur}}">
                                                          </div>
                                                      </div>

                                                      <div class="control-group">
                                                        <label class="control-label">Pekerjaan : </label>
                                                          <div class="controls">
                                                            <input type="text" readonly value="{{$values -> jaminanpekerjaan}}">
                                                          </div>
                                                      </div>

                                                      <div class="control-group">
                                                        <label class="control-label">Alamat : </label>
                                                          <div class="controls">
                                                            <input type="text" readonly value="{{$values -> jaminanalamat}}">
                                                          </div>
                                                      </div>

                                                      <div class="control-group">
                                                        <label class="control-label">No KTP : </label>
                                                          <div class="controls">
                                                            <input type="text" readonly value="{{$values -> jaminanktp}}">
                                                          </div>
                                                      </div>

                                                    </div>

                                            </div>
                                            @endif

                                            <div class="control-group">                                
                                                <label class="control-label">Pemilik Jaminan : </label>
                                                    <div class="controls">
                                                        
                                                        <input type="text" readonly value="{{$values -> pemilikjaminan}}">
                                                    </div>
                                            </div>
                                            <div class="control-group">                                
                                                <label class="control-label">Agunan : </label>
                                                    <div class="controls">
                                                        
                                                        <input type="text" readonly value="{{$values -> agunan}}">
                                                    </div>
                                            </div>
                                            <div class="control-group">                                
                                                <label class="control-label">Nilai Agunan : </label>
                                                    <div class="controls">
                                                        
                                                        <input type="text" readonly value="{{$datas->rupiah($values -> nilaiagunan)}}">
                                                    </div>
                                            </div>
                                            <div class="control-group">                                
                                                <label class="control-label">NJOP : </label>
                                                    <div class="controls">
                                                        
                                                        <input type="text" readonly value="{{$datas->rupiah($values -> njop)}}">
                                                    </div>
                                            </div>
                                            <div class="control-group">                                
                                                <label class="control-label">Ditaksasi Oleh : </label>
                                                    <div class="controls">
                                                        
                                                        <input type="text" readonly value="{{$values -> ditaksasioleh}}">
                                                    </div>
                                            </div>
                                            <div class="control-group">                                
                                                <label class="control-label">Harga Perolehan : </label>
                                                    <div class="controls">
                                                        
                                                        <input type="text" readonly value="{{$datas->rupiah($values -> hrgperolehan)}}">
                                                    </div>
                                            </div>
                                            
                                            
                                        </form>
                                    </div>

                                    <div id="pembiayaan2" class="tab-pane fade">
                                        <h3>Informasi Pembiayaan Nasabah</h3>
                                        <form class="form-horizontal">
                                            <div class="control-group">                                
                                                <label class="control-label">sifat A : </label>
                                                    <div class="controls">
                                                        
                                                        <input type="text" readonly value="{{$values -> sifata}}">
                                                    </div>
                                            </div>
                                            <div class="control-group">                                
                                                <label class="control-label">Golongan : </label>
                                                    <div class="controls">
                                                        
                                                        <input type="text" readonly value="{{$values -> golongan}}">
                                                    </div>
                                            </div>
                                            <div class="control-group">                                
                                                <label class="control-label">Sektor Ekonomi : </label>
                                                    <div class="controls">
                                                        
                                                        <input type="text" readonly value="{{$values -> sektor}}">
                                                    </div>
                                            </div>
                                            <div class="control-group">                                
                                                <label class="control-label">Jenis Pengikat : </label>
                                                    <div class="controls">
                                                        
                                                        <input type="text" readonly value="{{$values -> ikat}}">
                                                    </div>
                                            </div>
                                            <div class="control-group">                                
                                                <label class="control-label">Wilayah : </label>
                                                    <div class="controls">
                                                        
                                                        <input type="text" readonly value="{{$values -> wilayah}}">
                                                    </div>
                                            </div>
                                            <div class="control-group">                                
                                                <label class="control-label">Metode Bagi Hasil : </label>
                                                    <div class="controls">
                                                        
                                                        <input type="text" readonly value="{{$values -> metodebghasil}}">
                                                    </div>
                                            </div>
                                            <div class="control-group">                                
                                                <label class="control-label">Tujuan Kepemilikan : </label>
                                                    <div class="controls">
                                                        
                                                        <input type="text" readonly value="{{$values -> tujuankepemilikan}}">
                                                    </div>
                                            </div>
                                            <div class="control-group">                                
                                                <label class="control-label">Lokasi Usaha : </label>
                                                    <div class="controls">
                                                        
                                                        <input type="text" readonly value="{{$values -> lokasiusaha}}">
                                                    </div>
                                            </div>
                                            <div class="control-group">                                
                                                <label class="control-label">Nama Pembiayaan : </label>
                                                    <div class="controls">
                                                        
                                                        <input type="text" readonly value="{{$values -> namapembiayaan}}">
                                                    </div>
                                            </div>
                                            <div class="control-group">                                
                                                <label class="control-label">Golongan Piutang : </label>
                                                    <div class="controls">
                                                        
                                                        <input type="text" readonly value="{{$values -> golpiutang}}">
                                                    </div>
                                            </div>
                                            <div class="control-group">                                
                                                <label class="control-label">Tanggal Realisasi : </label>
                                                    <div class="controls">
                                                        
                                                        <input type="text" readonly value="{{date("d-m-Y", strtotime($values -> tglrealisasi))}}">
                                                    </div>
                                            </div>
                                            <div class="control-group">                                
                                                <label class="control-label">Nomor PP : </label>
                                                    <div class="controls">
                                                        
                                                        <input type="text" readonly value="{{$values -> nopp}}">
                                                    </div>
                                            </div>
                                            <div class="control-group">                                
                                                <label class="control-label">Nomor SPH : </label>
                                                    <div class="controls">
                                                        
                                                        <input type="text" readonly value="{{$values -> nosph}}">
                                                    </div>
                                            </div>
                                            <div class="control-group">                                
                                                <label class="control-label">Nomor TTUN : </label>
                                                    <div class="controls">
                                                        
                                                        <input type="text" readonly value="{{$values -> nottun}}">
                                                    </div>
                                            </div>

                                            <div class="control-group">                                
                                                <label class="control-label">Memo Komite : </label>
                                                    <div class="controls">
                                                        
                                                        <textarea class="input-xlarge" style="width: 510px; height: 200px" readonly {{$values -> memokomite}}></textarea>
                                                    </div>
                                            </div>
                                        </form>
                                    </div> {{-- end tabs --}}
                                    <a href="{{ URL::previous() }}" class="btn btn-primary">Back</a>

                                </div> {{-- end span12 --}}

                                
                            </div> {{-- end block collapse in --}}
                        </div> {{-- end block --}}
                    </div> {{-- end row fluid --}}
@stop