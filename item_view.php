<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glass City</title>

  <!-- Bootstrap CSS -->  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> 
    
    <!-- JQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <!-- Bootstrap JavaScript Bundle (w/ popper.js  -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="style.css">
    <script> 
$(function(){
  $("#header").load("header.php");
  $("#footer").load("footer.php");   
});
</script>
    <?php
    require("db.php");
    $itemID = htmlspecialchars($_GET["itemID"]);
    $query = "SELECT Title, Description, Color, Price, inStock, Pieces, imagePath FROM items WHERE itemID='$itemID'";
    $result = $db->query($query);
    $row = $result->fetch_assoc();
    
    $title = $row['Title'];
    $description = $row['Description'];
    $color = $row['Color'];
    $price = $row['Price'];
    $inStock = $row['inStock'];
    $pieces = $row['Pieces'];
    $image_location = $row['imagePath'];
    
    ?>
    
    <style>
        #main_img {
            max-width:80%;
            height: auto;
        }
    </style>
</head>
<body>
<div id="header"></div>
    <div class="jumbotron">
    <h1>Glass City Bongs</h1>
    </div>
    <br>
    <div class="container">
    <div class="row">
        <div class="col-lg-4">
            <img id="main_img" src='<?php echo $image_location; ?>'>
            <br>
            <h5>In Stock: <?php echo $inStock; ?></h5>
            <br>
            <h4>Colors:</h4>
        </div> 
        <div class="col-lg-4">
            <h2><?php echo $title;?></h2>
            <br>
            <p><?php echo $description;?></p>
            <br>
            <ul>
            <?php
                echo "<li>Color: $color</li>";
                echo "<li>Pieces: $pieces</li>";
            ?>
            </ul>
        </div>
        <div class="col-lg-4">
            <h1>$<?php echo $price;?></h1>
        </div>
        
     </div></div>
    
    
<div id="footer"></div>
    </body></html>