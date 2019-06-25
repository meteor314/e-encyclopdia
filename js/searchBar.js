
$(document).ready(function () {

	document.querySelector('.search-button').addEventListener('click', function() {
		$(this).parent().toggleClass('open');
	});


    //pop -up 
    var modal =  document.querySelector('.pop-up-container');
	  var popup =  document.querySelector('.pop-up');
    var checkbox2 =  document.querySelector('#checkbox2');
	
	window.addEventListener('click', function(e) {
		if(e.target === modal) {
			$(modal).css('display', 'none');
		}	
	});

	var searchButton = document.querySelector('.search-bar-btn');
	searchButton.addEventListener('click', function() {
		document.querySelector('.pop-up-container').style.display='block';
	});

	var search = document.getElementById('search');
     search.addEventListener('keyup', function(e) {     	
            $('#result').html('');

            var q = $(this).val();

            if(q != ""){
                $.ajax({
                    type: 'GET',
                    url: 'rechercher.php',
                    data: 'q=' + encodeURIComponent(q),
                    beforeSend: function() {
                        $("#loading").show();
                    },
                    success: function(data){
                        if(data != ""){
                            $('#result').append(data);
                        }else{
                    
                        	$('#result').html('<h2 style="color : red ">Aucun résultat !</h2> ');
                        }// endIF

                        $("#loading").hide();

                    }
                });
            } //endIF

            
    });


    //  loader creatd for HTML5 by meteor
    var canvas = document.querySelector('#canvasLoader');
    var ctx = canvas.getContext('2d');
    var angle = 0;
    canvas.width = 80;
    canvas.height = 80;
    draw();

    function draw(){
          
          ctx.fillStyle = '#333333';          
          ctx.strokeStyle = 'white';          
          ctx.lineWidth = 17;          
          ctx.fillRect(0,0,canvas.width,canvas.height);          
          ctx.save();          
          ctx.translate(canvas.width/2, canvas.height/2);          
          ctx.rotate(angle)          
          ctx.beginPath();
          ctx.arc(0,0,19,0, Math.PI * 1.5);       
          angle+=0.09;
          ctx.stroke();

          ctx.restore();
          
          requestAnimationFrame(draw);
      
    }

});



