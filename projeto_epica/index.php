<?php
require 'classes/Usuarios.php';
$u = new Usuarios();
?>
<html>
    <head>
        <title>Projeto html & css</title>
        <meta chasert="UTF-8">
        <meta id="viewport" name="viewport" content="width=device-width, user-scalable=no">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
        <link href="assets/css/template.css" rel="stylesheet" />
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
            
            <div class="autoslider">
                <img src="assets/images/img1.png" class="img-responsive" />
            </div>
            <div class="conteudo1">
                <div class="grade1">
                    <div class="titulo">
                    Lastest News<br/>
                    </div>
                    <div class="bola1">
                        <img src="assets/images/marker-text-1.png" />
                    </div>
                    <div id="escrito1respcima" class="escrito1">
                    Rock Band is one of free website templates created by Template Monster team.
                    </div>
                    <div class="bola2">
                        <img src="assets/images/marker-text-1.png" />
                    </div>
                    <div id="escrito2respcima" class="escrito1">
                    This Rock Band Template goes with two packages – with PSD source files and without them.
                    </div>
                    <div id="bola3resp" class="bola3">
                        <img src="assets/images/marker-text-1.png" />
                    </div>
                    <div id="escrito1resp" class="escrito1">
                    PSD source files are available for free for the registered members of Templates.com.
                    </div>
                </div>
                <div class="grade2">
                    <div class="titulo2">
                    Tour Dates<br/>
                    </div>
                    <div class="bola1blue">
                        <img src="assets/images/marker-text-2.png" />
                    </div>
                    <div class="escrito2">
                    New York
                    Lorem ipsum dolor consctetur
                    </div>
                    <div class="bola2blue">
                        <img src="assets/images/marker-text-2.png" />
                    </div>
                    <div class="escrito2">
                    Los Angeles
                    Adipisicing elitdo esmod tempor
                    </div>
                    <div id="bola3blueresp" class="bola3blue">
                        <img src="assets/images/marker-text-2.png" />
                    </div>
                    <div id="escrito2resp" class="escrito2">
                    San Diego
                    Lorem ipsum dolor consctetur
                    </div>
                </div>
                <div class="grade3">
                    <div class="titulo3">
                    In Stores Now!<br/>
                    </div>
                    <div class="imagestore"></div>
                </div>
            </div>
        <div class="image1">
            <img src="assets/images/page4-img2.jpg" class="img-responsive" />
            <img src="assets/images/page4-img3.jpg" class="img-responsive" />
            <img src="assets/images/page4-img1.jpg" class="img-responsive" />
            <img src="assets/images/page4-img3.jpg" class="img-responsive" />
            <img src="assets/images/page4-img2.jpg" class="img-responsive" />
            <img src="assets/images/page4-img1.jpg" class="img-responsive" />
            <img src="assets/images/page4-img2.jpg" class="img-responsive" />
            <img src="assets/images/page4-img3.jpg" class="img-responsive" />
            <img src="assets/images/page4-img1.jpg" class="img-responsive" />
        </div>
            <div class="conteudo2">
                <div class="grad1">
                    <div class="title1">
                        Upcoming Events
                    </div>
                    <div class="escrit1">
                        Lorem ipsum dolor consctetur adipisicing elitdo eusmod tempor incididunt ut labore.
                    </div>
                    <div id="escrit1resp" class="escrit1">
                        Lorem ipsum dolor consctetur adipisicing elitdo eusmod tempor incididunt ut labore.
                    </div>
                </div>
                <div class="grad2">
                    <div class="title2">
                        Lastest Video
                    </div>
                    <div class="imagevideo"></div>
                </div>
                <div class="grad3">
                    <div class="title3">
                        Shortly About
                    </div>
                    <div class="escrit3">
                        Sed ut perspiciatis unde omnis Iste natus error sit voluptatem accusantium doloremque 
                        laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi 
                        architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas 
                        aspernatur.
                    </div>
                </div>
            </div>
        <div class="rodape">
                <div class="rodapeimage"></div>
            </div>
        </div>
    </body>
</html>

