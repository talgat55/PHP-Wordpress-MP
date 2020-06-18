// ---------------------------------------------------------
// !!!!!!!!!!!!!!!!!document ready!!!!!!!!!!!!!!!!!!!!!!!!!!
// ---------------------------------------------------------

jQuery(document).ready(function () {
    "use strict";

    homeSlider();
    lasyLoad();
    newsArticlesCarousel();

    clickByCatsNewsArticles();
    popularCarousel();
    homePartnersCarousel();
    loadMoreNews();
    switchContentNewsArticles();
    // ajaxLoadData();
    // mobileMenu();
    // phoneMask();
    // reviewArrowDown();
    // clientsCarousel();
    // scrollToDiv();
    // backToTop();
    // fixedHeader();
    // OpenModal();
    // partnersCarousel();
    // reviewSlider();
    // awardsCarousel();
    // serviceCarousel();

    // formHandler();
    //
    // Lazy load
    //
    // jQuery('.lazy').lazy();
    //
    // $('.menu-icon-toggle').on('click', function(e) {
    //     $('body').toggleClass('open');
    //
    //     e.preventDefault();
    // });


    //
    // Match height in events
    //
    // jQuery('.list-qa__item_wrap').matchHeight();

    //  init   animation blocks library

    // end redy function
});
//----------------------------------
//   fixed header
//---------------------------------------
//
// function fixedHeader() {
//     "use strict";
//
//     jQuery(window).scroll(function () {
//         var sticky = jQuery('.header'),
//             scroll = jQuery(window).scrollTop();
//
//         if (scroll > 0) sticky.addClass('fixed');
//         else sticky.removeClass('fixed');
//     });
// }
//----------------------------------
//   Form handler
//---------------------------------------

// function formHandler() {
//     "use strict";
//
//     jQuery('form').submit(function () {
//         var phoneNumber = jQuery(this).find('.phone-input').val();
//         if(phoneNumber.length < 17){
//             alert();
//         }
//
//     });
// }

//----------------------------------
//   Lasyload
//---------------------------------------

function lasyLoad() {
    "use strict";

    var lasyClass = jQuery('.lazy');

    if (lasyClass.length) {
        lasyClass.lazy({
            effect: "fadeIn",
            effectTime: 700,
        });
    }

}

// // ---------------------------------------------------------
// // Back To Top
// // ---------------------------------------------------------
// function backToTop() {
//     "use strict";
//     jQuery(window).scroll(function () {
//
//         var backToTop = jQuery('#back_to_top');
//         var activeClass = 'backactive';
//
//         if (jQuery(this).scrollTop() > 100) {
//             backToTop.addClass(activeClass);
//         } else {
//             backToTop.removeClass(activeClass);
//         }
//
//     });
//
//     jQuery(document).on('click', '#back_to_top', function (e) {
//         e.preventDefault();
//
//         jQuery('body,html').animate({scrollTop: 0}, jQuery(window).scrollTop() / 3, 'linear');
//     });
//
// }
//

//
// function map() {
//     "use strict";
//     if (jQuery('#map').length) {
//         ymaps.ready(function () {
//             var myMap = new ymaps.Map('map', {
//                     center: [54.966241, 73.382522],
//                     zoom: 15,
//                     controls: []
//                 }, {
//                     // searchControlProvider: 'yandex#search'
//                 }),
//
//                 // Создаём макет содержимого.
//                 /*  MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
//                       '<div style="color: #FFFFFF; font-weight: bold;">$[properties.iconContent]</div>'
//                   ),*/
//
//                 myPlacemark = new ymaps.Placemark([54.966241, 73.382522], {
//                     id: '1'
//                 }, {
//
//                     // Опции.
//                     // Необходимо указать данный тип макета.
//                     iconLayout: 'default#image',
//                     // Своё изображение иконки метки.
//
//                     iconImageHref: '/wp-content/themes/asmart/assets/images/marker-map.png',
//                     // Размеры метки.
//                     iconImageSize: [37, 52],
//                     // Смещение левого верхнего угла иконки относительно
//                     // её "ножки" (точки привязки).
//                     iconImageOffset: [-17, -52]
//                 });
//
//
//             myMap.geoObjects
//
//                 .add(myPlacemark);
//
//             myMap.behaviors.disable('scrollZoom');
//             myMap.behaviors.disable('drag');
//             myMap.behaviors.disable('multiTouch');
//
//             myMap.controls.add('zoomControl', {
//                 float: 'none',
//                 position: {
//                     right: 40,
//                     top: 90
//                 }
//             });
//
//
//         });
//     }
// }


