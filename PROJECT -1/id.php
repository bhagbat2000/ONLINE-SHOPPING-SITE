<?php
$v=$_GET['v'];
$conn = mysqli_connect('localhost', 'root', '','test');
$sql = "select * from furniture where sid='$v'";
$result = mysqli_query($conn, $sql);
$r=mysqli_num_rows($result);
print("<table border=1>");

$s=0;
if (mysqli_num_rows($result) > 0) 
	{
            while($row = mysqli_fetch_assoc($result)) 
		{
        echo "<tr><td>" . $row["sid"]. "</td>";
		echo "<td>" . $row["Price"]. "</td>";
		echo "<td> " . $row["furniture_Name"]. "</td>";
		echo "<td>" . $row["Category"]. "</td></tr>";
		}
      }
print("</table>");



?>