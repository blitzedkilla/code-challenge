<?php

namespace App\Lib;

use GuzzleHttp\Client;

class Spoty {
    public $token;
    public $client;
    public $client_id;
    public $client_secret;


    public function __construct($c_id, $secret, $cl = null){
        $this->client = new Client();
        $this->client_id = $c_id;
        $this->client_secret = $secret;

    }

    public function auth_spotify(){
        $key = base64_encode($this->client_id . ':' . $this->client_secret);

        $response = $this->client->request('POST', 'https://accounts.spotify.com/api/token', [
            'form_params' => [
                'grant_type' => 'client_credentials',
            ],
            'headers' => [
                'Authorization' => 'Basic ' . strval($key),
                'Content-Type' => 'application/x-www-form-urlencoded'
            ]
        ]);
        if ($data = $response->getBody()) {
            $json = json_decode($data);
            $this->token = $json->access_token;
        }
    }

    public function search($query){

        $params = [
            'query' => [
               'q' => strval($query),
               'type' => 'album,artist,track'
            ],
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token,
            ]
         ];
        $response = $this->client->request('GET', 'https://api.spotify.com/v1/search', $params);
        return json_decode($response->getBody());
    }

    public function get($entity, $id){

        $params = [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token,
                'Content-Type' => 'application/json'
            ]
         ];
        $response = $this->client->request('GET', 'https://api.spotify.com/v1/' . $entity . '/' . $id, $params);
        return json_decode($response->getBody());
    }
}

