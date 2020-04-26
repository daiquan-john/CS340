<?php
//gets variables from previous page
$price = $_GET['Price'];
$method = $_GET['method'];
$pay = $_GET['pay'];

//converts from int values to strings
    if($pay == 1)
    {
        $pay = "cash";
    }
    else 
    {
        $pay = "credit";
    }   

    if($method == 1)
    {
        $method = "dine-in";
    }
    else if($method == 2)
    {
        $method = "carry out";
    }
    else
    {
        $method = "delivery";
    }

$dbname = 'test';
$dbuser = 'root';
$dbpass = '';
$dbhost = 'localhost';

//connects to database
$link = @mysqli_connect($dbhost, $dbuser, $dbpass) or die("Unable to Connect to '$dbhost'");
@mysqli_select_db($link, $dbname) or die("Could not open the db '$dbname'");

//inserts data into database
 $sql = "INSERT INTO `orders`(`ORDER_NUM`, `ORDER_COST`, `PAY_METHOD`, `ORDER_DATE`, `ORDER_DELIVERY`) VALUES (null,'$price','$pay',CURDATE(), '$method')";
      mysqli_query($link,$sql);
      //goes to done page
     header("Location: PizzaShopDone.php");
    exit;
?>	