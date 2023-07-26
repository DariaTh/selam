<?php get_header(); ?>

<section class="section-hero">

    <div id="owl-homeslider" class="owl-carousel owl-theme desktop-slider">

        <div class="item" id="slide1">
            <a href="/">
                <img src="<?php echo get_stylesheet_directory_uri()."/img/home-slide1.png"; ?>" width="100%" alt="All insurance solutions in one place">
                <div class="slide-text-wrapper slide-text-wrapper_1">
                    <div class="slide-text">
                        <p class="baner-text-dark">כל פתרונות הביטוח</p>
                        <p class="baner-text-light">   במקום אחד</p>
                    </div>
                </div>
            </a>
            <div class="home-slide-mobile-img">
                <img src="<?php echo get_stylesheet_directory_uri()."/img/home-slide-mobile1.jpg"; ?>" width="100%" alt="All insurance solutions in one place">
            </div>
        </div>
        <div class="item" id="slide2">
            <a href="/">
                <img src="<?php echo get_stylesheet_directory_uri()."/img/home-slide2.png"; ?>" width="100%" alt="Financial support personal and close">
                <div class="slide-text-wrapper slide-text-wrapper_2">
                    <div class="slide-text">
                        <p class="baner-text-dark">ליווי פיננסי</p>
                        <p class="baner-text-light yellow-text"> אישי וצמוד </p>
                    </div>
                </div>
            </a>
            <div class="home-slide-mobile-img">
                <img src="<?php echo get_stylesheet_directory_uri()."/img/home-slide-mobile2.jpg"; ?>" width="100%" alt="Financial support personal and close">
            </div>
        </div>
        <div class="item" id="slide3">
            <a href="/">
                <img src="<?php echo get_stylesheet_directory_uri()."/img/home-slide3.png"; ?>" width="100%" alt="Marketers Speedometer">
                <div class="slide-text-wrapper slide-text-wrapper_3">
                    <div class="slide-text">
                        <p class="baner-text-dark"> משווקי </p>
                        <p class="baner-text-light"> ספידומט </p>
                        <p class="sub-heading">אפליקציה ייחודית עבור
                            <br>
                            סוכני ביטוח ומעסיקים
                        </p>
                    </div>
                </div>
            </a>
            <div class="home-slide-mobile-img">
                <img src="<?php echo get_stylesheet_directory_uri()."/img/home-slide-mobile3.jpg"; ?>" width="100%" alt="Marketers Speedometer">
            </div>
        </div>
    </div>

    <button id="toggleButton" class="toggleCarouselBtn" aria-label="Start and pause automatic slide show">
    <svg fill="#000000" height="40px" width="40px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M256,0C114.617,0,0,114.615,0,256s114.617,256,256,256s256-114.615,256-256S397.383,0,256,0z M224,320 c0,8.836-7.164,16-16,16h-32c-8.836,0-16-7.164-16-16V192c0-8.836,7.164-16,16-16h32c8.836,0,16,7.164,16,16V320z M352,320 c0,8.836-7.164,16-16,16h-32c-8.836,0-16-7.164-16-16V192c0-8.836,7.164-16,16-16h32c8.836,0,16,7.164,16,16V320z"></path> </g></svg>
    </button>

    <a class="moveToNextSectionBtn" href="#sectionAbout"><i class="fa fa-angle-down"></i></a>
</section>

<section id="sectionAbout" class="section-about" >
    <div class="wrapper">
        <h1 class="title title-lines" data-aos="fade-in" data-aos-easing="linear" data-aos-duration="500"><span>
                סלע סוכנות לביטוח
            </span></h1>
        <span class="subtitle">
            הבית החם של סוכני הביטוח
        </span>
        <p class="text-block" data-aos="fade-in" data-aos-easing="linear" data-aos-duration="500">
            סלע סוכנות לביטוח בע"מ מבית ההשקעות  מיטב דש שנוסדה בשנת 2011 שמה לה למטרה להדריך, ללוות ולטפח את סוכני הביטוח בקבוצה ולהעניק להם את הכלים המקצועיים והשיווקיים הטובים ביותר, ובנוסף לכך לתת את השירות הטוב והמקצועי ביותר ללקוחות הפרטיים.
        </p>
        <button onclick="window.location.href='/אודות'" class="button" title="קרא עוד אודותינו - קישור לעמוד אודות">
            קרא עוד
        </button>
    </div>
