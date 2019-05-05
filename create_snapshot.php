<?php

$apiUrl="https://api.digitalocean.com/v2/";

$token = "Your DigitalOcean Token";

$dropletId="Your Droplet ID";

$data = array("type" => "snapshot", "name" => "Network 1 " . date('d-M-Y H:i'));
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $apiUrl . 'droplets/' . $dropletId . '/actions');
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Authorization: Bearer ' . $token
        ));
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
        curl_exec($ch);
        curl_close($ch);
?>