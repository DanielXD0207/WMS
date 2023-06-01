
<?php

if(isset($_GET['orderid'])):
  $_SESSION['btn'] = 'hello';
endif;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <?php include('../admin/includes/top.php');?>
</head>
<script>
  function getdata(id){
        alert(id);  
    $.ajax({
        type: "GET",
        url: "text.php",
        data: {
            'orderid': id 
        },
        success: function(data){
          $('body').html(data);
        }
});
}
</script>
<body>
  <a href="#" onclick="getdata('110902');">click me</a>
  <div id="test">asdasdasd</div>


  <div">
    <a href="#?orderid=123" name="btn">Button</a>
  </div>
  <?php include('../admin/includes/bottom.php');?>