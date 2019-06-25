var i = 0;
var text = 'Notre super slogna pas encore toruvé  mais ça arrive et très vite !';
var speed = 50;

function typeWriter() {
  if (i < text.length) {
    document.getElementById("demo").innerHTML += text.charAt(i);
    i++;     
  }
}
setInterval(typeWriter, 81);
// draw cavas 
      
      (function() {
          var canvas  = document.querySelector('#canvas');
          var context = canvas.getContext('2d');
          
          context.translate(75,75);
      
          context.fillStyle = "rgb(123,23,235)";
          context.rotate((Math.PI / 180) * 45);        
          context.fillRect(0, 0, 50, 50);
          
          context.fillStyle = "orange";
          context.rotate(Math.PI / 2);        
          context.fillRect(0, 0, 50, 50);          
          
          context.fillStyle = "rgb(123,23,235)";
          context.rotate(Math.PI / 2);        
          context.fillRect(0, 0, 50, 50);        

      })();
$(document).ready(function(){  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop +500) {
          $(this).addClass("slide");
        }
    });
  });
})