</section>

<section class="section-form-1">
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

<section class="section-products">
    <div class="wrapper">

        <h1 class="title title-lines" data-aos="fade-in" data-aos-easing="linear" data-aos-duration="500"><span>
            מוצרי החברה 
            </span></h1>
        <span class="subtitle">
            איתך בכל שלב        
        </span>
        </div>

        <div class="illustration-wrapper">
            <img src="<?php echo get_stylesheet_directory_uri()."/img/radial.png"; ?>" width="100%" alt="The company's products">
        </div>
    </div>

</section>

<section class="section-tabs">
    <div class="wrapper">
        <?php require get_template_directory() . '/templates/tabs-section.php'; ?>
    </div>
</section>

<section class="section-services">
    <div class="services-img-block wrapper">
        <h1 class="title title-lines" data-aos="fade-in" data-aos-easing="linear" data-aos-duration="500"><span>
                שירותים לסוכן
            </span></h1>
        <span class="subtitle">
            השקט התעסוקתי שלך
        </span>
    </div>
 
    <div class="wrapper">
        <div class="services-blocks">
            <div class="service-block" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="500">
            <img data-aos="fade-in" data-aos-easing="linear" data-aos-duration="500" src="<?php echo get_stylesheet_directory_uri()."/img/service2.svg"; ?>" alt="Suitcase" class="services-back">
                <h3 class="title">מערך תפעול</h3>
                <p class="text">
                    סוכנות סלע חרטה על דיגלה שסוכניה יתנו ללקוח את כלל הפתרונות הן פיננסיים והן ביטוחיים, ועל כן אנו מעמידים לסוכנינו מערך תפעול ביטוח מלא הכולל מעקבים אחרי פוליסות, דוחות, גבייה, הפקה, חיתום ומערך תביעות, וכל זאת בתוך הסוכנות! כל זה בשביל שסוכנינו יתנו שירות מצוין ללקוחותיהם ויגייסו לקוחות חדשים.
                </p>
            </div>
            <div class="service-block" data-aos="fade-down" data-aos-delay="200" data-aos-easing="linear" data-aos-duration="500">
            <img data-aos="fade-in" data-aos-easing="linear" data-aos-duration="500" src="<?php echo get_stylesheet_directory_uri()."/img/service3.svg"; ?>" alt="Two men are communicating" class="services-back">
                <h3 class="title">ליווי אישי</h3>
                <p class="text">
                    סוכנות סלע מעמידים לרשותכם  הסוכנים את הכלים הלימודיים והעסקיים הטובים ביותר על מנת להפוך אתכם לבעלי מקצוע טובים ומנהלים של עסק חזק ויציב עם שירות, תפעול, ידע מקצועי ולידים איכותיים.
                </p>
            </div>
            <div class="service-block" data-aos="fade-down" data-aos-delay="400" data-aos-easing="linear" data-aos-duration="500">
            <img data-aos="fade-in" data-aos-easing="linear" data-aos-duration="500" src="<?php echo get_stylesheet_directory_uri()."/img/service1.svg"; ?>" alt="Handshakes" class="services-back">
                <h3 class="title">תיאום פגישות</h3>
                <p class="text">
                    סוכנות סלע מעמידה לרשות סוכניה פגישות מתואמות על ידי מוקד תיאום פגישות תוסס וגדול היושב בקיבוץ מעגן.

                </p>
            </div>
        </div>
    </div>

    <button onclick="window.location.href='/שירותים-לסוכן'" class="button more-products"
        title="קרא עוד אודות השירותים לסוכן שלנו - קישור לעמוד שירותים לסוכן"> קרא עוד</button>

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

