// Datatables
if (typeof($.fn.dataTable) !== 'undefined') {

    $.extend(true, $.fn.dataTable.defaults, {
        language: {
            url: '/json/' + Lang.getLocale() + '/jquery.dataTables.json'
        }
    });
}

// Disable elements
function disableElements(elements, loader) {

    loader = typeof loader !== 'undefined' ? loader : true;

    elements.filter(':focus').blur();

    elements.each(function() {

        $(this).addClass('disabled');

        if ($(this).is('a, area, link, button, input, select, textarea, optgroup, option, fieldset')) {

            $(this).attr('disabled', true);
        }

        if (loader) {

			$(this).html('<i class="fa fa-fw fa-spinner fa-pulse"></i><span class="sr-only loading-text">' + $(this).html() + '</span>');
        }
    });
}

// Enable elements
function enableElements(elements, loader) {

    loader = typeof loader !== 'undefined' ? loader : true;

    elements.each(function() {

        if (loader) {

			$(this).html($(this).find('.loading-text').html());
        }

        if ($(this).is('a, area, link, button, input, select, textarea, optgroup, option, fieldset')) {
            
            $(this).attr('disabled', false);
        }

        $(this).removeClass('disabled');
    });
}

$(document).ready(function() {

	// Fix readonly
	$('body').on('click', '.readonly', function() {

	    return false;
	});

	// Disable submit button on form sending
	$('body').on('submit', 'form', function() {

		disableElements($(this).find('.send-form'));
	});

	// Toggle theme
	$('#theme-switch').on('change', function() {

	    $(this).closest('form').submit();
	});
});
