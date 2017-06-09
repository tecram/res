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
 * template Name: Blog
 */

$artargs=array(
  'posts_per_page' => 5,
  'post_type'   => 'post',
  );

$postlist = new WP_Query($artargs);

$destacados=array();
$otras=array();
$count=0;
if ( $postlist->have_posts() ) : while ( $postlist->have_posts() ) : $postlist->the_post(); 

if($count <= 1 ){
  $destacados[$count]["title"]=get_the_title();
  $destacados[$count]["image"]=get_field("imagen_destacada");
  $destacados[$count]["extracto"]=get_the_excerpt();
  $destacados[$count]["url"]=get_permalink();
}else{
  $otras[$count]["title"]=get_the_title();
  $otras[$count]["image"]=get_field("imagen_destacada");
  $otras[$count]["extracto"]=get_the_excerpt();
  $otras[$count]["url"]=get_permalink();
}
$count++;
?>
<?php endwhile; ?>
<?php else: ?>
<?php endif;

get_header(); ?>

<section class="engine"><a rel="external" href="https://mobirise.com">best mobile website design software</a></section><section class="mbr-section mbr-section-md-padding mbr-footer footer1 mbr-after-navbar" id="contacts1-11" style="background-color: rgb(0, 46, 89); padding-top: 30px; padding-bottom: 0px;">
    
    <div class="container">
        <div class="row">
            <div class="mbr-footer-content col-xs-12 col-md-3">
                <div><img src="<?php echo DIR; ?>/assets/images/log-260x128-92-128x63-66.png"></div>
            </div>
            <div class="mbr-footer-content col-xs-12 col-md-3">
                <p></p>
            </div>
            <div class="mbr-footer-content col-xs-12 col-md-3">
                <p></p>
            </div>
            <div class="mbr-footer-content col-xs-12 col-md-3">
                <p></p><p><br>
<a href="http://www.italica.com.ar" target="_blank">©&nbsp;italica.com.ar</a><a href="http://www.italica.com.ar" target="_blank"></a><a class="text-primary" href="https://mobirise.com/mobirise-free-mac.zip"></a></p><p></p>
            </div>

        </div>
    </div>
</section>

<section class="mbr-section mbr-section__container article" id="header3-2l" style="background-color: rgb(255, 255, 255); padding-top: 20px; padding-bottom: 20px;">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h3 class="mbr-section-title display-2" style="padding: 30px;">Blog Res</h3>

                <div class="col-md-12"><!-- SIDEBAR CHANGE TO col-md-10 -->
                  <div class="row">
                    <?php foreach ($destacados as $notad) { ?>
                    <div class="col-md-6">
                      <div class="itm-blog big">
                        <h4 class="dark-blue"><?php echo $notad["title"]; ?></h4>
                        <img src="<?php echo $notad["image"]["sizes"]["news-big"]; ?>" />
                        <p><?php echo $notad["extracto"] ?> </p>
                        <a class="more" href="<?php echo $notad["url"]; ?>">Leer Más</a>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                    <?php } ?>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
                <div class="blog-list">
                  <?php
                    foreach ($otras as $nota) {
                  ?>
                  <div class="itm dark-blue">
                    <div class="row">
                      <div class="col-md-3 col-sm-3 col-xs-4">
                        <div class="img" style="background: url('<?php  echo $nota["image"]["sizes"]["news-thumb"]; ?>') no-repeat center center;"></div>
                      </div>
                      <div class="col-md-9 col-sm-9 col-xs-8">
                        <div class="title">
                          <h4><a href="<?php echo $nota["url"]; ?>"><?php echo $nota["title"]; ?></a></h4>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <?php } ?>
                  
                </div>
                <!--SIDEBAR-->
                <!--<div class="col-md-2">
                  SIDEBAR
                </div>-->
                <!--SIDEBAR-->
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
