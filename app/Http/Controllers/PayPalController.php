<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Srmklive\PayPal\Services\ExpressCheckout;

class PayPalController extends Controller
{
    public function pay(){
        $provider = new ExpressCheckout();
        $data = [];
        $data['items']=[];
        
    }
}
