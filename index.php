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
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="all__site">
            <?php
                include("header-menu.php");
            ?>
            <!--partie 1 de droite-->
            <main>
                <article class="section section--third">
                    <section class="all all--second all__border--second all__width-special">
                        <h1 class="title">Infos personnel</h1>
                        <div class="all__flex--first">
                            <h2 class="title title--first">Adresse</h2>
                            <p class="all__para all__para--second">27 rue clovis Liévin</p>
                        </div>
                        <div class="all__flex--first">
                            <h2 class="title title--first">Date de naissance</h2>
                            <p class="all__para all__para--second"><time datetime="1982-01-22">22/01/1982</time></p>
                        </div>
                            
                        <div class="all__flex--first all__flex--no-border">
                            <h2 class="title title--first">Télephone</h2>
                            <p class="all__para all__para--second">07-81-11-31-67</p>
                        </div>
                        <div class="all__flex--first all__flex--no-border">
                            <div class="reseaux">
                                <a href="https://www.facebook.com/francois.legrand.1840">
                                    <span id="facebook"></span>
                                </a>
                                <a href="https://www.linkedin.com/in/fran%C3%A7ois-legrand-a768a185">
                                    <span id="linkedin"></span>
                                </a>
                                <a href="mailto:francois.legrand62800@gmail.com">
                                    <span id="mail"></span>
                                </a>
                                <a href="https://twitter.com/Nikdoule">
                                    <span id="twitter"></span>
                                </a>
                            </div>
                        </div>
                        
                    </section>
                <!--partie 1 de gauche-->  
                    <section class="all all--first all__border--first">
                        <h1 class="title">Un peu de moi!</h1>
                        <p class="all__para all__para--resum">
                        Bonjour ! Je me prénomme François, j'étais apprenant au sein d'une formation de développement web courant 2019. Je suis une personne curieuse et sympathique passionné par le développement web. Quotidiennement soucieux de monter en compétence, mon objectif est de devenir developpeur front end React en apportant une valeur ajoutée à l'entreprise qui me fera confiance.
                            </p>
                    </section>
                </article>  
                <!--partie 2 de gauche-->
                <article class="section section--fourth">
                    <section class="all all__border--third">
                        <h1 class="title">Deux Derniers Emplois</h1>
                        <div class="all__flex all__flex--fourth">
                            <div class="all__box all__box--first">
                                <h2 class="title title--second">Dépanneur hardware</h2>
                                <h3 class="title title--first title--second">2007-2013</h3>
                                <p class="all__para">Technicien de maintenance hardware pour la societé CDV informatique.</p>
                            </div>
                            <div class="all__box all__box--first">
                                <h2 class="title title--second">Magasinier pour le groupe HANNAC</h2>
                                <h3 class="title title--first title--second">2005-2007</h3>
                                <p class="all__para">Gestion matériels en pharmacie de la polyclinique de liévin.</p>
                            </div>
                        </div>
                    </section>
                <!--partie 2 de droite-->
                    <section class="all all--fifth all__border--fifth">
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
                    </section> 
                </article>   
                <article class="section">
                    <section class="all all--second all--sixth all__border--first">
                        <div class="all__loisir">
                            <h3 class="title">Des loisirs pour se maintenir en forme</h3>
                            <p class="all__para">
                            Rien de tel qu'une petite course à pièd pour décompresser,après une dure journée de travail, se dépenser c'est remettre les compteur a zéro. je peux courrir jusqu'a 50km par semaine dans les meilleurs moments. 
                            </p>
                        </div>
                            <img class="all__img--first" src="img/course-a-pied.jpg" alt="une personne qui cours">
                    </section>
                    <section class="all all--second all--sixth all--seventh all__border--third">
                        <div class="all__loisir">
                            <h3 class="title">Des séries</h3>
                            <p class="all__para">
                            Idéal pour s'endormir, rester passif devant une serie nous aides parfois bien dormir. 
                            </p>
                        </div>    
                            <img class="all__img--first" src="img/netflix.jpg" alt="une personne qui cours">
                    </section>
                    <section class="all all--fifth all--second all--sixth all__border--second">
                        <div class="all__loisir">
                            <h3 class="title">La gastronomie française</h3>
                            <p class="all__para ">
                            J'aime cuisiner et faire de bon petit plat, après avoir fait du sport j'ai besoin de recharger les batteries. je suis aussi intéressé par la patisserie, l'aspect technique de cette discipline est très intéressante. 
                            </p>
                        </div>
                            <img class="all__img--first" src="img/gastonomie.jpg" alt="une personne qui cours">
                    </section>
                </article>
            </main> 
        </div>
        <?php 
            include("script.php");
        ?>
    </body> 
</html>    