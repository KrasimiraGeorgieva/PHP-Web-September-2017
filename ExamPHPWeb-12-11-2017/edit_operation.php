<?php
require_once 'common.php';

$operationRepository = new \MyMoney\Repository\OperationRepository($db);
$operationService = new \MyMoney\Service\OperationService($operationRepository);
$operationHandler = new \MyMoney\Http\OperationHttpHandler($template, $dataBinder);