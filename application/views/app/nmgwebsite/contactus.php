 <div id="contactus">
 	<div id="wrapper">
 		<div id="map"></div>
 		<script>
 			function initMap() {
 				var map = new google.maps.Map(document.getElementById('map'), {
 					center: {lat: 14.56222425, lng: 121.01023933},
 					zoom: 17,
 					styles:[
 					{
 						"elementType": "geometry",
 						"stylers": [
 						{
 							"color": "#242f3e"
 						}
 						]
 					},
 					{
 						"elementType": "labels.text.fill",
 						"stylers": [
 						{
 							"color": "#746855"
 						}
 						]
 					},
 					{
 						"elementType": "labels.text.stroke",
 						"stylers": [
 						{
 							"color": "#242f3e"
 						}
 						]
 					},
 					{
 						"featureType": "administrative",
 						"elementType": "geometry",
 						"stylers": [
 						{
 							"visibility": "off"
 						}
 						]
 					},
 					{
 						"featureType": "administrative.locality",
 						"elementType": "labels.text.fill",
 						"stylers": [
 						{
 							"color": "#d59563"
 						}
 						]
 					},
 					{
 						"featureType": "poi",
 						"stylers": [
 						{
 							"visibility": "off"
 						}
 						]
 					},
 					{
 						"featureType": "poi",
 						"elementType": "labels.text.fill",
 						"stylers": [
 						{
 							"color": "#d59563"
 						}
 						]
 					},
 					{
 						"featureType": "poi.park",
 						"elementType": "geometry",
 						"stylers": [
 						{
 							"color": "#263c3f"
 						}
 						]
 					},
 					{
 						"featureType": "poi.park",
 						"elementType": "labels.text.fill",
 						"stylers": [
 						{
 							"color": "#6b9a76"
 						}
 						]
 					},
 					{
 						"featureType": "road",
 						"elementType": "geometry",
 						"stylers": [
 						{
 							"color": "#38414e"
 						}
 						]
 					},
 					{
 						"featureType": "road",
 						"elementType": "geometry.stroke",
 						"stylers": [
 						{
 							"color": "#212a37"
 						}
 						]
 					},
 					{
 						"featureType": "road",
 						"elementType": "labels.icon",
 						"stylers": [
 						{
 							"visibility": "off"
 						}
 						]
 					},
 					{
 						"featureType": "road",
 						"elementType": "labels.text.fill",
 						"stylers": [
 						{
 							"color": "#9ca5b3"
 						}
 						]
 					},
 					{
 						"featureType": "road.highway",
 						"elementType": "geometry",
 						"stylers": [
 						{
 							"color": "#746855"
 						}
 						]
 					},
 					{
 						"featureType": "road.highway",
 						"elementType": "geometry.stroke",
 						"stylers": [
 						{
 							"color": "#1f2835"
 						}
 						]
 					},
 					{
 						"featureType": "road.highway",
 						"elementType": "labels.text.fill",
 						"stylers": [
 						{
 							"color": "#f3d19c"
 						}
 						]
 					},
 					{
 						"featureType": "transit",
 						"stylers": [
 						{
 							"visibility": "off"
 						}
 						]
 					},
 					{
 						"featureType": "transit",
 						"elementType": "geometry",
 						"stylers": [
 						{
 							"color": "#2f3948"
 						}
 						]
 					},
 					{
 						"featureType": "transit.station",
 						"elementType": "labels.text.fill",
 						"stylers": [
 						{
 							"color": "#d59563"
 						}
 						]
 					},
 					{
 						"featureType": "water",
 						"elementType": "geometry",
 						"stylers": [
 						{
 							"color": "#17263c"
 						}
 						]
 					},
 					{
 						"featureType": "water",
 						"elementType": "labels.text.fill",
 						"stylers": [
 						{
 							"color": "#515c6d"
 						}
 						]
 					},
 					{
 						"featureType": "water",
 						"elementType": "labels.text.stroke",
 						"stylers": [
 						{
 							"color": "#17263c"
 						}
 						]
 					}
 					]
 				});
 				var icon = {
 					url: "<?php echo base_url("assets/img/logo.png")?>", 
    					scaledSize: new google.maps.Size(50, 50), // scaled size
    				};

    				var marker = new google.maps.Marker({
    					position: new google.maps.LatLng(14.56256433, 121.01300418),
    					map: map,
    					icon: icon
    				});
    			}
    		</script>
    		<div id="over_map">
    			<div class="row">
    				<div class="container">
    					<div class="col-lg-7">				
    						<h2 class="head">Connect with us?</h2>
    						<span class="labelscontact"><b>Name:</b></span>
    						<input type="text" placeholder="Your name" class="name">
    						<span class="labelscontact"><br><b>Email:</b></span>
    						<input type="email" placeholder="thisisyou@example.com" class="email">
    						<span class="labelscontact"><br><b>Subject:</b></span>
    						<select class="option">
    							<option> -select subject- </option>
    							<option> General Inquiry </option>
    							<option> Request a Proposal </option>
    							<option> Internship </option>
    							<option> Job Application </option>
    							<option> Feedback/Report </option>
    							<option> Others </option>
    						</select>
    						<span class="labelscontact"><br><b>Message:</b><br></span>
    						<textarea placeholder="Enter your message here...."></textarea>
    						<button type="button" class="button" style="vertical-align:"><span>SUBMIT</span></button>
    					</div>  
    				</div>
    			</div>
    		</div>
    	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCaJmMd5Z4MFYGQrrWSqTZCswfsYRxVhxY&callback=initMap"async defer></script>
    </div>
</div>

