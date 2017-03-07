<?php
$url='http://smartcall.ae/InContactSOAPV2/SubmitMultiSOAP.asmx';
$context = stream_context_create(
array(
    'http' => array(
        'proxy' => '172.16.4.1:3128'
    )
)
);
$soapOptions = array(
    'stream_context' => $context
);
$client=new SoapClient($url,$soapOptions);
$message=$client->send_message();
print_r($message);