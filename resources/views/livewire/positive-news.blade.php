@extends('layouts.app')

@section('styles')

@endsection

@section('content')

<div class="breadcrumb-header justify-content-between">
	<div class="my-auto">
		<div class="d-flex">
			<h4 class="content-title mb-0 my-auto">Home</h4><span
				class="text-muted mt-1 tx-13 ms-2 mb-0">/ Measurements</span>
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

<!-- row opened-->
<div class="row">
    <div class="row row-sm">
        <div class="col-md-4 col-lg-4">
            <div class="card">
                <img alt="Image" class="img-fluid card-img-top" src="//localhost:3000/assets/img/photos/14.jpg">
                <div class="card-body ">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div><!-- col-4 -->
        <div class="col-md-4 col-lg-4 mg-md-t-0">
            <div class="card">
                <img alt="Image" class="img-fluid card-img-top" src="//localhost:3000/assets/img/photos/12.jpg">
                <div class="card-body ">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div><!-- col-4 -->
    </div>
</div>
<!-- row closed -->

@endsection('content')

</div>
