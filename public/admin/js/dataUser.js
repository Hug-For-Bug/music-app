$(document).ready(function () {
    const createAdminStatus = localStorage.getItem("create-admin-success");
    const createUserStatus = localStorage.getItem("create-user-success");
    const editAdminStatus = localStorage.getItem("edit-admin-success");
    const editUserStatus = localStorage.getItem("edit-user-success");

    if (createAdminStatus) {
        Swal.fire({
            icon: "success",
            title: "Created",
            text: "New Data Admin Added Successfully!",
            confirmButtonText: "OK",
        }).then(() => {
            localStorage.removeItem("create-admin-success");
        });
    }

    if (createUserStatus) {
        Swal.fire({
            icon: "success",
            title: "Created",
            text: "New Data User Added Successfully",
            confirmButtonText: "OK",
        }).then(() => {
            localStorage.removeItem("create-user-success");
        });
    }

    if (editAdminStatus) {
        Swal.fire({
            icon: "success",
            title: "Updated",
            text: "Admin Data Updated Successfully!",
            confirmButtonText: "OK",
        }).then(() => {
            localStorage.removeItem("edit-admin-success");
        });
    }

    if (editUserStatus) {
        Swal.fire({
            icon: "success",
            title: "Updated",
            text: "User Data Updated Successfully!",
            confirmButtonText: "OK",
        }).then(() => {
            localStorage.removeItem("edit-user-success");
        });
    }

    //Form Create Admin
    $("#formCreateAdmin").submit(function (e) {
        console.log("Create Admin");
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
            alertAdmin.show(500);
            alertMessageAdmin.text("First Name is required");
            $("#firstNameAdmin").focus();
            return false;
        }
        if (!lastName) {
            alertAdmin.show(500);
            alertMessageAdmin.text("Last Name is required");
            $("#lastNameAdmin").focus();
            return false;
        }
        if (!email) {
            alertAdmin.show(500);
            alertMessageAdmin.text("Email is required");
            $("#emailAdmin").focus();
            return false;
        }
        if (
            !email.match(
                /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
            )
        ) {
            alertAdmin.show(500);
            alertMessageAdmin.text("Email format is not correct");
            $("#emailAdmin").focus();
            return false;
        }
        if (!phone) {
            alertAdmin.show(500);
            alertMessageAdmin.text("Phone is required");
            $("#phoneAdmin").focus();
            return false;
        }
        if (phone.length <= 10) {
            alertAdmin.show(500);
            alertMessageAdmin.text("Enter a valid cellphone number");
            $("#phoneAdmin").focus();
            return false;
        }
        if (gender == "") {
            alertAdmin.show(500);
            alertMessageAdmin.text("Please select gender");
            $("#genderAdmin").focus();
            return false;
        }
        if (!password) {
            alertAdmin.show(500);
            alertMessageAdmin.text("Password is required");
            $("#passwordAdmin").focus();
            return false;
        }
        if (password.length <= 5) {
            alertAdmin.show(500);
            alertMessageAdmin.text(
                "The password must consist of at least 5 characters"
            );
            $("#passwordAdmin").focus();
            return false;
        }
        if (!passwordConfirmation) {
            alertAdmin.show(500);
            alertMessageAdmin.text("Password Confirmation is required");
            $("#passwordConfirmationAdmin").focus();
            return false;
        }
        if (password != passwordConfirmation) {
            alertAdmin.show(500);
            alertMessageAdmin.text("Passwords are not the same");
            $("#passwordConfirmationAdmin").focus();
            return false;
        }

        const formData = new FormData($("#formCreateAdmin")[0]);
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
            error: function (err) {
                console.log("Some error occured", err);
                alertAdmin.show(500);
                alertMessageAdmin.text(data.message);
            },
            success: function (data) {
                const status = data.success;
                if (!status) {
                    alertAdmin.show(500);
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
            alertUser.show(500);
            alertMessageUser.text("First Name is required");
            $("#firstNameUser").focus();
            return false;
        }
        if (!lastName) {
            alertUser.show(500);
            alertMessageUser.text("Last Name is required");
            $("#firstNameUser").focus();
            return false;
        }
        if (!email) {
            alertUser.show(500);
            alertMessageUser.text("Email is required");
            $("#emailUser").focus();
            return false;
        }
        if (
            !email.match(
                /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
            )
        ) {
            alertUser.show(500);
            alertMessageUser.text("Email format is not correct");
            $("#emailUser").focus();
            return false;
        }
        if (!phone) {
            alertUser.show(500);
            alertMessageUser.text("Phone is required");
            $("#phoneUser").focus();
            return false;
        }
        if (phone.length <= 10) {
            alertUser.show(500);
            alertMessageUser.text("Enter a valid cellphone number");
            $("#phoneUser").focus();
            return false;
        }
        if (gender == "") {
            alertUser.show(500);
            alertMessageUser.text("Please select gender");
            $("#genderUser").focus();
            return false;
        }
        if (!password) {
            alertUser.show(500);
            alertMessageUser.text("Password is required");
            $("#passwordUser").focus();
            return false;
        }
        if (password.length <= 5) {
            alertUser.show(500);
            alertMessageUser.text(
                "The password must consist of at least 5 characters"
            );
            $("#passwordUser").focus();
            return false;
        }
        if (!passwordConfirmation) {
            alertUser.show(500);
            alertMessageUser.text("Password Confirmation is required");
            $("#passwordConfirmationUser").focus();
            return false;
        }
        if (password != passwordConfirmation) {
            alertUser.show(500);
            alertMessageUser.text("Passwords are not the same");
            $("#passwordConfirmationUser").focus();
            return false;
        }

        const formData = new FormData($("#formCreateUser")[0]);
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
            error: function (err) {
                console.log("some error occured", err);
                alertUser.show(500);
                alertMessageUser.text(data.message);
            },
            success: function (data) {
                const status = data.success;
                if (!status) {
                    alertUser.show(500);
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

    // Form Edit Admin
    $(".formEditAdmin").each(function () {
        $(this).submit(function (e) {
            console.log("Form Edit Admin");

            const id = $(this).find("#idEditAdmin").val();
            console.log("id:", id);

            const firstName = $(this)
                .find(".firstNameEditAdmin" + id)
                .val();
            const lastName = $(this)
                .find(".lastNameEditAdmin" + id)
                .val();
            const email = $(this)
                .find(".emailEditAdmin" + id)
                .val();
            const phone = $(this)
                .find(".phoneEditAdmin" + id)
                .val();

            const alertAdmin = $(this).find(".alertEditAdmin" + id);
            const alertMessageAdmin = $(this).find(
                ".alertMessageEditAdmin" + id
            );

            if (!firstName) {
                console.log("First name is empty " + id);
                alertAdmin.show(500);
                alertMessageAdmin.text("First Name is required");
                return false;
            }
            if (!lastName) {
                console.log("Last name is empty " + id);
                alertAdmin.show(500);
                alertMessageAdmin.text("Last Name is required");
                return false;
            }
            if (!email) {
                alertAdmin.show(500);
                alertMessageAdmin.text("Email is required");
                return false;
            }
            if (
                !email.match(
                    /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
                )
            ) {
                alertAdmin.show(500);
                alertMessageAdmin.text("Email format is not correct");
                return false;
            }
            if (!phone) {
                alertAdmin.show(500);
                alertMessageAdmin.text("Phone is required");
                return false;
            }
            if (phone.length <= 10) {
                alertAdmin.show(500);
                alertMessageAdmin.text("Enter a valid cellphone number");
                return false;
            }

            const formData = new FormData($(this)[0]);
            $.ajaxSetup({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                },
            });
            $.ajax({
                type: "POST",
                url: $(this).attr("action"),
                data: formData,
                dataType: "json",
                processData: false,
                contentType: false,
                beforeSend: function () {
                    $(".btnEditAdmin" + id).prop("disabled", true);
                    $(".btnTextEditAdmin" + id).text("Please wait ...");
                },
                error: function (err) {
                    console.log("Some error occured", err);
                    alertAdmin.show(500);
                    alertMessageAdmin.text(data.message);
                },
                success: function (data) {
                    console.log(data);
                    if (!data.success) {
                        alertAdmin.show(500);
                        alertMessageAdmin.text(data.message);
                        $(".btnEditAdmin" + id).prop("disabled", false);
                        $(".btnTextEditAdmin" + id).text("Change Admin");
                        return false;
                    } else {
                        localStorage.setItem("edit-admin-success", true);
                        window.location.href = "list-data";
                    }
                },
            });

            e.preventDefault();
        });
    });

    // Form Edit User
    $(".formEditUser").each(function () {
        $(this).submit(function (e) {
            console.log("Form Edit User");

            const id = $(this).find("#idEditUser").val();
            console.log("id:", id);

            const firstName = $(this)
                .find(".firstNameEditUser" + id)
                .val();
            const lastName = $(this)
                .find(".lastNameEditUser" + id)
                .val();
            const email = $(this)
                .find(".emailEditUser" + id)
                .val();
            const phone = $(this)
                .find(".phoneEditUser" + id)
                .val();

            const alertUser = $(this).find(".alertEditUser" + id);
            const alertMessageUser = $(this).find(".alertMessageEditUser" + id);

            if (!firstName) {
                console.log("First name is empty " + id);
                alertUser.show(500);
                alertMessageUser.text("First Name is required");
                return false;
            }
            if (!lastName) {
                console.log("Last name is empty " + id);
                alertUser.show(500);
                alertMessageUser.text("Last Name is required");
                return false;
            }
            if (!email) {
                alertUser.show(500);
                alertMessageUser.text("Email is required");
                return false;
            }
            if (
                !email.match(
                    /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
                )
            ) {
                alertUser.show(500);
                alertMessageUser.text("Email format is not correct");
                return false;
            }
            if (!phone) {
                alertUser.show(500);
                alertMessageUser.text("Phone is required");
                return false;
            }
            if (phone.length <= 10) {
                alertUser.show(500);
                alertMessageUser.text("Enter a valid cellphone number");
                return false;
            }

            const formData = new FormData($(this)[0]);
            $.ajaxSetup({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                },
            });
            $.ajax({
                type: "POST",
                url: $(this).attr("action"),
                data: formData,
                dataType: "json",
                processData: false,
                contentType: false,
                beforeSend: function () {
                    $(".btnEditUser" + id).prop("disabled", true);
                    $(".btnTextEditUser" + id).text("Please wait ...");
                },
                error: function (err) {
                    console.log("some error occured", err);
                    alertUser.show(500);
                    alertMessageUser.text(data.message);
                },
                success: function (data) {
                    console.log(data);
                    if (!data.success) {
                        alertUser.show(500);
                        alertMessageUser.text(data.message);
                        $(".btnEditUser" + id).prop("disabled", false);
                        $(".btnTextEditUser" + id).text("Change User");
                        return false;
                    } else {
                        localStorage.setItem("edit-user-success", true);
                        window.location.href = "list-data";
                    }
                },
            });

            e.preventDefault();
        });
    });
});

// Show text for input photo
$(".custom-file-input").on("change", function () {
    let fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});

// Localstorage for tab-pane admin and user
const adminTab = document.querySelector("#adminTab");
const userTab = document.querySelector("#userTab");
const adminTabpane = document.querySelector("#admin");
const userTabpane = document.querySelector("#user");

const activeTab = localStorage.getItem("activeTab");

if (activeTab === "admin") {
    adminTab.classList.add("active");
    adminTabpane.classList.add("show", "active");
    userTab.classList.remove("active");
    userTabpane.classList.remove("show", "active");
}
if (activeTab === "user") {
    userTab.classList.add("active");
    userTabpane.classList.add("show", "active");
    adminTab.classList.remove("active");
    adminTabpane.classList.remove("show", "active");
}

adminTab.addEventListener("click", () => {
    localStorage.setItem("activeTab", "admin");
});
userTab.addEventListener("click", () => {
    localStorage.setItem("activeTab", "user");
});

// Close alert create admin
$("#closeAlertAdmin").click(function () {
    $("#alertAdmin").hide(500);
});

// Close alert create admin
$("#closeAlertUser").click(function () {
    $("#alertUser").hide(500);
    console.log("Close button clicked");
});

// Get ID when open form edit
$("a[data-toggle='modal']").click(function () {
    const id = $(this).data("id");
    if ($(this).hasClass("modalEditAdmin")) {
        $("#idEditAdmin").val(id);
        console.log("open form admin: " + id);
    }
    if ($(this).hasClass("modalEditUser")) {
        $("#idEditUser").val(id);
        console.log("open form user: " + id);
    }
});

// Show modal and close alert edit admin
$("#modalEditAdmin").on("show.bs.modal", function (e) {
    const button = $(e.relatedTarget);
    const id = button.data("id");
    $("#idEditAdmin").val(id);
});

$(".closeAlertEditAdmin").click(function () {
    const id = $("#idEditAdmin").val();
    $(".alertEditAdmin" + id).hide(500);
    console.log("close " + id);
});

// Show modal and close alert edit user
$("#modalEditUser").on("show.bs.modal", function (e) {
    const button = $(e.relatedTarget);
    const id = button.data("id");
    $("#idEditUser").val(id);
});

$(".closeAlertEditUser").click(function () {
    const id = $("#idEditUser").val();
    $(".alertEditUser" + id).hide(500);
    console.log("close " + id);
});
