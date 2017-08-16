<!DOCTYPE html>
<html>
<head>
    <title>Kode Officer</title>
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" media="screen">
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" media="screen">
        <link href="{{asset('css/bootstrap-responsive.min.css')}}" rel="stylesheet" media="screen">
        
</head>
<body>
    <h1 class="text-center">Kode Officer</h1>
    <hr>
    <table class="table table-bordered">
			<thead>
				<tr>
					
					<th>Kode Officer</th>
					<th>Nama</th>
					<th>Otorisasi</th>
					<th>AO</th>
					
				</tr>
			</thead>
			<tbody>
				@foreach($officer as $value)
				
					<tr >
						
						<td>{{ $value -> kd_officer }}</td>
						<td>{{ $value -> nama }}</td>
						<td>{{ $value -> otorisasi }}</td>
						<td>{{ $value -> ao }}</td>
						
					</tr>
				@endforeach
			</tbody>
		</table>
</body>
</html>