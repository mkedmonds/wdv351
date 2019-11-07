<?php

session_start();

if ($_SESSION['magazine'] !== "purchase") {
	header('Location: digitalPayPalHome.html');
}
    
    

?>

<!DOCTYPE html>
<html>
<head>

    <title>Payment Succesful</title>

    <link rel="stylesheet" href="digital.css">

</head>
<body>


    <div id="container">

        <header>
                <h1>Collie's Digital Shop</h1>
        
        </header>
        
        <nav class="topnav">

                <a href="digitalPayPalHome.html">Home</a>  
    
                <a href="digitalPayPalBuy.php">View Our Products</a>
    
                <a  href="digitalContact.html">Contact Us!</a>
    
        </nav>

        <main>

        <h2>Thank you for your purchase!</h2>

        <h4>Here are your products</h4>

        <p><a href="magazine.JPG" download=""> Magazine Image</a></p>

        <p><a href="magazine.docx" download>Magazine Doc</a></p>

        <p><a href="magazine.pdf" download>Magazine PDF</a></p>

        <p><a href="magazine.zip" download>Magazine Zip</a></p>

        <p><a href="traffic.mp4" download>"Magazine" video</a></p>

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