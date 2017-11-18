<?php
require_once 'common.php';
$operationRepository = new \MyMoney\Repository\OperationsRepository($db);
$operationService = new \MyMoney\Service\OperationService($operationRepository);
$operationHandler = new \MyMoney\Http\OperationHttpHandler($operationService, $template, $dataBinder);
$reasonRepository = new \MyMoney\Repository\ReasonRepository($db);
$reasonService = new \MyMoney\Service\ReasonService($reasonRepository);
$operationHandler->add($reasonService, $dataBinder, $_POST);