$(document).ready(function () {
    // let userId = $("#idEditUser").val();
    // console.log(userId);
    $("#formEditAdmin").submit(function (e) {
        console.log("Form Edit Admin");

        let id = $("#idEditUser").val();
        let firstName = $("#firstNameEditAdmin" + id).val();
        let lastName = $("#lastNameEditAdmin" + id).val();

        let alertAdmin = $("#alertEditAdmin" + id);
        let alertMessageAdmin = $("#alertMessageEditAdmin" + id);

        if (!firstName) {
            console.log("First name is empty");
            alertAdmin.show(400);
            alertMessageAdmin.text("First Name is required");
            return false;
        }
        if (!lastName) {
            console.log("Last name is empty");
            alertAdmin.show(400);
            alertMessageAdmin.text("Last Name is required");
            return false;
        }

        e.preventDefault();
    });

    $("#modalEditAdmin").on("show.bs.modal", function (e) {
        let button = $(e.relatedTarget);
        let id = button.data("id");
        $("#idEditUser").val(id);
    });

    $("a[data-toggle='modal']").click(function () {
        let id = $(this).data("id");
        $("#idEditUser").val(id);
    });

    $(".closeAlertEditAdmin").click(function () {
        let id = $("#idEditUser").val();
        $("#alertEditAdmin" + id).hide(300);
    });
});
