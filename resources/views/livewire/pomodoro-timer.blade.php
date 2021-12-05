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

<div class="row">

	<div class="col-12">
		<div class="card custom-card">
			<div class="card-body text-center">

				<div id="pomodoro-app">

					<div id="container">
						<div id="timer">

						<div id="time" class="d-flex justify-content-center align-items-center mb-4">
							<span id="minutes">25</span>
							<span id="colon">:</span>
							<span id="seconds">00</span>
						</div>
						<div id="filler">
							
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

						<div class="col-sm-6 col-md-3 mg-t-10 mg-md-t-0">
							<button class="btn btn-danger btn-block pomodoro-button" id="stop" onclick="timerButtonSound();">Start</button>
						</div>	
					
						<div id="buttons" class="d-flex justify-content-center">
						<div class="col-sm-6 col-md-3 mg-t-10 mg-md-t-0">
							<button class="btn btn-primary btn-block pomodoro-button" id="work" onclick="timerButtonSound();">Work</button>
						</div>	
						<div class="col-sm-6 col-md-3 mg-t-10 mg-md-t-0">
							<button class="btn btn-success btn-block pomodoro-button" id="shortBreak" onclick="timerButtonSound();">Short Break</button>
						</div>	
						<div class="col-sm-6 col-md-3 mg-t-10 mg-md-t-0">
							<button class="btn btn-info btn-block pomodoro-button" id="longBreak" onclick="timerButtonSound();">Long Break</button>
						</div>	

						</div>
					</div>
			
				</div>

			</div>
		</div>
	</div>
</div>

			<script>
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
		var self = this;
		this.minutesDom = document.querySelector('#minutes');
		this.secondsDom = document.querySelector('#seconds');
		this.fillerDom = document.querySelector('#filler');
		this.interval = setInterval(function(){
		self.intervalCallback.apply(self);
		}, 1000);
		
		document.querySelectorAll('.pomodoro-button').forEach(btn => {
			btn.addEventListener("click", () => {
				timerButtonSound();
			})
		});
		
		document.querySelector('#work').onclick = function(){
			// IF card-body has other background classes on, remove and then add success class on
			if (document.querySelector('.card-body').classList.contains('bg-success')) {
				document.querySelector('.card-body').classList.remove('bg-success');
			}
			if (document.querySelector('.card-body').classList.contains('bg-info')) {
				document.querySelector('.card-body').classList.remove('bg-info');
			}
			document.querySelector('.card-body').classList.add('bg-danger');
			self.startWork.apply(self);
		};
		document.querySelector('#shortBreak').onclick = function(){
			// IF card-body has other background classes on, remove and then add success class on
			if (document.querySelector('.card-body').classList.contains('bg-info')) {
				document.querySelector('.card-body').classList.remove('bg-info');
			}
			if (document.querySelector('.card-body').classList.contains('bg-danger')) {
				document.querySelector('.card-body').classList.remove('bg-danger');
			}
			document.querySelector('.card-body').classList.add('bg-success');
			self.startShortBreak.apply(self);
		};
		document.querySelector('#longBreak').onclick = function(){
			// IF card-body has other background classes on, remove and then add success class on
			if (document.querySelector('.card-body').classList.contains('bg-success')) {
				document.querySelector('.card-body').classList.remove('bg-success');
			}
			if (document.querySelector('.card-body').classList.contains('bg-danger')) {
				document.querySelector('.card-body').classList.remove('bg-danger');
			}

			document.querySelector('.card-body').classList.add('bg-info');
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
		document.querySelector('#stop').innerText = "Start";
		this.resetVariables(25, 0, false);
		this.updateDom();
	},
	startShortBreak : function(){
		document.querySelector('#stop').innerText = "Start";
		this.resetVariables(5, 0, false);
		this.updateDom();
	},
	startLongBreak : function(){
		document.querySelector('#stop').innerText = "Start";
		this.resetVariables(15, 0, false);
		this.updateDom();
	},
	stopTimer : function(){
		this.resetVariables(25, 0, false);
		this.updateDom();
	},
	pauseTimer : function(){
		if (this.started) {
			document.querySelector('#stop').innerText = "Start";
		} else {
			document.querySelector('#stop').innerText = "Stop";
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

			<style>
				#filler {
					background: #22c03c;
					height: 20px;
				}
			</style>

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