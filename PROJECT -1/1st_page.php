<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css" crossorigin="anonymous">

  <title>fristpage</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark bg-secondary">
    <a class="navbar-brand text-info" href="1st_page.php">MY SHOPPsING CART</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">


        <li class="nav-item dropdown">


        </li>

      </ul>
      <form class="form-inline my-2 my-lg-0" action="search.php" method="post">
        <input name="search" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>


  <div class="container-fluid">
    <div class="row">

      <div class="col-md-2">
        <br><br>
      </div>
      <div class="col-md-8">
        <div class="jumbotron p-3 mt-5">

          <?php
          session_start();
          if (empty($_SESSION['counter']) and empty($_SESSION['username'])) {
            header("location:login.php");
          } else {
            $conn = mysqli_connect('localhost', 'root', '', 'test');
            $sql = 'select * from furniture';
            //establish the connection betn amd mysql and execute the sql
            $result = mysqli_query($conn, $sql);
            $r = mysqli_num_rows($result);
            $type = 1;
            $cnt = 0;
            if (mysqli_num_rows($result) > 0) {
              echo "<div class='row'>";
              while ($row = mysqli_fetch_assoc($result)) {

                if ($type == ($row["category"])) {
                  echo "<div class='col-md-4 p-1'>";
                  echo "<div class='jumbotron p-1 bg-secondary'>";
                  $type = $type + 1;
                  $cnt++;
                 
                  print("<a href=2nd_page.php?v=" . $row["category"] . "><img src=" . $row["category"] . ".jpg" . " class='rounded img-fluid'></a>");
                 
                  echo "<a style='color:#FFFFFF' href=2nd_page.php?v=" . $row["category"] . ">" . $row["category_name"] . "</a>";
                  echo "</div>";
                  echo "</div>";
                }


                if ($cnt % 3 == 0) {
                  echo "</div><div class='row'>";
                }
              }
            }
          }
          ?>

        </div>
      </div>

      <div class="col-md-2">
      </div>

    </div>
  </div>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
<footer><br><br>
  <div class="row jumbotron p-1 bg-dark" align-bottom>
    <div class="col-md-3">
      <p style="color:white;">ABOUT<br>
        Contact Us
        About Us
        MY SHOPING CART
        Press</p>
    </div>
    <div class="col-md-3">
      <p style="color:white;">
        HELP<br>
        Payments
        Shipping
        Cancellation & Returns
        FAQ
        Report Infringement
      </p>
    </div>
    <div class="col-md-3">
      <p style="color:white;">
        POLICY<br>
        Return Policy
        Terms Of Use
        Security
        Privacy
        Sitemap
        EPR Compliance
      </p>
    </div>
    <div class="col-md-3">
      <p style="color:white;">
        Mail Us:
        MY shopping cart Internet Private Limited,

        GIET Gunupur

        gudubhagbat9012@gmail.com
      </p>
    </div>
</footer>

</html>