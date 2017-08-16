<div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="#">Amanah Insani</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i> {{ Auth::user()->name }} <i class="caret"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="#">Profile</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a tabindex="-1" href="{{url('auth/logout')}}" >Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul> {{-- end pull right --}}
                        
                        <ul class="nav">
                            <li class="active">
                                <a href="{{ url('/home') }}">Home</a>
                            </li>
@if(Gate::check('be-admin') ||  Gate::check('be-teller'))
                            {{-- <li>
                                <a href="{{ url('/tabungan') }}" class="caret-before">Tabungan </a> 
                            </li> // menggunakan caret after dan before pada class li --}}
                            <li class="dropdown">
                                <a href="{{ url('/tabungan') }}" role="button" class="dropdown-toggle " data-toggle="dropdown">Tabungan <i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu multi-level">
                        @can('be-admin')               
                                    <li tabindex="-1" class="dropdown-submenu">                        
                                        <a href="{{ url('/tabungan/masterdata') }}" role="button" class="dropdown-toggle" data-toggle="dropdown">Master Data</a>
                                        <ul class="dropdown-menu">
                            
                                            <li><a href="#">Kode Cabang</a></li>
                                            <li><a href="#">Kode Tabungan</a></li>
                                            <li><a href="#">Kode Transaksi</a></li>
                                            <li><a href="#">Kode Golongan</a></li>                      
                                            <li><a href="{{url('pembiayaan/indexnasabah')}}">Kode Nasabah</a></li>
                                            <li><a href="#">Kode Rekening</a></li>
                                            <li><a href="#">Kode TPK</a></li>                        
                                        </ul>                        
                                    </li>
                        @endcan
                        @if(Gate::check('be-admin') || Gate::check('be-teller'))
                                    <li class="dropdown-submenu">
                                        <a tabindex="-1" href="{{ url('/tabungan/transaksi') }}" role="button" class="dropdown-toggle" data-toggle="dropdown">Transaksi</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Transaksi Tabungan</a></li>
                                            <li><a href="#">Input Transaksi PTK</a></li>
                                            <li><a href="#">Input Angsuran Pembiayaan</a></li>
                                            <li><a href="#">Update Data</a></li>
                                            <li><a href="#">Input Saldo Awal Kas Teller</a></li>
                                            <li><a href="#">Perbaikan Saldo Dan Otorisasi</a></li>
                                            <li><a href="#">Terima Dari Kas Besar</a></li>
                                            <li><a href="#">Setor Ke Kas Besar</a></li>
                                            <li tabindex="-2" class="dropdown-submenu">                        
                                                <a href="" role="button" class="dropdown-toggle" data-toggle="dropdown">Cetak <i class="icon-arrow-right"></i></a>
                                                <ul class="dropdown-menu">                            
                                                    <li><a href="#">Cetak Ulang Validasi</a></li>
                                                    <li><a href="#">Cetak Buku Baru</a></li>
                                                    <li><a href="#">Cetak Kartu Pembiayaan</a></li>
                                                    <li><a href="#">Cetak Judul Buku Baru</a></li>
                                                    <li><a href="#">Cetak Kartu Tabungan</a></li>
                                                    <li><a href="#">Cetak Buku Lama</a></li>
                                                </ul>
                                            </li>
                                            
                                        </ul>
                                    </li>
                        @endif
                                    <li class="dropdown-submenu">
                                        <a tabindex="-1"  href="{{ url('/tabungan/laporan') }}" role="button" class="dropdown-toggle" data-toggle="dropdown">Laporan</a>
                                        <ul class="dropdown-menu">                                
                                            <li><a href="#">Cetak Transaksi Harian</a></li>
                                            <li><a href="#">Rekapitulasi Tabungan PTK</a></li>
                                            <li><a href="#">Laporan Kas Harian</a></li>                               
                                            <li><a href="#">Cetak Buku Baru</a></li>                            
                                        </ul>
                                    </li>
                                </ul>
                            </li> {{-- end tabungan  --}}
@endif                            
@if(Gate::check('be-admin') || Gate::check('be-adm') || Gate::check('be-ao') || Gate::check('be-report') || Gate::check('be-legal'))
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Pembiayaan <i class="caret"></i>
                                </a>
                                <ul class="dropdown-menu multi-level">    
                        @if(Gate::check('be-admin') || Gate::check('be-adm') || Gate::check('be-ao') || Gate::check('be-legal'))
                                    <li class="dropdown-submenu">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Master Data</a>
                                        <ul class="dropdown-menu">
                                @if(Gate::check('be-admin') || Gate::check('be-adm'))
                                            <li><a href="{{url('pembiayaan/indexao')}}">Input Kode Account Officer</a></li>
                                            <li><a href="{{url('pembiayaan/indexsifat')}}">Input Kode Sifat</a></li>
                                            <li><a href="{{url('pembiayaan/indexjpeggn')}}">Input Kode Jenis Penggunaan</a></li>
                                            <li><a href="{{url('pembiayaan/indexsektor')}}">Input Kode Sektor</a></li>
                                            <li><a href="{{url('pembiayaan/indexgol')}}">Input Kode Golongan</a></li>
                                @endif
                                @if(Gate::check('be-admin') || Gate::check('be-adm') || Gate::check('be-ao'))
                                            <li><a href="{{url('pembiayaan/indexnasabah')}}">Input Nasabah Pembiayaan</a></li>
                                @endif
                                        @if(Gate::check('be-admin') || Gate::check('be-adm') || Gate::check('be-ao') || Gate::check('be-legal'))
                                            <li><a href="{{ url('pembiayaan/indexpembiayaan') }}">Edit - Print Pembiayaan</a></li>
                                        @endif
                                        </ul>
                                    </li>
                        @endif
                                    {{-- <li> --}}
                        @if(Gate::check('be-admin') || Gate::check('be-adm') || Gate::check('be-ao') || Gate::check('be-legal'))                                
                                    <li class="dropdown-submenu">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Transaksi</a>
                                        <ul class="dropdown-menu">
                            @if(Gate::check('be-admin') || Gate::check('be-ao') || Gate::check('be-legal'))
                                            <li><a href="#">Input Data Calon Nasabah</a></li>
                                            <li><a href="#">Realisasi Perjanjian</a></li>
                            @endif
                            @if(Gate::check('be-admin') || Gate::check('be-adm'))
                                            <li><a href="#">Input Realisasi</a></li>
                                            <li><a href="#">Input Angsuran</a></li>
                                            <li><a href="#">Cetak Kartu Tabungan</a></li>
                                            <li><a href="#">Kartu Pembiayaan</a></li>
                                            <li><a href="#">Rekapitulasi Harian</a></li>
                                            <li><a href="#">Restrukturisasi</a></li>
                            @endif
                                        </ul>
                                    </li>
                        @endif
                        @if(Gate::check('be-admin') || Gate::check('be-adm') || Gate::check('be-ao') || Gate::check('be-report'))
                                    <li class="dropdown-submenu">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Laporan Pembiayaan</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Amortisasi Pembiayaan</a></li>
                                            <li><a href="#">Kartu Pembiayaan</a></li>
                                            <li><a href="#">Rekapitulasi Pembiayaan</a></li>
                                            <li><a href="#">Rekapitulasi Harian</a></li>
                                            <li><a href="#">Kolektibilitas</a></li>
                                            <li><a href="#">Monitoring</a></li>
                                            <li><a href="#">Daftar Angsuran</a></li>
                                            <li><a href="#">Daftar Realisasi</a></li>
                                            <li><a href="#">Daftar Realisasi Mikro</a></li>
                            @if(Gate::check('be-admin') || Gate::check('be-adm'))
                                            <li><a href="#">Daftar Bonus Freelance Mikro</a></li>
                            @endif
                                        </ul>
                                    </li>
                        @endif
                                </ul>
                            </li>
@endif
                            
@if(Gate::check('be-admin') || Gate::check('be-cs') || Gate::check('be-finance') || Gate::check('be-report') || Gate::check('be-supervisor') || Gate::check('be-legal'))
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Customer Service <i class="caret"></i></a>
                                <ul class="dropdown-menu">   
                        @if(Gate::check('be-admin') || Gate::check('be-cs'))
                                    <li class="dropdown-submenu">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Data entry - edit</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="{{url('pembiayaan/indexnasabah')}}">Input Kode Nasabah</a></li>
                                            <li><a href="#">Input Kode Rekening</a></li>
                                            <li><a href="#">Input Kode PTK</a></li>
                                            <li><a href="#">Cetak Bilyet Deposito</a></li>
                                            <li><a href="#">Cetak Judul Buku Baru</a></li>
                                        </ul>
                                    </li>
                        @endif
                        @if(Gate::check('be-admin') || Gate::check('be-cs') || Gate::check('be-teller') || Gate::check('be-finance') || Gate::check('be-supervisor') || Gate::check('be-legal')|| Gate::check('be-report'))
                                    <li class="dropdown-submenu">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Laporan</a>
                                        <ul class="dropdown-menu">
                                @if(Gate::check('be-admin') || Gate::check('be-cs'))
                                            <li><a href="">Pantau Deposito</a></li>
                                @endif
                                @if(Gate::check('be-admin') || Gate::check('be-cs'))
                                            <li><a href="">Rekap PTK</a></li>
                                @endif
                                @if(Gate::check('be-admin')|| Gate::check('be-supervisor'))
                                            <li><a href="">Nota Kredit</a></li>
                                            <li><a href="">Nota Kredit (Print Ulang)</a></li>
                                            <li><a href="">Distribusi (Bulanan)</a></li>
                                            <li><a href="">Distribusi (Harian)</a></li>
                                @endif
                                @if(Gate::check('be-admin') || Gate::check('be-cs') || Gate::check('be-adm') || Gate::check('be-finance') || Gate::check('be-supervisor'))
                                            <li><a href="">Cetak Kartu Tabungan</a></li>
                                @endif
                                @if(Gate::check('be-admin') || Gate::check('be-cs') || Gate::check('be-teller') || Gate::check('be-adm') || Gate::check('be-finance') || Gate::check('be-supervisor') || Gate::check('be-report'))
                                            <li><a href="">Cetak Kartu Pembiayaan</a></li>
                                @endif
                                @if(Gate::check('be-admin') || Gate::check('be-cs'))
                                            <li><a href="">Export To Excel Rek.365</a></li>
                                @endif
                                        </ul>
                                    </li>
                        @endif                        
                                </ul>
                            </li>
@endif
@if(Gate::check('be-admin') || Gate::check('be-kas'))
                            <li tabindex="-1" class="dropdown">
                                    <a href="{{ url('/tabungan/masterdata') }}" role="button" class="dropdown-toggle" data-toggle="dropdown">Kas Kecil <i class="caret"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="">Kas Masuk</a></li>
                                        <li><a href="">Kas Keluar</a></li>
                                        <li><a href="">Laporan Kas kecil</a></li>
                                        <li><a href="">Laporan Kas Bon</a></li>
                                        <li><a href="">Koreksi Kas Kecil</a></li>
                                        <li><a href="">Koreksi Kas Bon</a></li>
                                        <li><a href="">Proses Jurnal</a></li>
                                        <li><a href="">Terima Dari Kas Teller</a></li>
                                        <li><a href="">Setor Ke Kas Teller</a></li>
                                    </ul>
                            </li> 
@endif
@if(Gate::check('be-admin') || Gate::check('be-supervisor'))
                            <li tabindex="-1" class="dropdown">
                                    <a href="{{ url('/tabungan/masterdata') }}" role="button" class="dropdown-toggle" data-toggle="dropdown">Bagi Hasil <i class="caret"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Proses Rata-rata</a></li>
                                        <li><a href="#">Proses Alokasi</a></li>
                                        <li><a href="#">Proses Alokasi Bagi Hasil Deposito</a></li>
                                        <li><a href="#">Proses Alokasi Bagi Hasil Tabungan</a></li>
                                        <li><a href="#">Tabel Distribusi (Harian)</a></li>
                                        <li><a href="#">Perincian Alokasi Bagi Hasil</a></li>
                                        <li><a href="#">Input Bobot</a></li>
                                        <li><a href="#">Tabel Distribusi (Bulanan)</a></li>
                                        <li><a href="#">Nota Kredit</a></li>
                                        <li><a href="#">Nota Kredit (Print Ulang)</a></li>
                                    </ul>
                            </li> 
@endif

@can('be-admin')
<!--
                            <li class="">
                                <a href="#"  class="" >Finance / Sundries </a>
                            </li>
                            
                            <li class="dropdown">
                                <a href="#"  class="dropdown-toggle" data-toggle="dropdown" >LapBul-BI <i class="caret"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Cetak LapBul-BI</a></li>
                                        <li><a href="#">Cek Daftar Tabungan dan Deposito</a></li>
                                        <li><a href="#">Cetak Laporan Pajak</a></li>                                        
                                    </ul>
                            </li>                            
-->
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Users <i class="caret"></i>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="{{url('users/daftaruser')}}">Daftar User</a>
                                    </li>
                                                                 
                                    <li>
                                        <a tabindex="-1" href="#">Search</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="#">Permissions</a>
                                    </li>
                                </ul>
                            </li>
@endcan


                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">Settings <b class="caret"></b>

                                </a>
                                <ul class="dropdown-menu" id="menu1">
                                    <li>
                                        <a href="#">Tools <i class="icon-arrow-right"></i>

                                        </a>
                                        <ul class="dropdown-menu sub-menu">
                                            
                                            <li>
                                                <a href="#">Logs</a>
                                            </li>
                                            <li>
                                                <a href="#">Errors</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">SEO Settings</a>
                                    </li>
                                    <li>
                                        <a href="#">Other Link</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#">Other Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Other Link</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>