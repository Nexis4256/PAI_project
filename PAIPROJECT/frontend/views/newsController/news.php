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
            <?php foreach($news as $news_example):?>
            <div class="news_row row w-75 justify-content-center">
                <div class="col-sm-2 d-flex news_first_col align-items-center justify-content-center" style="border:none">
                    <img src="<?php echo $news_example->getCountryFlagDir(); ?>" alt="poland">
                </div>
                <div class="news_second_col col-sm-10 justify-content-center">
                    <p class="text-center m-0 mt-5"><?php echo $news_example->getNewsShortPost(); ?> </p>
                    <form action="?page=displayNewsLongPost" method="post" class="text-center">
                        <input type="text" style="display: none" name="news_id" value="<?php echo $news_example->getId(); ?>">
                        <input type="text" style="display:none" name="news_nickname" value="<?php echo $news_example->getNickname(); ?>">
                        <input type="text" style="display:none" name="news_short_post" value="<?php echo $news_example->getNewsShortPost(); ?>">
                        <input type="text" style="display:none" name="news_file_dir" value="<?php   echo $news_example->getNewsFileDir(); ?>">
                        <input type="text" style="display:none" name="news_country_flag_dir" value="<?php  echo $news_example->getCountryFlagDir(); ?>">
                        <button type="submit" class="btn btn-dark float-right mb-1">Display Post</button>
                    </form>
                </div>
            </div>
            <?php endforeach; ?>

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