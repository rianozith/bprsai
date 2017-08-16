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
	           Bekasi, {{$tglrealisasi->format('j/m/Y')}}
</pre>
<pre>
	           Nomor	    : {{$datas-> nopp}}
	           Lampiran : 1 (satu)
	           Perihal	    : Persetujuan Pembiayaan
</pre>
<pre>
	           Kepada Yth. <br>
	        <b>            {{$datas-> nama}}</b>
	           {{$datas-> alamat}} {{$datas-> kelurahan}} {{$datas-> kecamatan}} {{$datas-> kota}}
</pre>
<pre>
	           Menunjuk surat Permohonan Bapak/Ibu tanggal    {{$tglrealisasi->format('j/m/Y')}}   maka kami atas nama Manajemen 
	           PT. BPR Syari'ah Amanah Insani menyampaikan berita dapat menyetujui pembiayaan 
	           yg diajukan, dengan ketentuan sebagai berikut : 
</pre>
<table width="420" style="margin-left:33px" >
	<tr style="line-height:1">
		<td width="16">1. </td>
		<td width="232">Jumlah Maksimum Pokok</td>
		<td width="29">: Rp.</td>
		<td width="123" style="text-align:right">{{$model->rupiah($datas-> pengajuanbiaya)}}</td>
	</tr>
	<tr style="line-height:1">
		<td width="16">2. </td>
		<td width="232">Margin Bank</td>
		<td width="29">: Rp.</td>
		<td width="123" style="text-align:right">{{$model->rupiah($datas-> marginbank)}}</td>
	</tr>
	<tr style="line-height:1">
		<td width="16">3. </td>
		<td width="232">Biaya Administrasi</td>
		<td width="29">: Rp. </td>
		<td width="123" style="text-align:right">{{$model->rupiah($datas-> biayaadmin)}}</td>
	</tr>
	<tr style="line-height:1">
		<td width="16">4. </td>
		<td width="232">Keperluan</td>
		<td colspan="2">: {{$datas-> tujuanbiaya}}</td>
	</tr>
	<tr style="line-height:1">
		<td width="16">5. </td>
		<td width="232">Jenis Pembiayaan</td>
		<td colspan="2">: {{$datas-> jnspmbiayaan}}</td>
	</tr>
	<tr style="line-height:1">
		<td width="16">6. </td>
		<td width="232">Jangka Waktu</td>
		<td colspan="2">: {{$datas-> jangkawaktu}} bulan </td>
	</tr>
	<tr>
		<td width="16"></td>
		<td colspan="3">sejak ditandatangani ({{$tglrealisasi->format('j/m/Y')}}) s/d ({{$tglakhir->format('j/m/Y')}})</td>
	</tr>
	<tr style="line-height:1">
		<td width="16">7. </td>
		<td width="232">Angsuran Margin per Bulan </td>
		<td width="29">: Rp. </td>
		<td width="123" style="text-align:right">{{$model->rupiah($datas-> angsuranmargin)}}</td>
	</tr>
	<tr style="line-height:1">
		<td width="16">8. </td>
		<td width="232">Angsuran Pokok per Bulan </td>
		<td width="29">: Rp. </td>
		<td width="123" style="text-align:right">{{$model->rupiah($datas-> angsuranpokok)}}</td>
	</tr>
	<tr style="line-height:1">
		<td width="16"> </td>
		<td width="232">Angsuran Margin saat Jatuh Tempo </td>
		<td width="29">: Rp. </td>
		<td width="123" style="text-align:right">{{$model->rupiah($datas-> angsuranmarginakhir)}}</td>
	</tr>
	<tr style="line-height:1">
		<td width="16"> </td>
		<td width="232">Angsuran Pokok saat Jatuh Tempo</td>
		<td width="29">: Rp. </td>
		<td width="123" style="text-align:right">{{$model->rupiah($datas-> angsuranpokokakhir)}}</td>
	</tr>
	<tr>
		<td width="16">9. </td>
		<td width="232">Jaminan</td>
		<td width="29"></td>
		<td width="123" style="text-align:right"></td>
	</tr>
	<tr>
		<td width="16"></td>
		<td colspan="3">{{$datas-> brgjaminan}}</td>
	</tr>
	<tr height="0" style="line-height:1">
		<td width="16" >10. </td>
		<td colspan="3" >Lain-lain</td>
	</tr>
	<tr >
		<td width="16"></td>
		<td colspan="3">
		<li type="a" style="margin-left:20">Pembiayaan ini dapat direalisasikan setelah surat asli jaminan <br>butir 9 diserahkan dan dilengkapi dengan surat kuasa menjual <br>dan jaminan pribadi.</li>				
		<li type="a" style="margin-left:20">Kewajiban angsuran harus dibayar setiap tanggal {{$tglrealisasi->formatLocalized('%d')}} dalam bulan <br>berjalan dan bilamana terjadi keterlambatan maka pihak pemberi <br>pembiayaan membebankan biaya penagihan sebesar Rp.{{$model->rupiah($datas-> biayatagih)}} <br>bilamana harus dikunjungi.</li></td>
	</tr>
	<tr>
		<td width="16" height="30">11. </td>
		<td colspan="3">Komite</td>
	</tr>
	<tr>
		<td width="16"></td>
		<td colspan="3">
				{{$datas-> memokomite}}
	</tr>
</table>



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