$(function(data){

//Path to img folder.
	$.fn.raty.defaults.path='images';	
	

//Load a blank rating until data is fetched
	$('.star').raty({width:120});
	

//Retrieve the average score for profile first.
	$.get('php/profile_rating.php',
	function(data){
		
		//Activate Raty divs with class star
		$('.star').raty({
			number: 5,
			
			score: data,
					
			click: function(score,evt){
			
			//Retrieve id value and store in pid
				var pid= $(this).prop('id');
			
			//Post score and id value to profile_rating.php
				$.post('php/profile_rating.php',{score:score, pid:pid},
				function(data){
				});
			}
		});
	});
});
		