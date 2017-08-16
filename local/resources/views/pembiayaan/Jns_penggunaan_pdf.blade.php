<!DOCTYPE html>
<html>
<head>
    <title>Kode Jenis Penggunaan</title>
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" media="screen">
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" media="screen">
        <link href="{{asset('css/bootstrap-responsive.min.css')}}" rel="stylesheet" media="screen">
        
</head>
<body>
    <h1 class="text-center">Kode Jenis Penggunaan</h1>
    <hr>
    <table class="table table-bordered">
			<thead>
				<tr>
					
					<th>Kode Jenis Penggunaan</th>
					<th>Keterangan</th>
					<th>Otorisasi</th>
				</tr>
			</thead>
			<tbody>
				@foreach($jnspeng as $value)
				
					<tr >
						
						<td>{{ $value -> kd_jpeggn }}</td>
						<td>{{ $value -> ket }}</td>
						<td>{{ $value -> otorisasi }}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
</body>
</html>