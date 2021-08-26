$(function() {
    //alert("Hello!")

    //$(selector).action();

    //$('#box').hide();

    //$('h1').css("color", "blue");
    $('button').click(function () { 
        $('#box').fadeOut(1000);
    });

    //$('h2,h3,h4').css('border','solid 1px red');

    //$('div#container').css('border','solid 1px red');

    //$('p.lead').css('border','solid 1px red');    

    //$('div em').css('border','solid 1px red');

    /*jQuery Event Methods*/
    $('#box').click(function () { 
        alert("you just clicked the box");
    }); 

    $("input").blur( function(){
        if ($(this).val() == ""){
            $(this).css('border','solid 1px red');
            $("#box").text('Forgot to add text?')
        }
    });

    $("input").keydown(function () { 
        if ($(this).val !== ""){
            $(this).css('border','solid 1px #777');
            $('#box').text("Thanks for that!");z
        }
    });

    $("#box").hover(function () { 
        $(this).text("You hovered in");
     }, function() {
        $(this).text("You hovered out");
     });

     /*HIDE SHOW*/
     //$('h1').hide(); 
     //$('div.hidden').show();
     //$('p').fadeOut(8000);
     $('#box1').click(function () {  
         $(this).fadeTo(2000,0.75, function () { 
             // animation is complete
             $(this).slideUp();
          });
     });

     $('button').click(function () { 
        $('#box1').slideToggle();
      });
    

    $('#left').click(function () { 
        $('.box').animate({
            left: "-=40px",
            fontSize:"+=2px"
        }, function() { 
            // animation is complete
         }); 
     });

     $('#right').click(function () { 
        $('.box').animate({
            left: "+=40px",
            fontSize:"-=2px"
        }, function() { 
            // animation is complete
         }); 
     });

     $('#up').click(function () { 
        $('.box').animate({
            top: "-=40px",
            opacity:"+=0.1"
        }, function() { 
            // animation is complete
         }); 
     });

     $('#down').click(function () { 
        $('.box').animate({
            top: "+=40px",
            opacity:"-=0.1"
        }, function() { 
            // animation is complete
         }); 
     });

    $('#circle2').css({
        'background': '#8a8d22',
        'color': 'white',
        'display': 'inline-block',
        'text-align': 'center',
        'line-height': '140px',
        'height': '140px',
        'width': '140px'
    }).addClass('circleShape');

    //$('#circle2').addClass('circleShape');
});
