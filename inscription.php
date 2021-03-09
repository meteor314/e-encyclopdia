<?php

function securisation ($input) { //XML ATTACK, SQL injection  
    $input = htmlspecialchars($input);
    return $input;

}



session_start() ;
if(isset($_POST['submit_btn'])) {
    if(!empty($_POST["user_name"]) AND !empty($_POST["e_mail"]) AND !empty($_POST["pwd1"]) AND !empty($_POST["pwd2"]) ) {
        $userName=securisation($_POST['user_name']);
        $e_mail=securisation($_POST['e_mail']);
        $pwd1=($_POST['pwd1']);
        $pwd2=($_POST['pwd2']);

        settype($userName, "string"); //  type string
        settype($e_mail, "string"); 
        
        if($pwd1 == $pwd2) {
            if($pwd1 > 7) {
                if(filter_var($e_mail, FILTER_VALIDATE_EMAIL)) {// is a valid email address
                    if(preg_match("#^[a-z0-9A-Z_]{3,23}#i", $userName)){
                        $pwd = password_hash($pwd1, PASSWORD_DEFAULT);
                        echo $pwd;
                       

                    } else {
                        echo ("Ce pseudo n'est pas valide!");
                    }
                } else {
                    echo ("Mail invalide");
                }


            }else {
                echo ("Le mot de passe doit contenir au moins 8 caractères");
            }

        }else {
            echo ("Les mots de passe ne sont pas identique");

        }


        
    } else {
        echo ("tous les champs ne sont pas complétés");
    }
}



?>

<form method="post" action='#'>
    <div class="form">
    <div class="form-toggle"></div>
    <div class="form-panel one">
        <div class="form-header">
        <h1>Inscription - Social Tec</h1>
        </div>
        <div class="form-content">
        <form>
            <div class="form-group">
            <label for="username">Nom :</label>
            <input type ="text" placeholder="nom" name="user_name" id="name" required="required"> 
            </div>
            
            <div class="form-group">
            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="pwd2" required="required"/>
            </div>

            <div class="form-group">
            <label for="password">Mot de passe (confirmation):</label>
            <input type="password" id="password" name="pwd1" required="required"/>
            </div>

            <div class="form-group">
            <label for="password">E-mail:</label>
            <input type="email" id="e-mail" name="e_mail" required="required"/>
            </div>

            <div class="form-group">
            <label class="form-remember">
                <input type="checkbox"/>Remember Me
            </label><a class="form-recovery" href="#">Forgot Password?</a>
            </div>
            <div class="form-group">
            <button type ="submit" value="soumettre" name='submit_btn' id="submit_btn">S'inscrire</button>
            </div>
        </form>
        </div>
    </div> <!--
    <div class="form-panel two">
        <div class="form-header">
        <h1>Register Account</h1>
        </div>
        <div class="form-content">
        <form>
            <div class="form-group">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required="required"/>
            </div>
            <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required="required"/>
            </div>
            <div class="form-group">
            <label for="cpassword">Confirm Password</label>
            <input type="password" id="cpassword" name="cpassword" required="required"/>
            </div>
            <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" required="required"/>
            </div>
            <div class="form-group">
            <button type="submit">Register</button>
            </div>
        </form>
        </div>
    </div>
    </div> -->

<style>
html {
  width: 100%;
  height: 100%;
}

