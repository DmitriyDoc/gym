<?php
    get_header();
    if ( is_home() ) :
?>

        <!-- Breadcrumb Section Begin -->
        <section class="breadcrumb-section set-bg" data-setbg="<?php echo gym_assets_path('img/breadcrumb-bg.jpg'); ?>">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2>Our Blog</h2>
                        <?php echo get_template_part('includes/tmp/breadcrumbs')?>
                    </div>
                </div>
            </div>
        </section>
        <!-- Breadcrumb Section End -->

        <!-- Blog Section Begin -->
        <section class="blog-section spad">
            <div class="container">
                <div class="row">
                    <?php if ( have_posts() ) : ?>
                        <div class="col-lg-8 p-0">
                            <?php while ( have_posts() ) :
                                    the_post();
                            ?>
                            <div class="blog-item">
                                <div class="bi-pic">
                                    <?php the_post_thumbnail('medium', []); ?>
                                </div>
                                <div class="bi-text">
                                    <h5><a href="<?php the_permalink(); ?>" title=" <?php the_title_attribute(); ?>"> <?php the_title(); ?> </a></h5>
                                    <ul>
                                        <li>by <?php the_author(); ?></li>
                                        <li><?php echo get_the_date('M,d,Y'); ?></li>
                                        <li><?php echo get_comments_number(); ?> Comment</li>
                                    </ul>
                                    <p> <?php echo get_the_excerpt(); ?> </p>
                                </div>
                            </div>
                            <?php

                                endwhile; ?>

                            <?php the_posts_pagination(); ?>
                        </div>

                        <?php
                            else :
                                echo get_template_part('includes/tmp/no-posts');
                            endif;
                        ?>
                    <div class="col-lg-4 col-md-8 p-0">
                        <?php echo get_template_part('includes/tmp/sidebar')?>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Section End -->


                    <?php
                        else :
                    ?>


        <!-- ChoseUs Section Begin -->
        <section class="choseus-section spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <span>Why chose us?</span>
                            <h2>PUSH YOUR LIMITS FORWARD</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="cs-item">
                            <span class="flaticon-034-stationary-bike"></span>
                            <h4>Modern equipment</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                dolore facilisis.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="cs-item">
                            <span class="flaticon-033-juice"></span>
                            <h4>Healthy nutrition plan</h4>
                            <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel
                                facilisis.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="cs-item">
                            <span class="flaticon-002-dumbell"></span>
                            <h4>Proffesponal training plan</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                dolore facilisis.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="cs-item">
                            <span class="flaticon-014-heart-beat"></span>
                            <h4>Unique to your needs</h4>
                            <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel
                                facilisis.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ChoseUs Section End -->

        <!-- Classes Section Begin -->
        <section class="classes-section spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <span>Our Classes</span>
                            <h2>WHAT WE CAN OFFER</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="class-item">
                            <div class="ci-pic">
                                <img src="img/classes/class-1.jpg" alt="">
                            </div>
                            <div class="ci-text">
                                <span>STRENGTH</span>
                                <h5>Weightlifting</h5>
                                <a href="#"><i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="class-item">
                            <div class="ci-pic">
                                <img src="img/classes/class-2.jpg" alt="">
                            </div>
                            <div class="ci-text">
                                <span>Cardio</span>
                                <h5>Indoor cycling</h5>
                                <a href="#"><i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="class-item">
                            <div class="ci-pic">
                                <img src="img/classes/class-3.jpg" alt="">
                            </div>
                            <div class="ci-text">
                                <span>STRENGTH</span>
                                <h5>Kettlebell power</h5>
                                <a href="#"><i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="class-item">
                            <div class="ci-pic">
                                <img src="img/classes/class-4.jpg" alt="">
                            </div>
                            <div class="ci-text">
                                <span>Cardio</span>
                                <h4>Indoor cycling</h4>
                                <a href="#"><i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="class-item">
                            <div class="ci-pic">
                                <img src="img/classes/class-5.jpg" alt="">
                            </div>
                            <div class="ci-text">
                                <span>Training</span>
                                <h4>Boxing</h4>
                                <a href="#"><i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ChoseUs Section End -->

        <!-- Banner Section Begin -->
        <section class="banner-section set-bg" data-setbg="img/banner-bg.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="bs-text">
                            <h2>registration now to get more deals</h2>
                            <div class="bt-tips">Where health, beauty and fitness meet.</div>
                            <a href="#" class="primary-btn  btn-normal">Appointment</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Banner Section End -->

        <!-- Pricing Section Begin -->
        <section class="pricing-section spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <span>Our Plan</span>
                            <h2>Choose your pricing plan</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-8">
                        <div class="ps-item">
                            <h3>Class drop-in</h3>
                            <div class="pi-price">
                                <h2>$ 39.0</h2>
                                <span>SINGLE CLASS</span>
                            </div>
                            <ul>
                                <li>Free riding</li>
                                <li>Unlimited equipments</li>
                                <li>Personal trainer</li>
                                <li>Weight losing classes</li>
                                <li>Month to mouth</li>
                                <li>No time restriction</li>
                            </ul>
                            <a href="#" class="primary-btn pricing-btn">Enroll now</a>
                            <a href="#" class="thumb-icon"><i class="fa fa-picture-o"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-8">
                        <div class="ps-item">
                            <h3>12 Month unlimited</h3>
                            <div class="pi-price">
                                <h2>$ 99.0</h2>
                                <span>SINGLE CLASS</span>
                            </div>
                            <ul>
                                <li>Free riding</li>
                                <li>Unlimited equipments</li>
                                <li>Personal trainer</li>
                                <li>Weight losing classes</li>
                                <li>Month to mouth</li>
                                <li>No time restriction</li>
                            </ul>
                            <a href="#" class="primary-btn pricing-btn">Enroll now</a>
                            <a href="#" class="thumb-icon"><i class="fa fa-picture-o"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-8">
                        <div class="ps-item">
                            <h3>6 Month unlimited</h3>
                            <div class="pi-price">
                                <h2>$ 59.0</h2>
                                <span>SINGLE CLASS</span>
                            </div>
                            <ul>
                                <li>Free riding</li>
                                <li>Unlimited equipments</li>
                                <li>Personal trainer</li>
                                <li>Weight losing classes</li>
                                <li>Month to mouth</li>
                                <li>No time restriction</li>
                            </ul>
                            <a href="#" class="primary-btn pricing-btn">Enroll now</a>
                            <a href="#" class="thumb-icon"><i class="fa fa-picture-o"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Pricing Section End -->

        <!-- Gallery Section Begin -->
        <div class="gallery-section">
            <div class="gallery">
                <div class="grid-sizer"></div>
                <div class="gs-item grid-wide set-bg" data-setbg="img/gallery/gallery-1.jpg">
                    <a href="img/gallery/gallery-1.jpg" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
                </div>
                <div class="gs-item set-bg" data-setbg="img/gallery/gallery-2.jpg">
                    <a href="img/gallery/gallery-2.jpg" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
                </div>
                <div class="gs-item set-bg" data-setbg="img/gallery/gallery-3.jpg">
                    <a href="img/gallery/gallery-3.jpg" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
                </div>
                <div class="gs-item set-bg" data-setbg="img/gallery/gallery-4.jpg">
                    <a href="img/gallery/gallery-4.jpg" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
                </div>
                <div class="gs-item set-bg" data-setbg="img/gallery/gallery-5.jpg">
                    <a href="img/gallery/gallery-5.jpg" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
                </div>
                <div class="gs-item grid-wide set-bg" data-setbg="img/gallery/gallery-6.jpg">
                    <a href="img/gallery/gallery-6.jpg" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
                </div>
            </div>
        </div>
        <!-- Gallery Section End -->

        <!-- Team Section Begin -->
        <section class="team-section spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="team-title">
                            <div class="section-title">
                                <span>Our Team</span>
                                <h2>TRAIN WITH EXPERTS</h2>
                            </div>
                            <a href="#" class="primary-btn btn-normal appoinment-btn">appointment</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="ts-slider owl-carousel">
                        <div class="col-lg-4">
                            <div class="ts-item set-bg" data-setbg="img/team/team-1.jpg">
                                <div class="ts_text">
                                    <h4>Athart Rachel</h4>
                                    <span>Gym Trainer</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="ts-item set-bg" data-setbg="img/team/team-2.jpg">
                                <div class="ts_text">
                                    <h4>Athart Rachel</h4>
                                    <span>Gym Trainer</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="ts-item set-bg" data-setbg="img/team/team-3.jpg">
                                <div class="ts_text">
                                    <h4>Athart Rachel</h4>
                                    <span>Gym Trainer</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="ts-item set-bg" data-setbg="img/team/team-4.jpg">
                                <div class="ts_text">
                                    <h4>Athart Rachel</h4>
                                    <span>Gym Trainer</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="ts-item set-bg" data-setbg="img/team/team-5.jpg">
                                <div class="ts_text">
                                    <h4>Athart Rachel</h4>
                                    <span>Gym Trainer</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="ts-item set-bg" data-setbg="img/team/team-6.jpg">
                                <div class="ts_text">
                                    <h4>Athart Rachel</h4>
                                    <span>Gym Trainer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Team Section End -->


<?php
    endif;
    get_footer();
?>
