$(window).load(function () {

    

    // preloader
    $('#status').fadeOut(); // will first fade out the loading animation
    $('#preloader').delay(550).fadeOut('slow'); // will fade out the white DIV that covers the website.
    $('body').delay(550).css({
        'overflow': 'visible'
    });


    //  isotope
    var $container = $('.portfolio_container');
    $container.isotope({
        filter: '*',
    });

    $('.portfolio_filter a').click(function () {
        $('.portfolio_filter .active').removeClass('active');
        $(this).addClass('active');

        var selector = $(this).attr('data-filter');
        $container.isotope({
            filter: selector,
            animationOptions: {
                duration: 500,
                animationEngine: "jquery"
            }
        });
        return false;
    });

    // back to top
    var offset = 300,
        offset_opacity = 1200,
        scroll_top_duration = 700,
        $back_to_top = $('.cd-top');

    //hide or show the "back to top" link
    $(window).scroll(function () {
        ($(this).scrollTop() > offset) ? $back_to_top.addClass('cd-is-visible'): $back_to_top.removeClass('cd-is-visible cd-fade-out');
        if ($(this).scrollTop() > offset_opacity) {
            $back_to_top.addClass('cd-fade-out');
        }
    });

    //smooth scroll to top
    $back_to_top.on('click', function (event) {
        event.preventDefault();
        $('body,html').animate({
            scrollTop: 0,
        }, scroll_top_duration);
    });

    // input
    $(".input-contact input, .textarea-contact textarea").focus(function () {
        $(this).next("span").addClass("active");
    });
    $(".input-contact input, .textarea-contact textarea").blur(function () {
        if ($(this).val() === "") {
            $(this).next("span").removeClass("active");
        }
    });

    // multiple languages

    var arrLang = {
            'en' : {
                'home' : 'Home',
                'about': 'About',
                'contact' : 'Contact',
                'services' : 'Services',
                'portfolio' : 'Portfolio',
                'blog' : 'Blog',
                'follow' : 'Follow Me!',
                'english': 'English',
                'danish': 'Danish',
                'spanish': 'Spanish',
                'menu': 'Menu',
                'design': 'Design.',
                'simple': 'Simple',
                'text-header': 'Clean, simple and friendly web design',
                'portfolio1' : 'Custom furniture',
                'about1': 'About me',
                'about2': 'Front-End Developer',
                'about3': "Hi! I'm from Buenos Aires, Argentina, Living in Copenhagen, Denmark. I love what I do and I wanna share it with the world. Nowaday internet precence is fundamental for your company to grow. A little bit about my qualifications? For so many years I started learning on my own, until I decided back up my knowledge with studies. I trained in Coderhouse and EducationIT, with a lot of patience, practice and love",
                'about4': "The greatest of this career path, is that you never finish learning. Any doubts? Let's talk :)",
                'contact1': "Get in touch!",
                'contact2': "I would love to hear from you!",
                'contact3': "If you have any questions or doubts you can always ask me. If you have an idea in mind, you want to renew your site, or just start in the digital world. There is a budget according to each need.",
                'contact-name':"your name",
                'contact-email':"your e-mail",
                'contact-subject':"subject",
                'contact-message':"message",
                'send': "send",
                'title-blog':"What is Responsive Design? It's important for our digital growth?",
                'blog-1':"The adaptable web design, also known as Responsive Design, aims to adapt the content of a website, so that it is completely readable from all the different devices that are nowadays used. Whether it's PC, Tablet, Mobile or Smart TV",
                'blog-2':"Surely at least once you have entered from your smartphone to a website where you had to zoom to be able to read the content, right? Well, this means that the site in question was not responsive.",
                'blog-3':"Now ... Is it really important that your website be responsive?",
                'blog-4':"The answer is yes. Today, much more than 50% of your potential customers come in from different devices, and the rebound percentage if your website is not adapted increases noticeably. On top of that, having the optimized site naturally helps to improve your positioning in the most recognized search engines. Therefore, you earn points in the most important search engines as Google or Bing.",
                'title-blog-1':"The importance of the user experience",
                'blog-5': "Success in the virtual environment necessarily leads to positive trust and emotions between users and consumers. There is no better advertisement than a satisfied customer. You are 99% likely to repeat your purchase at another time and will be encouraged to leave a good opinion or testimony about the company or product in forums and social networks. But in addition, the Google algorithm attaches much importance to the user experience in terms of average time to visit a site and percentage of dropouts.",
                'blog-6': "Visitors to your site, potential customers, will feel comfortable viewing the content of your site. You can see the content without problem and that good experience will make them repeat, without a doubt. Therein comes customer loyalty and engagement. It can not be ignored that more than half of brands lose web traffic because of poor optimization. Is there any doubt that being responsive is a priority?",
                'services-1':"A simple, intuitive and user-friendly design makes it easy to focus on your target. Capturing the customer's attention is key when offering a product and decides to purchase it.",
                'services-2':"Responsive Design is a new paradigm of web development. It adapts each site to different formats of access devices, smartphones, tablets, etc. More and more users visit their favorite websites from these devices.",
                'services-3':"Give us an idea, we will take care of the code;). It can be something as concrete as a website that pleases you, a predominant color, or a particular style.",
                'web-development':"Web Development",
                'web-design': "Web Design",
            },
            'es' : {
                'home' : 'Home',
                'about': 'Sobre mi',
                'contact' : 'Contacto',
                'services' : 'Servicios',
                'portfolio' : 'Portfolio',
                'blog' : 'Blog',
                'follow': '¡Seguíme!',
                'english': 'Ingles',
                'danish': 'Danés',
                'spanish': 'Español',
                'menu': 'Menu',
            }
        };

        $(function(){
            $('.translate').click(function(){
                var lang = $(this).attr('id');

                $('.lang').each(function(index, element){
                    $(this).text(arrLang[lang][$(this).attr('key')]);
                });
                $('#testing').attr('value','send');
            });
        });
});


