$(document).ready(function () {
    let createAdminStatus = localStorage.getItem("create-admin-success");
    let createUserStatus = localStorage.getItem("create-user-success");

    if (createAdminStatus) {
        Swal.fire({
            icon: "success",
            title: "Created",
            text: "New Data Admin Added Successfully!",
            confirmButtonText: "OK",
        }).then((result) => {
            if (result.isConfirmed) {
                localStorage.clear();
            }
        });
    }

    if (createUserStatus) {
        Swal.fire({
            icon: "success",
            title: "Created",
            text: "New Data User Added Successfully",
            confirmButtonText: "OK",
        }).then((result) => {
            if (result.isConfirmed) {
                localStorage.clear();
            }
        });
    }
    //Form Create Admin
    $("#formCreateAdmin").submit(function (e) {
        console.log("Form Create Admin");
        const firstName = $("#firstNameAdmin").val();
        const lastName = $("#lastNameAdmin").val();
        const email = $("#emailAdmin").val();
        const phone = $("#phoneAdmin").val();
        const gender = $("#genderAdmin").val();
        const password = $("#passwordAdmin").val();
        const passwordConfirmation = $("#passwordConfirmationAdmin").val();

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
        if (gender == "") {
            alertAdmin.show(400);
            alertMessageAdmin.text("Please select gender");
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

        let formData = new FormData($("#formCreateAdmin")[0]);
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
                    localStorage.setItem("create-admin-success", true);
                    window.location.href = "list-data";
                }
            },
        });

        e.preventDefault();
    });

    //Form Create User
    $("#formCreateUser").submit(function (e) {
        console.log("Form Create User");
        const firstName = $("#firstNameUser").val();
        const lastName = $("#lastNameUser").val();
        const email = $("#emailUser").val();
        const phone = $("#phoneUser").val();
        const gender = $("#genderUser").val();
        const password = $("#passwordUser").val();
        const passwordConfirmation = $("#passwordConfirmationUser").val();

        const alertUser = $("#alertUser");
        const alertMessageUser = $("#alertMessageUser");

        if (!firstName) {
            alertUser.show(400);
            alertMessageUser.text("First Name is required");
            return false;
        }
        if (!lastName) {
            alertUser.show(400);
            alertMessageUser.text("Last Name is required");
            return false;
        }
        if (
            !email.match(
                /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
            )
        ) {
            alertUser.show(400);
            alertMessageUser.text("Email format is not correct");
            return false;
        }
        if (!phone) {
            alertUser.show(400);
            alertMessageUser.text("Phone is required");
            return false;
        }
        if (phone.length <= 10) {
            alertUser.show(400);
            alertMessageUser.text("Enter a valid cellphone number");
            return false;
        }
        if (gender == "") {
            alertUser.show(400);
            alertMessageUser.text("Please select gender");
            return false;
        }
        if (!password) {
            alertUser.show(400);
            alertMessageUser.text("Password is required");
            return false;
        }
        if (password.length <= 5) {
            alertUser.show(400);
            alertMessageUser.text(
                "The password must consist of at least 5 characters"
            );
            return false;
        }
        if (!passwordConfirmation) {
            alertUser.show(400);
            alertMessageUser.text("Password Confirmation is required");
            return false;
        }
        if (password != passwordConfirmation) {
            alertUser.show(400);
            alertMessageUser.text("Passwords are not the same");
            return false;
        }

        let formData = new FormData($("#formCreateUser")[0]);
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });
        $.ajax({
            type: "POST",
            url: $("#formCreateUser").attr("action"),
            data: formData,
            dataType: "json",
            processData: false,
            contentType: false,
            beforeSend: function () {
                $("#btnCreateUser").prop("disabled", true);
                $("#btnTextUser").text("Please Wait ...");
            },
            success: function (data) {
                console.log(data);
                if (!data.success) {
                    alertUser.show(400);
                    alertMessageUser.text(data.message);
                    $("#btnCreateUser").prop("disabled", false);
                    $("#btnTextUser").text("Create User");
                    return false;
                } else {
                    localStorage.setItem("create-user-success", true);
                    window.location.href = "list-data";
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

$(".close").click(function () {
    var id = $(this).data("id");
    $("#alertEditAdmin" + id).hide(300);
});

$("#closeAlertUser").click(function () {
    $("#alertUser").hide(300);
});
