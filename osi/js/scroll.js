$(document).ready(function(){

        var $menu = $("#menu");
        var $menu1 = $("#menu1");
        var $menu2 = $("#menu2");

        $(window).scroll(function(){
            
            var hT = $('#portfolio').offset().top,
                hH = $('#portfolio').outerHeight(),
                wH = $(window).height(),
                wS = $(this).scrollTop();
            var resP = hT + hH - wH;
            var hTc = $('#contacts').offset().top,
                hHc = $('#contacts').outerHeight(),
                wHc = $(window).height(),
                wSc = $(this).scrollTop();
            var resC = hTc + hHc - wHc - 200;
            console.log(resP);
            if ( $(this).scrollTop() > resP && $menu.hasClass("text-secondary") ){
                $menu.removeClass("text-secondary").addClass("text-white");
                $menu1.removeClass("text-white").addClass("text-secondary");

            } else if($(this).scrollTop() <= resP && $menu.hasClass("text-white")) {
                $menu.removeClass("text-white").addClass("text-secondary");
                $menu1.removeClass("text-secondary").addClass("text-white");
            }
            if ( $(this).scrollTop() > resC && $menu1.hasClass("text-secondary") ){
                $menu1.removeClass("text-secondary").addClass("text-white");
                $menu2.removeClass("text-white").addClass("text-secondary");

            } else if(resP < $(this).scrollTop() && $(this).scrollTop() <= resC && $menu1.hasClass("text-white")) {
                $menu1.removeClass("text-white").addClass("text-secondary");
                $menu2.removeClass("text-secondary").addClass("text-white");
            }
        });//scroll
        $('.scrollto a').on('click', function() {

            let href = $(this).attr('id');
            
            $('html, body').animate({
                scrollTop: $(href).offset().top
            }, {
                duration: 370,   // по умолчанию «400» 
                easing: "linear" // по умолчанию «swing» 
            });
            
            return false;
});
    });