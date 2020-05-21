/**
*
* index.js
* Creator Wira
*
**/

$(document).ready(function(){
	// add height to  notifikasi panel				
	var top = $('.notifikasi_panel').offset().top;
	var windowHeight = $('body').height();	
	var defaultScroll = 0;	

	$('.notifikasi_panel a').click(function(e){
		e.preventDefault();
		$('.notifikasi_panel').addClass('animate slideUp');
	});

	$('.close span').click(function(){		
		$('.get-latest-update').removeClass('shown');
		localStorage.setItem('visited',true);		
	});	

	var visited = localStorage.getItem('visited');

	if(visited == 'true'){			
		$('.get-latest-update').hide();
	}
	
	 
	$(window).scroll(function(){
		currentScroll = $(this).scrollTop();	
		if(currentScroll > top){
			$('body').addClass('sticky');
		}
		
		
		if(currentScroll > (windowHeight/3)+100){				
			if(defaultScroll == 0){			
				$('.get-latest-update').addClass('shown');																	
			}		
			defaultScroll = currentScroll;
		}
	

	})

	setTimeout(function(){ 
		localStorage.setItem('visited',true);
		$('.get-latest-update').removeClass('shown');		
	}, 600000);

})
