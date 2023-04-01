// $(document).ready(function () {
//     let editAdminStatus = localStorage.getItem("edit-admin-success");

//     if (editAdminStatus) {
//         Swal.fire({
//             icon: "success",
//             title: "Updated",
//             text: "User Data Updated Successfully!",
//             confirmButtonText: "OK",
//         }).then(() => {
//             localStorage.clear();
//         });
//     }

//     $(".formEditAdmin").each(function () {
//         $(this).submit(function (e) {
//             console.log("Form Edit Admin");

//             let id = $(this).find("#idEditAdmin").val();
//             console.log("id:", id);

//             let firstName = $(this)
//                 .find(".firstNameEditAdmin" + id)
//                 .val();
//             let lastName = $(this)
//                 .find(".lastNameEditAdmin" + id)
//                 .val();
//             let email = $(this)
//                 .find(".emailEditAdmin" + id)
//                 .val();
//             let phone = $(this)
//                 .find(".phoneEditAdmin" + id)
//                 .val();

//             let alertAdmin = $(this).find(".alertEditAdmin" + id);
//             let alertMessageAdmin = $(this).find(".alertMessageEditAdmin" + id);

//             if (!firstName) {
//                 console.log("First name is empty " + id);
//                 alertAdmin.show(400);
//                 alertMessageAdmin.text("First Name is required");
//                 return false;
//             }
//             if (!lastName) {
//                 console.log("Last name is empty " + id);
//                 alertAdmin.show(400);
//                 alertMessageAdmin.text("Last Name is required");
//                 return false;
//             }
//             if (
//                 !email.match(
//                     /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
//                 )
//             ) {
//                 alertAdmin.show(400);
//                 alertMessageAdmin.text("Email format is not correct");
//                 return false;
//             }
//             if (!phone) {
//                 alertAdmin.show(400);
//                 alertMessageAdmin.text("Phone is required");
//                 return false;
//             }
//             if (phone.length <= 10) {
//                 alertAdmin.show(400);
//                 alertMessageAdmin.text("Enter a valid cellphone number");
//                 return false;
//             }

//             let formData = new FormData($(this)[0]);
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
//                     $(".btnEditAdmin" + id).prop("disabled", true);
//                     $(".btnTextEditAdmin" + id).text("Please wait ...");
//                 },
//                 success: function (data) {
//                     console.log(data);
//                     if (!data.success) {
//                         alertAdmin.show(400);
//                         alertMessageAdmin.text(data.message);
//                         $(".btnEditAdmin" + id).prop("disabled", false);
//                         $(".btnTextEditAdmin" + id).text("Change Admin");
//                         return false;
//                     } else {
//                         localStorage.setItem("edit-admin-success", true);
//                         window.location.href = "list-data";
//                     }
//                 },
//             });

//             e.preventDefault();
//         });
//     });
// });
