$(document).ready(function() {
    $("#submit").click(function() {
        console.log("am here");

        fname = $("#fname").val();
        lname = $("#lname").val();
        email = $("#email").val();
        password = $("#password").val();

        $.ajax({
            type: "POST",
            url: "adduser.php",
            data: "fname=" +
                fname +
                "&lname=" +
                lname +
                "&email=" +
                email +
                "&password=" +
                password,

            success: function(html) {
                console.log(html);
                if (html == "true") {
                    $("#add_err").html(
                        "<div class='alert alert-success'><strong>Kra din</strong> igarez</div>"
                    );
                    window.location.href = "index.php";
                } else if (html == "false") {
                    $("#add_err").html(
                        "<div class='alert alert-danger'><strong>Tansa taliktṛunant &#x1F4E7; </strong>tella yakan</div>"
                    );
                } else if (html == "fname") {
                    $("#add_err").html(
                        "<div class='alert alert-danger'><strong>Isem </strong>Yekus</div>"
                    );
                } else if (html == "lname") {
                    $("#add_err").html(
                        "<div class='alert alert-danger'><strong>Isem neqwa </strong>Yekhus</div>"
                    );
                } else if (html == "eshort") {
                    $("#add_err").html(
                        "<div class='alert alert-danger'><strong>Tansa taliktṛunant &#x1F4E7; </strong>tameẓyant</div>"
                    );
                } else if (html == "eformat") {
                    $("#add_err").html(
                        "<div class='alert alert-danger'><strong>Tansa taliktṛunant &#x1F4E7; </strong>tekhus</div>"
                    );
                } else if (html == "pshort") {
                    $("#add_err").html(
                        "<div class='alert alert-danger'><strong>Tasaruṭ </strong>tameẓyant</div>"
                    );
                } else {
                    $("#add_err").html(
                        "<div class='alert alert-danger'><strong>Yella lɣlaḍ </strong>ar tikkelt niḍen</div>"
                    );
                }
            },
            beforeSend: function() {
                $("#add_err2").html("assbibbi...");
            },
        });
        return false;
    });
});