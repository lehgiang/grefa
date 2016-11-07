	<!DOCTYPE html>
	<html>
	<title>Nông nghiệp công nghệ cao | Đại học Bách Khoa TP.HCM</title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
	<link rel="stylesheet" href="http://www-db.deis.unibo.it/courses/TW/DOCS/w3schools/lib/w3.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<style>
	.w3-btn {
	margin-bottom: 10px;
	height: 45px;
	font-size: 20px;
	}
	.show-data{

	height:130px;
	font-size: 50px;
	line-height:130px;
	}
	#realdata{

	}
	.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input {display:none;}

.slider {
	  position: absolute;
	  cursor: pointer;
	  top: 0;
	  left: 0;
	  right: 0;
	  bottom: 0;
	  background-color: #ccc;
	  -webkit-transition: .4s;
	  transition: .4s;
	}

	.slider:before {
	  position: absolute;
	  content: "";
	  height: 46px;
	  width: 46px;
	  left: 4px;
	  bottom: 4px;
	  background-color: white;
	  -webkit-transition: .1s;
	  transition: .1s;
	}

	input:checked + .slider {
	  background-color: #2196F3;
	}

	input:focus + .slider {
	  box-shadow: 0 0 1px #2196F3;
	}

	input:checked + .slider:before {
	  -webkit-transform: translateX(46px);
	  -ms-transform: translateX(46px);
	  transform: translateX(46px);
	}

	/* Rounded sliders */
	.slider.round {
	  border-radius: 34px;
	}

	.slider.round:before {
	  border-radius: 50%;
	}
	</style>
	<body>

	<div class="w3-container w3-panel" >
	    {{msg}}
		<div class="row" id='menu' style="display: flex;" ng-repeat='n in msg.snode' >
			<h3>Khu vực</h3>
			<p class="col-sm-1" ><button class="w3-btn w3-blue">{{n.sensor_id}}</button></p>
		
		</div>
		
		<div id='realdata'>
			<div class="row" >
				<div class="col-sm-2" >
				  <div class="show-data w3-panel w3-card-4 w3-deep-orange  text-center" >{{msg.payload%100000}}</div>
				  <div>Nhiet do</div>
				</div>
				<div class="col-sm-2">
				  <div class="show-data w3-panel w3-card-4 w3-purple text-center">{{msg.payload%100000}}</div>
				</div>
				<div class="show-data col-sm-2">
				  <div class="show-data w3-panel w3-card-4 w3-indigo text-center">{{msg.payload%100000}}</div>
				</div>
				<div class="show-data col-sm-2">
				  <div class="show-data  w3-panel w3-card-4 w3-green text-center">{{msg.payload%100000}}</div>
				</div>
			</div>
		</div>
		<div>
			<div class="row">
				<div class="col-sm-1">
					<label class="switch">
					  <input type="checkbox" checked>
					  <div class="slider"></div>
					</label><br><br>
				</div>
				<div class="col-sm-1">
						<md-switch ng-model="data.cb2" aria-label="Switch 2" ng-true-value="'yup'" ng-false-value="'nope'" class="inline-label">
				    {{ data.cb2 }}
				  </md-switch>
				</div>
				
			</div>
		</div>
	</div>

	<script>
	$(document).ready(function () {
	    $('#menu .w3-btn').click(function(e) {

	        $('#menu .w3-btn').removeClass('w3-red');
			$('#menu .w3-btn').removeClass('w3-blue');
			$('#menu .w3-btn').addClass('w3-blue');
	        if (!$(this).hasClass('w3-red')) {
	            $(this).addClass('w3-red');
	        }
	        e.preventDefault();
	    });
	});
	</script>
	</body>
	</html>


