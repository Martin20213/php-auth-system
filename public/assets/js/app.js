$(function () {
    var flash = $('.flash');
    if (flash.length) {
        setTimeout(function () {
            flash.fadeOut(400);
        }, 5000);
    }

    $('form').not('.ajax-form').on('submit', function () {
        var button = $(this).find('button[type="submit"]');
        button.prop('disabled', true).text('Betöltés...');
    });
});