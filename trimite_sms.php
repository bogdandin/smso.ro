<?php
// functie de trimis sms in php
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://app.smso.ro/api/v1/send');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "sender=4&to=+4aici_nr_telefon&body=Testings");
        curl_setopt($ch, CURLOPT_POST, 1);

        $headers = array();
        $headers[] = 'X-Authorization: aici_cheie_api';
        $headers[] = 'Content-Type: application/x-www-form-urlencoded';
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        curl_close($ch);

        print_r($result);
        
   ?>     
