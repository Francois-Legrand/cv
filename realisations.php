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
            <main>
                <section class="section second--first">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="card" style="width: 18rem;">
                                <img src="img/firstline.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">first line</h5>
                                    <p class="card-text">Firste line est un salon de coiffure de liévin.</p>
                                    <a href="https://cdv-dev.fr/firstlinefirstmobile/" class="btn btn-primary">Aller voir</a>
                                </div>
                            </div>
                        </div>
                        <!--<div class="carousel-item">
                        <div class="card" style="width: 18rem;">
                                <img src="https://place-hold.it/320x320/666" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">first line</h5>
                                    <p class="card-text">Firste line est un salon de coiffure de liévin.</p>
                                    <a href="http://cdv-dev.fr/firstlinefirstmobile/" class="btn btn-primary">Aller voir</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                        <div class="card" style="width: 18rem;">
                                <img src="https://place-hold.it/320x320/666" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">first line</h5>
                                    <p class="card-text">Firste line est un salon de coiffure de liévin.</p>
                                    <a href="http://cdv-dev.fr/firstlinefirstmobile/" class="btn btn-primary">Aller voir</a>
                                </div>
                            </div>
                        </div>-->
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    </div>
                    
                </section>
            </main>
        </div>
        <?php 
            include("script.php");
        ?>
    </body>
</html>
