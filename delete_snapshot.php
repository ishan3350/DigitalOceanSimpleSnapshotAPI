<?php
$apiUrl="https://api.digitalocean.com/v2/";

$token = "Your Digital Ocean Token";

$dropletId="Your Droplet ID";

$snapshotId = "Your Snapshot ID";



//deleting snapshot

  $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $apiUrl . 'images/' . $snapshotId);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json',
                'Authorization: Bearer ' . $token
            ));
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
            curl_exec($ch);
            curl_close($ch);
?>
