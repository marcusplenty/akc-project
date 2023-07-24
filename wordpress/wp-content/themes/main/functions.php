<?php
// functions.php

// Include the Guzzle HTTP Client library
require 'vendor/autoload.php';

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

function fetch_states_and_territories() {

    $client = new \GuzzleHttp\Client();
    $api_url = 'https://public.opendatasoft.com/api/records/1.0/search/?dataset=us-state-boundaries&q=&facet=name&rows=56';

    try {
        $response = $client->request('GET', $api_url);
        
        if ($response->getStatusCode() === 200) {
            $data = json_decode($response->getBody(), true);
            return $data['records'];
        } else {
            return null;
        }
    } catch (\GuzzleHttp\Exception\RequestException $e) {
        return null;
    }
}
