<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <section>
      <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
          <h1><?php the_title(); ?></h1>
          <?php the_content(); ?>
        </div>
      </div>
    </section>

  <?php endwhile;
else : ?>

  <section>
    <div class="row">
      <div class="col-12 col-sm-12 col-md-12 col-lg-12">
        <h1>Página não encontrada.</h1>
      </div>
    </div>
  </section>

<?php endif; ?>

<?php get_footer(); ?>