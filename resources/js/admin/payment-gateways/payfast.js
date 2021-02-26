$(document).ready(() => {
    $("#edit-payfast-form-selector").bind('submit', function (e) {
        let $live_merchant_id = $('#live_merchant_id');
        let $live_merchant_key = $('#live_merchant_key');
        let $live_passphrase = $('#live_passphrase');
        let $test_merchant_id = $('#test_merchant_id');
        let $test_merchant_key = $('#test_merchant_key');
        let $test_passphrase = $('#test_passphrase');
        let $test_mode = $('#test_mode');
        const isValid = true;
        if (!isValid) {
            e.preventDefault();
            return false;
        }
        else {
            e.preventDefault();
            jQuery.ajax({
                type: "POST",
                url: "/admin/payment-gateway-settings/update",
                dataType: "html",
                data: {
                    _token: $('#laravel_csrf_token').val(),
                    live_merchant_id: parseInt($live_merchant_id.val()),
                    live_merchant_key: $live_merchant_key.val(),
                    live_passphrase: $live_passphrase.val(),
                    test_merchant_id: parseInt($test_merchant_id.val()),
                    test_merchant_key: $test_merchant_key.val(),
                    test_passphrase: $test_passphrase.val(),
                    test_mode_active:$test_mode.val() === "on"
                },
                success: result => {
                    response = JSON.parse(result);
                    if (response.code === 422) {
                        printErrorMsg(response.error);
                    }
                    else if (response.code === 201) {
                        printSuccessMsg(response.success);
                        window.setTimeout(() => {
                            window.location.href = "/admin/payment-gateway-settings";
                        }, 2000);
                    }
                    else {
                        console.error("Something went wrong, we weren't expecting that...")
                    }
                }
            });
            return false;
        }
    });

    function printSuccessMsg (msg) {
        console.log(msg)
        $(".payfast-success-blob").text(msg);
        $(".payfast-success-blob").css('display','block');
        $(".print-error-msg").css('display','none');
    }

    function printErrorMsg (msg) {
        $(".print-error-msg").find("ul").html('');
        $(".print-error-msg").css('display','block');
        $.each( msg, function( key, value ) {
            $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
        });
    }
});
