<div class="row reportHead">
    <div class="col-3" id="wil">Warehouse Inventory List</div>
    <div class="col-3" id="ril">Recorded Inventory Level</div>
    <div class="col-3" id="tso">Total Shipped Order</div>
    <div class="col-3" id="tr">Total Returns</div>
</div>

<div class="warehouseList">
    <?php include('admin-forms/report-forms/warehouseList.php'); ?>
</div>


<div class="recordLevel">
    <?php include('admin-forms/report-forms/recordLevel.php'); ?>
</div>

<div class="totalShipped">
    <?php include('admin-forms/report-forms/totalShipped.php');?>
</div>

<div class="totalReturn">
   <?php include('admin-forms/report-forms/totalreturn.php');?>
</div>