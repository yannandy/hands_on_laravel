<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
    <link rel="stylesheet" href="https://use.typekit.net/shh1fpl.css">
    <script src="https://kit.fontawesome.com/88f2505246.js" crossorigin="anonymous"></script>
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
                    <a class='nav-link'href="mainpage" style="font-size: 15px;"> ACCEUIL </a>
                </li>
                <li class="nav-item">
                    <a class='nav-link' href="aPropos" style="font-size: 15px;"> A PROPOS </a>
                </li>
                <li class="nav-item">
                    <a class='nav-link' href="#articles" style="font-size: 15px;"> NOS ARTICLES </a>
                </li>
                <li class="nav-item">
                    <a class='nav-link' href="#partenaires" style="font-size: 15px;"> NOS PARTENAIRES </a>
                </li>
                <li class="nav-item">
                    <a class='nav-link' href="#temoignages" style="font-size: 15px;"> TEMOIGNAGES </a>
                </li>
                <li class="nav-item">
                    <a class='nav-link' href="mainpage" style="font-size: 15px;"> FAIRE UN DON</a>
                </li>
                <li class="nav-item">
                    <a class='nav-link' href="#contact" style="font-size: 15px;"> CONTACTS </a>
                </li>
                <li class="nav-item">
                    <a class='nav-link' href="#contact" style="font-size: 15px;"> CONNEXION </a>
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
        <div class="contain_sidebar_temoignage" style="display: flex; flex-direction: row;">
            <div class="sidebar" style=" height: 100%; width: 40%;">
            <nav class="navbar bg-light" style="height: 100%;">
                    <ul class="navbar-nav style" style="justify-content: center; width: 100%;" >
                        <li class="nav-item">
                            <a class='nav-link'href="sidebar_profil"> <span style="font-size: 20px; margin-right: 5%;"><i class="fas fa-user"></i></span>PROFIL </a>
                        </li>
                        <li class="nav-item" style="margin: 2% 0px;">
                            <span style="font-size: 20px; margin-right: 5%;"><i class="fas fa-newspaper"></i></span>TEMOIGNAGES
                            <ul style="list-style: none; margin: 5% 0px;">
                                <li style="margin: 5% 0px;">
                                    <span style="font-size: 20px; margin-right: 5%;"><i class="fas fa-scroll"></i></span><a href="sidebar_temoignages_real">VALIDER UN TEMOIGNAGE</a>
                                </li>
                                <li style="margin: 5% 0px;">
                                    <span style="font-size: 20px; margin-right: 5%;"><i class="fas fa-scroll"></i></span><a href="sidebar_temoignages_real_all">TOUS TEMOIGNAGES </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item" style="margin: 2% 0px;">
                            <span style="font-size: 20px; margin-right: 5%;"><i class="fas fa-book-reader"></i></span>ARTICLES
                            <ul style="list-style: none; margin: 5% 0px;">
                                <li style="margin: 5% 0px;"    >
                                    <span style="font-size: 20px; margin-right: 5%;"><i class="fas fa-book-open"></i></span> <a href="sidebar_add_article">AJOUTER UN ARTICLE</a>
                                </li>
                                <li style="margin: 5% 0px;">
                                    <span style="font-size: 20px; margin-right: 5%;"><i class="fas fa-book"></i></span><a href="sidebar_article">TOUS LES ARTICLES</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item" style="margin: 2% 0px;">
                            <span style="font-size: 20px; margin-right: 5%;"><i class="fas fa-users"></i></span>PARTENAIRES
                            <ul style="list-style: none; margin: 5% 0px;">
                                <li style="margin: 5% 0px;">
                                    <span style="font-size: 20px; margin-right: 5%;"><i class="fas fa-user-plus"></i></span><a href="sidebar_temoignage">AJOUTER UN PARTENAIRE</a>
                                </li>
                                <li style="margin: 5% 0px;">
                                    <span style="font-size: 20px; margin-right: 5%;"><i class="fas fa-users"></i></span><a href="sidebar_temoignage_all">TOUS LES PARTENAIRES</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="sidebar_article_messagerie"> <span style="font-size: 20px; margin-right: 5%;"><i class="fas fa-envelope"></i></span>MESSAGERIE</a>
                        </li>

                    </ul>
                </nav>
            </div>
            <div class="contain" style="width: 100%;">
                <div class="information_and_button" style="margin:5% 0px">
                    <div class="contain_partner_info" style="display: grid; grid-template-columns: 0.4fr 0.8fr; gap:3%">
                        <img src="Wallpaper/unnamed.jpg" alt="logo_entreprise" style="width: 100%;">
                        <div class="real_information">
                            <div class="nom_prenom" style="display: flex;">
                                <span style="font-size: 20px; margin-right: 5%;"><i class="fas fa-user"></i></span>
                                <p class="nom_directeur" style="margin-right: 2%;">ABALLO</p>
                                <p class="prenom_directeur">Yannick Andy</p>
                            </div>
                            <div class="partner_entreprise">
                                <p class="nom_de_entreprise"><span style="font-size: 20px; margin-right: 5%;"><i class="fas fa-hotel"></i></span>REVOLUTION</p>
                            </div>
                            <div class="contact">
                                <p class="adresse_mail"> <span style="font-size: 20px; margin-right: 5%;"><i class="far fa-envelope"></i></span>aballoyannick@gmail.com</p>
                                <p class="numero"> <span style="font-size: 20px; margin-right: 5%;"><i class="fas fa-phone-square-alt"></i></span>95 80 60 50 / 91 92 01 68</p>
                            </div>
                            <div class="description">
                                <p class="description_de_entreprise">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis iure possimus odit sapiente repellat nihil, reiciendis alias illo fugiat, consequuntur quisquam officiis. Odio inventore quidem illo reprehenderit voluptatibus minima mollitia!
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis iure possimus odit sapiente repellat nihil, reiciendis alias illo fugiat, consequuntur quisquam officiis. Odio inventore quidem illo reprehenderit voluptatibus minima mollitia!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="dismiss_accept_button" style=" display: flex; gap: 5%; margin:2% 20%;">
                        <button type="button" class="btn btn-success">ACCEPTER PARTENARIAT</button>
                        <button type="button" class="btn btn-warning">REFUSER PARTENARIAT</button>
                    </div>
                </div>

                <div class="information_and_button" style="margin:5% 0px">
                    <div class="contain_partner_info" style="display: grid; grid-template-columns: 0.4fr 0.8fr; gap:3%">
                        <img src="Wallpaper/unnamed.jpg" alt="logo_entreprise" style="width: 100%;">
                        <div class="real_information">
                            <div class="nom_prenom" style="display: flex;">
                                <span style="font-size: 20px; margin-right: 5%;"><i class="fas fa-user"></i></span>
                                <p class="nom_directeur" style="margin-right: 2%;">ABALLO</p>
                                <p class="prenom_directeur">Yannick Andy</p>
                            </div>
                            <div class="partner_entreprise">
                                <p class="nom_de_entreprise"><span style="font-size: 20px; margin-right: 5%;"><i class="fas fa-hotel"></i></span>REVOLUTION</p>
                            </div>
                            <div class="contact">
                                <p class="adresse_mail"> <span style="font-size: 20px; margin-right: 5%;"><i class="far fa-envelope"></i></span>aballoyannick@gmail.com</p>
                                <p class="numero"> <span style="font-size: 20px; margin-right: 5%;"><i class="fas fa-phone-square-alt"></i></span>95 80 60 50 / 91 92 01 68</p>
                            </div>
                            <div class="description">
                                <p class="description_de_entreprise">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis iure possimus odit sapiente repellat nihil, reiciendis alias illo fugiat, consequuntur quisquam officiis. Odio inventore quidem illo reprehenderit voluptatibus minima mollitia!
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis iure possimus odit sapiente repellat nihil, reiciendis alias illo fugiat, consequuntur quisquam officiis. Odio inventore quidem illo reprehenderit voluptatibus minima mollitia!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="dismiss_accept_button" style=" display: flex; gap: 5%; margin:2% 20%;">
                        <button type="button" class="btn btn-success">ACCEPTER PARTENARIAT</button>
                        <button type="button" class="btn btn-warning">REFUSER PARTENARIAT</button>
                    </div>
                </div>

                <div class="information_and_button" style="margin:5% 0px">
                    <div class="contain_partner_info" style="display: grid; grid-template-columns: 0.4fr 0.8fr; gap:3%">
                        <img src="Wallpaper/unnamed.jpg" alt="logo_entreprise" style="width: 100%;">
                        <div class="real_information">
                            <div class="nom_prenom" style="display: flex;">
                                <span style="font-size: 20px; margin-right: 5%;"><i class="fas fa-user"></i></span>
                                <p class="nom_directeur" style="margin-right: 2%;">ABALLO</p>
                                <p class="prenom_directeur">Yannick Andy</p>
                            </div>
                            <div class="partner_entreprise">
                                <p class="nom_de_entreprise"><span style="font-size: 20px; margin-right: 5%;"><i class="fas fa-hotel"></i></span>REVOLUTION</p>
                            </div>
                            <div class="contact">
                                <p class="adresse_mail"> <span style="font-size: 20px; margin-right: 5%;"><i class="far fa-envelope"></i></span>aballoyannick@gmail.com</p>
                                <p class="numero"> <span style="font-size: 20px; margin-right: 5%;"><i class="fas fa-phone-square-alt"></i></span>95 80 60 50 / 91 92 01 68</p>
                            </div>
                            <div class="description">
                                <p class="description_de_entreprise">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis iure possimus odit sapiente repellat nihil, reiciendis alias illo fugiat, consequuntur quisquam officiis. Odio inventore quidem illo reprehenderit voluptatibus minima mollitia!
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis iure possimus odit sapiente repellat nihil, reiciendis alias illo fugiat, consequuntur quisquam officiis. Odio inventore quidem illo reprehenderit voluptatibus minima mollitia!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="dismiss_accept_button" style=" display: flex; gap: 5%; margin:2% 20%;">
                        <button type="button" class="btn btn-success">ACCEPTER PARTENARIAT</button>
                        <button type="button" class="btn btn-warning">REFUSER PARTENARIAT</button>
                    </div>
                </div>

                <div class="information_and_button" style="margin:5% 0px">
                    <div class="contain_partner_info" style="display: grid; grid-template-columns: 0.4fr 0.8fr; gap:3%">
                        <img src="Wallpaper/unnamed.jpg" alt="logo_entreprise" style="width: 100%;">
                        <div class="real_information">
                            <div class="nom_prenom" style="display: flex;">
                                <span style="font-size: 20px; margin-right: 5%;"><i class="fas fa-user"></i></span>
                                <p class="nom_directeur" style="margin-right: 2%;">ABALLO</p>
                                <p class="prenom_directeur">Yannick Andy</p>
                            </div>
                            <div class="partner_entreprise">
                                <p class="nom_de_entreprise"><span style="font-size: 20px; margin-right: 5%;"><i class="fas fa-hotel"></i></span>REVOLUTION</p>
                            </div>
                            <div class="contact">
                                <p class="adresse_mail"> <span style="font-size: 20px; margin-right: 5%;"><i class="far fa-envelope"></i></span>aballoyannick@gmail.com</p>
                                <p class="numero"> <span style="font-size: 20px; margin-right: 5%;"><i class="fas fa-phone-square-alt"></i></span>95 80 60 50 / 91 92 01 68</p>
                            </div>
                            <div class="description">
                                <p class="description_de_entreprise">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis iure possimus odit sapiente repellat nihil, reiciendis alias illo fugiat, consequuntur quisquam officiis. Odio inventore quidem illo reprehenderit voluptatibus minima mollitia!
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis iure possimus odit sapiente repellat nihil, reiciendis alias illo fugiat, consequuntur quisquam officiis. Odio inventore quidem illo reprehenderit voluptatibus minima mollitia!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="dismiss_accept_button" style=" display: flex; gap: 5%; margin:2% 20%;">
                        <button type="button" class="btn btn-success">ACCEPTER PARTENARIAT</button>
                        <button type="button" class="btn btn-warning">REFUSER PARTENARIAT</button>
                    </div>
                </div>
                
            </div>
        </div>
        <footer style="background-color: gray; height:230px">
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