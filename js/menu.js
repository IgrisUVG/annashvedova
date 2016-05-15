$(document).ready(function() {
	$('.menu ul').each(function(i) {
		if ($.cookie('submenuMark-' + i)) {
			$(this).show().prev().removeClass('collapsed').addClass('expanded');
		}else {
			$(this).hide().prev().removeClass('expanded').addClass('collapsed');
		}
		$(this).prev().addClass('collapsible').click(function() {
			var this_i = $('.menu ul').index($(this).next());
			if ($(this).next().css('display') == 'none') {
				
				$(this).parent('li').parent('ul').find('ul').each(function(j) {
					if (j != this_i) {
						$(this).slideUp(200, function () {
							$(this).prev().removeClass('expanded').addClass('collapsed');
							cookieDel($('.menu ul').index($(this)));
						});
					}
				});
				
				$(this).next().slideDown(200, function () {
					$(this).prev().removeClass('collapsed').addClass('expanded');
					cookieSet(this_i);
				});
			}else {
				$(this).next().slideUp(200, function () {
					$(this).prev().removeClass('expanded').addClass('collapsed');
					cookieDel(this_i);
					$(this).find('ul').each(function() {
						$(this).hide(0, cookieDel($('.menu ul').index($(this)))).prev().removeClass('expanded').addClass('collapsed');
					});
				});
			}
		return false;
		});
	});
});

$(document).ready(function() {
  $('.menu ul li a:not(.geom)').click(function() {
    $('*').removeClass('verbergend');
    $(this).addClass('verbergend');
  })
});

$(document).ready(function() {
  $('.navR a').click(function() {
	$('.menu ul').slideUp(400);
    $('*').removeClass('verbergend');
	$(this).addClass('verbergend');
  })
});

function cookieSet(index) {
	$.cookie('submenuMark-' + index, 'opened', {expires: null, path: '/'});
}
function cookieDel(index) {
	$.cookie('submenuMark-' + index, null, {expires: null, path: '/'});
}
