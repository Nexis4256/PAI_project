<?php
if (!isset($_SESSION['id']))
{
    header("Location: ?page=noAccess");
}
?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
              integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
              crossorigin="anonymous">
        <link type="text/css" rel="stylesheet" href="frontend/css/board_news_layout_css.css">
        <link href="https://fonts.googleapis.com/css?family=Noto+Serif+JP&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/608fe230d5.js" crossorigin="anonymous"></script>

        <title>Hello, world!</title>
    </head>
    <body>

        <!--        navpart CONTENT CONTENT CONTENT -->
        <!--        navpart CONTENT CONTENT CONTENT -->
        <!--        navpart CONTENT CONTENT CONTENT -->
        <?php include('frontend/views/navbar/navbar.php'); ?>
        <!--        MAIN PART CONTENT-->
        <!--        MAIN PART CONTENT-->
        <!--        MAIN PART CONTENT-->
        <div class="container" id="main_part_container">
            <br>
            <br>
            <div class="container justify-content-center">
                <div class="table_container row justify-content-center text-center m-0">
                    <table class="table table-bordered" style="color:antiquewhite">
                        <thead class="thead-light text-center">
                        <th scope="col">Time</th>
                        <th scope="col">
                            Team
                        </th>
                        <th scope="col">vs</th>
                        <th scope="col">Team</th>
                        </thead>
                        <thead>
                        <th scope="row">2:00</th>
                        <th scope="row">
                            <div class="d-flex flex-row justify-content-center">
                                <img src="sources/img/100thieves_logo.png" alt="cos" width="50px" height="25px">
                                <p>100Thieves</p>
                            </div>
                        </th>
                        <th scope="row">vs</th>
                        <th scope="row">
                            <div class="d-flex flex-row justify-content-center">
                                <img src="sources/img/clg_logo.png" alt="cos" width="50px" height="25px">
                                <p>CLG</p>
                            </div>
                        </th>
                        </thead>
                        <thead>
                        <th scope="row">16:00</th>
                        <th scope="row">
                            <div class="d-flex flex-row justify-content-center">
                                <img src="sources/img/team_liquid_log.png" alt="cos" width="50px" height="25px">
                                <p>100Thieves</p>
                            </div>
                        </th>
                        <th scope="row">vs</th>
                        <th scope="row">
                            <div class="d-flex flex-row justify-content-center">
                                <img src="sources/img/clg_logo.png" alt="cos" width="50px" height="25px">
                                <p>CLG</p>
                            </div>
                        </th>
                        </thead>
                        <thead>
                        <th scope="row">2:00</th>
                        <th scope="row">
                            <div class="d-flex flex-row justify-content-center">
                                <img src="sources/img/100thieves_logo.png" alt="cos" width="50px" height="25px">
                                <p>100Thieves</p>
                            </div>
                        </th>
                        <th scope="row">vs</th>
                        <th scope="row">
                            <div class="d-flex flex-row justify-content-center">
                                <img src="sources/img/clg_logo.png" alt="cos" width="50px" height="25px">
                                <p>CLG</p>
                            </div>
                        </th>
                        </thead>
                        <thead>
                        <th scope="row">16:00</th>
                        <th scope="row">
                            <div class="d-flex flex-row justify-content-center">
                                <img src="sources/img/team_liquid_log.png" alt="cos" width="50px" height="25px">
                                <p>100Thieves</p>
                            </div>
                        </th>
                        <th scope="row">vs</th>
                        <th scope="row">
                            <div class="d-flex flex-row justify-content-center">
                                <img src="sources/img/clg_logo.png" alt="cos" width="50px" height="25px">
                                <p>CLG</p>
                            </div>
                        </th>
                        </thead>
                        <thead>
                        <th scope="row">2:00</th>
                        <th scope="row">
                            <div class="d-flex flex-row justify-content-center">
                                <img src="sources/img/100thieves_logo.png" alt="cos" width="50px" height="25px">
                                <p>100Thieves</p>
                            </div>
                        </th>
                        <th scope="row">vs</th>
                        <th scope="row">
                            <div class="d-flex flex-row justify-content-center">
                                <img src="sources/img/clg_logo.png" alt="cos" width="50px" height="25px">
                                <p>CLG</p>
                            </div>
                        </th>
                        </thead>
                        <thead>
                        <th scope="row">16:00</th>
                        <th scope="row">
                            <div class="d-flex flex-row justify-content-center">
                                <img src="sources/img/team_liquid_log.png" alt="cos" width="50px" height="25px">
                                <p>100Thieves</p>
                            </div>
                        </th>
                        <th scope="row">vs</th>
                        <th scope="row">
                            <div class="d-flex flex-row justify-content-center">
                                <img src="sources/img/clg_logo.png" alt="cos" width="50px" height="25px">
                                <p>CLG</p>
                            </div>
                        </th>
                        </thead>

                    </table>
                </div>
            </div>
        </div>

        <div class="about">
            <div class="container p-0" id="about_part_container">
                <div class="about_row row m-0">
                    <div class="about_col_3 col-xs-3">
                        <div class="d-flex h-100 align-items-center justify-content-center">
                            <ul>
                                <li>about</li>
                                <li>about</li>
                            </ul>
                        </div>
                    </div>
                    <div class="about_col_3 col-xs-3">
                        <div class="d-flex h-100 align-items-center justify-content-center">
                            <ul>
                                <li>about</li>
                                <li>about</li>
                            </ul>
                        </div>
                    </div>
                    <div class="about_col_3 col-xs-3">
                        <div class="d-flex h-100 align-items-center justify-content-center">
                            <ul>
                                <li>about</li>
                                <li>about</li>
                            </ul>
                        </div>
                    </div>
                    <div class="about_col_3 col-xs-3">
                        <div class="d-flex h-100 align-items-center justify-content-center">
                            <ul>
                                <li>about</li>
                                <li>about</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

        </div>


        <footer class="footer">
            <div class="footer_container container">
                <div class="footer_footer_left float-left">
                    <p>@LOLNEWS</p>
                </div>
                <div class="footer_footer_right float-right">
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-facebook"></i>
                </div>
            </div>
        </footer>


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
                integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
                crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
                integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
                crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
                integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
                crossorigin="anonymous"></script>
    </body>
</html>