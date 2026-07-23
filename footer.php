</main>

<footer class="bg-secondary pt-24 text-white">
  <!-- Newsletter / CTA Top -->
  <div class="container mx-auto px-4 pb-16 border-b border-white/10">
    <div class="flex flex-col lg:flex-row items-center justify-between gap-8">
      <div class="lg:w-1/2">
        <h2 class="text-3xl md:text-4xl font-black font-heading mb-4">Subscribe for Future Updates</h2>
        <p class="text-white/50">Provide us with your email to receive energy-saving tips and exclusive quotes.</p>
      </div>
      <div class="w-full lg:w-1/2 flex">
         <input 
           type="email" 
           placeholder="Email Address" 
           class="flex-grow bg-white/5 border border-white/10 px-6 py-4 rounded-l-2xl outline-none focus:border-primary transition-all text-white"
         />
         <button class="bg-primary px-8 rounded-r-2xl font-bold flex items-center group active:scale-95 transition-transform whitespace-nowrap">
           SUBSCRIBE <i data-lucide="arrow-right" class="ml-2 w-4 h-4 group-hover:translate-x-1 transition-transform"></i>
         </button>
      </div>
    </div>
  </div>

  <!-- Main Footer Content -->
  <div class="container mx-auto px-4 py-20">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
      <!-- Brand -->
      <div class="space-y-6">
         <div class="flex flex-col items-start -ml-2">
            <div class="flex items-center justify-center h-28 md:h-36 select-none">
                <img 
                  src="https://i.ibb.co/sJNHBPv6/Gemini-Generated-Image-mvesvwmvesvwmves-removebg-preview.png" 
                  alt="Space Insulation Logo" 
                  class="h-full w-auto object-contain drop-shadow-lg"
                />
            </div>
         </div>
         <p class="text-white/50 text-sm leading-relaxed">
           With over two decades of experience, Space Insulation stands as your trusted partner for comprehensive eco solutions in Ontario.
         </p>
         <div class="flex space-x-4">
            <a 
              href="https://www.instagram.com/space_insulation0/" 
              target="_blank" 
              rel="noopener noreferrer" 
              class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center hover:bg-primary transition-colors" 
              aria-label="Instagram"
            >
              <i data-lucide="instagram" class="w-5 h-5"></i>
            </a>
            <a 
              href="https://web.facebook.com/profile.php?id=61564451241982" 
              target="_blank" 
              rel="noopener noreferrer" 
              class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center hover:bg-primary transition-colors" 
              aria-label="Facebook"
            >
              <i data-lucide="facebook" class="w-5 h-5"></i>
            </a>
         </div>
      </div>

      <!-- Quick Links -->
      <div>
        <h4 class="text-xl font-bold mb-8 relative inline-block">
          Quick Links
          <span class="absolute -bottom-2 left-0 w-1/2 h-1 bg-primary rounded-full"></span>
        </h4>
        <ul class="space-y-4 text-white/60 text-sm">
            <li><a href="<?php echo home_url('/#home'); ?>" class="hover:text-primary transition-colors text-left block">Home</a></li>
            <li><a href="<?php echo home_url('/#services'); ?>" class="hover:text-primary transition-colors text-left block">Services</a></li>
            <li><a href="<?php echo home_url('/#about'); ?>" class="hover:text-primary transition-colors text-left block">About Us</a></li>
            <li><a href="<?php echo home_url('/#contact'); ?>" class="hover:text-primary transition-colors text-left block">Contact Us</a></li>
            <li><a href="<?php echo home_url('/#blog'); ?>" class="hover:text-primary transition-colors text-left block">Blog</a></li>
        </ul>
      </div>

      <!-- Services -->
      <div>
        <h4 class="text-xl font-bold mb-8 relative inline-block">
          Services
          <span class="absolute -bottom-2 left-0 w-1/2 h-1 bg-primary rounded-full"></span>
        </h4>
        <ul class="space-y-4 text-white/60 text-sm">
          <li><a href="<?php echo home_url('/#services'); ?>" class="hover:text-primary transition-colors block">Attic Insulation</a></li>
          <li><a href="<?php echo home_url('/#services'); ?>" class="hover:text-primary transition-colors block">Energy Audit</a></li>
          <li><a href="<?php echo home_url('/#services'); ?>" class="hover:text-primary transition-colors block">Heat Pumps</a></li>
          <li><a href="<?php echo home_url('/#services'); ?>" class="hover:text-primary transition-colors block">Air Sealing</a></li>
          <li><a href="<?php echo home_url('/#services'); ?>" class="hover:text-primary transition-colors block">Insulation Removal</a></li>
        </ul>
      </div>

      <!-- Contact Info -->
      <div>
        <h4 class="text-xl font-bold mb-8 relative inline-block">
          Contact Us
          <span class="absolute -bottom-2 left-0 w-1/2 h-1 bg-primary rounded-full"></span>
        </h4>
        <ul class="space-y-6">
          <li class="flex items-start">
            <i data-lucide="map-pin" class="text-primary mr-4 flex-shrink-0 w-5 h-5"></i>
            <span class="text-white/60 text-sm">1070 Major MacKenzie Dr., Richmond Hill, ON L4S 1P3, Canada</span>
          </li>
          <li class="flex items-center">
            <i data-lucide="phone" class="text-primary mr-4 flex-shrink-0 w-5 h-5"></i>
            <span class="text-white/60 text-sm">(647) 704-9021</span>
          </li>
          <li class="flex items-center">
            <i data-lucide="mail" class="text-primary mr-4 flex-shrink-0 w-5 h-5"></i>
            <span class="text-white/60 text-sm">info@spaceinsulation.ca</span>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <!-- Copyright -->
  <div class="bg-black/20 py-8">
    <div class="container mx-auto px-4 text-center text-white/30 text-xs">
      <p>© 2025 Space Insulation. All Rights Reserved. Designed for Excellence.</p>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>

