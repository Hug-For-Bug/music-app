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

$(".formEditAdmin, .formEditUser").each(function () {
    $(this).on("input", function () {
        const id = $(this).find("#idEditAdmin, #idEditUser").val();
        const firstName = $(this)
            .find(`.firstNameEditAdmin${id}, .firstNameEditUser${id}`)
            .val();
        const lastName = $(this)
            .find(`.lastNameEditAdmin${id}, .lastNameEditUser${id}`)
            .val();
        const email = $(this)
            .find(`.emailEditAdmin${id}, .emailEditUser${id}`)
            .val();
        const phone = $(this)
            .find(`.phoneEditAdmin${id}, .phoneEditUser${id}`)
            .val();
        const password = $(this)
            .find(`.passwordEditAdmin${id}, .passwordEditUser${id}`)
            .val();
        const passwordConfirmation = $(this)
            .find(
                `.passwordConfirmationEditAdmin${id}, .passwordConfirmationEditUser${id}`
            )
            .val();

        const alert = $(this).find(`.alertEditAdmin${id}, .alertEditUser${id}`);
        if (firstName) alert.hide(500);
        if (lastName) alert.hide(500);
        if (email) alert.hide(500);
        if (phone) alert.hide(500);
        if (password) alert.hide(500);
        if (passwordConfirmation) alert.hide(500);
    });
});
