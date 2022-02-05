@extends('layouts.app')

@section('styles')

		<!---Internal  Owl Carousel css-->
		<link href="{{asset('assets/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet">

		<!--- Internal Sweet-Alert css-->
		<link href="{{asset('assets/plugins/sweet-alert/sweetalert.css')}}" rel="stylesheet">

@endsection

@section('content')

				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Home</h4><span
								class="text-muted mt-1 tx-13 ms-2 mb-0">/ Measurement Diary</span>
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
				<h2 class="mb-4">Body Measurements</h2>

            <!-- Measurements Table -->
            <div class="modal fade" id="measurement-table">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content modal-content-demo">
                        <div class="modal-header">
                            <h6 class="modal-title">Add New Measurement</h6><button aria-label="Close" class="close"
                                data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                        </div>
						<form action="">
							<div class="modal-body">


						
									<div class="card-header">
										<h4 class="card-title mb-1">Add a New Measurement</h4>
		
									</div>
									<div class="card-body pt-0">
										<form class="form-horizontal">
											{{-- DATE --}}
											<div class="form-group">
												<input type="date" class="form-control" id="inputDate" placeholder="Date">
											</div>
											{{-- WAIST --}}
											<div class="form-group">
												<input type="number" class="form-control" id="inputWaist" placeholder="Waist">
											</div>
											{{-- CHEST --}}
											<div class="form-group">
												<input type="number" class="form-control" id="inputChest" placeholder="Chest">
											</div>
											{{-- LEFT ARM --}}
											<div class="form-group">
												<input type="number" class="form-control" id="inputLeftArm" placeholder="Left Arm">
											</div>
											{{-- RIGHT ARM --}}																				
											<div class="form-group">
												<input type="number" class="form-control" id="inputRightArm" placeholder="Right Arm">
											</div>


										</form>
									</div>
							
							</div>
							<div class="modal-footer">
								<button class="btn ripple btn-primary" id="add-measurement-submit" type="button">Add Measurement</button>
								<button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">Close</button>
							</div>
						</form>
                    </div>
                </div>
            </div>
            <!-- End Modal effects-->

				{{-- MEASUREMENTS DATATABLE --}}
                <!-- row -->
                <div class="p-4 main-content-body main-content-body-contacts card custom-card">
					<div class="col-sm-6 col-md-4 col-xl-3 mg-t-20 mg-md-t-0">
						<a class="modal-effect btn btn-outline-primary btn-block"
							data-bs-effect="effect-slide-in-bottom" data-bs-toggle="modal"
							href="#measurement-table"><i class="typcn typcn-plus"></i> Add New Measurement</a>
					</div>
					<div class="container mt-5">
						<table class="table table-bordered yajra-datatable">
							<thead>
								<tr>
									<th>ID</th>
									<th>Date</th>
									<th>Waist</th>
									<th>Chest</th>
									<th>Left Arm</th>
									<th>Right Arm</th>
									<th>Actions</th>
								</tr>
							</thead>
							<tbody>
							</tbody>
						</table>
					</div>
					</div>
                </div>
                <!-- /row -->
				{{-- END OF MEASUREMENTS DATATABLE --}}



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