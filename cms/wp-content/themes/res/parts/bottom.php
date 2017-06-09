<?php
  $artargs=array(
  'posts_per_page' => 2,
  'post_type'   => 'post',
  );

$postlist = new WP_Query($artargs);
?>

<div class="margin-bottom-m">
  <div class="col-md-4">
    <div class="box-module row">
      <div class="text-center">
        <h3><strong>ACÁ<br>ESTAMOS</strong></h3>
      </div>
      <div class="text-center">
        <p>Encontrá tu sucursal</p>
      </div>
      <img src="<?php echo DIR; ?>/assets/images/aca-estamos.jpg" alt="" class="bg">
    </div>
  </div>
  <div class="col-md-4">
    <div class="box-module fill row">
      <div class="text-center">
        <h3><strong>SEGUINOS</strong></h3>
      </div>
      <div class="text-center">
        <ul>
          <li><a href="javascript:void(0)"><img src="<?php echo DIR; ?>/assets/images/facebook-icon.png"></a></li>
          <li><a href="javascript:void(0)"><img src="<?php echo DIR; ?>/assets/images/instagram-icon.png"></a></li>
          <li><a href="javascript:void(0)"><img src="<?php echo DIR; ?>/assets/images/youtube-icon.png"></a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="box-module row">
      <div class="text-center">
        <h3><strong>HACEMOS<br>ESCUELA</strong></h3>
      </div>
      <div class="text-center">
        <p>Trabaja con nosotros</p>
      </div>
      <img src="<?php echo DIR; ?>/assets/images/trabaja.jpg" alt="" class="bg">
    </div>
  </div>
  <div class="clearfix"></div>
</div>

<section class="container blog-small-module">
  <div class="row">
    <div class="socials col-md-5">
      <p>Todas las novedades están en nuestro Blog y en nuestras redes sociales</p>
      <ul>
        <li><a href="javascript:void(0)"><img src="<?php echo DIR; ?>/assets/images/facebook-icon.png"></a></li>
        <li><a href="javascript:void(0)"><img src="<?php echo DIR; ?>/assets/images/instagram-icon.png"></a></li>
        <li><a href="javascript:void(0)"><img src="<?php echo DIR; ?>/assets/images/youtube-icon.png"></a></li>
      </ul>
    </div>
    <div class="small-blog col-md-7">
        <div class="row">
          <?php if ( $postlist->have_posts() ) : while ( $postlist->have_posts() ) : $postlist->the_post(); 
              $image=get_field("imagen_destacada");
          ?>
            <div class="col-md-6">
              <div class="itm-blog">
                <h4 class="dark-blue"><?php the_title(); ?></h4>
                <img src="<?php echo $image["sizes"]["news-thumb"]; ?>" class="img-fluid" />
                <?php echo the_excerpt(); ?>
                <a class="more" href="<?php the_permalink(); ?>">Leer Más</a>
                <div class="clearfix"></div>
              </div>
            </div>
          <?php endwhile; ?>
          <?php else: ?>
          <?php endif; ?>
        
        </div>
        <div class="clearfix"></div>
    </div>
  </div>
</section>
