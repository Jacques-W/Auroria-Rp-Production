$(window).on('load', function(){
	$('#partie-1').hide()
	$('#partie-2').hide()
	$('#partie-3').hide()
	$('#partie-4').hide()
	$('#partie-5').hide()
	$('#partie-6').hide()
})
$(function(){
	$('#span').css('font-size', 'bold')
	setInterval(function(){
		$('#partie-1').slideDown(4000, function(){
			$('#partie-2').slideDown(3000, function(){
				$('#partie-3').slideDown(2000, function(){
					$('#partie-4').slideDown(1000, function(){
						$('#partie-5').slideDown(1000, function(){
							$('#partie-6').slideDown(1000)
						})
					})
				})
			})
		})
	})
})