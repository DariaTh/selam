<?php get_header(); ?>

<div class="post-page">
    <section class="inner-hero" style="background-image: url(<?php echo get_stylesheet_directory_uri()."/img/blog-hero.png"; ?>)">
        <!-- <div class="hero-title">
            <p data-aos="fade-left" style="color: #28404F"> המגזין  </p>
            <p data-aos="fade-right"> נשארים מעודכנים</p>
        </div> -->
    </section>

    <section class="section-form-1">
        <div class="wrapper-bg"></div>
        <div class="wrapper">
            <div class="form-wrapper" data-aos="fade-right">
                <h2 class="title">
                    אנחנו כאן בשבילכם!
                </h2>
                <?php require get_template_directory() . '/templates/short-form.php'; ?>
            </div>
        </div>
    </section>

    <section class="post-section">
        <div class="wrapper">
            <div class="title-wrapper">
                <h2 class="title title-lines"><span>
                      המגזין
                 </span></h2>
                <span class="subtitle">
                     נשארים מעודכנים

                </span>

            </div>

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="single-post">
                <div class="post-text-single">
                    <h2><?php the_title(); ?></h2>
                    <p class="author-name"> מאת:  <?php echo get_the_author(); ?> </p>
                    <p class="author-email"><a href="mailto:<?php echo get_the_author_meta('user_email'); ?>"><?php echo get_the_author_meta('user_email'); ?></a></p>
                    <div class="content"><?php the_content(); ?></div>

                </div>
                <div class="post-img">
                    <?php the_post_thumbnail('full') ?>
                </div>
            </div>
            <?php endwhile; endif; ?>
        </div>
    </section>


    <section class="section-form-2">
        <div class="wrapper-bg"></div>
        <div class="wrapper">
            <div class="form-wrapper" data-aos="fade-left">
                <h2 class="title">
                    אנחנו כאן בשבילכם!
                </h2>
                <?php require get_template_directory() . '/templates/short-form-second.php'; ?>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>