//----------------------------------
//  Mobile Menu
//------------------------------------
// function mobileMenu() {
//     "use strict";
//     let linkClass = '.menu-icon-toggle';
//     let mobileClass = 'open';
//
//     jQuery(linkClass).on('click', function (e) {
//         jQuery('body').toggleClass(mobileClass);
//         e.preventDefault();
//     });
// }

//----------------------------------
//  Input phone field Mask
//------------------------------------
// function phoneMask() {
//     "use strict";
//     let phone_class = jQuery('.phone-input');
//     if (phone_class.length) {
//         phone_class.inputmask({"mask": "+7 (999) 999-9999"});
//
//     }
// }


//----------------------------------
//     Modal   Main
//---------------------------------------
//
// function OpenModal() {
//     "use strict";
//     jQuery(".show-modal-promo").click(function () {
//         jQuery('#promo-modal').fadeIn().addClass('in show');
//         jQuery(' .overlay-layer').addClass('active');
//         return false;
//     });
//
//
//     jQuery(".single-services .banner-section .link_alt-theme").click(function () {
//         jQuery('#service-modal').fadeIn().addClass('in show');
//         jQuery(' .overlay-layer').addClass('active');
//
//         //  add value for hidden input
//         jQuery('#service-modal  input[name="service_name"]').val(jQuery(document).find("title").text());
//         return false;
//     });
//
//     jQuery(".review .review__bottom .link").click(function () {
//         jQuery('#review-modal').fadeIn().addClass('in show');
//         jQuery(' .overlay-layer').addClass('active');
//
//         return false;
//     });
//
//
//     jQuery("#promo-modal .close, #service-modal .close, #review-modal .close, #success-modal .close").click(function () {
//         jQuery('#promo-modal, #service-modal, #review-modal, #success-modal').hide().removeClass('in show');
//         jQuery(' .overlay-layer').removeClass('active');
//         return false;
//     });
//
// }




//----------------------------------
//   awards  carousel
//---------------------------------------
//
// function awardsCarousel() {
//     "use strict";
//     var carouselWrap = jQuery('.awards__carousel');
//
//     if (carouselWrap.length) {
//         carouselWrap.slick({
//             infinite: true,
//             lazyLoad: 'ondemand',
//             slidesToShow: 4,
//             slidesToScroll: 4,
//             arrows: false,
//             dots: true,
//             autoplay: true,
//             autoplaySpeed: 4000,
//             responsive: [
//                 {
//                     breakpoint: 1100,
//                     settings: {
//                         slidesToShow: 3,
//                         slidesToScroll: 3,
//                         arrows: false
//                     }
//                 },
//                 {
//                     breakpoint: 768,
//                     settings: {
//                         slidesToShow: 2,
//                         slidesToScroll: 2,
//                         arrows: false
//                     }
//                 },
//                 {
//                     breakpoint: 600,
//                     settings: {
//                         slidesToShow: 1,
//                         slidesToScroll: 1,
//                         arrows: false
//                     }
//                 }
//                 // You can unslick at a given breakpoint now by adding:
//                 // settings: "unslick"
//                 // instead of a settings object
//             ]
//         });
//     }
// }


//----------------------------------
//   Partners  carousel
//---------------------------------------
//
// function partnersCarousel() {
//     "use strict";
//     var carouselWrap = jQuery('.partners__slider');
//
//     if (carouselWrap.length) {
//         carouselWrap.slick({
//             infinite: true,
//             lazyLoad: 'ondemand',
//             slidesToShow: 4,
//             slidesToScroll: 4,
//             arrows: false,
//             dots: true,
//             autoplay: true,
//             responsive: [
//                 {
//                     breakpoint: 1100,
//                     settings: {
//                         slidesToShow: 3,
//                         slidesToScroll: 3,
//                         arrows: false
//                     }
//                 },
//                 {
//                     breakpoint: 768,
//                     settings: {
//                         slidesToShow: 2,
//                         slidesToScroll: 2,
//                         arrows: false
//                     }
//                 },
//                 {
//                     breakpoint: 600,
//                     settings: {
//                         slidesToShow: 1,
//                         slidesToScroll: 1,
//                         arrows: false
//                     }
//                 }
//                 // You can unslick at a given breakpoint now by adding:
//                 // settings: "unslick"
//                 // instead of a settings object
//             ]
//         });
//     }
// }


