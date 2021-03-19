<!DOCTYPE html> <!-- php form -->
  <html>

    <head>
        <title>Welcome!</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <!-- ^^ Link the bootstrap CSS file to make it display correctly -->
        
    </head>
    <style>
        nav{ font-family: Helvetica; }
    </style>

<?php include "../navbar.php"; ?> 


<?php 
echo "Welcome ".$_GET['username']."!" ?>

</html>