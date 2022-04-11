$(document).ready(function() {
    $("#login").click(function() {
        email = $("#email").val();
        password = $("#password").val();

        $.ajax({
            type: "POST",
            url: "pcheck.php",
            data: "email=" + email + "&password=" + password,
            success: function(html) {
                console.log(html);
                if (html == "true") {
                    $("#add_err").html(
                        "<div class='alert alert-success'><strong>Kra din</strong> igarez</div>"
                    );
                    window.location.href = "blog.php";
                } else if (html == "false") {
                    $("#add_err").html(
                        "<div class ='alert alert-danger'><strong>Tuqqna ur smurseɣ ara</strong></div>"
                    );
                } else {
                    $("#add_err").html(
                        "<div class='alert alert-danger'><strong>Yella wugur </strong>ar tikkelt niḍen</div>"
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