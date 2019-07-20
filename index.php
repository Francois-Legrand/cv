<!DOCTYPE html>
<html lang="fr">
    <head>
    <script src="jauge/raphael.js"></script>
    <script src="jauge/justgage.js"></script>
        <title>WEB CV LEGRAND FRANCOIS</title>
        <meta charset="UTF-8">
        <meta name="description" content="Développeur web Legrand François">
        <meta name="viewport"content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Coda|Staatliches|Teko&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="all__site">
            <?php
                include("header-menu.php");
            ?>
            <!--partie 1 de droite-->
        <main>
            <section class="section section--third">
                <article class="all all--second all__border--second all__width">
                    <h1 class="title title--second">Infos personnel</h1>
                    <div class="all__flex--first">
                        <h2 class="title title--first">Nom</h2>
                        <p class="all__para all__para--second">Legrand François</p>
                    </div>
                    <div class="all__flex--first">
                        <h2 class="title title--first">Date de naissance</h2>
                        <p class="all__para all__para--second"><time datetime="1982-01-22">22/01/1982</time></p>
                    </div>
                        
                    <div class="all__flex--first all__flex--no-border">
                        <h2 class="title title--first">Télephone</h2>
                        <p class="all__para all__para--second">07-81-11-31-67</p>
                    </div>
                    <div class="reseaux">
                        <a href="https://www.facebook.com/francois.legrand.1840">
                            <span id="facebook"></span>
                        </a>
                        <a href="https://www.linkedin.com/in/fran%C3%A7ois-legrand-a768a185">
                            <span id="linkedin"></span>
                        </a>
                        <a href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fsunfox.org%2Fliens-de-partage">
                            <span id="partage"></span>
                        </a>
                        <a href="https://twitter.com/Nikdoule">
                            <span id="twitter"></span>
                        </a>
                    </div>
                </article>
             <!--partie 1 de gauche-->  
                <article class="all all--first all__border--first">
                    <h1 class="title">Les Bonnes Pratiques!</h1>
                    <div class="all__flex">
                        <div class="all__box">
                            <div class="all__title">
                                <h2 class="title">Mobile first</h2>
                                <i class="title__ico fas fa-mobile-alt"></i>
                            </div>
                            <p class="all__para">
                                Tout le monde apprécie lorsque c'est bien rangé, c'est d'autant plus vrai le jour où nous cherchons la chose dont on à tant besoin. Avec un code bien construit le dev ne cherche plus, il suit simplement les consignes et trouve toujours son bonheur.
                            </p>
                        </div>
                        <div class="all__box">
                            <div class="all__title">
                                <h2 class="title">BEM</h2>
                                <i class="title__ico fas fa-certificate"></i>
                            </div>
                            <p class="all__para">
                                Tout le monde apprécie lorsque c'est bien rangé, c'est d'autant plus vrai le jour où nous cherchons la chose dont on à tant besoin. Avec un code bien construit le dev ne cherche plus, il suit simplement les consignes et trouve toujours son bonheur. 
                            </p>
                        </div>
                        <div class="all__box">
                            <div class="all__title">
                                <h2 class="title">Sémantique</h2>
                                <i class="title__ico fab fa-html5"></i>
                            </div>    
                            <p class="all__para">
                                Cela vous est dêja arrivé. vous naviguez sur un site à l'image de son créateur, malheurement pour vous il est resté coincer dans les années 80, vous avez un peu la nauzé car voyager dans une machine à voyager dans le temps c'est éprouvant...
                            </p>
                        </div>
                    </div>
                </article>
            </section>  
            <!--partie 2 de gauche-->
            <section class="section section--fourth">
                <article class="all all__border--third">
                    <h1 class="title title--second">Deux Derniers Emplois</h1>
                    <div class="all__flex all__flex--fourth">
                        <div class="all__box all__box--first">
                            <h2 class="title title--second">Assistant de Batman</h2>
                            <h3 class="title title--first title--second">2018-2019</h3>
                            <p class="all__para">Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression</p>
                        </div>
                        <div class="all__box all__box--first">
                            <h2 class="title title--second">Assistant de Batman</h2>
                            <h3 class="title title--first title--second">2018-2019</h3>
                            <p class="all__para">Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression</p>
                        </div>
                    </div>
                </article>
           
            <!--partie 2 de droite-->
           
                <article class="all all--fifth all__border--fifth">
                    <h1 class="title">Compétences</h1>
                        <div class="all__flex--second">
                            <div class="all__box--second">
                                <img class="all__img" src="img/HTML.png" alt="">
                            </div>
                            <div class="all__box--second">
                                <img class="all__img" src="img/CSS.png" alt="">
                            </div>
                            <div class="all__box--second">
                                <img class="all__img" src="img/JS.png" alt="">
                            </div>
                        </div>
                </article> 
            </section>   
            <section class="section">
                <article class="all all--second all--sixth all__border--first">
                    <div class="all__loisir">
                        <h3 class="title">Des loisirs pour décomprésser</h3>
                        <p class="all__para">
                        Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression 
                        </p>
                    </div>
                        <img class="all__img--first" src="img/course-a-pied.jpg" alt="une personne qui cours">
                </article>

                <article class="all all--second all--sixth all--seventh all__border--third">
                    <div class="all__loisir">
                        <h3 class="title">Des loisirs pour décomprésser</h3>
                        <p class="all__para">
                        Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression 
                        </p>
                    </div>    
                        <img class="all__img--first" src="img/gastonomie.jpg" alt="une personne qui cours">
                </article>

                <article class="all all--fifth all--second all--sixth all__border--second">
                    <div class="all__loisir">
                        <h3 class="title">Des loisirs pour décomprésser</h3>
                        <p class="all__para ">
                        Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression 
                        </p>
                    </div>
                        <img class="all__img--first" src="img/netflix.jpg" alt="une personne qui cours">
                </article>
            </section>
        </main> 
    </div>    
    </body> 
    <script src="https://kit.fontawesome.com/536fe6e8c5.js"></script>
</html>    