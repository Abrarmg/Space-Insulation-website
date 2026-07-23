<?php get_header(); ?>

<!-- Hero Section -->
<?php
// Form Processing
$form_status = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['consultation_form'])) {
    // Sanitize and Validate
    $name = sanitize_text_field($_POST['fullName']);
    $email = sanitize_email($_POST['email']);
    $phone = sanitize_text_field($_POST['phone']);
    $address = sanitize_text_field($_POST['address']);
    $service = sanitize_text_field($_POST['service']);
    
    // Basic validation
    if (!empty($name) && !empty($phone) && !empty($email)) {
        // Send Email
        $to = 'ibrarsargana7840@gmail.com';
        $subject = 'New Estimate Request from ' . $name;
        $message = "Name: $name\nEmail: $email\nPhone: $phone\nAddress: $address\nService: $service";
        $headers = array('Content-Type: text/plain; charset=UTF-8');
        $headers[] = 'Reply-To: ' . $email;
        
        if (wp_mail($to, $subject, $message, $headers)) {
            $form_status = 'success';
        } else {
            $form_status = 'error';
        }
    } else {
        $form_status = 'validation_error';
    }
}
?>
<section class="relative h-[100dvh] min-h-[600px] md:min-h-[800px] flex items-center justify-center overflow-hidden bg-secondary" id="root">
  <!-- Background Video Layer -->
  <div class="absolute inset-0 z-0 overflow-hidden bg-secondary">
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[125vw] h-[125vh] min-w-[177.77vh] min-h-[56.25vw] pointer-events-none">
      <iframe 
        class="w-full h-full opacity-60 scale-105"
        src="https://streamable.com/e/ypgn2x?autoplay=1&muted=1&nocontrols=1"
        title="Space Insulation Background Video"
        frameborder="0"
        allow="fullscreen;autoplay"
        style="border: none; width: 100%; height: 100%;"
        tabindex="-1"
      ></iframe>
    </div>
    
    <!-- Deep Gradient Overlays -->
    <div class="absolute inset-0 bg-gradient-to-b from-secondary/90 via-secondary/40 to-secondary/95 z-[1]"></div>
    <div class="absolute inset-0 bg-black/10 z-[1]"></div>
  </div>

  <!-- Decorative Rotating Ring -->
  <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 z-[2] opacity-5 pointer-events-none">
    <div class="w-[800px] md:w-[1400px] h-[800px] md:h-[1400px] rounded-full border-[2px] border-primary/20 animate-[spin_180s_linear_infinite]"></div>
  </div>

  <!-- Hero Content -->
  <div class="container mx-auto px-4 relative z-10 text-center text-white pt-10 md:pt-20">
    <div class="space-y-6 md:space-y-8 max-w-5xl mx-auto mb-10 md:mb-12">
      <div class="opacity-0 animate-fade-up fill-mode-forwards">
        <h1 class="text-4xl sm:text-5xl md:text-7xl lg:text-9xl font-heading font-black italic tracking-tighter leading-[0.9] md:leading-[0.85] drop-shadow-2xl">
          <span class="block text-primary mb-2 md:mb-4 drop-shadow-[0_10px_10px_rgba(0,0,0,0.3)]">EXPERT ATTIC</span>
          <span class="text-white">INSULATION</span>
        </h1>
        <div class="mt-4 md:mt-6 flex flex-col items-center">
          <div class="w-12 md:w-16 h-1 bg-primary mb-3 md:mb-4"></div>
          <p class="text-sm sm:text-lg md:text-2xl font-bold text-primary tracking-[0.2em] md:tracking-[0.3em] uppercase">Solutions in Ontario | Space Insulation</p>
        </div>
      </div>
      
      <div class="opacity-0 animate-fade-up animation-delay-200 fill-mode-forwards">
        <p class="text-white/90 text-base sm:text-xl md:text-2xl max-w-3xl mx-auto font-medium leading-relaxed drop-shadow-lg bg-black/10 backdrop-blur-sm p-4 md:p-6 rounded-2xl md:rounded-3xl border border-white/5">
          Upgrade your home’s comfort and lower your energy bills with Ontario’s trusted professionals. Don't let your money escape through the roof.
        </p>
      </div>
    </div>

    <div class="flex flex-col items-center justify-center opacity-0 animate-fade-up animation-delay-400 fill-mode-forwards">
       <a 
         href="#contact"
         class="group relative bg-primary text-white px-8 md:px-16 py-4 md:py-6 rounded-full font-black text-lg md:text-2xl hover:bg-primary/90 transition-all hover:scale-105 active:scale-95 shadow-[0_20px_50px_rgba(131,183,53,0.4)] min-w-[260px] md:min-w-[320px] uppercase tracking-widest overflow-hidden block"
       >
         <span class="relative z-10 flex items-center justify-center">
           Book Free Estimate
           <span class="ml-3 transition-transform group-hover:translate-x-2">→</span>
         </span>
         <div class="absolute inset-0 bg-white/20 translate-y-full group-hover:translate-y-0 transition-transform duration-300"></div>
       </a>
    </div>
  </div>
  
  <!-- Scroll Indicator -->
  <div class="absolute bottom-8 md:bottom-12 left-1/2 -translate-x-1/2 z-10 animate-bounce opacity-0 animate-fade-in animation-delay-600 fill-mode-forwards">
    <div class="flex flex-col items-center">
      <span class="text-white/30 text-[9px] md:text-[10px] uppercase tracking-[0.5em] mb-4">Scroll to explore</span>
      <div class="w-px h-12 md:h-16 bg-gradient-to-b from-primary to-transparent rounded-full opacity-40"></div>
    </div>
  </div>
</section>

