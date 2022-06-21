<?php  require_once "config/config.php"; ?>
<?php  require_once "config/auth.php"; ?>
<?php  require_once "config/admin_auth.php"; ?>

<!DOCTYPE html>
<html>
    <head>
    <title>Pastor Tibi Digital Library</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">
    
    <!--Fontawesome CDN-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!-- Css FIles -->

    <!-- Swiper js -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!--Favicon icon-->
    <link rel="icon" type="icon" href="assets/images/logo.png">
    <!--Apple touch icon-->
    <link rel="apple-touch-icon" href="assets/images/logo.png">
    <style>


/* .logo{
    display: none;
}

  .logod{
    margin-top: 20px;
    margin-left: 40px;
    width: 90px;
    height: 90px;
}

.swiper-wrapper{
    display: none;
}

.swiper{
        height: fit-content;
        width: 90%;
    }

    .swiper-slide img{
        width: 100%;
    } */

    /* FOR DESKTOP VIEW ONLY */

    @media only screen and (min-width: 1800px) {


    }

    @media only screen and (min-width: 1400px) {
    .myown{
        display: none !important;
    }

    .desktop-view{
        display: flex !important
    }

    .logod{
        width: 120px;
        height: 120px;
        margin-left: 50px;
    }

    .btn_login{
        background-color: #fff;
        border-radius: 24px;
        box-sizing: border-box;
        border: 1px solid #000;
        /* width: 90px; */
        position: absolute;
        right: 20px;
        width: 80%;
        color: #000;
    }

    .btn_login:hover{
        color: #000;
    }

    .get_more{
        top:20px;
    }

    .categories{
        margin-top: 150px;
    }

    .main_categories_img{
        margin: 10px;
        padding-top: 40px;
        margin-left: 50px;
    }

    .links{
        padding-top: 40px;
        margin-left: 230px;
    }

    .links_img{
        width: 100px;
        height: 100px;
        margin: 20px;
    }
    
}

    @media only screen and (min-width: 993px) {

        body
        {
        background-image: url(assets/images/desktop/indexbackground.png);
        background-repeat: no-repeat;
        background-size: cover;
        height: auto;
    }
        
    .myown{
        display: none !important;
    }

    .desktop-view{
        display: flex !important
    }

    .logod{
        width: 90px;
        height: 90px;
    }

    .btn_login{
        background-color: #fff;
        border-radius: 24px;
        box-sizing: border-box;
        border: 1px solid #000;
        /* width: 90px; */
        position: absolute;
        right: 20px;
        width: 80%;
        color: #000;
    }

    .get_more{
        color: #000;
        font-weight: 400;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        text-align: right;
        font-size: 20px;
        text-decoration: none;
        right: 75px;
        position: relative;
    }

    .get_more:hover{
        color: #000;
        text-decoration: none;
    }

    
    .new{
            font-size: 72px;
            margin-left: 10px;
            margin-top: 170px;
        }

        .new:hover{
            text-decoration: none;
        }

        .categories{
        font-size: 38px;;
        margin-left: 20px;
        margin-top: 300px;
    }

    .categories:hover{
        text-decoration: none;
    }

    .get_more{
        font-size: 20px;
        right: 0px;
        top: 130px;
    }

    /* .get_more_div{
        right: 80px;
    } */

    .mynav{
        height: 150vh;
    }

    
    .btn_subscribe{
        background-color: #C2AF00;
        font-weight: bold;
        border-radius: 24px;
        box-sizing: border-box;
        border: 1px solid #000;
         width: 20%;
        right: 10px;
        color: #000;
    }

    .btn_subscribe:hover{
        color: #000;
    }

    .div_subscribe{
        margin-top: 125px;
    }

    .sb_srch{
        color: #fff;
        width: 18.67px;
        height: 18.67px;
        position: absolute;
        left: 90%;
    }

    .div_slide{
        padding-top: 30px;
    }

    .swiper{
        height: fit-content;
        width: 100%;
    }

    .swiper-slide img{
        width: 100%;
    }

    .main_categories{
        padding-top: 30px;
    }

    .main_categories_img{
        margin: 8px;
        /*padding-top: 70px;*/
        margin-left: 30px;
        width: 150px;
        /*height: 200px;*/
        border-radius: 10px;
        border: 2px solid #fff;
    }

    .links{
        padding-top: 40px;
        margin-left: 100px;
    }

    .links_img{
        width: 80px;
        height: 80px;
        margin: 20px;
    }

    .modal-content{
        background-color: transparent;
        border: none;
        width: 100%px;
        height: 500px;
        background-image: url(assets/images/mobile/background2.png);
        background-size: cover;
        background-repeat: no-repeat;
        margin-left: 30%;
        margin-top: 80px;

    }

    .modal_btn{
        text-decoration: none;
        width: 150px;
        background: #FFFFFF;
        border: 1px solid #0267FF;
        box-sizing: border-box;
        border-radius: 24px;
        height: auto;
        color: #0267FF;
        text-align: center;
        font-weight: 400;
        font-size: 24px;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
       margin-left: 35%;

    }

    #termly:hover{
        text-decoration: none;
        color: #fff;

    }

    .modal-p{
        font-size: 12px;

    }

    #termly{
        background-image: url(assets/images/mobile/1.png);
        background-size: cover;
        background-repeat: no-repeat;
        border: 1px solid #CE8544;
        color: #fff;

    }

    #yearly{
        background-image: url(assets/images/mobile/2.png);
        background-size: cover;
        background-repeat: no-repeat;
        border: 1px solid #C8C8C7;
        color: #fff;
    }

    #yearly:hover{
        color: #fff;
    }

    #lifetime{
        background-image: url(assets/images/mobile/3.png);
        background-size: cover;
        background-repeat: no-repeat;
        border: 1px solid #F4BF29;
        color: #fff;
    }

    #lifetime:hover{
        color: #fff;
    }

    .modal_footer_btn{
        text-decoration: none;
        font-size: 15px;
        font-weight: 400;
        text-align: center;
    }

    #md_ft_btn1{
        background-color: #fff;
        color: #C2AF00;
        border: 1px solid #FFFFFF;
        box-sizing: border-box;
        border-radius: 24px;
        margin-right: 60%;
        font-weight: bold;
    }

    #md_ft_btn2{
        background-color: #C2AF00;
        color: #fff;
        border: 1px solid #FFFFFF;
        box-sizing: border-box;
        border-radius: 24px;
        font-weight: bold;
    }

    #preloader{
        background-image: url(assets/images/mobile/ptp.gif);
        background-repeat: no-repeat;
        background-size: cover;
        height: 100vh;
        width: 100%;
        position: fixed;
        z-index: 100;
    }


    /* .main{
            width: calc(100% - 70px);
        }
        
        .mynav{
            width: 70px;
        } */
}
/* DESKTOP VIEWS ENDS HERE */
    

