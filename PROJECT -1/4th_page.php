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
    <a class="navbar-brand text-info" href="1st_page.php">MY SHOPPING CART</a>
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

      </div>
      <div class="col-md-8">
        <div class="jumbotron p-3 mt-5">

          <?php
          session_start();
          if (empty($_SESSION['counter']) and empty($_SESSION['username'])) {
            header("location:login.php");
          } else {
            $x = $_GET['x'];
            $conn = mysqli_connect('localhost', 'root', '', 'test');
            $sql = "select * from furniture where variety='$x'";
            //establish the connection betn amd mysql and execute the sql
            $result = mysqli_query($conn, $sql);
            $r = mysqli_num_rows($result);
            switch ($x) {
              case 111:
                $type = 1111;
                break;
              case 112:
                $type = 1121;
                break;
              case 113:
                $type = 1131;
                break;
              case 114:
                $type = 1141;
                break;
              case 121:
                $type = 1211;
                break;
              case 122:
                $type = 1221;
                break;
              case 123:
                $type = 1231;
                break;
              case 124:
                $type = 1241;
                break;
              case 131:
                $type = 1311;
                break;
              case 132:
                $type = 1321;
                break;
              case 133:
                $type = 1331;
                break;
              case 134:
                $type = 1341;
                break;
              case 141:
                $type = 1411;
                break;
              case 142:
                $type = 1421;
                break;
              case 143:
                $type = 1431;
                break;
              case 144:
                $type = 1441;
                break;
              case 151:
                $type = 1511;
                break;
              case 152:
                $type = 1521;
                break;
              case 153:
                $type = 1531;
                break;
              case 154:
                $type = 1541;
                break;
              case 161:
                $type = 1611;
                break;
              case 162:
                $type = 1621;
                break;
              case 163:
                $type = 1631;
                break;
              case 164:
                $type = 1641;
                break;
              case 171:
                $type = 1711;
                break;
              case 172:
                $type = 1721;
                break;
              case 173:
                $type = 1731;
                break;
              case 174:
                $type = 1741;
                break;
              case 175:
                $type = 1751;
                break;
              case 211:
                $type = 2111;
                break;
              case 212:
                $type = 2121;
                break;
              case 213:
                $type = 2131;
                break;
              case 214:
                $type = 2141;
                break;

              case 221:
                $type = 2211;
                break;
              case 222:
                $type = 2221;
                break;
              case 223:
                $type = 2231;
                break;
              case 224:
                $type = 2241;
                break;

              case 231:
                $type = 2311;
                break;
              case 232:
                $type = 2321;
                break;
              case 233:
                $type = 2331;
                break;
              case 234:
                $type = 2341;
                break;

              case 241:
                $type = 2411;
                break;
              case 242:
                $type = 2421;
                break;
              case 243:
                $type = 2431;
                break;
              case 244:
                $type = 2441;
                break;

              case 311:
                $type = 3111;
                break;
              case 312:
                $type = 3121;
                break;
              case 313:
                $type = 3131;
                break;

              case 321:
                $type = 3211;
                break;
              case 322:
                $type = 3221;
                break;
              case 323:
                $type = 3231;
                break;
              case 324:
                $type = 3241;
                break;

              case 331:
                $type = 33311;
                break;
              case 332:
                $type = 3321;
                break;
              case 333:
                $type = 3331;
                break;
              case 334:
                $type = 3341;
                break;

              case 341:
                $type = 3411;
                break;
              case 342:
                $type = 3421;
                break;
              case 343:
                $type = 3431;
                break;

              case 351:
                $type = 3511;
                break;
              case 352:
                $type = 3521;
                break;
              case 353:
                $type = 3531;
                break;

              case 411:
                $type = 4111;
                break;
              case 412:
                $type = 4121;
                break;
              case 413:
                $type = 4131;
                break;
              case 414:
                $type = 4141;
                break;

              case 421:
                $type = 4211;
                break;
              case 422:
                $type = 4221;
                break;
              case 423:
                $type = 4231;
                break;
              case 424:
                $type = 4241;
                break;

              case 431:
                $type = 4311;
                break;
              case 432:
                $type = 4321;
                break;
              case 433:
                $type = 4331;
                break;
              case 434:
                $type = 4341;
                break;

              case 511:
                $type = 5111;
                break;
              case 512:
                $type = 5121;
                break;
              case 513:
                $type = 5131;
                break;
              case 514:
                $type = 5141;
                break;
              case 515:
                $type = 5151;
                break;

              case 611:
                $type = 6111;
                break;
              case 612:
                $type = 6121;
                break;
              case 613:
                $type = 6131;
                break;
              case 614:
                $type = 6141;
                break;

              case 621:
                $type = 6211;
                break;
              case 622:
                $type = 6221;
                break;
              case 623:
                $type = 6231;
                break;
              case 624:
                $type = 6241;
                break;

              case 631:
                $type = 6311;
                break;
              case 632:
                $type = 6321;
                break;
              case 633:
                $type = 6331;
                break;

              case 641:
                $type = 6411;
                break;
              case 642:
                $type = 6421;
                break;
              case 643:
                $type = 6431;
                break;

              case 711:
                $type = 7111;
                break;
              case 712:
                $type = 7121;
                break;
              case 713:
                $type = 7131;
                break;

              case 721:
                $type = 7211;
                break;
              case 722:
                $type = 7221;
                break;
              case 723:
                $type = 7231;
                break;
              case 724:
                $type = 7241;
                break;

              case 731:
                $type = 7311;
                break;
              case 732:
                $type = 7321;
                break;
              case 733:
                $type = 7331;
                break;
              case 734:
                $type = 7341;
                break;

              case 811:
                $type = 8111;
                break;
              case 812:
                $type = 8121;
                break;
              case 813:
                $type = 8131;
                break;
              case 814:
                $type = 8141;
                break;

              case 821:
                $type = 8211;
                break;
              case 822:
                $type = 8221;
                break;
              case 823:
                $type = 8231;
                break;
              case 824:
                $type = 8241;
                break;

              case 831:
                $type = 8311;
                break;
              case 832:
                $type = 8321;
                break;
              case 833:
                $type = 8331;
                break;
              case 834:
                $type = 8341;
                break;

              case 841:
                $type = 8411;
                break;
              case 842:
                $type = 8421;
                break;
              case 843:
                $type = 8431;
                break;
              case 844:
                $type = 8441;
                break;

              case 851:
                $type = 8511;
                break;
              case 852:
                $type = 8521;
                break;
              case 853:
                $type = 8531;
                break;
              case 854:
                $type = 8541;
                break;
              case 911:
                $type = 9111;
                break;
              case 912:
                $type = 9121;
                break;
              case 913:
                $type = 9131;
                break;
              case 914:
                $type = 9141;
                break;
              case 915:
                $type = 9151;
                break;
              case 916:
                $type = 9161;
                break;
              case 917:
                $type = 9171;
                break;
              case 918:
                $type = 9181;
                break;
              case 919:
                $type = 9191;
                break;
              case 921:
                $type = 9211;
                break;
              case 922:
                $type = 9221;
                break;
              case 923:
                $type = 9231;
                break;
              case 924:
                $type = 9241;
                break;
              case 925:
                $type = 9251;
                break;
              case 931:
                $type = 9311;
                break;
              case 932:
                $type = 9321;
                break;
              case 933:
                $type = 9331;
                break;
              case 934:
                $type = 9341;
                break;
              case 941:
                $type = 9411;
                break;
              case 942:
                $type = 9421;
                break;
              case 943:
                $type = 9431;
                break;
               case 1011:
                 $type = 10111;
                 break;
              case 1012:
              $type = 10121;
              break;
              case 1013:
              $type = 10131;
              break;
              case 1014:
              $type = 10141;
              break; 
              case 1015:
              $type = 10151;
              break;
              case 1016:
              $type = 10161;
              break;
              case 1017:
              $type = 10171;
              break;
              case 1018:
              $type = 10181;
              break; 
              case 1019:
              $type = 10191;
              break;
              case 1021:
              $type = 10211;
              break;
           case 1022:
           $type = 10221;
           break;
           case 1023:
           $type = 10231;
           break;
           case 1024:
           $type = 10241;
           break; 
           case 1025:
           $type = 10251;
           break;
           case 1026:
           $type = 10261;
           break;
           case 1027:
           $type = 10271;
           break;
           case 1028:
           $type = 10281;
           break; 
           case 1029:
           $type = 10291;
           break;
           case 1031:
           $type = 10311;
           break;
        case 1032:
        $type = 10321;
        break;
        case 1033:
        $type = 10331;
        break;
        case 1034:
        $type = 10341;
        break; 
        case 1035:
        $type = 10351;
        break;
        case 1036:
        $type = 10361;
        break;
        case 1037:
        $type = 10371;
        break;
        case 1038:
        $type = 10381;
        break; 
        case 1039:
        $type = 10391;
        break;
        case 1041:
        $type = 10411;
        break;
     case 1042:
     $type = 10421;
     break;
     case 1043:
     $type = 10431;
     break;
     case 1044:
     $type = 10441;
     break; 
     case 1045:
     $type = 10451;
     break;
     case 1046:
     $type = 10461;
     break;
     case 1047:
     $type = 10471;
     break;
     case 1048:
     $type = 10481;
     break; 
     case 1049:
     $type = 10491;
     break;
            }
              
            $t = 0;
            $cnt = 0;

            if (mysqli_num_rows($result) > 0) {

              echo "<div class='row'>";
              while ($row = mysqli_fetch_assoc($result)) {

                if ($type == ($row["slide"])) {

                  echo "<div class='col-md-4 p-1'>";
                  echo "<div class='jumbotron p-1 p-1 bg-secondary'>";
                  if($row["variety"] <=900)
                  print("<img src=image/all/" . $row["slide"] . ".jpg" . " class='rounded img-fluid'><br><br>");
                  else
                  print("<img src=image/all/" . $row["slide"] . ".jpeg" . " class='rounded img-fluid'><br><br>");
                  $type++;
                  $cnt++;
                  echo "<h5 style='color:Orange;'>" . $row["varieties_name"] . "</h5>";
                  echo "</div>";
                  if ($t == 0) {

                    echo " <form  method=post action=delivery_address.php>";
                    echo "Price:" . $row["price"] . "<br>";
                    echo "Only " . $row["qty"] . " are left";
                    echo "<br>qty:<input type='number' name='qty' class='form-control' placeholder='qty' min=0 max=" . $row["qty"] . "required>";
                    echo "<br><input type='hidden' name='varieties_name' value='" . $row["varieties_name"] . "'class='form-control'>";
                    echo "<br><input type='hidden' name='price' value='" . $row["price"] . "'class='form-control'>";
                    echo "<br><input type='hidden' name='variety' value='" . $row["variety"] . "'class='form-control'>";

                    $t++;
                  }

                  echo "</div>";
                }


                if ($cnt % 3 == 0) {
                  echo "</div><div class='row'>";
                }
              }
              echo "<br><input type=submit value=Buy class='btn btn-outline-primary btn-block'> ";
              echo "</form>";
            }
            echo "</div>";

            // echo "<a href='delivery_address.php'> <button type='button' class='btn btn-outline-primary btn-block'>Buy</button></a>";
          }
          ?>



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
        My Shoping Cart
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
        My Shoping CartInternet Private Limited,

        GIET Gunupur

        gudubhagbat9012@gmail.com
      </p>
    </div>
</footer>

</html>