<!-- Consultation Form Section -->
<section id="consultation" class="relative -mt-16 z-20 px-4">
   <div class="container mx-auto">
     <div class="bg-secondary/95 backdrop-blur-xl border border-white/10 p-6 md:p-10 rounded-3xl shadow-2xl overflow-hidden relative group min-h-[400px]">
       <div class="absolute -top-24 -left-24 w-48 h-48 bg-primary/20 blur-[100px] rounded-full"></div>
       
       <div class="relative z-10 flex flex-col md:flex-row items-center justify-between gap-8">
         <div class="w-full md:w-1/3">
           <h3 class="text-primary font-bold text-xl mb-2">Space Insulation</h3>
           <h2 class="text-white text-4xl font-extrabold tracking-tight">Book Free Estimate</h2>
           <p class="text-white/60 mt-4 text-sm leading-relaxed">
             Fill in your details and one of our qualified energy consultants will contact you to schedule a professional audit of your property.
           </p>
         </div>

         <div class="w-full md:w-2/3">
             <?php if ($form_status === 'success'): ?>
              <div class="bg-green-500/20 border border-green-500/50 text-white p-4 rounded-xl text-center mb-4">
                <p class="font-bold">Request Received!</p>
                <p class="text-sm opacity-80">We will be in touch shortly.</p>
              </div>
             <?php endif; ?>

             <form action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>#consultation" method="POST" class="grid grid-cols-1 sm:grid-cols-2 gap-4">
               <input type="hidden" name="consultation_form" value="1">
           <!-- Form fields mirroring React logic but as standard HTML form for now -->
           <div class="space-y-4">
             <input required name="fullName" type="text" placeholder="Your Full Name" class="w-full bg-black/30 border border-white/10 px-5 py-4 rounded-xl text-white focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all" />
             <input required name="email" type="email" placeholder="Email Address" class="w-full bg-black/30 border border-white/10 px-5 py-4 rounded-xl text-white focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all" />
             <input required name="phone" type="tel" placeholder="Your Phone" class="w-full bg-black/30 border border-white/10 px-5 py-4 rounded-xl text-white focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all" />
           </div>
           <div class="space-y-4">
             <input required name="address" type="text" placeholder="Your Address" class="w-full bg-black/30 border border-white/10 px-5 py-4 rounded-xl text-white focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all" />
             <select required name="service" class="w-full bg-black/30 border border-white/10 px-5 py-4 rounded-xl text-white/50 focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all appearance-none cursor-pointer">
               <option value="">- Select Service -</option>
               <option value="attic">Attic Insulation</option>
               <option value="energy-audit">Home Energy Audit</option>
               <option value="air-sealing">Air Sealing</option>
               <option value="heat-pump">Heat Pump</option>
             </select>
             <div class="bg-white/5 p-4 rounded-xl flex items-center space-x-3 border border-white/5">
               <input type="checkbox" required class="w-5 h-5 accent-primary" />
               <span class="text-white/70 text-xs">I confirm these details are correct</span>
             </div>
           </div>
           <div class="sm:col-span-2 mt-4">
             <button type="submit" class="w-full bg-primary text-white py-5 rounded-2xl font-black text-xl hover:bg-primary/90 transition-all hover:scale-[1.01] active:scale-95 shadow-[0_15px_30px_rgba(131,183,53,0.3)] uppercase tracking-widest flex items-center justify-center">
               BOOK NOW
             </button>
           </div>
         </form>
         </div>
       </div>
     </div>
   </div>
</section>

<!-- Intro Section -->
<section class="py-16 md:py-24 bg-white overflow-hidden">
  <div class="container mx-auto px-4">
    <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-24">
      <div class="w-full lg:w-1/2 relative reveal">
        <div class="absolute -top-10 -left-10 w-48 md:w-64 h-48 md:h-64 bg-primary/10 rounded-full blur-3xl -z-10 animate-pulse"></div>
        <div class="relative z-10 rounded-[2rem] md:rounded-[3rem] overflow-hidden shadow-2xl group border border-gray-100 bg-gray-50">
          <img 
            src="https://i.ibb.co/S4mHKxFV/Gemini-Generated-Image-euyetreuyetreuye.png" 
            alt="Space Insulation R-60 Depth Achievement" 
            class="w-full h-[350px] md:h-[550px] object-cover transition-transform duration-700 group-hover:scale-105"
          />
          <div class="absolute inset-0 bg-gradient-to-t from-secondary/80 via-transparent to-transparent"></div>
          <div class="absolute top-4 md:top-8 left-4 md:left-8 bg-primary text-white px-4 md:px-6 py-2 md:py-3 rounded-xl md:rounded-2xl shadow-2xl flex items-center space-x-2 md:space-x-3 animate-fade-in">
            <div class="w-2 h-2 md:w-3 md:h-3 bg-white rounded-full animate-ping"></div>
            <span class="text-[9px] md:text-xs font-black uppercase tracking-[0.2em]">Our Actual Work</span>
          </div>
        </div>
      </div>

      <div class="w-full lg:w-1/2 reveal animation-delay-200 text-center lg:text-left">
        <div class="inline-flex items-center space-x-2 bg-primary/10 px-4 py-2 rounded-full mb-6 md:mb-8">
          <span class="w-2 h-2 bg-primary rounded-full animate-pulse"></span>
          <span class="text-secondary font-bold uppercase tracking-widest text-[10px]">Ontario's Top Rated Team</span>
        </div>
        
        <h2 class="text-secondary text-4xl sm:text-5xl md:text-7xl font-black font-heading leading-[1.0] lg:leading-[0.9] mb-6 md:mb-8 tracking-tighter uppercase">
          ABOUT <br class="hidden sm:block" />
          <span class="text-primary italic">SPACE INSULATION</span>
        </h2>
        
        <div class="space-y-4 md:space-y-6 text-secondary/70 text-base md:text-lg leading-relaxed mb-8 md:mb-12">
          <p>
            <span class="text-secondary font-bold">Space Insulation</span> is a locally owned and operated insulation company proudly serving homeowners and businesses across Ontario. We specialize in energy-efficient insulation solutions designed specifically for Ontario’s climate, building codes, and housing styles.
          </p>
          <p>
            From older homes to new builds, we provide professional insulation services that improve indoor comfort, reduce energy costs, and increase property value.
          </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 md:gap-6">
           <div class="flex items-center space-x-4 bg-gray-50 p-4 md:p-5 rounded-2xl border border-gray-100 hover:border-primary/40 hover:bg-white transition-all shadow-sm group">
             <div class="w-10 h-10 rounded-full bg-white border border-gray-200 flex items-center justify-center group-hover:bg-primary group-hover:text-white transition-colors">
                <!-- Icon: Stop Thermal Bridging -->
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
             </div>
             <span class="text-secondary font-bold text-xs md:text-sm uppercase tracking-tight">Stop Thermal Bridging</span>
           </div>
           <div class="flex items-center space-x-4 bg-gray-50 p-4 md:p-5 rounded-2xl border border-gray-100 hover:border-primary/40 hover:bg-white transition-all shadow-sm group">
             <div class="w-10 h-10 rounded-full bg-white border border-gray-200 flex items-center justify-center group-hover:bg-primary group-hover:text-white transition-colors">
                <!-- Icon: Eliminate Drafts -->
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"></path></svg>
             </div>
             <span class="text-secondary font-bold text-xs md:text-sm uppercase tracking-tight">Eliminate Drafts</span>
           </div>
           <div class="flex items-center space-x-4 bg-gray-50 p-4 md:p-5 rounded-2xl border border-gray-100 hover:border-primary/40 hover:bg-white transition-all shadow-sm group">
             <div class="w-10 h-10 rounded-full bg-white border border-gray-200 flex items-center justify-center group-hover:bg-primary group-hover:text-white transition-colors">
                <!-- Icon: Moisture Protection -->
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"></path></svg>
             </div>
             <span class="text-secondary font-bold text-xs md:text-sm uppercase tracking-tight">Moisture Protection</span>
           </div>
           <div class="flex items-center space-x-4 bg-gray-50 p-4 md:p-5 rounded-2xl border border-gray-100 hover:border-primary/40 hover:bg-white transition-all shadow-sm group">
             <div class="w-10 h-10 rounded-full bg-white border border-gray-200 flex items-center justify-center group-hover:bg-primary group-hover:text-white transition-colors">
                <!-- Icon: Lifetime Durability -->
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
             </div>
             <span class="text-secondary font-bold text-xs md:text-sm uppercase tracking-tight">Lifetime Durability</span>
           </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Services Section -->
