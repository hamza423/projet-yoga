/*HEADER : CHANGEMENT DE COULEUR AU BOUT DE 500PX */
$(document).ready(function () {
    $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        if (scroll > 500) {
            $("#nav").css("background", "rgba(32,26,22,.9)");
        } else {
            $("#nav").css("background", "transparent");
        }
    });
});

/*BACK TO THE TOP*/
$(document).ready(function () {

    $(window).scroll(function () {
        if ($(this).scrollTop() > 500) {
            $("#backToTop").fadeIn();
        } else {
            $("#backToTop").fadeOut();
        }
    });
    $("#backToTop").click(function () {
        $('html, body').animate({scrollTop: 0});
    });
});


$(function () {
    $('.formulaire').submit(function () {
        var nom = $('#nom').val();
        var prenom = $('#prenom').val();
        var email = $('#email').val();
        var telephone = $('#telephone').val();
        var objet = $('#objet').val();
        var message = $('#message').val();

        $.ajax('../../insert_form.php',
        {
            datanom: nom,
            prenom: prenom,
            email: email,
            telephone: telephone,
            objet: objet,
            message: message
        },
        function(donnees) {
            $('.return').html(donnees).slideDown();
            $('.nom').val('');
            $('.prenom').val('');
            $('.email').val('');
            $('.telephone').val('');
            $('.objet').val('');
            $('.message').val('');
        });
        return false;
    });
});

//Verification

$(document).ready(function(){
    var result = true;
    
    $('form').submit(function(){
        if($('#nom').val() === "" && $('#prenom').val() === "" && $('#telephone').val() === "" && $('#email').val() === "" && $('#objet').val() === "" && $('#message').val() === ""){
            $('#nom').css('border-color','red');
            $('#prenom').css('border-color','red');
            $('#telephone').css('border-color','red');
            $('#email').css('border-color','red');
            $('#objet').css('border-color','red');
            $('#message').css('border-color','red');
        }
    })
})

/******SLIDER*******/

$(function(){
   setInterval(function(){
      $(".slideShow ul").animate({marginLeft:-350},800,function(){
         $(this).css({marginLeft:0}).find("li:last").after($(this).find("li:first"));
      })
   }, 3500);
});