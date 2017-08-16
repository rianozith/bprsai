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
		
    table {
        border-collapse: collapse;
    }

    table, td, th {
        border: 1px solid black;
    }
    </style>
</head>
<body >
<div align="center" style="font-size:18px; line-height:1">
  <strong>
  <p>BPR Syariah Amanah Insani</p>
  <p style="position:relative; top:-15px">REPAYMENT SCHEDULE</p></strong>
</div>

<table border="0" style="margin-left:50px">
  <tr>
    <td width="103">No. rekening </td>
    <td width="10">:</td>
    <td width="120">{{$datas->kdnas}}</td>
    <td width="125">&nbsp;</td>
    <td width="63">No. PP </td>
    <td width="10">:</td>
    <td width="381">{{$datas->nopp}}</td>
  </tr>
  <tr>
    <td>Nama Nasabah </td>
    <td>:</td>
    <td>{{$datas->nama}}</td>
    <td>&nbsp;</td>
    <td>No. SPH </td>
    <td>:</td>
    <td>{{$datas->nosph}}</td>
  </tr>
  <tr>
    <td>Pokok</td>
    <td>:</td>
    <td><div align="right">{{$datas->pengajuanbiaya}}</div></td>
    <td>&nbsp;</td>
    <td>Tgl. Realisasi </td>
    <td>:</td>
    <td>{{date('d-m-Y', strtotime($datas -> tglrealisasi))}}</td>
  </tr>
  <tr>
    <td>Margin</td>
    <td>:</td>
    <td><div align="right">{{$datas->marginbank}}</div></td>
    <td>&nbsp;</td>
    <td>Tgl. Jatuh Tempo </td>
    <td>:</td>
    <td>{{date('d-m-Y', strtotime($datas -> tglakhir))}}</td>
  </tr>
  <tr>
    <td>Jumlah Hutang </td>
    <td>:</td>
    <td><div align="right">{{$datas->totalkewajiban}}</div></td>
    <td>&nbsp;</td>
    <td>Periode</td>
    <td>:</td>
    <td>{{$datas->jangkawaktu}} Bulan</td>
  </tr>
