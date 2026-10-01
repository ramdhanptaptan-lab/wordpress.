jQuery(document).ready(function ($) {
    // When the notice is dismissed
    $(document).on('click', '.furniture-carpenter-lite-notice .notice-dismiss', function () {
        $.post(ajaxurl, {
            action: 'furniture_carpenter_lite_dismiss_notice'
        });
    });
});