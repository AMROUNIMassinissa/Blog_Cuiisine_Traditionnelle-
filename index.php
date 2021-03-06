<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tanawilt Tansayt</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

</head>

<body>

    <div class="brand">Tanawilt Tansayt</div>
    <div class="address-bar">Paris | France | 0123456789</div>

    <?php

    if (isset($_GET["logout"])) {

        if ($_GET["logout"] == "true") { ?>

            <div class="alert alert-success">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>You have been logged out of the system.</strong>
            </div>

    <?php
        }
    }
    ?>
    <?php require_once 'nav.html' ?>
    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    <div id="carousel-example-generic" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="img-responsive img-full" src="img/img1.jpeg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/img2.jpeg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/img3.jpg" alt="">
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                    <h2 class="brand-before">
                        <small>AZUL AR</small>
                    </h2>
                    <h1 class="brand-name">Tanawilt Tansayt</h1>
                    <hr class="tagline-divider">
                    <h2>
                        <small>Akked
                            <strong>Mass XXXXXXXX</strong>
                        </small>
                    </h2>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        Plats Traditionnelles
                        <strong>
                            Tanawilt Tansayt
                        </strong>
                    </h2>
                    <hr>
                    <img class="img-responsive img-border img-left " src="img/img4.jpeg" alt="">
                    <hr class="visible-xs">
                    <p>Parfum??e et color??e, amenez la cuisine kabyle traditionnelle ?? votre table ! Les plats familiaux, exotiques et ??pic??s, sont souvent compos??s ?? base de semoule, de l??gumes et de poissons</p>
                    <p> Le couscous, typique de la cuisine kabyle, se d??cline pour tous les go??ts : aubergine, poivron, poulet ou piment. C??t?? poisson, lessardines sont aussi ?? l'honneur, en croquettes ou encore au cumin. On aime aussi les plats ?? base de
                        f??ves, en soupe comme en salade, ou encore la chorba, soupe aux haricots blanc aux accents m??diterran??ens. </p>
                    <p>Dans les foyers kabyles, les plats traditionnels tiennent une place pr??pond??rante dans la cuisine familiale. Outre les valeurs nutritives incontestables de ces mets, cette tendance que les temps n'ont pas chang??e permet de maintenir
                        vivant un art culinaire s??culaire. Cependant, des personnes, mieux inform??es, mieux ??quip??es et disposant d'ingr??dients autrefois rares, tentent de donner ?? cette cuisine traditionnelle un aspect moderne notamment sur le plan esth??tique.
                        Ah ! Les bons plats de grand-m??re !</p>


                </div>
            </div>
        </div>
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">La cuisine
                        <strong>KABYLE TRADITIONNELLE</strong>
                    </h2>
                    <hr>
                    <p>Pour conna??tre l'engouement des habitants de la Kabylie pour leur cuisine traditionnelle, il n'y a qu'?? se rapprocher des restaurateurs de la r??gion qui en sont les mieux plac??s pour nous instruire. Idir, restaurateur ?? Akbou, est
                        cat??gorique : ?? Il suffit d'afficher sur son menu Couscous, Ameqfoul, Ti??asbanine, Aghrom, Tikourbabine, etc. pour voir sa client??le monter en fl??che ! Les gens en raffole des plats de chez nous??.</p>

                </div>
            </div>
        </div>
    </div>

    <?php require_once 'footer.html' ?>



    <script src="js/jquery.js"></script>

    <script src="js/bootstrap.min.js"></script>
    <!-- Script to Activate the Carousel -->
    <script>
        $('.carousel').carousel({
            interval: 4000, //changes the speed
        })
    </script>

</body>

</html>