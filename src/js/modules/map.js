import L from 'leaflet';


export class Map {
  constructor() {
    const map = L.map('map', {
      center: [55.706660, 37.753580],
      zoom: 15,
      scrollWheelZoom: false,
    });

    var icon = L.icon({
      iconUrl: './img/map-marker.png',
  
      iconSize:     [118, 97], // size of the icon
      iconAnchor:   [69, 97], // point of the icon which will correspond to marker's location
    });

    L.marker([55.706660, 37.75358], {icon}).addTo(map);

    // create a new tile layer
    const tileUrl = 'https://tile.thunderforest.com/atlas/{z}/{x}/{y}.png?apikey=649c803fe46e4849b3c09308ce37524c';
    const layer = new L.TileLayer(tileUrl, {maxZoom: 18});
    
    // add the layer to the map
    map.addLayer(layer);
  }
}
