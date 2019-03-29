<?php

namespace App\Http\Controllers;

use App\Sends;
use Illuminate\Http\Request;
use GeneaLabs\LaravelMaps\Map;

class SendsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sends = Sends::paginate();
        return view ('sends.index',compact('sends'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $config['center'] = 'auto';
        $config['map_width'] = 689;
        $config['map_height'] = 400;
        $config['zoom'] = 'auto';
        $config['directions'] = TRUE;
        $config['places'] = TRUE;
        $config['placesAutocompleteInputID'] = 'remitente';
        $config['placesAutocompleteBoundsMap'] = TRUE;
        $config['placesAutocompleteOnChange'] = 'alert(\'Tienes que seleccionar un lugar\');';
        $config['icon'] = 'gallery/pint.png';
        $config['directionsStart'] = $config['placesAutocompleteInputID'];
        $config['placesAutocompleteInputID'] = 'destino';
        $config['directionsEnd'] = $config['placesAutocompleteInputID'];
        $config['directionsDivId'] = 'directionsDiv';

        app('map')->initialize($config);

        $directions = app('map')->create_map();

        return view('sends.create', compact('directions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $send = Sends::create($request->all());
        return redirect()->route('sends.edit',$send->id)
        ->with('info', 'Paquete añadido a Stock');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sends  $sends
     * @return \Illuminate\Http\Response
     */
    public function show(Sends $sends)
    {
        return view('sends.show',compact('sends'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sends  $sends
     * @return \Illuminate\Http\Response
     */
    public function edit(Sends $sends)
    {
        $send = Sends::get();
        return view('sends.edit', compact('sends','send'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sends  $sends
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sends $sends)
    {
        $sends->update($request->all());
        return redirect()->route(sends.edit, $sends->id)
        ->with('info', 'Has tomado el paquete');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sends  $sends
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sends $sends)
    {
        //
    }
}
