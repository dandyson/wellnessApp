@extends('layouts.app')

@section('styles')

	<!---Internal  Prism css-->
	<link href="{{asset('assets/plugins/prism/prism.css')}}" rel="stylesheet">

@endsection

@section('content')

<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
	<div class="my-auto">
		<div class="d-flex">
			<h4 class="content-title mb-0 my-auto">Timers</h4><span
			class="text-muted mt-1 tx-13 ms-2 mb-0">/ Pomodoro Timer</span>
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

<div class="row d-flex justify-content-center">
	<div class="col-8">
		<div>
			<div>
				<a class="main-header-arrow" href="" id="ChatBodyHide"><i class="icon ion-md-arrow-back"></i></a>
				<div class="main-content-body main-content-body-contacts card custom-card">
					<div id="filler" class="bg-success"></div>
					<div id="pomodoro-app">
						<div id="container">
							<div id="timer">
	
							<div id="time" class="d-flex justify-content-center align-items-center mb-4 bg-danger">
								<span id="minutes">25</span>:
								<span id="seconds">00</span>
							</div>
							

							<div class="d-flex justify-content-center my-3">
								<div class="">
									<button class="btn btn-danger btn-block pomodoro-button" id="stop"><i class="typcn typcn-media-play"></i>/<i class="typcn typcn-media-pause"></i></button>
								</div>	
							</div>
	
							<script>
								function timerButtonSound() {
								  var audio = new Audio("http://orteil.dashnet.org/cookieclicker/snd/press.mp3");
								  audio.play();
								}
								function doneSound() {
								  var audio = new Audio("http://clipart.usscouts.org/ScoutDoc/SeaExplr/WavFiles/SHIPBELL/CHIME2.WAV");
								  audio.play();
								}
								</script>
							</div>
	
							<div id="buttons" class="d-flex justify-content-evenly my-5">
							<div class="col-sm-6 col-md-3 mg-t-10 mg-md-t-0 bg-danger">
								<button class="btn btn-block pomodoro-button pomo-category" id="work" onclick="timerButtonSound();">Work</button>
							</div>	
							<div class="col-sm-6 col-md-3 mg-t-10 mg-md-t-0 bg-info">
								<button class="btn btn-block pomodoro-button pomo-category" id="shortBreak" onclick="timerButtonSound();">Short Break</button>
							</div>	
							<div class="col-sm-6 col-md-3 mg-t-10 mg-md-t-0 bg-info">
								<button class="btn btn-block pomodoro-button pomo-category" id="longBreak" onclick="timerButtonSound();">Long Break</button>
							</div>	
	
							</div>
						</div>
				
					</div>
				</div>
			</div>
		</div>

	</div>
</div>

<script>
	// TODO: Need to put this in a JS file, but even puttng it in App.js doesn't work?
var pomodoro = {
	started : false,
	minutes : 0,
	seconds : 0,
	fillerWidth : 0,
	fillerIncrement : 0,
	interval : null,
	minutesDom : null,
	secondsDom : null,
	fillerDom : null,
	
	init : function(){
		const time = document.querySelector('#time');
		time.classList.add('bg-danger');
		var self = this;
		this.minutesDom = document.querySelector('#minutes');
		this.secondsDom = document.querySelector('#seconds');
		this.fillerDom = document.querySelector('#filler');
		this.interval = setInterval(function(){
			self.intervalCallback.apply(self);
		}, 1000);
		self.startWork.apply(self);

		this.fillerDom.style.display = "none";
		
		document.querySelectorAll('.pomodoro-button').forEach(btn => {
			btn.addEventListener("click", () => {
				timerButtonSound();
			})
		});

		document.querySelectorAll('.pomo-category').forEach(btn => {
			btn.addEventListener("click", () => {
				this.fillerDom.style.display = "none";
			})
		});
		
		document.querySelector('#work').onclick = function(){
			// IF card-body has other background classes on, remove and then add success class on
			if (time.classList.contains('bg-info')) {
				time.classList.remove('bg-info');
			}
			time.classList.add('bg-danger');
			time.style.boxShadow = '0 0 0 12px #e7829a';
			self.startWork.apply(self);
		};
		document.querySelector('#shortBreak').onclick = function(){
			// IF card-body has other background classes on, remove and then add success class on
			if (time.classList.contains('bg-danger')) {
				time.classList.remove('bg-danger');
			}
			time.classList.add('bg-info');
			time.style.boxShadow = '0 0 0 12px #0095f9';
			self.startShortBreak.apply(self);
		};
		document.querySelector('#longBreak').onclick = function(){
			// IF card-body has other background classes on, remove and then add success class on
			if (time.classList.contains('bg-danger')) {
				time.classList.remove('bg-danger');
			}
			if (time.classList.contains('bg-danger')) {
				time.classList.remove('bg-danger');
			}

			time.classList.add('bg-info');
			self.startLongBreak.apply(self);
		};
		document.querySelector('#stop').onclick = function(){
		self.pauseTimer.apply(self);
		};
	},
	resetVariables : function(mins, secs, started){
		this.updateDom();
		this.minutes = mins;
		this.seconds = secs;
		this.started = started;
		this.fillerIncrement = 100/(this.minutes*60);
		this.fillerWidth = 0;  
	},
	startWork: function() {
		this.resetVariables(25, 0, false);
		this.updateDom();
	},
	startShortBreak : function(){
		this.resetVariables(5, 0, false);
		this.updateDom();
	},
	startLongBreak : function(){
		this.resetVariables(15, 0, false);
		this.updateDom();
	},
	pauseTimer : function(){
		if (this.started) {
			document.querySelector('#stop').classList.contains("button-box-shadow") ? document.querySelector('#stop').classList.remove("button-box-shadow") : '';
		} else {
			document.querySelector('#stop').classList.add('button-box-shadow');
		}
		this.started = ! this.started;
	},
	toDoubleDigit : function(num){
		if(num < 10) {
		return "0" + parseInt(num, 10);
		}
		return num;
	},
	updateDom : function(){
		this.fillerDom.style.display = "block";
		this.minutesDom.innerHTML = this.toDoubleDigit(this.minutes);
		this.secondsDom.innerHTML = this.toDoubleDigit(this.seconds);
		this.fillerWidth = this.fillerWidth + this.fillerIncrement;
		this.fillerDom.style.width = this.fillerWidth + '%';
	},
	intervalCallback : function(){
		if(!this.started) return false;
		if(this.seconds == 0) {
		if(this.minutes == 0) {
			this.timerComplete();
			return;
		}
		this.seconds = 59;
		this.minutes--;
		} else {
		this.seconds--;
		}
		this.updateDom();
	},
	timerComplete : function(){
		this.started = false;
		this.fillerWidth = 0;
		doneSound();
	}
};

window.onload = function(){
	pomodoro.init();
};

function playSound() {
  var sound = document.getElementById("audio");
  sound.play();
}
</script>

			<!-- /row -->

@endsection('content')

@section('scripts')

	<!--Internal  Datepicker js -->
	<script src="{{asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>

	<!-- Internal Select2 js-->
	<script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>

	<!--Internal  Clipboard js-->
	<script src="{{asset('assets/plugins/clipboard/clipboard.min.js')}}"></script>
	<script src="{{asset('assets/plugins/clipboard/clipboard.js')}}"></script>

	<!-- Internal Prism js-->
	<script src="{{asset('assets/plugins/prism/prism.js')}}"></script>

@endsection