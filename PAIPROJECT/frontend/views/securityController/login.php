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
        <link type="text/css" rel="stylesheet" href="frontend/css/login_css.css">
        <link href="https://fonts.googleapis.com/css?family=Noto+Serif+JP&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/608fe230d5.js" crossorigin="anonymous"></script>

        <title>Hello, world!</title>
    </head>
    <body>
        <div class="logo">
            <div class="logo_container container my-auto">
                <div class="d-flex justify-content-center align-content-center">
                    <img src="sources/img/logo_bw.png" alt="logo img" id="logo_img">
                </div>
            </div>
        </div>

        <div class="form">
            <div class="form_container container">
                <div class="row h-75 align-items-center justify-content-center">
                    <form class="" action="?page=login" method="post">
                        <div class="form-group form-inline">
                            <div class="">
                                <?php foreach ($messages as $message):?>
                                <div><?php echo $message;?></div>
                                <?php endforeach;?>

                            </div>
                            <label for="">EMAIL</label>
                            <input type="text" placeholder="Insert your email" name="login">
                        </div>
                        <div class="form-group form-inline">
                            <label for="">PASSWORD</label>
                            <input type="password" placeholder="Repeat password" width="400px" name="password">
                        </div>
                        <div class="row align-items-center justify-content-center">
                            <button class="btn btn-primary mr-5 w-25" type="submit">Accept</button>
                            <button class="btn btn-primary ml-5 w-25" type="submit">Cancel</button>
                        </div>
                    </form>
                    <form method="post" action="?page=displayRegistration">
                        <button type="submit">REGISTER</button>
                    </form>
                </div>
<!--                <div class="row h-75 align-items-center justify-content-center">-->
<!--                    <form method="post" action="?page=displayRegistration">-->
<!--                        <button type="submit">REGISTER</button>-->
<!--                    </form>-->
<!--                </div>-->


            </div>
        </div>

        <div class="about">
            <div class="about_container container">
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

            <div class="footer">
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
            </div>
        </div>


        <!--        <footer class="footer">-->
        <!--            <div class="footer_container container">-->

        <!--        </footer>-->


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