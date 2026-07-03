$(document).ready(function(){
    
    $('#pesquisa').keyup(function(){
        
        $('form').submit(function(){
            var dados = $(this).serialize();

            $.ajax({
                url: 'pesquisaCidade',
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