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
    <div class="body_content">
        <div class="forImage" >
            <img class="MySlides" src="Wallpaper/1amoureux.jpg" alt="mainImage" style="width: 100%; height: 600px;">
            <img class="MySlides" src="Wallpaper/2amoureux.jpg" alt="mainImage" style="width: 100%; height: 600px;">
            <img class="MySlides" src="Wallpaper/unnamed.jpg" alt="mainImage" style="width: 100%; height: 600px;">
            <div class="contain_slide_button" style=" width: 5%; margin: 0px 30%;"> 
                <button class="w3-button w3-display-left" onclick="plusDivs(-1)" style="color: wheat;">&#10094;</button>
                <button class="w3-button w3-display-right" onclick="plusDivs(+1)" style="color: wheat;">&#10095;</button>
            </div>
        </div>
        
        <div class="recentArticle" style="display: flex; flex-direction:column" >
        <p style="  color:wheat; font-size:20px; padding-top:5px; margin: 4% 40%; text-align: center; height: 40px; background-color: orangered;border-radius: 5px; ">RECENT ARTICLE</p>
                    <div class="rencentArticleLink" style="margin: 10px 20%; box-shadow: 6px 6px 6px wheat;" >    
                    <a href="#">
                            <img src="Wallpaper/1amoureux.jpg" alt="article recent" style="height: 400px; width: 100%;">
                        </a>
                            <p style=" padding-left:20px; margin-top: 20px;">EV Reynold TOKANOU</p>
                            <p style="padding-left:20px;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo maxime eveniet voluptas recusandae.</p>
                            <br>
                    </div>
        </div>
        <div class="nosArticles" id="articles">
            <p style="  color:wheat; font-size:20px; padding-top:5px; margin: 4% 40%; text-align: center; height: 40px; background-color: orangered;border-radius: 5px; ">NOS ARTICLES</p>
                <div class="contain_all_articles" style="display: flex; flex-wrap: wrap; gap: 10px;justify-content: space-around; margin: 0px 2%;">
                    <div style="width: 400px; box-shadow: 6px 6px 3px wheat;">
                        <a href="article">
                            <img src="Wallpaper/1amoureux.jpg" alt="les articles présents" style="height: 250px; width: 400px;">
                        </a>
                        <p style="margin-top: 20px;">EV Reynold TOKANOU</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae voluptatibus, accusamus ut in, maxime fugiat veniam eos reiciendis facere, cupiditate sapiente quidem officia nemo? Illum tenetur qui placeat inventore iusto?</p>
                    </div>

                    <div style="width: 400px; box-shadow: 6px 6px 3px wheat;">
                        <a href="article">
                            <img src="Wallpaper/1amoureux.jpg" alt="les articles présents" style="height: 250px; width: 400px;">
                        </a>
                        <p style="margin-top: 20px;">EV Reynold TOKANOU</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae voluptatibus, accusamus ut in, maxime fugiat veniam eos reiciendis facere, cupiditate sapiente quidem officia nemo? Illum tenetur qui placeat inventore iusto?</p>
                    </div>

                    <div style="width: 400px; box-shadow: 6px 6px 3px wheat;">
                        <a href="article">
                            <img src="Wallpaper/1amoureux.jpg" alt="les articles présents" style="height: 250px; width: 400px;">
                        </a>
                        <p style="margin-top: 20px;">EV Reynold TOKANOU</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae voluptatibus, accusamus ut in, maxime fugiat veniam eos reiciendis facere, cupiditate sapiente quidem officia nemo? Illum tenetur qui placeat inventore iusto?</p>
                    </div>

                    <div style="width: 400px; box-shadow: 6px 6px 3px wheat;">
                        <a href="article">
                            <img src="Wallpaper/1amoureux.jpg" alt="les articles présents" style="height: 250px; width: 400px;">
                        </a>
                        <p style="margin-top: 20px;">EV Reynold TOKANOU</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae voluptatibus, accusamus ut in, maxime fugiat veniam eos reiciendis facere, cupiditate sapiente quidem officia nemo? Illum tenetur qui placeat inventore iusto?</p>
                    </div>

                    <div style="width: 400px; box-shadow: 6px 6px 3px wheat;">
                        <a href="article">
                            <img src="Wallpaper/1amoureux.jpg" alt="les articles présents" style="height: 250px; width: 400px;">
                        </a>
                        <p style="margin-top: 20px;">EV Reynold TOKANOU</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae voluptatibus, accusamus ut in, maxime fugiat veniam eos reiciendis facere, cupiditate sapiente quidem officia nemo? Illum tenetur qui placeat inventore iusto?</p>
                    </div>

                    <div style="width: 400px; box-shadow: 6px 6px 3px wheat;">
                        <a href="article">
                            <img src="Wallpaper/1amoureux.jpg" alt="les articles présents" style="height: 250px; width: 400px;">
                        </a>
                        <p style="margin-top: 20px;">EV Reynold TOKANOU</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae voluptatibus, accusamus ut in, maxime fugiat veniam eos reiciendis facere, cupiditate sapiente quidem officia nemo? Illum tenetur qui placeat inventore iusto?</p>
                    </div>
                </div>
            
            <br>
            <ul class="pagination justify-content-center">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
              </ul> 
              <br>
        </div>
        <div class="meditation">
            <p style=" color:wheat; font-size:20px; padding-top:5px; margin: 2% 40%; text-align: center; height: 40px; background-color: orangered;border-radius: 5px; ">MEDITATION DU JOUR</p>
             <br>
            <div class="verset" style="padding: 20px 4%; background-color: black; margin: 0px 3%; ">
                <p style="text-align: center; color:white; ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, quaerat eaque consequatur dolore ad recusandae fugit facere ipsa quod dolor asperiores repellat ut mollitia nesciunt explicabo, molestias tenetur facilis sapiente?</p>
                <p style="text-align:right; color:white;">Romain 3v5</p>
            </div>
            <br>
             
        </div>
        <div class="temoignage" id="temoignages">
            <p style=" color:wheat; font-size:20px; padding-top:5px; margin: 2% 40%; text-align: center; background-color: orangered;border-radius: 5px; height: 40px; ">TEMOIGNAGES</p>
            <br>
            <div class="all_temoignages" style="display: flex; gap: 10px; flex-wrap: wrap; justify-content: space-around; text-align: left;">
                <div class="contain_temoignage" style="width: 400px;">
                    <p style="text-align: center;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, quaerat eaque consequatur dolore ad recusandae fugit facere ipsa quod dolor asperiores repellat ut mollitia nesciunt explicabo, molestias tenetur facilis sapiente?
                                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Excepturi culpa impedit cupiditate facere fugit ea optio laudantium nostrum ipsum consectetur odio praesentium ducimus aliquid dolor quaerat, eos fuga libero iusto?</p>
                    <p style="text-align:right;">ABALLO Yannick</p>
                </div>

                <div class="contain_temoignage" style="width: 400px;">
                    <p style="text-align: center;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, quaerat eaque consequatur dolore ad recusandae fugit facere ipsa quod dolor asperiores repellat ut mollitia nesciunt explicabo, molestias tenetur facilis sapiente?
                                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Excepturi culpa impedit cupiditate facere fugit ea optio laudantium nostrum ipsum consectetur odio praesentium ducimus aliquid dolor quaerat, eos fuga libero iusto?</p>
                    <p style="text-align:right;">ABALLO Yannick</p>
                </div>

                <div class="contain_temoignage" style="width: 400px;">
                    <p style="text-align: center;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, quaerat eaque consequatur dolore ad recusandae fugit facere ipsa quod dolor asperiores repellat ut mollitia nesciunt explicabo, molestias tenetur facilis sapiente?
                                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Excepturi culpa impedit cupiditate facere fugit ea optio laudantium nostrum ipsum consectetur odio praesentium ducimus aliquid dolor quaerat, eos fuga libero iusto?</p>
                    <p style="text-align:right;">ABALLO Yannick</p>
                </div>
            </div>
            
            <br>
            <ul class="pagination justify-content-center">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
              </ul> 
            <br>
        </div>

        <div class="partenaires">
            <p id="partenaires" style=" color:wheat; font-size:20px; padding-top:5px; margin: 2% 40%; text-align: center; background-color: orangered;border-radius: 5px; height: 40px; ">NOS PARTENAIRES</p>
            <br><br>
            <div class="contain_partenaires" style="display: grid; grid-template-columns: 0.2fr 0.3fr 0.3fr 0.3fr 0.3fr 0.2fr; margin:20px 0px">
                <div class="before"></div>    
                <div class="contain-details">
                <a href="#" id="mybutton"><img src="{{asset('Wallpaper/unnamed.jpg')}}" alt="partenaire" style="width: 80%;"></a> 
                </div>
                <div class="contain-details">
                <a href="#" id="mybutton1"><img src="{{asset('Wallpaper/unnamed.jpg')}}" alt="partenaire" style="width: 80%;"></a> 
                </div>
                <div class="contain-details">
                <a href="#" id="mybutton2"><img src="{{asset('Wallpaper/unnamed.jpg')}}" alt="partenaire" style="width: 80%;"></a> 
                </div>
                <div class="contain-details">
                <a href="#" id="mybutton3"><img src="{{asset('Wallpaper/unnamed.jpg')}}" alt="partenaire" style="width: 80%;"></a> 
                </div>
                <div class="after">
                <button class="w3-button w3-display-right" style="color: wheat;">&#10095;</button>
                </div>
            </div>
            <div class="devenir_partenaire">
                <a href="#" id="partenaire_popup"> <button type="button" class="btn btn-dark" style="padding-top:5px; margin: 2% 40%; text-align: center">DEVENIR UN PARTENAIRE</button></a>
            </div>
            <br><br>
        </div>
        <!-- popup pour devenir un partenaire -->

        <div class="third_partenaire" style="width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.521); position: absolute; opacity: 1; top: 0px; justify-content: center; align-items: center; display: none;">
        <div class="content_partenaire" style="background-color: white; width: 500px; height: 510px; position: relative; border-radius: 10px; opacity: 2;">
            <div class="close_partenaire" style="position: absolute; right: 10px; transform: rotate(45deg); cursor: pointer; font-size: 40px;">+</div>
            <div class="conteneur_partenaire">
                <p style="text-align: center; margin:5% 0px; font-size:30px; font-weight:bold">DEVENEZ UN PARTENAIRE</p>
                <form action="" method="post" style="display: flex; flex-direction:column;">
                    <input type="text" name="name_partenaire" id="nom_partenaire" placeholder="VOTRE NOM" style="border-radius: 10px; width:80%; text-align:center; height:40px; margin:3% 5%">
                    <input type="text" name="prename_partenaire" id="prenom_partenaire" placeholder="VOTRE PRENOM" style="border-radius: 10px; width:80%; text-align:center; height:40px; margin:3% 5%">
                    <input type="text" name="entreprise_partenaire" id="societe_partenaire" placeholder="NOM DE L'ENTREPRISE" style="border-radius: 10px; width:80%; text-align:center; height:40px; margin:3% 5%">
                    <input type="tel" name="contact__partenaire" id="numero_partenaire" placeholder="VOTRE CONTACT" style="border-radius: 10px; width:80%; text-align:center; height:40px; margin:3% 5%">
                    <input type="email" name="mail_partenaire" id="adresse_partenaire" placeholder="exemple@gmail.com" style="border-radius: 10px; width:80%; text-align:center; height:40px; margin:3% 5%">
                    <input type="submit" value="ENVOYER" style="width: 30%; background-color:orange; right:10%; border-radius: 10px; margin:0px 30%">
                </form>
            </div>
        </div>
    </div>

        <!-- FIN popup pour devenir un partenaire -->
        <br>
        <div class="containConntact_facebook" style="display: grid; grid-template-columns: 1fr 1fr; gap:60px; margin:0px 25px">
            <div class=" contactez_us" id="contact">
                <p style=" color:wheat; font-size:20px; padding-top:5px;  text-align: center; background-color: orangered;border-radius: 5px; padding: 5px; ">CONTACTEZ NOUS</p>
                <br>
                <div class="formulaire" style="background-image: url(Wallpaper/1629452730606.jpg);">
                <br>
                    <form action="" method="post" style="margin: 10px 7%;">
                        <div style="display: flex; gap: 2%;">
                            <div class="nom" style="display: flex; flex-direction: column; width: 100%;">
                                <label for="nom_prenom" style="color: wheat;">Nom et Prénom(s)</label>
                                <input type="text" name="nom_prenom" style="width: 100%;">
                            </div>
                            <div class="email" style="display: flex; flex-direction: column; width: 100%;">
                                <label for="mail" style="color: wheat;">Email</label>
                                <input type="email" name="mail" id="" style="width: 100%;">
                            </div>
                        </div>
                        <textarea name="" id="" style="width: 100%; height: 200px; margin: 5px  0px;"></textarea>
                        <button type="submit" class="btn btn-success" style="float: right; border-radius: 15px;">Envoyer</button>
                    </form>
                    <br><br>
                </div>
            </div>
            <div class="facebook">
                <p style=" color:wheat; font-size:20px; padding-top:5px;  text-align: center; background-color: blue;border-radius: 5px; padding: 5px; width:500px ">NOTRE PAGE FACEBOOK</p>
                <br>
                <!-- <img src="{{asset('Wallpaper/face.jpg')}}" alt="contain_API" style="width: 100%;"> -->
                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fweb.facebook.com%2Fjeunesamoureuxdechrist&tabs=timeline&width=500&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="500" height="400" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="third" style="width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.521); position: absolute; opacity: 1; top: 0px; justify-content: center; align-items: center; display: none;">
        <div class="content" style="background-color: white; width: 60%; height: 95%; position: relative; border-radius: 10px; opacity: 2;">
            <div class="close" style="position: absolute; right: 10px; transform: rotate(45deg); cursor: pointer; font-size: 40px;">+</div>
            <div class="conteneur" style="width: 100%; height:80%; ">
                <div class="logo_and_text">
                    <img src="{{asset('Wallpaper/unnamed.jpg')}}" alt="partenaire" style="width:100%; height:40%; margin: 0% 0%">
                    <p id="paragraphe_popup" style="margin:5px 7%">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis iure possimus odit sapiente repellat nihil, reiciendis alias illo fugiat, consequuntur quisquam officiis. Odio inventore quidem illo reprehenderit voluptatibus minima mollitia!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis iure possimus odit sapiente repellat nihil, reiciendis alias illo fugiat, consequuntur quisquam officiis. Odio inventore quidem illo reprehenderit voluptatibus minima mollitia!
                    </p>
                    <p style="text-align: center;"><a href="www.partenaires.com">www.partenaires.com</a></p>
                </div>
            </div>
        </div>
    </div>
    
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
    <script>
        document.getElementById("mybutton").addEventListener("click",function(){
            document.querySelector(".third").style.display = "flex";
            });
            document.getElementById("partenaire_popup").addEventListener("click",function(){
            document.querySelector(".third_partenaire").style.display = "flex";
            });

        document.getElementById("mybutton1").addEventListener("click",function(){
            document.querySelector(".third").style.display = "flex";
            });
            document.getElementById("partenaire_popup").addEventListener("click",function(){
            document.querySelector(".third_partenaire").style.display = "flex";
            });

        document.getElementById("mybutton2").addEventListener("click",function(){
            document.querySelector(".third").style.display = "flex";
            });
            document.getElementById("partenaire_popup").addEventListener("click",function(){
            document.querySelector(".third_partenaire").style.display = "flex";
            });

        document.getElementById("mybutton3").addEventListener("click",function(){
            document.querySelector(".third").style.display = "flex";
            });
            document.getElementById("partenaire_popup").addEventListener("click",function(){
            document.querySelector(".third_partenaire").style.display = "flex";
            });

        $(function(){
            $('.carousel').carousel();
        }); 

        var slideIndex = 0;
        carrousel();

        function carrousel() {
            var ii;
            var xx = document.getElementsByClassName("MySlides");
            for (ii = 0; ii < xx.length; ii++) {
                xx[ii].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > xx.length) {slideIndex = 1}
            xx[slideIndex-1].style.display = "block";
            setTimeout(carrousel, 5000); // Change image every 5 seconds
        };
    </script> 
    
</body>
</html>