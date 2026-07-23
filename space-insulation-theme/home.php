<?php get_header(); ?>

<!-- Blog Hero -->
<section class="pt-24 bg-gray-50">
   <div class="container mx-auto px-4 py-20 text-center">
      <h1 class="text-secondary text-5xl md:text-7xl font-black font-heading uppercase tracking-tighter animate-fade-up">Energy <span class="text-primary italic">Blog</span></h1>
      <p class="text-secondary/40 mt-6 max-w-2xl mx-auto animate-fade-up animation-delay-200">Stay informed with the latest tips, guides, and news on home energy efficiency and insulation technology.</p>
   </div>
</section>

<!-- Blog List -->
<section class="py-24 bg-white relative">
  <div class="container mx-auto px-4">
    <?php if ( have_posts() ) : ?>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <?php 
        $count = 0;
        while ( have_posts() ) : the_post(); 
          $count++;
          // Featured Post Logic (First Post) - matches React 'featured' layout if we wanted to distinguish, 
          // but React Blog.tsx actually just maps them all in a grid for the main list, OR slightly different for preview.
          // In App.tsx 'blog' case -> <Blog isPreview={false} /> -> renders all posts in grid.
          // Let's stick to the grid layout.
        ?>
          <div class="group bg-white rounded-[2.5rem] overflow-hidden shadow-lg hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 border border-gray-100 flex flex-col h-full reveal">
            <!-- Image -->
            <div class="h-64 overflow-hidden relative">
               <?php if (has_post_thumbnail()): ?>
                 <?php the_post_thumbnail('large', ['class' => 'w-full h-full object-cover transform transition-transform duration-700 group-hover:scale-110']); ?>
               <?php else: ?>
                 <div class="w-full h-full bg-gray-200 flex items-center justify-center text-gray-400">No Image</div>
               <?php endif; ?>
               <div class="absolute inset-0 bg-primary/20 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
               <div class="absolute top-4 left-4 bg-white/90 backdrop-blur-sm px-4 py-1 rounded-full text-[10px] font-black uppercase tracking-widest text-primary shadow-sm">
                 <?php 
                   $categories = get_the_category();
                   if ( ! empty( $categories ) ) {
                       echo esc_html( $categories[0]->name );   
                   } else {
                       echo 'Blog';
                   }
                 ?>
               </div>
            </div>
            
            <!-- Content -->
            <div class="p-8 flex flex-col flex-grow">
               <div class="flex items-center text-secondary/40 text-xs font-bold uppercase tracking-widest mb-4 space-x-2">
                 <i data-lucide="calendar" class="w-3 h-3"></i>
                 <span><?php echo get_the_date('M d, Y'); ?></span>
                 <span>•</span>
                 <span><?php echo get_comments_number(); ?> Comments</span>
               </div>
               
               <h3 class="text-xl font-bold text-secondary mb-3 leading-tight group-hover:text-primary transition-colors">
                 <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
               </h3>
               
               <div class="text-secondary/60 text-sm mb-6 line-clamp-3">
                 <?php the_excerpt(); ?>
               </div>
               
               <div class="mt-auto pt-6 border-t border-gray-50 flex items-center justify-between">
                 <a href="<?php the_permalink(); ?>" class="text-secondary font-black text-xs uppercase tracking-widest group-hover:text-primary transition-colors flex items-center">
                   Read Article <i data-lucide="arrow-right" class="ml-2 w-4 h-4 transform group-hover:translate-x-1 transition-transform"></i>
                 </a>
                 <div class="w-8 h-8 rounded-full bg-gray-100 flex items-center justify-center group-hover:bg-primary group-hover:text-white transition-colors">
                   <i data-lucide="share-2" class="w-4 h-4"></i>
                 </div>
               </div>
            </div>
          </div>
        <?php endwhile; ?>
      </div>

      <!-- Pagination -->
      <div class="mt-16 flex justify-center">
         <?php 
         the_posts_pagination( array(
            'mid_size'  => 2,
            'prev_text' => __( '<i data-lucide="chevron-left" class="w-5 h-5"></i>', 'space-insulation' ),
            'next_text' => __( '<i data-lucide="chevron-right" class="w-5 h-5"></i>', 'space-insulation' ),
            'class' => 'flex space-x-4'
         ) ); 
         ?>
      </div>

    <?php else : ?>
      <div class="text-center py-20">
        <h3 class="text-2xl font-bold text-secondary mb-4">No posts found</h3>
        <p class="text-secondary/60">Check back later for updates.</p>
      </div>
    <?php endif; ?>
  </div>
</section>

<!-- CTA Section -->
<section class="py-24 bg-white">
   <div class="container mx-auto px-4 text-center">
      <h2 class="text-3xl font-bold mb-8">Looking for specific advice?</h2>
      <a 
        href="<?php echo home_url('/contact'); ?>"
        class="bg-primary text-white px-12 py-5 rounded-full font-black uppercase tracking-widest hover:scale-105 transition-transform inline-block shadow-xl"
      >
        Contact an expert
      </a>
   </div>
</section>

<?php get_footer(); ?>
