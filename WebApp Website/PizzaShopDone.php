<script>
function myfunction() {
var myData = localStorage['valueToPass'];
localStorage.removeItem( 'valueToPass'); // Clear the localStorage
value = myData;
var myData = localStorage['infoToPass'];
localStorage.removeItem( 'infoToPass'); // Clear the localStorage
pay = myData;
var myData = localStorage['methodToPass'];
localStorage.removeItem( 'methodToPass'); // Clear the localStorage
method = myData;
document.getElementById("myText").innerHTML = value;
}
</script>
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

<body onload = "myfunction()">
    <!-- Start of Body -->
    <div class="wrapper fadeInDown">
    <!-- takes you to log in page with an alert -->
    <form action="PizzaShopLogin.php">
    <input type="submit"  onclick="return alert('Manager log in details must be entered.')"  value="Data" style="position: absolute; left: 0; top: 0;"/>
    </form>
    <!-- takes you to log in page -->
    <form action="PizzaShopLogin.php">
    <input type="submit" value="Log out" style="position: absolute; right: 0; top: 0;"/>

    <!-- shows data before returning you to order page -->
    </form>
       <h1>The total is:  $<span id="myText"></span>. their pizza shall be ready shortly.</h1>
       <form action = "pizzaShopOrder.php">
     <input type="submit" value="Next Order"> 
    </form>

    </div> <!-- End of Wrapper -->

    <footer style="background-color: #A0D8C2">
        <p style="text-align: center;">Copyright 2020 Wright and Co. Pizza Company</p>
    </footer>

</body>
</html>