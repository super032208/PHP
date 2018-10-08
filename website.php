<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> lab one </title>
</head>
<body>

<form action="website.php" method="POST"><br>



</form>

<?php


$apr = 0.159; // 15.9% APR
$totalPaymentsPerYear = 12;
$compoundPerYear = 1;
$interest = pow((1 + $apr/$compoundPerYear), $compoundPerYear/$totalPaymentsPerYear)-1;



function calcPayment(
    float $loanAmount,
    int $totalPayments,
    float $interest
)
{
    //***********************************************************
    //              INTEREST * ((1 + INTEREST) ^ TOTALPAYMENTS)
    // PMT = LOAN * -------------------------------------------
    //                  ((1 + INTEREST) ^ TOTALPAYMENTS) - 1
    //***********************************************************

    $value1 = $interest * pow((1 + $interest), $totalPayments);
    $value2 = pow((1 + $interest), $totalPayments) - 1;
    $pmt    = $loanAmount * ($value1 / $value2);
    return $pmt;
}




  ?>
calcPayment();


</body>
</html>