<section class="section-app" id="speedomat">
    <div class="app-wrapper">
        <div class="app-img" data-aos="fade-in" data-aos-easing="linear" data-aos-duration="500">
            <img src="<?php echo get_stylesheet_directory_uri()."/img/app-img.png"; ?>" alt="Phone app for insurance agents and employers">
        </div>

        <div class="app-text" data-aos="fade-in" data-aos-easing="linear" data-aos-duration="500">
            <h1 class="title">ספידומט</h1>
            <span class="subtitle">האפליקציה הראשונה בישראל
                <br>
                עבור סוכני ביטוח ומעסיקים</span>
            <p class="text">
                יש לך עובדים? זו האפליקציה שתקל עליך את הטיפול בפנסיה שלהם! מעסיקים מחויבים להפריש כספים לפנסיית העובדים שלהם. <br>הבעיה היא שהמחויבות הזאת גוזלת ממך אנרגיות,<br> זמן ואף משאבים כספיים.
            אבל עכשיו יש  לכך פתרון! <br>
            ספידומט הוא שירות נוח ופשוט שמבוסס על יישומון לנייד שמטרתו להפנות את הפרטים של העובדים ישירות אל סוכן פנסיוני בעל רישיון. כאשר הסוכן מקבל את הפרטים, הוא לוקח על עצמו מאותו הרגע את הטיפול בכל מה שכרוך בכך, כולל מסלקה על חשבוננו, ולך אין כלל התעסקות בנושא הניירת והסחבת מול העובד. המשמעות היא טיפול מקצועי כחוק בנושא הרגיש של פנסיית ברירת מחדל לעובדים  החוסך לך השקעת זמן יקר. 

            </p>

            <button onclick="window.location.href='/צור-קשר'" class="button dark-blue"
            title="לפרטים נוספים אודות אפליקציית ספידומט">לפרטים נוספים</button>

        </div>

    </div>

</section>

<section class="section-brands">
    <div class="wrapper">
        <h1 class="title title-lines" data-aos="fade-in" data-aos-easing="linear" data-aos-duration="500"><span>
               משווקים מורשים
            </span></h1>
        <span class="subtitle">
            השקט התעסוקתי שלך
        </span>

        <div class="brands-wrapper">
            <div class="brand">
                <img src="<?php echo get_stylesheet_directory_uri()."/img/logos/logo1.png"; ?>" alt="Brand logo" width="100%">
            </div>
            <div class="brand">
                <img src="<?php echo get_stylesheet_directory_uri()."/img/logos/logo2.png"; ?>" alt="Brand logo" width="100%">
            </div>
            <div class="brand">
                <img src="<?php echo get_stylesheet_directory_uri()."/img/logos/logo3.png"; ?>" alt="Brand logo" width="100%">
            </div>
            <div class="brand">
                <img src="<?php echo get_stylesheet_directory_uri()."/img/logos/logo4.png"; ?>" alt="Brand logo" width="100%">
            </div>
            <div class="brand">
                <img src="<?php echo get_stylesheet_directory_uri()."/img/logos/logo5.png"; ?>" alt="Brand logo" width="100%">
            </div>
            <div class="brand">
                <img src="<?php echo get_stylesheet_directory_uri()."/img/logos/logo6.png"; ?>" alt="Brand logo" width="100%">
            </div>
            <div class="brand">
                <img src="<?php echo get_stylesheet_directory_uri()."/img/logos/logo13.png"; ?>" alt="Brand logo" width="100%">
            </div>
            <div class="brand">
                <img src="<?php echo get_stylesheet_directory_uri()."/img/logos/logo8.png"; ?>" alt="Brand logo" width="100%">
            </div>
            <div class="brand">
                <img src="<?php echo get_stylesheet_directory_uri()."/img/logos/logo9.png"; ?>" alt="Brand logo" width="100%">
            </div>
            <div class="brand">
                <img src="<?php echo get_stylesheet_directory_uri()."/img/logos/logo10.png"; ?>" alt="Brand logo" width="100%">
            </div>
            <div class="brand">
                <a href="https://www.meitavdash.co.il/"><img src="<?php echo get_stylesheet_directory_uri()."/img/logos/logo11.png"; ?>" alt="Brand logo" width="100%"></a>
            </div>
        </div>
    </div>
