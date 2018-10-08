<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> lab one </title>
</head>
<body>

<form action="CC.php" method="POST"><br>

<table border="1">
<tr>
<td> pincipal</td><td><input type="text" name="principal" value="<?= $principal ?>"> </td>
<td> <input type="submit" name="button1" value="calculate principal"/></td>
<tr>
<td>NUmber of payments </td><td><input type="text" name="number" value="<?= $number ?>"></td>
<td><input type="submit" name="button2" value="calculate Number"></td>
</tr>
<tr>
<td>Interest Rate (%) per payment</td><td><input type="text" name="rate" value="<?= $rate ?>"></td>
<td><input type="submit" name="button3" value="calcualte Interest"></td>
</tr>
<tr>
<td>Payment</td><td><input type="text" name="payment" value="<?= $payment ?>"></td>
<td><input type="submit" name="button4" value="calculate Payment" /></td>
</tr>
</tr>
</table>

<input type="submit" name="button5" value="payment Schedule">
</p>
</form>

<?php
$error = array();
if (!empty($principal)){
  $error['principal'] = "must be numeric";
}
else{
  $number = (int)$principal;
}

if(count($error) == 1){
  if(isset($_POST['button1'])){
    $principal = calc_principal($number, $rate, $payment);
  }
  if(isset($_POST['button2'])){
    $number = calc_number($principal, $rate, $payment);
  }
if(isset($_POST['button3'])){
  $rate = calc_rate($principal, $number, $payment);
}
if(isset($_POST['button4'])){
  $payment = calc_payment($principal, $number, $rate, 2);
}


}

function calc_principal($payno, $int, $pmt){
$int = $int/100;
$value1 = (pow((1+$int), $payno))-1;
$value2 = $int * pow((1 + $int), $payno);
$pv = $pmt * ($value1 / $value2);
$pv = number_format($pv, 2, ".", "");

return $pv;



}

$interest = $balance * $rate/100;

$principal = $payment - $interest;

if($balance < $payment){
$principal = $balance;
$payment = $interest + $principal;


}

$balance = $balance - $principal;
if($balance < 0){
$principal = $principal + $balance;
$interest = $interest - $balance;
$balance = 0;



}


echo '<table border="1">';
echo '<tr><th>#</th><th>PAYMENT</th><th>INTEREST</th><th>PRINCIPAL</th><th>BALANCE</th></tr>';

echo "<td><b>" .number_format($totPayment,   2, ".", ",") ."</b></td>";
echo "<td><b>" .number_format($totInterest,  2, ".", ",") ."</b></td>";
echo "<td><b>" .number_format($totPrincipal, 2, ".", ",") ."</b></td>";
echo "<td>&nbsp;</td>";
echo "</tr>";
echo "</table>";

    ?>





  </body>

</html>
