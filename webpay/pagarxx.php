<?php

require_once('soap-wsse.php');
require_once('soap-validation.php');
require_once('WebPayService.php');
define('SERVER_CERT', '../certs/transbank.pem');

$initTransaction = new initTransaction();

$wsInitTransactionInput = new wsInitTransactionInput();
$wsTransactionDetail = new wsTransactionDetail();

/*Variables de tipo string*/
$wsInitTransactionInput->wSTransactionType = 'TR_NORMAL_WS';
$wsInitTransactionInput->commerceId = '32453074';
$wsInitTransactionInput->buyOrder = '10001';
$wsInitTransactionInput->sessionId = '50';
$wsInitTransactionInput->returnURL = 'transbank/terminoTransaccion.php';
$wsInitTransactionInput->finalURL = 'transbank/exitoTransaccion.php';

$wsTransactionDetail->commerceCode = '32453074';
$wsTransactionDetail->buyOrder = '10001';
$wsTransactionDetail->amount = '500';
$wsInitTransactionInput->transactionDetails = $wsTransactionDetail;
$initTransaction->wsInitTransactionInput = $wsInitTransactionInput;
$endpoint = 'https://webpay3gint.transbank.cl/WSWebpayTransaction/cxf/WSWebpayService?wsdl';

try{
    
    try
    {

        $webpayService = new WebPayService($endpoint);
        $initTransactionResponse = $webpayService->initTransaction($initTransaction);

    }catch (Exception $e) {

        echo 'Excepción capturada: ' + $e->getCode();
    };

    echo 'uno';
/*Validación de firma del requerimiento de respuesta enviado por Webpay*/
$xmlResponse = $webpayService->soapClient->__getLastResponse();

echo 'dos';
echo 'initTransactionResponse :' + $initTransactionResponse;
echo '<br/>';
echo 'xmlResponse :' + $xmlResponse;
echo '<br/>hola';

$soapValidation = new SoapValidation($xmlResponse, SERVER_CERT);
$validationResult = $soapValidation->getValidationResult();

/*Invocar sólo sí $validationResult es TRUE*/
if ($validationResult) {
    
    $wsInitTransactionOutput = $initTransactionResponse->return;

    
    /*TOKEN de Transacción entregado por Webpay*/
    $tokenWebpay = $wsInitTransactionOutput->token;


    /*URL donde se debe continuar el flujo*/
    $urlRedirect = $wsInitTransactionOutput->url;

    echo "<br/>wsInitTransactionOutput:  {$wsInitTransactionOutput} ";
    echo "<br/>token:  $tokenWebpay";
    echo "<br/>url:  $urlRedirect";


    echo '<br/>me fui';
}else{


    echo 'validationResult:' + $validationResult;
}



}catch(Exception $e){
    /*Redireccionar si certificado no proviene de Transbank*/
    //$url_invalido = URL_BASE . '/?q=final_url';
    $array_invalido = array();
    $array_invalido['TBK_ORDEN_COMPRA'] = $_POST['order_id'] . $e;
    //redirect_post($url_invalido, $array_invalido);
}              
?>