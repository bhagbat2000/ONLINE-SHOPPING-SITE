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

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-2">

      </div>
      <div class="col-md-8">
        <div class="jumbotron p-3 mt-5">

          <?php
          session_start();
          if (empty($_SESSION['counter']) and empty($_SESSION['username'])) {
            header("location:login.php");
          } else {
          $search = $_POST['search'];

          $conn = mysqli_connect('localhost', 'root', '', 'test');
          $sql = "select * from furniture where type_name = '$search' or category_name='$search';";
          $result = mysqli_query($conn, $sql);
          $r = mysqli_num_rows($result);
          if (mysqli_num_rows($result) > 0) {

            while ($row = mysqli_fetch_assoc($result)) {
              $v = $row["types"];
            }
          }
          if (empty($v)) {    echo " <html>";
            echo "<head>";
            echo " <title> login form design</title>";
            echo "   <link rel='stylesheet' type='text/css' href='style.css'>";
            echo " <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><body>";
            echo " <div class='loginbox'>";
            echo "    <h1 style='color:red';>your search is not available</h1><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
            echo " <a href='1st_page.php'><h5 style='color:blue';>Back to login Page?</h5></a><br>";
            echo "	</div>";
            echo "</body> ";
            echo "</head>";
            echo "</html>";

              } else {
            switch ($v) {
              case 11:
                $type = 111;
                break;
              case 12:
                $type = 121;
                break;
              case 13:
                $type = 131;
                break;
              case 14:
                $type = 141;
                break;
              case 15:
                $type = 151;
                break;
              case 16:
                $type = 161;
                break;
              case 17:
                $type = 171;
                break;
              case 21:
                $type = 211;
                break;
              case 22:
                $type = 221;
                break;
              case 23:
                $type = 231;
                break;
              case 24:
                $type = 241;
                break;
              case 31:
                $type = 311;
                break;
              case 32:
                $type = 321;
                break;
              case 33:
                $type = 331;
                break;
              case 34:
                $type = 341;
                break;
              case 35:
                $type = 351;
                break;
              case 41:
                $type = 411;
                break;
              case 42:
                $type = 421;
                break;
              case 43:
                $type = 431;
                break;
              case 51:
                $type = 511;
                break;
              case 61:
                $type = 611;
                break;
              case 62:
                $type = 621;
                break;
              case 63:
                $type = 631;
                break;
              case 64:
                $type = 641;
                break;
              case 71:
                $type = 711;
                break;
              case 72:
                $type = 721;
                break;
              case 73:
                $type = 731;
                break;
              case 81:
                $type = 811;
                break;
              case 82:
                $type = 821;
                break;
              case 83:
                $type = 831;
                break;
              case 84:
                $type = 841;
                break;
              case 85:
                $type = 851;
                break;
                case 91:
                $type = 911;
                break;
                
               case 92:
               $type = 921;
               break;
               
               case 93:
                $type = 931;
                break;
                
               case 94:
               $type = 941;
               break;
               case 101;
               $type = 1011;
               break;
               case 102;
               $type = 1021;
               break;
               case 103;
               $type = 1031;
               break;
               case 104;
               $type = 1041;
               break;  
            }
          }
            ?>
            <?php
            $search = $_POST['search'];
            $conn = mysqli_connect('localhost', 'root', '', 'test');
            $sql = "select * from furniture where type_name = '$search' or category_name='$search';";
            $result = mysqli_query($conn, $sql);

            $cnt = 0;
            if (mysqli_num_rows($result) > 0) {

              echo "<div class='row'>";
              while ($row = mysqli_fetch_assoc($result)) {

                if ($type == ($row["variety"])) {
                  echo "<div class='col-md-4 p-1'>";
                  echo "<div class='jumbotron p-1 p-1 bg-secondary'>";
                  
                  if($row["types"]<=90)
                print("<a href=4th_page.php?x=" . $row["variety"] . "><img src=image/all/" . $row["variety"] . ".jpg" . " class='rounded img-fluid'></a>");
                else
                print("<a href=4th_page.php?x=" . $row["variety"] . "><img src=image/all/" . $row["variety"] . ".jpeg" . " class='rounded img-fluid'></a>");
                $type++;
                  $cnt++;
                  echo "<a style='color:#FFFFFF' href=4th_page.php?x=" . $row["variety"] . ">" . $row["varieties_name"] . "</a><br>";
                  echo "<h6 style='color:Violet;'> Price:" . $row["price"] . "</h6>";
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

</html>