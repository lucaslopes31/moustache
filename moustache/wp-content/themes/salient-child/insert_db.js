(function ($) {
    $(document).ready(function(){

        function limpa_formulário_cep() {
            // Limpa valores do formulário de cep.
            $("#endereco").val("").attr("placeholder", "Endereço");
            $("#bairro").val("").attr("placeholder", "Bairro");
            $("#cidade").val("").attr("placeholder", "Cidade");
            $("#estado").val("").attr("placeholder", "Estado");
        }
        
        $('#form-home').on('submit', function() {
            var form = $(this),
                formData = form.serialize();

            if (!form.valid()) {
                return;
            }

            $.ajax({
                url: myAjax.ajaxurl,
                dataType: 'json',
                method: 'post',
                data: formData,
                beforeSend: function() {
                    form.find('.spin').animate({
                        opacity: 1
                    });
                    form.find('#enviar').attr('disabled', true);
                },
                success: function(data) {
                    console.log(data);
                    if (data.type == 'success') {
                        form.find('#enviar').val('Gravado com sucesso');
                    } else {
                        form.find('#enviar').val('Erro! Tente novamente');
                    }
                },
                error: function(e) {
                    console.log(e);
                    form.find('#enviar').val('Erro! Tente novamente');
                },
                complete: function() {
                    form.find('.spin').animate({
                        opacity: 0
                    });
                    setTimeout(function() {
                        limpa_formulário_cep();
                        form[0].reset();
                        form.find('#enviar').val('Enviar Dados').attr('disabled', false);
                    }, 3000);
                }
            })
        })

    })
}(window.jQuery, window, document));