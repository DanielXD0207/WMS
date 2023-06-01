<?php
    include('connection.php');

    if(isset($_GET['orderid']))
    {
        $orderid = $_GET['orderid'];
        $select = mysqli_query($conn, "SELECT * FROM order_lists a INNER JOIN order_lists_products b ON a.Order_ID = b.Order_ID WHERE a.Order_ID = '$orderid'");
 
        while($list = mysqli_fetch_array($select)){
            $id = $list['Product_ID'];
            $qty = $list['Quantity'];
    
            $sql = mysqli_query($conn,"SELECT * FROM inventory_product_lists WHERE Product_ID = '$id'");
            $check = mysqli_fetch_assoc($sql);
    
            if($check['Quantity'] >= $list['Quantity'])
            {
                $sql2 = "UPDATE inventory_product_lists SET Quantity = Quantity - $qty WHERE Product_ID = '$id'";
                $date = date('Y-m-d');
                $update = "UPDATE order_lists SET Status = 'In Loading', Load_Date = '$date' WHERE Order_ID = '$orderid'";

                if(mysqli_query($conn, $sql2) && mysqli_query($conn, $update))
                {
                    header('Location:../manage-order-list.php');
                }
                else{
                    echo '<script>alert("Order Failed"); window.location.href="../manage-order-list.php";</script>';
                }
            }
            else{
                echo '<script>alert("Ordered product is greater than the quantity in the inventory"); window.location.href="../manage-order-list.php";</script>';
            }
        }
        
    }
?>