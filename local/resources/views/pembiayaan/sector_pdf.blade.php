<!DOCTYPE html>
<html>
<head>
    <title>Kode Sektor</title>
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" media="screen">
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" media="screen">
        <link href="{{asset('css/bootstrap-responsive.min.css')}}" rel="stylesheet" media="screen">
        
</head>
<body>
    <h1 class="text-center">Kode Sektor</h1>
    <hr>
    <table class="table table-bordered">
			<thead>
				<tr>
					
					<th>Kode sektor</th>
					<th>Keterangan</th>
					<th>Otorisasi</th>
					
				</tr>
			</thead>
			<tbody>
				@foreach($sektor as $value)
				
					<tr >
						
						<td>{{ $value -> kd_sektor1 }}</td>
						<td>{{ $value -> ket }}</td>
						<td>{{ $value -> otorisasi }}</td>
						
					</tr>
				@endforeach
			</tbody>
		</table>
</body>
</html>