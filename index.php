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
    <!-- <form action="index.php" method="post">
        <label>radius:</label><br>
        <input type="text" name="radius">
        <input  type="submit" value="calculate"><br>
    </form> -->



    <!-- <form action="index.php" method="post">
        <label>username: </label>
        <input type="text" name="username"><br>
        <label>password: </label>
        <input type="password" name="password"><br>
        <input type="submit" value="log in"><br>

    </form> -->



</body>
</html>

<?php 

$hours = 40;
$rate = 15;
$weekly_pay = null;

if($hours <=0) {
    $weekly_pay = 0;
}

else if($hours <= 40) {
    $weekly_pay = $hour * $rate;
}
else {
    $weekly_pay = ($rate * 40 ) + ($hours - 40);
}

echo "You made \${weekly_pay} this week";

// echo "You made \${$weekly_pay} this week;

//     $adult = false;

//     // if($adult){
//     //     echo "You may enter this site";
//     // }
//     // else{
//     //     echo"You must be an adult to enter";
//     // }
//     // $age = 10;
    
//     // if($age >= 100){
//     //     echo"You are way to old to enter";
//     // }
//     // elseif($age >= 18){
//     //     echo"You may enter";
//     // }
//     // elseif($age <= 0){
//     //     echo"Please enter a valid number";
//     // }
//     // else{
//     //     echo"You must be 18+ to enter";
//     // }
   

//     // $radius = $_POST["radius"];
//     // $circumference = null;
//     // $area = null;
//     // $volume = null;

//     // $circumference = 2 * pi() * $radius;
//     // $circumference = round($circumference, 2);
    
//     // $area = pi() * pow($radius, 2);
//     // $area = round($area, 2);

//     // $volume = 4/3 * pi() * pow($radius, 3);
//     // $volume = round($volume, 2);

//     // echo"Circumference = {$circumference}cm <br>";
//     // echo "Area = {$area}cm^2 <br>";
//     // echo "volume = {$volume}cm^3 <br>";

//     // echo "{$_GET["username"]}<br>";
//     // echo "{$_GET["password"]}";
    

//     // $x = $_POST["x"];
//     // $y = $_POST["y"];
//     // $z = $_POST["z"];
//     // $total = null;

//     // $total = abs($x); is the absolute value
//     // $total = round($x); is rounded to nearest whole
//     // $total = pow($x, $y); total is x to the power of y
//     // $total = sqrt($x); is the square root of a number.
//     // $total = max($x, $y, $z); highest number enter.
//     // $total = min($x, $y, $z); lowest number enter.
//     // $total = pi();
//     // $total = rand()
    
//     // echo $total;
//     // $item = "pizza";
//     // $price = 5.99;
//     // $quantity = $_POST["quantity"];
//     // $total = null;

//     // $total = $quantity * $price;

//     //  echo"You have ordered {$quantity} x {$item}/s <br>";
//     //  echo"Your total is: \${$total}";
   
?>