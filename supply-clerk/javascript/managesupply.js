$(document).ready(function(){
    $('#manageSupply').addClass(' active');
});
$(document).ready(function(){
    $('#inventoryList').addClass(' actives');
});
$(document).ready(function(){
   $('#inventoryList').click(function(){
        $('#inventoryList').addClass(' actives');
        $('#request').removeClass(' actives')
        $('.ware-list').show();
        $('.req-list').hide();
   });
});
$(document).ready(function(){
    $('#request').click(function(){
        $('#request').addClass(' actives');
        $('#inventoryList').removeClass(' actives');
        $('.req-list').show();
        $('.ware-list').hide();
    });
});