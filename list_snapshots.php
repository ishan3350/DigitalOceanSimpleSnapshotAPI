<?php
$apiUrl="https://api.digitalocean.com/v2/";

$token = "Your DigitalOcean Token";

$dropletId="Your DigitalOcean DropletID";

//listing all snapshots
 $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $apiUrl . 'droplets/' . $dropletId . '/snapshots');
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Authorization: Bearer ' . $token
        ));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
        $response = curl_exec($ch);
        curl_close($ch);
        $result = json_decode($response);
        if ($result) {
            print_r( $result->snapshots);
        }
        return [];


?>