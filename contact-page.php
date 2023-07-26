<?php /* Template Name: Contact Us */ ?>
<?php get_header(); ?>

<div id="contact-page">
    <section class="inner-hero" >
        <div class="hero-back" style="background-image: url(<?php echo get_stylesheet_directory_uri()."/img/contact-hero.png"; ?>)"></div>
        <div class="hero-title">
            <p data-aos="fade-left" style="color: #28404F">  צור   </p>
            <p data-aos="fade-right">קשר</p>
        </div>

        <div class="inner-hero_mobile">
            <img src="<?php echo get_stylesheet_directory_uri()."/img/contact-hero-mobile.jpg"; ?>" width="100%" alt="A woman with a headset">
        </div>

        <a class="moveToNextSectionBtn" href="#sectionFormContact"><i class="fa fa-angle-down"></i></a>
    </section>

    <section id="sectionFormContact" class="contact-form" id="contact_form">
        <div class="wrapper">
            <div class="contact-form-wrapper">
                <h1 class="title"><span>
              אנחנו כאן בשבילכם!
            </span></h1>
                <span class="subtitle">
            השאירו פנייתכם ונחזור אליכם בהקדם
        </span>

                <?php echo do_shortcode('[contact-form-7 id="40" title="Contact form"]') ?>
            </div>
        </div>

    </section>

    <section class="contact-location">
        <div class="wrapper">
            <h2 class="title">פרטי יצירת קשר</h2>
            <div class="location-wrapper">

                <div class="location-item" data-aos="fade-down">
                    <img src="<?php echo get_stylesheet_directory_uri()."/img/location3.svg"; ?>" width="100%" alt="Point location">
                    <p class="loc-city">
                    מרכז 
                    </p>
                    <p class="loc-address">
                     שחם 36, כניסה א קומה 4, פתח תקווה   
                    </p>
                </div>
                <div class="location-item" data-aos="fade-down" data-aos-delay="200">
                    <img src="<?php echo get_stylesheet_directory_uri()."/img/location2.svg"; ?>" width="100%" alt="Point location">
                    <p class="loc-city">
                        קיבוץ מעגן
                    </p>
                    <p class="loc-address">
                        קיבוץ מעגן עמק הירדן

                    </p>
                </div>
                <div class="location-item" data-aos="fade-down" data-aos-delay="400">
                    <img src="<?php echo get_stylesheet_directory_uri()."/img/location1.svg"; ?>" width="100%" alt="Point location">
                    <p class="loc-city">
                        חיפה
                    </p>
                    <p class="loc-address">
                        שדרות ההסתדרות 251

                    </p>
                </div>

            </div>

            <div class="phone-contacts">
                <p class="phones">
                       <span>  מוקד תפעול פיננסים : </span>  04-8147806 |    <span>מוקד תפעול ביטוח :</span>  04-8147804
                </p>
                                <p class="phones">
                       <span>  מוקד תיאום פגישות : </span>  04-8147866 |    <span>הנהלה :</span>  04-8147801
                </p>
                <p style="text-align: center;
                border-bottom: 1px solid;
                padding: 0 0 30px;
                margin: 0;">
                    <span> פקס: </span>  04-6709385

                </p>

                <p class="open-hours">
                    מוקד טלפוני: ימים א'-ה', 16:00 - 8:00

                </p>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>
