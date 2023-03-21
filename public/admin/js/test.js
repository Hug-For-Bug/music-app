$(document).ready(function () {
    let editAdminStatus = localStorage.getItem("edit-admin-success");

    if (editAdminStatus) {
        Swal.fire({
            icon: "success",
            title: "Updated",
            text: "User Data Updated Successfully!",
            confirmButtonText: "OK",
        }).then((result) => {
            if (result.isConfirmed) {
                localStorage.clear();
            }
        });
    }

    // let idForm = $(".formEditAdmin").data("id");
    $(".formEditAdmin").submit(function (e) {
        console.log("Form Edit Admin");
        // console.log("id form: " + idForm);

        let id = $("#idEditAdmin").val();
        console.log("id:", id);

        let firstName = $(".firstNameEditAdmin" + id).val();
        let lastName = $(".lastNameEditAdmin" + id).val();
        let email = $(".emailEditAdmin" + id).val();
        let phone = $(".phoneEditAdmin" + id).val();

        let alertAdmin = $(".alertEditAdmin" + id);
        let alertMessageAdmin = $(".alertMessageEditAdmin" + id);

        if (!firstName) {
            console.log("First name is empty " + id);
            alertAdmin.show(400);
            alertMessageAdmin.text("First Name is required");
            return false;
        }
        if (!lastName) {
            console.log("Last name is empty " + id);
            alertAdmin.show(400);
            alertMessageAdmin.text("Last Name is required");
            return false;
        }

        if (
            !email.match(
                /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
            )
        ) {
            console.log("Email forma is not correct" + id);
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

        let formData = new FormData($(".formEditAdmin" + idForm)[0]);
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });
        $.ajax({
            type: "POST",
            url: $(".formEditAdmin" + idForm).attr("action"),
            data: formData,
            dataType: "json",
            processData: false,
            contentType: false,
            beforeSend: function () {
                $(".btnEditAdmin" + id).prop("disabled", true);
                $(".btnTextEditAdmin" + id).text("Please wait ...");
            },
            success: function (data) {
                console.log(data);
                if (!data.success) {
                    alertAdmin.show(400);
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

    $("#modalEditAdmin").on("show.bs.modal", function (e) {
        let button = $(e.relatedTarget);
        let id = button.data("id");
        $("#idEditAdmin").val(id);
    });

    $("a[data-toggle='modal']").click(function () {
        let id = $(this).data("id");
        $("#idEditAdmin").val(id);
        console.log(id);
        console.log("id form: " + idForm);
    });

    $(".closeAlertEditAdmin").click(function () {
        let id = $("#idEditAdmin").val();
        $(".alertEditAdmin" + id).hide(300);
        console.log("close " + id);
    });
});
