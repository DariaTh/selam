<?php /* Template Name: Blog */ ?>
<?php get_header(); ?>

    <div id="blog-page">
        <section class="inner-hero" >
            <div class="hero-back" style="background-image: url(<?php echo get_stylesheet_directory_uri()."/img/blog-hero.png"; ?>)"></div>
            <div class="hero-title">
                <p data-aos="fade-left" style="color: #28404F"> המגזין  </p>
                <p data-aos="fade-right"> נשארים מעודכנים </p>
            </div>

            <div class="inner-hero_mobile">
                <img src="<?php echo get_stylesheet_directory_uri()."/img/blog-hero-mobile.jpg"; ?>" width="100%" alt="Two men">
            </div>

            <a class="moveToNextSectionBtn" href="#sectionForm"><i class="fa fa-angle-down"></i></a>
        </section>

        <section id="sectionForm" class="section-form-1">
            <div class="wrapper-bg"></div>
            <div class="wrapper">
                <div class="form-wrapper" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="500">
                    <h1 class="title">
                        אנחנו כאן בשבילכם!
                    </h1>
                    <?php require get_template_directory() . '/templates/short-form.php'; ?>
                </div>
            </div>
        </section>

        <section class="posts">
            <div class="wrapper">

                <h1 class="title title-lines" data-aos="fade-in" data-aos-easing="linear" data-aos-duration="500"><span>
                      המגזין
                 </span></h1>
                <span class="subtitle">
                     נשארים מעודכנים

                </span>

                <div class="posts-wrapper">
                    <?php
                    global $paged;
                    $curpage = $paged ? $paged : 1;

                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 3,
                        'paged' => $paged
                    );

                    $post_query = new WP_Query($args);

                    if($post_query->have_posts() ) {
                        while($post_query->have_posts() ) {
                            $post_query->the_post();
                            ?>
                            <div class="post">
                                <div class="post-text">
                                    <h1><?php the_title(); ?></h1>
                                    <p> מאת: <?php echo get_the_author(); ?> </p>
                                    <div class="excerpt"><?php the_excerpt(); ?></div>
                                    <a class="button" href="<?php echo get_permalink(); ?>">המשך לקרוא</a>
                                </div>
                                <div class="post-img">
                                    <?php the_post_thumbnail('full') ?>
                                </div>


                            </div>

                            <?php
                        }
                ?>

                        <div class="pagenav">
                            <div class="alignright"><?php next_posts_link(' הבא ', $post_query->max_num_pages) ?></div>
                            <div class="alignleft"><?php previous_posts_link(' הקודם ', $post_query->max_num_pages) ?></div>

                        </div>

                <?php
                    }
                    ?>
                </div>

            </div>
        </section>

        <section class="section-form-2">
            <div class="wrapper-bg"></div>
            <div class="wrapper">
                <div class="form-wrapper" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="500">
                    <h1 class="title">
                        אנחנו כאן בשבילכם!
                    </h1>
                    <?php require get_template_directory() . '/templates/short-form-second.php'; ?>
                </div>
            </div>
        </section>

    </div>


<?php get_footer(); ?>