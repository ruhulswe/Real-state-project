    
$(document).ready(function(){
    

	$('.file_unlink').click(function(){

		var that = $(this);
		var imgsrc = that.prev().attr('src');
		var url     =  that.attr('href');
		var imgcontainer = that.closest('.single-image');
		console.log(imgcontainer);
    	$.ajax({
    		type 		: 'post',
    		url			: url,
    		data 		: { imgsrc : imgsrc, url : url },
    		success		: function(response){
    			imgcontainer.html(response);
    		}
    	});


	});
	
    
})










