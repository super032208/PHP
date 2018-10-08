

<!DOCTYPE HTML >
<html>
<head>
<title>Loan Calculator </title>
</head>
<body>
<form method="post" action="lab1.php">
<h2> Loan Calculator </h2>
<table>
<tr>
<td>Loan capital</td><td><input type="text" name="capital" maxlength="7" size="7"></td>
</tr>
<tr>
<td>Time in years</td>
<td>
<select name="year">
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
<option>11</option>
<option>12</option>
<option>13</option>
<option>14</option>
<option>15</option>
<option>16</option>
<option>17</option>
<option>18</option>
<option>19</option>
<option>20</option>
<option>21</option>
<option>22</option>
<option>23</option>
<option>24</option>
<option>25</option>
</select>
</td>
</tr>
<tr>
<td>Interest</td>
<td>
<select name="interest">
<option>1.00</option>
<option>1.25</option>
<option>1.50</option>
<option>1.75</option>
<option>2.00</option>
<option>2.25</option>
<option>2.50</option>
<option>2.75</option>
<option>3.00</option>
<option>3.25</option>
<option>3.50</option>
<option>3.75</option>
<option>4.00</option>
<option>4.25</option>
<option>4.75</option>
<option>5.00</option>
</select>
</td>
</tr>
<tr>
<td>Instalment</td>
<td>
<select name="instalment">
<option>Fixed</option>

</select>
</td>
</tr>
</table>
<br />
<input type="submit" value="Calculate">
</form>

</body>
</html>


<!DOCTYPE>
<html>
<head>
<title> Loan Calculator </title>

</head>
<body>
<?php

$capital=$_POST['capital'];
$interest=$_POST['interest'];
$year=$_POST['year'];
$instalment=$_POST['instalment'];

//Print passed values to page.
echo "Capital $capital<br>";
echo "Interest $interest<br>";
echo "Instalment $instalment<br>";
echo "Years $year<br>";


$months=$year * 12;


if (strcmp($instalment,"Fixed")==0)

{

    $fixedPayment=$capital / $months;
    $interestRateForMonth=$interest / 12;


    for ($i=0;$i<$months;$i++)
    {

        $interestForMonth=$capital / 100 * $interestRateForMonth;

        $capital=$capital - $fixedPayment;

        $paymentForMonth =$fixedPayment + $interestForMonth;

        $month=$i+1;

        echo '<table border="1">';
        echo  "<strong> $month Payment: </strong>",  (round($paymentForMonth)) ;
        echo "</table>";
    }
}

?>

</body>
</html>
