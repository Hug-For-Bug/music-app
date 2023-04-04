// $(document).ready(function () {
//     let editUserStatus = localStorage.getItem("edit-user-success");

//     if (editUserStatus) {
//         Swal.fire({
//             icon: "success",
//             title: "Updated",
//             text: "User Data Updated Successfully!",
//             confirmButtonText: "OK",
//         }).then(() => {
//             localStorage.removeItem("edit-user-success");
//         });
//     }

//     $(".formEditUser").each(function () {
//         $(this).submit(function (e) {
//             console.log("Form Edit User");

//             const id = $(this).find("#idEditUser").val();
//             console.log("id:", id);

//             const firstName = $(this)
//                 .find(".firstNameEditUser" + id)
//                 .val();
//             const lastName = $(this)
//                 .find(".lastNameEditUser" + id)
//                 .val();
//             const email = $(this)
//                 .find(".emailEditUser" + id)
//                 .val();
//             const phone = $(this)
//                 .find(".phoneEditUser" + id)
//                 .val();

//             const alertUser = $(this).find(".alertEditUser" + id);
//             const alertMessageUser = $(this).find(".alertMessageEditUser" + id);

//             if (!firstName) {
//                 console.log("First name is empty " + id);
//                 alertUser.show(500);
//                 alertMessageUser.text("First Name is required");
//                 return false;
//             }
//             if (!lastName) {
//                 console.log("Last name is empty " + id);
//                 alertUser.show(500);
//                 alertMessageUser.text("Last Name is required");
//                 return false;
//             }
//             if (
//                 !email.match(
//                     /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
//                 )
//             ) {
//                 alertUser.show(500);
//                 alertMessageUser.text("Email format is not correct");
//                 return false;
//             }
//             if (!phone) {
//                 alertUser.show(500);
//                 alertMessageUser.text("Phone is required");
//                 return false;
//             }
//             if (phone.length <= 10) {
//                 alertUser.show(500);
//                 alertMessageUser.text("Enter a valid cellphone number");
//                 return false;
//             }

//             const formData = new FormData($(this)[0]);
//             $.ajaxSetup({
//                 headers: {
//                     "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
//                         "content"
//                     ),
//                 },
//             });
//             $.ajax({
//                 type: "POST",
//                 url: $(this).attr("action"),
//                 data: formData,
//                 dataType: "json",
//                 processData: false,
//                 contentType: false,
//                 beforeSend: function () {
//                     $(".btnEditUser" + id).prop("disabled", true);
//                     $(".btnTextEditUser" + id).text("Please wait ...");
//                 },
//                 success: function (data) {
//                     console.log(data);
//                     if (!data.success) {
//                         alertUser.show(500);
//                         alertMessageUser.text(data.message);
//                         $(".btnEditUser" + id).prop("disabled", false);
//                         $(".btnTextEditUser" + id).text("Change User");
//                         return false;
//                     } else {
//                         localStorage.setItem("edit-user-success", true);
//                         window.location.href = "list-data";
//                     }
//                 },
//             });

//             e.preventDefault();
//         });
//     });
// });

$("#firstNameAdmin").on("input", function () {
    const firstName = $(this).val();
    const alertAdmin = $("#alertAdmin");
    if (firstName) {
        alertAdmin.hide(500);
    }
});
$("#lastNameAdmin").on("input", function () {
    const lastName = $(this).val();
    const alertAdmin = $("#alertAdmin");
    if (lastName) {
        alertAdmin.hide(500);
    }
});
