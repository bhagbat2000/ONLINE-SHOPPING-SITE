<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css" crossorigin="anonymous">

    
  </head>
  <body>


        <?php
        $conn = mysqli_connect('localhost', 'root', '','test');
        $sql = 'select * from furniture';
        $result = mysqli_query($conn, $sql);
        $r=mysqli_num_rows($result);
        
        $s=0;
        if (mysqli_num_rows($result) > 0) 
            {
                    while($row = mysqli_fetch_assoc($result)) 
                {
                
                echo "<a href=id.php?v=". $row["sid"].">";
                
                
              echo ("<img src=LRM_EXPORT_20180815_145308-01.jpeg alt=Girl_in_a_jacket style=width:500px;height:600px;></a>");
                
                
                
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