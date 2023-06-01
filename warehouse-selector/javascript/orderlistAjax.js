function getDeliverData(id, session)
{    
    //var btn = document.getElementById("btn-deliver").parentElement.parentElement.parentElement.parentElement.parentElement.className;  
    //alert(btn); 
    $.ajax({
        type: "GET",
        url: "ws-forms/orderlist-forms/deliver-view.php",
            data: {
                'orderid': id
            },
        success: function(data){
          $('.deliver').html(data);
        }
    });
}   
function getOrderListData(id)
{    
    $.ajax({
        type: "GET",
        url: "ws-forms/orderlist-forms/orderlist-view.php",
            data: {
                    'orderid': id 
                  },
            success: function(data){
              $('.orderlist').html(data);
            }
        });
}

function getShipmentData(id)
{    
  $.ajax({
      type: "GET",
      url: "ws-forms/orderlist-forms/shipment-view.php",
      data: {
              'orderid': id 
            },
      success: function(data)
      {
        $('.shipment').html(data);
      }
  });
}

function getCancelledData(id){
  $.ajax({
    type: "GET",
    url: "ws-forms/orderlist-forms/cancel-view.php",
        data: {
                'orderid': id 
              },
        success: function(data){
          $('.cancel').html(data);
        }
    });
}

function deliverBack()
{
  $.ajax({
    url: "ws-forms/orderlist-forms/deliver.php",
    success: function(data){
      $('.deliver').html(data);
        }
  });
}
function orderBack()
{
  $.ajax({
    url: "ws-forms/orderlist-forms/orderlist.php",
    success: function(data){
      $('.orderlist').html(data);
        }
  });
}
function shipmentBack()
{
  $.ajax({
    url: "ws-forms/orderlist-forms/shipment.php",
    success: function(data){
      $('.shipment').html(data);
        }
  });
}
function cancelBack()
{
  $.ajax({
    url: "ws-forms/orderlist-forms/cancel.php",
    success: function(data){
      $('.cancel').html(data);
        }
  });
}

