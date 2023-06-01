$(document).ready(function(){
    $('#manageInventory').addClass(' active');
    });
    $(document).ready(function(){
    $('#productList').addClass(' actives');
    });
    $(document).ready(function(){
        $('#listproduct, #productList').click(function(){
            $('#productList').addClass(' actives');
            $('#addProduct').removeClass(' actives');
            $('#archivedProduct').removeClass(' actives');
            $('.productList').show();
            $('.addProduct').hide();
            $('.archivedProduct').hide();
        });
    });

    $(document).ready(function(){
        $('#addpro, #addProduct').click(function(){
            $('#addProduct').addClass(' actives');
            $('#productList').removeClass(' actives');
            $('#archivedProduct').removeClass(' actives');
            $('.addProduct').show();
            $('.productList').hide();
            $('.archivedProduct').hide();
        });
    });

    $(document).ready(function(){
        $('#archived, #archivedProduct').click(function(){
            $('#archivedProduct').addClass(' actives');
            $('#productList').removeClass(' actives');
            $('#addProduct').removeClass(' actives');
            $('.addProduct').hide();
            $('.productList').hide();
            $('.archivedProduct').show();
        });
    });