jQuery(document).ready(function($){
                $('#basic').html('<iframe id="iframe" src="http://askubuntu.com/questions/324578/install-ubuntu-inside-alongside-windows-7"></iframe>');
            $('#iframe').height($(window).height());
            $('#iframe').width($(window).width());

    $('form').submit(function(){
        var landmarkID = $(this).parent().attr('data-landmark-id');
        var postData = $(this).serialize();
        $.ajax({
            type: 'POST',
            data: postData+'&lid='+landmarkID,
            url: 'http://zinc.ie/apps/sea/_save.php',
            /*
            success: function(data){
                console.log(data);
                alert('Your email was successfully added');
            },
            error: function(){
                console.log(data);
                alert('There was an error adding your email');
            }
            */
        });

        window.open('http://studententrepreneur.ie/how-to-enter/', '_system');
        return false;
    });
});
