$(function(){

	function limitaCaracteres(textarea, counter, limit){
		$('.'+counter).text(limit+' restantes');
		var left;
		$('.'+textarea).on('keyup', function(e){
			var qtdCaracteres = $(this).val().length;
			left = limit-qtdCaracteres;
			if(left <= 0){
				left = 0;
				var textoAtual = $(this).val();
				var novoTexto = '';
				for(var n = 0; n < limit; n++){
					novoTexto += textoAtual[n];
				}
				$(this).val(novoTexto);
			}
			$('.'+counter).text(left+' restantes');
		});
	}
	limitaCaracteres('msg', 'counter', 140);

	$('.send_message').on('click', function(e){
		e.preventDefault();
		var texto_digitado = $('.msg').val();

		$.ajax({
			method: 'POST',
			url: 'sys/tweetar.php',
			data: {tweet: texto_digitado},
			dataType: 'json',
			success: function(retorno){
				 /*
					retorno.nome
					retorno.tweet
					retorno.date
					retorno.status
				 */

				 if(retorno.status == 'ok'){
				 	var tweet = '<article class="tweet hidden">';
				 		tweet += '<span class="nome"><a href="#">'+retorno.nome+'</a> disse:</span>';
						tweet += '<p>'+retorno.tweet+'</p>';
						tweet += '<span class="date">'+retorno.date+'</span></article>';

					$('#content').prepend(tweet);
					$('#content .tweet.hidden').slideDown().promise().done(function(){
						$(this).removeClass('hidden');
					});
				 }else{
				 	alert('ocorreu um erro ao enviar seu tweet');
				 }
			}
		});

		return false;
	});
});