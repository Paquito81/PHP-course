<?php 
  //Variable = a reusable container that holds data string, integer, float, boolean

  $name = "Hector";
  $food = "pizza";
  $email = "paquito503@yahoo.com";

  $age = 21;
  $users = 2;
  $quantity = 4;

  $gpa = 2.5;
  $price = 5.99;
  $tax_rate = 5.1;

  $employed = true;
  $online = false;
  $for_sale = true;

  $total = null;

  echo"You have order {$quantity} x {$food}s <br>";
  $total = $quantity * $price;
  echo"Your total is: \${$total}";
?>