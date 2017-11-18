<?php
require_once 'common.php';
$operationRepository = new \MyMoney\Repository\OperationRepository($db);
$operationService = new \MyMoney\Service\OperationService($operationRepository);
$operationHttpHandler = new \MyMoney\Http\OperationHttpHandler($template, $dataBinder);
$operationHttpHandler->render($operationService);