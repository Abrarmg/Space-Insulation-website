<?php get_header(); ?>

<section class="pt-32 pb-12 bg-secondary">
   <div class="container mx-auto px-4 text-center">
      <h1 class="text-white text-5xl md:text-7xl font-black font-heading uppercase tracking-tighter animate-fade-up"><?php single_post_title(); ?></h1>
   </div>
</section>

<section class="py-20 bg-white">
  <div class="container mx-auto px-4">
    <?php if ( have_posts() ) : ?>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <?php while ( have_posts() ) : the_post(); ?>
          <article id="post-<?php the_ID(); ?>" <?php post_class('bg-white p-8 rounded-3xl shadow-lg border border-gray-100'); ?>>
            <h2 class="text-2xl font-bold text-secondary mb-4"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <div class="text-secondary/60 mb-4"><?php the_excerpt(); ?></div>
            <a href="<?php the_permalink(); ?>" class="text-primary font-bold uppercase tracking-widest text-sm">Read More</a>
          </article>
        <?php endwhile; ?>
      </div>
      <div class="mt-8">
        <?php the_posts_navigation(); ?>
      </div>
    <?php else : ?>
      <p><?php _e( 'Sorry, no posts matched your criteria.', 'space-insulation' ); ?></p>
    <?php endif; ?>
  </div>
</section>

<?php get_footer(); ?>