<section class="py-24 bg-secondary overflow-hidden" id="services">
  <div class="container mx-auto px-4">
    <div class="text-center mb-20 reveal">
      <h3 class="text-primary font-bold uppercase tracking-[0.4em] text-xs mb-4">Precision Craftsmanship</h3>
      <h2 class="text-white text-5xl md:text-7xl font-black font-heading mb-6 tracking-tighter uppercase">
        PROVEN <span class="text-primary italic">SERVICES</span>
      </h2>
      <p class="text-white/40 max-w-2xl mx-auto text-lg">
        Specialized solutions for Ontario homeowners. Beyond basic coverage, we provide high-performance thermal management for your entire home.
      </p>
    </div>

    <!-- Main Service Cards Grid (2x2) manually mapped for PHP -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-6xl mx-auto">
      
      <!-- Blown-In Insulation -->
      <div class="relative h-[550px] rounded-[3rem] overflow-hidden group reveal shadow-2xl" style="transition-delay: 0ms">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blown-in.png" alt="Blown-In Insulation" class="absolute inset-0 w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110" />
        <div class="absolute inset-0 bg-gradient-to-t from-secondary via-secondary/40 to-transparent"></div>
        <div class="absolute bottom-0 left-0 right-0 p-8 md:p-10 transform transition-transform duration-500 group-hover:-translate-y-4">
          <div class="inline-block p-4 bg-primary rounded-2xl mb-6 shadow-2xl shadow-primary/40 group-hover:scale-110 transition-transform">
             <i data-lucide="wind" class="text-white w-8 h-8"></i>
          </div>
          <h3 class="text-white text-3xl font-black mb-4 italic tracking-tight uppercase leading-none">Blown-In Insulation</h3>
          <p class="text-white/70 text-base max-w-md mb-8 leading-relaxed">We utilize premium fiberglass or cellulose materials to create a seamless thermal blanket across your attic floor, filling every gap and crevice.</p>
          <button class="bg-white text-secondary px-8 py-4 rounded-full font-black text-xs uppercase tracking-widest hover:bg-primary hover:text-white transition-all shadow-2xl active:scale-95">Book Free Estimate</button>
        </div>
        <div class="absolute top-8 right-8 bg-white/10 backdrop-blur-md border border-white/20 text-white text-[10px] font-black px-5 py-2 rounded-full uppercase tracking-widest">POPULAR</div>
      </div>

      <!-- Spray Foam Insulation -->
      <div class="relative h-[550px] rounded-[3rem] overflow-hidden group reveal shadow-2xl" style="transition-delay: 150ms">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/spray-foam.png" alt="Spray Foam Insulation" class="absolute inset-0 w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110" />
        <div class="absolute inset-0 bg-gradient-to-t from-secondary via-secondary/40 to-transparent"></div>
        <div class="absolute bottom-0 left-0 right-0 p-8 md:p-10 transform transition-transform duration-500 group-hover:-translate-y-4">
          <div class="inline-block p-4 bg-primary rounded-2xl mb-6 shadow-2xl shadow-primary/40 group-hover:scale-110 transition-transform">
             <i data-lucide="zap" class="text-white w-8 h-8"></i>
          </div>
          <h3 class="text-white text-3xl font-black mb-4 italic tracking-tight uppercase leading-none">Spray Foam Insulation</h3>
          <p class="text-white/70 text-base max-w-md mb-8 leading-relaxed">The ultimate thermal barrier. We apply high-performance spray foam to roof decks and rim joists for maximum airtightness and structural strength.</p>
          <button class="bg-white text-secondary px-8 py-4 rounded-full font-black text-xs uppercase tracking-widest hover:bg-primary hover:text-white transition-all shadow-2xl active:scale-95">Book Free Estimate</button>
        </div>
        <div class="absolute top-8 right-8 bg-white/10 backdrop-blur-md border border-white/20 text-white text-[10px] font-black px-5 py-2 rounded-full uppercase tracking-widest">PREMIUM</div>
      </div>

      <!-- Air Sealing -->
      <div class="relative h-[550px] rounded-[3rem] overflow-hidden group reveal shadow-2xl" style="transition-delay: 300ms">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/air-sealing.png" alt="Air Sealing" class="absolute inset-0 w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110" />
        <div class="absolute inset-0 bg-gradient-to-t from-secondary via-secondary/40 to-transparent"></div>
        <div class="absolute bottom-0 left-0 right-0 p-8 md:p-10 transform transition-transform duration-500 group-hover:-translate-y-4">
          <div class="inline-block p-4 bg-primary rounded-2xl mb-6 shadow-2xl shadow-primary/40 group-hover:scale-110 transition-transform">
             <i data-lucide="shield-check" class="text-white w-8 h-8"></i>
          </div>
          <h3 class="text-white text-3xl font-black mb-4 italic tracking-tight uppercase leading-none">Air Sealing</h3>
          <p class="text-white/70 text-base max-w-md mb-8 leading-relaxed">Insulation works best when air leaks are stopped. We seal pot lights, plumbing stacks, and top plates using precision foam application.</p>
          <button class="bg-white text-secondary px-8 py-4 rounded-full font-black text-xs uppercase tracking-widest hover:bg-primary hover:text-white transition-all shadow-2xl active:scale-95">Book Free Estimate</button>
        </div>
        <div class="absolute top-8 right-8 bg-white/10 backdrop-blur-md border border-white/20 text-white text-[10px] font-black px-5 py-2 rounded-full uppercase tracking-widest">CRITICAL</div>
      </div>

      <!-- Insulation Removal -->
      <div class="relative h-[550px] rounded-[3rem] overflow-hidden group reveal shadow-2xl" style="transition-delay: 450ms">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/removal.png" alt="Insulation Removal" class="absolute inset-0 w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110" />
        <div class="absolute inset-0 bg-gradient-to-t from-secondary via-secondary/40 to-transparent"></div>
        <div class="absolute bottom-0 left-0 right-0 p-8 md:p-10 transform transition-transform duration-500 group-hover:-translate-y-4">
          <div class="inline-block p-4 bg-primary rounded-2xl mb-6 shadow-2xl shadow-primary/40 group-hover:scale-110 transition-transform">
             <i data-lucide="trash-2" class="text-white w-8 h-8"></i>
          </div>
          <h3 class="text-white text-3xl font-black mb-4 italic tracking-tight uppercase leading-none">Insulation Removal</h3>
          <p class="text-white/70 text-base max-w-md mb-8 leading-relaxed">Safe removal of old, damaged, or pest-infested material before new installation. We ensure a clean slate for your efficiency upgrade.</p>
          <button class="bg-white text-secondary px-8 py-4 rounded-full font-black text-xs uppercase tracking-widest hover:bg-primary hover:text-white transition-all shadow-2xl active:scale-95">Book Free Estimate</button>
        </div>
        <div class="absolute top-8 right-8 bg-white/10 backdrop-blur-md border border-white/20 text-white text-[10px] font-black px-5 py-2 rounded-full uppercase tracking-widest">ESSENTIAL</div>
      </div>

    </div>
  </div>
