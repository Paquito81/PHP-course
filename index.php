<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action="index.php" method="get">
       <label>Username: </label>
       <input type="text" name="username"><br>
       <label>password: </label>
       <input type="password" name="password"><br>
       <input type="submit" value="Log in"><br>
</form>   


<!-- <form action="index.php" method="post">
       <label>quantity: </label><br>
       <input type="text" name="quantity"><br>
       <input type="submit" value="total">
    </form> -->
</body>
</html>

<?php 

    echo "{$_GET["username"]}<br>";
    echo "{$_GET["password"]}";
    

    // $x = $_POST["x"];
    // $y = $_POST["y"];
    // $z = $_POST["z"];
    // $total = null;

    // $total = abs($x); is the absolute value
    // $total = round($x); is rounded to nearest whole
    // $total = pow($x, $y); total is x to the power of y
    // $total = sqrt($x); is the square root of a number.
    // $total = max($x, $y, $z); highest number enter.

    // echo $total;
    // $item = "pizza";
    // $price = 5.99;
    // $quantity = $_POST["quantity"];
    // $total = null;

    // $total = $quantity * $price;

    //  echo"You have ordered {$quantity} x {$item}/s <br>";
    //  echo"Your total is: \${$total}";
   
?>