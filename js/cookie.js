
    // banner cookies
var dropCookie = true;                      
var cookieDuration = 0;                    
var cookieValue = 'on';                     
 
function createDiv(){
    var bodytag = document.getElementsByTagName('body')[0];
    var div = document.createElement('div');
    div.setAttribute('id','cookieMessage');
    div.innerHTML = '<div class="alert alert-danger alert-dismissible text-center" ><span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span>  <strong>Alert !</strong> Pour une meilleure optimisation ce site utilise des cookies ! En suivant votre navigation vous accptez l\' utilisation des cookies. <a href="#"> En savoir plus</a>.</div>';    
 
    bodytag.insertBefore(div,bodytag.firstChild);      
    createCookie(window.cookieName,window.cookieValue, window.cookieDuration); 
}
 
 
function createCookie(name,value,days) {
    if (days) {
        var date = new Date();
        date.setTime(date.getTime()); 
        var expires = "; expires="+date.toGMTString(); 
    }
    else var expires = "";
    if(window.dropCookie) { 
        document.cookie = name+"="+value+expires;  
    } else{
        var p = document.createElement('h1');
        var text = document.createTextNode('Humm, ce site ne sert de cookies dans un but non lucratif ! Veuillez laisser l\'accès aux cookies !');
        p.setAttribute('class', "alert alert-success")
        p.appendChild(text);
        document.body.appendChild(p);
    }
}
 
function checkCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {

        var c = ca[i];
        while (c.charAt(0)==' ') {
            c = c.substring(1,c.length);
        }

        if (c.indexOf(nameEQ) == 0) {
            return c.substring(nameEQ.length,c.length);
        }
    }
    return null;
}
 

 window.addEventListener('load', function() {
    if(checkCookie(window.cookieName) !=  window.cookieValue) {
        createDiv();
        console.log('Success  :  a cookie has been inserted. ');
    } 
 });