body {
  background: linear-gradient(45deg,rgba(62,35,255, 1) 0%, rgba(62,35,255, 0.4) 100%);
  color: rgba(0, 0, 0, 0.6);
  font-family: "Roboto", sans-serif;
  font-size: 14px;
  line-height: 1.6em;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

.overlay, .form-panel.one:before {
  position: absolute;
  top: 0;
  left: 0;
  display: none;
  background: rgba(0, 0, 0, 0.8);
  width: 100%;
  height: 100%;
}

.form {
  z-index: 15;
  position: relative;
  background: #FFFFFF;
  width: 600px;
  border-radius: 4px;
  box-shadow: 0 0 30px rgba(0, 0, 0, 0.1);
  box-sizing: border-box;
  margin: 100px auto 10px;
  overflow: hidden;
}
.form-toggle {
  z-index: 10;
  position: absolute;
  top: 60px;
  right: 60px;
  background: #FFFFFF;
  width: 60px;
  height: 60px;
  border-radius: 100%;
  transform-origin: center;
  transform: translate(0, -25%) scale(0);
  opacity: 0;
  cursor: pointer;
  transition: all 0.3s ease;
}
.form-toggle:before, .form-toggle:after {
  content: "";
  display: block;
  position: absolute;
  top: 50%;
  left: 50%;
  width: 30px;
  height: 4px;
  background: #4285F4;
  transform: translate(-50%, -50%);
}
.form-toggle:before {
  transform: translate(-50%, -50%) rotate(45deg);
}
.form-toggle:after {
  transform: translate(-50%, -50%) rotate(-45deg);
}
.form-toggle.visible {
  transform: translate(0, -25%) scale(1);
  opacity: 1;
}
.form-group {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  margin: 0 0 20px;
}
.form-group:last-child {
  margin: 0;
}
.form-group label {
  display: block;
  margin: 0 0 10px;
  color: rgba(0, 0, 0, 0.6);
  font-size: 12px;
  font-weight: 500;
  line-height: 1;
  text-transform: uppercase;
  letter-spacing: 0.2em;
}
.two .form-group label {
  color: #FFFFFF;
}
.form-group input {
  outline: none;
  display: block;
  background: rgba(0, 0, 0, 0.1);
  width: 100%;
  border: 0;
  border-radius: 4px;
  box-sizing: border-box;
  padding: 12px 20px;
  color: rgba(0, 0, 0, 0.6);
  font-family: inherit;
  font-size: inherit;
  font-weight: 500;
  line-height: inherit;
  transition: 0.3s ease;
}
.form-group input:focus {
  color: rgba(0, 0, 0, 0.8);
}
.two .form-group input {
  color: #FFFFFF;
}
.two .form-group input:focus {
  color: #FFFFFF;
}
.form-group button {
  outline: none;
  background: #4285F4;
  width: 100%;
  border: 0;
  border-radius: 4px;
  padding: 12px 20px;
  color: #FFFFFF;
  font-family: inherit;
  font-size: inherit;
  font-weight: 500;
  line-height: inherit;
  text-transform: uppercase;
  cursor: pointer;
}
.two .form-group button {
  background: #FFFFFF;
  color: #4285F4;
}
.form-group .form-remember {
  font-size: 12px;
  font-weight: 400;
  letter-spacing: 0;
  text-transform: none;
}
.form-group .form-remember input[type=checkbox] {
  display: inline-block;
  width: auto;
  margin: 0 10px 0 0;
}
.form-group .form-recovery {
  color: #4285F4;
  font-size: 12px;
  text-decoration: none;
}
.form-panel {
  padding: 60px calc(5% + 60px) 60px 60px;
  box-sizing: border-box;
}
.form-panel.one:before {
  content: "";
  display: block;
  opacity: 0;
  visibility: hidden;
  transition: 0.3s ease;
}
.form-panel.one.hidden:before {
  display: block;
  opacity: 1;
  visibility: visible;
}
.form-panel.two {
  z-index: 5;
  position: absolute;
  top: 0;
  left: 95%;
  background: #4285F4;
  width: 100%;
  min-height: 100%;
  padding: 60px calc(10% + 60px) 60px 60px;
  transition: 0.3s ease;
  cursor: pointer;
}
.form-panel.two:before, .form-panel.two:after {
  content: "";
  display: block;
  position: absolute;
  top: 60px;
  left: 1.5%;
  background: rgba(255, 255, 255, 0.2);
  height: 30px;
  width: 2px;
  transition: 0.3s ease;
}
.form-panel.two:after {
  left: 3%;
}
.form-panel.two:hover {
  left: 93%;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}
.form-panel.two:hover:before, .form-panel.two:hover:after {
  opacity: 0;
}
.form-panel.two.active {
  left: 10%;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
  cursor: default;
}
.form-panel.two.active:before, .form-panel.two.active:after {
  opacity: 0;
}
.form-header {
  margin: 0 0 40px;
}
.form-header h1 {
  padding: 4px 0;
  color: #4285F4;
  font-size: 24px;
  font-weight: 700;
  text-transform: uppercase;
}
.two .form-header h1 {
  position: relative;
  z-index: 40;
  color: #FFFFFF;
}
.pen-footer {
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  width: 600px;
  margin: 20px auto 100px;
}
.pen-footer a {
  color: #FFFFFF;
  font-size: 12px;
  text-decoration: none;
  text-shadow: 1px 2px 0 rgba(0, 0, 0, 0.1);
}
.pen-footer a .material-icons {
  width: 12px;
  margin: 0 5px;
  vertical-align: middle;
  font-size: 12px;
}

.cp-fab {
  background: #FFFFFF !important;
  color: #4285F4 !important;
}</style>
