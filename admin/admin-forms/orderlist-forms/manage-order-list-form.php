<div class="row manageOrderHead">
    <div class="col-3" id="orderList"><a href="#" id="orders">Received Order Lists</a></div>
    <div class="col-3" id="shipment"><a href="#" id="ship">In Loading</a></div>
    <div class="col-3" id="processed"><a href="#" id="process">Delivered Orders</a></div>
    <div class="col-3" id="cancelled"><a href="#" id="cancel">Cancelled Orders</a></div>
</div>

<!--Received Order List-->
<div class="orderlist">
    <?php include('orderlist.php');?> 
</div>

<!--Shipment Orders-->
<div class="shipment">
    <?php include('shipment.php');?>
</div>

<!--Processed Orders-->
<div class="deliver">
    <?php include('deliver.php');?>
</div>

<!--Cancelled Orders-->
<div class="cancel">
    <?php include('cancel.php');?>
</div>