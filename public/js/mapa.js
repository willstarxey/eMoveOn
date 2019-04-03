var infoWindow;

function initMap() {
    var directionsService = new google.maps.DirectionsService;
    var directionsDisplay = new google.maps.DirectionsRenderer;
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 16,
        center: { lat: 41.85, lng: -87.65 },
    });
    var image = {
        url: 'gallery/pint.png',
        size: new google.maps.Size(40, 60),
        origin: new google.maps.Point(0, 0),
        anchor: new google.maps.Point(20, 60)
    };
    infoWindow = new google.maps.InfoWindow;

    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
                coint: image,
                lat: position.coords.latitude,
                lng: position.coords.longitude
            };
            document.getElementById("remitente").value = position.coords.latitude + "," + position.coords.longitude;
            infoWindow.setPosition(pos);
            infoWindow.setContent('Posición Actual');
            infoWindow.open(map);
            map.setCenter(pos);
        }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
        });
    } else {
        handleLocationError(false, infoWindow, map.getCenter());
    }

    function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
            'Error: Servicio de Geolocalización ha fallado.' :
            'Error: Tu navegador no soporta la geolocalización');
        infoWindow.open(map);
    }

    directionsDisplay.setMap(map);

    var onChangeHandler = function() {
        calculateAndDisplayRoute(directionsService, directionsDisplay);
    };
    document.getElementById('remitente').addEventListener('change', onChangeHandler);
    document.getElementById('destino').addEventListener('change', onChangeHandler);
}

function trunc(x, posiciones = 0) {
    var s = x.toString()
    var l = s.length
    var decimalLength = s.indexOf('.') + 1
    var numStr = s.substr(0, decimalLength + posiciones)
    return Number(numStr)
}

function calculateAndDisplayRoute(directionsService, directionsDisplay) {
    directionsService.route({
        origin: document.getElementById('remitente').value,
        destination: document.getElementById('destino').value,
        travelMode: 'DRIVING'
    }, function(response, status) {
        if (status === 'OK') {
            directionsDisplay.setDirections(response);
            var route = response.routes[0];
            var summaryPanel = document.getElementById('distancia');
            var tiempos = document.getElementById('tiempo');
            var costos = document.getElementById('pago');
            summaryPanel.innerHTML = 'Distancia: ';
            tiempos.innerHTML = 'Tiempo: ';
            costos.innerHTML = 'Costo: ';

            console.log(route.legs.length);
            document.getElementById('costo').readonly = 'readonly';
            for (var i = 0; i < route.legs.length; i++) {
                if ((route.legs[i].distance.value / 60) < 60) {
                    tiempos.innerHTML += (route.legs[i].distance.value / 60).toFixed(2) + ' min';
                } else {
                    tiempos.innerHTML += ((route.legs[i].distance.value / 60) / 60).toFixed(2) + ' hrs';
                }
                costos.innerHTML += '$' + trunc((route.legs[i].distance.value) * 0.02, 2) + ' MX';
                conDecimal = (route.legs[i].distance.value) * 0.02;
                document.getElementById('costo').value = trunc(conDecimal, 2);
                if (route.legs[i].distance.value < 1000) {
                    summaryPanel.innerHTML += route.legs[i].distance.value + ' mts';
                } else {
                    summaryPanel.innerHTML += route.legs[i].distance.text;
                }
                console.log(route.legs[i].distance.text);
            }
        }
    });
}