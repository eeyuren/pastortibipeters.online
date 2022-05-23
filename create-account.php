<?php  require_once "config/config.php"; ?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!-- Css FIles -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Swiper js -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <style>
        /* FRO DESKTOP VIEW ONLY */

        @media only screen and (min-width: 993px) {
         #login_logo{
        margin-left: 40px;
        margin-top: 50px;
    }

    .container-fluid{
        height: 100vh;
    }

    .main_login{
        border-radius: 24px;
        border: 1px solid #000;
    }

    form{
        margin-top: 40px;
        margin-left: 200px;
    }

    label{
        color: #C2AF00;
        font-weight: 300;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        font-size: 21px;
        letter-spacing: -0.01em;
        line-height: 25px;
    }

    input[type='text'],
    input[type='password'],
    input[type='email'] {
        border: 1px solid #000;
        border-radius: 24px;
        height: 40px;
        box-sizing: border-box;
        border-radius: 36px;
    }

    input[type='submit']{
        background: #C2AF00;
        border: 1px solid #FFFFFF;
        box-sizing: border-box;
        border-radius: 24px;
        color: #fff;
        text-align: center;
        font-weight: 400;
        font-size: 14px;
        line-height: 16px;
        width: 140px;
        height: 30px;
    }

    p {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        font-weight: 300;
        font-size: 14px;
        line-height: 16px;
        text-align: center;
        letter-spacing: 0.075em;
        margin: auto;
    }

    #b_logo{
        margin-top: 45px;
        margin-right: 30px;
        width: 100px;
        height: 100px;
    }
    .div_logo{
        margin-left: 200px;
        margin-top: 25px;
    }
}

        /* FOR MOBILE PHONES ONLY */
        @media only screen and (max-width: 992px) {
         #login_logo{
        margin-left: 40px;
        margin-top: 50px;
    }

    .container-fluid{
        height: 100vh;
    }

    .main_login{
        border-radius: 24px;
        border: 1px solid #000;
    }

    form{
        margin-top: 40px;
    }

    label{
        color: #C2AF00;
        font-weight: 300;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        font-size: 21px;
        letter-spacing: -0.01em;
        line-height: 25px;
    }

    input[type='text'],
    input[type='password'],
    input[type='email'] {
        border: 1px solid #000;
        border-radius: 24px;
        height: 40px;
        box-sizing: border-box;
        border-radius: 36px;
    }

    input[type='submit']{
        background: #C2AF00;
        border: 1px solid #FFFFFF;
        box-sizing: border-box;
        border-radius: 24px;
        color: #fff;
        text-align: center;
        font-weight: 400;
        font-size: 14px;
        line-height: 16px;
        width: 140px;
        height: 30px;
    }

    p {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        font-weight: 300;
        font-size: 14px;
        line-height: 16px;
        text-align: center;
        letter-spacing: 0.075em;
        margin: auto;
    }

    #b_logo{
        position: absolute;
        top: 45px;
        left: 200px;
        width: 80px;
        height: 80px;
    }

}
    </style>
    
    </head>
    <body>
        <main>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 main_login">
                        <div class="div_logo">
                            <a><img class="navbar-brand" id="b_logo" src="assets/images/desktop/logo.png"></a>
                        </div>

                        <div class="col-md-8 myform">
                            <?php require_once  "error_msg.php"; ?>
                            <form action="library/register.php" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                <label for="username">USERNAME</label>
                                <input type="text" class="form-control" id="username" name="username" required>
                                </div><br>
                                <div class="form-group">
                                <label for="email">EMAIL</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                                </div><br>
                                <div class="form-group">
                                <label for="pwd">PASSWORD</label>
                                <input type="password" class="form-control" id="pwd" name="password">
                                </div>
                                <div class="form-group">
                                <label for="conf_pwd">PASSWORD</label>
                                <input type="password" class="form-control" id="pwd" name="confirm_password">
                                </div>
                                <input type="submit" class="btn" value="Create an Account" name="create_account"><br><br>
                                <div class="form-group form-check form-inline">
                                    <p class="text-center">Kindly check your email address <br> for confirmation</p>
                                </div>
                                
                            </form>
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