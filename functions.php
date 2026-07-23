<?php

function space_insulation_scripts() {
    // Tailwind CSS
    wp_enqueue_script('tailwindcss', 'https://cdn.tailwindcss.com', array(), '3.4.1', false);

    // Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Raleway:ital,wght@0,700;1,700;1,800&display=swap', array(), null);

    // Lucide Icons
    wp_enqueue_script('lucide', 'https://unpkg.com/lucide@latest', array(), null, true);

    // Main Theme Styles (if any specific overrides needed, though most is Tailwind)
    wp_enqueue_style('space-insulation-style', get_stylesheet_uri());

    // Tailwind Config
    wp_add_inline_script('tailwindcss', "
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              primary: '#83b735',
              secondary: '#202e31',
              accent: '#f29c1f'
            },
            fontFamily: {
              sans: ['Poppins', 'sans-serif'],
              heading: ['Raleway', 'sans-serif']
            },
            animation: {
              'fade-up': 'fadeUp 0.8s ease-out forwards',
              'fade-in': 'fadeIn 1.2s ease-out forwards',
              'float': 'float 6s ease-in-out infinite',
            }
          }
        }
      }
    ");
}
add_action('wp_enqueue_scripts', 'space_insulation_scripts');

function space_insulation_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ));

    register_nav_menus(array(
        'primary' => 'Primary Menu',
    ));
}
add_action('after_setup_theme', 'space_insulation_setup');

// Add Tailwind classes to Nav Menu objects
function space_insulation_nav_menu_link_attributes($atts, $item, $args) {
    if ($args->theme_location == 'primary') {
        // Desktop classes (default)
        $atts['class'] = 'nav-link text-sm uppercase font-bold tracking-widest transition-colors text-white hover:text-primary';
        
        // We need a way to distinguish mobile vs desktop since they use the same location but diff styles.
        // Standard wp_nav_menu doesn't easily support different classes for the same location without custom walkers or args.
        // A simpler approach for this theme: Use a custom argument in wp_nav_menu to set the class type.
        
        if (isset($args->menu_class) && strpos($args->menu_class, 'mobile-menu') !== false) {
             $atts['class'] = 'mobile-nav-link text-4xl font-black italic transition-colors text-white hover:text-primary';
        }
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'space_insulation_nav_menu_link_attributes', 10, 3);