//----------------------------------
//   Clients  carousel
//---------------------------------------
//
// function clientsCarousel() {
//     "use strict";
//     var carouselWrap = jQuery('.client__items-list');
//
//     if (carouselWrap.length) {
//         carouselWrap.slick({
//             infinite: true,
//             lazyLoad: 'ondemand',
//             slidesToShow: 4,
//             slidesToScroll: 4,
//             arrows: false,
//             dots: true,
//             autoplay: true,
//             responsive: [
//                 {
//                     breakpoint: 1100,
//                     settings: {
//                         slidesToShow: 3,
//                         slidesToScroll: 3,
//                         arrows: false
//                     }
//                 },
//                 {
//                     breakpoint: 768,
//                     settings: {
//                         slidesToShow: 2,
//                         slidesToScroll: 2,
//                         arrows: false
//                     }
//                 },
//                 {
//                     breakpoint: 600,
//                     settings: {
//                         slidesToShow: 1,
//                         slidesToScroll: 1,
//                         arrows: false
//                     }
//                 }
//                 // You can unslick at a given breakpoint now by adding:
//                 // settings: "unslick"
//                 // instead of a settings object
//             ]
//         });
//     }
// }


//----------------------------------
//   Review  arrow down
//---------------------------------------
//
// function reviewArrowDown() {
//     "use strict";
//     var clickClass = jQuery('.page-reviews__expand');
//     var clickClassEmpty = '.page-reviews__expand';
//
//     var classActive = 'active';
//     if (clickClass.length) {
//         jQuery('body').on('click', clickClassEmpty, function () {
//             var $this = jQuery(this);
//             if ($this.hasClass(classActive)) {
//                 $this.parent().find('.review__content').removeAttr("style");
//                 $this.removeClass(classActive);
//             } else {
//                 $this.addClass(classActive);
//                 $this.parent().find('.review__content').css('height', jQuery(this).parent().find('.review__content div').height());
//             }
//
//             return false;
//         });
//     }
// }


//---------------------------------------
//   Service detail  carousel
//---------------------------------------
//
// function serviceCarousel() {
//     "use strict";
//     var carouseServicelWrap = jQuery('.page-firewall__slider');
//     var $body = jQuery('body');
//     if (carouseServicelWrap.length) {
//
//         carouseServicelWrap.slick({
//             infinite: true,
//             slidesToShow: 3,
//             slidesToScroll: 1,
//             arrows: true,
//             dots: false,
//             // autoplay: true,
//             responsive: [
//                 {
//                     breakpoint: 1100,
//                     settings: {
//                         slidesToShow: 3,
//                         slidesToScroll: 1,
//                         arrows: false
//                     }
//                 },
//                 {
//                     breakpoint: 768,
//                     settings: {
//                         slidesToShow: 2,
//                         slidesToScroll: 1,
//                         arrows: false,
//                         dots: true
//                     }
//                 },
//                 {
//                     breakpoint: 600,
//                     settings: {
//                         slidesToShow: 1,
//                         slidesToScroll: 1,
//                         arrows: false,
//                         dots: true
//                     }
//                 }
//                 // You can unslick at a given breakpoint now by adding:
//                 // settings: "unslick"
//                 // instead of a settings object
//             ]
//         });
//
//
//         $body.on('click', '.page-firewall__arrows-slider .left', function () {
//             carouseServicelWrap.slick('slickPrev');
//             return false;
//         });
//
//         $body.on('click', '.page-firewall__arrows-slider .right', function () {
//             carouseServicelWrap.slick('slickNext');
//             return false;
//         });
//
//     }
// }
//

