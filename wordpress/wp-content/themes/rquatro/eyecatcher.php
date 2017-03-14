 <!--=============== wrapper ===============-->	
            <div id="wrapper">
                <!-- content-holder  -->
                <div class="content-holder">
                    <!-- Page title -->
                    <div class="dynamic-title"> <?php the_field('titlePage') ?></div>
                    <!-- Page title  end--> 
                    <!-- content  -->
                    <div class="content full-height no-bg-con">
                        <!-- Hero section   -->
                        <div class="hero-wrap">
                            <!-- hero-wrap-image-slider-holder  end -->
                            <div class="hero-wrap-image-slider-holder">
                                <div class="overlay"></div>
                                <!-- hero-wrap-image-slider  -->
                                <div class="hero-wrap-image-slider">
                                    <!-- imagen-->
                                    <?php if( have_rows('slide') ): ?>
                                      <?php while( have_rows('slide') ): the_row();
                                        $image = get_sub_field('image');
                                        ?> 
                                    <div class="item">
                                        <div class="bg"  data-bg=" <?php echo $image; ?>" data-top-bottom="transform: translateY(300px);" data-bottom-top="transform: translateY(-300px);"></div>
                                    </div>
                                    <?php endwhile; else: ?>
                                    <?php endif; ?> 
                                    <!-- imagen ends-->

                                </div>
                                <!-- hero-wrap-image-slider  end -->
                            </div>
                            <!-- hero-wrap-image-slider-holder  end -->
                            <!-- hero-wrap-image-slider-holder  end -->
                            <div class="hero-wrap-text-slider-holder">
                                <!-- hero-wrap-image-slider  -->
                                <div class="hero-wrap-text-slider">
                                    <!-- texto -->
                                     <?php if( have_rows('slide') ): ?>
                                     <?php while( have_rows('slide') ): the_row();
                                        $title = get_sub_field('title');
                                        $subtitle = get_sub_field('subtitle');
                                    ?> 

                                        <div class="item">
                                            <div class="hero-wrap-item center-item">
                                                <h2><?php echo $title; ?></h2>
                                                <h3><?php echo $subtitle; ?></h3>
                                                <!-- link -->
                                                 <?php if( have_rows('link') ): ?>
                                                 <?php while( have_rows('link') ): the_row();
                                                    $text = get_sub_field('text');
                                                    $link = get_sub_field('link');
                                                ?> 
                                                        <a href="<?php echo $link; ?>" class="hero-link"><?php echo $text; ?></a>
                                                <?php endwhile; else: ?>
                                                <?php endif; ?> 
                                            </div>
                                        </div>
                                    <?php endwhile; else: ?>
                                    <?php endif; ?> 
                                    <!-- texto ends-->
                                </div>
                                <!-- hero-wrap-text-slider  end -->
                                <!--  navigation -->
                                <div class="customNavigation fhsln">
                                    <a class="prev-slide transition"><i class="fa fa-angle-left"></i></a>
                                    <a class="next-slide transition"><i class="fa fa-angle-right"></i></a>
                                </div>
                                <!--  navigation end-->
                            </div>
                            <!-- hero-wrap-image-text-holder  end -->                          
                        </div>
                        <!-- Hero section   end -->
                    </div>
                    <!-- content end -->