</section>

<!-- About Section (Summary) -->
<section class="py-16 md:py-24 bg-white overflow-hidden" id="about">
  <div class="container mx-auto px-4">
    <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-24">
      <!-- Visual Side -->
      <div class="w-full lg:w-1/2 relative reveal">
        <div class="relative z-10 grid grid-cols-2 gap-3 md:gap-4">
          <div class="space-y-3 md:space-y-4 pt-8 md:pt-12">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-detailed.png" alt="Space Insulation Professional Work" class="rounded-2xl md:rounded-3xl shadow-xl h-48 md:h-64 w-full object-cover border border-gray-100" />
            <div class="bg-primary p-6 md:p-8 rounded-2xl md:rounded-3xl shadow-2xl transform -rotate-3 hover:rotate-0 transition-transform duration-500">
              <p class="text-white font-black text-3xl md:text-4xl leading-none">20+</p>
              <p class="text-white/80 text-[8px] md:text-[10px] font-bold uppercase tracking-[0.2em] mt-2">Years of Excellence</p>
            </div>
          </div>
          <div class="space-y-3 md:space-y-4">
            <div class="bg-secondary p-6 md:p-8 rounded-2xl md:rounded-3xl shadow-2xl transform rotate-3 hover:rotate-0 transition-transform duration-500">
              <i data-lucide="users" class="text-primary mb-2 md:mb-4 w-6 h-6"></i>
              <p class="text-white font-black text-xl md:text-2xl leading-none italic">15k+</p>
              <p class="text-white/40 text-[8px] md:text-[10px] font-bold uppercase tracking-[0.2em] mt-2">Homes Optimized</p>
            </div>
            <img src="https://i.ibb.co/1tgSc9RQ/Whats-App-Image-2026-01-20-at-21-28-11.jpg" alt="Precision Thermal Installation" class="rounded-2xl md:rounded-3xl shadow-xl h-60 md:h-80 w-full object-cover border border-gray-100" />
          </div>
        </div>
      </div>

      <!-- Content Side -->
      <div class="w-full lg:w-1/2 reveal animation-delay-200 text-center lg:text-left">
        <div class="inline-flex items-center space-x-2 bg-secondary/5 px-4 py-2 rounded-full mb-6 md:mb-8">
          <span class="w-2 h-2 bg-primary rounded-full animate-pulse"></span>
          <span class="text-secondary font-bold uppercase tracking-widest text-[10px]">Who We Are</span>
        </div>
        
        <h2 class="text-secondary text-4xl sm:text-5xl md:text-7xl font-black font-heading leading-[1.0] lg:leading-[0.9] mb-6 md:mb-8 tracking-tighter uppercase">
          ABOUT <br class="hidden sm:block" />
          <span class="text-primary italic">SPACE INSULATION</span>
        </h2>

        <div class="space-y-4 md:space-y-6 text-secondary/70 text-base md:text-lg leading-relaxed mb-8 md:mb-10 px-2 lg:px-0">
          <p>
            <span class="text-secondary font-bold">Space Insulation</span> is a locally owned and operated insulation company proudly serving homeowners and businesses across Ontario. We specialize in energy-efficient insulation solutions designed specifically for Ontario’s climate, building codes, and housing styles.
          </p>
          <p>
            From older homes to new builds, we provide professional insulation services that improve indoor comfort, reduce energy costs, and increase property value.
          </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 border-t border-gray-100 pt-8 md:pt-10 text-left">
          <div class="flex items-start space-x-4">
            <div class="bg-primary/10 p-3 rounded-xl mt-1 flex-shrink-0">
               <i data-lucide="target" class="text-primary w-5 h-5"></i>
            </div>
            <div>
              <h4 class="font-black text-secondary uppercase tracking-tight italic text-sm md:text-base">Our Vision</h4>
              <p class="text-[11px] md:text-sm text-secondary/50 leading-snug">To lead Ontario’s transition to net-zero residential living through technical precision.</p>
            </div>
          </div>
          <div class="flex items-start space-x-4">
            <div class="bg-primary/10 p-3 rounded-xl mt-1 flex-shrink-0">
               <i data-lucide="leaf" class="text-primary w-5 h-5"></i>
            </div>
            <div>
              <h4 class="font-black text-secondary uppercase tracking-tight italic text-sm md:text-base">Eco-Legacy</h4>
              <p class="text-[11px] md:text-sm text-secondary/50 leading-snug">Every project removes thousands of pounds of CO2 from the atmosphere annually.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Testimonials Section -->
