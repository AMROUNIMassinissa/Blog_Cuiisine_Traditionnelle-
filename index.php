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

    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="about.php">About</a>
                    </li>
                    <li>
                        <a href="blog.php">Blog</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
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
                    <p>Parfumée et colorée, amenez la cuisine kabyle traditionnelle à votre table ! Les plats familiaux, exotiques et épicés, sont souvent composés à base de semoule, de légumes et de poissons</p>
                    <p> Le couscous, typique de la cuisine kabyle, se décline pour tous les goûts : aubergine, poivron, poulet ou piment. Côté poisson, lessardines sont aussi à l'honneur, en croquettes ou encore au cumin. On aime aussi les plats à base de
                        fèves, en soupe comme en salade, ou encore la chorba, soupe aux haricots blanc aux accents méditerranéens. </p>
                    <p>Dans les foyers kabyles, les plats traditionnels tiennent une place prépondérante dans la cuisine familiale. Outre les valeurs nutritives incontestables de ces mets, cette tendance que les temps n'ont pas changée permet de maintenir
                        vivant un art culinaire séculaire. Cependant, des personnes, mieux informées, mieux équipées et disposant d'ingrédients autrefois rares, tentent de donner à cette cuisine traditionnelle un aspect moderne notamment sur le plan esthétique.
                        Ah ! Les bons plats de grand-mère !</p>


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
                    <p>Pour connaître l'engouement des habitants de la Kabylie pour leur cuisine traditionnelle, il n'y a qu'à se rapprocher des restaurateurs de la région qui en sont les mieux placés pour nous instruire. Idir, restaurateur à Akbou, est
                        catégorique : « Il suffit d'afficher sur son menu Couscous, Ameqfoul, Tiâasbanine, Aghrom, Tikourbabine, etc. pour voir sa clientèle monter en flèche ! Les gens en raffole des plats de chez nous».</p>

                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; Tanawilt Tansayt 2022</p>
                </div>
            </div>
        </div>
    </footer>



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