</table>
<div style="position:absolute; left: 812px; top: 182px; height: 38px; width: 251px; border:medium">Biaya Penagihan : {{$datas->biayatagih}}</div>
<br><br>
<table width="95%" style="margin-left:50px" >
  <tr>
    <th>Ke</th>
    <th><strong>Tanggal</strong></th>
    <th>Angsuran</th>
    <th>Margin</th>
    <th>Pokok</th>
    <th>Sisa Pokok </th>
    <th> Sisa Margin </th>
    <th>Sisa Angsuran</th>
    <th>Keterangan</th>
  </tr>
  <tr>
    <td><div align="right">0</div></td>
    <td><div align="center">{{$tglrealisasi->format('d-m-Y')}}</div></td>
    <td><div align="right">0</div></td>
    <td><div align="right">0</div></td>
    <td><div align="right">0</div></td>
    <td><div align="right">{{number_format($datas->pengajuanbiayainteger, 0, ".", ".")}}</div></td>
    <td><div align="right">{{number_format($datas->marginbankinteger, 0, ".", ".")}}</div></td>
    <td><div align="right">{{number_format($datas->totalkewajibaninteger, 0, ".", ".")}}</div></td>
    <td>&nbsp;</td>
  </tr>
  <?php 
    $angsuran = $datas->angsuranpokokinteger + $datas->angsuranmargininteger;
    $sisapokok = $datas->pengajuanbiayainteger;
    $sisamargin = $datas->marginbankinteger;
    $sisaangsuran = $datas->totalkewajibaninteger;
  ?>
  @for ($i = 1; $i < $datas->jangkawaktu; $i++)
  <?php 
  
    $sisapokok = $sisapokok - $datas->angsuranpokokinteger;
    $sisamargin = $sisamargin - $datas->angsuranmargininteger;
    $sisaangsuran = $sisaangsuran - $angsuran;
    
  ?>
    
  <tr>
    <td><div align="right">{{$i}}</div></td>
    <td><div align="center">{{date('d-m-Y', strtotime($tglrealisasi->addmonth(1)))}}</div></td>
    <td><div align="right">{{number_format($angsuran, 0, ".", ".")}}</div></td>
    <td><div align="right">{{number_format($datas->angsuranmargininteger, 0, ".", ".")}}</div></td>
    <td><div align="right">{{number_format($datas->angsuranpokokinteger, 0, ".", ".")}}</div></td>
    <td><div align="right">{{number_format($sisapokok, 0, ".", ".")}}</div></td>
    <td><div align="right">{{number_format($sisamargin, 0, ".", ".")}}</div></td>
    <td><div align="right">{{number_format($sisaangsuran, 0, ".", ".")}}</div></td>
    <td>&nbsp;</td>
    
  </tr>

    @if($i===18 ||$i===36 || $i===54 || $i===72 || $i===90)
      </table> <div class="page-break"></div>
      <div align="center" style="font-size:18px; line-height:1">
        <strong>
        <p>BPR Syariah Amanah Insani</p>
        <p style="position:relative; top:-15px">REPAYMENT SCHEDULE</p></strong>
      </div>

      <table border="0" style="margin-left:50px">
        <tr>
          <td width="103">No. rekening </td>
          <td width="10">:</td>
          <td width="120">{{$datas->kdnas}}</td>
          <td width="125">&nbsp;</td>
          <td width="63">No. PP </td>
          <td width="10">:</td>
          <td width="381">{{$datas->nopp}}</td>
        </tr>
        <tr>
          <td>Nama Nasabah </td>
          <td>:</td>
          <td>{{$datas->nama}}</td>
          <td>&nbsp;</td>
          <td>No. SPH </td>
          <td>:</td>
          <td>{{$datas->nosph}}</td>
        </tr>
        <tr>
          <td>Pokok</td>
          <td>:</td>
          <td><div align="right">{{$datas->pengajuanbiaya}}</div></td>
          <td>&nbsp;</td>
          <td>Tgl. Realisasi </td>
          <td>:</td>
          <td>{{date('d-m-Y', strtotime($datas -> tglrealisasi))}}</td>
        </tr>
        <tr>
          <td>Margin</td>
          <td>:</td>
          <td><div align="right">{{$datas->marginbank}}</div></td>
          <td>&nbsp;</td>
          <td>Tgl. Jatuh Tempo </td>
          <td>:</td>
          <td>{{date('d-m-Y', strtotime($datas -> tglakhir))}}</td>
        </tr>
        <tr>
          <td>Jumlah Hutang </td>
          <td>:</td>
          <td><div align="right">{{$datas->totalkewajiban}}</div></td>
          <td>&nbsp;</td>
          <td>Periode</td>
          <td>:</td>
          <td>{{$datas->jangkawaktu}} Bulan</td>
        </tr>
      </table>
      <div style="position:absolute; left: 812px; top: 182px; height: 38px; width: 251px; border:medium">Biaya Penagihan : {{$datas->biayatagih}}</div>
      <br><br>
      <table width="95%" style="margin-left:50px" >
        <tr>
          <th>Ke</th>
          <th><strong>Tanggal</strong></th>
          <th>Angsuran</th>
          <th>Margin</th>
          <th>Pokok</th>
          <th>Sisa Pokok </th>
          <th>Sisa Margin </th>
          <th>Sisa Angsuran</th>
          <th>Keterangan</th>
        </tr>
    @endif
  
  @endfor
  <?php 
    $pokokjt= $datas->pengajuanbiayainteger - ( $datas->angsuranpokokinteger * ($datas->jangkawaktu - 1) );
    $marginjt= $datas->marginbankinteger - ( $datas->angsuranmargininteger * ($datas->jangkawaktu - 1) );
  ?>
  <tr>
    <td><div align="right">{{$datas->jangkawaktu}}</div></td>
    <td><div align="center">{{date('d-m-Y', strtotime($datas -> tglakhir))}}</div></td>
    <td><div align="right">{{number_format($marginjt + $pokokjt, 0, ".", ".")}}</div></td>
    <td><div align="right">{{number_format($marginjt, 0, ".", ".")}}</div></td>
    <td><div align="right">{{number_format($pokokjt, 0, ".", ".")}}</div></td>
    <td><div align="right">0</div></td>
    <td><div align="right">0</div></td>
    <td><div align="right">0</div></td>
    <td>&nbsp;</td>
  </tr>
  
</table>



</body>
</html>