<section class="py-24 bg-secondary relative overflow-hidden">
  <div class="absolute top-0 right-0 w-96 h-96 bg-primary/5 rounded-full blur-[100px] pointer-events-none"></div>
  <div class="absolute bottom-0 left-0 w-64 h-64 bg-white/5 rounded-full blur-[80px] pointer-events-none"></div>

  <div class="container mx-auto px-4 relative z-10">
    <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-8">
      <div class="text-left">
         <div class="inline-flex items-center space-x-2 bg-white/10 px-4 py-2 rounded-full mb-6 backdrop-blur-sm border border-white/5">
            <span class="text-white font-bold uppercase tracking-widest text-[10px]">Verified Feedback</span>
            <div class="flex space-x-0.5">
               <i data-lucide="star" class="text-accent fill-accent w-[10px] h-[10px]"></i>
               <i data-lucide="star" class="text-accent fill-accent w-[10px] h-[10px]"></i>
               <i data-lucide="star" class="text-accent fill-accent w-[10px] h-[10px]"></i>
               <i data-lucide="star" class="text-accent fill-accent w-[10px] h-[10px]"></i>
               <i data-lucide="star" class="text-accent fill-accent w-[10px] h-[10px]"></i>
            </div>
         </div>
         <h2 class="text-white text-4xl md:text-6xl font-black font-heading tracking-tighter uppercase leading-none">
           Google <span class="text-primary italic">Reviews</span>
         </h2>
         <p class="text-white/50 mt-4 max-w-xl text-lg">
           See why homeowners across Ontario rate Space Insulation 5 stars for quality, cleanliness, and efficiency.
         </p>
      </div>
      
      <a 
        href="https://share.google/F5zYkSywVaSm7ljFD" 
        target="_blank" 
        rel="noopener noreferrer"
        class="group flex items-center bg-white text-secondary px-8 py-4 rounded-full font-black text-xs uppercase tracking-widest hover:bg-primary hover:text-white transition-all shadow-xl hover:scale-105 active:scale-95"
      >
        Review us on Google
        <i data-lucide="external-link" class="ml-2 w-4 h-4 group-hover:rotate-45 transition-transform"></i>
      </a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <!-- Review 1 -->
      <div class="bg-white/5 backdrop-blur-md border border-white/10 p-8 rounded-[2rem] relative group hover:bg-white/10 transition-colors duration-300 flex flex-col">
        <div class="flex items-center justify-between mb-8">
           <div class="flex items-center space-x-4">
              <div class="w-12 h-12 bg-gradient-to-br from-primary to-green-600 rounded-full flex items-center justify-center text-white font-black text-xl shadow-lg">C</div>
              <div>
                 <p class="text-white font-bold text-base leading-tight">Cathy Nelson</p>
                 <p class="text-white/40 text-[10px] uppercase tracking-widest">2 months ago</p>
              </div>
           </div>
           <img src="https://upload.wikimedia.org/wikipedia/commons/c/c1/Google_%22G%22_logo.svg" alt="Google" class="w-6 h-6 opacity-50 group-hover:opacity-100 transition-opacity grayscale group-hover:grayscale-0" />
        </div>
        <div class="flex space-x-1 mb-4">
            <i data-lucide="star" class="text-accent fill-accent w-4 h-4"></i>
            <i data-lucide="star" class="text-accent fill-accent w-4 h-4"></i>
            <i data-lucide="star" class="text-accent fill-accent w-4 h-4"></i>
            <i data-lucide="star" class="text-accent fill-accent w-4 h-4"></i>
            <i data-lucide="star" class="text-accent fill-accent w-4 h-4"></i>
        </div>
        <p class="text-white/80 text-sm leading-relaxed mb-6 flex-grow">"We give 5 stars for their friendly service, professionalism and thoroughness. They hiring them over others because the initial quotation was very detailed. They took before and after photos which is greatly appreciated."</p>
      </div>

      <!-- Review 2 -->
      <div class="bg-white/5 backdrop-blur-md border border-white/10 p-8 rounded-[2rem] relative group hover:bg-white/10 transition-colors duration-300 flex flex-col">
        <div class="flex items-center justify-between mb-8">
           <div class="flex items-center space-x-4">
              <div class="w-12 h-12 bg-gradient-to-br from-primary to-green-600 rounded-full flex items-center justify-center text-white font-black text-xl shadow-lg">M</div>
              <div>
                 <p class="text-white font-bold text-base leading-tight">Mohammad Hamidfar</p>
                 <p class="text-white/40 text-[10px] uppercase tracking-widest">1 month ago</p>
              </div>
           </div>
           <img src="https://upload.wikimedia.org/wikipedia/commons/c/c1/Google_%22G%22_logo.svg" alt="Google" class="w-6 h-6 opacity-50 group-hover:opacity-100 transition-opacity grayscale group-hover:grayscale-0" />
        </div>
        <div class="flex space-x-1 mb-4">
            <i data-lucide="star" class="text-accent fill-accent w-4 h-4"></i>
            <i data-lucide="star" class="text-accent fill-accent w-4 h-4"></i>
            <i data-lucide="star" class="text-accent fill-accent w-4 h-4"></i>
            <i data-lucide="star" class="text-accent fill-accent w-4 h-4"></i>
            <i data-lucide="star" class="text-accent fill-accent w-4 h-4"></i>
        </div>
        <p class="text-white/80 text-sm leading-relaxed mb-6 flex-grow">"I recently had my attic insulation upgraded. They used baffles and laser measurements to ensure a smooth layer at R60 rating. The entire process was professional and efficient."</p>
      </div>

      <!-- Review 3 -->
      <div class="bg-white/5 backdrop-blur-md border border-white/10 p-8 rounded-[2rem] relative group hover:bg-white/10 transition-colors duration-300 flex flex-col">
        <div class="flex items-center justify-between mb-8">
           <div class="flex items-center space-x-4">
              <div class="w-12 h-12 bg-gradient-to-br from-primary to-green-600 rounded-full flex items-center justify-center text-white font-black text-xl shadow-lg">A</div>
              <div>
                 <p class="text-white font-bold text-base leading-tight">Ayman Hamdavi</p>
                 <p class="text-white/40 text-[10px] uppercase tracking-widest">3 weeks ago</p>
              </div>
           </div>
           <img src="https://upload.wikimedia.org/wikipedia/commons/c/c1/Google_%22G%22_logo.svg" alt="Google" class="w-6 h-6 opacity-50 group-hover:opacity-100 transition-opacity grayscale group-hover:grayscale-0" />
        </div>
        <div class="flex space-x-1 mb-4">
            <i data-lucide="star" class="text-accent fill-accent w-4 h-4"></i>
            <i data-lucide="star" class="text-accent fill-accent w-4 h-4"></i>
            <i data-lucide="star" class="text-accent fill-accent w-4 h-4"></i>
            <i data-lucide="star" class="text-accent fill-accent w-4 h-4"></i>
            <i data-lucide="star" class="text-accent fill-accent w-4 h-4"></i>
        </div>
        <p class="text-white/80 text-sm leading-relaxed mb-6 flex-grow">"I was impressed with the job they did leaving no corners behind, filling up the insulation to its standard. They were clean with moving tools, leaving no mess behind."</p>
      </div>
    </div>
  </div>
