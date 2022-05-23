<?php  require_once "config/config.php"; ?>
<?php  require_once "config/auth.php"; ?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Css FIles -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Swiper js -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <style>
        /* FOR DESKTOP VIEWS */
        @media only screen and (min-width: 993px) {
         #b_logo{
        float: right;
        margin-top: 60px;
        margin-right: 30px;
        width: 80px;
        height: 80px;
    }

    .div_logo{
        margin-right: 160px;
    }

    .main_login{
        border-radius: 24px;
        border: 1px solid #000;
        height: 100vh;
        background-image: url(assets/images/desktop/free.png);
        background-repeat: no-repeat;
        background-size: cover;

    }

    .mm{
        position: absolute;
        top: 300px;
        left: 115px;
    }

      .mm-img{
        margin: 20px;
        border-radius: 8px;

    } 

}

        /* FOR MOBILE VIEWS */
        @media only screen and (max-width: 992px) {
         #b_logo{
        float: right;
        margin-top: 60px;
        margin-right: 30px;
        width: 80px;
        height: 80px;
    }

    .main_login{
        border-radius: 24px;
        border: 1px solid #000;
        height: 100vh;
        background-image: url(assets/images/mobile/6.png);
        background-repeat: no-repeat;
        background-size: cover;

    }

    .mm{
        margin-top: 200px;
        margin-left: 12px;
    }

      .mm-img{
        margin: 10px;
        border-radius: 8px;

    } 

    /* .main_div_core > p{
        color: #fff;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        font-weight: 800;
        font-size: 24px;
        line-height: 29px;
        text-align: center;
        letter-spacing: -0.01em;
        padding: 3px;
    } */

}
    </style>
    
    </head>
    <body>
        <main>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 main_login">
                        <div class="div_logo">
                            <a href="index.php"><img class="navbar-brand" id="b_logo" src="assets/images/desktop/logo.png"></a>
                        </div>

                        <div class="col-md-2"></div>

                        <div class="col-md-10">
                            <div class="mm">
                                <a href="#"><img src="assets/images/desktop/al.png" class="img-fluid mm-img"></a>
                                <a href="#"><img src="assets/images/desktop/cp.png" class="img-fluid mm-img"></a>
                                <a href="#"><img src="assets/images/desktop/sb.png" class="img-fluid mm-img"></a>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

    
</html>