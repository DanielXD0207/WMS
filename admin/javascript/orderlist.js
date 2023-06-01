$(document).ready(function(){
    $('#manageOrder').addClass(' active');
});
$(document).ready(function(){
    $('#orderList').addClass(' actives');
});
$(document).ready(function(){
    $('#orderList, #orders').click(function(){
        $('#orderList').addClass(' actives');
        $('#shipment').removeClass(' actives');
        $('#processed').removeClass(' actives');
        $('#cancelled').removeClass(' actives');
        $('.orderlist').show();
        $('.shipment').hide();
        $('.deliver').hide();
        $('.cancel').hide();
    });
});
$(document).ready(function(){
    $('#shipment, #ship').click(function(){
        $('#shipment').addClass(' actives');
        $('#orderList').removeClass(' actives');
        $('#processed').removeClass(' actives');
        $('#cancelled').removeClass(' actives');
        $('.shipment').show();
        $('.orderlist').hide();
        $('.deliver').hide();
        $('.cancel').hide();
    });
});
$(document).ready(function(){
    $('#processed, #process').click(function(){
        $('#processed').addClass(' actives');
        $('#shipment').removeClass(' actives');
        $('#orderList').removeClass(' actives');
        $('#cancelled').removeClass(' actives');
        $('.deliver').show();
        $('.shipment').hide();
        $('.orderlist').hide();
        $('.cancel').hide();
    });
});
$(document).ready(function(){
    $('#cancelled, #cancel').click(function(){
        $('#cancelled').addClass(' actives');
        $('#shipment').removeClass(' actives');
        $('#processed').removeClass(' actives');
        $('#orderList').removeClass(' actives');
        $('.cancel').show();
        $('.shipment').hide();
        $('.deliver').hide();
        $('.orderlist').hide();
    });
});
$(document).ready(function(){
    $('#ordered').addClass(' actives');
});

