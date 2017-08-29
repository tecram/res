<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Exchange
 * @since Twenty Fifteen 1.0
 */

get_header(); 
$image=get_field("imagen_destacada");

?>
<section class="engine"><a rel="external" href="https://mobirise.com">best mobile website design software</a></section><section class="mbr-section mbr-section-md-padding mbr-footer footer1 mbr-after-navbar" id="contacts1-11" style="background-color: rgb(0, 46, 89); padding-top: 30px; padding-bottom: 0px;">
    
    <div class="container">
        <div class="row">
            <div class="mbr-footer-content col-xs-12 col-md-3">
                <div><img src="assets/images/log-260x128-92-128x63-66.png"></div>
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
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
		$actual=get_the_id();
?>

<section class="mbr-section mbr-section__container article" id="header3-2l" style="background-color: rgb(255, 255, 255); padding-top: 20px; padding-bottom: 20px;">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h3 class="mbr-section-title display-2" style="padding: 30px;"><?php the_title(); ?></h3>

                <div class="col-md-12"><!-- SIDEBAR CHANGE TO col-md-10 -->
                  <div class="row">
                    <div class="itm-blog-detail">
                      <!-- <div class="img" style="background: url('<?php echo $image["url"];?>') no-repeat center center;"></div> -->
                      <img src="<?php echo $image["url"];?>">
                     <?php the_content(); ?>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                </div>
		<?php endwhile; ?>
		<?php else: ?>
		<?php endif; ?>
		<?php
			$artargs=array(
			  'posts_per_page' => 2,
			  'post_type'   => 'post',
			  'orderby'   => 'rand',
			  'post__not_in'   => array($actual),
		  	);

			$otras= new WP_Query($artargs);
		?>
                <div class="clearfix"></div>
                <div class="blog-list">
                  <h4 class="display-4">Otras publicaciones</h4>
                  <?php if ( $otras->have_posts() ) : while ( $otras->have_posts() ) : $otras->the_post(); 
                  	$image=get_field("imagen_destacada");
                  ?>
                  <div class="itm dark-blue">
                    <div class="row">
                      <div class="col-md-3 col-sm-3 col-xs-4">
                        <div class="img" style="background: url('<?php echo $image["sizes"]["news-thumb"]; ?>') no-repeat center center;"></div>
                      </div>
                      <div class="col-md-9 col-sm-9 col-xs-8">
                        <div class="title">
                          <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <?php endwhile; ?>
                  <?php else: ?>
                  <?php endif; ?>
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
