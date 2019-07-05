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
    <style>
    @media screen and (max-width: 992px) {
    .card-img-top{
        max-width: 40%;
        height: auto;
    }
}</style>
    
</head>
<body>
<div id="header"></div>
    
    <div class="container">
        
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-9">
                <form action="search_results.php" method="POST" role="form">   
    <div class="form-group">
        <label for='search_box'><h2>Search Here</h2></label>
        <input type="text" class="form-control" name="search_box" placeholder="search by tag (the shorter the better)">
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
                </form>
            </div>
          
        </div>

      <div class="row">

        <div class="col-lg-3">

          <img id="main_logo" src="images/logo_transparent.png">
          <div class="list-group">
            <a href="#" class="list-group-item">My Orders</a>
            <a href="#" class="list-group-item">What's Hot</a>
            <a href="#" class="list-group-item">Gallery</a>
          </div>

        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">

          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                  <a href="bongs.php">
                <img class="d-block img-fluid" src="images/many_bongs.jpg">
                  <div class="carousel-caption d-none d-md-block">
                        <h3>Many Bongs</h3>            
                      </div></a>
              </div>
              <div class="carousel-item">
                    <img class="d-block img-fluid" src="images/vapes.jpg">
                   <div class="carousel-caption d-none d-md-block">
                        <h3>Many Vapes</h3>            
                  </div>
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="images/cbdoil2.jpg">
                  <div class="carousel-caption d-none d-md-block">
                        <h3>Much Oils</h3>            
                  </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

          <div id="categories" class="row">

            <div class="col-xs-6 col-lg-4">
              <div class="card h-100">
                <a href="bongs.php"><img class="card-img-top "src="images/bong2.jpg" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Bongs</a>
                  </h4>
                  <p class="card-text">Pipes that filter smoke through water.</p>
                </div>
                <div class="card-footer">
                </div>
              </div>
            </div>

            <div class="col-xs-6 col-lg-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="images/pipe1.jpg"></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Pipes</a>
                  </h4>
                  <p class="card-text">When the simple things are what you want.</p>
                </div>
                <div class="card-footer">
                </div>
              </div>
            </div>

            <div class="col-xs-6 col-lg-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="images/vape1.jpg"></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Vapes</a>
                  </h4>
                  <p class="card-text">De wae.</p>
                </div>
                <div class="card-footer">
                </div>
              </div>
            </div>

            <div class="col-xs-6 col-lg-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="images/accessory1.jpg"></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Accessories</a>
                  </h4>
                  <p class="card-text">Bowl tools, cleaners, rolling papers, anything to support your hobby.</p>
                </div>
                <div class="card-footer">
                </div>
              </div>
            </div>

            <div class="col-xs-6 col-lg-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="images/apparel1.jpg"></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Apparel</a>
                  </h4>
                  <p class="card-text">Disappoint your family and classmates with our wide selection of chill clothes.</p>
                </div>
                <div class="card-footer">
                </div>
              </div>
            </div>

            <div class="col-xs-6 col-lg-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="images/cbdoil1.png"></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">CBD Oil</a>
                  </h4>
                  <p class="card-text">Got real problems? Fix it with science!</p>
                </div>
                <div class="card-footer">
                </div>
              </div>
            </div>

          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

<div id="footer"></div>   
</body>
</html>