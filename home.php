<?php
/*
Template Name: home-template
*/
get_header('header'); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="main-container">
                <div class="main-info">
                    <div class="bonus-button">
                        <div class="bonus-info">
                            <span>Grab your essay with<br>
                                With our special</span><br/>
                            <span class="big-info">10% off</span>
                        </div>
                        <div class="order-button main-order header-btn--order" onclick="location.href='/order.html';">
                            <span>Order now!</span></div>
                    </div>
                    <?php $counter = 0; ?>
                    <?php if (have_posts()): while (have_posts()): the_post(); ?>
                        <div class="main-article">

                            <div class="article-header">
                                <img src="/wp-content/themes/wp_theme_99papers/img/folded-newspaper.png">
                                <a href="<?php the_permalink() ?>"><?php the_title($before = '', $after = '', $echo = true) ?></a>
                            </div>
                            <div class="article-date">
                                <?php the_time('j.m.Y'); ?>
                            </div>
                            <div class="article-info">
                                <?php do_excerpt(get_the_excerpt(), 50); ?>
                            </div>
                        </div>
                        <?php $counter = $counter + 1; ?>
                        <?php if (2 == $counter) : { ?>
                            <div class="bonus-button second-button">
                                <div class="order-button second-order header-btn--inquiry"
                                     onclick="location.href='/inquiry.html';">
                                    <div class="button-name">PLACE AN INQUIRY</div>
                                </div>
                                <div class="bonus-info second-info">
                                    <br/>
                                    <span>and discuss your<br/>
                                        assigment with a writer!</span>
                                    <br/>
                                    <br/>
                                </div>
                            </div>
                        <?php } endif; ?>
                    <?php endwhile; endif; ?>
                    <?php $counter = $counter + 1; ?>


                    <div class="main-article">
                        <div class="edu-calc">
                            <div class="calc-header">
                                <div class="calc-img"><img
                                            src="/wp-content/themes/wp_theme_99papers/img/calculator.png"></div>
                                <div class="calc-info"> USE THIS CALCULATOR TO CHECK<br> THE PRICE OF YOUR ORDER</div>

                            </div>
                        </div>

                    </div>
                    <?php
                    the_posts_pagination( $args = array(
                        'show_all' => false,
                        'prev_next' => true,
                        'end_size' => 1,
                        'mid_size' => 1,
                        'before_page_number' => '',
                        'after_page_number' => '',
                        'prev_text' => '<',
                        'next_text' =>  '>',
                        'screen_reader_text' => ' ' ,
                    ));
                    ?>
                </div>

                <div class="right-info">
                    <div class="Rectangle">
                        <div class="Rectangle-container">
                            <table class="Rectangle-pointer">
                                <tr>
                                    <td><img src="/wp-content/themes/wp_theme_99papers/img/rectangle-pointer-like.png">
                                    </td>
                                    <td class="Rectangle-text">100% Fresh and Original!</td>
                                </tr>
                                <tr>
                                    <td><img src="/wp-content/themes/wp_theme_99papers/img/rectangle-pointer-clock.png">
                                    </td>
                                    <td class="Rectangle-text">Get It Done on Time!</td>
                                </tr>
                                <tr>
                                    <td><img src="/wp-content/themes/wp_theme_99papers/img/rectangle-pointer-lock.png">
                                    </td>
                                    <td class="Rectangle-text">Privacy Is the Word!</td>
                                </tr>
                                <tr>
                                    <td><img src="/wp-content/themes/wp_theme_99papers/img/rectangle-pointer-hand.png">
                                    </td>
                                    <td class="Rectangle-text">Support? Yes, Please</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="Rectangle-headline">
                        <img src="/wp-content/themes/wp_theme_99papers/img/chat.png"> <span>TESTIMONIALS</span>
                    </div>
                    <div class="Rectangle-article">
                        <div class="Rectangle-article-text Rectangle-first-article">
                            Portland ugh fashion axe Helvetica, YOLO Echo Park Austin gastropub roof party.
                            Meggings cred before they sold out messenger bag, ugh fashion axe
                            Pitchfork tousled freegan asymmetrical literally twee Thundercats.
                            Whatever Blue Bottle Neutra irony 8-bit. Kogi ethnic ugh fas.
                        </div>
                        <div class="Rectangle-article-footer">
                            <div class="Rectangle-profile">
                                <div class="Rectangle-author">
                                    <div class="Rectangle-image">
                                        <img src="/wp-content/themes/wp_theme_99papers/img/4.jpg" alt="avatar"
                                             title="Author avatar">

                                    </div>
                                    <div class="Rectangle-author-detail">
                                        <p class="client">Matthew</p>
                                        <p class="company">Brooklyn</p>
                                    </div>
                                    <div class="Rectangle-stars">
                                        <img src="/wp-content/themes/wp_theme_99papers/img/stars.png" alt="avatar"
                                             title="stars">
                                    </div>

                                </div>
                            </div>
                            <div class="Rectangle-stars"></div>
                        </div>
                    </div>
                    <div class="Rectangle-article ">
                        <div class="Rectangle-article-text">
                            Portland ugh fashion axe Helvetica, YOLO Echo Park Austin gastropub roof party.
                            Meggings cred before they sold out messenger bag, ugh fashion axe
                            Pitchfork tousled freegan asymmetrical literally twee Thundercats.
                            Whatever Blue Bottle Neutra irony 8-bit. Kogi ethnic ugh fas.
                        </div>
                        <div class="Rectangle-article-footer">
                            <div class="Rectangle-profile">
                                <div class="Rectangle-author">
                                    <div class="Rectangle-image">
                                        <img src="/wp-content/themes/wp_theme_99papers/img/4.jpg" alt="avatar"
                                             title="Author avatar">
                                    </div>
                                    <div class="Rectangle-author-detail">
                                        <p class="client">Matthew</p>
                                        <p class="company">Brooklyn</p>
                                    </div>
                                    <div class="Rectangle-stars">
                                        <img src="/wp-content/themes/wp_theme_99papers/img/stars.png" alt="avatar"
                                             title="stars">
                                    </div>


                                </div>
                            </div>
                            <div class="Rectangle-stars"></div>
                        </div>
                    </div>
                    <div class="Rectangle-headline">
                        <img src="/wp-content/themes/wp_theme_99papers/img/room-service.png">
                        <span>Popular services</span>
                    </div>
                    <div class="Rectangle-pointer-bottom">
                        <div class="Rectangle-concret-pointer">
                            <img src="/wp-content/themes/wp_theme_99papers/img/forward.png">
                            Cheap Essay Writing Service
                        </div>
                        <div class="Rectangle-concret-pointer">
                            <img src="/wp-content/themes/wp_theme_99papers/img/forward.png">
                            Research Paper Writing Service
                        </div>
                        <div class="Rectangle-concret-pointer">
                            <img src="/wp-content/themes/wp_theme_99papers/img/forward.png">
                            Term Paper Writing Service
                        </div>
                        <div class="Rectangle-concret-pointer">
                            <img src="/wp-content/themes/wp_theme_99papers/img/forward.png"> Thesis Writing Service
                        </div>
                        <div class="Rectangle-concret-pointer">
                            <img src="/wp-content/themes/wp_theme_99papers/img/forward.png"> Custom Dissertations
                        </div>
                        <div class="Rectangle-concret-pointer">
                            <img src="/wp-content/themes/wp_theme_99papers/img/forward.png"> Coursework
                            Writing
                        </div>
                        <div class="Rectangle-concret-pointer">
                            <img src="/wp-content/themes/wp_theme_99papers/img/forward.png"> Admission Essay Writing
                        </div>
                        <div class="Rectangle-concret-pointer">
                            <img src="/wp-content/themes/wp_theme_99papers/img/forward.png"> Resume Writing Service
                        </div>
                    </div>
                </div>
            </div>
        </main><!-- #main -->
    </div><!-- #primary -->


<?php
get_footer();
