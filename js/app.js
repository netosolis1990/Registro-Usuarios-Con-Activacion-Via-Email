$(document).ready(function() {

	$('#registro').submit(function(event) {
		load();
		$.post('servidor/servidor.php',$('#registro').serialize(), function(data, textStatus, xhr) {
			console.log(data);
			if(data.exito){
				$('#registro')[0].reset();
				unload();
				success(data.msg);
			}
			else{
				unload();
				error(data.msg);
			}
		});
		return false;
	});

	$('#login').submit(function(event) {
		load();
		$.post('servidor/servidor.php',$('#login').serialize(), function(data, textStatus, xhr) {
			console.log(data);
			if(data.exito){
				unload();
				location.href = "http://netosolis.com";
			}
			else{
				unload();
				error(data.msg);
			}
		});
		return false;
	});
});

function load(){
	$('#mensajes').html('<div class="alert alert-success" role="alert" align="center"><img src="images/loader.gif"></div>');
	$('#btn-enviar').attr('disabled', 'disabled');
}
function unload(){
	$('#mensajes').empty();
	$('#btn-enviar').removeAttr('disabled');
}

function success(msg){
	$('#mensajes').html('<div class="alert alert-success" role="alert">'+msg+'</div>');
}

function error(msg){
	$('#mensajes').html('<div class="alert alert-danger" role="alert">'+msg+'</div>');
}