$(document).ready(function(){
    $('#reports').addClass(' active');
});
$(document).ready(function(){
    $('#wil').addClass(' actives');
});

$(document).ready(function(){
    $('#wil').click(function(){
        $('#wil').addClass(' actives');
        $('#ril').removeClass(' actives');
        $('#tso').removeClass(' actives');
        $('#tr').removeClass(' actives');
        $('.totalReturn').hide();
        $('.warehouseList').show();
        $('.recordLevel').hide();
        $('.totalShipped').hide();
        
    });
});

$(document).ready(function(){
    $('#ril').click(function(){
        $('#ril').addClass(' actives');
        $('#wil').removeClass(' actives');
        $('#tso').removeClass(' actives');
        $('#tr').removeClass(' actives');
        $('.totalReturn').hide();
        $('.recordLevel').show();
        $('.warehouseList').hide();
        $('.totalShipped').hide();
    });
});

$(document).ready(function(){
    $('#tso').click(function(){
        $('#tso').addClass(' actives');
        $('#wil').removeClass(' actives');
        $('#ril').removeClass(' actives');
        $('#tr').removeClass(' actives');
        $('.recordLevel').hide();
        $('.totalReturn').hide();
        $('.warehouseList').hide();
        $('.totalShipped').show();
    });
});
$(document).ready(function(){
    $('#tr').click(function(){
        $('#tr').addClass(' actives');
        $('#wil').removeClass(' actives');
        $('#ril').removeClass(' actives');
        $('#tso').removeClass(' actives');
        $('.recordLevel').hide();
        $('.totalReturn').show();
        $('.warehouseList').hide();
        $('.totalShipped').hide();
    });
});
