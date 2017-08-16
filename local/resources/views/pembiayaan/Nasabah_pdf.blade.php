<!DOCTYPE html>
<html>
<head>
    <title>Kode Nasabah</title>
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" media="screen">
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" media="screen">
        <link href="{{asset('css/bootstrap-responsive.min.css')}}" rel="stylesheet" media="screen">
        <link rel="shortcut icon" href="{{{ asset('favicon.ico') }}}">
</head>
<body>
    <h1 class="text-center">Nasabah Pembiayaan</h1>
    <hr>
    <table class="table table-bordered">
			<thead>
				<tr>

					<th>Kode Nasabah</th>
					<th>Nama</th>
					<th>Alamat</th>
					<th>Tgl Lahir</th>
					<th>Ibu Kandung</th>
					<th>Kode Pos</th>
					<th>Telp</th>
					<th>No KTP</th>
															
				</tr>
			</thead>
			<tbody>

				@foreach($nasabah as $value)
				
					<tr >
						
						<td>{{ $value -> kdnas }}</td>
						<td>{{ $value -> nama }}</td>
						<td>{{ $value -> alamat }}</td>
						<td>{{date('d-m-Y', strtotime($value -> tglahir))}}</td>
						<td>{{ $value -> namaibu }}</td>
						<td>{{ $value -> kdpos }}</td>
						<td>{{ $value -> telp }}</td>
						<td>{{ $value -> noktp }}</td>
						
					</tr>
				@endforeach
			</tbody>
		</table>
</body>
</html>