//---------------------------------------
//   Service detail  carousel  QA
//---------------------------------------
//
// function serviceCarouselQA() {
//     "use strict";
//     var carouseServiceQA = jQuery('.page-firewall__list-qa');
//     var $body = jQuery('body');
//     if (carouseServiceQA.length) {
//
//         carouseServiceQA.slick({
//             infinite: true,
//             slidesToShow: 3,
//             slidesToScroll: 1,
//             // arrows: true,
//             dots: false,
//             // autoplay: true,
//             responsive: [
//                 {
//                     breakpoint: 1100,
//                     settings: {
//                         slidesToShow: 3,
//                         slidesToScroll: 3,
//                         arrows: false
//                     }
//                 },
//                 {
//                     breakpoint: 994,
//                     settings: {
//                         slidesToShow: 2,
//                         slidesToScroll: 2,
//                         arrows: false
//                     }
//                 },
//                 {
//                     breakpoint: 600,
//                     settings: {
//                         slidesToShow: 1,
//                         slidesToScroll: 1,
//                         arrows: false
//                     }
//                 }
//                 // You can unslick at a given breakpoint now by adding:
//                 // settings: "unslick"
//                 // instead of a settings object
//             ]
//         });
//
//
//         $body.on('click', '.arrow-qa  .prev', function () {
//             carouseServiceQA.slick('slickPrev');
//             return false;
//         });
//         $body.on('click', '.arrow-qa .next', function () {
//             carouseServiceQA.slick('slickNext');
//             return false;
//         });
//
//     }
// }

//---------------------------------------
//   Scroll by anchor
//---------------------------------------
//
// function scrollToDiv() {
//     "use strict";
//     if (jQuery('body').hasClass('home')) {
//         jQuery(document).on('click', ' #menu-mobile a[href^="#"]', function (e) {
//
//             var thisId = jQuery(this).attr("href");
//             e.preventDefault();
//
//             var position = jQuery(thisId).offset().top;
//
//             jQuery("body, html").animate({
//                 scrollTop: position - 100
//             }, 'slow');
//             jQuery("body").removeClass('open');
//
//         });
//     }
// }

//----------------------------------
//    Ajax load data
//---------------------------------------
// function ajaxLoadData() {
//     "use strict";
//     var thisBody = jQuery(document);
//     // load portfolio
//     thisBody.on('click', '.archive .link_alt.load-more', function (e) {
//         e.preventDefault();
//         var thisClick = jQuery(this);
//         thisClick.addClass('load');
//         var $page = thisClick.attr('data-page');
//         var data = {
//             action: 'be_ajax_portfolio_load',
//             page: $page
//         };
//         jQuery(this).attr('data-page', ++$page);
//         jQuery.post(myajax.url, data, function (res) {
//             if (res.success) {
//                 if (res.data != '') {
//                     thisClick.removeClass('load');
//                     jQuery('.page-portfolio__list-items')
//                         .append(res.data.data);
//
//                     var countCurrentItem = jQuery('.page-portfolio__list-items li').length;
//                     var ajaxCount = res.data.count.publish;
//
//                     if (countCurrentItem == ajaxCount || countCurrentItem > ajaxCount) {
//                         jQuery('.archive .link_alt.load-more').fadeOut();
//                     }
//
//
//                 } else {
//                     console.log(res);
//                 }
//             }
//         }).fail(function (xhr, textStatus, e) {
//             console.log(xhr.responseText);
//         });
//     });



// }

// document.addEventListener('wpcf7mailsent', function (event) {
//
//     jQuery('.modal').hide().removeClass('in show');
//     jQuery('#success-modal').fadeIn().addClass('in show');
//     setTimeout(function () {
//         jQuery(' .overlay-layer').removeClass('active');
//         jQuery('#success-modal').hide().removeClass('in show');
//     }, 2000);
//
//
//
// }, false);


//----------------------------------
//   Home slider
//---------------------------------------

function homeSlider() {
    "use strict";
    var carouselClass = jQuery('.home-slider_slider');
    var $body = jQuery('body');
    if (carouselClass.length) {
        carouselClass.slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            dots: true,
            autoplaySpeed: 4000,
            responsive: [
                {
                    breakpoint: 690,
                    settings: {
                        arrows: false,
                        dots: true,
                    }
                }
            ],

        });
        $body.on('click', '.home-slider  .home-slider__arrows .left', function () {
            carouselClass.slick('slickPrev');
            return false;
        });

        $body.on('click', '.home-slider .home-slider__arrows  .right', function () {
            carouselClass.slick('slickNext');
            return false;
        });
    }
}




//----------------------------------
//   Popular slider
//---------------------------------------

function popularCarousel() {
    "use strict";
    var carouselClass = jQuery('.popular-product__list');

    if (carouselClass.length) {
        carouselClass.slick({
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 4000,
            responsive: [
                {
                    breakpoint: 690,
                    settings: {
                        arrows: false,
                        dots: true,
                    }
                }
            ],

        });
    }
}

