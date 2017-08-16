<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="text/html; charset=utf-8" >
	<title>Surat Persetujuan Pembiayaan</title>
	<link rel="stylesheet" href="">
	<style type="text/css">
		.page-break {
            page-break-after: always;
        }
		.tab {
			padding-left:15em
		}
		body {
		font: calibri;
		line-height: 1.5;
		}
		pre {
		font: calibri;
		}
		div a{
			text-align:right;
		}
	</style>
</head>
<body>
<br><br><br>
<pre>
	Bekasi, {{$tglrealisasi->formatLocalized('%d %B %Y')}}
</pre>
<pre>
	Nomor	    : {{$datas-> nopp}}
	Lampiran : 1 (satu)
	Perihal	    : Persetujuan Pembiayaan
</pre>
<pre>
	Kepada Yth. <br>
	<b> {{$datas-> nama}}</b>
	{{$datas-> alamat}}
</pre>
<pre>
	Menunjuk surat Permohonan Bapak/Ibu tanggal {{$datas-> tglmohon}}     maka kami atas nama Manajemen 
	PT. BPR Syari'ah Amanah Insani menyampaikan berita dapat menyetujui pembiayaan 
	yg diajukan, dengan ketentuan sebagai berikut : 
</pre>
<ol>
	<li>Jumlah Maksimum Pokok 			 <div style="position:absolute; left: 328px; width: 200px;">: <a >{{$datas-> pengajuanbiaya}}</a></div>
	</li>
	<li>Margin Bank						 <div style="position:absolute; left: 328px;">: {{$datas-> marginbank}}</div></li>
	<li>Biaya Administrasi				 <div style="position:absolute; left: 328px;">: {{$datas-> biayaadmin}}</div></li>
	<li>Keperluan						 <div style="position:absolute; left: 328px;">: {{$datas-> tujuanbiaya}}</div></li>
	<li>Jenis Pembiayaan				 <div style="position:absolute; left: 328px;">: {{$datas-> jnspmbiayaan}}</div></li>
	<li>Jangka Waktu					 <div style="position:absolute; left: 328px;">: {{$datas-> jangkawaktu}} bulan</div> 
		<div> sejak ditandatangani ({{$datas-> tglmohon}}) s/d ({{$datas-> tglakhir}})</div></li>
	<li>Angsuran Margin per Bulan		 <div style="position:absolute; left: 328px;">: {{$datas-> angsuranmargin}}</div></li>
	<li>Angsuran Pokok per Bulan		 <div style="position:absolute; left: 328px;">: {{$datas-> angsuranpokok}}</div></li>
	<li>Angsuran Margin Saat Jatuh Tempo <div style="position:absolute; left: 328px;">: {{$datas-> angsuranmarginakhir}}</div></li>
	<li>Angsuran Pokok Saat Jatuh Tempo	 <div style="position:absolute; left: 328px;">: {{$datas-> angsuranpokokakhir}}</div></li>
	<li>Jaminan							 <div style="position:absolute; left: 328px;">: </div><div>{{$datas-> brgjaminan}}</div></li>
	<li>Lain-lain
		<ol type="a">
			<li>Pembiayaan ini dapat direalisasikan setelah surat asli jaminan <br>butir 9 diserahkan dan dilengkapi dengan surat kuasa menjual <br>dan jaminan pribadi. </li>
			<li>Kewajiban angsuran harus dibayar setiap tanggal {{$tglrealisasi->formatLocalized('%d')}} dalam bulan <br>berjalan dan bilamana terjadi keterlambatan maka pihak pemberi <br>pembiayaan membebankan biaya penagihan sebesar {{$datas-> biayatagih}} bilamana harus dikunjungi. </li>
		</ol>
	</li>
	<li>Komite
		<ol type="a">
			<li>APHT</li>
			<li>Asuransi</li>
		</ol>
	</li>
</ol>

<div class="page-break"></div>

<br><br>
<pre>
	Demikian agar dimaklumi dan sebagai tanda persetujuan harap copy surat ini ditandatangani 
	pada saat realisasi
</pre><br>
<pre>
	Hormat kami,
	PT. BPR SYARI'AH AMANAH INSANI                                    Setuju dengan keputusan di atas
</pre>
<br><br>
<pre>
	H. M. Taufik Darmansyah, SE, CPA                                                           {{$datas-> nama}}
	Direktur Utama	
</pre>
</body>
</html>