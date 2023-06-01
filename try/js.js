$(document).ready(function(){
    $('#req').click(function(){
        $('.form').show();
    });
});

function getproductID(id)
{    
    $.ajax({
        type: "GET",
            data: {
                    'productid': id 
                  },
            success: function(data){
              $('#test').html(data);
            }
        });
}