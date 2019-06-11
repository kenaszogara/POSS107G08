/*jslint browser: true*/
/*global $, jQuery*/

// if press enter add todos
$('input').keypress(function (event) {
    "use strict";
	if (event.which === 13) {
		var todoText = $(this).val();
		var dateText = $('input[type=date]').val();
		$(this).val("");
		$('ul').append('<li>' + todoText + '   ' + dateText + '<span><i class="fa fa-trash"</i></span></li>');
	}
});

// click on <span> fadeout and remove todo
$('ul').on('click', "span", function (event) {
    "use strict";
	$(this).parent().fadeOut(500, function () {
		$(this).remove();
	});
	event.stopPropagation();
});

// click on <li> crossout todo
$('ul').on('click', 'li', function () {
    "use strict";
	$(this).toggleClass('done');
});