</section>

<!-- Trust Section -->
<section class="py-24 bg-gray-50 overflow-hidden">
  <div class="container mx-auto px-4">
    <div class="flex flex-col lg:flex-row items-center gap-16 lg:gap-24 mb-20">
      <div class="lg:w-1/3 reveal">
        <h3 class="text-primary font-bold uppercase tracking-[0.4em] text-xs mb-4">The Space Advantage</h3>
        <h2 class="text-secondary text-5xl font-black font-heading leading-none mb-6 tracking-tighter uppercase">
          WHY <span class="text-primary italic">TRUST</span> US?
        </h2>
        <p class="text-secondary/60 text-lg leading-relaxed mb-8">
          Finding reliable insulation companies near you can be difficult. We pride ourselves on precision, safety, and measurable results.
        </p>
        <div class="inline-flex items-center space-x-3 bg-white px-6 py-4 rounded-2xl shadow-sm border border-gray-100">
           <i data-lucide="shield-check" class="text-primary w-8 h-8"></i>
           <div>
              <p class="text-secondary font-black leading-none">FULLY INSURED</p>
              <p class="text-secondary/40 text-[10px] font-bold uppercase tracking-widest mt-1">WSIB & Liability Covered</p>
           </div>
        </div>
      </div>

      <div class="lg:w-2/3 reveal animation-delay-200">
         <div class="relative rounded-[3rem] overflow-hidden shadow-2xl group h-[400px]">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/trusted-contractors.png" alt="Space Insulation professional team in action" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-105" />
            <div class="absolute inset-0 bg-gradient-to-r from-secondary/40 to-transparent"></div>
            <div class="absolute top-8 left-8 bg-white/90 backdrop-blur px-6 py-3 rounded-full flex items-center space-x-2">
               <div class="w-2 h-2 bg-primary rounded-full animate-pulse"></div>
               <span class="text-secondary font-black text-xs uppercase tracking-widest italic">Professional Grade Equipment</span>
            </div>
         </div>
      </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
      <!-- Item 1 -->
      <div class="bg-white p-10 rounded-[3rem] shadow-xl hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 border border-gray-100 reveal" style="transition-delay: 0ms">
        <div class="mb-8 bg-gray-50 w-20 h-20 rounded-3xl flex items-center justify-center shadow-inner group-hover:scale-110 transition-transform">
           <i data-lucide="map-pin" class="text-primary w-7 h-7"></i>
        </div>
        <h4 class="text-xl font-black text-secondary mb-4 uppercase tracking-tighter leading-tight italic">Local Ontario Expertise</h4>
        <p class="text-secondary/50 text-sm leading-relaxed">Deep understanding of the Ontario Building Code and R-60 insulation requirements.</p>
      </div>
      <!-- Item 2 -->
      <div class="bg-white p-10 rounded-[3rem] shadow-xl hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 border border-gray-100 reveal" style="transition-delay: 100ms">
        <div class="mb-8 bg-gray-50 w-20 h-20 rounded-3xl flex items-center justify-center shadow-inner group-hover:scale-110 transition-transform">
           <i data-lucide="award" class="text-primary w-7 h-7"></i>
        </div>
        <h4 class="text-xl font-black text-secondary mb-4 uppercase tracking-tighter leading-tight italic">Certified Pros</h4>
        <p class="text-secondary/50 text-sm leading-relaxed">Fully licensed, insured, and rigorously trained in modern safety protocols.</p>
      </div>
      <!-- Item 3 -->
      <div class="bg-white p-10 rounded-[3rem] shadow-xl hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 border border-gray-100 reveal" style="transition-delay: 200ms">
        <div class="mb-8 bg-gray-50 w-20 h-20 rounded-3xl flex items-center justify-center shadow-inner group-hover:scale-110 transition-transform">
           <i data-lucide="shield" class="text-primary w-7 h-7"></i>
        </div>
        <h4 class="text-xl font-black text-secondary mb-4 uppercase tracking-tighter leading-tight italic">Transparent Pricing</h4>
        <p class="text-secondary/50 text-sm leading-relaxed">Honest, upfront quotes with no hidden fees. High-impact ROI for homeowners.</p>
      </div>
      <!-- Item 4 -->
      <div class="bg-white p-10 rounded-[3rem] shadow-xl hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 border border-gray-100 reveal" style="transition-delay: 300ms">
        <div class="mb-8 bg-gray-50 w-20 h-20 rounded-3xl flex items-center justify-center shadow-inner group-hover:scale-110 transition-transform">
           <i data-lucide="heart" class="text-primary w-7 h-7"></i>
        </div>
        <h4 class="text-xl font-black text-secondary mb-4 uppercase tracking-tighter leading-tight italic">100% Satisfaction</h4>
        <p class="text-secondary/50 text-sm leading-relaxed">White-glove service. We leave your home spotless and your attic perfect.</p>
      </div>
    </div>
  </div>
