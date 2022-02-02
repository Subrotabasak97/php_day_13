<?php

require_once '../vendor/autoload.php';
use App\Classes\Series;

if (isset($_POST['btn']))
{
$series = new Series($_POST);
$result = $series->makeseries();
include 'index.php';
}
else
{
    header('Location: index.php');
}