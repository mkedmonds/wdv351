<?php

    session_start();

    $_SESSION["magazine"]="purchase";

?>


<!DOCTYPE html>
<html>
<head>
  
    <title>Products</title>

    <link rel="stylesheet" href="digital.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <script
            src="https://www.paypal.com/sdk/js?client-id=AYc6SMnrPOb74om2UvOXBMIFMIYR2bZvqaM1-U9krQHmOeDKAqDEueMOVq5lqgXM79aUqg4sekR0XEVt&vault=true">
    </script>

</head>
<body>

    <div id="container">


        <header>
            <h1>Collie's Digital Shop</h1>

            <h2>Welcome!</h2>
        </header>

        

        <nav class="topnav">

                <a href="digitalPayPalHome.html">Home</a>  
    
                <a class="active" href="digitalPayPalBuy.php">View Our Products</a>
    
                <a href="digitalContact.html">Contact Us!</a>
    
            </nav>

        

        <main>

            <p>Subscribe to out Sewing Daily Magazine!</p>

            
            <img src="magazine.JPG" alt="Magazine">

            <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
            <input type="hidden" name="cmd" value="_s-xclick">
            <input type="hidden" name="hosted_button_id" value="REM35ZU9L5BPU">
            <input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
            <img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
            </form>



                
                
                
            

        </main>

        <footer>

            <h3>Copyright &copy; 
                
                <script>
                    var d = new Date();
                    document.write(d.getFullYear());
                </script>
            
                , All Rights Reserved 
            </h3>

        </footer>

    </div>

</body>
</html>