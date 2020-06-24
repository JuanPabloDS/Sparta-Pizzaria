
	function alteraMetade(pizza){
		$.ajax({
          url: 'controle_pizza.php?acao=buscarPizza&id=' + pizza,
          type: 'GET',
          beforeSend: function() {

          },
          success: function(resultado) {
            $('#sabor1').html('<img class="" src="'+ resultado +'" style="clip-path: polygon(0 0, 50% 0, 50% 100%, 0 100%);right: -107%;position: relative;">');
          }
        });
	}
	function alteraMetade2(pizza){
		$.ajax({
          url: 'controle_pizza.php?acao=buscarPizza&id=' + pizza,
          type: 'GET',
          beforeSend: function() {

          },
          success: function(resultado) {
            $('#sabor2').html('<img src="'+ resultado +'" style="clip-path: polygon(50% 0, 100% 0, 100% 100%, 50% 100%);left: -107%;position: relative;">');
          }
        });
	}
	function alteraDescricao(pizza){
		$.ajax({
          url: 'controle_pizza.php?acao=buscarDescricao&id=' + pizza,
          type: 'GET',
          beforeSend: function() {

          },
          success: function(resultado) {
            $('#descricao1').html('<h5 class="pizzatexto">'+ resultado +'</h5>');
          }
        });
  }
  function alteraDescricao2(pizza){
    $.ajax({
          url: 'controle_pizza.php?acao=buscarDescricao&id=' + pizza,
          type: 'GET',
          beforeSend: function() {

          },
          success: function(resultado) {
            $('#descricao2').html('<h5 class="pizzatexto">'+ resultado +'</h5>');
          }
        });
  }
  function alteraPreco(pizza){
    $.ajax({
          url: 'controle_pizza.php?acao=buscarPreco&id=' + pizza,
          type: 'GET',
          beforeSend: function() {

          },
          success: function(resultado) {
            $('#preco').html('<h4 align="center"><b>R$ '+ resultado +'</b></h4>');
          }
        });
  }
  function alterabebidaPreco(bebida){
    $.ajax({
          url: 'controle_bebida.php?acao=buscarBebidaPreco&id=' + bebida,
          type: 'GET',
          beforeSend: function() {

          },
          success: function(resultado) {
            $('#bebidaPreco').html('<h4 align="center"><b>R$ '+ resultado +'</b></h4>');
            echop
          }
        });
  }
  function selecionaBebida(bebida){
    $.ajax({
          url: 'controle_bebida.php?acao=buscarBebidaPreco&id=' + bebida,
          type: 'GET',
          beforeSend: function() {

          },
          success: function(resultado) {
            $('#bebidaPreco').html('<button type="button" class="btn btn-danger comprar"><i class="fas fa-trash-alt"></i></button>'+ resultado +'</b></h4>');
            echop
          }
        });
  }