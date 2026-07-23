<?php get_header(); ?>

<main class="bg-white text-secondary font-sans overflow-x-hidden pt-24">
  <?php while ( have_posts() ) : the_post(); ?>
    <!-- Post Header -->
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <header class="relative py-20 bg-secondary text-white overflow-hidden">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_30%_30%,rgba(131,183,53,0.15),transparent)] pointer-events-none"></div>
        <div class="container mx-auto px-4 max-w-4xl relative z-10 text-center">
          <div class="flex items-center justify-center space-x-2 bg-primary/20 text-primary border border-primary/30 px-4 py-1.5 rounded-full mb-6 font-bold uppercase tracking-widest text-[10px] w-max mx-auto">
            <span>
              <?php 
                $categories = get_the_category();
                if ( ! empty( $categories ) ) {
                    echo esc_html( $categories[0]->name );   
                } else {
                    echo 'Blog';
                }
              ?>
            </span>
          </div>
          <h1 class="text-4xl sm:text-5xl font-black font-heading leading-tight uppercase tracking-tight mb-6">
            <?php the_title(); ?>
          </h1>
          <div class="flex items-center justify-center text-white/50 text-xs font-bold uppercase tracking-widest space-x-4">
            <span class="flex items-center"><i data-lucide="calendar" class="w-3.5 h-3.5 mr-1.5 text-primary"></i> <?php echo get_the_date('M d, Y'); ?></span>
            <span>•</span>
            <span class="flex items-center"><i data-lucide="user" class="w-3.5 h-3.5 mr-1.5 text-primary"></i> <?php the_author(); ?></span>
          </div>
        </div>
      </header>

      <!-- Featured Image -->
      <?php if (has_post_thumbnail()): ?>
        <div class="container mx-auto px-4 max-w-4xl -mt-10 relative z-20">
          <div class="rounded-[2.5rem] overflow-hidden shadow-2xl border border-white/10 bg-gray-50 h-[300px] sm:h-[450px]">
            <?php the_post_thumbnail('full', ['class' => 'w-full h-full object-cover']); ?>
          </div>
        </div>
      <?php endif; ?>

      <!-- Post Content -->
      <div class="container mx-auto px-4 max-w-3xl py-16 md:py-24">
        <div class="prose prose-lg max-w-none text-secondary/80 leading-relaxed space-y-6">
          <?php the_content(); ?>
        </div>

        <!-- Post Navigation -->
        <div class="border-t border-gray-100 mt-16 pt-8 flex flex-col sm:flex-row justify-between items-center gap-4">
          <div class="w-full sm:w-1/2 text-left">
            <?php previous_post_link('%link', '<div class="text-xs uppercase tracking-widest text-secondary/40 font-bold mb-1">Previous Post</div><div class="font-bold text-secondary hover:text-primary transition-colors text-sm truncate">%title</div>'); ?>
          </div>
          <div class="w-full sm:w-1/2 text-right">
            <?php next_post_link('%link', '<div class="text-xs uppercase tracking-widest text-secondary/40 font-bold mb-1">Next Post</div><div class="font-bold text-secondary hover:text-primary transition-colors text-sm truncate">%title</div>'); ?>
          </div>
        </div>
      </div>
    </article>
  <?php endwhile; ?>

  <!-- CTA Section -->
  <section class="py-20 md:py-24 bg-secondary text-white relative overflow-hidden">
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_70%_70%,rgba(131,183,53,0.12),transparent)] pointer-events-none"></div>
    <div class="container mx-auto px-4 max-w-4xl text-center relative z-10">
      <h2 class="text-3xl md:text-5xl font-black font-heading mb-6 uppercase leading-tight">
        Ready to Find Out <br />
        <span class="text-primary italic">Where Your Attic Stands?</span>
      </h2>
      <p class="text-white/60 text-base md:text-lg max-w-xl mx-auto mb-10 leading-relaxed">
        Book a free, no-obligation assessment and get a clear picture of what your attic needs, no guesswork, no pressure.
      </p>
      <a
        href="<?php echo home_url('/#consultation'); ?>"
        class="bg-primary text-white hover:bg-primary/90 hover:scale-105 active:scale-95 transition-all px-12 py-6 rounded-full font-black text-base uppercase tracking-widest shadow-xl inline-flex items-center gap-2 group"
      >
        Book My Free Assessment
        <i data-lucide="arrow-right" class="w-5 h-5 transition-transform group-hover:translate-x-1"></i>
      </a>
    </div>
  </section>
</main>

<?php get_footer(); ?>
