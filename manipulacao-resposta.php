<?php
require 'masspay.php';

$response = urldecode(curl_exec($curl));
$responseNvp = array();

curl_close($curl);

if (preg_match_all('/(?<name>[^\=]+)\=(?<value>[^&]+)&?/', $response, $matches)) {
    foreach ($matches['name'] as $offset => $name) {
        $responseNvp[$name] = $matches['value'][$offset];
    }
}

if (isset($responseNvp['ACK']) && $responseNvp['ACK'] == 'Success') {
    //sucesso
} else {
    //falha
}
