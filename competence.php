<!DOCTYPE html>
<html lang="fr">
    <head>
    <script src="jauge/raphael.js"></script>
    <script src="jauge/justgage.js"></script>
        <title>WEB CV LEGRAND FRANCOIS</title>
        <meta charset="UTF-8">
        <meta name="description" content="Développeur web Legrand François">
        <meta name="viewport"content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Coda|Staatliches|Teko&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="all__site">
            <?php
                include("header-menu.php");
            ?>
            <section>
                <div class="all all__flex--third all__border--second">
                    <img class="all__img--second" src="img/htmlcss.png" alt="">    
                </div>
                
                <div class="all all__flex--third all__border--fifth">
                    <img class="all__img--second" src="img/jsphp.png" alt="">    
                </div>
                <div class="all all__flex--third all__border--third">
                    <img class="all__img--second" src="img/reactvue.png" alt="">    
                </div>
                <div class="all all__flex--third all__border--first">
                    <img class="all__img--second" src="img/bootstrapwordpress.png" alt="">    
                </div>
            </section>
        </div>
        <?php 
            include("script.php");
        ?>
    </body>
</html>
