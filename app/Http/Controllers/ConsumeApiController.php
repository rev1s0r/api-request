<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsumeApiController extends Controller
{
    public function index() {

        $url = 'https://individualizer.databreakers.com/v1/individualizer';
        $json = '{
            "accountId": "notino_cz",
            "recommendation_request": {
            "requests": [
            {
            "requestId": "product_detail",
            "request": {
            "template": {
            "templateId": "test"
            },
            "returnedAttributes": [
            "name",
            "image_link",
            "link",
            "name_additional",
            "availability",
            "brand",
            "rating"
            ],
            "itemId": "HUGNO6M_AEDT10",
            "userId": "899dc774-b87c-ac50-6736-80ea84e2bc4e"
            }
            }
            ]
            }
            }';

        $data = json_encode($json);

        $ch = curl_init($url); 
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        $result = curl_exec($ch);
        curl_close($ch);

        $responseData = json_decode($result, TRUE);

        dd($responseData);
        
    }


   
}

