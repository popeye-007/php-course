<!DOCTYPE html>
<html>
  <head>
    <title>PHP Store</title>
  </head>
  <body>
    <?php
    // Using two forward slashes we create comments in php.
    // Within the php tag, we can insert values into our HTML.
    //*****Variables******
    $name= 'PHP Store';
    $credit=1000;
    $products['Computer'] = 750;
    $products['Car'] = 15000;
    $products['iPhone'] = 1000;
    $products['Toaster'] = 75;

    //******DisplayResults******
    echo "<h1>Welcome to ".$name."!</h1>";
    echo "<h2>You Have $".$credit." in your wallet </h2>";
    echo "<p>A Car cost $".$products['Car']."</p>";

    ?>
  </body>
</html>
