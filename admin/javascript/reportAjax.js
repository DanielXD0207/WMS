function getrecordedProductData(id)
{    
    $.ajax({
        type: "GET",
        url: "admin-forms/report-forms/recordLevel-view.php",
            data: {
                    'recordid': id 
                  },
            success: function(data){
              $('.recordLevel').html(data);
            }
        });
}
function recordBack()
{
  $.ajax({
    url: "admin-forms/report-forms/recordLevel.php",
    success: function(data){
      $('.recordLevel').html(data);
        }
  });
}

function shippedBack()
{
  $.ajax({
    url: "admin-forms/report-forms/totalShipped.php",
    success: function(data){
      $('.totalShipped').html(data);
        }
  });
}
function getDailyOrderData(id){
  $.ajax({
    type: "GET",
    url: "admin-forms/report-forms/total-shipped-forms/view/daily.php",
        data: {
                'orderid': id 
              },
        success: function(data){
          $('.totalShipped').html(data);
        }
    });
}
function dailyBack()
{
  $.ajax({
    url: "admin-forms/report-forms/total-shipped-forms/daily.php",
    success: function(data){
      $('.totalShipped').html(data);
        }
  });
}
function getWeeklyOrderData(id){
  $.ajax({
    type: "GET",
    url: "admin-forms/report-forms/total-shipped-forms/view/weekly.php",
        data: {
                'orderid': id 
              },
        success: function(data){
          $('.totalShipped').html(data);
        }
    });
}
function weeklyBack()
{
  $.ajax({
    url: "admin-forms/report-forms/total-shipped-forms/weekly.php",
    success: function(data){
      $('.totalShipped').html(data);
        }
  });
}
function getMonthlyOrderData(id){
  $.ajax({
    type: "GET",
    url: "admin-forms/report-forms/total-shipped-forms/view/monthly.php",
        data: {
                'orderid': id 
              },
        success: function(data){
          $('.totalShipped').html(data);
        }
    });
}
function monthlyBack()
{
  $.ajax({
    url: "admin-forms/report-forms/total-shipped-forms/monthly.php",
    success: function(data){
      $('.totalShipped').html(data);
        }
  });
}
function getAnnualOrderData(id){
  $.ajax({
    type: "GET",
    url: "admin-forms/report-forms/total-shipped-forms/view/annual.php",
        data: {
                'orderid': id 
              },
        success: function(data){
          $('.totalShipped').html(data);
        }
    });
}
function annualBack()
{
  $.ajax({
    url: "admin-forms/report-forms/total-shipped-forms/annual.php",
    success: function(data){
      $('.totalShipped').html(data);
        }
  });
}
function getDailyData()
{    
    $.ajax({
        type: "GET",
        url: "admin-forms/report-forms/total-shipped-forms/daily.php",
            success: function(data){
              $('.totalShipped').html(data);
            }
        });
}

function getWeeklyData()
{    
    $.ajax({
        type: "GET",
        url: "admin-forms/report-forms/total-shipped-forms/weekly.php",
            success: function(data){
              $('.totalShipped').html(data);
            }
        });
}
function getMonthlyData()
{    
    $.ajax({
        type: "GET",
        url: "admin-forms/report-forms/total-shipped-forms/monthly.php",
            success: function(data){
              $('.totalShipped').html(data);
            }
        });
}
function getAnnualData()
{    
    $.ajax({
        type: "GET",
        url: "admin-forms/report-forms/total-shipped-forms/annual.php",
            success: function(data){
              $('.totalShipped').html(data);
            }
        });
}

function getReturnedData(id)
{    
    $.ajax({
        type: "GET",
        url: "admin-forms/report-forms/returned.php",
            data: {
                    'productid': id 
                  },
            success: function(data){
              $('.totalReturn').html(data);
            }
        });
}
function getReturnedOrderData(id)
{    
  $.ajax({
    type: "GET",
    url: "admin-forms/report-forms/return-view.php",
        data: {
                'orderid': id 
              },
        success: function(data){
          $('.totalReturn').html(data);
        }
    });
}
function returnedOrderBack()
{
  $.ajax({
    url: "admin-forms/report-forms/returned.php",
    success: function(data){
      $('.totalReturn').html(data);
        }
  });
}
function returnedBack()
{
  $.ajax({
    url: "admin-forms/report-forms/totalreturn.php",
    success: function(data){
      $('.totalReturn').html(data);
        }
  });
}