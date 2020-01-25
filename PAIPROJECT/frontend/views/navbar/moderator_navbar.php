<div class="navpart">
    <div class="container" id="navbar_container">
        <nav class="navbar p-0">
            <div class="nav_row row m-0">
                <div class="nav_col_3 col-xs-3 p-0 text-center">
                    <div class="d-flex h-100 align-items-center justify-content-center">
                        <a href="?page=news" class="navbar-brand p-0 m-0 h-100">
                            <img src="sources/img/logo_bw.png" id="logo">
                        </a>
                    </div>
                </div>

                <div class="nav_col_2 col-xs-2 p-0 text-center">
                    <div class="d-flex h-100 align-items-center justify-content-center">
                        <a class="" href="?page=moderator_news">Mod_News</a>
                    </div>
                </div>
                <div class="nav_col_2 col-xs-2 p-0 text-center">
                    <div class="d-flex h-100 align-items-center justify-content-center">
                        <a class="" href="?page=moderator_events">Mod_Events</a>
                    </div>
                </div>
                <div class="nav_col_2 col-xs-2 p-0 text-center">
                    <div class="d-flex h-100 align-items-center justify-content-center">
                        <a class="" href="?page=moderator_galleries">Mod_Galleries</a>
                    </div>
                </div>

                <div class="nav_col_3 col-xs-3 p-0 text-center">
                    <div class="d-flex h-100 align-items-center justify-content-center">
                        <div class="dropdown show">
                            <a class="" href="#" role="button"
                               id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                               aria-expanded="false">
                                <i class="fas fa-bars fa-3x" id="hamburger_wrap"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-left" aria-labelledby="dropdownMenuLink">
                                <!--                                        <form action="?page=logout" method="post">-->
                                <?php if($_SESSION['role']==='moderator'|| $_SESSION['role']==='admin'):?>
                                    <a class="dropdown-item" href="?page=moderator_panel" ><p class="text-center">Moderator Panel</p></a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="?page=news" ><p class="text-center">User Panel</p></a>
                                    <div class="dropdown-divider"></div>
                                <?php endif;?>
                                <?php if($_SESSION['role']==='admin'):?>
                                    <a class="dropdown-item" href="?page=admin_panel" ><p class="text-center">Admin Panel</p></a>
                                    <div class="dropdown-divider"></div>
                                <?php endif;?>
                                <a class="dropdown-item text-primary" href="?page=logout" >
                                    <p class="text-center"><?php echo "Logout(" . $_SESSION['nickname'] .")" ?> </p>
                                </a>
                                <!--                                        <p class="text-center">Logout</p>-->
                                <!--                                            <button type="submit"><p class="text-center">Logout</p></button>-->
                                <div class="dropdown-divider"></div>

                                <!--                                        </form>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>
