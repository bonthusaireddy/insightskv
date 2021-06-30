$(function() {
    $('input[name="company_type"]').on('click', function() {
        if ($(this).val() == 'Vendor') {
            $('#textboxes').show();
        }
        else {
            $('#textboxes').hide();
        }
    });
});