</section>

<section class="section-jobs">
    <div class="wrapper">
        <div class="jobs-title" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="500">
            <h1 class="title">
                דרושים
            </h1>
            <span class="subtitle">
                הצטרפו למשפחה
            </span>
        </div>

        <div class="jobs-blocks">
            <div class="job-item">
                <img src="<?php echo get_stylesheet_directory_uri()."/img/job1.png"; ?>" alt="Men in the office">
                <button onclick="window.location.href='/צור-קשר'" class="button light-blue"
                title="שליחת פרטים לגבי משרה בסוכנות סלע בעמ">שליחת פרטים</button>
            </div>
            <div class="job-item">
                <img src="<?php echo get_stylesheet_directory_uri()."/img/job2.png"; ?>" alt="Men in the office">
                <button onclick="window.location.href='/צור-קשר'" class="button light-blue"
                title="שליחת פרטים לגבי משרה בסוכנות סלע בעמ">שליחת פרטים</button>
            </div>
        </div>
    </div>
</section>

<section class="section-posts">
    <div class="wrapper">
        <h1 class="title title-lines" data-aos="fade-in" data-aos-easing="linear" data-aos-duration="500"><span>
               המגזין
            </span></h1>
        <span class="subtitle">
          נשארים מעודכנים
        </span>

        <div class="slider-wrapper">
            <div id="owl-posts" class="owl-carousel owl-theme  owl-posts">

                <?php
                $args = array(
                    'post_type' => 'post'
                );

                $post_query = new WP_Query($args);

                if($post_query->have_posts() ) {
                    while ($post_query->have_posts()) {
                        $post_query->the_post();
                        ?>

                        <div class="item">
                            <img class="slide-post-img"
                                 src="<?php the_post_thumbnail_url("full"); ?>" alt="Blog post image">
                            <div class="post-content">
                                <p class="slide-post-title">
                                    <?php the_title(); ?>
                                </p>
                                <p class="slide-post-author"> מאת: <?php echo get_the_author(); ?> </p>
                                <div class="slide-post-content">
                                    <?php the_excerpt(); ?>
                                </div>
                        
                                <button onclick="window.location.href='<?php echo get_permalink(); ?>'" 
                                title="<?php the_title(); ?>" class="button slide-post-button"> קרא עוד</button>
                                

                            </div>
                        </div>

                        <?php
                    }
                }
               ?>
            </div>

            <button id="toggleButtonPosts" class="toggleCarouselBtn" aria-label="Start and pause automatic slide show posts">
            <svg fill="#000000" height="40px" width="40px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M256,0C114.617,0,0,114.615,0,256s114.617,256,256,256s256-114.615,256-256S397.383,0,256,0z M224,320 c0,8.836-7.164,16-16,16h-32c-8.836,0-16-7.164-16-16V192c0-8.836,7.164-16,16-16h32c8.836,0,16,7.164,16,16V320z M352,320 c0,8.836-7.164,16-16,16h-32c-8.836,0-16-7.164-16-16V192c0-8.836,7.164-16,16-16h32c8.836,0,16,7.164,16,16V320z"></path> </g></svg>
            </button>

        </div>
    </div>
</section>

<?php get_footer(); ?>