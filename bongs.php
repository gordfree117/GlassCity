<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bongs</title>

  <!-- Bootstrap CSS -->  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> 
    
    <!-- JQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <!-- Bootstrap JavaScript Bundle (w/ popper.js  -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    
    <?php
    require("db.php");
    $query = "SELECT itemID, Title, Color, Price, imagePath FROM items WHERE Type='Bong'";
    $result = $db->query($query);
    
    ?>
<link rel="stylesheet" href="style.css">
    <style>
        .tile1{
            border-style:solid;
            border-color: #2b5496;
            border-width: 1px;
            border-radius: 10px;
            box-shadow: 5px 5px 8px #2b5496;
            margin-left: 5px;
            margin-right: 5px;
            margin-bottom: 40px;
            
        }
      .tile1 img {
            max-width: 70px;
            height: auto;
        }  
    </style>
    <script> 
$(function(){
  $("#header").load("header.php");
  $("#footer").load("footer.php");   
});
</script>
</head>
<body>
<div id="header"></div>
<div class="jumbotron">
    <h1>Glass City Bongs</h1>
    </div>
    
<br>
    
    <div class="container"> <!-- item grid -->
        <div class="row">
            
            <?php
            
            if ($result->num_rows > 0){
        while($row = $result->fetch_assoc()) {
  
            $image_location = $row['imagePath'];
            $item_title = $row['Title'];
            $price = $row['Price'];
            $itemID = $row["itemID"];
            $color = $row["Color"];
            
            echo
            "
            <div class='col-lg-3'> <!-- single grid item -->
            <a href='item_view.php?itemID=$itemID'>
                <div class='tile1'>
                <br>
            <img src='$image_location'>
                <h4>$item_title</h4>
                <h7>-$color-</h7>
                <br>
                <h6>$$price</h6>
                </div></a>
            </div>";
        }     
    } else {
        echo "Well, we're still small. That category is empty.";
    }
            ?>
        </div>
    </div>
<br>
<div id="footer"></div>
</body></html>