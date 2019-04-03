<?php

namespace App\Http\Controllers;

use App\Sends;
use Illuminate\Http\Request;

class PayPalController extends Controller
{

    /**VARIABLE GLOBAL DEL REQUEST PARA EL PAQUETE*/
    private $costo;
    
    public function pay(Request $request){
        if ($request->costo != null) {
            $this->costo = $request->costo;
        }
        $provider = \PayPal::setProvider('express_checkout');
        $provider->setCurrency('MXN');
        $invoiceId = uniqid();
        $data = $this->sendData($invoiceId);
        $response = $provider->setExpressCheckout($data);
        Sends::create(['nombreDest'=>$request->nombreDest,'remitente'=>$request->remitente,'destino'=>$request->destino,
                    'peso'=>substr($request->peso,-3,1),'dimensiones'=>$request->dimensiones,
                    'costo'=>$request->costo,'user_id'=>$request->user_id]);
        return redirect($response['paypal_link']);
    }

    public function payCallback(Request $req){
        $provider = \PayPal::setProvider('express_checkout');
        $token = $req->token;
        $PayerID = $req->PayerID;
        $response =$provider->getExpressCheckoutDetails($token);
        $invoiceId = $response['INVNUM']??uniqid();
        $data = $this->sendData($invoiceId);
        $response = $provider->doExpressCheckoutPayment($data ,$token,$PayerID);
        return view('paypal.success');
    }

    protected function sendData($invoiceId){
        $data = [];
        $data['items']=[
            [
                'name' => 'Envío eMoveOn',
                'price' => $this->costo,
                'qty' => 1
            ]
        ];
        $data['invoice_id'] = $invoiceId;
        $data['invoice_description'] = "Envío eMoveOn";
        $data['return_url'] = route('payment.callback');
        $data['cancel_url'] = url('/');

        $total = 0;
        foreach($data['items'] as $item){
            $total += $item['price']*$item['qty'];
        }
        $data['total']=$total;
        return $data;
    }

}