/* FOR MOBILE VIEWS ONLY */
     @media only screen and (max-width: 992px) {

        body{
            overflow-x: hidden;
        }

        .myown{
            display: block;
            height: 100%;
        }
        
        .sb_srch{
        color: #fff;
        width: 18.67px;
        height: 18.67px;
        position: absolute;
        right: 30px;
    }
        
        .row{
            display: flex;
        }
        
        .main{
            width: calc(100% - 70px);
        }
        
        .mynav{
            width: 70px;
        }

        /* .swiper-slide{
            height: 300px;
        } */

       /* .logo{
margin: auto;
width: 75px;
height: 75px;
} */

 .logod{
    right: 20px; 
    position: relative;
    top: 5px;
width: 65px;
height: 65px;
}

    .swiper-wrapper-desktop{
    display: none;
}


.new{
            font-size: 52px;
            margin-left: 5px;
            margin-top: 140px;
        }

        .categories{
        font-size: 28px;;
        margin-left: 20px;
        margin-top: 180px;
    }

    .get_more{
        font-size: 15px;
        right: 80px;
    }

    .main_categories_img{
        width:90px;
        height: 90px;
        margin: 8px;
    }

    .links_img{
        width:30px;
        height: 30px;
        margin: 15px;
    }

    .desktop-view{
        display: none!important;
    }

    #termly:hover{
        text-decoration: none;
        color: #fff;

    }

    .modal-p{
        font-size: 12px;

    }

    #termly{
        background-image: url(assets/images/mobile/1.png);
        background-size: cover;
        background-repeat: no-repeat;
        border: 1px solid #CE8544;
        color: #fff;

    }

    #yearly{
        background-image: url(assets/images/mobile/2.png);
        background-size: cover;
        background-repeat: no-repeat;
        border: 1px solid #C8C8C7;
        color: #fff;
    }

    #yearly:hover{
        color: #fff;
    }

    #lifetime{
        background-image: url(assets/images/mobile/3.png);
        background-size: cover;
        background-repeat: no-repeat;
        border: 1px solid #F4BF29;
        color: #fff;
    }

    #lifetime:hover{
        color: #fff;
    }

}

        @media only screen and (max-width: 461px) {

body{
    overflow-x: hidden;
}

.myown{
            display: block;
            height: 100%;
        }
.row{
            display: flex;
        }
        
        .main{
            width: calc(100% - 70px);
        }
        
        .mynav{
            width: 70px;
        }

    /* .logo{
margin: auto;
width: 75px;
height: 75px;
} */

 .logod{
    right: 20px; 
    position: relative;
    top: 5px;
width: 65px;
height: 65px;
} 

.swiper-wrapper-desktop{
display: none;
}

.btn_login{
        background-color: #fff;
        border-radius: 24px;
        box-sizing: border-box;
        border: 1px solid #000;
        /* width: 90px; */
        position: absolute;
        right: 0px;
        width: 100%;
        color: #000;
    }

    .btn_login:hover{
        color: #000;
    }

    .sb_srch{
        color: #fff;
        width: 18.67px;
        height: 18.67px;
        position: absolute;
        right: 30px;
    }

    .get_more{
        color: #000;
        font-weight: 400;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        text-align: right;
        font-size: 20px;
        text-decoration: none;
        right: 75px;
        position: relative;
    }

    .get_more:hover{
        color: #000;
        text-decoration: none;
    }

    
    .new{
            font-size: 52px;
            margin-left: 5px;
            margin-top: 140px;
        }

        .categories{
        font-size: 28px;;
        margin-left: 20px;
        margin-top: 180px;
    }

    .get_more{
        font-size: 15px;
        right: 80px;
    }

    .main_categories_img{
        width:90px;
        height: 90px;
        margin: 8px;
    }

    .links_img{
        width:30px;
        height: 30px;
        margin: 15px;
    }

    .desktop-view{
        display: none!important;
    }

    #termly:hover{
        text-decoration: none;
        color: #fff;

    }

    .modal-p{
        font-size: 12px;

    }

    #termly{
        background-image: url(assets/images/mobile/1.png);
        background-size: cover;
        background-repeat: no-repeat;
        border: 1px solid #CE8544;
        color: #fff;

    }

    #yearly{
        background-image: url(assets/images/mobile/2.png);
        background-size: cover;
        background-repeat: no-repeat;
        border: 1px solid #C8C8C7;
        color: #fff;
    }

    #yearly:hover{
        color: #fff;
    }

    #lifetime{
        background-image: url(assets/images/mobile/3.png);
        background-size: cover;
        background-repeat: no-repeat;
        border: 1px solid #F4BF29;
        color: #fff;
    }

    #lifetime:hover{
        color: #fff;
    }

}

