<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Exchange
 * @since Twenty Fifteen 1.0
 * template Name: Locales
 */

get_header(); ?>
<section class="engine"><a rel="external" href="https://mobirise.com">best offline web maker software</a></section><section class="mbr-section mbr-after-navbar" id="form2-2j" style="background-color: rgb(255, 255, 255); padding-top: 120px; padding-bottom: 40px;">
        <div class="mbr-section mbr-section__container mbr-section__container--middle">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-xs-center">
                    <h3 class="mbr-section-title display-2">ENCONTRA TU SUCURSAL</h3>
                    
                </div>
            </div>
        </div>
    </div>
    <!--<div class="mbr-section mbr-section-nopadding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-10 col-lg-offset-1" data-form-type="formoid">
                    <div data-form-alert="true"><div hidden="" data-form-alert-success="true"></div></div>
                    <form class="mbr-form" action="https://mobirise.com/" method="post" data-form-title="ENCONTRA TU SUCURSAL">
                        <input type="hidden" value="uSLN4WLt48+tnsiJthCsQLitVJ5i7IsgX7xwPRSTMlq0I7NRkNGoUvOVCUUxf0rIeCB6JzP0PPaqopa7QTOlUxnkxyUHOwY8NGRT9gV92iyD7D/QcZUv6XsX/l2Noct2" data-form-email="true">
                        <div class="mbr-subscribe mbr-subscribe-dark input-group">
                            <input type="email" class="form-control" name="email" required="" data-form-field="Email" placeholder="Elegí tu barrio..." id="form2-2j-email">
                            <span class="input-group-btn"><button type="submit" class="btn btn-warning">ELEGI EL BARRIO</button></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>-->
    <div class="clearfix"></div>
</section>

<section class="mbr-section mbr-section-nopadding" id="map1-2i">
      <!--<select id="type" onchange="filterMarkers(this.value);">
          <option value="">Please select category</option>
          <option value="second">second</option>
          <option value="car">car</option>
          <option value="third">third</option>
      </select>-->
      <div id="map-canvas" class="google-map"></div>
    <div class="clearfix"></div>
</section>
<div class="clearfix"></div>

<?php get_template_part("parts/bottom"); ?>

<?php get_footer(); ?>

<?php
$pointsarg=array(
  'nopaging' => true,
  'post_type'   => 'local',
  );

$point=new WP_Query($pointsarg);
$count=0;
?>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAf0nrbD6gurYm4Cj3O9sfbkubEXZHB4tQ&v=3.0&sensor=true&language=ee" type="text/javascript"></script>

<script>
        var gmarkers1 = [];
        var markers1 = [];
        var infowindow = new google.maps.InfoWindow({
            content: ''
        });

        // Our markers
        markers1 = [
        <?php if ( $point->have_posts() ) : while ( $point->have_posts() ) : $point->the_post();

        	$name=get_field("nombre");
        	$direccion=get_field("direccion");
        	$location=get_field("ubicacion");
         ?>

            ['<?php echo $count; ?>', '<?php echo $name; ?>', <?php echo $location["lat"]; ?>, <?php echo $location["lng"]; ?>, 'car'],
        <?php 
        		$count++;
        		endwhile; 
       	?>
        <?php else: ?>
        <?php endif; ?>
        ];

        /**
         * Function to init map
         */

        function initialize() {
            var center = new google.maps.LatLng(-34.5759525, -58.4868778);
            var mapOptions = {
                zoom: 12,
                center: center,
                scrollwheel: false,
                navigationControl: true,
                mapTypeControl: false,
                scaleControl: true,
                draggable: true,
                mapTypeId: google.maps.MapTypeId.TERRAIN
            };

            map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
            for (i = 0; i < markers1.length; i++) {
                addMarker(markers1[i]);
            }
        }

        /**
         * Function to add marker to map
         */

        function addMarker(marker) {
            var category = marker[4];
            var title = marker[1];
            var pos = new google.maps.LatLng(marker[2], marker[3]);
            var content = marker[1];

            marker1 = new google.maps.Marker({
                title: title,
                position: pos,
                category: category,
                map: map
            });

            gmarkers1.push(marker1);

            // Marker click listener
            google.maps.event.addListener(marker1, 'click', (function (marker1, content) {
                return function () {
                    console.log('Gmarker 1 gets pushed');
                    infowindow.setContent(content);
                    infowindow.open(map, marker1);
                    map.panTo(this.getPosition());
                    map.setZoom(15);
                }
            })(marker1, content));
        }

        /**
         * Function to filter markers by category
         */

        filterMarkers = function (category) {
            for (i = 0; i < markers1.length; i++) {
                marker = gmarkers1[i];
                // If is same category or category not picked
                if (marker.category == category || category.length === 0) {
                    marker.setVisible(true);
                }
                // Categories don't match 
                else {
                    marker.setVisible(false);
                }
            }
        }

        // Init map
        initialize();
      </script>