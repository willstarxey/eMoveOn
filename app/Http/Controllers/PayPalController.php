<?php

namespace App\Http\Controllers;

use App\Sends;
use Illuminate\Http\Request;

class PayPalController extends Controller
{

    /**VARIABLE GLOBAL DEL REQUEST PARA EL PAQUETE*/
    public $package;

    public function pay(Request $request){
        $this->package=$request;
        $provider = \PayPal::setProvider('express_checkout');
        $provider->setCurrency('MXN');
        $invoiceId = uniqid();
        $data = $this->sendData($this->package, $invoiceId);
        $response = $provider->setExpressCheckout($data);
        return redirect($response['paypal_link']);
    }

    public function payCallback(Request $request){
        $provider = \PayPal::setProvider('express_checkout');
        $token = $request->token;
        $PayerID = $request->PayerID;
        $response =$provider->getExpressCheckoutDetails($token);
        $invoiceId = $response['INVNUM']??uniqid();
        $data = $this->sendData($this->package,$invoiceId);
        $response = $provider->doExpressCheckoutPayment($data ,$token,$PayerID);
        Sends::create($this->package->all());
        return "Paquete agregado con éxito a stock";
    }

    protected function sendData($request, $invoiceId){
        $data = [];
        $data['items']=[
            [
                'name' => 'Envío eMoveOn',
                'price' => $request->costo,
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