//----------------------------------
//   News Articles carousel  and carousel in detail news articles
//---------------------------------------

function newsArticlesCarousel() {
    "use strict";
    var carouselClass = jQuery('.home-news-articles__carousel, .single-page-news_related-list');

    if (carouselClass.length) {
        carouselClass.slick({
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            // lazyLoad: 'ondemand',
            dots: false,
            responsive: [
                {
                    breakpoint: 690,
                    settings: {
                        arrows: false,
                        dots: true,
                    }
                }
            ],

        });
    }
}

//---------------------------------------
//   Home click by News Articles
//---------------------------------------

function clickByCatsNewsArticles() {
    "use strict";

        jQuery(document).on('click', '.home-news-articles__cats a', function (e) {
            e.preventDefault();
            var thisElement = jQuery(this);
            var thisId = thisElement.attr("data-id");
            jQuery('.home-news-articles__cats a , .home-news-articles__content').removeClass('active');
            thisElement.addClass('active');
            jQuery('.home-news-articles__content.'+thisId).addClass('active');

        });
}

//----------------------------------
//   Partners carousel
//---------------------------------------

function homePartnersCarousel() {
    "use strict";
    var carouselClass = jQuery('.home-partners__carousel');

    if (carouselClass.length) {
        carouselClass.slick({
            infinite: true,
            slidesToShow: 5,
            slidesToScroll: 1,
            autoplay: true,
            lazyLoad: 'ondemand',
            dots: false,
            responsive: [
                {
                    breakpoint: 690,
                    settings: {
                        arrows: false,
                        dots: true,
                    }
                }
            ],

        });
    }
}


//----------------------------------
//   Load more news
//---------------------------------------


function loadMoreNews() {
    "use strict";
    jQuery(document).on('click', '.news-articles-page .load-more', function (e) {
        e.preventDefault();
        var thisClick = jQuery(this);
        thisClick.addClass('load');
        var $page = jQuery(this).attr('data-page');
        var data = {
            action: 'be_ajax_news_articles_load',
            page: $page,
            cat: jQuery('.news-articles__cats-item.active').attr('data-id')
        };


        jQuery(this).attr('data-page', ++$page);

        jQuery.post(myajax.url, data, function (res) {
            if (res.success) {
                if (res.data != '') {

                    thisClick.removeClass('load');

                    jQuery('.news-articles__product-list')
                        .append(res.data.data);

                    var countCurrentItem = jQuery('.news-articles__product-list li').length;
                    var ajaxCount = res.data.count.publish;

                    if (countCurrentItem == ajaxCount || countCurrentItem > ajaxCount) {
                        jQuery('.news-articles-page .load-more').fadeOut();
                    }


                } else {
                    console.log(res);
                }
            }
        }).fail(function (xhr, textStatus, e) {
            console.log(xhr.responseText);
        });
        return false;
    });

}
//---------------------------------------
//   Switch content news articles
//---------------------------------------

function switchContentNewsArticles() {
    "use strict";

    jQuery(document).on('click', '.news-articles__cats-item', function (e) {
        e.preventDefault();
        var thisElement = jQuery(this);
        jQuery('.news-articles__cats-item').removeClass('active');
        thisElement.addClass('active');

        thisElement.addClass('load');
        // add preloader in content
        jQuery('.news-articles__product-list').html('<div class="preloader w-100  d-flex  mb-5  justify-content-center"><img src="/wp-content/themes/asmart/assets/images/loading.gif" /> </div>');


        // reset data-page for load more button
        jQuery('.load-more').attr('data-page', '2').show();

        var dataId = thisElement.attr('data-id');
        var data = {
            action: 'be_ajax_news_articles_load',
            cat: dataId
        };
        jQuery.post(myajax.url, data, function (res) {
            if (res.success) {
                if (res.data != '') {

                    thisElement.removeClass('load');

                    jQuery('.preloader').remove();

                    jQuery('.news-articles__product-list')
                        .append(res.data.data);

                    var countCurrentItem = jQuery('.news-articles__product-list li').length;
                    var ajaxCount = res.data.count.publish;

                    if (countCurrentItem == ajaxCount || countCurrentItem > ajaxCount) {
                        jQuery('.news-articles-page .load-more').fadeOut();
                    }


                } else {
                    console.log(res);
                }
            }
        }).fail(function (xhr, textStatus, e) {
            console.log(xhr.responseText);
        });
    });
}




