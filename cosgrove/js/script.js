

// Log Function
window.log=function(){log.history=log.history||[];log.history.push(arguments);if(this.console){arguments.callee=arguments.callee.caller;var a=[].slice.call(arguments);(typeof console.log==="object"?log.apply.call(console.log,console,a):console.log.apply(console,a))}};
(function(b){function c(){}for(var d="assert,count,debug,dir,dirxml,error,exception,group,groupCollapsed,groupEnd,info,log,timeStamp,profile,profileEnd,time,timeEnd,trace,warn".split(","),a;a=d.pop();){b[a]=b[a]||c}})((function(){try
{console.log();return window.console;}catch(err){return window.console={};}})());


(function($) { // jQuery Closure
  $(function(){ // Dom Ready shortcut

	// Lux portfolio
	if ( $('.isotope-element').length > 0 ) {

		$('.isotope-element img').jcaption({
			copyStyle: true,
			animate: true,
			show: {height: "show"},
			hide: {height: "hide"}
		});

	} 

		// Contact page map
		if ($("#map-canvas").length > 0) {
			
			  var styles = [
			  {
			    "featureType": "road",
			    "elementType": "geometry.stroke",
			    "stylers": [
			      { "hue": "#ff0000" },
			      { "saturation": -100 }
			    ]
			  },{
			    "featureType": "transit.station.bus",
			    "stylers": [
			      { "hue": "#ff0000" },
			      { "saturation": -100 }
			    ]
			  },{
			    "featureType": "poi.park",
			    "stylers": [
			      { "hue": "#ff0000" },
			      { "saturation": -100 },
			      { "lightness": -12 }
			    ]
			  },{
			    "featureType": "road.local",
			    "elementType": "geometry",
			    "stylers": [
			      { "hue": "#ff0000" },
			      { "invert_lightness": true },
			      { "lightness": 100 }
			    ]
			  },{
			    "featureType": "",
			    "elementType": "geometry.fill",
			    "stylers": [
			      { "hue": "#ff0000" },
			      { "saturation": -100 },
			      { "lightness": -3 }
			    ]
			  },{
			  },{
			    "featureType": "road",
			    "elementType": "labels.text.stroke",
			    "stylers": [
			      { "hue": "#ff0000" },
			      { "saturation": 1 },
			      { "lightness": -100 },
			      { "weight": 0.4 }
			    ]
			  },{
			    "featureType": "road.local",
			    "elementType": "geometry.stroke",
			    "stylers": [
			      { "lightness": -34 }
			    ]
			  },{
			  }
			]
			// #Map Styles

			// Create a new StyledMapType object, passing it the array of styles,
			// as well as the name to be displayed on the map type control.
			var styledMap = new google.maps.StyledMapType(styles,{name: "styledMap"});
            
			var myOptions = {
				zoom: 16,
				center: new google.maps.LatLng(51.043074,-114.084477),
				panControl: false,
				zoomControl: false,
				scaleControl: false,
				mapTypeControl: false,
				streetViewControl: false,
				overviewMapControl: false,
				navigationControl: false,
				scrollwheel: false,
				draggable: false,  // Disables map scrolling in tablets & mobile devices
				disableDefaultUI: true,
				mapTypeId: google.maps.MapTypeId.ROADMAP
			}
						
			var map = new google.maps.Map( document.getElementById( "map-canvas" ), myOptions );

			//Marker options
			var image = '/sites/all/themes/luxcommunications/images/icon-map-logo-sm.png';
			var myLatLng = new google.maps.LatLng(51.043074,-114.084477);
			var luxMarker = new google.maps.Marker({
			    position: myLatLng,
			    map: map,
			    animation: google.maps.Animation.DROP,
			    title:"LUX Communications Inc.",
			    icon: image
			});
		
			//Pop-up Information
			var contentString = '<div id="mapContent">'+
			'<div id="siteNotice">'+
			'</div>'+
			'<h2 class="firstHeading">LUX Communications Inc.</h2>'+
			'<div id="bodyContent">'+
			'<p>' +
			
			'<a href="http://maps.google.ca/maps?q=1006+11+AVENUE+SW+CALGARY&hl=en&ll=51.043074,-114.084477&spn=0.007717,0.010396&sll=51.013117,-114.088499&sspn=0.988422,1.330719&hnear=1006+11+Ave+SW,+Calgary,+Alberta+T2R+0G3&t=m&z=17&iwloc=A"target="_blank" class="mapLink">'+
			'Get Directions</a></p>'+
			'</div>'+
			'</div>';
			
			var infowindow = new google.maps.InfoWindow({
			    content: contentString
			});			

			//Associate the styled map with the MapTypeId and set it to display. Needed to implement the Styles
			map.mapTypes.set('map_style', styledMap);
			map.setMapTypeId('map_style');
		
			// Marker Event
			google.maps.event.addListener(luxMarker, 'mouseover', function() {
			
			//	Direct link to google map
			//	window.open('http://maps.google.ca/maps?q=1006+11+AVENUE+SW+CALGARY&hl=en&ll=51.043074,-114.084477&spn=0.007717,0.010396&sll=51.013117,-114.088499&sspn=0.988422,1.330719&hnear=1006+11+Ave+SW,+Calgary,+Alberta+T2R+0G3&t=m&z=17&iwloc=A', '_blank');
			
			//  Open info window and follow instructions
				infowindow.open(map,luxMarker);
			});
			
			
			
		}// #Contact page map



  }); // end dom ready shortcut

})(jQuery);