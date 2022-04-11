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
    <script src="js/jquery.js"></script>
    <script src="js/register.js"></script>
</head>

<body>

    <div class="brand">Tanawilt Tansayt</div>
    <div class="address-bar">Paris | France | 0123456789</div>
    <?php require_once 'nav.html' ?>
    <div class="container">
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        Ajerrd <strong>Tferkit </strong>
                    </h2>
                    <hr>

                    <div id="add_err"></div>

                    <form role="from">
                        <div class="row">
                            <div class="form-group col-lg-4 ">
                                <label for="fname">Isem</label>
                                <input type="text" class="form-control" placeholder="First Name" name="fname" id="fname" maxlength="25">
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="lname">Nnekwa</label>
                                <input type="text" class="form-control" placeholder="Last Name" name="lname" id="lname" maxlength="25">
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="email">Tansa taliktṛunant &#x1F4E7; </label>
                                <input type="email" class="form-control" placeholder="Email" name="email" id="email" maxlength="25">
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="password">Tasaruṭ &#128272;</label>
                                <input type="password" class="form-control" placeholder="Password" name="password" id="password" maxlength="10">
                            </div>
                            <div class="form-group col-lg-12">
                                <button type="submit" class="btn btn-primary" name="submit" id="submit">Kles</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- footer -->
    <?php require_once 'footer.html' ?>


</body>

</html>