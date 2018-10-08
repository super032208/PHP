<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lab one </title>
    </head>
    <body>

      <form action="calculator.php" method="POST">
        <table border="1">
    <tr>
<tr>
<td><input type="text" name="loan"/></td>
<td> <input value="Loan Amount"></td>
</tr>
<tr>
<td><input type="text" name="Int"/></td>
<td><input value="Interest % "></td>
</tr>
<tr>
<td><input type="text" name="month"/></td>
<td> <input value="Months"></td>
</tr>
</tr>


<input type="submit" name="sub" value="calculate" >

      </form>
</table>

    </body>
</html>
<?php

if ($_POST){
$loan = $_POST['loan'];
$int = $_POST['int'];
$month = $_POST['month'];

/* calcualte for loan */

//interestPaid = currentAmountOwed * interest / 100 / 12
/*echo " Total Amount ". "<br>". $loan . "<br/>";
echo " Total Interes ". "<br>". $interest . "<br/>";
echo " Total Amount ". "<br>". $pay . "<br/>";
echo " Per month ". "<br>". $month . "<br/>";*/
$interest = $loan * $int / 100/ 12;

$pay = $loan + $interest;

$month = $pay / $month;

echo '<table border="1">';
echo '<tr><th>AMOUNT</th><th>INTEREST </th><th>PRINCIPAL</th><th>BALANCE</th></tr>';

echo "<td><b>" .number_format($loan,   2, ".", ",") ."</b></td>";
echo "<td><b>" .number_format($Interest,  2, ".", ",") ."</b></td>";
echo "<td><b>" .number_format($pay, 2, ".", ",") ."</b></td>";
echo "<td><b>" .number_format($month, 2, ".", ",")."</b></td>";


echo "</table>";

}


 ?>
