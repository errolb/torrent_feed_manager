$(function () {

    $('dd').hover(function() {
        $("button", this).removeClass('hideme');
        var to_be_removed = $("button", this).attr('value');
        $('#formDelete input').attr('value', to_be_removed);
        //alert('hey');
    },function(){
        $("button", this).addClass('hideme');
    });

    $('dd button').click(function() {
        //alert('hey');
        $('#formDelete').submit();
    });

});
