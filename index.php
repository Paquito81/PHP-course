<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action="index.php" method="post">
       <label>x:</label>
       <input type="text" name="x"><br>
       <label>y:</label>
       <input type="text" name="y"><br>
       <label>z:</label>
       <input type="text" name="z"><br>
       <input type="submit" value="total">
   </form>        

<!-- <form action="index.php" method="post">
       <label>quantity: </label><br>
       <input type="text" name="quantity"><br>
       <input type="submit" value="total">
    </form> -->
</body>
</html>

<?php 

    $x = $_POST["x"];
    $y = $_POST["y"];
    $z = $_POST["z"];
    $total = null;

    // $total = abs($x); is the absolute value
    // $total = round($x); is rounded to nearest whole
    // $total = pow($x, $y); total is x to the power of y
    // $total = sqrt($x); is the square root of a number.
    // $total = max($x, $y, $z); highest number enter.

    echo $total;
    // $item = "pizza";
    // $price = 5.99;
    // $quantity = $_POST["quantity"];
    // $total = null;

    // $total = $quantity * $price;

    //  echo"You have ordered {$quantity} x {$item}/s <br>";
    //  echo"Your total is: \${$total}";
   
?>