let pageControl = {
    init: function(){
        pageControl.bindEvents();
    },
    bindEvents: function(){
        $('form#formLogin').on('submit', e => e.preventDefault());
        $('#btnLogin').on('click', pageControl.submitLoginForm);
        $('form#formRegistro').on('submit', e => e.preventDefault());
        $('#btnRegistrar').on('click', pageControl.submitRegForm);
    },
    submitLoginForm: function(){
        let form = $("#formLogin");
        let formData = $(form).serializeArray();
        $.ajax({
            method: "POST",
            url: "user_handler.php",
            data: formData,
            success: function(d){
                d = JSON.parse(d);
                if(!d.error){
                    Swal.fire({
                        icon: 'success',
                        title: 'Sucesso',
                        text: d.msg,
                        timer: 5000,
                        timerProgressBar: true,
                        willClose: function(){
                            window.location = 'interno.php';
                        }
                    });
                }else{
                    Swal.fire({
                        icon: 'error',
                        title: 'Erro',
                        text: d.msg
                    });
                }
            }
        })
    },
    submitRegForm: function(){
        let form = $("#formRegistro");
        let formData = $(form).serializeArray();
        $.ajax({
            method: "POST",
            url: "user_handler.php",
            data: formData,
            success: function(d){
                d = JSON.parse(d);
                if(!d.error){
                    Swal.fire({
                        icon: 'success',
                        title: 'Sucesso',
                        text: d.msg
                    });
                }else{
                    Swal.fire({
                        icon: 'error',
                        title: 'Erro',
                        text: d.msg
                    });
                }
            }
        })
    }
};
pageControl.init();
