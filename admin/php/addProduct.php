<?php 
include('connection.php');

  /*  if(isset($_POST['addProd']))
    {
        $productid = $_POST['prodid'];
        $productname = $_POST['prodname'];
        $desc = $_POST['description'];
        $barcode = $_POST['barcode'];
        $category = $_POST['category'];
        $bin = $_POST['bin'];
        $location = $_POST['location'];
        $unit = $_POST['size'];
        $qty = $_POST['qty'];
        $rqty = $_POST['rqty'];
        $cost = $_POST['cost'];

        //Queries
        $insert = "INSERT INTO inventory_product_lists(Product_ID, Product_Name, Description, Barcode, Category, Bin, 
                Location, Packaging_Size, Quantity, Reorder_Quantity, Cost) 
                VALUES ('$productid','$productname','$desc','$barcode','$category','$bin','$location','$unit',$qty,
                $rqty,$cost)"; 
                        
                        
            if(mysqli_query($conn, $insert))
            {
                header('Location:../manage-inventory.php');
            }
            else
            {
                echo '<script>alert("Failed Adding");
                        window.location.href = "../manage-inventory.php";
                      </script>';
            }           
    }*/

    if(isset($_POST['addProd']))
    {
        $productid = $_POST['prodid'];
        $productname = $_POST['prodname'];
        $desc = $_POST['description'];
        $barcode = $_POST['barcode'];
        $category = $_POST['category'];
        $bin = $_POST['bin'];
        $location = $_POST['location'];
        $unit = $_POST['size'];
        $qty = $_POST['qty'];
        $rqty = $_POST['rqty'];
        $cost = $_POST['cost'];

        $image = $_FILES['productimage']['tmp_name']; 
        
        $img = addslashes(file_get_contents($image));

        $insert = "INSERT INTO inventory_product_lists(Product_ID, Product_Name, Description, Barcode, Category, Bin, Location, Packaging_Size, Quantity, Reorder_Quantity, Cost, Product_Image) 
                VALUES ('$productid','$productname','$desc','$barcode','$category','$bin','$location','$unit',$qty, $rqty,$cost, '$img')";

        if(mysqli_query($conn, $insert))
        {
            header('Location:../manage-inventory.php');
        }
        else
        {
            echo '<script>alert("Failed Adding");
                    window.location.href = "../manage-inventory.php";
                </script>';
        }
    }
?>
