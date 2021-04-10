$(document).ready(function(){

	$("#bEnviar").click(function(){

			$.ajax({
					type: "POST",
					dataType: "json",
					url: "php/acessar.php",
					data: {
							nome: $("#tNome").val(),
							sobrenome: $("#tSobrenome").val(),
							senha: $("#tSenha").val()
					},
					success: function(retorno) {

					}
			})
	});
	$("#bEnviar").click(function(){

		var senha_hash_md5 = $.MD5($('#tSenha').val());

		var myBitArray = sjcl.hash.sha256.hash($('#tSenha').val());
		var senha_hash_sha256 = sjcl.codec.hex.fromBits(myBitArray);


		return false;
	});

	var tSenha       = $('#tSenha');
	var tSenha2       = $('#tSenha2');
	var passwordsInfo   = $('#pass-info');

	passwordStrengthCheck(tSenha,tSenha2,passwordsInfo);


	function passwordStrengthCheck(tSenha, tSenha2, passwordsInfo){
		var WeakPass = /(?=.{5,}).*/;
		var MediumPass = /^(?=S*?[a-z])(?=S*?[0-9])S{5,}$/;
		var StrongPass = /^(?=S*?[A-Z])(?=S*?[a-z])(?=S*?[0-9])S{5,}$/;
		var VryStrongPass = /^(?=S*?[A-Z])(?=S*?[a-z])(?=S*?[0-9])(?=S*?[^w*])S{5,}$/;

		$(tSenha).on('keyup', function(e) {
			if(VryStrongPass.test(tSenha.val())){
				passwordsInfo.removeClass().addClass('rystrongpass').html("Senha muito Forte !");
			}
			else if(StrongPass.test(tSenha.val())){
				passwordsInfo.removeClass().addClass('strongpass').html("Senha Forte!");
			}
			else if(MediumPass.test(tSenha.val())){
				passwordsInfo.removeClass().addClass('goodpass').html("Senha Media !");
			}
			else if(WeakPass.test(tSenha.val())){
				passwordsInfo.removeClass().addClass('stillweakpass').html("Senha Fraca !");
			}
			else{
				passwordsInfo.removeClass().addClass('weakpass').html("A senha deve ter 5 ou mais caracteres)");
			}
		});

		$(tSenha2).on('keyup', function(e) {
			if(tSenha.val() !== tSenha2.val()){
				passwordsInfo.removeClass().addClass('weakpass').html("As senhas estão diferentes!");
			}else{
				passwordsInfo.removeClass().addClass('goodpass').html("");
			}
		});
	}


});