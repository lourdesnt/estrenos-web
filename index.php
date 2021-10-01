<!doctype html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Personal CSS -->
    <link href="style/estilos web.css" type="text/css" rel="stylesheet" />
  </head>
  
  <body>
    <div class="container-fluid">
    
      <!--HEADER-->
      <?php include 'header.php'; ?>

    <!--CONTENIDO-->
      <div class="row my-3 mx-4">
        <h1><b><em>DESTACADOS</em></b></h1>
      </div>
      <div class="row m-3">
        <div id="carousel" class="carousel slide; col-md-8" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <a href="amazon.php"><img src="images/s_cid.jpg" class="d-block w-100"></a>
            </div>
            <div class="carousel-item">
              <a href="television.php"><img src="images/s_navy.jpg" class="d-block w-100"></a>
            </div>
            <div class="carousel-item">
              <a href="cines.php"><img src="images/s_nomadland.jpg" class="d-block w-100"></a>
            </div>
            <div class="carousel-item">
              <a href="disney.php"><img src="images/s_amadrinadas.jpg" class="d-block w-100"></a>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <div class="col-md-3 my-3">
          <h6>&#128293; Tendencias &#128293;</h6>
          <p>
            <a href="netflix.php">Netflix</a> — <a href="hbo.php">Euphoria</a> — <a href="disney.php">Disney</a> —
            <a href="netflix.php">Sabrina</a> — <a href="hbo.php">HBO</a> — <a href="amazon.php">Lorente</a> —
            <a href="hbo.php">Zendaya</a> — <a href="amazon.php">Amazon</a>
          </p>
        </div>
      </div>
    </div>

    <!-- FOOTER -->
    <?php include 'footer.php'; ?>
  
    <!-- Optional JavaScript -->
    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
  </body>
</html>