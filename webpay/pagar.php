<?php

use Freshwork\Transbank\CertificationBagFactory;
use Freshwork\Transbank\TransbankServiceFactory;
use Freshwork\Transbank\RedirectorHelper;

include '../vendor/autoload.php';

//Get a certificationBag with certificates and private key of WebpayNormal for integration environment.
$bag = CertificationBagFactory::integrationWebpayNormal();

$plus = TransbankServiceFactory::normal($bag);

//For normal transactions, you can just add one TransactionDetail
//Para transacciones normales, solo se puede añadir una linea de detalle de transacción.
$plus->addTransactionDetail(37800, 'Orden824201'); //Amount and BuyOrder

$response = $plus->initTransaction('http://localhost:90/alamo/webpay/finalizando.php', 'http://localhost:90/alamo/webpay/gracias.php');

echo RedirectorHelper::redirectHTML($response->url, $response->token);
// $options = array(
//     "trace" => true,
//     "encoding" => "utf-8"
//   );

// $client = new SoapClient("http://opendap.co-ops.nos.noaa.gov/axis/webservices/highlowtidepred/wsdl/HighLowTidePred.wsdl", $options);

// $params = array(
//     "stationId" => 8454000,
//     "beginDate" => "20060921 00:00",
//     "endDate" => "20060922 23:59",
//     "datum" => "MLLW",
//     "unit" => 0,
//     "timeZone" => 0
// );

// try {
//  $result = $client->getHLPredAndMetadata($params);
//  echo $client->__getLastResponse();
// }
// catch (Exception $e) {
//   $error_xml =  $client->__getLastRequest();
//   echo $error_xml;
//   echo "\n\n".$e->getMessage();
// }

//$result = $client->getTransactionResult();
//echo "Response:\n" . $client->__getLastResponse() . "\n";
?>