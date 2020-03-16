(function ($) {
    $(document).ready(function(){
        $('.custom-post-grid.is-carousel').slick({
            dots: true,
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 3,
            autoplay: true,
            autoplaySpeed: 5000,
            responsive: [
              {
                breakpoint: 600,
                settings: {
                  slidesToShow: 2,
                  slidesToScroll: 2
                }
              },
              {
                breakpoint: 480,
                settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1,
                  dots: false
                }
              }
            ]
        })

        var SPMaskBehavior = function (val) {
            return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
          },
          spOptions = {
            onKeyPress: function(val, e, field, options) {
                field.mask(SPMaskBehavior.apply({}, arguments), options);
              }
          };
          
        $('#telefone').mask(SPMaskBehavior, spOptions);

        $('#cep').mask('00000-000')
        $('#nasc').mask('00/00/0000')

        function limpa_formulário_cep() {
            // Limpa valores do formulário de cep.
            $("#endereco").val("").attr("placeholder", "Endereço");
            $("#bairro").val("").attr("placeholder", "Bairro");
            $("#cidade").val("").attr("placeholder", "Cidade");
            $("#estado").val("").attr("placeholder", "Estado");
        }
        
        //Quando o campo cep perde o foco.
        $("#cep").blur(function() {

            $("#numero").focus();

            //Nova variável "cep" somente com dígitos.
            var cep = $(this).val().replace(/\D/g, '');

            //Verifica se campo cep possui valor informado.
            if (cep != "") {

                //Expressão regular para validar o CEP.
                var validacep = /^[0-9]{8}$/;

                //Valida o formato do CEP.
                if(validacep.test(cep)) {

                    //Preenche os campos com "..." enquanto consulta webservice.
                    $("#endereco").attr("placeholder", "...");
                    $("#bairro").attr("placeholder", "...");
                    $("#cidade").attr("placeholder", "...");
                    $("#estado").attr("placeholder", "...");

                    //Consulta o webservice viacep.com.br/
                    $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                        if (!("erro" in dados)) {
                            //Atualiza os campos com os valores da consulta.
                            $("#endereco").val(dados.logradouro);
                            $("#bairro").val(dados.bairro);
                            $("#cidade").val(dados.localidade);
                            $("#estado").val(dados.uf);
                            $("#form-home").valid();
                        } //end if.
                        else {
                            //CEP pesquisado não foi encontrado.
                            limpa_formulário_cep();
                            alert("CEP não encontrado.");
                        }
                    });
                } //end if.
                else {
                    //cep é inválido.
                    limpa_formulário_cep();
                    alert("Formato de CEP inválido.");
                }
            } //end if.
            else {
                //cep sem valor, limpa formulário.
                limpa_formulário_cep();
            }
        });

        $('#form-home').validate({
            rules: {
                nome: "required",
                cep: {
                    required: true,
                    postalcodeBR: true
                },
                email: {
                    required: true,
                    email: true
                },
                endereco: "required",
                numero: "required",
                telefone: "required",
                bairro: "required",
                nasc: "required",
                cidade: "required",
                estado: "required"
            },
            submitHandler: function(form) {
              form.submit();
            }
        })
    })
}(window.jQuery, window, document));