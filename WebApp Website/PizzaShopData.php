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
     <script src="https://cdn.anychart.com/js/8.0.1/anychart-core.min.js"></script>

      <script src="https://cdn.anychart.com/js/8.0.1/anychart-pie.min.js"></script>
    <title>Pizza Shope System</title>
</head> <!-- End of Head -->

<body>

    <!-- Start of Body -->

    <div class="wrapper fadeInDown">
        <!-- Start of Wrapper -->
        <!-- log out button to go back to log in page -->
    <form action="PizzaShopLogin.php">
    <input type="submit" value="Log out" style="position: absolute; right: 0; top: 0;"/>
    </form>
    <!-- menu button to go back to order page -->
    <form action="PizzaShopOrder.php">
    <input type="submit" value="Order" style="position: absolute; left: 0; top: 0;"/>
    </form>
    <!-- header -->
        <h1>Current revenue per delivery method</h1>
        <?php
            $dbname = 'test';
            $dbuser = 'root';
            $dbpass = '';
            $dbhost = 'localhost';

            //connects to database
            $link = @mysqli_connect($dbhost, $dbuser, $dbpass) or die("Unable to Connect to '$dbhost'");
            @mysqli_select_db($link, $dbname) or die("Could not open the db '$dbname'");
            //sql query to get values
            $sql = "SELECT SUM(`ORDER_COST`) as 'revenue', `ORDER_DELIVERY` as 'delivery method' FROM `orders` GROUP BY ORDER_DELIVERY;";
            //echos table format
            echo '<table border="2" cellspacing="10" cellpadding="10"> 
             <tr> 
          <td> <font face="Arial">delivery method</font> </td> 
          <td> <font face="Arial">revenue</font> </td>  
            </tr>';

            //if there's a result, fills out table.
            if ($result = $link->query($sql)) 
            {
             while ($row = $result->fetch_assoc()) 
                {
                 $field1name = $row["delivery method"];
                 $field2name = $row["revenue"]; 
 
                 echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
              </tr>';
              }
          
          //frees result
    $result->free();
}
    ?>
     </div> <!-- end of wrapper -->
</body>
</html>