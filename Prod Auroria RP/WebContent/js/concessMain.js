$(function(){
	$('a').on('click', retardDeRedirection)
})
function retardDeRedirection(e){
	var link = $(this).attr('href')
		setTimeout(function(){
			window.location.href = link
		}, 3000)
		e.preventDefault()
}