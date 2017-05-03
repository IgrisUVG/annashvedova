$(document).ready(function () {
    $('.nav ul').each(function (i) {
        if ($.cookie('subnavMark-' + i)) {
            $(this).show().prev().removeClass('collapsed').addClass('expanded');
        } else {
            $(this).hide().prev().removeClass('expanded').addClass('collapsed');
        }
        $(this).prev().addClass('collapsible').click(function () {
            var this_i = $('.nav ul').index($(this).next());
            if ($(this).next().css('display') == 'none') {

                $(this).parent('li').parent('ul').find('ul').each(function (j) {
                    if (j != this_i) {
                        $(this).slideUp(200, function () {
                            $(this).prev().removeClass('expanded').addClass('collapsed');
                            cookieDel($('.nav ul').index($(this)));
                        });
                    }
                });

                $(this).next().slideDown(200, function () {
                    $(this).prev().removeClass('collapsed').addClass('expanded');
                    cookieSet(this_i);
                });
            } else {
                $(this).next().slideUp(200, function () {
                    $(this).prev().removeClass('expanded').addClass('collapsed');
                    cookieDel(this_i);
                    $(this).find('ul').each(function () {
                        $(this).hide(0, cookieDel($('.nav ul').index($(this)))).prev().removeClass('expanded').addClass('collapsed');
                    });
                });
            }
            return false;
        });
    });
});

$(document).ready(function () {
    $('.nav ul li a:not(.geom)').click(function () {
        $('*').removeClass('verbergend');
        $(this).addClass('verbergend');
    })
});

$(document).ready(function () {
    $('.navR a').click(function () {
        $('.nav ul').each(function () {
            cookieDel($('.nav ul').index($(this)));
            $(this).removeClass('verbergend');
            $(this).slideUp(200);
        });

        $(this).addClass('verbergend');
    })
});

function cookieSet(index) {
    $.cookie('subnavMark-' + index, 'opened');
}
function cookieDel(index) {
    $.cookie('subnavMark-' + index, null);
}
