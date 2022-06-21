<?php  require_once "config/config.php"; ?>
<?php  require_once "config/auth.php"; ?>
<?php  require_once "config/admin_auth.php"; ?>
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
    <!--Favicon icon-->
    <link rel="icon" type="icon" href="assets/images/logo.png">
    <!--Apple touch icon-->
    <link rel="apple-touch-icon" href="assets/images/logo.png">
    <style>

        /* FOR DESKTOP VIEW */
        @media only screen and (min-width: 993px) {
         #b_logo{
        float: right;
        margin-top: 40px;
        margin-right: 30px;
    }

    .main_login{
        border-radius: 24px;
        border: 1px solid #000;
        height: 100vh;
        background-image: url(assets/images/desktop/believerscore.png);
        background-repeat: no-repeat;
        background-size: cover;

    }

    .mm{
        margin-top: 250px;
        margin-left: 90px;
    }

    .main_div_core{
        width: 90%;
        height: 40px;
        border: 2px solid #fff;
        margin: 20px;
        text-align: center;
    }

    .main_div_core > a{
        color: #fff;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        font-weight: 800;
        font-size: 24px;
        line-height: 29px;
        letter-spacing: -0.01em;
        padding: 3px;
    }

    .main_div_core > a:hover{
        text-decoration: none;
    }

}

        /* FOR MOBILE VIEW */
        @media only screen and (max-width: 992px) {
         #b_logo{
        float: right;
        margin-top: 40px;
        margin-right: 30px;
    }

    .main_login{
        border-radius: 24px;
        border: 1px solid #000;
        height: 100vh;
        background-image: url(assets/images/mobile/4.png);
        background-repeat: no-repeat;
        background-size: cover;

    }

    .mm{
        margin-top: 250px;
        margin-right: 12px;
    }

    .main_div_core{
        width: 90%;
        height: 40px;
        border: 2px solid #fff;
        margin: 20px;
        text-align: center;
    }

    .main_div_core > a{
        color: #fff;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        font-weight: 800;
        font-size: 24px;
        line-height: 29px;
        letter-spacing: -0.01em;
        padding: 3px;
    }

    .main_div_core > a:hover{
        text-decoration: none;
    }

}
    </style>
    
    </head>
    <body>
        <main>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 main_login">
                        <div>
                            <a><img class="navbar-brand logo" id="b_logo" src="assets/images/mobile/logo2.png"></a>
                        </div>

                        <div class="col-md-2"></div>

                        <div class="col-md-10 mm">
                            <div class="main_div_core">
                                <a href="user/prayer_library_teaching">PRAYER</a>
                            </div>
                            <div class="main_div_core">
                                <a href="user/worship_library_teaching">WORSHIP</a>
                            </div>
                            <div class="main_div_core">
                                <a href="user/discipleship_library_teaching">DISCIPLESHIP</a>
                            </div>
                            <div class="main_div_core">
                                <a href="user/service_library_teaching">SERVICE</a>
                            </div>
                            <div class="main_div_core">
                                <a href="user/giving_library_teaching">GIVING</a>
                            </div>
                            <div class="main_div_core">
                                <a href="user/evangelism_library_teaching">EVANGELISM</a>
                            </div>
                            <div class="main_div_core">
                                <a href="user/fellowship_library_teaching">FELLOWSHIP</a>
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