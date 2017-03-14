<!--∆∆∆∆ STANDS CUSTUM  ∆∆-->
<div class="content">
    <section id="sec1">
        <!-- section number   -->
        <div class="sect-subtitle right-align-dec" data-top-bottom="transform: translateY(200px);" data-bottom-top="transform: translateY(-200px);"><span>01</span></div>
        <!-- section number  end  -->
        <!--  container  --> 
        <div class="container">
             <?php if( have_rows('main') ): ?>
             <?php while( have_rows('main') ): the_row();
              ?>
                    <div class="row">  
                        <div class="col-md-4">
                            <!-- single slider  -->
                            <div class="parallax-box slider-box ">
                                <div class="single-slider-holder">
                                    <div class="single-slider">
                                        <?php if( have_rows('images') ): ?>
                                         <?php while( have_rows('images') ): the_row();
                                            $imagen = get_sub_field('imagen');
                                          ?>
                                        <!-- images -->
                                        <div class="item">
                                            <img src="<?php echo $image; ?>" alt="">
                                        </div>
                                        <!--imges-->
                                        <?php endwhile; else: ?>
                                        <?php endif; ?>  
                                    </div>
                                    <div class="customNavigation ssn">
                                        <a class="prev-slide transition"><i class="fa fa-angle-left"></i></a>
                                        <a class="next-slide transition"><i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                                <!-- single slider  end -->
                            </div>
                        </div>
                        <?php if( have_rows('text') ): ?>
                         <?php while( have_rows('text') ): the_row();
                            $title = get_sub_field('title');
                            $textContet= get_sub_field('textContet'); 
                            $textContetProces= get_sub_field('textContetProces');  
                          ?>
                            <div class="col-md-8">
                                <!-- section title  -->
                                <h2 class="section-title"> <?php echo $title; ?></h2>
                                <!-- section title  end -->
                                <?php echo $textContet; ?>
                                <div class="process-box">
                                    <h3>NUESTRO PROCESO</h3>
                                    <!-- <ul class="creat-list">
                                        <li><a href="#">Idea & Start</a></li>
                                        <li><a href="#">Design & Crate</a></li>
                                        <li><a href="#">Build & Finish</a></li>
                                    </ul> -->
                                    <?php echo $textContetProces; ?>
                                </div>
                                 <?php if( have_rows('linkbtn') ): ?>
                                 <?php while( have_rows('linkbtn') ): the_row();
                                    $link = get_sub_field('link');
                                    $text= get_sub_field('text');  
                                  ?>
                                   <a href="<?php echo $link; ?>" class="btn anim-button fl-l"><span><?php echo $text; ?></span><i class="fa fa-long-arrow-right"></i></a>
                                <?php endwhile; else: ?>
                                <?php endif; ?> 
                            </div>
                           <?php endwhile; else: ?>
                            <?php endif; ?> 
                    </div>
              <?php endwhile; else: ?>
              <?php endif; ?>        
        </div>
        <!--  container end  -->  
    </section>
</div> 
 <!--∆∆∆∆ STANDS CUSTUM  ENDS∆∆