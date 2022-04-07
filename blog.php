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
    <?php require_once 'nav.php' ?>

    <div class="container">
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        takʷebbanit <strong>ablug </strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img src="img/img1.jpeg" alt="" class="img-responsive img-border img-full">
                    <h2>
                        barkoukes <br> <small>12/01/1980</small>
                    </h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque dolore hic consectetur odit aspernatur modi similique dolorem?</p>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal1"> Arnu ɣeṛ </button>

                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img src="img/img2.jpeg" alt="" class="img-responsive img-border img-full">
                    <h2>
                        Rechetta <br> <small>12/01/1980</small>
                    </h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque dolore hic consectetur odit aspernatur modi similique dolorem?</p>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2"> Arnu ɣeṛ </button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img src="img/img3.jpg" alt="" class="img-responsive img-border img-full">
                    <h2>
                        Tamtunt <br> <small>12/01/1980</small>
                    </h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque dolore hic consectetur odit aspernatur modi similique dolorem?</p>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal3"> Arnu ɣeṛ </button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <ul class="pager">
                        <li class="previous">
                            <a href="#">&larr; Amziki</a>
                        </li>
                        <li class="next">
                            <a href="#">Amynut &rarr;</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <?php require_once 'modal.php' ?>
    <?php require_once 'footer.php' ?>


    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>


</body>

</html>