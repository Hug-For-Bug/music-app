$(document).ready(function () {
    const createStatus = localStorage.getItem("create-success");
    const editStatus = localStorage.getItem("edit-success");

    if (createStatus) {
        toastrAlert("New Data User Added Successfully!", "Created").then(
            localStorage.clear()
        );
    }

    $("#formCreate").submit(function (e) {
        var formData = new FormData($("#formCreate")[0]);
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });
        $.ajax({
            type: "POST",
            url: $("#formCreate").attr("action"),
            data: formData,
            dataType: "json",
            processData: false,
            contentType: false,
            success: function (data) {
                console.log(data);
                {
                    localStorage.setItem("create-success", true);
                    window.location.href = "list-data";
                }
            },
        });

        e.preventDefault();
    });

    if (editStatus) {
        toastrAlert("User Data Updated Successfully!", "Updated").then(
            localStorage.clear()
        );
    }

    $("#form_edit").submit(function (e) {
        var formData = new FormData($("#form_edit")[0]);
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });
        $.ajax({
            type: "POST",
            url: $("#form_edit").attr("action"),
            data: formData,
            dataType: "json",
            processData: false,
            contentType: false,
            success: function (data) {
                console.log(data);
                {
                    localStorage.setItem("edit-success", true);
                    window.location.href = "list-data";
                }
            },
        });

        e.preventDefault();
    });

    // Toastr
    function toastrAlert(text, title) {
        toastr.success(text, title, {
            positionClass: "toast-top-right",
            timeOut: 5e3,
            closeButton: !0,
            debug: !1,
            newestOnTop: !0,
            progressBar: !0,
            preventDuplicates: !0,
            onclick: null,
            showDuration: "300",
            hideDuration: "1000",
            extendedTimeOut: "1000",
            showEasing: "swing",
            hideEasing: "linear",
            showMethod: "fadeIn",
            hideMethod: "fadeOut",
            tapToDismiss: !1,
        });
        return false;
    }
});

// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function () {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
