<?php

namespace App\Http\Controllers;

use App\Sends;
use Illuminate\Http\Request;
use GeneaLabs\LaravelMaps\Map;
use App\User;

class SendsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sends = Sends::where('estado','=',false)->paginate();
        return view ('sends.index',compact('sends'));
    }

    public function list()
    {   $user = auth()->user()->id;
        $sends = Sends::where('user_id','=',$user)->paginate();
        return view ('sends.list',compact('sends'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $remitente['center'] = 'auto';
        $remitente['zoom'] = 'auto';
        $remitente['places'] = TRUE;
        $remitente['icon'] = 'gallery/pint.png';
        $remitente['placesAutocompleteInputID'] = 'remitente';
        $remitente['lenguage'] = 'es_MX';
        $remitente['placesAutocompleteBoundsMap'] = TRUE;
        $remitente['placesAutocompleteOnChange'] = 'alert(\'Tienes que seleccionar un lugar\');';
        app('map')->initialize($remitente);
        $rem = app('map')->create_map();

        $destino['center'] = 'auto';
        $destino['zoom'] = 'auto';
        $destino['places'] = TRUE;
        $destino['icon'] = 'gallery/pint.png';
        $remitente['lenguage'] = 'es_MX';
        $destino['placesAutocompleteInputID'] = 'destino';
        $destino['placesAutocompleteBoundsMap'] = TRUE;
        $destino['placesAutocompleteOnChange'] = 'alert(\'Tienes que seleccionar un lugar\');';
        app('map')->initialize($destino);
        $dest = app('map')->create_map();

        //$map['jsfile'] = 'js/mapa.js';
        //$mapa = app('map')->initialize($map);

        $user = auth()->user()->id;
        return view('sends.create', compact('rem','dest','user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request);
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
        $repartidor = User::find($sends->repartidor_id);
        return view('sends.show',compact('sends','repartidor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sends  $sends
     * @return \Illuminate\Http\Response
     */
    public function edit(Sends $sends)
    {
        $repartidor = $userId = auth()->user()->id;
        return view('sends.edit', compact('sends','repartidor'));
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
        return redirect()->route('sends.show', $sends->id)
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

    public function parseTo(Request $request){
        $send = $request;
        return view('paypal.paypalsend',compact('send'));
    }
}
