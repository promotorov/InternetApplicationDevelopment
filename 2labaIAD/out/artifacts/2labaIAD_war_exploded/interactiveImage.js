$(document).ready(function () {
    $('#graph').click(function (e) {
        var x=e.pageX;
        var y=e.pageY;
        var r;
        if($('#enterR').val().length==1) r=parseFloat($('#enterR').val());
        var color = '#2c7a0f';
        var size = '8px';
        if(r>=2 & r<=5){
            // do domething
            var order = {
                enterX: 0,
                enterY: 0,
                enterR: 3
            };
            /*$.ajax({
                url: 'http://localhost:8080/2labaIAD_war_exploded/WelcomeApp',
                type: 'POST',
                data: order,
                error : function(data){
                    alert("OOPS");
                }
            });*/
            $.post('http://localhost:8080/2labaIAD_war_exploded/WelcomeApp', order, function(data) {
            });
            //location.reload();
            //$('#results').DataTable().ajax.reload();
            //table.ajax.reload();
        }
        else alert("ERROR!!")
        if ($('#point').length) {
            // do your stuff
            $("#point").remove();
        }
        $("body").append(
            $('<div id="point"></div>')
                .css('position', 'absolute')
                .css('top', (y-4) + 'px')
                .css('left', (x-4) + 'px')
                .css('width', size)
                .css('height', size)
                .css('background-color', color)
                .css('border-radius', '3px')
        );
        $("#results").load('http://localhost:8080/2labaIAD_war_exploded/WelcomeApp' + ' #results');
        setTimeout(function () {
            jQuery('#refresh').trigger('click');
        }, 300);
    })
    $('#refresh').click(function (e) {
        $("#results").load('http://localhost:8080/2labaIAD_war_exploded/WelcomeApp' + ' #results');
    })
    $(window).resize(function() {
        if ($('#point').length) {
            $("#point").remove();
        }
    });
});
