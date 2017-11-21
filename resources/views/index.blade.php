@extends('layouts.welcome') @section('content')
<div id="content-container">

	<!--Page Title-->
	<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
	<div id="page-title">
		<h1 class="page-header text-overflow">Learn crud</h1>

		<!--Searchbox-->
		<div class="searchbox">
			<div class="input-group custom-search-form">
				<input type="text" class="form-control" placeholder="Search..">
				<span class="input-group-btn">
					<button class="text-muted" type="button">
						<i class="fa fa-search"></i>
					</button>
				</span>
			</div>
		</div>
	</div>
	<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
	<!--End page title-->


	<!--Breadcrumb-->
	<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
	<ol class="breadcrumb">
		<li>
			<a href="index.html#">Home</a>
		</li>
		<li>
			<a href="index.html#">Library</a>
		</li>
		<li class="active">Data</li>
	</ol>
	<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
	<!--End breadcrumb-->




	<!--Page content-->
	<!--===================================================-->
	<div id="page-content">

		<!-- Add Row -->
		<!--===================================================-->
		<div class="panel">
			<div class="panel-heading">
				<h3 class="panel-title">Crud Table</h3>
			</div>

			<div id="demo-custom-toolbar2" class="table-toolbar-left">
				<a href="/create">
					<button class="btn btn-primary btn-labeled fa fa-times">Add Row</button>
				</a>
			</div>

			<div class="panel-body">
				<table id="demo-dt-addrow" class="table table-striped table-bordered" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th>Title</th>
							<th>Body</th>
							<th class="min-tablet">Update</th>
							<th class="min-tablet">Create</th>
							<th class="min-desktop">Edit</th>
							<th class="min-desktop">Delete</th>
						</tr>
					</thead>
					<tbody>
						@foreach($task as $item)
						<tr>
							<td>{{$item->title}}</td>
							<td>{{$item->body}}</td>
							<td>{{$item->updated_at}}</td>
							<td>{{$item->created_at}}</td>
							<td>
								<a href="/edit/{{$item->id}}">Edit</a>
							</td>
							<td>
								<a href="/delete/{{$item->id}}">Delete</a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
		<!--===================================================-->
		<!-- End Add Row -->

	</div>
	<!--===================================================-->
	<!--End page content-->


</div>
@endsection