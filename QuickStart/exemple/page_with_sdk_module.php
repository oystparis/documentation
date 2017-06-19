<?php


$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.sandbox.oyst.eu/oneclick/v1/orders/authorize",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "product_reference=".$_POST['product_reference'],
  CURLOPT_HTTPHEADER => array(
    "authorization: Bearer 401d7071b738a1de9aba30a9631135b1e0dcebd733f7db6441a30e912b97d91e",
    "cache-control: no-cache",
    "content-type: application/x-www-form-urlencoded"
  ),
));


$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}

?>