<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reports</title>
    <?php include('includes/top.php');?>
</head>
<body>
    <div class="sidenav">
        <?php include('includes/sidenav.php');?>
    </div>
    <!--Content-->
    <div class="content">
            <!--Top-->
            <div class="Top">
                <h1>Reports</h1>
            </div>   
            <!--Content-->        
            <div class="contentbox">
                <?php include('admin-forms/reports-form.php');?>
            </div>
    </div>


<script>
   <?php include('javascript/report.js');?>
   <?php include('javascript/reportAjax.js'); ?>
</script>
<?php include('includes/bottom.php'); ?>