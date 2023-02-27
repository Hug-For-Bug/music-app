$(document).ready(function () {
    const registerStatus = localStorage.getItem("register-success");

    if (registerStatus) {
        Swal.fire({
            icon: "success",
            title: "Success",
            text: "Successfully registered user, please login",
            confirmButtonText: "OK",
        }).then((result) => {
            if (result.isConfirmed) {
                localStorage.clear();
            }
        });
    }

    // Form Register
    $("#formRegister").submit(function (e) {
        console.log("Register");
        const name = $("#name").val();
        const email = $("#email").val();
        const phone = $("#phone").val();
        const password = $("#password").val();
        const passwordConfirmation = $("#password-confirmation").val();

        if (!name) {
            authAlert("error", "Error", "Name is required");
            return false;
        }
        if (!email) {
            authAlert("error", "Error", "Email is required");
            return false;
        }
        if (
            !email.match(
                /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
            )
        ) {
            authAlert("error", "Error", "Email format is not correct");
            return false;
        }
        if (!phone) {
            authAlert("error", "Error", "Phone is required");
            return false;
        }
        if (phone.length <= 10) {
            authAlert("error", "Error", "Enter a valid cellphone number");
            return false;
        }
        if (!password) {
            authAlert("error", "Error", "Password is required");
            return false;
        }
        if (password.length <= 5) {
            authAlert(
                "error",
                "Error",
                "The password must consist of at least 5 characters"
            );
            return false;
        }
        if (!passwordConfirmation) {
            authAlert("error", "Error", "Password Confirmation is required");
            return false;
        }
        if (password != passwordConfirmation) {
            authAlert("error", "Error", "Passwords are not the same");
            return false;
        }

        var formData = new FormData($("#formRegister")[0]);
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });
        $.ajax({
            type: "POST",
            url: $("#formRegister").attr("action"),
            data: formData,
            dataType: "json",
            processData: false,
            contentType: false,
            beforeSend: function () {
                $("#btnRegister").prop("disabled", true);
                $("#btnRegister").val("Please Wait ...");
            },
            success: function (data) {
                if (!data.success) {
                    authAlert("error", "Error", data.message);
                    $("#btnRegister").prop("disabled", false);
                    $("#btnRegister").val("Create");
                    return false;
                } else {
                    localStorage.setItem("register-success", true);
                    window.location.href = "login";
                }
            },
        });

        e.preventDefault();
    });

    $("#formLogin").submit(function (e) {
        const email = $("#email").val();
        const password = $("#password").val();

        if (!email) {
            authAlert("error", "Error", "Email is required");
            return false;
        }
        if (
            !email.match(
                /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
            )
        ) {
            authAlert("error", "Error", "Email format is not correct");
            return false;
        }
        if (!password) {
            authAlert("error", "Error", "Password is required");
            return false;
        }
        if (password.length <= 5) {
            authAlert(
                "error",
                "Error",
                "The password must consist of at least 5 characters"
            );
            return false;
        }

        var formData = new FormData($("#formLogin")[0]);
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });
        $.ajax({
            type: "POST",
            url: $("#formLogin").attr("action"),
            data: formData,
            dataType: "json",
            processData: false,
            contentType: false,
            beforeSend: function () {
                $("#btnLogin").prop("disabled", true);
                $("#btnLogin").val("Please Wait ...");
            },
            success: function (data) {
                // console.log({ data, role: data.user.id_role });
                const role = data?.user?.id_role == 1 ? "admin" : "user";
                if (!data.success) {
                    authAlert("error", "Error", data.message);
                    $("#btnLogin").prop("disabled", false);
                    $("#btnLogin").val("Log In");
                    return false;
                } else {
                    setTimeout(function () {
                        if (role == "admin") {
                            window.location.href = "/administrator";
                        } else {
                            window.location.href = "/";
                        }
                    }, 2000);
                }
            },
        });

        e.preventDefault();
    });

    function authAlert(icon, title, text) {
        Swal.fire({
            icon,
            title,
            text,
        });
        return false;
    }
});
