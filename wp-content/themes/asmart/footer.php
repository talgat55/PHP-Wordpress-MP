<footer class="footer">
    <?php
    $phone_number_one = get_field('phone_header_one', 'option');
    $phone_number_two = get_field('phone_header_two', 'option');

    ?>
    <div class="container">
        <div class="row   ">
            <div class="footer__first-row  col-lg-3 col-sm-12  position-relative">
                <a class="footer-logo" href="<?php echo home_url(); ?>">
                    <svg width="236" height="38" viewBox="0 0 236 38" fill="none" xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink">
                        <rect width="236" height="38" fill="url(#pattern1)"/>
                        <defs>
                            <pattern id="pattern1" patternContentUnits="objectBoundingBox" width="1" height="1">
                                <use xlink:href="#image1"
                                     transform="translate(0 -0.0123161) scale(0.003367 0.0209109)"/>
                            </pattern>
                            <image id="image1" width="297" height="49"
                                   xlink:href="data:image/png;base64,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"/>
                        </defs>
                    </svg>
                </a>
                <div class="footer__phone-block">
                    <div>
                        <div class="d-flex align-items-center footer__phone-item">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.7162 10.5022C13.7366 10.5022 12.7747 10.349 11.8633 10.0478C11.4167 9.89542 10.8676 10.0352 10.595 10.3151L8.796 11.6732C6.70963 10.5595 5.42446 9.27475 4.32596 7.20404L5.64408 5.45188C5.98654 5.10988 6.10938 4.61029 5.96221 4.14154C5.65971 3.22529 5.50604 2.26392 5.50604 1.28392C5.50608 0.575958 4.93013 0 4.22221 0H1.28387C0.575958 0 0 0.575958 0 1.28387C0 9.39846 6.60158 16 14.7162 16C15.4241 16 16 15.424 16 14.7161V11.786C16 11.0781 15.424 10.5022 14.7162 10.5022Z" fill="#005BD7"/>
                            </svg>
                            <a href="tel:<?php echo $phone_number_one; ?>">
                                <?php echo $phone_number_one; ?>
                            </a>
                        </div>
                        <div class="header__text-phone">
                            Бесплатный звонок из любой точки России
                        </div>
                        <div class="d-flex align-items-center footer__phone-item">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.7162 10.5022C13.7366 10.5022 12.7747 10.349 11.8633 10.0478C11.4167 9.89542 10.8676 10.0352 10.595 10.3151L8.796 11.6732C6.70963 10.5595 5.42446 9.27475 4.32596 7.20404L5.64408 5.45188C5.98654 5.10988 6.10938 4.61029 5.96221 4.14154C5.65971 3.22529 5.50604 2.26392 5.50604 1.28392C5.50608 0.575958 4.93013 0 4.22221 0H1.28387C0.575958 0 0 0.575958 0 1.28387C0 9.39846 6.60158 16 14.7162 16C15.4241 16 16 15.424 16 14.7161V11.786C16 11.0781 15.424 10.5022 14.7162 10.5022Z" fill="#005BD7"/>
                            </svg>
                            <a href="tel:<?php echo $phone_number_two; ?>">
                                <?php echo $phone_number_two; ?>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="footer__second-row col-lg-9 col-sm-12  position-relative d-flex align-items-center">
              <div class="d-lg-flex  justify-content-between   w-100">
                  <div class="col-12  col-lg-5 col-md-12">
                          <?php wp_nav_menu('container=div&menu_id=footer-main&menu_class=footer-main-container clearfix&theme_location=top_menu'); ?>
                  </div>
                  <div class="col-12 col-lg-7 col-md-12  align-items-end  d-flex">
                      <div class="d-md-flex   justify-content-lg-between w-100 align-items-end">
                          <div class="footer__other-links   ">
                              <a href="/policy" class="link-to-policy">
                                  Политика конфиденциальности
                              </a>
                              <a target="_blank" class="bottom-copyright" title="Перейти на сайт разработчика"
                                 href="https://asmart-group.ru/">Cайт создан в IT-company <span>ASMART</span></a>
                          </div>
                          <div  class="footer__soc-link-block">
                              <div class="text-right   soc__title">Социальные сети:</div>
                              <ul class="d-flex  soc-links justify-content-end">
                                  <li>
                                      <a href="#"  target="_blank">
                                          <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                              <rect width="21" height="21" rx="2" fill="#005BD7"/>
                                              <g clip-path="url(#clip0)">
                                                  <path d="M12.6648 6.15854H13.8516V4.09154C13.6469 4.06338 12.9427 4 12.1226 4C10.4115 4 9.23932 5.07629 9.23932 7.05446V8.875H7.35107V11.1858H9.23932V17H11.5544V11.1863H13.3663L13.6539 8.87554H11.5539V7.28358C11.5544 6.61571 11.7342 6.15854 12.6648 6.15854Z" fill="white"/>
                                              </g>
                                              <defs>
                                                  <clipPath id="clip0">
                                                      <rect width="13" height="13" fill="white" transform="translate(4 4)"/>
                                                  </clipPath>
                                              </defs>
                                          </svg>
                                      </a>
                                  </li>
                                  <li>
                                      <a href="#"  target="_blank">
                                          <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                              <rect width="21" height="21" rx="2" fill="#005BD7"/>
                                              <path d="M11.3206 14.4355C11.3206 14.4355 11.5612 14.4092 11.6844 14.2793C11.7973 14.1602 11.7934 13.9355 11.7934 13.9355C11.7934 13.9355 11.7784 12.8863 12.2746 12.7314C12.7637 12.5791 13.3917 13.746 14.0582 14.1948C14.5617 14.534 14.9438 14.4598 14.9438 14.4598L16.7248 14.4355C16.7248 14.4355 17.656 14.3791 17.2145 13.6603C17.178 13.6014 16.9569 13.1283 15.8907 12.1566C14.7736 11.1394 14.9236 11.3039 16.2683 9.54421C17.0874 8.47263 17.4147 7.81841 17.3124 7.53867C17.2152 7.2711 16.6126 7.34215 16.6126 7.34215L14.608 7.35431C14.608 7.35431 14.4593 7.33447 14.3491 7.39912C14.2415 7.4625 14.1717 7.61037 14.1717 7.61037C14.1717 7.61037 13.8547 8.43934 13.4315 9.14476C12.5387 10.6324 12.182 10.7112 12.0359 10.619C11.6962 10.4033 11.781 9.75353 11.781 9.29199C11.781 7.84978 12.004 7.24869 11.3473 7.09314C11.1295 7.04129 10.9691 7.00736 10.4115 7.0016C9.69609 6.99456 9.09091 7.00416 8.74789 7.16868C8.51964 7.27814 8.34356 7.52267 8.45116 7.53675C8.58355 7.55404 8.88353 7.61613 9.04265 7.82865C9.24807 8.10327 9.2409 8.71908 9.2409 8.71908C9.2409 8.71908 9.35894 10.4167 8.96505 10.6273C8.69506 10.772 8.32465 10.4769 7.5284 9.12684C7.12081 8.4355 6.813 7.67118 6.813 7.67118C6.813 7.67118 6.75366 7.52843 6.64736 7.45161C6.51889 7.3588 6.33956 7.32999 6.33956 7.32999L4.43467 7.34215C4.43467 7.34215 4.14839 7.34983 4.04339 7.4721C3.95014 7.58028 4.03622 7.80497 4.03622 7.80497C4.03622 7.80497 5.52765 11.2303 7.21668 12.9568C8.76549 14.5392 10.5236 14.4355 10.5236 14.4355H11.3206Z" fill="white"/>
                                          </svg>
                                      </a>
                                  </li>
                              </ul>
                          </div>

                      </div>
                  </div>
              </div>
            </div>
        </div>
    </div>


</footer>
<?php
//if (is_page_template('page-partners.php')) {
//    get_template_part('inc/partners-modal');
//}else{
//    get_template_part('inc/feedback-modal');
//}
?>
<?php //get_template_part('inc/success-modal'); ?>
<!--<a id="back_to_top" href="#">-->
<!--    <div class="ba-block">-->
<!--        <img src="--><?php //echo get_theme_file_uri('/assets/images/arrow-up.png') ?><!--" alt="Стрелка верх">-->
<!--    </div>-->
<!--</a>-->

<?php get_template_part('inc/modal-booking');  ?>

<!-- Modal  Success -->
<div class="modal fade" id="success-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
               <h3>
                   Спасибо, ваше письмо получено
               </h3>
            </div>
        </div>
    </div>
</div>

<div class="overlay-layer"></div>


<?php wp_footer(); ?>
</div>
</body>
</html>
