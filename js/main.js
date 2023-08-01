jQuery(document).ready(function($){
    AOS.init();
    window.addEventListener('load', AOS.refresh)

    const isChrome = navigator.userAgent.includes("Chrome");
    if (isChrome) {
        document.querySelectorAll('.svg-text-fix').forEach(item => {
            const firstChild = item.querySelector('tspan:first-child');
            const lastChild = item.querySelector('tspan:last-child');
            const firstChildY = firstChild.getAttribute("y");
            const lastChildY = lastChild.getAttribute("y");
            firstChild.setAttribute('y', lastChildY);
            lastChild.setAttribute('y', firstChildY);
        });
    }



    $(".burger").click(function() {
        $(this).toggleClass('active');
        $("ul.menu li").slideToggle('fast');
    });

    $(window).resize(function() {
        if (window.innerWidth > 768) {
            $('ul.menu li').removeAttr('style');
        }
    });

    /*     Add class to sticky header     */
    var header = document.getElementsByClassName('header')[0];

    window.addEventListener("scroll", () => {
        const currentScroll = window.pageYOffset;
        if (currentScroll >= 100) {
            header.classList.add("header-sticky");
        }
        else{
            header.classList.remove("header-sticky");
        }
    });

    /*   Carousels */
    let playSvgBtn = '<svg fill="#000000" height="40px" width="40px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M256,0C114.617,0,0,114.615,0,256s114.617,256,256,256s256-114.615,256-256S397.383,0,256,0z M344.48,269.57l-128,80 c-2.59,1.617-5.535,2.43-8.48,2.43c-2.668,0-5.34-0.664-7.758-2.008C195.156,347.172,192,341.82,192,336V176 c0-5.82,3.156-11.172,8.242-13.992c5.086-2.836,11.305-2.664,16.238,0.422l128,80c4.676,2.93,7.52,8.055,7.52,13.57 S349.156,266.641,344.48,269.57z"></path> </g></svg>'
    let stopSvgBtn = '<svg fill="#000000" height="40px" width="40px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M256,0C114.617,0,0,114.615,0,256s114.617,256,256,256s256-114.615,256-256S397.383,0,256,0z M224,320 c0,8.836-7.164,16-16,16h-32c-8.836,0-16-7.164-16-16V192c0-8.836,7.164-16,16-16h32c8.836,0,16,7.164,16,16V320z M352,320 c0,8.836-7.164,16-16,16h-32c-8.836,0-16-7.164-16-16V192c0-8.836,7.164-16,16-16h32c8.836,0,16,7.164,16,16V320z"></path> </g></svg>'
    
    function toggleOwlCarousel(button, carousel) {
        if (carousel.data('owl.carousel').settings.autoplayTimeout === 5000) {
            carousel.data('owl.carousel').settings.autoplayTimeout = 0;
            carousel.trigger('stop.owl.autoplay');
            jQuery(button).html(playSvgBtn);
        } else {
            carousel.data('owl.carousel').settings.autoplayTimeout = 5000;
            carousel.trigger('play.owl.autoplay', [5000]);
            jQuery(button).html(stopSvgBtn);
        }
      }

     /*   Homepage carousel */
     let homeCarousel = jQuery("#owl-homeslider");
     homeCarousel.owlCarousel({
        navigation : true,
    //    nav: true,
        slideSpeed : 700,
        paginationSpeed : 400,
        loop:true,
        autoplay: true,
        items : 1,
        dots: false,
        animateIn: 'fadeIn',
        animateOut: 'fadeOut',
        autoplayTimeout:5000
    });

    jQuery('#toggleButton').on('click', () => toggleOwlCarousel('#toggleButton', homeCarousel));


    /*   Posts carousel */
      let postsCarousel = jQuery("#owl-posts");
      postsCarousel.owlCarousel({
        rtl: true,
        margin:0,
        responsiveClass:true,
        nav: true,
        center: true,
        navigation : true,
        slideSpeed : 300,
        paginationSpeed : 400,
        loop:true,
        autoplay: true,
        autoplayTimeout:5000,
        items : 3,
        navText : ['',''],
        responsive:{
            0:{
                items:1,
                nav:false
            },
            600:{
                items:1,
                nav:false
            },

            1200:{
                items:3,

            }
        }

    });

    jQuery('#toggleButtonPosts').on('click', () => toggleOwlCarousel('#toggleButtonPosts', postsCarousel));

    /*   Random image on Form  1 */

    selectedImg = 'url(/wp-content/themes/sela/img/form1/form-bg' + (Math.floor(Math.random() * 28) + 1) + '.png)';

    $(".section-form-1").css("background-image", selectedImg);

    /*   Random image on Form  2 */

    f2selectedImg = 'url(/wp-content/themes/sela/img/form2/second-form-bg' + (Math.floor(Math.random() * 30) + 1) + '.png)';

    $(".section-form-2").css("background-image", f2selectedImg);


    /*   Open Tabs   */
    document.querySelector(".tab") && document.querySelector(".tab").addEventListener("click", (e) => {
        let elem = e.target;
        let id = elem.dataset.toggleId;
      //  console.log(' id '+id);
        if (!id) return;

        openTab(elem, id);

    });
    function openTab(elem, tabId) {

         var i, tabcontent, tablinks;
         tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
         document.getElementById(tabId).style.display = "block";
        elem.className += " active";

    }

// Get the element with id="tab1" and click on it
    document.getElementById("insurance") && document.getElementById("insurance").click();

    /*   Open Inner Tab   */
    document.querySelector(".tabcontent-wrapper") && document.querySelector(".tabcontent-wrapper").addEventListener("click", (e) => {
        let elem = e.target;
        let id = elem.dataset.toggleId;
   //     console.log(elem, id);
        if (!id) return;

        openInnerTab(elem, id);

    });

    function openInnerTab(elem, innerTabId) {

        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tab-post-wrapper");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
         //   tabcontent[i].style.opacity= "0";
        }
        tablinks = document.getElementsByClassName("inner-link");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }

        document.getElementById(innerTabId).style.display = "block";
        elem.className += " active";
    }

 //   document.getElementById("innerTab1").click();


    jQuery('#tab3 .inner-link:first-child').click();
    jQuery('button#investment').on('click', function(){
        jQuery('#tab1 .inner-link:first-child').click();
    })
    jQuery('button#pension').on('click', function(){
        jQuery('#tab2 .inner-link:first-child').click();
    })
    jQuery('button#insurance').on('click', function(){
        jQuery('#tab3 .inner-link:first-child').click();
    })

    // jQuery('#tab3 .inner-link:first-child').click();
    jQuery('button#investment').on('focus', function(){
        jQuery('#tab1 .inner-link:first-child').click();
    })
    jQuery('button#pension').on('focus', function(){
        jQuery('#tab2 .inner-link:first-child').click();
    })
    jQuery('button#insurance').on('focus', function(){
        jQuery('#tab3 .inner-link:first-child').click();
    })


    let isStartAnimateScale = false;
    let isStartAnimateScaleCalled = false;
    document.querySelector('.section-products') &&  document.addEventListener('scroll', (e) => {
        const element = document.querySelector('.section-products');
        if (window.scrollY > (element.offsetTop - 200) && !isStartAnimateScaleCalled) {
            startAnimateScale();
            isStartAnimateScaleCalled = true
            setTimeout(() => isStartAnimateScale = true, 1500)
        }
    });

    /*   Worm Animation   */

    function startAnimateScale() {
        for(let i = 1; i < 10; i++) {
            setTimeout(() => {
                scaleItem(i, 500)
            }, (i * 100))
        }
    }


    function scaleItem(item, time){
        time = time || 1500
        jQuery(".illustration-block .image-"+item+" svg").css("transform","scale(1.1)");

        setTimeout(function () {
            jQuery(".illustration-block .image-"+item+" svg").css("transform","none");
        }, time)
    }

    // window.setInterval(function(){
    //     const rand = Math.floor(Math.random() * 9)+1;
    //
    //     isStartAnimateScale && scaleItem(rand);
    //
    // }, 2000);


    /*   Button   */
    Array.from(document.querySelectorAll("#about-page .text-block + button")).forEach(button => {
         button.addEventListener("click", (e) => {
             e.target.parentNode.querySelector(".text-block").classList.toggle("open");
             if(e.target.parentNode.querySelector(".text-block").classList.contains("open")){
                e.target.parentNode.querySelector(".text-block .hidden_part").focus();
             }
         })
    })

    /*   Contact form redirect   */
    function stopSubmitForm(ev) {
        ev.preventDefault();
        const form = ev.target.parentElement.parentElement;

        const fullNameInput = form.querySelector("input[name='full-name']");
        const phoneInput = form.querySelector("input[name='phone']");
        const emailInput = form.querySelector("input[name='email']");
        
        const fullName = fullNameInput.value;
        const phone = phoneInput.value;
        const email = emailInput.value;

        const fullNameError = form.querySelector("#full-name-error");
        const phoneError = form.querySelector("#phone-error");
        const emailError = form.querySelector("#email-error");
      
        // Reset error messages
        fullNameError.textContent = "";
        phoneError.textContent = "";
        emailError.textContent = "";

        const errors = [];

        if (fullName.trim() === "") {
        fullNameError.textContent = "שם מלא הוא שדה חובה";
        errors.push("Full name is required");
        }
        
        if (phone.trim() === "") {
        phoneError.textContent = "טלפון הוא שדה חובה";
        errors.push("Phone number is required");
        }
    
        if (email.trim() === "") {
        emailError.textContent = "מייל (דואר אלקטרוני) הוא שדה חובה";
        errors.push("Email is required");
        }
    
        if (errors.length > 0) {
        console.log(errors.join(", "));
        if (fullName.trim() === "") {
            fullNameInput.focus();
          } else if (phone.trim() === "") {
            phoneInput.focus();
          } else if (email.trim() === "") {
            emailInput.focus();
          }

        return;
        }

        var params = "?fullName="+fullName+"&phone="+phone+"&email="+email;
        window.location.href = "https://selam.co.il/צור-קשר"+params+"#contact_form";

    }

    if (decodeURIComponent(window.location.href).indexOf("צור-קשר") != -1){
    // if (decodeURIComponent(window.location.href).indexOf("contact-us") != -1){
        console.log("contact page")
        if(location.search != ""){
            let queryString = window.location.search;
            queryString = queryString.replace('?','');
            arrData = queryString.split("&").map(v => v.split("="));

            for (var key in arrData) {
                //  console.log(arrData[key]);
                if(arrData[key][0]=="fullName"){
                    var fullName = arrData[key][1];
                }
                if(arrData[key][0]=="phone"){
                    var phone = arrData[key][1];
                }
                if(arrData[key][0]=="email"){
                    var email = arrData[key][1];
                }
            }

            fullName = decodeURIComponent(fullName);

            jQuery("input[name='full-name']").attr('value', fullName);
            jQuery("input[name='phone']").attr('value', phone);
            jQuery("input[name='your-email']").attr('value', email);

        }
    }


    if(document.getElementById('fake_submit')){
        console.log('click')
        document.getElementById('fake_submit').addEventListener(
            'click', stopSubmitForm, false
        );
    }

    if(document.getElementById('fake_submit_second')){
        console.log('click')
        document.getElementById('fake_submit_second').addEventListener(
            'click', stopSubmitForm, false
        );
    }

    jQuery('.form-input').focus(function(){
        $(this).parents('.input-wrapper').addClass('focused');
    });

    jQuery('.form-input').blur(function(){
        var inputValue = $(this).val();
        if ( inputValue == "" ) {
          $(this).removeClass('filled');
          $(this).parents('.input-wrapper').removeClass('focused');  
        } else {
          $(this).addClass('filled');
        }
      }); 

      /*   Contact page - form   */


      /*   Remove tab from main slider   */
      jQuery('#owl-homeslider .owl-stage a').attr('tabindex', '-1');

});