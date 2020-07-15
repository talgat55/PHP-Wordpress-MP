<?php
/*
 * Template Name: Страница контактов
 */
get_header();

$mainInfo = get_field('main_info_contact');
$email_contact = get_field('email_contact');
$address_contact = get_field('address_contact');
$phone_contact = get_field('phone_contact');
$pfaks_contact = get_field('pfaks_contact');


?>
<?php get_template_part('inc/breadsrumb'); ?>
    <section class="page-contacts">
        <div class="container">
            <div class="row d-lg-flex  align-items-center">
                <div class="col-12 col-lg-5">
                    <?php echo $mainInfo; ?>

                    <div class="page-contacts__info-block">
                        <div class="d-flex page-contacts__item-info ">
                            <svg width="12" height="18" viewBox="0 0 12 18" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.00001 0C2.69167 0 0 2.69167 0 6.00001C0 6.99318 0.248309 7.9779 0.720352 8.85132L5.6719 17.8066C5.73782 17.926 5.86343 18 6.00001 18C6.13659 18 6.26221 17.926 6.32813 17.8066L11.2815 8.84837C11.7517 7.9779 12 6.99314 12 5.99998C12 2.69167 9.30836 0 6.00001 0ZM6.00001 9C4.34584 9 3.00002 7.65418 3.00002 6.00001C3.00002 4.34584 4.34584 3.00002 6.00001 3.00002C7.65418 3.00002 9 4.34584 9 6.00001C9 7.65418 7.65418 9 6.00001 9Z"
                                      fill="#005BD7"/>
                            </svg>
                            <?php echo $address_contact; ?>
                        </div>

                        <div class="d-flex page-contacts__item-info ">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.7162 10.5022C13.7366 10.5022 12.7747 10.349 11.8633 10.0478C11.4167 9.89542 10.8676 10.0352 10.595 10.3151L8.796 11.6732C6.70963 10.5595 5.42446 9.27475 4.32596 7.20404L5.64408 5.45188C5.98654 5.10988 6.10938 4.61029 5.96221 4.14154C5.65971 3.22529 5.50604 2.26392 5.50604 1.28392C5.50608 0.575958 4.93013 0 4.22221 0H1.28387C0.575958 0 0 0.575958 0 1.28387C0 9.39846 6.60158 16 14.7162 16C15.4241 16 16 15.424 16 14.7161V11.786C16 11.0781 15.424 10.5022 14.7162 10.5022Z"
                                      fill="#005BD7"/>
                            </svg>
                            <div>
                                <?php echo $address_contact; ?><br/>
                                <?php echo $pfaks_contact ;?>
                            </div>
                        </div>
                        <div class="d-flex page-contacts__item-info ">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.334744 2.97362C2.53068 4.83334 6.38387 8.10516 7.51637 9.12531C7.6684 9.263 7.83146 9.333 8.00074 9.333C8.16968 9.333 8.33246 9.26366 8.48415 9.12663C9.61762 8.10547 13.4708 4.83334 15.6668 2.97362C15.8035 2.85806 15.8243 2.65494 15.7137 2.51366C15.4578 2.18719 15.0763 2 14.6674 2H1.33409C0.925244 2 0.543713 2.18719 0.287869 2.51369C0.177182 2.65494 0.198026 2.85806 0.334744 2.97362Z" fill="#005BD7"/>
                                <path d="M15.8067 3.98152C15.6885 3.92652 15.5495 3.9457 15.4512 4.0297C13.0159 6.09414 9.90788 8.74033 8.93 9.62149C8.38116 10.1169 7.61944 10.1169 7.06931 9.62083C6.027 8.6817 2.53675 5.71458 0.548813 4.02967C0.449844 3.94567 0.310531 3.92714 0.193344 3.98148C0.0755312 4.0362 0 4.15405 0 4.28392V12.6667C0 13.4021 0.597969 14.0001 1.33334 14.0001H14.6667C15.402 14.0001 16 13.4021 16 12.6667V4.28392C16 4.15405 15.9245 4.03589 15.8067 3.98152Z" fill="#005BD7"/>
                            </svg>
                            Электронная почта: <a href="mailto:<?php echo $email_contact; ?>">
                                <?php echo $email_contact; ?>
                            </a>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-lg-7">
                    <div id="map"></div>
                </div>
            </div>
        </div>
        <script>
            google.maps.event.addDomListener(window, 'load', init);

            function init() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 14,

                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(54.983370, 73.405003), // New York

                    // How you would like to style the map.
                    // This is where you would paste any style found on Snazzy Maps.
                    styles: []
                };

                // Get the HTML DOM element that will contain your map
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('map');

                // Create the Google Map using our element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);
                var image = {
                    url: '/wp-content/themes/asmart/assets/images/marker.png',
                    size: new google.maps.Size(32, 48),
                    // The origin for this image is (0, 0).
                    origin: new google.maps.Point(0, 0),
                    // The anchor for this image is the base of the flagpole at (0, 32).
                    anchor: new google.maps.Point(0, 48)
                };

                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(54.983370, 73.405003),
                    map: map,
                    icon: image,
                    title: 'Офис'
                });


            }
        </script>
    </section>
<?php get_footer();
