// left side sticky side bar

$(function(){
    if($('#sticky').length) {
        var el = $('#sticky');
        var stickyTop = $('#sticky').offset().top;
        var stickyHeight = $('#sticky').height();

        $(window).scroll(function() {
            var limit = $('#footer').offset().top - stickyHeight - 145;
            var windowTop = $(window).scrollTop();

            if (stickyTop < windowTop){
                el.css({
                    position: 'fixed',
                    top: 60,
                    width: 290
                });
            } else {
                el.css('position', 'static');
            }

            if (limit < windowTop) {
                var diff = limit - windowTop;
                el.css({
                top: diff
                });
            }
        });
    }
});

// rigt side sticky side bar

$(function(){
    if($('#right_sticky').length) {
        var ol = $('#right_sticky');
        var stickyTop = $('#right_sticky').offset().top;
        var stickyHeight = $('#right_sticky').height();

        $(window).scroll(function() {
            var limit2 = $('#footer').offset().top - stickyHeight - 80;
            var windowTop = $(window).scrollTop();

            if (stickyTop < windowTop){
                ol.css({
                    position: 'fixed',
                    top: 60,
                    width: 295
                });
            } else {
                ol.css('position', 'static');
            }

            if (limit2 < windowTop) {
                var diff = limit2 - windowTop;
                ol.css({
                top: diff
                });
            }
        });
    }
});

// liking and disliking posts    

// read more and less more

// $(document).ready(function(){
//     var readMoreHtml = $(".read-more").html();
//     var lessText = readMoreHtml.substr(0, 4);

//     if (readMoreHtml.length > 4) {
//         $(".read-more").html(lessText).append("<a href='' class='read-more-link'><small>show more</small></a> ");
//     } else {
//         $(".read-more").html(readMoreHtml);
//     }

//     $("body").on("click", ".read-more-link", function(event){
//         event.preventDefault();
//         $(this).parent(".read-more").html(readMoreHtml).append("<a href='' class='show-less-link'><small>show less</small></a>");
//     });

//     $("body").on("click", ".show-less-link", function(event){
//         event.preventDefault();
//         $(this).parent(".read-more").html(readMoreHtml.substr(0, 4)).append("<a href='' class='read-more-link'><small>show more</small></a> ");
//     });
// });

