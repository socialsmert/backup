<div class="full-contacts noselect">
			<div id="map"></div>
		<div class="contacts" id="anim-mark">
			<div class="right-cont">
				<div class="backgr"></div>
				<div class="cont-text">
					<h1 id="cont-title">
						Contacts
					</h1>


					<div class="liner">
						<div class="add-left">
							<i class="fa fa-globe" aria-hidden="true"></i>
						</div>
						<div class="add-right">
							<h1>
								Ukraine
							</h1>
						</div>
					</div>

					<div class="liner">
						<div class="add-left">
							<i class="fa fa-pencil" aria-hidden="true"></i>
						</div>
						<div class="add-right">
							<h1>
								01024
							</h1>
						</div>
					</div>

					<div class="liner">
						<div class="add-left">
							<i class="fa fa-map-o" aria-hidden="true"></i>
						</div>
						<div class="add-right">
							<h1>
								Shchaslyve Lysenka st. 13
							</h1>
						</div>
					</div>



					<div class="liner">
						<div class="add-left">
							<i class="fa fa-mobile" aria-hidden="true"></i>
						</div>
						<div class="add-right">
							<h1>
								068 300 8585
							</h1>
						</div>
					</div>

					<div class="liner">
						<div class="add-left">
							<i class="fa fa-envelope-o" aria-hidden="true"></i>
						</div>
						<div class="add-right">
							<h1>
								pressarsenalkyiv@gmail.com
							</h1>
						</div>


					</div>
				</div>
			</div>
		</div>
		</div>	
		{literal}
		<script>
			
			function initMap() {
				var myLatLng =  {lat: 50.379459, lng: 30.792977};
				// Styles a map in night mode.
				var map = new google.maps.Map(document.getElementById('map'), {
					center: myLatLng,
					zoom: 15,
					styles: [
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
				marker = new google.maps.Marker({
					icon: 'http://maps.google.com/mapfiles/ms/icons/red-dot.png',
					map: map,
					draggable: true,
					animation: google.maps.Animation.DROP,
					position: myLatLng
				});

				marker.addListener('click', toggleBounce);
				document.getElementById('map').addEventListener('click',toggleBounce);

			}

			function toggleBounce() {
				if (marker.getAnimation() !== null) {
					marker.setAnimation(null);
				} else {
					marker.setAnimation(google.maps.Animation.BOUNCE);
				}
				
			}

		</script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDOTT_o4S1YGudkPn2a7XEYtG1dzxojeeU&callback=initMap"async defer></script>
		{/literal}