jQuery(document).ready(function($){
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
        window.open('http://www.zinc.ie/ei/how-to-enter/', '_blank');
        //navigator.app.loadUrl('http://www.google.com', { openExternal:true } );
        return false;
    });
});
