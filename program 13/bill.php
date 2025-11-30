<!DOCTYPE html>
<html>
<head>
<title>Electricity Bill</title>

</head>
<body>

<h2>Electricity Bill</h2>

<form method="post">
Name:<br>
<input type="text" name="cname"><br><br>

Units Used:<br>
<input type="text" name="units"><br><br>

<input type="submit" name="submit" value="Calculate">
</form>

<?php
if(isset($_POST["submit"])) {
    $name=$_POST["cname"];
    $units=$_POST["units"];
     $tariff = 1.50; 
    $bill=$units*$tariff;
    echo "Name: $name<br>";
    echo "Bill Amount: Rs. $bill";
}
?>

</body>
</html>
