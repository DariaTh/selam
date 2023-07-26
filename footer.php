<?php wp_footer(); ?>
</main>
</body>
<footer role="contentinfo">
    <div class="wrapper">
        <p class="copyright">
            כל הזכויות שמורות לסלע סוכנות לביטוח בע”מ
        </p>
        <p class="contact">
            בואו נשמור על קשר
        </p>
        <div class="contacts">
           <!-- <a href="tel:048147878"><span class="phone"><i class="fa fa-phone" aria-hidden="true"></i> 04-814-7878</span></a> -->
            <a href="https://www.facebook.com/Selainsurance"><span class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i> סלע סוכנות לביטוח</span></a>
        </div>
        <div class="footer-menu">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'footer-menu',
                'container' => null,
                'menu_class'        => ''
            ))
            ?>
        </div>
    </div>
</footer>
</html>