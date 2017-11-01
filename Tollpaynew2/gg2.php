<?php
    ob_start();
    session_start();
        require_once('dbconfig/config.php');    //phpinfo();
        if(!isset($_SESSION['username']))
        {
            echo '<script type="text/javascript">alert("Please login first")</script>';
            header("location:index.php");
        }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Google Map Direction Render Alternate Route How To Select Desired Path</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
		<style>
		html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
		#map {
			position: absolute;
			width: 100%;
			top: 0px;
			left:0px;
			height: 100%;
			min-height: 124vh;
		}
		.controls {
        margin-top: 10px;
        border: 1px solid transparent;
        border-radius: 2px 0 0 2px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        height: 32px;
        outline: none;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
      }
	  #from,
      #to {
        background-color: #fff;
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        margin-left: 12px;
        padding: 0 20px 0 20PX;
        text-overflow: ellipsis;
        width: 200px;
      }

      #subbut{
      	background-color:rgba(142,206,121,0.9);
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        margin-left: 12px;
        padding: 0 11px 0 13px;
        text-overflow: ellipsis;
        width: 100px;
        height: 35px;	
      }
      #subbut:hover {
      	background-color: red;
      	opacity: 1;
      }

      #from:focus,
      #to:focus,
	  #subbut:focus{
        border-color: #4d90fe;
      
      }

    </style>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Collapsible sidebar using Bootstrap 3</title>

         <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
                <!-- Our Custom CSS -->
      <link rel="stylesheet" href="css/abcd.css">
    </head>
