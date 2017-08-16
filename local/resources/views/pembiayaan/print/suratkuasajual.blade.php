<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="text/html; charset=utf-8" >
	<title>Surat Kuasa Menjual</title>
	<link rel="stylesheet" href="">
	<style type="text/css">
    
        .page-break {
            page-break-after: always;
        }
        .big{
            line-height: 75%;
        }
        .small{
            line-height: 20%;
        }    	
        .spasi{
            line-height: 50%;
        }
         
    </style>
</head>
<body>
<br><br><br><br><br><br><br><br>
<pre>
              {{$tglrealisasi->formatLocalized('%A                        %d    %B           %Y')}}</pre> <br><br>


<pre class="spasi">
          {{$datas-> nama}}</pre>
<pre class="spasi">
          {{$datas-> umur}} ({{$datas-> tglahir}})</pre>
<pre class="spasi">
          {{$datas-> pekerjaan}}</pre>
<pre class="spasi">
          {{$datas-> alamat}} {{$datas-> kelurahan}} {{$datas-> kecamatan}} {{$datas-> kota}}</pre>
<pre class="spasi">
          {{$datas-> noktp}} </pre>
<br><br><br><br><br><br>


<pre class="spasi">
          H. M. Taufik Darmansyah, SE, CPA </pre>
<pre class="spasi">
          {{$umurmtd}} (1956-06-25)</pre>
<pre class="spasi">
          Direktur Utama</pre> <br><br><br><br><br>

<pre>
		                                                {{$tglrealisasi->formatLocalized('%d %B %Y')}}
      {{$datas-> nosph}}</pre>                                                    

<br><br><br><br><br><br><br><br>
<pre>
    {{$datas-> brgjaminan}}</pre>



<div class="page-break"></div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br>
<pre>
  H. M. Taufik Darmansyah, SE, CPA                           {{$datas-> nama}}</pre><br><br><br><br class="big">
<pre class="spasi">
          Melani Madhasari</pre>
<pre class="spasi">
          Direktur Operasional</pre>
<pre class="spasi">
          Jl Raya Jatiwaringin No.109 Pondokgede Bekasi</pre><br>
<pre class="spasi">
          Endang Larasati</pre>
<pre class="spasi">
          Kadiv Legal</pre>
<pre class="spasi">
          Jl. Raya Jatiwaringin No.109 Pondokgede, Bekasi</pre><br>
<pre class="spasi">
          {{Auth::user()->name}}</pre>
<pre class="spasi">
          Account Officer</pre>
<pre class="spasi">
          Jl. Raya Jatiwaringin No.109 Pondokgede, Bekasi</pre>

</body>
</html>