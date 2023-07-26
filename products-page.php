<?php /* Template Name: Products */ ?>
<?php get_header(); ?>

<div id="products-page">
    <section class="inner-hero" >
        <div class="hero-back" style="background-image: url(<?php echo get_stylesheet_directory_uri()."/img/products-hero.png"; ?>)"></div>
        <div class="hero-title">
            <p data-aos="fade-left"  style="color: #28404F"> מוצרי  </p>
            <p data-aos="fade-right" class="yellow-text">  החברה</p>
        </div>

        <div class="inner-hero_mobile">
            <img src="<?php echo get_stylesheet_directory_uri()."/img/products-hero-mobile.jpg"; ?>" width="100%" alt="">
        </div>

        <a class="moveToNextSectionBtn" href="#sectionFormProducts"><i class="fa fa-angle-down"></i></a>
    </section>

    <section id="sectionFormProducts" class="section-form-1">
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

    <section class="section-about" >
        <div class="wrapper">
            <h1 class="title title-lines" data-aos="fade-in" data-aos-easing="linear" data-aos-duration="500"><span>
                מוצרי החברה
            </span></h1>
            <span class="subtitle">
            כל הפתרונות במקום אחד
        </span>
            <p class="text-block" data-aos="fade-in" data-aos-easing="linear" data-aos-duration="500">
            סוכנות סלע שמה לה למטרה להעמיד לרשות  סוכניה ולקוחותיה את כל הביטוחים ואת חבילת המוצרים הפנסיונים שקיימים בכל חברות הביטוח  ובתי ההשקעות וכן בקרנות חוץ בורסאיות.  מטרת הסוכנות היא להפוך את הסוכן ל 'One Stop Shop'  שמספק ללקוח את כל פתרונות הביטוח, הפיננסים והפנסיה תחת קורת גג אחת, לרבות מגוון רחב של מוצרים בכל בתי ההשקעות וחברות הביטוח. כל זאת על מנת להתאים ללקוח את המוצרים המתאימים לו ביותר ולאפשר לספק ללקוח ליווי לאורך שנים. 
            </p>

            <button onclick="window.location.href='/אודות'" class="button">
            קרא עוד
            </button>
        </div>
    </section>

    <section class="section-products">
        <div class="wrapper">
        <h1 class="title title-lines" data-aos="fade-in" data-aos-easing="linear" data-aos-duration="500"><span>
            איתך בכל שלב    
            </span></h1>
            </div>

            <div class="illustration-wrapper">
                <img src="<?php echo get_stylesheet_directory_uri()."/img/radial.png"; ?>" width="100%" alt="The company's products">
            </div>
        </div>

    </section>

    <section class="section-tabs" id="products-section-tabs">
        <div class="wrapper">
            <?php require get_template_directory() . '/templates/product-page-tabs.php'; ?>
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