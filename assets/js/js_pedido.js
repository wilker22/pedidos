
$(function(){
   
   $("#produto").on("keyup", function(){
	   
       var q  = $(this).val();
       $.ajax({
            url: base_url + "produto/buscar" + q,
            type: "POST",
            dataType: "json",
            data:{},
            success: function (data){
                $("#produto").after('<div class="listaProdutos"></div>');
                
                html = "";
                var i;
                    for (i = 0; i < data.length; i++) {		  
                    html +='<div class="si"><a href="javascript:;" onclick="selecionarProduto(this)"'
                    + 'data-id="' + data[i].id_produto +
                    'data-nome="' + data[i].id_descricao +
                    '" data-valor="' + data[i].preco + '">' +
                    data[i].descricao + " - R$ " + data[i].preco + '</a></div>';
                    
                    }
                    $(".listaProdutos").html(html);
                    $(".listaProdutos").show();
            }
        });
        
        
   }) ;
});