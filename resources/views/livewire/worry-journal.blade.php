@extends('layouts.app')

@section('styles')
@endsection

@section('content')
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">News</h4><span class="text-muted mt-1 tx-13 ms-2 mb-0">/ Positive
                    News</span>
            </div>
        </div>

        <div class="d-flex my-xl-auto right-content">
            <div class="pe-1 mb-xl-0">
                <button type="button" class="btn btn-info btn-icon me-2 btn-b"><i class="mdi mdi-filter-variant"></i></button>
            </div>
            <div class="pe-1 mb-xl-0">
                <button type="button" class="btn btn-danger btn-icon me-2"><i class="mdi mdi-star"></i></button>
            </div>
            <div class="pe-1 mb-xl-0">
                <button type="button" class="btn btn-warning  btn-icon me-2"><i class="mdi mdi-refresh"></i></button>
            </div>
            <div class="mb-xl-0">
                <div class="btn-group dropdown">
                    <button type="button" class="btn btn-primary">14 Aug 2019</button>
                    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                        id="dropdownMenuDate" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
    <h1>Worry Journal</h1>
    <div class="row">
        <livewire:worry-journal-wizard />
    </div>


    {{-- <h1>Good News Network</h1>
<!-- row opened-->
<div class="row">
    <div class="row row-sm">
		@foreach ($jsonData['good-news'] as $item)
			<div class="col-md-4 col-lg-4">
				<div class="card">
					<a target="_blank" href="{{ $item['link'] }}">
						<img alt="Image" class="img-fluid card-img-top" src="{{ $item['image'] }}">
					</a>
					<div class="card-body ">
						<h3 class="card-title news-headline">{{ $item['title'] }}</h3>
					</div>
				</div>
			</div><!-- col-4 -->
		@endforeach
    </div>
</div> --}}
    <!-- row closed -->
</div>
@endsection('content')
