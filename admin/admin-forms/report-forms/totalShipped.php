  <?php
    $r = getenv('DOCUMENT_ROOT');
    $path = $r . '/wms/admin/php/connection.php';
    $messagepath = $r . '/wms/admin/messagebox/manageorder-message.php';
    include($path);
    $select = mysqli_query($conn, "SELECT COUNT(Delivered_Date) as Daily FROM order_lists WHERE Status <> 'Returned' AND Delivered_Date >= CURRENT_DATE - INTERVAL 6 DAY AND MONTH(Delivered_Date) = MONTH(CURRENT_DATE)");
    $daily = mysqli_fetch_assoc($select);  
    $select2 = mysqli_query($conn, "SELECT COUNT(Delivered_Date) as Weekly FROM order_lists WHERE Status <> 'Returned' AND Delivered_Date < DATE_SUB(NOW(), INTERVAL 1 WEEK) AND MONTH(Delivered_Date) = MONTH(CURRENT_DATE) AND YEAR(Delivered_Date) = YEAR(CURRENT_DATE) ");
    $weekly = mysqli_fetch_assoc($select2);
    $select3 = mysqli_query($conn, "SELECT COUNT(Delivered_Date) as Monthly FROM order_lists WHERE Status <> 'Returned' AND YEAR(Delivered_Date) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH) AND MONTH(Delivered_Date) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH) OR MONTH(Delivered_Date) = MONTH(CURRENT_DATE - INTERVAL 2 MONTH) OR MONTH(Delivered_Date) = MONTH(CURRENT_DATE - INTERVAL 3 MONTH) OR MONTH(Delivered_Date) = MONTH(CURRENT_DATE - INTERVAL 4 MONTH) OR MONTH(Delivered_Date) = MONTH(CURRENT_DATE - INTERVAL 5 MONTH) OR MONTH(Delivered_Date) = MONTH(CURRENT_DATE - INTERVAL 6 MONTH) OR MONTH(Delivered_Date) = MONTH(CURRENT_DATE - INTERVAL 7 MONTH) OR MONTH(Delivered_Date) = MONTH(CURRENT_DATE - INTERVAL 8 MONTH) OR MONTH(Delivered_Date) = MONTH(CURRENT_DATE - INTERVAL 9 MONTH) OR MONTH(Delivered_Date) = MONTH(CURRENT_DATE - INTERVAL 10 MONTH) OR MONTH(Delivered_Date) = MONTH(CURRENT_DATE - INTERVAL 11 MONTH)");
    $monthly = mysqli_fetch_assoc($select3);
    $select4 = mysqli_query($conn, "SELECT COUNT(Delivered_Date) as Annual FROM order_lists WHERE Status <> 'Returned' AND YEAR(Delivered_Date) = YEAR(CURRENT_DATE - INTERVAL 1 YEAR);");
    $annual = mysqli_fetch_assoc($select4);
?>
  
  <!--Daily-->
   <div class="totalbox" id="daily" onclick="getDailyData();" >
        <div class="row">
            <div class="col-10">
                <h3>Daily</h3>
                <h5>Total Delivered Orders</h5>
            </div>
            <div class="col">
                <h1><?php echo $daily['Daily'];?></h1>
            </div>
        </div>       
    </div>
    <!--Weekly-->
    <div class="totalbox" id="weekly" onclick="getWeeklyData('weekly')">
        <div class="row">
            <div class="col-10">
                <h3>Weekly</h3>
                <h5>Total Delivered Orders</h5>
            </div>
            <div class="col">
                <h1><?php echo $weekly['Weekly']; ?></h1>
            </div>
        </div>       
    </div>
    <!--Monthly-->
    <div class="totalbox" id="monthly" onclick="getMonthlyData('monthly')">
        <div class="row">
            <div class="col-10">
                <h3>Monthly</h3>
                <h5>Total Delivered Orders</h5>
            </div>
            <div class="col">
                <h1><?php echo $monthly['Monthly'];?></h1>
            </div>
        </div>       
    </div> 
    <!--Annual-->
    <div class="totalbox" id="annual" onclick="getAnnualData('annual')">
        <div class="row">
            <div class="col-10">
                <h3>Annual</h3>
                <h5>Total Delivered Orders</h5>
            </div>
            <div class="col">
                <h1><?php echo $annual['Annual']; ?></h1>
            </div>
        </div>       
    </div>