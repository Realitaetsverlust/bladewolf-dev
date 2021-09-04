<?php

use Realitaetsverlust\Bladewolf\Core\Bladewolf;

require_once "vendor/autoload.php";

ini_set('display_errors', true);
error_reporting(E_ALL);

$bladewolf = new Bladewolf();
$bladewolf->execute();
