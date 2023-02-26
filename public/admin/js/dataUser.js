$(document).ready(function () {
    const createStatus = localStorage.getItem("create-success");

    if (createStatus) {
        toastr
            .success("New Data User Added Successfully!", "Created", {
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
            })
            .then(localStorage.clear());
    }

    $("#form_create").submit(function (e) {
        var formData = new FormData($("#form_create")[0]);
        $.ajax({
            type: "POST",
            url: $("#form_create").attr("action"),
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
});

// Add the following code if you want the name of the file appear on select
$("#custom-file-input").on("change", function () {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings("#custom-file-label").addClass("selected").html(fileName);
});
