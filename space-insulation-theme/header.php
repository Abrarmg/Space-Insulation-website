<!DOCTYPE html>
<html <?php language_attributes(); ?> class="overflow-x-hidden scroll-smooth">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <?php wp_head(); ?>
    <style>
      @keyframes fadeUp {
        from { opacity: 0; transform: translateY(40px); }
        to { opacity: 1; transform: translateY(0); }
      }
      @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
      }
      @keyframes float {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-20px); }
      }
      .reveal {
        opacity: 0;
        transform: translateY(30px);
        transition: opacity 0.8s ease-out, transform 0.8s ease-out;
      }
      .reveal.active {
        opacity: 1;
        transform: translateY(0);
      }
      /* Progress Bar Specific Reveal */
      .reveal-grow {
        width: 0 !important;
        transition: width 1.5s cubic-bezier(0.34, 1.56, 0.64, 1) 0.3s, opacity 0.8s ease-out, transform 0.8s ease-out;
      }
      .reveal-grow.active {
        width: var(--target-width) !important;
      }

      .backdrop-blur-header {
        backdrop-filter: blur(12px);
        background-color: rgba(32, 46, 49, 0.85);
      }
      .glass-card {
        background: rgba(255, 255, 255, 0.03);
        backdrop-filter: blur(8px);
        border: 1px solid rgba(255, 255, 255, 0.1);
      }
      .text-shadow-lg {
        text-shadow: 0 4px 12px rgba(0,0,0,0.5);
      }
      .animation-delay-200 { animation-delay: 200ms; }
      .animation-delay-400 { animation-delay: 400ms; }
      .fill-mode-forwards { animation-fill-mode: forwards; }
      html { scroll-behavior: smooth; }
      
      /* Mobile optimization for long words */
      h1, h2 {
        word-wrap: break-word;
        overflow-wrap: break-word;
      }
    </style>
</head>
<body <?php body_class('bg-white text-gray-800 font-sans selection:bg-primary selection:text-white overflow-x-hidden'); ?>>

