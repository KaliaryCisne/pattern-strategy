<?php

require 'vendor/autoload.php';

ini_set("display_errors", true);

use App\Estimate;
use App\TaxCalculator;
use App\Taxes\ICMS;
use App\Taxes\ISS;

//estimate
$estimate1 = new Estimate(1000);

//taxex
$ICMS = new ICMS();
$ISS = new ISS();


//percents
$calcute = new TaxCalculator();
$ICMScontribution = $calcute->performsCalculation($estimate1, $ICMS);
$ISScontribution = $calcute->performsCalculation($estimate1, $ISS);

echo "percent value of ICMS: {$ICMScontribution}";
echo "<br>";
echo "percent value of ISS: {$ISScontribution}";




