<?php
$curl = curl_init();

curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_URL, 'https://api-3t.sandbox.paypal.com/nvp');
curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query(array(
    'USER' => 'USUARIO-DA-API',
    'PWD' => 'SENHA DA API',
    'SIGNATURE' => 'ASSINATURA DA API',

    'METHOD' => 'MassPay',
    'VERSION' => '99',

    'CURRENCYCODE' => 'BRL',
    'RECEIVERTYPE' => 'EmailAddress',
    'EMAILSUBJECT' => 'Assunto do email que o cliente receberá',

    'L_EMAIL0' => 'fulano@cliente.com',
    'L_AMT0' => 100.00,

    'L_EMAIL1' => 'beltrano@cliente.com',
    'L_AMT1' => 200.00,

    'L_EMAIL2' => 'cicrano@cliente.com',
    'L_AMT2' => 300.00
)));

$response = curl_exec($curl);

curl_close($curl);
