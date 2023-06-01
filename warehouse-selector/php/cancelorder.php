<?php
    include('connection.php');

    if(isset($_GET['orderid']))
    {
        $orderid = $_GET['orderid'];
        
        $update = "UPDATE order_lists SET Status = 'Cancelled' WHERE Order_ID = '$orderid'";

        if(mysqli_query($conn, $update))
        {
            header('Location:../manage-order-list.php');
        }
        else
        {
            echo '<script>alert("Order Failed"); window.location.href="../manage-order-list.php";</script>';
        }
    }
?>