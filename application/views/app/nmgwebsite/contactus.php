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
 								"color": "#1d2c4d"
 							}
 							]
 						},
 						{
 							"elementType": "labels.text.fill",
 							"stylers": [
 							{
 								"color": "#8ec3b9"
 							}
 							]
 						},
 						{
 							"elementType": "labels.text.stroke",
 							"stylers": [
 							{
 								"color": "#1a3646"
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
 							"featureType": "administrative.country",
 							"elementType": "geometry.stroke",
 							"stylers": [
 							{
 								"color": "#4b6878"
 							}
 							]
 						},
 						{
 							"featureType": "administrative.land_parcel",
 							"elementType": "labels.text.fill",
 							"stylers": [
 							{
 								"color": "#64779e"
 							}
 							]
 						},
 						{
 							"featureType": "administrative.province",
 							"elementType": "geometry.stroke",
 							"stylers": [
 							{
 								"color": "#4b6878"
 							}
 							]
 						},
 						{
 							"featureType": "landscape.man_made",
 							"elementType": "geometry.stroke",
 							"stylers": [
 							{
 								"color": "#334e87"
 							}
 							]
 						},
 						{
 							"featureType": "landscape.natural",
 							"elementType": "geometry",
 							"stylers": [
 							{
 								"color": "#023e58"
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
 							"elementType": "geometry",
 							"stylers": [
 							{
 								"color": "#283d6a"
 							}
 							]
 						},
 						{
 							"featureType": "poi",
 							"elementType": "labels.text.fill",
 							"stylers": [
 							{
 								"color": "#6f9ba5"
 							}
 							]
 						},
 						{
 							"featureType": "poi",
 							"elementType": "labels.text.stroke",
 							"stylers": [
 							{
 								"color": "#1d2c4d"
 							}
 							]
 						},
 						{
 							"featureType": "poi.park",
 							"elementType": "geometry.fill",
 							"stylers": [
 							{
 								"color": "#023e58"
 							}
 							]
 						},
 						{
 							"featureType": "poi.park",
 							"elementType": "labels.text.fill",
 							"stylers": [
 							{
 								"color": "#3C7680"
 							}
 							]
 						},
 						{
 							"featureType": "road",
 							"elementType": "geometry",
 							"stylers": [
 							{
 								"color": "#304a7d"
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
 								"color": "#98a5be"
 							}
 							]
 						},
 						{
 							"featureType": "road",
 							"elementType": "labels.text.stroke",
 							"stylers": [
 							{
 								"color": "#1d2c4d"
 							}
 							]
 						},
 						{
 							"featureType": "road.highway",
 							"elementType": "geometry",
 							"stylers": [
 							{
 								"color": "#2c6675"
 							}
 							]
 						},
 						{
 							"featureType": "road.highway",
 							"elementType": "geometry.stroke",
 							"stylers": [
 							{
 								"color": "#255763"
 							}
 							]
 						},
 						{
 							"featureType": "road.highway",
 							"elementType": "labels.text.fill",
 							"stylers": [
 							{
 								"color": "#b0d5ce"
 							}
 							]
 						},
 						{
 							"featureType": "road.highway",
 							"elementType": "labels.text.stroke",
 							"stylers": [
 							{
 								"color": "#023e58"
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
 							"elementType": "labels.text.fill",
 							"stylers": [
 							{
 								"color": "#98a5be"
 							}
 							]
 						},
 						{
 							"featureType": "transit",
 							"elementType": "labels.text.stroke",
 							"stylers": [
 							{
 								"color": "#1d2c4d"
 							}
 							]
 						},
 						{
 							"featureType": "transit.line",
 							"elementType": "geometry.fill",
 							"stylers": [
 							{
 								"color": "#283d6a"
 							}
 							]
 						},
 						{
 							"featureType": "transit.station",
 							"elementType": "geometry",
 							"stylers": [
 							{
 								"color": "#3a4762"
 							}
 							]
 						},
 						{
 							"featureType": "water",
 							"elementType": "geometry",
 							"stylers": [
 							{
 								"color": "#0e1626"
 							}
 							]
 						},
 						{
 							"featureType": "water",
 							"elementType": "geometry.fill",
 							"stylers": [
 							{
 								"color": "#000000"
 							}
 							]
 						},
 						{
 							"featureType": "water",
 							"elementType": "labels.text.fill",
 							"stylers": [
 							{
 								"color": "#4e6d70"
 							}
 							]
 						}
 						]
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
							</select>
							<span class="labelscontact"><br><b>Message:</b><br></span>
							<textarea placeholder="Enter your message here...."></textarea>
							<button type="button" class="button" style="vertical-align:"><span>SUBMIT</span></button>
						</div>  
					</div>
				</div>
				<img src="<?php echo base_url("assets/img/logo.png")?>" class="map-logo">
			</div>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCaJmMd5Z4MFYGQrrWSqTZCswfsYRxVhxY&callback=initMap"async defer></script>
	</div>
</div>