@media only screen and (max-width: 455px) {

    .myown{
            display: block;
            height: 100%;
        }

    .logod{
    right: 20px; 
    position: relative;
    top: 5px;
width: 65px;
height: 65px;
} 
   .div_subscribe{
        margin-top: 10px;
    }
    
    .sb_srch{
        color: #fff;
        width: 18.67px;
        height: 18.67px;
        position: absolute;
        right: 30px;
    }

    .links_img{
        width:36px;
        height: 36px;
        border: 1px solid #fff;
        box-sizing: border-box;
        border-radius: 32px;
        margin: 15px;
    }
    
    .row{
            display: flex;
        }
        
        .main{
            width: calc(100% - 70px);
        }
        
        .mynav{
            width: 70px;
        }

        .new{
            font-size: 52px;
            margin-left: 5px;
            margin-top: 140px;
        }

        .categories{
        font-size: 28px;;
        margin-left: 20px;
        margin-top: 180px;
    }

    .get_more{
        font-size: 15px;
        right: 80px;
    }

    .main_categories_img{
        width:90px;
        height: 90px;
        margin: 8px;
    }

    .links_img{
        width:30px;
        height: 30px;
        margin: 15px;
    }

    .desktop-view{
        display: none!important;
    }

    #termly:hover{
        text-decoration: none;
        color: #fff;

    }

    .modal-p{
        font-size: 12px;

    }

    #termly{
        background-image: url(assets/images/mobile/1.png);
        background-size: cover;
        background-repeat: no-repeat;
        border: 1px solid #CE8544;
        color: #fff;

    }

    #yearly{
        background-image: url(assets/images/mobile/2.png);
        background-size: cover;
        background-repeat: no-repeat;
        border: 1px solid #C8C8C7;
        color: #fff;
    }

    #yearly:hover{
        color: #fff;
    }

    #lifetime{
        background-image: url(assets/images/mobile/3.png);
        background-size: cover;
        background-repeat: no-repeat;
        border: 1px solid #F4BF29;
        color: #fff;
    }

    #lifetime:hover{
        color: #fff;
    }

}

    </style>
    
    </head>
    <body>

    <div id="preloader"></div>

    <!-- MOBILE VIEW STARTS HERE -->

        <main class="myown">
            <div class="container-fluid">
                <div class="row">
                    <!-- Nav Bar Starts Here -->
                    <div class="col-md-2 mynav">
                        <div class="nav_main">
                            <a href="index"><img class="navbar-brand logo" src="assets/images/desktop/logo.png"></a>
                            <a href="index"><img class="navbar-brand logod" src="assets/images/desktop/logo.png"></a>
                        </div>
                        <?php if (isset($_SESSION['username'])&& isset($_SESSION['email'])): ?>
                            <div class="div_login">
                                <a class="btn btn_login" style="box-sizing: border-box;" data-toggle="collapse" href="login" role="button" data-target="#dashboard">
                                    <?=$_SESSION['username'] ?>
                                </a>
                            </div>
                            <div class="collapse mt-5" aria-labelledby="navbarDropdown" id="dashboard">
                                <?php if (isset($_SESSION['access_level'])&& isset($_SESSION['status'])): ?>
                                    <a class="dropdown-item" href="admin/index" style="font-size: 12px; right: 25px; position: relative; text-align: right;"><i class="fas fa-th-large"></i> Dashboard
                                    </a>
                                  <?php else: ?>

                                <?php endif ?>
                              <a class="dropdown-item" style="font-size: 12px; right: 25px; position: relative; text-align: right;" href="library/logout"><i class="fas fa-ban"></i> Logout
                              </a>
                            </div>
                        <?php else: ?>
                            <div class="div_login">
                                <a class="btn btn_login" href="login" role="button">Login</a>
                            </div>
                        <?php endif ?>
                        
                        <div class="new">
                            <a href="#" class="new">NEW</a>
                        </div>
                        <div class="categories">
                            <a href="#" class="categories">CATEGORIES</a>
                        </div>
                        <div id="get_more_div">
                            <a class="get_more" href="#"><span style="left: 15px; position: relative;">GET</span><br>
                                <span style="font-weight: bolder;">MORE</span>
                            </a>
                        </div>
                    </div>
                    <!-- Main Body Contents Starts Here -->
                    <div class="col-md-10 main">
                        <div class="div_slide">
                            
                        <div class="div_subscribe">
                            <a class="btn btn_subscribe" href="#" role="button" data-toggle="modal" data-target="#myModal">Subscribe</a>
                            <span class="material-icons sb_srch">search</span>

                            <div class="modal fade" id="myModal">
                            <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                            
                                    <!-- Modal Header -->
                                    <div class="modal-header" style="border: none;">
                                    <!-- <h4 class="modal-title">Modal Heading</h4> -->
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    
                                    <!-- Modal body -->
                                    <div class="modal-body" style="border: none;">
                                    <a class="btn modal_btn" href="#" role="button" id="termly">BRONZE</a><br>
                                    <p class="text-center modal-p">90 days access (Audio + Video + PDF) <br>
                                    Including NEW RELEASES</p>

                                    <a class="btn modal_btn" href="#" role="button" id="yearly">SILVER</a><br>
                                    <p class="text-center modal-p">180 days access (Audio + Video + PDF) <br>
                                    Including NEW RELEASES</p>

                                    <a class="btn modal_btn" href="#" role="button" id="lifetime">GOLD</a><br>
                                    <p class="text-center modal-p">365 days access (Audio + Video + PDF) <br>
                                    Including NEW RELEASES</p>
                                    </div>
                                    
                                    <!-- Modal footer -->
                                    <div class="modal-footer" style="border: none;">
                                    <a class="btn modal_footer_btn" role="button" id="md_ft_btn1" href="login">Login</a>
                                    <a class="btn modal_footer_btn" role="button" id="md_ft_btn2" href="create-account">Create Account</a>
                                    </div>

                            </div>
                            </div>
                            </div>
                            

                        </div>
                            <!-- Slider main container -->
                            <div class="swiper">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <!-- Slides -->
                                <div class="swiper-slide"><img src="assets/images/mobile/slide1.png"></div>
                                <div class="swiper-slide"><img src="assets/images/mobile/slide2.png"></div>
                                <div class="swiper-slide"><img src="assets/images/mobile/slide3.png"></div>
                                <div class="swiper-slide"><img src="assets/images/mobile/slide4.png"></div>

                            </div>
                            <!-- If we need pagination -->
                            <div class="swiper-pagination"></div>

                            <!-- If we need navigation buttons -->
                            <!-- <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div> -->
                            </div>
                        </div>

                        <div class="main_categories">
                        <a href="believers_core"><img class="img-fluid main_categories_img" src="assets/images/mobile/core.png"></a>
                        <a href="faith-food"><img class="img-fluid main_categories_img" src="assets/images/mobile/faith.png"></a>
                        <a href="free-access"><img class="img-fluid main_categories_img" src="assets/images/mobile/free.png"></a>
                        <a href="classics"><img class="img-fluid main_categories_img" src="assets/images/mobile/classics.png"></a>
                        </div>

                        <div class="links">
                            <a href="https://www.faithtofaithtv.org"><img class="img-fluid links_img" src="assets/images/mobile/f2ftv.png"></a>
                            <a href="https://radio.faithtofaithonline.org"><img class="img-fluid links_img" src="assets/images/mobile/radio.png"></a>
                            <a href="https://t.me/pastortibipeters"><img class="img-fluid links_img" src="assets/images/mobile/telegram.png"></a>
                            <a href="#"><img class="img-fluid links_img" src="assets/images/mobile/calendar.png"></a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- MOBILE VIEW ENDS HERE -->

        <!-- DESKTOP VIEW STARTS HERE -->
        <main class="desktop-view">
            <div class="container-fluid">
                <div class="row">
                    <!-- Nav Bar Starts Here -->
                    <div class="col-md-2 mynav">
                        <div class="nav_main">
                            <a href="index"><img class="navbar-brand logod" src="assets/images/desktop/logo.png"></a>
                        </div>
                        <?php if (isset($_SESSION['username'])&& isset($_SESSION['email'])): ?>
                            <div class="div_login">
                                <a class="btn btn_login" style="box-sizing: border-box;" data-toggle="collapse" href="login" role="button" data-target="#dashboard">
                                    <?=$_SESSION['username'] ?>
                                </a>
                            </div>
                            <div class="collapse mt-5" aria-labelledby="navbarDropdown" id="dashboard">
                                <?php if (isset($_SESSION['access_level'])&& isset($_SESSION['status'])): ?>
                                    <a class="dropdown-item" href="admin/index" style="font-size: 12px; right: 25px; position: relative; text-align: right;"><i class="fas fa-th-large"></i> Dashboard
                                    </a>
                                  <?php else: ?>

                                <?php endif ?>
                              <a class="dropdown-item" style="font-size: 12px; right: 25px; position: relative; text-align: right;" href="library/logout"><i class="fas fa-ban"></i> Logout
                              </a>
                            </div>
                        <?php else: ?>
                            <div class="div_login">
                                <a class="btn btn_login" href="login" role="button">Login</a>
                            </div>
                        <?php endif ?>
                        
                        <div class="new">
                            <a href="#" class="new">NEW</a>
                        </div>
                        <div class="categories">
                            <a href="#" class="categories">CATEGORIES</a>
                        </div>
                        <div id="get_more_div">
                            <a class="get_more" href="#"><span style="left: 15px; position: relative;">GET</span><br>
                                <span style="font-weight: bolder;">MORE</span>
                            </a>
                        </div>
                    </div>
                    <!-- Main Body Contents Starts Here -->
                    <div class="col-md-10 main">

                    <div class="div_subscribe">
                            <a class="btn btn_subscribe" href="#" role="button" data-toggle="modal" data-target="#myModald">Subscribe</a>
                            <span class="material-icons sb_srch">search</span>

                            <div class="modal fade" id="myModald">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                            
                                    <!-- Modal Header -->
                                    <div class="modal-header" style="border: none;">
                                    <!-- <h4 class="modal-title">Modal Heading</h4> -->
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    
                                    <!-- Modal body -->
                                    <div class="modal-body" style="border: none;">
                                    <a class="btn modal_btn" href="#" role="button" id="termly">BRONZE</a><br>
                                    <p class="text-center modal-p">90 days access (Audio + Video + PDF) <br>
                                    Including NEW RELEASES</p>

                                    <a class="btn modal_btn" href="#" role="button" id="yearly">SILVER</a><br>
                                    <p class="text-center modal-p">180 days access (Audio + Video + PDF) <br>
                                    Including NEW RELEASES</p>

                                    <a class="btn modal_btn" href="#" role="button" id="lifetime">GOLD</a><br>
                                    <p class="text-center modal-p">365 days access (Audio + Video + PDF) <br>
                                    Including NEW RELEASES</p>
                                    </div>
                                    
                                    <!-- Modal footer -->
                                    <div class="modal-footer" style="border: none;">
                                    <a class="btn modal_footer_btn" role="button" id="md_ft_btn1" href="login">Login</a>
                                    <a class="btn modal_footer_btn" role="button" id="md_ft_btn2" href="create-account">Create Account</a>
                                    </div>

                            </div>
                            </div>
                            </div>
                            

                        </div>

                        <div class="div_slide">
                            
                        
                            <!-- Slider main container -->
                            <div class="swiper">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <!-- Slides -->
                                <div class="swiper-slide"><img src="assets/images/desktop/slide1.png"></div>
                                <div class="swiper-slide"><img src="assets/images/desktop/slide2.png"></div>
                                <div class="swiper-slide"><img src="assets/images/desktop/slide3.png"></div>
                                <!-- <div class="swiper-slide"><img src="assets/images/desktop/slide4.png"></div> -->

                            </div>
                            <!-- If we need pagination -->
                            <div class="swiper-pagination"></div>

                            <!-- If we need navigation buttons -->
                            <!-- <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div> -->
                            </div>
                        </div>

                        <div class="main_categories">
                        <a href="believers_core"><img class="img-fluid main_categories_img" src="assets/images/desktop/believerscoreicon.png"></a>
                        <a href="faith-food"><img class="img-fluid main_categories_img" src="assets/images/desktop/faithfoodicon.png"></a>
                        <a href="free-access"><img class="img-fluid main_categories_img" src="assets/images/desktop/freeicon.png"></a>
                        <a href="classics"><img class="img-fluid main_categories_img" src="assets/images/desktop/classicsicon.png"></a>
                        </div>

                        <div class="links">
                            <a href="https://www.faithtofaithtv.org"><img class="img-fluid links_img" src="assets/images/desktop/faithtofaithtv.png"></a>
                            <a href="https://radio.faithtofaithonline.org"><img class="img-fluid links_img" src="assets/images/desktop/radio.png"></a>
                            <a href="https://t.me/pastortibipeters"><img class="img-fluid links_img" src="assets/images/desktop/telegram.png"></a>
                            <a href="#"><img class="img-fluid links_img" src="assets/images/desktop/calendar.png"></a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- DESKTOP VIEW ENDS HERE -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

    <script>
        const swiper = new Swiper('.swiper', {

            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },

  loop: true,

  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },

//   navigation: {
//     nextEl: '.swiper-button-next',
//     prevEl: '.swiper-button-prev',
//   },

});
    </script>

    <script>
        var loader = document.getElementById("preloader");

        window.addEventListener("load", function(){
            loader.style.display = "none";
        })
    </script>
</html>
<!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/OyybeqCk8KU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/OyybeqCk8KU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/OyybeqCk8KU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/OyybeqCk8KU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/OyybeqCk8KU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/OyybeqCk8KU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/OyybeqCk8KU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/OyybeqCk8KU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                        