$(document).ready(function(){
    $('#manageAccount').addClass(' active');
    });
    $(document).ready(function(){
    $('#accountList').addClass(' actives');
    });
    $(document).ready(function(){
        $('#listaccount, #accountList').click(function(){
            $('#accountList').addClass(' actives');
            $('#addAccount').removeClass(' actives');
            $('#archivedAccount').removeClass(' actives');
            $('.accountList').show();
            $('.addAccount').hide();
            $('.archivedList').hide();
        });
    });

    $(document).ready(function(){
        $('#addacc, #addAccount').click(function(){
            $('#addAccount').addClass(' actives');
            $('#accountList').removeClass(' actives');
            $('#archivedAccount').removeClass(' actives');
            $('.addAccount').show();
            $('.accountList').hide();
            $('.archivedList').hide();
        });
    });

    $(document).ready(function(){
        $('#archived, #archivedAccount').click(function(){
            $('#archivedAccount').addClass(' actives');
            $('#accountList').removeClass(' actives');
            $('#addAccount').removeClass(' actives');
            $('.addAccount').hide();
            $('.accountList').hide();
            $('.archivedList').show();
        });
    });

    function showPass()
    {
        var pass = document.getElementById('pass');
    
        if(pass.type === 'password')
        {
            pass.type = 'text';
        }
        else
        {
            pass.type = 'password';
        }
    }