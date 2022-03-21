@extends('layouts.app')

@section('styles')
    <!-- Internal Select2 css -->
    <link href="{{ asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
@endsection

@section('content')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">Forms</h4><span class="text-muted mt-1 tx-13 ms-2 mb-0">/
                    Form-wizards</span>
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

    <!-- row -->
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="main-content-label mg-b-5">
                        Add New Worry Journal Entry
                    </div>
                    <p class="mg-b-20">Follow the form below to submit a new worry journal entry.</p>
                    <div id="wizard3">
                        <h3>What's on your mind?</h3>
                        <section>
                            <div class="control-group form-group">
                                <label class="form-label">What is worrying you right now? Describe the situation that is making you anxious - why are you worried about it? E.g. I have a complicated task at work tomorrow and I know for sure I will fail miserably at it. My co-workers will hate me and I will get fired.</label>
                                <textarea class="form-control" name="before-entry" placeholder="Enter your thoughts here.." rows="3" style="height: 160px;"></textarea>
                            </div>
                        </section>
                        <h3>Identify Thinking Traps</h3>
                        <section>
                            <div class="control-group form-group">
                                <label class="form-label">Thinking traps are distorted and unhelpful ways of thinking that keep us feeling anxious. Pick from the following the traps you may think you are getting caught up in.</label>
                                <input type="text" class="form-control required" placeholder="Name">
                            </div>
                        </section>
                        <h3>Balance Your Thought</h3>
                        <section>
                            <div class="control-group form-group">
                                <label class="form-label">See if you can try to reword your worry in a balanced way. E.g I'm not 100% sure that I will fail miserably at that work task tomorrow - if I get stuck I can ask a co-worker for help. Even if I fail at the task, I can learn why this has been the case and it will be a great learning experience for when I encounter this kind of issue again.</label>
                                <textarea class="form-control" name="after-entry" placeholder="Enter your balanced thoughts here.." rows="3" style="height: 160px;"></textarea>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
@endsection('content')

@section('scripts')
    <!--Internal  Select2 js -->
    <script src="{{ asset('assets/plugins/select2/js/select2.min.js') }}"></script>

    <!-- Internal Jquery.steps js -->
    <script src="{{ asset('assets/plugins/jquery-steps/jquery.steps.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/parsleyjs/parsley.min.js') }}"></script>

    <!--Internal  Form-wizard js -->
    <script src="{{ asset('assets/js/form-wizard.js') }}"></script>
@endsection
