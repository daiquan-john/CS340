<script>
function calculatePrice()
 {
      //Get selected data  
       var elt = document.getElementById("method");
      var method = elt.options[elt.selectedIndex].value;

      var elt = document.getElementById("crust");
      var crust = elt.options[elt.selectedIndex].value;

      var elt = document.getElementById("sauce");
      var sauce= elt.options[elt.selectedIndex].value;

      var elt = document.getElementById("pay");
      var pay= elt.options[elt.selectedIndex].value;

      elt = document.getElementById("cheese");
      var cheese = elt.options[elt.selectedIndex].value;

        elt = document.getElementById("top1");
      var top1 = elt.options[elt.selectedIndex].value;

        elt = document.getElementById("top2");
      var top2 = elt.options[elt.selectedIndex].value;
     
      //convert data to integers
      method = parseInt(method);
      crust = parseInt(crust);
      sauce = parseInt(sauce);
      cheese = parseInt(cheese);
      pay = parseInt(pay);
      top1 = parseInt(top1);
       top2 = parseInt(top2);
      //calculate total value  
      var total = 9.99 + (crust+sauce+cheese+top1+top2); 
      if(method == 3)
      total = total + 3;

      total = (total + (total * .08)).toFixed(2);

        //print value to  Price 
      document.getElementById("Price").value=total;

      if(pay == 1)
    {
        pay = "cash";
    }
    else 
    {
        pay = "credit";
    }   

    if(method = 1)
    {
        method = "dine-in";
    }
    else if(method = 2)
    {
        method = "carry out";
    }
    else
    {
        method = "delivery";
    }
      
      localStorage.setItem('valueToPass', [total]);
       localStorage.setItem('infoToPass', [pay]);
       localStorage.setItem('methodToPass', [method]);
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

    <link rel="stylesheet" href=    "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <title>Pizza Shope System</title>
</head> <!-- End of Head -->

<body onload="calculatePrice()">
    <!-- Start of Body -->
    <div class="wrapper fadeInDown">
    <!-- log out button to go back to log in page -->
    <form action="PizzaShopLogin.php">
    <input type="submit" value="Log out" style="position: absolute; right: 0; top: 0;"/>
    </form>

    <form action="PizzaShopLogin.php">
    <input type="submit"  onclick="return alert('Manager log in details must be entered.')"  value="Data" style="position: absolute; left: 0; top: 0;"/>

    </form>

    <!-- form for filling out pizza order -->
      <form name="myform" form method="get" action="saveOrder.php">    

    Select your method of pick-up:<br>
    <SELECT NAME="method" onChange="calculatePrice()" id="method" required>
       <OPTION value="1">dine in</OPTION>
       <OPTION value="2">carry out</OPTION>
       <OPTION value="3">delivery</OPTION>
    </SELECT><br><br>

    Select your method of pay:<br>
     <SELECT NAME="pay" onChange="calculatePrice()" id="pay" required>
       <OPTION value="1">Cash</OPTION>
       <OPTION value="2">Credit Card</OPTION>
    </SELECT><br><br>

      Select your type of crust:<br>
    <SELECT NAME="Crust" onChange="calculatePrice()" id="crust" required>
       <OPTION value="0">hand tossed</OPTION>
       <OPTION value="1">pan</OPTION>
       <OPTION value="2">stuffed Crust</OPTION>
    </SELECT><br><br>

    Select your sauce:<br>
    <SELECT NAME="sauce" onChange="calculatePrice()" id="sauce" required>
       <OPTION value="0">marinara</OPTION>
       <OPTION value="0">buffalo</OPTION>
       <OPTION value="0">barbeque</OPTION>   
    </SELECT><br><br>

    Select the amount of cheese:<br>
    <SELECT NAME="cheese" onChange="calculatePrice()" id="cheese" required>
       <OPTION value="0">none</OPTION>
       <OPTION value="0">light</OPTION>
       <OPTION value="0">regular</OPTION>
       <OPTION value="1">extra</OPTION>
    </SELECT><br><br>

     Select first topping:<br>
    <SELECT NAME="topping1" onChange="calculatePrice()" id="top1" required>
       <OPTION value="0">none</OPTION>
       <OPTION value="1">Pepperoni</OPTION>
       <OPTION value="1">Beef</OPTION>
       <OPTION value="1">Bacon</OPTION>
        <OPTION value="1">mushroom</OPTION>
       <OPTION value="1">onion</OPTION>
       <OPTION value="1">pineapple</OPTION>
    </SELECT><br><br>

      Select second topping:<br>
    <SELECT NAME="topping2" onChange="calculatePrice()" id="top2" required>
       <OPTION value="0">none</OPTION>
       <OPTION value="1">Pepperoni</OPTION>
       <OPTION value="1">Beef</OPTION>
       <OPTION value="1">Bacon</OPTION>
        <OPTION value="1">mushroom</OPTION>
       <OPTION value="1">onion</OPTION>
       <OPTION value="1">pineapple</OPTION>
    </SELECT><br><br>

    Total including tax:
    <INPUT type="text" name = "Price" id="Price" Size=8 readonly> 
      <input type="submit" value="Submit"> 
</form>

    </div> <!-- End of Wrapper -->

    <footer style="background-color: #A0D8C2">
        <p style="text-align: center;">Copyright 2020 Wright and Co. Pizza Company</p>
    </footer>

</body>
</html>