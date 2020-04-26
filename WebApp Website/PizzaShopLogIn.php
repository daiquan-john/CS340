
<?php
# Fill our vars and run on cli
# $ php -f db-connect-test.php

//database connection information
$dbname = 'test';
$dbuser = 'root';
$dbpass = '';
$dbhost = 'localhost';

//connects to database
$link = @mysqli_connect($dbhost, $dbuser, $dbpass) or die("Unable to Connect to '$dbhost'");
@mysqli_select_db($link, $dbname) or die("Could not open the db '$dbname'");

//starts log in session
session_start();

//checks log in details
 if($_SERVER["REQUEST_METHOD"] == "POST") 
 {
      // username and password sent from form 
      $myusername = mysqli_real_escape_string($link,$_POST['username']);
      $mypassword = mysqli_real_escape_string($link,$_POST['password']); 
      
      //sends sql query to database
      $sql = "SELECT ACC_ID FROM accounts WHERE ACC_USER = '$myusername' and ACC_PASS = '$mypassword'";
      $result = mysqli_query($link,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        
  
      //counts returned rows
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) 
      {
      //logs into system
         $_SESSION['login_user'] = $myusername;
         $sql = "SELECT ACC_TYPE FROM accounts WHERE ACC_USER = '$myusername' and ACC_PASS = '$mypassword' and ACC_TYPE = 'Employee'";
         //if acc is employee, goes to order form, else goes to data form
            $result = mysqli_query($link,$sql);
            $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
            $count2 = mysqli_num_rows($result);
            if($count2 == 1)
                header("location: PizzaShopOrder.php");
            else
                header("location: PizzaShopData.php");
      }
      else 
      {
      //displays error message
        $message = "Username and/or Password incorrect.\\nTry again.";
        echo "<script type='text/javascript'>alert('$message');</script>";
      }
 }
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Start of Head -->
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="theme.css">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <title>Pizza Shope System</title>
</head> <!-- End of Head -->

<body>
    <!-- Start of Body -->

    <div class="wrapper fadeInDown">
        <!-- Start of Wrapper -->

        <div id="formContent">
            <!-- Tabs Titles -->
            <!-- Icon -->
            <div class="fadeIn first">
                <img src="Pizzatime.svg" id="icon" alt="CompanyLogo" />
            </div>

            <!-- Login Form -->
            <form  action = "" method = "post">
                <input type="text" id="login" class="fadeIn second" name="username" placeholder="username">
                <input type="password" id="password" class="fadeIn third" name="password" placeholder="password">
                <input type="submit" class="fadeIn fourth" value="Log In">
            </form>

        </div>

    </div> <!-- End of Wrapper -->

    <footer style="background-color: #A0D8C2">
        <p style="text-align: center;">Copyright 2020 Wright and Co. Pizza Company</p>
    </footer>

</body>
</html>