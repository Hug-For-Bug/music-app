$(document).ready(function(e){

    // Login
    $('#formLogin').submit(function(e){
        var email = $('#email').val();
        var password = $('#password').val();
        var password_confirmation = $('#password_confirmation').val();
        
        if(!email){
            toastr.error('Email harus diisi!', 'ERROR')
            return false
        }
        if(!email.match(/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/)){
            toastr.error('Format email belum benar!', 'ERROR')
            return false
        }
        if(!password){
            toastr.error('Password harus diisi!', 'ERROR')
            return false
        }
        if(password.length <= 6){
            toastr.error('Password minimal 6 karakter!', 'ERROR')
            return false
        }
        if(password != password_confirmation){
            toastr.error('Password tidak sesuai', 'ERROR')
            return false
        }

        e.preventDefault();

        var formData = new FormData($("#formLogin")[0]);
        $.ajaxSetup({
           headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           }
        });
        $.ajax({
            type: "POST",
            url: $('#formLogin').attr('action'),
            data: formData,
            dataType:'json',
            processData: false,
            contentType: false,
            beforeSend:function(){
                $('#btnLogin').prop("disabled", true)
                $('#btnLogin').html("Harap tunggu ...")
            },
            success: function(data){
                if(!data.success){
                    toastr.error(data.message, 'ERROR')
                    $('#btnLogin').prop("disabled", false)
                    $('#btnLogin').html("MASUK")
                    return false
                }else{
                    var role = data.user.role_id
                    toastr.success('Login Berhasil', 'Success')
                    if(role == 1){
                        window.location.href = 'superadmin'
                    }else if(role == 2){
                        window.location.href = 'admin'
                    }else if(role == 3){
                        window.location.href = 'instruktur'
                    }else{
                        window.location.href = 'peserta'
                    }
                }
            }
        })
    })
})
