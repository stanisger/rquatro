<!DOCTYPE HTML> 
<html lang="en">
    <head>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        <title>RQUATRO</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="robots" content="index, follow"/>
        <meta name="keywords" content=""/>
        <meta name="description" content=""/>

        <!--=============== favicons ===============-->
        <link rel="shortcut icon" href="<?php bloginfo('template_url') ?>/images/favicon.ico">
         <?php wp_head(); ?>
    </head>
    <body>
        <!-- loader -->
        <div class="loader">
            <div id="movingBallG">
                <div class="movingBallLineG"></div>
                <div id="movingBallG_1" class="movingBallG"></div>
            </div>
        </div>
        <!-- loader end -->
        <!--================= main start ================-->
        <div id="main">
            <!--=============== header ===============-->	
            <header>
                <!-- header-inner  -->
                <div class="header-inner">
                    <!-- header logo -->
                    <div class="logo-holder">
                        <a href="index.html"><img src="<?php bloginfo('template_url') ?>/images/logo.png" alt=""></a>
                    </div>
                    <!-- header logo end -->
                    <!-- mobile nav button -->
                    <div class="nav-button-holder">
                        <div class="nav-button vis-m"><span></span><span></span><span></span></div>
                    </div>
                    <!-- mobile nav button end -->
                    <!-- navigation  -->
                    <div class="nav-holder">
                        <nav>
                            <ul>
                                <li>
                                    <a href="index.html" class="act-link">Home</a>
                                    <!--second level -->
                                    <ul>
                                        <li><a href="index.html">Image</a></li>
                                        <li><a href="index2.html">Slider</a></li>
                                        <li><a href="index3.html">Slideshow</a></li>
                                        <li><a href="index4.html">Youtube video</a></li>
                                        <li><a href="index5.html">Vimeo video</a></li>
                                        <li>
                                            <a href="#">One page</a>
                                            <ul>
                                                <li><a href="onepage-1.html">Image</a></li>
                                                <li><a href="onepage-2.html">Slider</a></li>
                                                <li><a href="onepage-3.html">Slideshow</a></li>
                                                <li><a href="onepage-4.html">Youtube video</a></li>
                                                <li><a href="onepage-5.html">Vimeo video</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <!--second level end-->
                                </li>
                                <li>
                                    <a href="portfolio.html">Portfolio</a>
                                    <!--second level -->
                                    <ul>
                                        <li>
                                            <a href="#">Horizontal</a>
                                            <!--third level -->
                                            <ul>
                                                <li><a href="portfolio.html">2 columns</a></li>
                                                <li><a href="portfolio2.html">3 columns</a></li>
                                                <li><a href="portfolio3.html">1 column</a></li>
                                            </ul>
                                            <!--third level end-->
                                        </li>
                                        <li>
                                            <a href="#">Vertical</a>
                                            <!--third level -->
                                            <ul>
                                                <li><a href="portfolio4.html">3 columns</a></li>
                                                <li><a href="portfolio5.html">4 columns</a></li>
                                                <li><a href="portfolio6.html">5 columns</a></li>
                                            </ul>
                                            <!--third level end-->
                                        </li>
                                        <li><a href="portfolio-parallax.html">Parallax</a></li>
                                        <li>
                                            <a href="portfolio-single.html">Single</a>
                                            <!--third level -->
                                            <ul>
                                                <li><a href="portfolio-single.html">Boxed Gallery</a></li>
                                                <li><a href="portfolio-single2.html">Horizontal</a></li>
                                                <li><a href="portfolio-single3.html">Horizontal 3d</a></li>
                                                <li><a href="portfolio-single4.html">Horizontal style2</a></li>
                                                <li><a href="portfolio-single5.html">Boxed Slider</a></li>
                                                <li><a href="portfolio-single6.html">Boxed video</a></li>
                                                <li><a href="portfolio-single7.html">Fullsreen slider</a></li>
                                                <li><a href="portfolio-single8.html">Fullsreen video</a></li>
                                            </ul>
                                            <!--third level end-->
                                        </li>
                                    </ul>
                                    <!--second level end-->
                                </li>
                                <li>
                                    <a href="about.html">About us </a>
                                    <!-- Scroll navigation  -->
                                </li>
                                <li><a href="services.html">Services</a></li>
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li>
                                    <a href="#">Pages</a>
                                    <!--second level end-->
                                    <ul>
                                        <li><a href="team-single.html">Team single</a></li>
										<li><a href="team.html">Team</a></li>
                                        <li><a href="blog-parallax.html">Blog parallax</a></li>
                                        <li><a href="blog-single.html">Blog single</a></li>
                                        <li><a href="404.html">404</a></li>
                                    </ul>
                                    <!--second level end-->
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!-- navigation  end -->
                </div>
                <!-- header-inner  end -->
                <!-- share button  -->
                <div class="show-share isShare">
                    <i class="fa fa-share-alt"></i>         
                </div>
                 <div class="idiomas">
                    <select name="idiomas" id="idiomas">
                        <option value="ESP">ESP</option>
                         <option value="ING">ING</option>
                    </select>       
                </div>
                <!-- share  end-->
            </header>