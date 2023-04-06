$("#formCreateAdmin, #formCreateUser").on("input", function () {
    const firstName = $(this).find("#firstNameAdmin, #firstNameUser").val();
    const lastName = $(this).find("#lastNameAdmin, #lastNameUser").val();
    const email = $(this).find("#emailAdmin, #emailUser").val();
    const phone = $(this).find("#phoneAdmin, #phoneUser").val();
    const password = $(this).find("#passwordAdmin, #passwordUser").val();
    const passwordConfirmation = $(this)
        .find("#passwordConfirmationAdmin, #passwordConfirmationUser")
        .val();

    const alert = $(this).find("#alertAdmin, #alertUser");
    if (firstName) alert.hide(500);
    if (lastName) alert.hide(500);
    if (email) alert.hide(500);
    if (phone) alert.hide(500);
    if (password) alert.hide(500);
    if (passwordConfirmation) alert.hide(500);
});
