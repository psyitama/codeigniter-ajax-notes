$(document).ready(function () {
    const BASE_URL = 'http://localhost/ajax-notes/';

    //fetch notes
    $.get(BASE_URL + 'notes/index_html', function (res) {
        $('.notes').html(res);
    });

    //add note
    $('.add').submit(function () {
        $.post($(this).attr('action'), $(this).serialize(), function (res) {
            $('.notes').html(res);
        });
        $('.add input[type=text]').val('');
        return false;
    });

    //submit form
    $(document).on('submit', '.update', function () {
        $.post($(this).attr('action'), $(this).serialize(), function (res) {
            $('.notes').html(res);
        });
        return false;
    });

    //trigger update form to submit when textfield lost focus
    $(document).on('blur', 'textarea', function () {
        $('.update').submit();
    });

    //delete note
    $(document).on('submit', '.delete', function () {
        $.post($(this).attr('action'), $(this).serialize(), function (res) {
            $('.notes').html(res);
        });
        return false;
    });
});
