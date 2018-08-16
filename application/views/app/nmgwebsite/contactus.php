 <div id="contactus">
 	<div id="wrapper">
 		<div id="map"></div>
 		<script>
 			function initMap() {
 				var map = new google.maps.Map(document.getElementById('map'), {
 					center: {lat: 14.56285768, lng: 121.01026079},
 					zoom: 17,
 					styles:
                    [
                    {
                        "elementType": "geometry",
                        "stylers": [
                        {
                            "color": "#ebe3cd"
                        }
                        ]
                    },
                    {
                        "elementType": "labels.text.fill",
                        "stylers": [
                        {
                            "color": "#523735"
                        }
                        ]
                    },
                    {
                        "elementType": "labels.text.stroke",
                        "stylers": [
                        {
                            "color": "#f5f1e6"
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
                        "featureType": "administrative",
                        "elementType": "geometry.stroke",
                        "stylers": [
                        {
                            "color": "#c9b2a6"
                        }
                        ]
                    },
                    {
                        "featureType": "administrative.land_parcel",
                        "elementType": "geometry.stroke",
                        "stylers": [
                        {
                            "color": "#dcd2be"
                        }
                        ]
                    },
                    {
                        "featureType": "administrative.land_parcel",
                        "elementType": "labels.text.fill",
                        "stylers": [
                        {
                            "color": "#ae9e90"
                        }
                        ]
                    },
                    {
                        "featureType": "landscape.natural",
                        "elementType": "geometry",
                        "stylers": [
                        {
                            "color": "#dfd2ae"
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
                            "color": "#dfd2ae"
                        }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "labels.text.fill",
                        "stylers": [
                        {
                            "color": "#93817c"
                        }
                        ]
                    },
                    {
                        "featureType": "poi.park",
                        "elementType": "geometry.fill",
                        "stylers": [
                        {
                            "color": "#a5b076"
                        }
                        ]
                    },
                    {
                        "featureType": "poi.park",
                        "elementType": "labels.text.fill",
                        "stylers": [
                        {
                            "color": "#447530"
                        }
                        ]
                    },
                    {
                        "featureType": "road",
                        "elementType": "geometry",
                        "stylers": [
                        {
                            "color": "#f5f1e6"
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
                        "featureType": "road.arterial",
                        "elementType": "geometry",
                        "stylers": [
                        {
                            "color": "#fdfcf8"
                        }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry",
                        "stylers": [
                        {
                            "color": "#f8c967"
                        }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry.stroke",
                        "stylers": [
                        {
                            "color": "#e9bc62"
                        }
                        ]
                    },
                    {
                        "featureType": "road.highway.controlled_access",
                        "elementType": "geometry",
                        "stylers": [
                        {
                            "color": "#e98d58"
                        }
                        ]
                    },
                    {
                        "featureType": "road.highway.controlled_access",
                        "elementType": "geometry.stroke",
                        "stylers": [
                        {
                            "color": "#db8555"
                        }
                        ]
                    },
                    {
                        "featureType": "road.local",
                        "elementType": "labels.text.fill",
                        "stylers": [
                        {
                            "color": "#806b63"
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
                        "featureType": "transit.line",
                        "elementType": "geometry",
                        "stylers": [
                        {
                            "color": "#dfd2ae"
                        }
                        ]
                    },
                    {
                        "featureType": "transit.line",
                        "elementType": "labels.text.fill",
                        "stylers": [
                        {
                            "color": "#8f7d77"
                        }
                        ]
                    },
                    {
                        "featureType": "transit.line",
                        "elementType": "labels.text.stroke",
                        "stylers": [
                        {
                            "color": "#ebe3cd"
                        }
                        ]
                    },
                    {
                        "featureType": "transit.station",
                        "elementType": "geometry",
                        "stylers": [
                        {
                            "color": "#dfd2ae"
                        }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "geometry.fill",
                        "stylers": [
                        {
                            "color": "#b9d3c2"
                        }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "labels.text.fill",
                        "stylers": [
                        {
                            "color": "#92998d"
                        }
                        ]
                    }
                    ]
 				});
 				var icon = {
 					url: "<?php echo base_url("assets/img/logo.png")?>", 
    					scaledSize: new google.maps.Size(60, 60), // scaled size
    			};

    			var marker = new google.maps.Marker({
    				position: new google.maps.LatLng(14.56256433, 121.01300418),
    				map: map,
    				icon: icon
    			});

    			var contentString = '<div id="content">'+
            		'<div id="siteNotice">'+
            		'</div>'+
            		'<h1 id="firstHeading" class="firstHeading">NMGResources Inc.</h1>'+
            		'<div id="bodyContent">'+
            		'<p><b>Address: </b>  Great Wall Advertising Building Yakal St, San Antonio Makati City, Metro Manila, Philippines.</p> ' +
            		'<p><b>E-mail: </b>  info@nmgresources.ph</p> '+
            		'<p><b>Telephone Number: </b>  (02) 576 6505</p> '+
            		'<p><b>Office Hours: </b> 10:00 AM to 7:00 PM (Monday to Friday) '+
            		'</div>'+
            		'</div>';

        		var infowindow = new google.maps.InfoWindow({
          			content: contentString
        		});

        
       			 marker.addListener('click', function() {
          			infowindow.open(map, marker);
        		});


				}
    		</script>
    		<div id="over_map">
    			<div class="row">
    				<div class="container">	
                        <div class="transbox-1">			
    						<h2 class="head">Connect with us</h2>
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
    						<button type="button" class="button-submit"><span>SUBMIT</span></button><br>
    					</div>
                        <div class="transbox-2">          
                            <div class="wrap">
                                <a target="_blank" href="your_url_here"><i class="fa fa-2x fa-envelope"></i></a>
                                <a target="_blank" href="your_url_here"><i class="fa fa-2x fa-facebook-square"></i></a>
                                <a target="_blank" href="your_url_here"><i class="fa fa-2x fab fa-linkedin"></i>
                            </div></a>
                        </div>  
    			</div>
    		</div>
    	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCaJmMd5Z4MFYGQrrWSqTZCswfsYRxVhxY&callback=initMap"async defer></script>
    </div>
</div>

