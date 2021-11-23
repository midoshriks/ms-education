
// It's Logo Crite Function in Jquery
$(document).ready(function(){
    // MY COD Function
});

/// class var ==> in cod (".var");
/// id    var ==> in cod ("#var");

/// EVENT Name IN Jquery
        // mouseseenter
        // mouseleave
        // hover
        // animate

/// Afecat Name IN Jquery
        // hide
        // show
        // fadein
        // fadeout
        // slideup
        // slidedown
        // toggle


///  #1 First Function in JQuery
$(document).ready(function(){

    // Function $1 alert
    alert("hi Welcome Mido In First cod In JQuery");

});

/// #2 Function Button
$(document).ready(function(){

    $("#btn").click(function(){

        // Function $2 prompt & print name
        name = prompt("Enter Your Name :");
        window.printName.innerHTML=("Welcome : " + name);

    });

});

$(document).ready(function(){

    $("#btn").click(function(){

        // Function $2 prompt & print name
        name = prompt("Enter Your Name :");
        window.printName.innerHTML=("Welcome : " + name);

    });

});


/// #3 Function dblclick alert

$(document).ready(function(){

    $(".btn2").dblclick(function(){
        alert("JQUERY");
    });

});

/// #4 Function Crite P in Html for Click
$(document).ready(function(){

    $("#btn3").click(function(){
        window.prinPragrf.innerHTML=("<p> Lorem ipsum dolor sit amet consectetur adipisicing elit Voluptate et </p>");
    });

});

//// Function crite <marquee> in Html for dblClick
$(document).ready(function(){

    $("#btn4").dblclick(function(){
        window.printMarquee.innerHTML = ("<marquee>lets learn Jquery </marquee>");
    });

});

/// #5 Function Zoom Img To For .mouseenter .mouseleave
$(document).ready(function(){

    $("#img").mouseenter(function(){
        img.style.width="200px";
        img.style.height="250px";
    });

    $("#img").mouseleave(function(){
        img.style.width="auto";
        img.style.height="auto";
    });

});

/// #6 Function $hide INFO <p> $Show INFO <p>
$(document).ready(function(){

    // It's (4000) & (3000) Just Time Anmtion

    ///  Crit Function hide INFO <p>

    $("#btn5").click(function(){
        $("#pragrif").hide(3000);
    });

    ///  Crit Function Show INFO <p>

    $("#btn6").click(function(){
        $("#pragrif").show(4000);
    });

});

/// #7 Function $toggle IT's hide & Show in ONE Function
$(document).ready(function(){

    $("#btn7").dblclick(function(){

        $("#FORM").toggle(2000);

    });

});

/// #8 Function Click slideUp slideDown
$(document).ready(function(){

    /// crit btn slideUp
    $("#btn8").click(function(){

        $(".boxSlide").slideUp(3000);
    });

    /// crit btn slideDown
    $("#btn9").click(function(){

        $(".boxSlide").slideDown(3000);
    });

});

/// #9 Function fadeOut btnMycolor & fadeIn btnMycolor
$(document).ready(function(){

    /// crit btn fadeOut
    $("#btn10").click(function(){

        $("#btnMycolor").fadeOut(3000);
    });

    /// crit btn fadeIn
    $("#btn11").click(function(){

        $("#btnMycolor").fadeIn(3000);
    });

});

/// #10 Function dblclick $reload $print
$(document).ready(function(){

    $("#btn12").dblclick(function(){
        window.location.reload();
    });

    $("#btn13").dblclick(function(){
        window.print();
    });

});

/// #10 Function to learn Jquery in Change To Css
$(document).ready(function(){

    $("#btn14").click(function(){

        // يجب أن لا يتواجد مسافة فارغة فى حقل الأول من بعد بين دبل كوتشين فى Css

        $(".pragrfCss").css("box-shadow"     ,"1px 1px 18px green");
        $(".pragrfCss").css("border-radius"  ,"15px");
        $(".pragrfCss").css("padding"        ,"30px");
        $(".pragrfCss").css("color"          ,"red");

    });

});

/// #11 Function Jquery in Change To Css by $hover mouse
$(document).ready(function(){

    //// It's Event $hover GET TOW Function IN One
    $("#pragrfHoverCss").hover(
        //Frist Function
        function(){
            $(this).css("color"          ,"red");
            /// God Thank Updet your Salve
            $(this).css("cursor"          ,"pointer");

        }
        ,
        // Tow Function
        function(){
            $(this).css("color"          ,"green");
        }

    );

    //// It's Event $hover GET TOW Function IN One
    $(".massge").hover(
        //Frist Function
        function(){
            $(this).hide(4000);
        }
        ,
        // Tow Function
        function(){
            $(this).show(4000);
        }

    );

});

/// #12 Function $dblClick $SlideTooggle
$(document).ready(function(){

    $(".BoxSlideTooggle").css("display"          ,"none");


    $("#btn15").dblclick(function(){
        $(".BoxSlideTooggle").slideToggle(4000);

    });

    $("#btn16").dblclick(function(){
        $(".BoxSlideTooggle").fadeToggle(4000);

    });




});
