// LOGIN
$(function() {
    $('#Login').submit(function() {
        var obj = this;
        var form = $(obj);
        var dados = new FormData(obj);
        $.ajax({
            url: form.attr('action'),
            type: form.attr('method'),
            data: dados,
            processData: false,
            cache: false,
            contentType: false,
            success: function(data) {
                if (data == "ErroEmail") {
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top',
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                        onOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer)
                            toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                    })

                    Toast.fire({
                        width: 300,
                        icon: 'error',
                        title: 'Digite seu e-mail!'
                    })
                }

                if (data == "ErroSenha") {
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top',
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                        onOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer)
                            toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                    })

                    Toast.fire({
                        width: 300,
                        icon: 'error',
                        title: 'Digite sua senha!'
                    })
                }

                // if (data == "SuccessEmail") {
                //     const Toast = Swal.mixin({
                //         toast: true,
                //         position: 'top',
                //         showConfirmButton: false,
                //         timer: 3000,
                //         timerProgressBar: true,
                //         onOpen: (toast) => {
                //             toast.addEventListener('mouseenter', Swal.stopTimer)
                //             toast.addEventListener('mouseleave', Swal.resumeTimer)
                //         }
                //     })

                //     Toast.fire({
                //         width: 300,
                //         icon: 'success',
                //         title: 'E-MAIL ENVIADO!'
                //     })
                // }
            }, //success
        }); //ajax
        return false;
    });
});

// CADASTRO
$(function() {
    $('#Cadastro').submit(function() {
        var obj = this;
        var form = $(obj);
        var dados = new FormData(obj);
        $.ajax({
            url: form.attr('action'),
            type: form.attr('method'),
            data: dados,
            processData: false,
            cache: false,
            contentType: false,
            success: function(data) {
                if (data == "ErroNome") {
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top',
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                        onOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer)
                            toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                    })

                    Toast.fire({
                        width: 300,
                        icon: 'error',
                        title: 'Digite seu nome!'
                    })
                }
                if (data == "ErroEmail") {
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top',
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                        onOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer)
                            toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                    })

                    Toast.fire({
                        width: 300,
                        icon: 'error',
                        title: 'Digite seu e-mail!'
                    })
                }

                if (data == "ErroSenha") {
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top',
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                        onOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer)
                            toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                    })

                    Toast.fire({
                        width: 300,
                        icon: 'error',
                        title: 'Digite sua senha!'
                    })
                }
                if (data == "ErroConfSenha") {
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top',
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                        onOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer)
                            toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                    })

                    Toast.fire({
                        width: 300,
                        icon: 'error',
                        title: 'Digite a confirmação da senha!'
                    })
                }
                if (data == "ErroSenhasDiferentes") {
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top',
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                        onOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer)
                            toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                    })

                    Toast.fire({
                        width: 300,
                        icon: 'error',
                        title: 'As senhas são diferentes!'
                    })
                }

                // if (data == "SuccessEmail") {
                //     const Toast = Swal.mixin({
                //         toast: true,
                //         position: 'top',
                //         showConfirmButton: false,
                //         timer: 3000,
                //         timerProgressBar: true,
                //         onOpen: (toast) => {
                //             toast.addEventListener('mouseenter', Swal.stopTimer)
                //             toast.addEventListener('mouseleave', Swal.resumeTimer)
                //         }
                //     })

                //     Toast.fire({
                //         width: 300,
                //         icon: 'success',
                //         title: 'E-MAIL ENVIADO!'
                //     })
                // }
            }, //success
        }); //ajax
        return false;
    });
});