<!-- Navbar -->
<header id="main-header" class="fixed top-0 left-0 right-0 z-[100] transition-all duration-500 bg-transparent py-4">
  <div class="container mx-auto px-4">
    <!-- Top Bar (Desktop only) -->
    <div id="top-bar" class="hidden lg:flex justify-end items-center space-x-6 pb-2 border-b border-white/10 mb-2 transition-opacity duration-300">
       <span class="text-white text-xs font-semibold flex items-center">
          <i data-lucide="phone" class="w-3 h-3 mr-2 text-primary"></i> (647) 704-9021
       </span>
    </div>

    <div class="flex items-center justify-between">
      <div class="flex items-center">
        <a href="<?php echo home_url('/#home'); ?>" class="group flex items-center logo-link">
          <div class="flex items-center justify-center h-28 md:h-34 select-none transition-all duration-300 group-hover:scale-105" id="logo-container">
            <?php 
            if (has_custom_logo()) {
                $custom_logo_id = get_theme_mod('custom_logo');
                $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
                if (has_custom_logo()) {
                    echo '<img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '" class="h-full w-auto object-contain drop-shadow-lg">';
                }
            } else {
                echo '<img src="https://i.ibb.co/sJNHBPv6/Gemini-Generated-Image-mvesvwmvesvwmves-removebg-preview.png" alt="Space Insulation Logo" class="h-full w-auto object-contain drop-shadow-lg">';
            }
            ?>
          </div>
        </a>
      </div>

      <nav class="hidden lg:flex items-center space-x-10">
        <?php
        if (has_nav_menu('primary')) {
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container' => false,
                'menu_class' => 'flex items-center space-x-10',
                'items_wrap' => '%3$s',
                'fallback_cb' => false,
            ));
        } else {
            // Fallback static menu
            ?>
             <a href="<?php echo home_url('/#home'); ?>" class="nav-link text-sm uppercase font-bold tracking-widest transition-colors text-white hover:text-primary">Home</a>
             <div class="relative group py-4">
               <a href="<?php echo home_url('/#services'); ?>" class="nav-link text-sm uppercase font-bold tracking-widest transition-colors text-white hover:text-primary flex items-center gap-1">
                 Services <i data-lucide="chevron-down" class="w-3 h-3 transition-transform group-hover:rotate-180"></i>
               </a>
               <div class="absolute top-full left-0 mt-1 w-64 bg-secondary border border-white/10 rounded-2xl shadow-2xl py-2 hidden group-hover:block transition-all duration-300 backdrop-blur-header bg-opacity-95">
                 <a href="<?php echo home_url('/#services'); ?>" class="block px-6 py-3 text-xs uppercase font-bold tracking-wider hover:text-primary text-white/70">All Services</a>
                 <a href="<?php echo home_url('/blown-in-insulation'); ?>" class="block px-6 py-3 text-xs uppercase font-bold tracking-wider hover:text-primary text-white/70 border-t border-white/5">Blown-In Insulation</a>
                 <a href="<?php echo home_url('/attic-insulation-upgrades'); ?>" class="block px-6 py-3 text-xs uppercase font-bold tracking-wider hover:text-primary text-white/70 border-t border-white/5">Attic Insulation & Upgrades</a>
               </div>
             </div>
             <a href="<?php echo home_url('/#about'); ?>" class="nav-link text-sm uppercase font-bold tracking-widest transition-colors text-white hover:text-primary">About Us</a>
             <a href="<?php echo home_url('/#contact'); ?>" class="nav-link text-sm uppercase font-bold tracking-widest transition-colors text-white hover:text-primary">Contact Us</a>
             <a href="<?php echo home_url('/#blog'); ?>" class="nav-link text-sm uppercase font-bold tracking-widest transition-colors text-white hover:text-primary">Blog</a>
             <?php
        }
        ?>
      </nav>

      <div class="flex items-center space-x-4">
        <a href="tel:6477049021" class="hidden sm:flex items-center bg-primary text-white px-8 py-3 rounded-full font-black text-sm hover:bg-primary/90 transition-all shadow-lg hover:scale-105 active:scale-95 uppercase tracking-tighter">
           <i data-lucide="phone" class="w-4 h-4 mr-2"></i> <span>Call Today</span>
        </a>
        <button id="mobile-menu-toggle" class="lg:hidden text-white p-2">
          <i data-lucide="menu" class="w-8 h-8"></i>
        </button>
      </div>
    </div>
  </div>

  <!-- Mobile Menu -->
  <div id="mobile-menu" class="lg:hidden fixed inset-0 z-[90] bg-secondary transition-transform duration-500 translate-x-full">
    <div class="flex justify-end p-8">
       <button id="mobile-menu-close" class="text-white">
         <i data-lucide="x" class="w-8 h-8"></i>
       </button>
    </div>
    <nav class="flex flex-col p-12 space-y-8 h-[calc(100%-80px)] justify-center">
      <?php
      if (has_nav_menu('primary')) {
          wp_nav_menu(array(
              'theme_location' => 'primary',
              'container' => false,
              'menu_class' => 'flex flex-col space-y-8 mobile-menu', // 'mobile-menu' triggers filter
              'items_wrap' => '%3$s',
              'fallback_cb' => false,
          ));
      } else {
          // Fallback static menu for mobile
          ?>
           <a href="<?php echo home_url('/#home'); ?>" class="mobile-nav-link text-4xl font-black italic transition-colors text-white hover:text-primary">Home</a>
           <div class="flex flex-col space-y-4">
             <a href="<?php echo home_url('/#services'); ?>" class="mobile-nav-link text-4xl font-black italic transition-colors text-white hover:text-primary">Services</a>
             <div class="pl-6 flex flex-col space-y-3 border-l-2 border-primary/30">
               <a href="<?php echo home_url('/#services'); ?>" class="text-2xl font-bold uppercase tracking-wider text-white/60 hover:text-primary">All Services</a>
               <a href="<?php echo home_url('/blown-in-insulation'); ?>" class="text-2xl font-bold uppercase tracking-wider text-white/60 hover:text-primary">Blown-In Insulation</a>
               <a href="<?php echo home_url('/attic-insulation-upgrades'); ?>" class="text-2xl font-bold uppercase tracking-wider text-white/60 hover:text-primary">Attic Insulation & Upgrades</a>
             </div>
           </div>
           <a href="<?php echo home_url('/#about'); ?>" class="mobile-nav-link text-4xl font-black italic transition-colors text-white hover:text-primary">About Us</a>
           <a href="<?php echo home_url('/#contact'); ?>" class="mobile-nav-link text-4xl font-black italic transition-colors text-white hover:text-primary">Contact Us</a>
           <a href="<?php echo home_url('/#blog'); ?>" class="mobile-nav-link text-4xl font-black italic transition-colors text-white hover:text-primary">Blog</a>
           <?php
      }
      ?>
      <a href="tel:6477049021" class="bg-primary text-white py-6 rounded-3xl text-center text-2xl font-black uppercase tracking-widest">Call Now</a>
    </nav>
  </div>
</header>
<main class="flex-grow">
