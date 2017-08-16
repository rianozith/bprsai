<!DOCTYPE html>
<html>
<head>
    <title>Kode Golongan</title>
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" media="screen">
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" media="screen">
        <link href="{{asset('css/bootstrap-responsive.min.css')}}" rel="stylesheet" media="screen">
        
</head>
<body>
    <h1 class="text-center">Kode Golongan</h1>
    <hr>
    <table class="table table-bordered">
			<thead>
				<tr>
					
					<th>Kode Golongan</th>
					<th>Keterangan</th>
										
				</tr>
			</thead>
			<tbody>
				@foreach($golnasabah as $value)
				
					<tr >
						
						<td>{{ $value -> sandi }}</td>
						<td>{{ $value -> keterangan }}</td>
						
					</tr>
				@endforeach
			</tbody>
		</table>
</body>
</html>