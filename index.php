<?php

require 'vendor/autoload.php';

ini_set("display_errors", true);

use App\Estimate;
use App\Investiments\Conservative;
use App\Investiments\Moderate;
use App\ProfitCalculator as ProfitCalculatorAlias;
use App\TaxCalculator;
use App\Taxes\ICCC;
use App\Taxes\ICMS;
use App\Taxes\ISS;

//estimate
$estimate1 = new Estimate(1000);
$account1 = new Estimate(1000);
$account2 = new Estimate(1000);
$account3 = new Estimate(1000);

//taxex
$ICMS = new ICMS();
$ISS = new ISS();
$ICCC = new ICCC();

//percents
$calcute = new TaxCalculator();
$ICMScontribution = $calcute->performsCalculation($estimate1, $ICMS);
$ISScontribution = $calcute->performsCalculation($estimate1, $ISS);
$ICCCcontribution = $calcute->performsCalculation($estimate1, $ICCC);

echo "percent value of ICMS: {$ICMScontribution}";
echo "<br>";
echo "percent value of ISS: {$ISScontribution}";
echo "<br>";
echo "percent value of ICCC: {$ICCCcontribution}";

echo "<br>";
echo "---------------------------------------------------------------------------";
echo "<br>";

//Investment simulations
$profitCalculator = new ProfitCalculatorAlias();

//Investiments
$conservative = new Conservative();
$moderate = new Moderate();


echo "current balance: {$account1->getValue()} ";
echo "<br>";
$new_value = $profitCalculator->performsCalculation($account1, $conservative);
echo "balance after conservative investment: {$new_value}";

echo "<br>";
echo "---------------------------------------------------------------------------";
echo "<br>";

echo "current balance: {$account2->getValue()} ";
echo "<br>";
$new_value = $profitCalculator->performsCalculation($account2, $moderate);
echo "balance after moderate investmentt: {$new_value}";

echo "<br>";
echo "---------------------------------------------------------------------------";
echo "<br>";

echo "current balance: {$account3->getValue()} ";
echo "<br>";
$new_value = $profitCalculator->performsCalculation($account3, $moderate);
echo "balance after bold investment: {$new_value}";


