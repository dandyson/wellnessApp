@extends('layouts.app')

@section('styles')

		<!---Internal  Owl Carousel css-->
		<link href="{{asset('assets/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet">

		<!--- Internal Sweet-Alert css-->
		<link href="{{asset('assets/plugins/sweet-alert/sweetalert.css')}}" rel="stylesheet">

@endsection

@section('content')

@php

// Get the URI
$url = parse_url($_SERVER['REQUEST_URI']);

// Strip the URI down to the ID itself
$measurementID = intval(str_replace(['/api/measurement/', '/edit'], '', $url['path']));

// Loop through all measurements and return the one that matches the ID
foreach($measurements as $measurement) {
	if ($measurement->id === $measurementID) {
		$selectedMeasurement = $measurement;
	}
}

@endphp

				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Home</h4><span
								class="text-muted mt-1 tx-13 ms-2 mb-0">/ Edit Measurement</span>
						</div>
					</div>
					<div class="d-flex my-xl-auto right-content">
						<div class="pe-1 mb-xl-0">
							<button type="button" class="btn btn-info btn-icon me-2 btn-b"><i
									class="mdi mdi-filter-variant"></i></button>
						</div>
						<div class="pe-1 mb-xl-0">
							<button type="button" class="btn btn-danger btn-icon me-2"><i
									class="mdi mdi-star"></i></button>
						</div>
						<div class="pe-1 mb-xl-0">
							<button type="button" class="btn btn-warning  btn-icon me-2"><i
									class="mdi mdi-refresh"></i></button>
						</div>
						<div class="mb-xl-0">
							<div class="btn-group dropdown">
								<button type="button" class="btn btn-primary">14 Aug 2019</button>
								<button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split"
									id="dropdownMenuDate" data-bs-toggle="dropdown" aria-haspopup="true"
									aria-expanded="false">
									<span class="sr-only">Toggle Dropdown</span>
								</button>
								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate"
									x-placement="bottom-end">
									<a class="dropdown-item" href="#">2015</a>
									<a class="dropdown-item" href="#">2016</a>
									<a class="dropdown-item" href="#">2017</a>
									<a class="dropdown-item" href="#">2018</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- breadcrumb -->
				<h2 class="mb-4">Edit Measurement</h2>
				
				<div class="row row-sm">
					<div class="col-12">
						<div class="card  box-shadow-0 ">
							<div class="card-header">
								<h4 class="card-title mb-1">Edit entry for {{ $measurement->date }}</h4>
							</div>
							<div class="card-body pt-0">
								<form method="PUT" action="{{ route('measurement.update', [$selectedMeasurement]) }}">
									
								
									<div class="">
										<div class="form-group">
											<label for="exampleInputEmail1">Date</label>
											<input type="date" class="form-control" id="edit-measurement-date" value="{{ $selectedMeasurement->date }}">
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Waist</label>
											<input type="number" class="form-control" id="edit-measurement-waist" placeholder="Waist" value="{{ $selectedMeasurement->waist }}">
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Chest</label>
											<input type="number" class="form-control" id="edit-measurement-chest" placeholder="chest" value="{{ $selectedMeasurement->chest }}">
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Left-arm</label>
											<input type="number" class="form-control" id="edit-measurement-left-arm" placeholder="left-arm" value="{{ $selectedMeasurement->left_arm }}">
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Right-arm</label>
											<input type="number" class="form-control" id="edit-measurement-right-arm" placeholder="right-arm" value="{{ $selectedMeasurement->right_arm }}">
										</div>
									</div>
									<button type="submit" class="btn btn-primary mt-3 mb-0">Submit</button>
								</form>
							</div>
						</div>
					</div>
				</div>

				{{-- ************** WORK OUT HOW TO PASS THROUGH THE MEASUREMENT TO EDIT - CHECK THE GK APP ************* --}}
	
@endsection('content')

@section('scripts')

        <!-- Internal Select2 js-->
        <script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>

		<!-- Internal Rating js-->
		<script src="{{asset('assets/plugins/rating/ratings.js')}}"></script>

		<!--Internal  Sweet-Alert js-->
		<script src="{{asset('assets/plugins/sweet-alert/sweetalert.min.js')}}"></script>
		<script src="{{asset('assets/plugins/sweet-alert/jquery.sweet-alert.js')}}"></script>

		<!-- Sweet-alert js  -->
		<script src="{{asset('assets/plugins/sweet-alert/sweetalert.min.js')}}"></script>
		<script src="{{asset('assets/js/sweet-alert.js')}}"></script>


@endsection