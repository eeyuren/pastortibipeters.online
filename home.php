<?php  require_once "config/config.php"; ?>
<?php  require_once "config/auth.php"; ?>
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
    <link rel="stylesheet" href="css/style2.css">

    <!-- Swiper js -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <style></style>
    
    </head>
    <body>
<div class="container-fluid">
    <div class="row">
        <div id="preloader"></div>
            </div>
</div>
    
        <main>
            <div class="container-fluid">
                <div class="row">
                    <!-- Nav Bar Starts Here -->
                    <div class="col-md-2 mynav">
                        <div class="nav_main">
                            <a href="index.php"><img class="navbar-brand logo img-fluid" src="assets/images/desktop/logo.png"></a>
                        </div>
                        <?php if (isset($username)&& isset($email)): ?>
                            <div class="div_login">
                                <a class="btn btn_login" data-toggle="collapse" href="login.php" role="button" data-target="#dashboard">
                                    <?=$username ?>
                                </a>
                            </div>
                            <div class="collapse mt-5" aria-labelledby="navbarDropdown" id="dashboard">
                              <a class="dropdown-item" href="users/index.php"><i class="fas fa-th-large"></i> Dashboard
                              </a>
                              <a class="dropdown-item" href="index.php"><i class="fas fa-ban"></i> Logout
                              </a>
                            </div>
                        <?php else: ?>
                            <div class="div_login">
                                <a class="btn btn_login" href="login.php" role="button">Login</a>
                            </div>
                        <?php endif ?>
                        
                        <div class="new">
                            <a href="#" class="new">NEW</a>
                        </div>
                        <div class="categories">
                            <a href="#" class="categories">CATEGORIES</a>
                        </div>
                        <div id="get_more_div">
                            <a class="get_more" href="#"><span style="left: 25px; position: relative;">GET</span><br>
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
                                    <a class="btn modal_btn" href="#" role="button" id="termly">Termly</a><br>
                                    <p class="text-center modal-p">Gives you a 90 day access <br>
                                    to all categories and 3 New Releases</p>

                                    <a class="btn modal_btn" href="#" role="button" id="yearly">Yearly</a><br>
                                    <p class="text-center modal-p">Gives you a 365 day access <br>
                                    to all categories and 12 New Releases</p>

                                    <a class="btn modal_btn" href="#" role="button" id="lifetime">Lifetime</a><br>
                                    <p class="text-center modal-p">Gives you a lifetime access <br>
                                    to all categories and all New Releases</p>
                                    </div>
                                    
                                    <!-- Modal footer -->
                                    <div class="modal-footer" style="border: none;">
                                    <a class="btn modal_footer_btn" role="button" id="md_ft_btn1" href="login.php">Login</a>
                                    <a class="btn modal_footer_btn" role="button" id="md_ft_btn2" href="create-account.php">Create Account</a>
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
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                            </div>
                        </div>

                        <div class="main_categories">
                        <a href="believers_core.php"><img class="img-fluid main_categories_img" src="assets/images/mobile/core.png"></a>
                        <a href="#"><img class="img-fluid main_categories_img" src="assets/images/mobile/faith.png"></a>
                        <a href="#"><img class="img-fluid main_categories_img" src="assets/images/mobile/free.png"></a>
                        <a href="#"><img class="img-fluid main_categories_img" src="assets/images/mobile/classics.png"></a>
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

  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

});
    </script>

    <script>
        var loader = document.getElementById("preloader");

        window.addEventListener("load", function(){
            loader.style.display = "none";
        })
    </script>
</html>
<iframe width="560" height="315" src="https://www.youtube.com/embed/OyybeqCk8KU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/OyybeqCk8KU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/OyybeqCk8KU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/OyybeqCk8KU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/OyybeqCk8KU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/OyybeqCk8KU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/OyybeqCk8KU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/OyybeqCk8KU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        