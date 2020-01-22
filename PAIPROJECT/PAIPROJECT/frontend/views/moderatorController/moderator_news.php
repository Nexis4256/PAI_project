<?php
if (!isset($_SESSION['id']))
{
    header("Location: ?page=noAccess");
}
?>
<?php
if (!isset($_SESSION['id']))
{
    header("Location: ?page=noAccess");
} else if (($_SESSION['role'] !== "moderator") and ($_SESSION['role'] !== "admin"))
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
        <?php include('frontend/views/navbar/moderator_navbar.php'); ?>
        <!--        MAIN PART CONTENT-->
        <!--        MAIN PART CONTENT-->
        <!--        MAIN PART CONTENT-->

        <div class="container" id="main_part_container">
            <br>
            <br>
            <div class="row justify-content-center">
                <button class="btn btn-primary" onclick="addNews()" id="add_news_button">Dodaj news</button>
            </div>
            <br>
            <br>
            <div class="add_news_row row w-100 m-0 justify-content-center">
                <div id="form_before_content" style="display:none">
                    <form method="POST" action="?page=add_news_post">
                        <div class="form-group">
                            <label for="country" class="text-primary">Country</label>
                            <select class="form-control " name="country">
                                <?php foreach ($flags as $flags_example): ?>
                                    <option><?php echo $flags_example->getCountryName(); ?></option>
                                <?php endforeach; ?>
                            </select>
                            <br>
                            <input type="text" class="form-control" placeholder="Input short Description" name="news_short_post">
                            <br>
                            <textarea class="form-control" name="news_long_post">Add news post..</textarea>
                            <br>
                            <div class="container text-center">
                                <button type="submit" class="add_post_button btn btn-primary">Click to Add Post</button>
                            </div>
                            <br>
                        </div>
                    </form>
                </div>
            </div>
            <?php foreach ($news as $news_example): ?>
                <div class="news_row row w-75 justify-content-center">
                    <div class="col-sm-2 news_first_col">
                        <img src="<?php echo $news_example->getCountryFlagDir() ?>" alt="poland">
                    </div>
                    <div class="news_second_col col-sm-10">
                        <p><?php echo $news_example->getNewsShortPost() ?> </p>
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
                                <li>dupa</li>
                                <li>dupa</li>
                            </ul>
                        </div>
                    </div>
                    <div class="about_col_3 col-xs-3">
                        <div class="d-flex h-100 align-items-center justify-content-center">
                            <ul>
                                <li>dupa</li>
                                <li>dupa</li>
                            </ul>
                        </div>
                    </div>
                    <div class="about_col_3 col-xs-3">
                        <div class="d-flex h-100 align-items-center justify-content-center">
                            <ul>
                                <li>dupa</li>
                                <li>dupa</li>
                            </ul>
                        </div>
                    </div>
                    <div class="about_col_3 col-xs-3">
                        <div class="d-flex h-100 align-items-center justify-content-center">
                            <ul>
                                <li>dupa</li>
                                <li>dupa</li>
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
        <script src="frontend/js/functions/add_new_news.js"></script>
    </body>
</html>