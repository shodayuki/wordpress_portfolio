<?php get_header(); ?>
  <div id="content">
    <article>
      <?php if ( have_posts() ) : the_post(); ?>
      <section <?php post_class(); ?>>
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
      </section>
      <?php else : ?>
        <h2>投稿がありません</h2>
      <?php endif; ?>
    </article>
  </div>
<?php get_footer(); ?>