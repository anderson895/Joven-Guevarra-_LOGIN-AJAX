$(document).ready(function() {
    $('#btnLogin').click(function(e) {

        e.preventDefault();

        var email = $('#email').val();
        var password = $('#password').val();

        $("#btnLogin").css("display", "none");

        $.ajax({
            type: 'POST',
            url: 'controller/login.php',
            data: {
                email: email,
                password: password
            },
            success: function(response) {
                console.log(response);

                if (response.status && response.status === "success") {
                    alertify.success(response.message);

                    // Add a delay of 2 seconds before redirecting
                    setTimeout(function() {
                        window.location.href = 'view/landingpage.php';
                    }, 2000);
                } else {
                    setTimeout(function() {
                    alertify.error(response.message);
                    $("#loadingSpinner").hide();
                    $("#btnLogin").css("display", "block");
                      }, 1000);
                }
            },
            beforeSend: function() {
                $("#loadingSpinner").html('<div class="spinner-border text-warning" role="status"><span class="sr-only"></span></div>').show();
            },
            error: function(error) {
                console.error(error);
            },
            always: function() {
                $("#loadingSpinner").hide();
                $("#btnLogin").css("display", "block");
            }
        });
    });
});
