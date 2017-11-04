<?php

function validateInput ($name, $age)
{
    if (strlen($_REQUEST[$name]) < 2) {
        echo "Error:";
        exit;
    }

    if (!isset($_REQUEST[$age])) {
        error_log("Error: missing parameter age");
        echo "Error";
        exit;
    }

    if (!is_int($_REQUEST[$age])) {
        echo "Error:Error uncorrected type wrong range";
        exit;
    }

    if (!is_int($_REQUEST[$age]) > 120) {
        echo "Error: wrong range";
        exit;
    }
}
validateInput('fname','age');


if(!preg_match('/^[a-z]{1,15} [a-z]{1,15}$/i', $_POST['name'])){
    echo "Error";
    exit;
}