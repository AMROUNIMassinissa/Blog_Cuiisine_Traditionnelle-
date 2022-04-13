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
    <script src="js/contact.js"></script>

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
                        Anarmis <strong>Tanawilt Tansayt</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-8">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d5253.281749575136!2d2.381323999999998!3d48.8269132!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sfr!4v1649683613012!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-md-4">
                    <p> uṭṭun n tilifun: <strong>0123456789</strong></p>
                    <p>Tansa taliktṛunant: <a href="issem@gmail.com">issem@gmail.com</a></p>
                    <p>Tansa: <strong>123 rue xxxx <br>qwerty azerty 12345</strong></p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        Anarmis <Strong>Tferkit</Strong>
                    </h2>
                    <hr>
                    <div id="add_err"></div>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi molestiae porro ratione delectus hic ad? Cupiditate, vel dolorem, corrupti, in repellendus error commodi quisquam ut eos incidunt nostrum neque voluptatibus? Ipsam, debitis. Accusantium corporis quos, atque expedita incidunt distinctio similique.</p>
                    <form action="" role="form">
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label for="">Isem</label>
                                <input type="text" class="form-control" placeholder="Name" id="fname" name="fname" maxlength="25">
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="">Tansa taliktṛunant</label>
                                <input type="email" class="form-control" placeholder="Email" id="email" name="email" maxlength="">
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-lg-12">
                                <label for="">Izen </label>
                                <textarea name="" id="" rows="6" class="form-control" id="message" name="message" maxlength="100"></textarea>
                            </div>
                            <div class="form-group col-lg-12">
                                <input type="hidden" name="save" value="contact">
                                <button type="submit" class="btn btn-default" id="contact" name="contact">Azen</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>