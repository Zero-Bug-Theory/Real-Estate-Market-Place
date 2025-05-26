<?php
// This sample uses the Apache HTTP client from HTTP Components (http://hc.apache.org/httpcomponents-client-ga/)
require_once 'HTTP/Request2.php';

$request = new Http_Request2('https://sandbox.momodeveloper.mtn.com/collection/v1_0/bc-authorize');
$url = $request->getUrl();

$headers = array(
    // Request headers
    'Authorization' => '',
    'X-Target-Environment' => '',
    'X-Callback-Url' => '',
    'Content-Type' => 'application/x-www-form-urlencoded',
    'Ocp-Apim-Subscription-Key' => '{subscription key}',
);

$request->setHeader($headers);

$parameters = array(
    // Request parameters
);

$url->setQueryVariables($parameters);

$request->setMethod(HTTP_Request2::METHOD_POST);

// Request body
$request->setBody("{body}");

try
{
    $response = $request->send();
    echo $response->getBody();
}
catch (HttpException $ex)
{
    echo $ex;
}

?>