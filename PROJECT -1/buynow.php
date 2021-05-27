<?php
$qty = $_POST['qty'];
$varieties_name = $_POST['varieties_name'];
$price = $_POST['price'];
$pincode = $_POST['pincode'];
$House_NO = $_POST['House_NO'];
$Road_Area = $_POST['Road_Area'];
$City = $_POST['City'];
$state = $_POST['state'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$payment = $_POST['payment'];
//echo $qty,$varieties_name,$price,$pincode,$House_NO,$Road_Area,$City,$state,$name,$phone,$payment;
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css" crossorigin="anonymous">

  <title>buy</title>
</head>

<body>

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3">

      </div>
      <div class="col-md-6">
        <div class="jumbotron p-3 mt-5">


          <?php
          $qty = $_POST['qty'];
          $varieties_name = $_POST['varieties_name'];
          $price = $_POST['price'];
          $pincode = $_POST['pincode'];
          $House_No = $_POST['House_NO'];
          $Road_Area = $_POST['Road_Area'];
          $city = $_POST['City'];
          $state = $_POST['state'];
          $name = $_POST['name'];
          $phone = $_POST['phone'];
          $payment = $_POST['payment'];
          echo "<h3  class='text-primary' class='font-weight-light'>Hi</h3><h4 class='font-italic' >" . $name . "</h4>";
          echo " <h5 class='font-weight-light'>your order has been successfully placed</h5><br><br>";
          echo " <p class='text-secondary'>Order name is :" . $varieties_name . "</p>";
          echo " <p class='text-success'>Amount Rs." . $price . "</p><br>";
          echo " <p class='font-weight-bold'>Delivery Address</p>";
          echo " <p class='font-weight-light'>" . $name . "<br>";
          echo   $House_No . "," . $Road_Area . "<br>";
          echo    $payment . "<br>";
          echo    $state . "," . $city . "," . $pincode;
          echo " </p>";
          echo "  <p class='font-weight-bold'>Phone Number</p>";
          echo "  <p class='font-weight-light'>" . $phone . "</p><br><br>";
          echo " <a href=1st_page.php> <p class='font-weight-bold'>Continue Shopping</p></a>";


          //echo $qty,$varieties_name,$price,$pincode,$House_NO,$Road_Area,$City,$state,$name,$phone,$payment;
          ?>
          <?php

          session_start();
          $email = $_SESSION['username'];
          $varieties_name = $_POST['varieties_name'];
          $qty = $_POST['qty'];
          $pincode = $_POST['pincode'];
          $city = $_POST['City'];
          $state = $_POST['state'];
          $name = $_POST['name'];
          $phone = $_POST['phone'];
          $payment_method = $_POST['payment'];
          $d = date('y-m-d');
          $qty1 = 0;
          $conn = mysqli_connect('localhost', 'root', '', 'test');
          $sql = "select * from furniture where varieties_name= '$varieties_name';";
          $result = mysqli_query($conn, $sql);
          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              $qty1 = $row["qty"];
            }
          }
          $Qty = $qty1 - $qty;
          ?>
          <?php

          if (empty($_SESSION['counter']) and empty($_SESSION['username'])) {
            header("location:login.php");
          } else {

            $conn = mysqli_connect('localhost', 'root', '', 'test');
            $sql1 = "UPDATE furniture SET qty = '$Qty' where varieties_name= '$varieties_name';";
            mysqli_query($conn, $sql1);
            ?>
            <?php
            $sql = "insert into customer(username,name,pincode,state,city,phone_number,payment_method,product_name,price,qty,purchase_date) values('$email','$name','$pincode','$state','$city','$phone','$payment','$varieties_name','$price','$qty','$d')";

            mysqli_query($conn, $sql);


            require 'phpmailer/PHPMailerAutoload.php';
            $mail = new PHPMailer();
            $mail->isSMTP();
            $mail->Host = "smtp.gmail.com";
            $mail->SMTPSecure = "ssl";
            $mail->Port = 465;
            $mail->SMTPAuth = true;
            $mail->Username = "gudubhagbat9012@gmail.com";
            $mail->Password = "9124694933";
            $mail->setFrom('gudubhagbat9012@gmail.com', 'Furniture');


            $mail->addAddress($email);


            $mail->isHTML(true);
            $mail->Subject = "Thanks For Shopping";
            $mail->Body = "<h3  class='text-primary' class='font-weight-light'>Hi</h3><h4 class='font-italic' >" . $name . "</h4>" . "<h5 class='font-weight-light'>your order has been successfully placed</h5><br><br>" .
              " <p class='text-secondary'> Order name is : " . $varieties_name . "</p>" .
              " <p class='text-success'>Amount Rs." . $price . "</p><br>" .
              " <p class='font-weight-bold'>Delivery Address</p>" .
              " <p class='font-weight-light'>" . $name . "<br>" .
              $House_No . "," . $Road_Area . "<br>" .
              $payment . "<br>" .
              $state . "," . $city . "," . $pincode .
              " </p>" .
              "  <p class='font-weight-bold'>Phone Number</p>" .
              "  <p class='font-weight-light'>" . $phone . "</p>";

            if ($mail->Send()) {
              echo "Mail sucessfully Send";
            } else {
              echo "somthing went wrong!!! The Mail can not send";
            }
          }
          ?>




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