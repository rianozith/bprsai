<!DOCTYPE html>
<html>
<head>
    <title>Surat Perjanjian Murabahah</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style type="text/css">
		.page-break {
            page-break-after: always;
        }
		.tab {
			padding-left:15em;
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
        .top{
            margin-top: 26px;
        }
		body {
		font: calibri;
		line-height: 1.5;
		}
		pre {
		font: calibri;
		}
	</style>
        
</head>
<body>
<pre>
                                                                                                                  {{$datas-> noregister}}</pre>
<br><br><br><br><br><br><br><br><br>
<div style="position:relative; top:10px"><pre>
                  {{$tglrealisasi->formatLocalized('  %A                                %d                    %B             %Y')}}            {{$tglrealisasi->formatLocalized('%d/%b/%Y')}}</pre> </div><br>
<pre>
                        H. M. Taufik Darmansyah, SE, CPA
                        Direktur Utama
                        Jl. Raya Jatiwaringin No.109, Bekasi
</pre>

<pre>
                        {{$datas-> nama}}
                        {{$datas-> umur}}    Tahun ({{$datas-> tglahir}})
                        {{$datas-> pekerjaan}}
                        {{$datas-> alamat}} {{$datas-> kelurahan}} {{$datas-> kecamatan}} {{$datas-> kota}}
                        {{$datas-> noktp}} 
            </pre> <br><br>

<pre>
        {{$datas-> pengajuanbiaya}} 
        {{$datas-> pengajuanbiayaterbilang}} 
    </pre> <br><br><br><br class="spasi">

<div style="position:relative; top:10px"><pre>
              {{$datas-> pengajuanbiaya}}
              {{$datas-> pengajuanbiayaterbilang}}
</pre></div>

<pre style="position:relative; top:-10px">
            {{$datas-> tujuanbiaya}}</pre>
<pre class="spasi">
                                                    {{$datas-> jangkawaktu}} </pre><br>
<pre>
                                                                                                {{$datas-> pengajuanbiaya}}
      {{$datas-> pengajuanbiayaterbilang}}
                            {{$datas-> totalkewajiban}}
      {{$datas-> totalkewajibanterbilang}}
</pre>
<pre class="top">
                                                        {{$datas-> angsuranpokok}}                               Angs Pokok saat Jatuh Tempo    {{$datas-> angsuranpokokakhir}}
                                                        {{$datas-> angsuranmargin}}                              Angs Margin saat Jatuh Tempo    {{$datas-> angsuranmarginakhir}}
</pre> <br >
<pre>
                                                                                 {{$datas-> totalkewajiban}}
      {{$datas-> totalkewajibanterbilang}}
</pre>  
<div class="page-break"></div>
<br><br><br><br>
<pre style="margin-top:20">
                                                                                                                                     {{$datas-> biayatagih}}
      {{$datas-> biayatagihterbilang}}
</pre>
<br><br><br><br><br><br><br>
<pre style="margin-top:0">
                                                                                                                  {{$datas-> biayaadmin}}
      {{$datas-> biayaadminterbilang}}
</pre>
<br><br><br><br>
<pre>
		    {{$datas-> brgjaminan}}
</pre>

<div class="page-break"></div>
<br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br>
<pre>
       H. M. Taufik Darmansyah, SE, CPA                                                              {{$datas-> nama}}</pre> <br>
<pre>
                            Melani Madhasari
                            Direktur Operasional
                            Jl. Raya Jatiwaringin No.109 Pondokgede, Bekasi

                            Endang Larasati
                            Kadiv Legal
                            Jl. Raya Jatiwaringin No.109 Pondokgede, Bekasi

                            {{Auth::user()->name}}
                            Account Officer
                            Jl. Raya Jatiwaringin No.109 Pondokgede, Bekasi
</pre> 


</body>
</html>