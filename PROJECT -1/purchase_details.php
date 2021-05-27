<link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css" crossorigin="anonymous">
<h1 style="color:black">Purchase details of custmer</h1><br><br><br>

<table class="table table-striped table-dark">
    <thead>
        <tr>
            <th scope="col">Sl No.</th>
            <th scope="col">username</th>
            <th scope="col">Name</th>
            <th scope="col">Pin Code</th>
            <th scope="col">State</th>
            <th scope="col">City</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Payment Method</th>
            <th scope="col">Product Name</th>
            <th scope="col">Price</th>
            <th scope="col">Qty</th>
            <th scope="col">Purchase Date</th>
        </tr>
    </thead>
    <tbody>
        <?php
        session_start();
        if (empty($_SESSION['counter']) and empty($_SESSION['username'])) {
            header("location:admin_login.php");
        } else {
            $conn = mysqli_connect('localhost', 'root', '', 'test');
            $sql = 'select * from customer';
            $result = mysqli_query($conn, $sql);
            $r = mysqli_num_rows($result);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo " <tr>";
                    echo "<td>" . $row["srno"] . "</td>";
                    echo " <td>" . $row["username"] . "</td>";
                    echo " <td>" . $row["name"] . "</td>";
                    echo "  <td>" . $row["pincode"] . "</td>";
                    echo "  <td>" . $row["state"] . "</td>";
                    echo " <td>" . $row["city"] . "</td>";
                    echo " <td>" . $row["phone_number"] . "</td>";
                    echo "  <td>" . $row["payment_method"] . "</td>";
                    echo " <td>" . $row["product_name"] . "</td>";
                    echo " <td>" . $row["price"] . "</td>";
                    echo " <td>" . $row["qty"] . "</td>";
                    echo " <td>" . $row["purchase_date"] . "</td>";
                    echo " </tr>";
                }
            }
        }
        ?>
    </tbody>
</table>