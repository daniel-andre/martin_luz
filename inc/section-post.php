<section class="section section_post section-padding-120">
  <h2>Últimos posts</h2>
  <div class="row">
    <?php

    $args = array(
      'post_type' => 'post',
      'order'   => 'ASC',
      'showposts' => '3'
    );
    $query = new WP_Query($args);
    if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

        <div class="col-12 col-sm-12 col-md-4 col-lg-4">
          <a href="<?php the_permalink(); ?>">
            <figure>
              <img src="<?php echo get_template_directory_uri(); ?>/img/imagem_post.png" alt="">
              <p><?php the_title(); ?></p>
            </figure>
          </a>
        </div>

      <?php endwhile;
    else : ?>

      <div class="col-12 col-sm-12 col-md-12 col-lg-12">
        <h1>Nenhum post ainda :C</h1>
      </div>

    <?php endif; ?>
  </div>
</section>