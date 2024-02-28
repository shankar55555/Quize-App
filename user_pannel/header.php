<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="#" class="logo">Quize</a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section">
                            <a href="#welcome" class="active">Home</a>
                        </li>
                        <li class="scroll-to-section"><a href="#about">About</a></li>
                        <li class="scroll-to-section">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="position: relative; top: -8px;">
                                category
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <!-- <div class="frontdivision"> -->
                                <a class="dropdown-item text-danger" href="frontend.php" id="frontend">Frontend &raquo;
                                </a>
                                <!-- <ul class="inside_menu" style="position: absolute; left: 217px; width: 137px; top: 0px;">
                                        <li class="border bg-light"><a class="text-danger" href="#">HTML</a></li>
                                        <li class="border bg-light"><a class="text-danger" href="#">CSS</a></li>
                                        <li class="border bg-light"><a class="text-danger" href="#">java script</a></li>
                                    </ul></div> -->
                                <a class="dropdown-item text-danger" href="#">Backhend</a>
                                <a class="dropdown-item text-danger" href="#">Graphic degining</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="#">Full stack developer</a>
                            </div>
                        </li>
                        <li class="scroll-to-section">
                            <a href="#achivements">Achivements</a>
                        </li>
                        <li class="scroll-to-section">
                            <a href="#services">Services</a>
                        </li>
                        <li class="scroll-to-section">
                            <a href="#contact-us">Contact Us</a>
                        </li>

                        <li class="text-danger" id="username" style="position: relative; top: 8px;">
                            <?php
                            echo !empty($_SESSION['username']) ? $_SESSION['username'] : '';
                            ?>
                        </li>

                        <li class="nav-item dropdown">
                            <?php
                            if (!empty($_SESSION['username'])) { ?>
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="../user_pannel/assets/images_for_landing/profile.png" width="30px" alt="">
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item text-danger" href="profile.php">My profile</a>
                                        <a class="dropdown-item text-danger" href="#">My Achivements</a>
                                        <a class="dropdown-item text-danger" href="#">Account setting</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item text-danger" id="logout_btn" href="">Logout</a>
                                    </div>
                                </div>
                            <?php    } else { ?>
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="../user_pannel/assets/images_for_landing/profile.png" width="30px" alt="">
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item text-danger" id="login_btn" href="login.php">Login
                                        </a>
                                    </div>
                                </div>
                            <?php } ?>
                        </li>
                    </ul>
                    <a class="menu-trigger">
                    <span>Menu</span>
                    </a>
                </nav>
            </div>
        </div>
    </div>
</header>