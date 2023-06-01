<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "wms";

    $conn = new mysqli($host, $username, $password, $dbname);
        
        if($conn->connect_error)
        {
            die("Connection Failed " .$conn->connect_error);
        }

    $select = mysqli_query($conn, "SELECT * FROM inventory_product_lists");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <!--Jquery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--CSS-->
</head>
<style>
    .form{
        display:none;
    }
    .form2{
        background:black;
        position:absolute;
        left:40%;
        width:500px;
        height:400px;
        border:solid black 2px;
    }
    .form-control{
        width:50%;
        margin:auto;
    }
</style>
<body>
    <button id="req">request</button>
    <div class="form">
        <table class="table table-bordered table-striped">
            <tr>
                <th>No.</th>
                <th>Product ID</th>
                <th>Product Name</th>
                <th>Description</th>
                <th>Quantity</th>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </table>
        <button id="add">add</button>
    </div>

    <div class="form2">
        <select class="form-control" onChange="getproductID(this.value);">
            <option value=''>Select Product ID</option>
            <?php while($list = mysqli_fetch_array($select)){?>
            <option value="<?php echo $list['Product_ID']; ?>"><?php echo $list['Product_ID']; ?></option>
            <?php } ?>
        </select>
    </div>
    <p id="test"></p>
<script>
    <?php include('js.js');?>
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</body>
</html>