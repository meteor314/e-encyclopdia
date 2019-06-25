	function addText(e) {
		var message = document.getElementById('message');    
	        var startPos = message.selectionStart; //get focus
	        var endPos = message.selectionEnd;
	        var msgValue =$(message).val() ;
	        message.focus();

	        message.value = msgValue.substring(0, startPos) + e + msgValue.substring(endPos, msgValue.length ); // add tags value

	        message.selectionStart = startPos + e.length;
          
	        message.selectionEnd = endPos + e.length;
	} 

	// heart imgage



$(".heart").on("click", function() {
	
	$(this).addClass("is-active");
	$.ajax({
		type : "POST",
		url : '../assets/like.php',
        'data'  : 'like=' +  encodeURIComponent(1),
        
		
	});
});
