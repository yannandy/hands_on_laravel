<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/article.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
</head>
<body>
<nav class="navbar navbar-expand-sm bg-light" style="display: grid; grid-template-columns: 0.2fr 1fr 0.2fr;">
        <a href="#">
            <img src="{{asset('Wallpaper/logo2.png')}}" alt="logo" style="width: 100%; height:130px">
        </a>
        <div class="navitems_jac">
            <p style="text-align: center; font-size:20px; font-weight:bold ">JEUNES AMOUREUX DE CHRIST</p>
            <ul class="navbar-nav style" style="justify-content: center;" >
                <li class="nav-item">
                    <a class='nav-link'href="#"> ACCEUIL </a>
                </li>
                <li class="nav-item">
                    <a class='nav-link' href="aPropos"> A PROPOS </a>
                </li>
                <li class="nav-item">
                    <a class='nav-link' href="#articles"> NOS ARTICLES </a>
                </li>
                <li class="nav-item">
                    <a class='nav-link' href="#partenaires"> NOS PARTENAIRES </a>
                </li>
                <li class="nav-item">
                    <a class='nav-link' href="#temoignages"> TEMOIGNAGES </a>
                </li>
                <li class="nav-item">
                    <a class='nav-link' href="mainpage"> FAIRE UN DON</a>
                </li>
                <li class="nav-item">
                    <a class='nav-link' href="#contact"> CONTACTS </a>
                </li>
            </ul>
        </div>
        <div class="icon" style="display: flex; justify-content: flex-end; margin-right: 8%; gap:20px">
            <a href="#" class="fa fa-facebook" style="font-weight:bold;"></a>
            <a href="#" class="fa fa-twitter" style="font-weight:bold;"></a>
            <a href="#" class="fa fa-instagram" style="font-weight:bold;"></a>
            <a href="#" class="fa fa-youtube"></a>
        </div>
    </nav>
    <br>

    <div class="containarticleselected">
        <div class="containParagraphe" >
            <p id="title_Article">ARTICLES</p>
        </div>
        <div class="articleMixedWithText">
            <img src="../Wallpaper/1amoureux.jpg" alt="Selected Article">
            <p id="article_text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores sequi praesentium nulla dolores cum expedita atque ullam distinctio, laudantium omnis.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores sequi praesentium nulla dolores cum expedita atque ullam distinctio, laudantium omnis.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores sequi praesentium nulla dolores cum expedita atque ullam distinctio, laudantium omnis.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores sequi praesentium nulla dolores cum expedita atque ullam distinctio, laudantium omnis.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores sequi praesentium nulla dolores cum expedita atque ullam distinctio, laudantium omnis.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores sequi praesentium nulla dolores cum expedita atque ullam distinctio, laudantium omnis.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores sequi praesentium nulla dolores cum expedita atque ullam distinctio, laudantium omnis.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores sequi praesentium nulla dolores cum expedita atque ullam distinctio, laudantium omnis.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores sequi praesentium nulla dolores cum expedita atque ullam distinctio, laudantium omnis.
            </p>
            <div class="partager">
                <p id="share">Partager</p>
                <div class="icon_share" style="display: flex; margin-top: 0.5%; gap: 20%; margin-left: 50%; ">
                    <a href="#" class="fa fa-facebook" style="color: blue;"></a>
                    <a href="#" class="fa fa-twitter" style="color: blue;"></a>
                    <a href="#" class="fa fa-instagram" style="color: blue;"></a>
                    <a href="#" class="fa fa-whatsapp" style="color: red;"></a>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <footer style="background-color: gray; height: 230px;">
        <br>
        <p style="color: wheat; text-align: center;">JMAC PR</p>
        <div class="icon" style="display: flex; margin: 15px 43%; justify-content: space-between;">
            <a href="#" class="fa fa-facebook" style="color: yellowgreen;"></a>
            <a href="#" class="fa fa-twitter" style="color: yellowgreen;"></a>
            <a href="#" class="fa fa-instagram" style="color: yellowgreen;"></a>
            <a href="#" class="fa fa-youtube" style="color: yellowgreen;"></a>
        </div>
        <div class="mail" style=" color: wheat;text-align: center;">aballoyannick@gmail.com </div> <br>
        <div class="copyright" style="color: wheat; text-align: center;">@Copyright JMAC PR 2021. Tous droits réservés</div><br>
        <div class="made" style="color: wheat; float:right; margin-right:10%">Made by Nasutech</div>
    </footer>
</body>
</html>