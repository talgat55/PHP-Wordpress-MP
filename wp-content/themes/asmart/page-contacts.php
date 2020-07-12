<?php
/*
 * Template Name: Страница контактов
 */
get_header();

$mainInfo = get_field('main_info_contact');
$email_contact = get_field('email_contact');
$address_contact = get_field('address_contact');
$phone_contact = get_field('phone_contact');



?>
<?php get_template_part('inc/breadsrumb'); ?>
    <section class="page-contacts">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-5">

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
