;
function initMap() {
    var map = new google.maps.Map(document.getElementById("map"), {
        zoom: 17,
        center: {lat: 45.0198446, lng: 38.9720053},
        disableDefaultUI:true,
        scrollwheel: false,
        zoomControl: true,
        scaleControl: false
    });

    // var icon = {
    //     path: "M261.1,259.1c-2.8-2.5-6.8-3.9-11.1-3.9s-8.3,1.4-11.1,3.9c-3.4,3-5.2,7.7-5.2,13.4 c0,12.4,14.3,26.9,14.9,27.6c0.4,0.4,0.9,0.6,1.4,0.6s1-0.2,1.4-0.6c0.6-0.6,14.9-15.1,14.9-27.6 C266.3,266.7,264.5,262.1,261.1,259.1z M250,282.1c-5.7,0-10.2-4.6-10.2-10.4s4.6-10.4,10.2-10.4s10.2,4.6,10.2,10.4 C260.2,277.4,255.7,282.1,250,282.1z",
    //     fillColor: "#a97140",
    //     fillOpacity: 1,
    //     anchor: new google.maps.Point(0, 0),
    //     strokeWeight: 0,
    //     scale: 1
    // }

    var marker = new google.maps.Marker({
        map: map,
        position: {lat: 45.0198446, lng: 38.9720053},
        draggable: false,
        icon: "/img/map-marker.png"
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