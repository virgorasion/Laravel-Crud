@extends('layouts.welcome') @section('content')
<div id="content-container">

	<!--Page Title-->
	<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
	<div id="page-title">
		<h1 class="page-header text-overflow">Dashboard</h1>

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

		<div class="col-sm-6">
			<div class="panel">
				<div class="panel-heading">
					<h3 class="panel-title">Horizontal form</h3>
				</div>

				<!--Horizontal Form-->
				<!--===================================================-->
				<form class="form-horizontal" action="/create/post" method="POST">
					{{csrf_field()}}
					<div class="panel-body">
						<div class="form-group">
							<label class="col-sm-3 control-label" for="demo-hor-inputemail">Title</label>
							<div class="col-sm-9">
								<input type="Title" name="title" placeholder="Title" id="demo-hor-inputemail" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label" for="demo-hor-inputpass">body</label>
							<div class="col-sm-9">
								<input type="body" name="body" placeholder="body" id="demo-hor-inputpass" class="form-control">
							</div>
						</div>
					</div>
					<div class="panel-footer text-right">
						<button class="btn btn-info" type="submit">Submit</button>
					</div>
				</form>
				<!--===================================================-->
				<!--End Horizontal Form-->

			</div>
		</div>

	</div>
	<!--===================================================-->
	<!--End page content-->


</div>
@endsection