<script>
  // Initialize Lucide Icons
  lucide.createIcons();

  // Header Scroll Effect & Mobile Menu Logic
  document.addEventListener('DOMContentLoaded', () => {
    const header = document.getElementById('main-header');
    const logoContainer = document.getElementById('logo-container');
    const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
    const mobileMenuClose = document.getElementById('mobile-menu-close');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileNavLinks = document.querySelectorAll('.mobile-nav-link');
    const topBar = document.getElementById('top-bar');

    // Scroll Handler
    const handleScroll = () => {
      if (window.scrollY > 50) {
        header.classList.add('backdrop-blur-header', 'shadow-xl', 'py-2', 'border-b', 'border-white/5');
        header.classList.remove('bg-transparent', 'py-4');
        if (logoContainer) {
            logoContainer.classList.remove('h-28', 'md:h-34');
            logoContainer.classList.add('h-24', 'md:h-26');
        }
      } else {
        // Only transparent at top of HOME page, ideally. But logic is simplified here.
        // Assuming single page scroll behavior mostly.
        header.classList.remove('backdrop-blur-header', 'shadow-xl', 'py-2', 'border-b', 'border-white/5');
        header.classList.add('bg-transparent', 'py-4');
        if (logoContainer) {
            logoContainer.classList.add('h-28', 'md:h-34');
            logoContainer.classList.remove('h-24', 'md:h-26');
        }
      }
    };
    window.addEventListener('scroll', handleScroll);
    handleScroll(); // Init

    // Mobile Menu
    const toggleMenu = () => {
      mobileMenu.classList.toggle('translate-x-full');
      mobileMenu.classList.toggle('translate-x-0');
    };
    if (mobileMenuToggle) mobileMenuToggle.addEventListener('click', toggleMenu);
    if (mobileMenuClose) mobileMenuClose.addEventListener('click', toggleMenu);
    
    mobileNavLinks.forEach(link => {
      link.addEventListener('click', toggleMenu);
    });

    // Reveal Animations Observer
    const observerOptions = { threshold: 0.1 };
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('active');
        }
      });
    }, observerOptions);

    setInterval(() => {
      document.querySelectorAll('.reveal:not(.active), .reveal-grow:not(.active)').forEach(el => observer.observe(el));
    }, 500);
  });
</script>
</body>
</html>