</section>

<!-- Blog Preview Section -->
<section class="bg-white py-24" id="blog">
  <div class="container mx-auto px-4">
    <div class="flex flex-col md:flex-row justify-between items-end mb-16">
      <div class="reveal">
        <h3 class="text-primary font-bold uppercase tracking-[0.4em] text-xs mb-4">Knowledge Base</h3>
        <h2 class="text-secondary text-5xl font-black font-heading uppercase tracking-tighter">
          Latest <span class="text-primary italic">News</span>
        </h2>
      </div>
      <a 
        href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>"
        class="hidden md:flex items-center space-x-2 text-secondary font-bold uppercase tracking-widest text-xs hover:text-primary transition-colors mt-6 md:mt-0"
      >
        <span>View All Articles</span>
        <i data-lucide="arrow-right" class="w-4 h-4"></i>
      </a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      <?php
      $args = array(
          'post_type' => 'post',
          'posts_per_page' => 3,
          'post_status' => 'publish',
      );
      $query = new WP_Query($args);

      if ($query->have_posts()) :
          $delay = 0;
          while ($query->have_posts()) : $query->the_post();
              $categories = get_the_category();
              $category_name = !empty($categories) ? $categories[0]->name : 'Uncategorized';
              
              // Calculate reading time
              $content = get_post_field( 'post_content', $query->post->ID );
              $word_count = str_word_count( strip_tags( $content ) );
              $reading_time = ceil( $word_count / 200 );
              ?>
              <!-- Post -->
              <article class="group cursor-pointer flex flex-col h-full reveal" style="transition-delay: <?php echo $delay; ?>ms">
                <div class="relative h-64 rounded-[2rem] overflow-hidden mb-6 shadow-lg">
                  <?php if (has_post_thumbnail()) : ?>
                      <img src="<?php echo get_the_post_thumbnail_url(null, 'large'); ?>" alt="<?php the_title(); ?>" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" />
                  <?php else : ?>
                      <div class="w-full h-full bg-gray-200 flex items-center justify-center text-gray-400">No Image</div>
                  <?php endif; ?>
                  <div class="absolute inset-0 bg-secondary/20 group-hover:bg-transparent transition-colors"></div>
                  <div class="absolute top-4 left-4 bg-white/90 backdrop-blur-sm px-4 py-2 rounded-full text-[10px] font-black uppercase tracking-widest text-secondary"><?php echo esc_html($category_name); ?></div>
                </div>
                <div class="flex items-center space-x-4 text-xs text-secondary/40 font-bold uppercase tracking-wider mb-4">
                  <span class="flex items-center"><i data-lucide="calendar" class="w-3 h-3 mr-1"></i> <?php echo get_the_date('F j, Y'); ?></span>
                  <span class="flex items-center"><i data-lucide="clock" class="w-3 h-3 mr-1"></i> <?php echo $reading_time; ?> min read</span>
                </div>
                <h3 class="text-2xl font-black text-secondary leading-tight mb-4 group-hover:text-primary transition-colors"><?php the_title(); ?></h3>
                <div class="text-secondary/60 text-sm leading-relaxed mb-6 line-clamp-3 flex-grow">
                    <?php the_excerpt(); ?>
                </div>
                <a href="<?php the_permalink(); ?>" class="flex items-center text-primary font-black uppercase tracking-widest text-xs group-hover:translate-x-2 transition-transform">
                  Read Article <i data-lucide="arrow-right" class="ml-2 w-3 h-3"></i>
                </a>
              </article>
              <?php
              $delay += 100;
          endwhile;
          wp_reset_postdata();
      else :
          echo '<p>No posts found.</p>';
      endif;
      ?>
    </div>

    <div class="mt-12 text-center md:hidden">
       <a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>" class="inline-block bg-secondary text-white px-8 py-3 rounded-full font-bold uppercase tracking-widest text-xs hover:bg-primary transition-colors shadow-xl">
         View All Articles
       </a>
    </div>
  </div>
