$(document).ready(function () {
    //Form Create Admin User
    $("#formCreateAdmin").submit(function (e) {
        console.log("Form Create");
        const firstName = $("#first_name").val();
        const lastName = $("#last_name").val();
        const email = $("#email").val();
        const phone = $("#phone").val();
        const password = $("#password").val();
        const passwordConfirmation = $("#passwordConfirmation").val();

        const alertAdmin = $("#alertAdmin");
        const alertMessageAdmin = $("#alertMessageAdmin");

        if (!firstName) {
            alertAdmin.show(400);
            alertMessageAdmin.text("First Name is required");
            return false;
        }
        if (!lastName) {
            alertAdmin.show(400);
            alertMessageAdmin.text("Last Name is required");
            return false;
        }
        if (
            !email.match(
                /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
            )
        ) {
            alertAdmin.show(400);
            alertMessageAdmin.text("Email format is not correct");
            return false;
        }
        if (!phone) {
            alertAdmin.show(400);
            alertMessageAdmin.text("Phone is required");
            return false;
        }
        if (phone.length <= 10) {
            alertAdmin.show(400);
            alertMessageAdmin.text("Enter a valid cellphone number");
            return false;
        }
        if (!password) {
            alertAdmin.show(400);
            alertMessageAdmin.text("Password is required");
            return false;
        }
        if (password.length <= 5) {
            alertAdmin.show(400);
            alertMessageAdmin.text(
                "The password must consist of at least 5 characters"
            );
            return false;
        }
        if (!passwordConfirmation) {
            alertAdmin.show(400);
            alertMessageAdmin.text("Password Confirmation is required");
            return false;
        }
        if (password != passwordConfirmation) {
            alertAdmin.show(400);
            alertMessageAdmin.text("Passwords are not the same");
            return false;
        }

        var formData = new FormData($("#formCreateAdmin")[0]);
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });
        $.ajax({
            type: "POST",
            url: $("#formCreateAdmin").attr("action"),
            data: formData,
            dataType: "json",
            processData: false,
            contentType: false,
            beforeSend: function () {
                $("#btnCreateAdmin").prop("disabled", true);
                $("#btnTextAdmin").text("Please Wait ...");
            },
            success: function (data) {
                console.log(data);
                if (!data.success) {
                    alertAdmin.show(400);
                    alertMessageAdmin.text(data.message);
                    $("#btnCreateAdmin").prop("disabled", false);
                    $("#btnTextAdmin").text("Create Admin");
                    return false;
                } else {
                    window.location.href = "administrator/list-data";
                }
            },
        });

        e.preventDefault();
    });
});

// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function () {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});

$("#closeAlertAdmin").click(function () {
    $("#alertAdmin").hide(300);
});
