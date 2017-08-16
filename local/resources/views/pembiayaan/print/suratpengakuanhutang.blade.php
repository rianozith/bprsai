<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="text/html; charset=utf-8" >
	<title>Surat Pengakuan hutang</title>
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
        br.spasi{
            line-height: 35%;
        }
    </style>
</head>
<body>
<br><br>
<pre>
                                                            {{$datas-> nosph}}</pre>
<br><br><br><br><br><br>
<pre>
                    {{$tglrealisasi->formatLocalized('%A                  %d    %B   %Y')}}</pre> <br><br><br><br>


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
<br> <br><br><br>

<pre>
            		{{$datas-> noregister}} </pre><br><br class="spasi">
<pre class="spasi">
          H. M. Taufik Darmansyah, SE, CPA </pre>
<pre class="spasi">
          {{$umurmtd}} </pre>
<pre class="spasi">
          Direktur Utama</pre> <br><br><br><br><br><br><br>

<pre>
		  {{$datas-> totalkewajiban}} 
      {{$datas-> totalkewajibanterbilang}} 
    </pre>
<pre class="small">
       				     {{$datas-> bagihasilbank}}               {{$datas-> bagihasilnasabah}}             {{$datas-> marginbank}}
      {{$datas-> marginbankterbilang}}
			</pre><br>

<pre class="big">
                        					     {{$datas-> tujuanbiaya}}
                								                    	   {{$datas-> nopp}}
</pre><br><br><br>
<pre class="small">
                                                    {{$tglakhir->formatLocalized('  %d %B %Y')}} </pre> 


<div class="page-break"></div>
<br><br><br><br>
<pre>
    {{$datas-> brgjaminan}}</pre>
<br><br><br><br><br><br><br><br><br><br><br><br>

<pre>
                                {{$tglrealisasi->formatLocalized('%d %B %Y')}}</pre>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<pre>
    {{$datas-> nama}}                           H. M. Taufik Darmansyah, SE, CPA</pre><br><br>
<pre>
          Melani Madhasari
          Direktur Operasional
          Jl Raya Jatiwaringin No.109 Pondokgede Bekasi</pre>
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