</section>

<!-- FAQ Section -->
<section class="py-24 bg-white border-t border-gray-100">
  <div class="container mx-auto px-4 max-w-5xl">
    <div class="text-center mb-16">
      <h3 class="text-primary font-bold uppercase tracking-widest text-sm mb-4">Common Questions</h3>
      <h2 class="text-secondary text-4xl md:text-5xl font-black font-heading">Frequently Asked Questions</h2>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
      <!-- Category 1 -->
      <div class="space-y-6">
        <div class="flex items-center space-x-3 mb-8">
          <i data-lucide="map-pin" class="text-primary w-6 h-6"></i>
          <h3 class="text-2xl font-black italic uppercase tracking-tighter text-secondary">Location-Based</h3>
        </div>
        <div class="space-y-4">
            <details class="group border border-gray-100 rounded-3xl overflow-hidden hover:border-gray-200 transition-all duration-300">
               <summary class="flex justify-between items-center p-6 cursor-pointer list-none font-bold text-secondary">
                 <span>What is the recommended R-Value for attic insulation in Ontario?</span>
                 <span class="transition group-open:rotate-180">
                   <i data-lucide="chevron-down" class="text-gray-400"></i>
                 </span>
               </summary>
               <div class="px-6 pb-6 text-secondary/70 leading-relaxed text-sm">
                 To cope with our freezing winters and hot summers, the Ontario Building Code generally recommends upgrading to at least R-60. This ensures maximum thermal resistance and qualifies you for most rebate programs.
               </div>
            </details>
            <details class="group border border-gray-100 rounded-3xl overflow-hidden hover:border-gray-200 transition-all duration-300">
               <summary class="flex justify-between items-center p-6 cursor-pointer list-none font-bold text-secondary">
                 <span>Do you provide services in my area?</span>
                 <span class="transition group-open:rotate-180">
                   <i data-lucide="chevron-down" class="text-gray-400"></i>
                 </span>
               </summary>
               <div class="px-6 pb-6 text-secondary/70 leading-relaxed text-sm">
                 Space Insulation serves homeowners across the Greater Toronto Area and Southern Ontario, including Toronto, Mississauga, Brampton, and surrounding regions.
               </div>
            </details>
            <details class="group border border-gray-100 rounded-3xl overflow-hidden hover:border-gray-200 transition-all duration-300">
               <summary class="flex justify-between items-center p-6 cursor-pointer list-none font-bold text-secondary">
                 <span>How do I apply for the attic insulation rebate in Ontario?</span>
                 <span class="transition group-open:rotate-180">
                   <i data-lucide="chevron-down" class="text-gray-400"></i>
                 </span>
               </summary>
               <div class="px-6 pb-6 text-secondary/70 leading-relaxed text-sm">
                 Typically, you need an energy audit before and after the work. We can connect you with registered energy advisors to ensure your paperwork is filed correctly.
               </div>
            </details>
        </div>
      </div>

      <!-- Category 2 -->
      <div class="space-y-6">
        <div class="flex items-center space-x-3 mb-8">
          <i data-lucide="settings" class="text-primary w-6 h-6"></i>
          <h3 class="text-2xl font-black italic uppercase tracking-tighter text-secondary">Service-Based</h3>
        </div>
        <div class="space-y-4">
            <details class="group border border-gray-100 rounded-3xl overflow-hidden hover:border-gray-200 transition-all duration-300">
               <summary class="flex justify-between items-center p-6 cursor-pointer list-none font-bold text-secondary">
                 <span>How is the attic insulation cost calculated?</span>
                 <span class="transition group-open:rotate-180">
                   <i data-lucide="chevron-down" class="text-gray-400"></i>
                 </span>
               </summary>
               <div class="px-6 pb-6 text-secondary/70 leading-relaxed text-sm">
                 Cost depends on square footage, material type (cellulose vs fiberglass), and whether old insulation needs removal. We offer free onsite assessments for accurate pricing.
               </div>
            </details>
            <details class="group border border-gray-100 rounded-3xl overflow-hidden hover:border-gray-200 transition-all duration-300">
               <summary class="flex justify-between items-center p-6 cursor-pointer list-none font-bold text-secondary">
                 <span>Is using an attic insulation blower better than laying rolls?</span>
                 <span class="transition group-open:rotate-180">
                   <i data-lucide="chevron-down" class="text-gray-400"></i>
                 </span>
               </summary>
               <div class="px-6 pb-6 text-secondary/70 leading-relaxed text-sm">
                 Yes. Blowers break up the material and fluff it, adding air pockets that increase insulating power. It also fills obstructions like pipes and wires much more effectively.
               </div>
            </details>
            <details class="group border border-gray-100 rounded-3xl overflow-hidden hover:border-gray-200 transition-all duration-300">
               <summary class="flex justify-between items-center p-6 cursor-pointer list-none font-bold text-secondary">
                 <span>How do I know if I need to hire insulation companies near me?</span>
                 <span class="transition group-open:rotate-180">
                   <i data-lucide="chevron-down" class="text-gray-400"></i>
                 </span>
               </summary>
               <div class="px-6 pb-6 text-secondary/70 leading-relaxed text-sm">
                 Warning signs include high energy bills, drafty rooms, ice dams (icicles on gutters), or if your upstairs is significantly hotter than the downstairs in summer.
               </div>
            </details>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
