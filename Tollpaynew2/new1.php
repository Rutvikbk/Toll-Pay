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
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Collapsible sidebar using Bootstrap 3</title>

         <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
                <!-- Our Custom CSS -->
        <link rel="stylesheet" href="css/new1.css">
         <style>
    #map {
            height:80%;
            position: absolute;
            width: 100%;
            top: 0px;
            left:0px;
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
      #to,
      #subbut {
        background-color: #fff;
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        margin-left: 12px;
        padding: 0 11px 0 13px;
        text-overflow: ellipsis;
        width: 200px;
      }

      #from:focus,
      #to:focus
      #subbut:focus{
        border-color: #4d90fe;
      }
    </style>
    </head>
    <body>
        <div class="bgded overlay" style="background-image:url('images/demo/backgrounds/back.jpg');height: 749px;">



        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3>Tollpay</h3>
                    <strong><img src="images/demo/transp.png" height="48px" width="60px" /></strong>
                </div>
                <form>
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
                            <input type="text" name="newlno" style="color: black" value="<?php echo $_SESSION['lno'];?>">
                            
                        </div>
                    </li>

                    <li>
                        
                        <a href="#typeofvehicle" data-toggle="collapse" aria-expanded="false">
                            <i class="glyphicon glyphicon-info-sign"></i>
                            Type Of Vehicle
                        </a>
                        <ul class="collapse list-unstyled" id="typeofvehicle">
                            <li>SUV<input type="radio" name="type" value="suv"></li>
                            <li>LUV<input type="radio" name="type" value="luv"></li>
                            <li>Heavy   <input type="radio" name="type" value="heavy"></li>
                            
                        </ul>
                    </li>
                    
                </ul>
                <ul class="list-unstyled components">
                    <li>
                        <a href="#homeSubmenu" data-toggle="collapse">
                            <i class="glyphicon glyphicon-ok"></i>
                            <label>Done</label>
                        </a>
                        
                    </li>
                    <li>
                        <a href="#homeSubmenu" data-toggle="collapse">
                            <i class="glyphicon glyphicon-lock"></i>
                            <label>Logout</label>
                        </a>
                        
                    </li>
                </ul>
                <ul type="none" id="personal">
                    <li><i class="glyphicon glyphicon-phone"><label><?php echo $_SESSION['mobile'];?></label></i></li>
                    <li><i class="glyphicon glyphicon-envelope"><label><?php echo $_SESSION['email'];?></label></i></li>
                    <li><i class="glyphicon glyphicon-euro"><label><?php echo $_SESSION['cash'];?></label></i></li>
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
                            <ul class="nav navbar-nav navbar-right">
                                <li><label>Source</label></li>
                                <li><input type="text" name="from" id="from" /></li>
                                <li><label>Destination</label></li>
                                <li><input type="text" name="to" id="to" /></li>
                                <li><button type="submit" name="subbut" id="subbut" style="background: #84cc6d; border-radius: 8px;">Go</button></li>
                            </ul>
                        </form>
                        </div>

                        
                    </div>
                    
                </nav>

                
            </div>
            <div id="map"><i class="glyphicon glyphicon-align-left"></i></div>
        </div>



        <script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyC5iMFnTYsYW7M2aqv6mtJCa9hQDAQ1WjA&libraries=geometry"></script>
    <script>
        var map;
        var directionsService;
        var polylines = [];
        var shadows = [];
        var data = [];
        var infowindow;
        var markers=[];
        var uramt = 300;
        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
                mapTypeControl: false,
                center: {lat: 50.84659376378408, lng: 4.3531406857355215},
                zoom: 13,
            });
            var myLatLng = {lat: 19.2567, lng: 72.8714};
            markers[0] = new google.maps.Marker({
          position: myLatLng,
          icon: 'http://www.google.com/mapfiles/marker.png',
          map: map,
          title: 'Dahisar Toll Naka'
        });
        var myLatLng = {lat: 19.1691, lng: 72.9668};
            markers[1] = new google.maps.Marker({
          position: myLatLng,
          icon: 'http://www.google.com/mapfiles/marker.png',
          map: map,
          title: 'Mulund Toll Naka Eastern Express Highway'
        });
        var myLatLng = {lat: 19.0965, lng: 73.0725};
            markers[2] = new google.maps.Marker({
          position: myLatLng,
          icon: 'http://www.google.com/mapfiles/marker.png',
          map: map,
          title: 'IRB Toll Naka'
        });
        
        var myLatLng = {lat: 18.8010854, lng: 73.2831967};
            markers[3] = new google.maps.Marker({
          position: myLatLng,
          icon: 'http://www.google.com/mapfiles/marker.png',
          map: map,
          title: 'Khalapur Toll Gate - Mumbai Pune Expressway'
        });
        var myLatLng = {lat: 19.2825858, lng: 72.9058173};
            markers[4] = new google.maps.Marker({
          position: myLatLng,
          icon: 'http://www.google.com/mapfiles/marker.png',
          map: map,
          title: 'Ghodbandar Toll Gate'
        });
        var myLatLng = {lat: 19.2114212, lng: 73.0074918};
            markers[5] = new google.maps.Marker({
          position: myLatLng,
          icon: 'http://www.google.com/mapfiles/marker.png',
          map: map,
          title: 'Thane Parsik Tunnel Toll Plaza'
        });
        var myLatLng = {lat: 19.0433857, lng: 72.8224367};
            markers[6] = new google.maps.Marker({
          position: myLatLng,
          icon: 'http://www.google.com/mapfiles/marker.png',
          map: map,
          title: 'Vashi Toll Naka'
        });
        var myLatLng = {lat: 19.0373452, lng: 73.0772406};
            markers[7] = new google.maps.Marker({
          position: myLatLng,
          icon: 'http://www.google.com/mapfiles/marker.png',
          map: map,
          title: 'Kharghar Toll Booth'
        });     
        var myLatLng = {lat: 19.15375, lng: 72.9627523};
            markers[8] = new google.maps.Marker({
          position: myLatLng,
          icon: 'http://www.google.com/mapfiles/marker.png',
          map: map,
          title: 'Mulund Airoli Bridge Octroi Plaza'
        });
        var myLatLng = {lat: 19.1850067, lng: 72.9530607};
            markers[9] = new google.maps.Marker({
          position: myLatLng,
          icon: 'http://www.google.com/mapfiles/marker.png',
          map: map,
          title: 'Mulund LBS Toll Plaza'
        });
        var myLatLng = {lat: 19.1858558, lng: 72.9916431};
            markers[10] = new google.maps.Marker({
          position: myLatLng,
          icon: 'http://www.google.com/mapfiles/marker.png',
          map: map,
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
                console.log(cost += 50);
                a[0] = 1;
                markers[0].setIcon('https://www.google.com/mapfiles/marker_yellow.png');
                count++;
            }else{
                console.log(cost -= 50);
                a[0] = 0;
                markers[0].setIcon('http://www.google.com/mapfiles/marker.png');
                count--;
            }
        });
        google.maps.event.addListener(markers[1], 'click', function() {
            if(a[1] == 0){
                console.log(cost += 50);
                a[1] = 1;
                markers[1].setIcon('https://www.google.com/mapfiles/marker_yellow.png');
                count++;
            }else{
                console.log(cost -= 50);
                a[1] = 0;
                markers[1].setIcon('http://www.google.com/mapfiles/marker.png');
                count--;
            }
        });
        google.maps.event.addListener(markers[2], 'click', function() {
            if(a[2] == 0){
                console.log(cost += 50);
                a[2] = 1;
                markers[2].setIcon('https://www.google.com/mapfiles/marker_yellow.png');
                count++;
            }else{
                console.log(cost -= 50);
                a[2] = 0;
                markers[2].setIcon('http://www.google.com/mapfiles/marker.png');
                count--;
            }
        });
        google.maps.event.addListener(markers[3], 'click', function() {
            if(a[3] == 0){
                console.log(cost += 50);
                a[3] = 1;
                markers[3].setIcon('https://www.google.com/mapfiles/marker_yellow.png');
                count++;
            }else{
                console.log(cost -= 50);
                a[3] = 0;
                markers[3].setIcon('http://www.google.com/mapfiles/marker.png');
                count--;
            }
        });
        google.maps.event.addListener(markers[4], 'click', function() {
            if(a[4] == 0){
                console.log(cost += 50);
                a[4] = 1;
                markers[4].setIcon('https://www.google.com/mapfiles/marker_yellow.png');
                count++;
            }else{
                console.log(cost -= 50);
                a[4] = 0;
                markers[4].setIcon('http://www.google.com/mapfiles/marker.png');
                count--;
            }
        });
        google.maps.event.addListener(markers[5], 'click', function() {
            if(a[5] == 0){
                console.log(cost += 50);
                a[5] = 1;
                markers[5].setIcon('https://www.google.com/mapfiles/marker_yellow.png');
                count++;
            }else{
                console.log(cost -= 50);
                a[5] = 0;
                markers[5].setIcon('http://www.google.com/mapfiles/marker.png');
                count--;
            }
        });
        google.maps.event.addListener(markers[6], 'click', function() {
            if(a[6] == 0){
                console.log(cost += 50);
                a[6] = 1;
                markers[6].setIcon('https://www.google.com/mapfiles/marker_yellow.png');
                count++;
            }else{
                console.log(cost -= 50);
                a[6] = 0;
                markers[6].setIcon('http://www.google.com/mapfiles/marker.png');
                count--;
            }
        });
        google.maps.event.addListener(markers[7], 'click', function() {
            if(a[7] == 0){
                console.log(cost += 50);
                a[7] = 1;
                markers[7].setIcon('https://www.google.com/mapfiles/marker_yellow.png');
                count++;
            }else{
                console.log(cost -= 50);
                a[7] = 0;
                markers[7].setIcon('http://www.google.com/mapfiles/marker.png');
                count--;
            }
        });
        google.maps.event.addListener(markers[8], 'click', function() {
            if(a[8] == 0){
                console.log(cost += 50);
                a[8] = 1;
                markers[8].setIcon('https://www.google.com/mapfiles/marker_yellow.png');
                count++;
            }else{
                console.log(cost -= 50);
                a[8] = 0;
                markers[8].setIcon('http://www.google.com/mapfiles/marker.png');
                count--;
            }
        });
        google.maps.event.addListener(markers[9], 'click', function() {
            if(a[9] == 0){
                console.log(cost += 50);
                a[9] = 1;
                markers[9].setIcon('https://www.google.com/mapfiles/marker_yellow.png');
                count++;
            }else{
                console.log(cost -= 50);
                a[9] = 0;
                markers[9].setIcon('http://www.google.com/mapfiles/marker.png');
                count--;
            }
        });     
        google.maps.event.addListener(markers[10], 'click', function() {
            if(a[10] == 0){
                console.log(cost += 50);
                a[10] = 1;
                markers[10].setIcon('https://www.google.com/mapfiles/marker_yellow.png');
                count++;
            }else{
                console.log(cost -= 50);
                a[10] = 0;
                markers[10].setIcon('http://www.google.com/mapfiles/marker.png');
                count--;
            }
        }); 
        
        document.getElementById("myBtn").addEventListener("click", displayCost);
        function displayCost() {
            if(count>0){
                if(uramt < cost){
                    alert("Sorry");
                }else{
                    uramt -= cost;
                    console.log(uramt);
                    location.href = 'gg22.htm?name=' + document.getElementById('to').value;
                    
                }
            }else{
                alert("Please, select a Toll");
            }
        }
        //new google.maps.places.SearchBox(document.getElementById('from'));
        //new google.maps.places.SearchBox(document.getElementById('destination-input'));
            google.maps.event.addDomListener(document.getElementById('form'), 'submit', function(e) {
                calcRoute(
                    document.getElementById('from').value,
                    document.getElementById('to').value
                );
                // prevent the form from really submitting
                e.preventDefault();
                return false;
            });
            directionsService = new google.maps.DirectionsService();
            // get the bounds of the polyline
            // http://stackoverflow.com/questions/3284808/getting-the-bounds-of-a-polyine-in-google-maps-api-v3
            google.maps.Polyline.prototype.getBounds = function(startBounds) {
                if(startBounds) {
                    var bounds = startBounds;
                }
                else {
                    var bounds = new google.maps.LatLngBounds();
                }
                this.getPath().forEach(function(item, index) {
                    bounds.extend(new google.maps.LatLng(item.lat(), item.lng()));

                });
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
                        infowindow = new google.maps.InfoWindow({
                            content: contentString,
                            position: position,
                            map: map
                        });
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
         <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
         <!-- Bootstrap Js CDN -->
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

         <script type="text/javascript">
             $(document).ready(function () {
                 $('#sidebarCollapse').on('click', function () {
                     $('#sidebar').toggleClass('active');
                 });
             });
         </script>
    </body>
</html>
<?php
    ob_end_flush();
?>