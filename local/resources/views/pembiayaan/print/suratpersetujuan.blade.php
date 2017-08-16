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
<table width="auto" border="0" style="margin-left:33px; line-height:2">
	<tr>
		<td>Bekasi, {{$tglrealisasi->format('j/m/Y')}}</td>
	</tr>
</table>
<table width="auto" border="0" style="margin-left:33px; line-height:1">
  <tr>
    <td>Nomor</td>
    <td>:</td>
    <td>{{$datas-> nopp}}</td>
  </tr>
  <tr>
    <td>Lampiran</td>
    <td>:</td>
    <td>1 (Satu) </td>
  </tr>
  <tr>
    <td>Perihal</td>
    <td>:</td>
    <td>Persetujuan Pembiayaan</td>
  </tr>
</table>

<table width="auto" border="0" style="margin-left:33px; line-height:1">
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Kepada Yth. </td>
  </tr>
  <tr>
    <td><b>{{$datas-> nama}}</b></td>
  </tr>
  <tr>
    <td>{{$datas-> alamat}} {{$datas-> kelurahan}} {{$datas-> kecamatan}} {{$datas-> kota}}</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td style="line-height:1.2">Menunjuk surat Permohonan Bapak/Ibu tanggal    {{$tglrealisasi->format('j/m/Y')}}   maka kami atas nama Manajemen 
	    <br>PT. BPR Syari'ah Amanah Insani menyampaikan berita dapat menyetujui pembiayaan 
	    <br>yg diajukan, dengan ketentuan sebagai berikut :</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>


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
<table width="649" border="0" style="margin-left:33px; line-height:1">
  <tr>
    <td colspan="2">Demikian agar dimaklumi dan sebagai tanda persetujuan harap copy surat ini ditandatangani <br>
pada saat realisasi</td>
  </tr>
  <tr>
    <td width="304">&nbsp;</td>
    <td width="335">&nbsp;</td>
  </tr>
  <tr >
    <td>Hormat kami,</td>
    <td>&nbsp;</td>
  </tr>
  <tr >
    <td>PT. BPR SYARI'AH AMANAH INSANI </td>
    <td>Setuju dengan keputusan di atas</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>H. M. Taufik Darmansyah, SE, CPA</td>
    <td>{{$datas-> nama}}</td>
  </tr>
  <tr >
    <td>Direktur Utama</td>
    <td><br></td>
  </tr>
</table>


</body>
</html>