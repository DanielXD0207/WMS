 <?php
    $r = getenv('DOCUMENT_ROOT');
    $path = $r . '/wms/admin/php/connection.php';
    $messagepath = $r . '/wms/admin/messagebox/manageorder-message.php';
    include($path);

    $select = mysqli_query($conn, "SELECT COUNT(Status) as stats FROM order_lists WHERE Status = 'Returned'");
    $returned = mysqli_fetch_assoc($select);
 ?>
 
 <!--Total Returned-->
 <div class="totalbox" id="returned" onclick="getReturnedData()">
        <div class="row">
            <div class="col-10">
                <h3>RETURNED</h3>
                <h5>Total Returned Orders</h5>
            </div>
            <div class="col">
                <h1><?php echo $returned['stats'];?></h1>
            </div>
        </div>       
    </div>