$(function(){
	$('#nom').change(verifNom)
	$('#email').change(verifMail)
	$('#objet').change(verifObjet)
	$('#message').change(verifMessage)
})
function verifNom(){
	if($('#nom').val().length < 5){
		$('#nom').css('border-color', red)
	}else{
		$('#nom').css('border-color', green)
	}
}
function verifMail(){
	if($('#email').val().length = 0){
		$('#email').css('border-color', red)
	}else('#email').css('border-color', green)
}
function verifObjet(){
	if($('#objet').val().length < 2){
		$('#objet').css('border-color', red)
	}else{
		$('#objet').css('border-color', green)
	}
}
function verifMessage(){
	if($('#message').val().length < 10){
		$('#message').css('border-color', red)
	}else{
		$('#message').css('border-color', green)
	}
}