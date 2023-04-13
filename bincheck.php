<?php 
    $curl = curl_init();

    curl_setopt_array($curl, [
        CURLOPT_URL => "https://bin-ip-checker.p.rapidapi.com/?bin=554960",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => "{\r
        \"bin\": \"411773\"\r
    }",
        CURLOPT_HTTPHEADER => [
            "X-RapidAPI-Host: bin-ip-checker.p.rapidapi.com",
            "X-RapidAPI-Key: b5a2722ed4mshe9ffc388004b7d5p1ba256jsnde80a488fc10",
            "content-type: application/json"
        ],
    ]);

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        echo "cURL Error #:" . $err;
    } else {
        echo "<pre>";
        echo $response;
        echo "</pre>";
    }
?>