<body>
<div class="bgded overlay" style="background-image:url('images/demo/backgrounds/back.jpg');height: 749px;">



        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3><a href="gg2.php">Tollpay</a></h3>
                    <strong><a href="gg2.php"><img src="images/demo/transp.png" height="48px" width="60px" /></a></strong>
                </div>
                <form name="details" id="details" action="new.php" method="post">
                <ul class="list-unstyled components">
                    <li class="active">
                        <a href="#homeSubmenu" data-toggle="collapse">
                            <i class="glyphicon glyphicon-user"></i>
                            Logged In
                            <label><?php echo $_SESSION['username'];?></label>
                        </a>
                        
                    </li>
                    <li>
                        
                        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">
                            <i class="glyphicon glyphicon-warning-sign"></i>
                            Not Using Registered Vehicle?
                        </a>
                        <div class="collapse list-unstyled" id="pageSubmenu">
                            <label>Enter Vehicle License No</label>
                            <input id="noplate" type="text" name="newlno" style="color: black" value="<?php echo $_SESSION['lno'];?>">
                            
                        </div>
                    </li>
                    <li style="display: none;">
                    	<input type="text" id="101" name="typereu" style="color: black" />
                    	<input type="text" id="102" name="remcash" style="color: black" />
                    	<input type="text" id="103" name="notols" style="color: black" />
                    	<input type="text" id="104" name="source1" style="color: black" />
                    	<input type="text" id="105" name="dest1" style="color: black" />
                    	
                    </li>

                    <li>
                        
                        <a href="#typeofvehicle" data-toggle="collapse" aria-expanded="false" id="p123">
                            <i class="glyphicon glyphicon-info-sign"></i>
                            Type Of Vehicle
                        </a>
                        <ul class="collapse list-unstyled" id="typeofvehicle">
                            <li>SUV<input type="radio" name="type" id="suv1" value="suv" required="required"></li>
                            <li>LUV<input type="radio" name="type" id="luv1" value="luv" required="required"></li>
                            <li>Heavy<input type="radio" name="type" id="heavy1" value="heavy" required="required"></li>
                            
                        </ul>	
                    
                    </li>
                    
                </ul>
                <ul class="list-unstyled components">
                    <li>
                    <button id="myBtn" style="border: 0px;background-color: #191712;padding: 0px;width: 100%;    background-color: rgba(0,0,0,0);">
                        <a href="#" data-toggle="collapse">
                            <i class="glyphicon glyphicon-ok"></i>
                            <label>Done</label>
                        </a>
                        </button>
                        
                    </li>
                    <li>
                    	<button id="logoutt" style="border: 0px;background-color: #191712;padding: 0px;width: 100%;    background-color: rgba(0,0,0,0);">
                        <a href="#" data-toggle="collapse">
                            <i class="glyphicon glyphicon-off"></i>
                            <label>Logout</label>
                        </a>
                        </button>
                    </li>
                </ul>
                <ul type="none" id="personal">
                    <li><i class="glyphicon glyphicon-phone"><label><?php echo $_SESSION['mobile'];?></label></i></li>
                    <li><i class="glyphicon glyphicon-envelope"><label><?php echo $_SESSION['email'];?></label></i></li>
                    <li><i class="glyphicon glyphicon-euro"><label id="wallet"><?php echo $_SESSION['cash'];?></label></i></li>
                </ul>

                
            </form>
            </nav>

            <!-- Page Content Holder -->
            <div id="content">

                <nav class="navbar navbar-default">
                    <div class="container-fluid">

                        <div class="navbar-header">
                            <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                                <i class="glyphicon glyphicon-align-left"></i>
                                <span>Travel Details</span>
                            </button>
                            
                        </div>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <form id="form">
								<input id="from" placeholder="Enter an origin location" list="locs" class="controls" style="color:white"/>
								<input id="to" placeholder="Enter a destination location" list="locs" class="controls" style="color:white"/>


								<datalist id="locs">
										<option value="Andheri">
										<option value="August Kranti Mg">
										<option value="Ballard Estate">
										<option value="Bandra">
										<option value="Bhandup">
										<option value="Bhulabai Desai Road">
										<option value="Borivali">
										<option value="Breach Candy">
										<option value="Byculla">
										<option value="Chinch Bunder">
										<option value="Colaba">
										<option value="Council Hall">
										<option value="Cotton Green">
										<option value="Crawford Market">
										<option value="Cumballa Hill">
										<option value="CuffeParade">
										<option value="Chembur">
										<option value="Churchgate">
										<option value="Churni Road">
										<option value="Dadar">
										<option value="Dahisar">
										<option value="Dharavi">
										<option value="Delisle Road">
										<option value="Deonar">
										<option value="Dongri">
										<option value="Elphinston Road">
										<option value=" Fertilizer Colony">
										<option value="Ferry Wharf">
										<option value="Flora Fountain">
										<option value="Fort">
										<option value="Gamdevi">
										<option value="Girgaum">
										<option value="Grant Road">
										<option value="Goregaon">
										<option value="Ghatkopar">
										<option value="Gorai">
										<option value="Haji Ali">
										<option value="Hutatma Chowk">
										<option value="IIT Powai">
										<option value="Jecob Circle">
										<option value="Jogeshwari">
										<option value="Juhu Scheme">
										<option value="Kalbadevi">
										<option value="Kala Ghoda">
										<option value="Kandivali">
										<option value="Khar">
										<option value="King's Circle">
										<option value="Kurla">
										<option value="Lower Parel">
										<option value="M Gandhi Road">
										<option value="Madam Cama Road">
										<option value="Mandavi">
										<option value="Malabar Hill">
										<option value="Mazgaon">
										<option value="Mahim">
										<option value="Malabar Hill">
										<option value="Matunga">
										<option value="Marine Lines">
										<option value="Marine Drive">
										<option value="Malad">
										<option value="Mulund">
										<option value="Mahalakshmi Temple">
										<option value="Mantralaya">
										<option value="Mumbai">
										<option value="Napean Sea Road">
										<option value="Nariman Point">
										<option value="Opera House">
										<option value="Parel">
										<option value="Prabhadevi">
										<option value="Peddar Road">
										<option value="Saki Naka">
										<option value="Sahar">
										<option value="Santacruz">
										<option value="SEEPZ">
										<option value="Sewri">
										<option value="Sion">
										<option value="Tardeo">
										<option value="Trombay">
										<option value="Turbhe">
										<option value="Vashi">
										<option value="Versova">
										<option value="Vile Parle">
										<option value="Vidya Vihar">
										<option value="Vihar Lake">
										<option value="Vikhroli">
										<option value="Wadala">
										<option value="Warden Road">
										<option value="Worli">
										<option value="Yogakshema">
								</datalist>
								<input id="subbut" type="submit" value="GO" style="color:white;background-color:rgba(142,206,121,0.9);"/>
							</form>
							<!-- <button id="myBtn">Pay</button> -->
    
							
                        </div>

                        
                    </div>
                    
                </nav>

                
            </div>
			<div id="map"></div>
        </div>





        
   
	 <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
         <!-- Bootstrap Js CDN -->
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    
		
		
    <script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyC5iMFnTYsYW7M2aqv6mtJCa9hQDAQ1WjA&libraries=geometry"></script>
    <script>
        var map;
        var directionsService;
        var polylines = [];
        var shadows = [];
        var data = [];
        var infowindow;
		var markers=[];
		var uramt = document.getElementById('wallet').innerHTML;
        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
				mapTypeControl: false,
                center: {lat: 19.0760, lng: 72.8777},
                zoom: 13,
            });
			var myLatLng = {lat: 19.257051,  lng: 72.871220};
			markers[0] = new google.maps.Marker({
          position: myLatLng,
          icon: 'http://www.google.com/mapfiles/marker.png',
		  map: map,
		  //visible: false,
          title: 'Dahisar Toll Naka'
        });
		var myLatLng = {lat: 19.1691, lng: 72.9668};
			markers[1] = new google.maps.Marker({
          position: myLatLng,
          icon: 'http://www.google.com/mapfiles/marker.png',
          map: map,
		  //visible: false,
          title: 'Mulund Toll Naka Eastern Express Highway'
        });
		var myLatLng = {lat: 19.0965, lng: 73.0725};
			markers[2] = new google.maps.Marker({
          position: myLatLng,
          icon: 'http://www.google.com/mapfiles/marker.png',
          map: map,
		  //visible: false,
          title: 'IRB Toll Naka'
        });
		
		var myLatLng = {lat: 18.8010823, lng: 73.2854508};
			markers[3] = new google.maps.Marker({
          position: myLatLng,
          icon: 'http://www.google.com/mapfiles/marker.png',
          map: map,
		  //visible: false,
          title: 'Khalapur Toll Gate - Mumbai Pune Expressway'
        });
		var myLatLng = {lat: 19.282579,   lng: 72.906918};
			markers[4] = new google.maps.Marker({
          position: myLatLng,
          icon: 'http://www.google.com/mapfiles/marker.png',
          map: map,
		  //visible: false,
          title: 'Ghodbandar Toll Gate'
        });
		var myLatLng = {lat: 19.212337,  lng: 73.006999};
			markers[5] = new google.maps.Marker({
          position: myLatLng,
          icon: 'http://www.google.com/mapfiles/marker.png',
          map: map,
		  //visible: false,
          title: 'Thane Parsik Tunnel Toll Plaza'
        });
		var myLatLng = {lat: 19.043400,  lng: 72.824614};
			markers[6] = new google.maps.Marker({
          position: myLatLng,
          icon: 'http://www.google.com/mapfiles/marker.png',
          map: map,
		  visible: false,
          title: 'Vashi Toll Naka'
        });
		var myLatLng = {lat: 19.037393,  lng: 73.078437};
			markers[7] = new google.maps.Marker({
          position: myLatLng,
          icon: 'http://www.google.com/mapfiles/marker.png',
          map: map,
		  //visible: false,
          title: 'Kharghar Toll Booth'
        });		
		var myLatLng = {lat: 19.15375, lng: 72.9627523};
			markers[8] = new google.maps.Marker({
          position: myLatLng,
          icon: 'http://www.google.com/mapfiles/marker.png',
          map: map,
		  //visible: false,
          title: 'Mulund Airoli Bridge Octroi Plaza'
        });
		var myLatLng = {lat: 19.185000,  lng: 72.955240};
			markers[9] = new google.maps.Marker({
          position: myLatLng,
          icon: 'http://www.google.com/mapfiles/marker.png',
          map: map,
		  //visible: false,
          title: 'Mulund LBS Toll Plaza'
        });
		var myLatLng = {lat: 19.186088,  lng: 72.991319};
			markers[10] = new google.maps.Marker({
          position: myLatLng,
          icon: 'http://www.google.com/mapfiles/marker.png',
          map: map,
		  //visible: false,
          title: 'Vitawa Octroi Check Post'
        });
		var cost = 0;
		var a=[];
		a[0] = 0;
		a[1] = 0;
		a[2] = 0;
		a[3] = 0;
		a[4] = 0;
		a[5] = 0;
		a[6] = 0;
		a[7] = 0;
		a[8] = 0;
		a[9] = 0;
		a[10] = 0;
		var count = 0;
		google.maps.event.addListener(markers[0], 'click', function() {
			if(a[0] == 0){
				a[0] = 1;
				markers[0].setIcon('https://www.google.com/mapfiles/marker_yellow.png');
				count++;
			}else{
				a[0] = 0;
				markers[0].setIcon('http://www.google.com/mapfiles/marker.png');
				count--;
			}
		});
		google.maps.event.addListener(markers[1], 'click', function() {
            if(a[1] == 0){
				a[1] = 1;
				markers[1].setIcon('https://www.google.com/mapfiles/marker_yellow.png');
				count++;
			}else{
				a[1] = 0;
				markers[1].setIcon('http://www.google.com/mapfiles/marker.png');
				count--;
			}
		});
		google.maps.event.addListener(markers[2], 'click', function() {
            if(a[2] == 0){
				a[2] = 1;
				markers[2].setIcon('https://www.google.com/mapfiles/marker_yellow.png');
				count++;
			}else{
				a[2] = 0;
				markers[2].setIcon('http://www.google.com/mapfiles/marker.png');
				count--;
			}
		});
		google.maps.event.addListener(markers[3], 'click', function() {
            if(a[3] == 0){
				a[3] = 1;
				markers[3].setIcon('https://www.google.com/mapfiles/marker_yellow.png');
				count++;
			}else{
				a[3] = 0;
				markers[3].setIcon('http://www.google.com/mapfiles/marker.png');
				count--;
			}
		});
		google.maps.event.addListener(markers[4], 'click', function() {
            if(a[4] == 0){
				a[4] = 1;
				markers[4].setIcon('https://www.google.com/mapfiles/marker_yellow.png');
				count++;
			}else{
				a[4] = 0;
				markers[4].setIcon('http://www.google.com/mapfiles/marker.png');
				count--;
			}
		});
		google.maps.event.addListener(markers[5], 'click', function() {
            if(a[5] == 0){
				a[5] = 1;
				markers[5].setIcon('https://www.google.com/mapfiles/marker_yellow.png');
				count++;
			}else{
				a[5] = 0;
				markers[5].setIcon('http://www.google.com/mapfiles/marker.png');
				count--;
			}
		});
		google.maps.event.addListener(markers[6], 'click', function() {
            if(a[6] == 0){
				a[6] = 1;
				markers[6].setIcon('https://www.google.com/mapfiles/marker_yellow.png');
				count++;
			}else{
				a[6] = 0;
				markers[6].setIcon('http://www.google.com/mapfiles/marker.png');
				count--;
			}
		});
		google.maps.event.addListener(markers[7], 'click', function() {
            if(a[7] == 0){
				a[7] = 1;
				markers[7].setIcon('https://www.google.com/mapfiles/marker_yellow.png');
				count++;
			}else{
				a[7] = 0;
				markers[7].setIcon('http://www.google.com/mapfiles/marker.png');
				count--;
			}
		});
		google.maps.event.addListener(markers[8], 'click', function() {
            if(a[8] == 0){
				a[8] = 1;
				markers[8].setIcon('https://www.google.com/mapfiles/marker_yellow.png');
				count++;
			}else{
				a[8] = 0;
				markers[8].setIcon('http://www.google.com/mapfiles/marker.png');
				count--;
			}
		});
		google.maps.event.addListener(markers[9], 'click', function() {
            if(a[9] == 0){
				a[9] = 1;
				markers[9].setIcon('https://www.google.com/mapfiles/marker_yellow.png');
				count++;
			}else{
				a[9] = 0;
				markers[9].setIcon('http://www.google.com/mapfiles/marker.png');
				count--;
			}
		});		
		google.maps.event.addListener(markers[10], 'click', function() {
            if(a[10] == 0){
				a[10] = 1;
				markers[10].setIcon('https://www.google.com/mapfiles/marker_yellow.png');
				count++;
			}else{
				a[10] = 0;
				markers[10].setIcon('http://www.google.com/mapfiles/marker.png');
				count--;
			}
		});	
		
		
		document.getElementById("logoutt").addEventListener("click", loog);
		function loog() {
			location.href = 'logout.php';
		}
		
		

		var joker = 0;
		document.getElementById("myBtn").addEventListener("click", displayCost);
		function displayCost() {
			if ( document.getElementById('suv1').checked || document.getElementById('luv1').checked || document.getElementById('heavy1').checked ) {
			if(count>0){
				var val;
				var typeofvehicle;
				var vplateno;
				var src;
				var dest;


				if(document.getElementById('suv1').checked){
					val = 50;
					typeofvehicle = "suv";
				}
				else if (document.getElementById('luv1').checked) {
					val = 70;
					typeofvehicle = "luv";
				}
				else if (document.getElementById('heavy1').checked) {
					val = 100;
					typeofvehicle = "heavy";
				}
				vplateno = document.getElementById('noplate').value;
				cost = count*val;
				src = document.getElementById('from').value;
				dest = document.getElementById('to').value;
				if(uramt < cost){
					alert("You Do Not Have enough Money in Wallet");
				}

				else{
					uramt -= cost;
					console.log(count);
					console.log(uramt);
					console.log(typeofvehicle);
					console.log(vplateno);
					console.log(src);
					console.log(dest);
					document.getElementById('wallet').innerHTML = uramt;
					document.getElementById('101').value = typeofvehicle;
					document.getElementById('102').value = uramt;
					document.getElementById('103').value = count;
					document.getElementById('104').value = src;
					document.getElementById('105').value = dest;
					document.getElementById('details').submit();
				/*	$.ajax({
							type:"GET",
							url:'new.php',
							data :{ 'typev' : typeofvehicle, 'plates' : vplateno, 'remainingcash' : uramt, 'sourcep' : src, 'destinationp' : dest, 'notoll' : count },
							success:function(data){
							alert(data);
				}
			});*/
				/*location.href = 'new.php';*/	/*location.href = 'gg22.htm?name=' + document.getElementById('noplate').value;*/
					
				}
			}else{
				alert("Please, select a Toll");
			}
		}
		else{
			alert("Please, select Type of Vehicle");
			var jokerelement = document.getElementById("p123");
			jokerelement.classList.add("blinkit");
			joker = 1;
		}
		}

		document.getElementById("p123").addEventListener("click", jokercheck);
		function jokercheck() {
			if( joker == 1 )
			{
				var jokerelement = document.getElementById("p123");
				jokerelement.classList.remove("blinkit");
				joker = 0;
			}
		}



		var i = 0;
		//new google.maps.places.SearchBox(document.getElementById('from'));
        //new google.maps.places.SearchBox(document.getElementById('destination-input'));
            google.maps.event.addDomListener(document.getElementById('form'), 'submit', function(e) {
                calcRoute(
                    document.getElementById('from').value,
                    document.getElementById('to').value
                );
                // prevent the form from really submitting
				 for(i = 0; i < 11; i++){
						markers[i].setVisible(false);
						a[i]=0;
						count=0;
						markers[i].setIcon('http://www.google.com/mapfiles/marker.png');
					}
                e.preventDefault();
                return false;
            });
            directionsService = new google.maps.DirectionsService();
            // get the bounds of the polyline
            // http://stackoverflow.com/questions/3284808/getting-the-bounds-of-a-polyine-in-google-maps-api-v3
            google.maps.Polyline.prototype.getBounds = function(startBounds) {
				
				//console.log(startBounds);
                if(startBounds) {
					i=0;
                    var bounds = startBounds;
					//console.log(bounds);
					/*for(i = 0; i < 11; i++){
						if (bounds.contains(markers[i].position)) {
							// marker is within bounds
							console.log('true');
							markers[i].setVisible(true);
						}
					}*/
                }
                else {
                    var bounds = new google.maps.LatLngBounds();
					
					
                }
                this.getPath().forEach(function(item, index) {
                    bounds.extend(new google.maps.LatLng(item.lat(), item.lng()));
					//console.log(bounds.extend(new google.maps.LatLng(item.lat(), item.lng())));
                });
				console.log(bounds);
				for(i = 0; i < 11; i++){
						if (bounds.contains(markers[i].position)) {
							// marker is within bounds
							console.log('true');
							markers[i].setVisible(true);
						}
					}
                return bounds;
            };
        }
        // this function calculates multiple suggested routes.
        // We will draw 3 (broad stroke) suggested routs in grey.  These are broad to click on them easier.
        // We duplicate these routes with a thin, colored line; only route 0 is shown.
        function calcRoute(start, end) {
            var request = {
                origin: start,
                destination: end,
                provideRouteAlternatives: true,
                unitSystem: google.maps.UnitSystem.METRIC,
                travelMode: google.maps.TravelMode['DRIVING']
            };
			
            directionsService.route(request, function(response, status) {
                // clear former polylines
                for(var j in  polylines ) {
                    polylines[j].setMap(null);
                    shadows[j].setMap(null);
                }
				
                polylines = [];
                shadows = [];
                data = [];
                if (status == google.maps.DirectionsStatus.OK) {
					
                    var bounds = new google.maps.LatLngBounds();
                    for(var i in response.routes) {
                        // let's make the first suggestion highlighted;
                        var hide = (i==0 ? false : true);
                        var shadow = drawPolylineShadow(response.routes[i].overview_path, '#666666');
                        var line = drawPolyline(response.routes[i].overview_path, '#ff0f0f', hide);
                        polylines.push(line);
                        shadows.push(shadow);
                        // let's add some data for the infoWindow
                        data.push({
                            distance: response.routes[i].legs[0].distance,
                            duration: response.routes[i].legs[0].duration,
                            end_address: response.routes[i].legs[0].end_address,
                            start_address: response.routes[i].legs[0].start_address,
                            end_location: response.routes[i].legs[0].end_location,
                            start_location: response.routes[i].legs[0].start_location
                        });
						
                        bounds = line.getBounds(bounds);
                        google.maps.event.addListener(shadow, 'click', function(e) {
                            // detect which route was clicked on
                            var index = shadows.indexOf(this);
                            highlightRoute(index, e);
                        });

                    }
                    map.fitBounds(bounds);
                }
            });
			
        }
        // this makes one of the colored routes visible.
        function highlightRoute(index, e) {
            for(var j in  polylines ) {
                if(j==index) {
                    //var color = '#0000ff';
                    polylines[j].setMap(map);
                    // feel free to customise this string
                    var contentString =
                        '<span>'+ data[j].distance.text +'</span><br/>'+
                        '<span>'+ data[j].duration.text +'</span><br/>'+
                        '<span>route: '+ j +'</span><br/>'+
                        //'From: <span>'+ data[j].start_address +'</span><br/>'+
                        //'To: <span>'+ data[j].end_address +'</span><br/>'+
                        '';
                    if(e) {
                       var position = new google.maps.LatLng(e.latLng.lat(), e.latLng.lng());
                        // it may be needed to close the previous infoWindow
                        if(infowindow) {
                            infowindow.close();
                            infowindow = null;
                        }
                        /*infowindow = new google.maps.InfoWindow({
                            content: contentString,
                            position: position,
                            map: map
                        })*//*;*/
                        //infowindow.open(map, polylines[j]);
                    }
                }
                else {
                    polylines[j].setMap(null);
                }
            }
        }
        // returns a polyline.
        // if hide is set to true, the line is not put on the map
        function drawPolyline(path, color, hide) {
            var line = new google.maps.Polyline({
                path: path,
                strokeColor: color,
                strokeOpacity: 0.9,
                strokeWeight: 3
            });
            if(! hide) {
                line.setMap(map);
            }
            return line;
        }
        function drawPolylineShadow(path, color, hide) {
            var line = new google.maps.Polyline({
                path: path,
                strokeColor: color,
                strokeOpacity: 0.4,
                strokeWeight: 7
            });
            if(! hide) {
                line.setMap(map);
            }
            return line;
        }
        google.maps.event.addDomListener(window, 'load', initMap);
		
		
    </script>
	<!-- jQuery CDN -->
        

         <script type="text/javascript">
             $(document).ready(function () {
                 $('#sidebarCollapse').on('click', function () {
                     $('#sidebar').toggleClass('active');
                 });
             });
         </script>
</body>
</html> 