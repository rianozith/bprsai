@extends('layouts.home_master')

@section('title')
	Daftar User
@stop

@section('breadcrumb')

	<li class="">
		 <a href="#">Users</a> <span class="divider">/</span>
	</li>
	<li class="active">
		 Daftar User
	</li>
@stop

@section('link2')
	<script src="{{asset('assets/scripts.js')}}"></script>
@stop

@section('content')

	@if(Session::has('pesan'))
		<div class="alert alert-success">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<h4>Success </h4>
			<h4>{{ Session::get('pesan') }}</h4>
		</div>
	@endif

	<div class="row-fluid">
    <!-- block -->
    <div class="block">
    	<div class="navbar navbar-inner block-header">
        <div class="muted pull-left">Daftar User</div>
        <div class="pull-right">
        	
       	</div>

        {{-- <div class="pull-right"><span class="badge badge-warning">Account Officer Info</span></div> --}}
    </div>
    <div class="block-content collapse in">
		<div class="table-toolbar">
			<div class="btn-group">
				<a href="{{url('/users/createdaftaruser')}}" > <button class="btn btn-success">Tambah User <i class="icon-plus icon-white"></i></button></a>
            </div>
            <div class="btn-group pull-right">
                
            </div>
        </div>    	
        <br>
         
    	<table class="table table-hover table-bordered">
			<thead>
				<tr>
					<th>#</th>
					<th>Nama User</th>
					<th>Username</th>
					<th>Inisial</th>
					<th>Email</th>
					<th>Role</th>
					<th>Password</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php $no = $users->firstItem() - 1 ; ?>
				@foreach($users as $value)
				<?php $no++ ;?>
					<tr >
						<td>{{ $no }}</td>
						<td>{{ $value -> name }}</td>
						<td>{{ $value -> username }}</td>
						<td>{{ $value -> inisial }}</td>
						<td>{{ $value -> email }}</td>
						<td>{{ $value -> role }}</td>
						<td>{{ $value -> password }}</td>
						<td>
							<a href="{{url('users/editdaftaruser', $value->id )}}" class="btn btn-info btn-xs"><span class="icon-pencil"></span> </a>
							<a href="{{url('users/deletedaftaruser', $value->id )}}" class="btn btn-info btn-xs"><span class="icon-trash"></span></a>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		{{-- end block colapse in--}}
				
	</div>
		<div class="row-fluid">
				<div class="span4">
					
				</div>
				<div class="span4">
					<div class="pagination">{!! str_replace('/?', '?', $users->render()) !!}</div> 	
				</div>
				<div class="span4">
					
				</div>
		</div>
</div>

@stop