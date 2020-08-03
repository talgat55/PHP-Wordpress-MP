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
    acccordionCats();
    productRelatedCarousel();
    phoneMask();

    openModal();

    //
    // Lazy load
    //
    // jQuery('.lazy').lazy();
    //
    jQuery('.menu-icon-toggle').on('click', function (e) {
        jQuery('body').toggleClass('open');

        e.preventDefault();
    });


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
//  Input phone field Mask
//------------------------------------
function phoneMask() {
    "use strict";
    let phone_class = jQuery('.phone-input, #billing_billing_phone');
    if (phone_class.length) {
        phone_class.inputmask({"mask": "+7 (999) 999-9999"});

    }
}

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


//----------------------------------
//     Modal   Main
//---------------------------------------

function openModal() {
    "use strict";
    var bodyClass = jQuery('body');

    bodyClass.on('click', ".booking-link", function () {
        var $this = jQuery(this);
        jQuery('#booking-modal').fadeIn().addClass('in show');
        jQuery(' .overlay-layer').addClass('active');
        return false;
    });

    bodyClass.on('click', ".checkout-link", function () {
        var $this = jQuery(this);
        jQuery('#checkout-modal').fadeIn().addClass('in show');
        jQuery(' .overlay-layer').addClass('active');
        return false;
    });


    jQuery("#booking-modal .close, #checkout-modal .close, #review-modal .close, #success-modal .close").click(function () {
        jQuery('.modal').hide().removeClass('in show');
        jQuery(' .overlay-layer').removeClass('active');
        return false;
    });

}


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
                    breakpoint: 768,
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
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        arrows: false,
                        dots: true,
                    }
                },
                {
                    breakpoint: 993,
                    settings: {
                        slidesToShow: 2,
                        arrows: false,
                        dots: true,
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
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
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        arrows: false,
                        dots: true,
                    }
                },
                {
                    breakpoint: 993,
                    settings: {
                        slidesToShow: 2,
                        arrows: false,
                        dots: true,
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        arrows: false,
                        dots: true,
                    }
                }
            ],

        });
    }
}

//----------------------------------
//  Product related carousel
//---------------------------------------

function productRelatedCarousel() {
    "use strict";
    var carouselClass = jQuery('.single-product__list-related-products');

    if (carouselClass.length) {
        carouselClass.slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            // lazyLoad: 'ondemand',
            arrows: false,
            dots: true,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        arrows: false,
                        dots: true,
                    }
                },
                {
                    breakpoint: 993,
                    settings: {
                        slidesToShow: 2,
                        arrows: false,
                        dots: true,
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
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
        jQuery('.home-news-articles__content.' + thisId).addClass('active');

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
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        arrows: false,
                        dots: true,
                    }
                },
                {
                    breakpoint: 993,
                    settings: {
                        slidesToShow: 2,
                        arrows: false,
                        dots: true,
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
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
//   Cats toggle
//---------------------------------------
function acccordionCats() {
    "use strict";
    jQuery('.woocommerce-product-category-page svg').click(function () {
        jQuery(this).parent().find('ul').stop().slideToggle();
        jQuery(this).toggleClass("active");
        jQuery(this).parent().toggleClass("active");
    });

    //  on mobile show hide block categories
    jQuery('.catalog-menu__title').click(function () {
        jQuery(this).parent().find('.woocommerce-categories').stop().slideToggle();
        jQuery(this).toggleClass("active");
        jQuery(this).parent().toggleClass("active");
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


document.addEventListener('wpcf7mailsent', function (event) {

    jQuery('.modal').hide().removeClass('in show');
    jQuery('#success-modal').fadeIn().addClass('in show');
    setTimeout(function () {
        jQuery(' .overlay-layer').removeClass('active');
        jQuery('#success-modal').hide().removeClass('in show');
    }, 2000);


    // if (event.detail.contactFormId == "51") {
    //     successModal();
    // }
    //  if (event.detail.contactFormId == "168") {
    //     successModal();
    // }
}, false);



