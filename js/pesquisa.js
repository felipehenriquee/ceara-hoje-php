$(document).ready(function(){
    
    $('#pesquisa').keyup(function(){
        
        $('form').submit(function(){
            var dados = $(this).serialize();

            $.ajax({
                url: 'https://oportaldoceara.com.br/pesquisaCidade',
                // url: 'http://felipehenrique.tk/pesquisaCidade',
                //url: 'http://192.168.0.9/portalceara/pesquisaCidade',
                method: 'post',
                dataType: 'html',
                data: dados,
                success: function(data){
                    $('#resultado').empty().html(data);
                }
            });

            return false;
        });

        $('form').trigger('submit');

    });
});