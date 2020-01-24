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
        <link type="text/css" rel="stylesheet" href="frontend/css/galleries_css.css"> <!-- moderator -->
        <link type="text/css" rel="stylesheet" href="frontend/css/moderator_galleries_css.css"> <!-- moderator -->


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
            <!--            <button onclick="addImages()" >dwadwa</button>-->
            <br>
            <div class="row m-0 justify-content-center">
                <button type="button" class="btn btn-primary" id="add_image_button" onclick="addImages()">Add Image
                </button>
            </div>

            <br>
            <br>
            <div class="container w-100 p-0 text-center">
                <div class="row justify-content-center" id="add_image_container" style="display:none;">
                    <form action="?page=add_galleries_image" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="gallery_name" class="text-light">Gallery Name</label>
                            <select class="form-control " name="gallery_name">
                                <?php foreach ($gallery as $gallery_example): ?>
                                    <option><?php echo $gallery_example->getName(); ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <input type="text" placeholder="Wished file name" name="wished_file_name">
                            <input class="btn btn-light" type="file" placeholder="Upload Image" name="uploaded_file" id="uploaded_file">
                        </div>
                        <button type="submit" class="btn btn-primary">Click to add Image</button>
                        <button type="button" class="btn btn-primary" onclick="go_to_moderator_galleries()">Cancel</button>
                    </form>
                </div>
            </div>

            <div class="gallery_row row w-100 h-100  m-0 justify-content-center" id="moderator_galleries_content">
                <div class="flex-column">
                    <?php foreach ($gallery as $gallery_example): ?>
                        <div class="row justify-content-center">
                            <p class="text-light"><?php echo $gallery_example->getName() ?></p>
                        </div>
                        <br>
                        <div class="gallery_loop<?php echo $gallery_example->getId() ?> my-auto"
                             id="gallery_loop_container">
                            <a onclick="swap_left('0',<?php echo $gallery_example->getId() ?>)">
                                <i class="fas fa-chevron-left text-primary mr-5"></i>
                            </a>
                            <img src="<?php echo $gallery_example->getGalleryImageDirectoryByIndex(0); ?>"
                                 alt="image" style="width:250px; height:250px;">
                            <a onclick="swap_right('0',<?php echo $gallery_example->getId() ?>)">
                                <i class="fas fa-chevron-right text-primary ml-5"></i>
                            </a>
                            <br>
                            <hr>
                        </div>
                        <div class="row justify-content-center">
                            <button class="btn btn-primary" onclick="deleteImage(<?php echo $gallery_example->getId() ?>)">DELETE IMAGE</button>
                        </div>
                        <br>
                    <?php endforeach; ?>
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
        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>

        <script src="frontend/js/functions/gallery_swap_images.js"></script>
        <script src="frontend/js/functions/add_new_images.js"></script>
        <script src="frontend/js/functions/moderator_go_to.js"></script>
        <script src="frontend/js/functions/delete_image.js"></script>
    </body>
</html>