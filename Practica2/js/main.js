let regExpWeak = /[a-z]/;
let regExpMedium= /\d+/;
let regExpStrong = /.[!,@,#,$,%,^,&,*,?,_,-,(,)]/;

function trigger(input){
    if (input.value != ""){
        if(
            input.value.length < 3 && 
            (input.value.match(regExpWeak) ||
            input.value.match(regExpMedium) ||
            input.value.match(regExpStrong))
        ){
            limpieza();
            $("#progressBar_1").addClass("bad_password");
            $("#progressBar_2").addClass("invisible_progressBar");
            $("#progressBar_3").addClass("invisible_progressBar");
            $("#progressBarInformation").text("Contraseña NO Segura");
            $("#progressBarInformation").addClass("bad_password_color");
        }
        else if(
            (input.value.length > 3 && input.value.length < 6) &&  
            (input.value.match(regExpWeak) ||
            input.value.match(regExpMedium) ||
            input.value.match(regExpStrong))
        ){
            limpieza();
            $("#progressBar_1").addClass("bad_password");
            $("#progressBar_2").addClass("medium_password");
            $("#progressBar_3").addClass("invisible_progressBar");
            $("#progressBarInformation").text("Contraseña Casi Segura");
            $("#progressBarInformation").addClass("medium_password_color");
        }
        else if(
            input.value.length > 6 &&  
            (input.value.match(regExpWeak) ||
            input.value.match(regExpMedium) ||
            input.value.match(regExpStrong))
        ){
            limpieza();
            $("#progressBar_1").addClass("bad_password");
            $("#progressBar_2").addClass("medium_password");
            $("#progressBar_3").addClass("hard_password");
            $("#progressBarInformation").text("Contraseña Segura");
            $("#progressBarInformation").addClass("hard_password_color");
            $("#cretaeUser").removeAttr('disabled');
        }
    } else {
        limpieza();
        $("#progressBar_1").addClass("invisible_progressBar");
        $("#progressBar_2").addClass("invisible_progressBar");
        $("#progressBar_3").addClass("invisible_progressBar");
        $("#progressBarInformation").text("Contraseña Segura");
        $("#progressBarInformation").addClass("neutral_password_color");
    }
}

function limpieza(){
    $("#cretaeUser").attr('disabled', 'disabled');
    
    $("#progressBar_1").removeClass("bad_password");
    $("#progressBar_2").removeClass("medium_password");
    $("#progressBar_3").removeClass("hard_password");

    $("#progressBar_1").removeClass("invisible_progressBar");
    $("#progressBar_2").removeClass("invisible_progressBar");
    $("#progressBar_3").removeClass("invisible_progressBar");

    $("#progressBarInformation").removeClass("neutral_password_color");
    $("#progressBarInformation").removeClass("bad_password_color");
    $("#progressBarInformation").removeClass("medium_password_color");
    $("#progressBarInformation").removeClass("hard_password_color");
}

(function ($) {
    "use strict";
    /*==================================================================
    [ Validate ]*/
    var input = $('.validate-input .input100');

    $('.validate-form').on('submit',function(){
        var check = true;

        for(var i=0; i<input.length; i++) {
            if(validate(input[i]) == false){
                showValidate(input[i]);
                check=false;
            }
        }

        return check;
    });


    $('.validate-form .input100').each(function(){
        $(this).focus(function(){
           hideValidate(this);
        });
    });

    function validate (input) {
        if($(input).attr('type') == 'email' || $(input).attr('name') == 'email') {
            if($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
                return false;
            }
        }
        else {
            if($(input).val().trim() == ''){
                return false;
            }
        }
    }

    function showValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).addClass('alert-validate');
    }

    function hideValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).removeClass('alert-validate');
    }
    
    

})(jQuery);