;
function initMap() {
    var map = new google.maps.Map(document.getElementById("map"), {
        zoom: 17,
        center: {lat: 45.01985, lng: 38.9742},
        disableDefaultUI:true,
        scrollwheel: false,
        zoomControl: true,
        scaleControl: false
    });

    var icon = {
        path: "M27.4,3.9C24.6,1.4,20.6,0,16.3,0S8,1.4,5.2,3.9C1.8,7,0,11.6,0,17.3c0,12.4,14.3,26.9,14.9,27.6 c0.4,0.4,0.9,0.6,1.4,0.6c0.5,0,1-0.2,1.4-0.6c0.6-0.6,14.9-15.1,14.9-27.6C32.6,11.6,30.8,7,27.4,3.9z M16.3,26.9 C10.6,26.9,6,22.3,6,16.5S10.6,6.1,16.3,6.1s10.2,4.6,10.2,10.4C26.5,22.2,21.9,26.9,16.3,26.9z",
        fillColor: "#a97140",
        fillOpacity: 1,
        anchor: new google.maps.Point(24, 40),
        strokeWeight: 0,
        scale: 1
    };

    var marker = new google.maps.Marker({
        map: map,
        position: {lat: 45.01985, lng: 38.9742},
        draggable: false,
        // icon: "./img/map-marker.png"
        icon: icon
    });

    var mapStyle = new google.maps.StyledMapType(
        [
            {
                "featureType": "administrative",
                "elementType": "all",
                "stylers": [
                    {
                        "saturation": "-100"
                    }
                ]
            },
            {
                "featureType": "administrative.province",
                "elementType": "all",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "landscape",
                "elementType": "all",
                "stylers": [
                    {
                        "saturation": -100
                    },
                    {
                        "lightness": 65
                    },
                    {
                        "visibility": "on"
                    }
                ]
            },
            {
                "featureType": "poi",
                "elementType": "all",
                "stylers": [
                    {
                        "saturation": -100
                    },
                    {
                        "lightness": "50"
                    },
                    {
                        "visibility": "simplified"
                    }
                ]
            },
            {
                "featureType": "road",
                "elementType": "all",
                "stylers": [
                    {
                        "saturation": "-100"
                    }
                ]
            },
            {
                "featureType": "road.highway",
                "elementType": "all",
                "stylers": [
                    {
                        "visibility": "simplified"
                    }
                ]
            },
            {
                "featureType": "road.arterial",
                "elementType": "all",
                "stylers": [
                    {
                        "lightness": "30"
                    }
                ]
            },
            {
                "featureType": "road.local",
                "elementType": "all",
                "stylers": [
                    {
                        "lightness": "40"
                    }
                ]
            },
            {
                "featureType": "transit",
                "elementType": "all",
                "stylers": [
                    {
                        "saturation": -100
                    },
                    {
                        "visibility": "simplified"
                    }
                ]
            },
            {
                "featureType": "water",
                "elementType": "geometry",
                "stylers": [
                    {
                        "hue": "#ffff00"
                    },
                    {
                        "lightness": -25
                    },
                    {
                        "saturation": -97
                    }
                ]
            },
            {
                "featureType": "water",
                "elementType": "labels",
                "stylers": [
                    {
                        "lightness": -25
                    },
                    {
                        "saturation": -100
                    }
                ]
            }
        ]
    );

    map.mapTypes.set("styled_map", mapStyle);
    map.setMapTypeId("styled_map");
}