<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GeneaLabs\LaravelMaps\Map;

class GMapsController extends Controller
{
    public function index()
    {
        //configuaración
        $config = array();
        $config['center'] = 'auto';
        //$config['map_width'] = 689;
        //$config['map_height'] = 400;
        $config['zoom'] = 15;
        $config['onboundschanged'] = '
        var image = {
            url: \'gallery/pint.png\',
            size: new google.maps.Size(40, 60),
            origin: new google.maps.Point(0,0),
            anchor: new google.maps.Point(20, 60) 
           };

        if (!centreGot) {
            var mapCentre = map.getCenter();
            marker_0.setOptions({
                position: new google.maps.LatLng(mapCentre.lat(), mapCentre.lng()),
                icon : image
            });
        }
        centreGot = true;';
 
        app('map')->initialize($config);
 
        // Colocar el marcador 
        // Una vez se conozca la posición del usuario
        $marker = array();
        app('map')->add_marker($marker);
 
        $map = app('map')->create_map();
 
        //Devolver vista con datos del mapa
        return view('gmaps', compact('map'));
    }

    public function directions()
    {
        $config['center'] = 'auto';
        //$config['map_width'] = 689;
        //$config['map_height'] = 400;
        $config['zoom'] = 'auto';
        $config['directions'] = TRUE;
        $config['places'] = TRUE;
        $config['placesAutocompleteInputID'] = 'remitente';
        $config['placesAutocompleteBoundsMap'] = TRUE;
        $config['placesAutocompleteOnChange'] = 'alert(\'Tienes que seleccionar un lugar\');';
        $config['icon'] = 'gallery/pint.png';
        $config['directionsStart'] = $config['placesAutocompleteOnChange'];
        $config['placesAutocompleteInputID'] = 'destino';
        $config['directionsEnd'] = $config['placesAutocompleteInputID'];
        $config['directionsDivId'] = 'directionsDiv';

        app('map')->initialize($config);

        $directions = app('map')->create_map();
 
        //Devolver vista con datos del mapa
        return view('sends.create', compact('directions'));
    }

}
