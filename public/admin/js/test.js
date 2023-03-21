$(document).ready(function () {
    $(".formEditAdmin").submit(function (e) {
        console.log("Form Edit Admin");

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
    });

    $(".closeAlertEditAdmin").click(function () {
        let id = $("#idEditAdmin").val();
        $(".alertEditAdmin" + id).hide(300);
        console.log("close " + id);
    });
});
