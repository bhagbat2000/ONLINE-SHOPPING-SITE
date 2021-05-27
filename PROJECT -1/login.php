<html>

<head>
  <title> login from design</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  </head>
  <style type="text/css">
    body{
  background-image : url(red-and-black-vintage-wallpaper-1-desktop-background.jpg);
  background-size:cover; 
 background-attachment:fixed; 
    }
    
    </style>
<body>
  <div class="loginbox">
    <h1>Login Here</h1>
    <form action="login.php" method="post">
      <p>USER NAME</p>
      <input type="text" name="username" placeholder="Enter Username" required>
      <p>PASSWORD</p>
      <input type="password" name="password" placeholder="Enter Password" required>
      <input type="submit" name="login" value="Login">
      <a href="forgot.html">Forgot my password?</a><br>
      <a href="sign_up.php">Dont have any account?</a>
    </form>
  </div>
</body>


</html>

<?php


if (isset($_POST["login"])) {

  $password = $_POST['password'];
  $username = $_POST['username'];
  $conn = mysqli_connect('localhost', 'root', '', 'test');
  $sql = "SELECT * FROM user WHERE mail = '$username' &&  password = '$password';";
  $result = mysqli_query($conn, $sql);
  $r = mysqli_num_rows($result);
  session_start();
  $_SESSION['counter'] = 1;
  $_SESSION['username'] = $username;

  $s = 0;

  if ($r > 0) {

    header("location:1st_page.php");
  } else {

    echo " <html>";
    echo "<head>";
    echo " <title> login form design</title>";
    echo "   <link rel='stylesheet' type='text/css' href='style.css'>";
    echo " <body>";
    echo " <div class='loginbox'>";
    echo "    <h1 style='color:red';>Wrong Password</h1><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
    echo " <a href='login.php'><h5 style='color:blue';>Back to login Page?</h5></a><br>";
    echo "	</div>";
    echo "</body> ";
    echo "</head>";
    echo "</html>";
  }
}
?>





















<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>