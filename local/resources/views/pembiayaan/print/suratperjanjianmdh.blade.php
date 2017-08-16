<!DOCTYPE html>
<html>
<head>
    <title>Surat Perjanjian Mudhorobah</title>
    {{-- <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" media="screen">
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" media="screen">
        <link href="{{asset('css/bootstrap-responsive.min.css')}}" rel="stylesheet" media="screen"> --}}
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style type="text/css">
    
        .page-break {
            page-break-after: always;
        }    	
        
    </style>
</head>
<body>{{$tglrealisasi->formatLocalized('%A %d %B %Y')}} <br> {{$datas-> tglrealisasi}}
<br><br><br><br><br><br><br>    
<pre>
                                                {{$datas-> noregister}}</pre>
<br><br><br><br><br><br><br><br>
<pre>
                        {{$tglrealisasi->formatLocalized('  %A            %d          %B ')}}
        {{$tglrealisasi->formatLocalized('%Y')}}  {{$tglrealisasi->formatLocalized('%d/%B/%Y')}}</pre> <br><br>

<pre>
                    H. M. Taufik Darmansyah, SE, CPA
                    Direktur Utama
                    Jl. Raya Jatiwaringin No.109, Bekasi</pre> <br><br>

<pre>
                    {{$datas-> nama}}
                    {{$datas-> umur}}  ({{$datas-> tglahir}})
                    {{$datas-> pekerjaan}}
                    {{$datas-> alamat}} {{$datas-> kelurahan}} {{$datas-> kecamatan}} {{$datas-> kota}}
                    {{$datas-> noktp}} 
            </pre> <br> <br><br>

<pre>
                                        {{$datas-> pengajuanbiaya}} </pre> <br><br><br><br><br><br><br><br>

<pre>
                        {{$datas-> pengajuanbiaya}}</pre> <br>

<pre>
                {{$datas-> tujuanbiaya}}
                                                {{$datas-> jangkawaktu}}
                                                {{$tglrealisasi->formatLocalized('  %d           %B')}} 
                                                
                {{$tglrealisasi->formatLocalized('%Y')}}               {{$tglakhir->formatLocalized('  %d              %B         %Y ')}}</pre> 



<div class="page-break"></div>            
<br><br><br><br>
<pre>
                                             {{$datas-> bagihasilbank}}       {{$datas-> bagihasilnasabah}}</pre> <br>
<pre>
                {{$tglakhir->formatLocalized(' j         F         Y ')}}
</pre> <br><br><br><br><br><br><br><br><br><br><br><br>
<pre>
          {{$datas-> biayaadmin}}</pre> <br><br><br><br><br><br><br>
<pre>
         {{$datas-> brgjaminan}}</pre> <br>



<div class="page-break"></div>
<br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br>
<pre>
       H. M. Taufik Darmansyah, SE, CPA                   {{$datas-> nama}}</pre> <br>
<pre>
                Melani Madhasari
                Direktur Operasional
                Jl. Raya Jatiwaringin No.109 Pondokgede, Bekasi</pre> 
<pre>
                Endang Larasati
                Kadiv Legal
                Jl. Raya Jatiwaringin No.109 Pondokgede, Bekasi</pre> 
<pre>
                {{Auth::user()->name}}
                Account Officer
                Jl. Raya Jatiwaringin No.109 Pondokgede, Bekasi</pre> 


</body>
</html>