@extends('layouts.template')

@section('content')

<div class="main-panel" style="position: absolute;
top: 50%;
left: 50%;
transform: translate(-50%, -50%);">
	<div class="content">
		<div class="page-inner">
			<div class="page-header">
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<div class="row">
								<div class="form-group col-12">
								  <a href="{{ url('/tourleader/create') }}" class="btn btn-success form-control">TAMBAH DATA TOUR</a>
								</div>  
								<div class="form-group col-12 mt-2">
								 <a href="{{ route('tour') }}" class="btn btn-primary form-control">LIST DATA TOUR</a>
								</div>  
								</div>
						</div>
						<div class="card-body">
							<div class="table-responsive">


							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	
</div>

   @endsection