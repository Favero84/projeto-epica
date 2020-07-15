<?php 
require 'config.php';
require 'classes/Usuarios.php';

$u = new Usuarios();

if(isset($_POST['name']) && !empty($_POST['name'])) {
   $name = addslashes($_POST['name']);
   $email = addslashes($_POST['email']);
   $message = addslashes($_POST['message']);
                        
   $u->addMensagem($name, $email, $message);
}
?>

<html>
    <head>
        <title>Projeto html & css</title>
        <meta chasert="UTF-8">
        <meta id="viewport" name="viewport" content="width=device-width, user-scalable=no">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
        <link href="assets/css/contacts.css" rel="stylesheet" />
    </head>
    <body>
            <div class="topo1">
                <div class="logo"></div>
            </div>
            <nav class="nav">
                <label for="toggle">&#9776;</label>
                <input type="checkbox" id="toggle"/>
                <div class="menu">
                    <ul>
                        <a href="./"><li>ABOUT</li></a>
                        <a href="audio.php"><li>AUDIO</li></a>
                        <a href="video.php"><li>VIDEO</li></a>
                        <a href="gallery.php"><li>GALLERY</li></a>
                        <a href="dates.php"><li>TOUR DATES</li></a>
                        <a href="contacts.php"><li>CONTACTS</li></a>
                    </ul>
                </div>    
            </nav>
            <div class="conteudo">
                <div class="grade1">
                    <div class="titulo">Contact Form</div>
                    
                    <form method="POST">
                        
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="name" class="form-control" name="name" id="name" />
                </div>
                
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" name="email" id="email" />
                </div>
                
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="message" id="message" class="form-control"></textarea>
                </div>
                        
                <br/>
                
                <div class="button">
                <button type="submit" class="btn btn-default">Submit</button>
                </div>
                
            </form>
                </div>
                <div class="grade2">
                    <div class="titulo2">Contact Info</div>
                    <div class="imagecd">
                        <img src="assets/images/page1-img1.jpg" class="img-responsive" />
                    </div>
                    <div class="texto">8901 Marmora Road,
                                       Glasgow, D04 89GR.
                                       Telefone: +1 959603 6035
                                       E-mail: mail@demolink.org
                    </div>
                </div>
            </div>    
            <div class="rodape">
                <div class="rodapeimage"></div>
            </div>
    </body>
</html>

