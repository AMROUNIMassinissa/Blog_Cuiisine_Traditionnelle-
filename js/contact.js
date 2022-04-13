$(document).ready(function() {
    $("#contact").click(function() {
        fname = $("#fname").val();
        email = $("#email").val();
        message = $("#message").val();

        $.ajax({
            type: "POST",
            url: "sendmsg.php",
            data: "fname=" + fname + "&email=" + email + "&message=" + message,
            success: function(html) {
                console.log(html);

                if (html == "true") {
                    $("#add_err").html(
                        "<div class ='alert alert-success'><strong>Izen Yettwaceggε</strong></div>"
                    );
                } else if (html == "fname_long") {
                    $("#add_err").html(
                        "<div class ='alert alert-danger'><strong>Isem muqqer ddeqs</strong></div>"
                    );
                } else if (html == "fname_short") {
                    $("#add_err").html(
                        "<div class ='alert alert-danger'><strong>Isem mezzi ddeqs</strong></div>"
                    );
                } else if (html == "email_long") {
                    $("#add_err").html(
                        "<div class ='alert alert-danger'><strong>Tansa taliktṛunant muqqret ddeqs</strong></div>"
                    );
                } else if (html == "email_short") {
                    $("#add_err").html(
                        "<div class ='alert alert-danger'><strong>Tansa taliktṛunant mezziyt ddeqs</strong></div>"
                    );
                } else if (html == "eformat") {
                    $("#add_err").html(
                        "<div class ='alert alert-danger'><strong>Tansa taliktṛunant &#x1F4E7; </strong>tekhus</div>"
                    );
                } else if (html == "message_long") {
                    $("#add_err").html(
                        "<div class ='alert alert-danger'><strong>Izen muqqer ddeqs </strong></div>"
                    );
                } else if (html == "message_short") {
                    $("#add_err").html(
                        "<div class ='alert alert-danger'><strong>Izen mezzi ddeqs </strong></div>"
                    );
                } else if (html == "am here") {
                    $("#add_err").html(
                        "<div class ='alert alert-danger'><strong>Am here </strong></div>"
                    );
                } else {
                    $("#add_err").html(
                        "<div class='alert alert-danger'><strong>Yella lɣlaḍ </strong>ar tikkelt niḍen</div>"
                    );
                }
            },
            beforeSend: function() {
                $("#add_err").html("assbibbi...");
            },
        });
        return false;
    });
});