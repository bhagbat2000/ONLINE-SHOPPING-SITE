<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css" crossorigin="anonymous">

  <title>DELIVERY ADDRESS</title>
</head>

<body>

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3">

      </div>
      <div class="col-md-6">
        <div class="jumbotron p-3 mt-5">
          <h1 class="text-danger">Delivery Address</h1>
          <form method=post action=buynow.php>
            <br>

            Pin code:<input type="text" name="pincode" class="form-control" placeholder="pin code" required><br>
            House no:<input type="text" name="House_NO" class="form-control" placeholder="House no,Buildingno" required><br>
            Road Area:<input type="text" name="Road_Area" class="form-control" placeholder="Road Area,Colony Area " required><br>
            City: <input type="text" name="City" class="form-control" placeholder="City" required><br>
            State: <select name=state class="custom-select custom-select-sm">
              <option>"Andhra Pradesh
              <option>Arunchal Pradesh
              <option>Assam
              <option>Bihar
              <option>Chattishgarh
              <option>Goa
              <option>Gujrat
              <option>Harayana
              <option>Himachal Pradesh
              <option>Jammu and Kashmir
              <option>Jarkhand
              <option>Karanataka
              <option>Kerala
              <option>Madhya Pradesh
              <option>Maharastra
              <option>Manipur
              <option>Meghalaya
              <option>Mizoram
              <option>Nagaland
              <option>Odisha
              <option>punjab
              <option>Rajasthan
              <option>Sikim
              <option>Tamil Nadu
              <option>Telegana
              <option>Tripura
              <option>Uttar pradesh
              <option>Uttarkhand
              <option>West Bengal
            </select><br><br>
            Name:<input type="text" name="name" class="form-control" placeholder="name" required><br>
            Mobile number:<input type="number" name="phone" class="form-control" placeholder="10 digit Mobile number" required><br>
            <!--Alternate Mobile Number:<input type="number" name="alternate" class="form-control" placeholder="Alternate Mobile number" require><br>-->
            Payment Method:<select name=payment class="custom-select custom-select-sm">
              <option>BHIM UPI
              <option>credit card
              <option>Debit card
              <option>Cash on Delivery
            </select>
            <br>

            <br>
            <?php
            session_start();
            if (empty($_SESSION['counter']) and empty($_SESSION['username'])) {
              header("location:login.php");
            } else {
            $qty = $_POST['qty'];
            $varieties_name = $_POST['varieties_name'];
            $price = $_POST['price'];
            $image = $_POST['variety'];
            $cgst = ((($price * $qty) / 100) * 18);
            $total_price = $cgst + $price;
            $Qty = 10-$qty;
            $conn = mysqli_connect('localhost', 'root', '', 'test');
            $sql = "UPDATE furniture SET qty = '$Qty' where varieties_name = '$varieties_name';";
            //establish the connection betn amd mysql and execute the sql
            $result = mysqli_query($conn, $sql);

            if($image <=900)
            print("<img src=image/all/" . $image . ".jpg" . " class='img-thumbnail'  height='300' width='200'>");
              else
              print("<img src=image/all/" . $image . ".jpeg" . " class='img-thumbnail'  height='300' width='200'>");


            echo "<input type='hidden' name='varieties_name' value='" . $varieties_name . "'class='form-control'>";
            echo "<input type='hidden' name='price' value='" . $total_price . "'class='form-control'>";
            echo "<input type='hidden' name='qty' value='" . $qty . "'class='form-control'><br><br>";

            echo "<div class='container'>";
            echo "<div class='row'>";
            echo "<div class='col-md-6'>";
            echo " <p class='text-secondary'>" . $varieties_name . "<br>";
            echo "Qty<br>";
            echo "Cgst  18%<br>";
            echo "Total Amount is<br></p>";
            echo "</div>";
            echo "<div class='col-md-6' align='right'>";
            echo "" . $price . "<br>";
            echo "" . $qty . "<br>";
            echo "" . $cgst . "<br>";
            echo "" . $total_price . "<br>";
            echo "</div>";
            echo "</div>";
            echo "</div>";





            }
            ?>
            <input type=submit value=Buy class='btn btn-outline-primary btn-block'>
          </form>
        </div>
      </div>
      <div class="col-md-3">

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