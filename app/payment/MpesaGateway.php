<?php

namespace App\payment;

use Illuminate\Support\Facades\Http;

class MpesaGateway // extends AnotherClass implements Interface
{
    public function __construct()
    {
        $this->shortcode1 = "600987"; //PartyA
        $this->InitiatorName = "testapi"; //shortcode 1
        $this->SecurityCredential  = "Safaricom999!*!"; //shortcode1
        $this->shortcode2 = "600000"; //partB
        $this->TestMSISDN = "254708374149";
        $this->shortcode = "174379"; //Lipa Na Mpesa Online Shortcode://4037673
        $this->LipaNaMpesaOnlinePassKey = "bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919";
    }

    public function get_access_token()
    {
        $Consumer_Key = "EcRoSKtOdBHfEPzo6gwPLyHhp6etgOjz";
        $Consumer_Secret = "bb4nKUEYIAtxMVeK";
        $key_sec = $Consumer_Key . ":" . $Consumer_Secret;
        $url = 'https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';
        $headers = ['Content-Type: application/json;charset=UTF-8'];

        $base64 = base64_encode($key_sec);

        $headers =  [
            'Authorization' => 'Basic ' . $base64,
            'Content-Type' => 'application/json'
        ];


        $response = Http::withHeaders($headers)->get($url);
        $access_token = $response->json()['access_token'];
        return $access_token;
    }

    public function pay_land($phoneNumber, $amount)
    {
        $phoneNumber = intval($phoneNumber);
        $phoneNumber = '254' . $phoneNumber;
        $phoneNumber = $phoneNumber;

        $api_url = 'https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest';
        $access_token = $this->get_access_token();
        $time = date('YmdHis');
        $shortcode = $this->shortcode;
        $LipaNaMpesaOnlinePassKey =   $this->LipaNaMpesaOnlinePassKey;
        $SecurityCredential  = base64_encode($shortcode . $LipaNaMpesaOnlinePassKey . $time);
        $callback = "https://lagaster.org" ;
        $reference = "Land Payment";



        $headers = [
            'Authorization' => 'Bearer ' . $access_token,
            'Content-Type' => 'application/json',
        ];


        $data = [
            "BusinessShortCode" => $shortcode,
            "Password" => $SecurityCredential,
            "Timestamp" => $time,
            "TransactionType" => "CustomerPayBillOnline",
            "Amount" => $amount,
            "PartyA" => $phoneNumber,
            "PartyB" => $shortcode,
            "PhoneNumber" => $phoneNumber,
            "CallBackURL" =>  $callback ,
            "QueueTimeOutURL" => "https://lagaster.org",

            "AccountReference" => $reference,
            "TransactionDesc" => $reference
        ];

        $response =  Http::withHeaders($headers)->post($api_url, $data)->json();
        return $response;
    }
}
