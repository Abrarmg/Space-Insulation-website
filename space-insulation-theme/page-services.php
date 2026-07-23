<?php
/* Template Name: Services Page */
get_header(); 
?>

<!-- Services Hero (from App.tsx) -->
<section class="pt-24 bg-secondary">
   <div class="container mx-auto px-4 py-20 text-center">
      <h1 class="text-white text-5xl md:text-7xl font-black font-heading uppercase tracking-tighter animate-fade-up">Our <span class="text-primary italic">Services</span></h1>
      <p class="text-white/40 mt-6 max-w-2xl mx-auto animate-fade-up animation-delay-200">Comprehensive insulation and energy efficiency solutions designed for the unique Ontario climate.</p>
   </div>
</section>

<!-- Services Grid -->
<section class="py-24 bg-secondary overflow-hidden">
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

    <!-- Main Service Cards Grid (3 Columns on LG screens) -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
      
      <!-- Blown-In Insulation -->
      <div class="relative h-[550px] rounded-[3rem] overflow-hidden group reveal shadow-2xl" style="transition-delay: 0ms">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blown-in.png" alt="Blown-In Insulation" class="absolute inset-0 w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110" />
        <div class="absolute inset-0 bg-gradient-to-t from-secondary via-secondary/40 to-transparent"></div>
        <div class="absolute bottom-0 left-0 right-0 p-8 md:p-10 transform transition-transform duration-500 group-hover:-translate-y-4">
          <div class="inline-block p-4 bg-primary rounded-2xl mb-6 shadow-2xl shadow-primary/40 group-hover:scale-110 transition-transform">
             <i data-lucide="wind" class="text-white w-8 h-8"></i>
          </div>
          <div class="flex flex-wrap gap-4">
            <a href="<?php echo home_url('/blown-in-insulation'); ?>" class="inline-block bg-primary text-white px-8 py-4 rounded-full font-black text-xs uppercase tracking-widest hover:bg-primary/80 transition-all shadow-2xl active:scale-95 hover:scale-105">Learn More</a>
            <a href="<?php echo home_url('/#consultation'); ?>" class="inline-block bg-white text-secondary px-8 py-4 rounded-full font-black text-xs uppercase tracking-widest hover:bg-primary hover:text-white transition-all shadow-2xl active:scale-95 hover:scale-105">Book Free Estimate</a>
          </div>
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
          <a href="<?php echo home_url('/contact'); ?>" class="inline-block bg-white text-secondary px-8 py-4 rounded-full font-black text-xs uppercase tracking-widest hover:bg-primary hover:text-white transition-all shadow-2xl active:scale-95">Book Free Estimate</a>
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
          <a href="<?php echo home_url('/contact'); ?>" class="inline-block bg-white text-secondary px-8 py-4 rounded-full font-black text-xs uppercase tracking-widest hover:bg-primary hover:text-white transition-all shadow-2xl active:scale-95">Book Free Estimate</a>
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
          <a href="<?php echo home_url('/contact'); ?>" class="inline-block bg-white text-secondary px-8 py-4 rounded-full font-black text-xs uppercase tracking-widest hover:bg-primary hover:text-white transition-all shadow-2xl active:scale-95">Book Free Estimate</a>
        </div>
        <div class="absolute top-8 right-8 bg-white/10 backdrop-blur-md border border-white/20 text-white text-[10px] font-black px-5 py-2 rounded-full uppercase tracking-widest">ESSENTIAL</div>
      </div>

      <!-- Complete Attic Insulation & Upgrades -->
      <div class="relative h-[550px] rounded-[3rem] overflow-hidden group reveal shadow-2xl" style="transition-delay: 600ms">
        <img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?q=80&w=2000" alt="Attic Insulation Upgrades" class="absolute inset-0 w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110" />
        <div class="absolute inset-0 bg-gradient-to-t from-secondary via-secondary/40 to-transparent"></div>
        <div class="absolute bottom-0 left-0 right-0 p-8 md:p-10 transform transition-transform duration-500 group-hover:-translate-y-4">
          <div class="inline-block p-4 bg-primary rounded-2xl mb-6 shadow-2xl shadow-primary/40 group-hover:scale-110 transition-transform">
             <i data-lucide="shield" class="text-white w-8 h-8"></i>
          </div>
          <h3 class="text-white text-3xl font-black mb-4 italic tracking-tight uppercase leading-none">Attic Upgrades</h3>
          <p class="text-white/70 text-base max-w-md mb-8 leading-relaxed">Bring your home up to code. We provide full-scope upgrades: thorough assessments, old insulation removal, air sealing, and R-60 installation.</p>
          <div class="flex flex-wrap gap-4">
            <a href="<?php echo home_url('/attic-insulation-upgrades'); ?>" class="inline-block bg-primary text-white px-8 py-4 rounded-full font-black text-xs uppercase tracking-widest hover:bg-primary/80 transition-all shadow-2xl active:scale-95 hover:scale-105">Learn More</a>
            <a href="<?php echo home_url('/#consultation'); ?>" class="inline-block bg-white text-secondary px-8 py-4 rounded-full font-black text-xs uppercase tracking-widest hover:bg-primary hover:text-white transition-all shadow-2xl active:scale-95 hover:scale-105">Book Free Estimate</a>
          </div>
        </div>
        <div class="absolute top-8 right-8 bg-white/10 backdrop-blur-md border border-white/20 text-white text-[10px] font-black px-5 py-2 rounded-full uppercase tracking-widest">COMPLETE</div>
      </div>
    </div>
  </div>
</section>

<!-- Technology Section -->
<section class="py-24 bg-secondary relative overflow-hidden">
  <div class="absolute inset-0 opacity-5 pointer-events-none">
    <div class="absolute top-0 right-0 w-full h-full" style="background-image: radial-gradient(#fff 1px, transparent 1px); background-size: 40px 40px"></div>
  </div>

  <div class="container mx-auto px-4">
    <div class="flex flex-col lg:flex-row items-center gap-16 lg:gap-24">
      <div class="lg:w-1/2 reveal">
         <div class="relative">
            <div class="rounded-[3rem] overflow-hidden shadow-2xl group relative h-[500px] md:h-[650px] border border-white/5">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blower-tech.png" alt="High performance blower system" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110" />
              <div class="absolute inset-0 bg-gradient-to-t from-secondary/80 to-transparent flex items-end p-10">
                <div class="space-y-2">
                   <div class="w-12 h-1 bg-primary rounded-full mb-4"></div>
                   <span class="text-white text-lg font-black tracking-widest uppercase italic">High-Volume Blower System</span>
                   <p class="text-white/40 text-xs font-bold uppercase tracking-widest">Industrial grade precision</p>
                </div>
              </div>
            </div>
            
            <div class="absolute -left-8 top-1/2 -translate-y-1/2 glass-card p-8 rounded-[2rem] hidden xl:block animate-float shadow-2xl">
              <p class="text-primary font-black text-5xl leading-none">R-60</p>
              <p class="text-white/40 text-[10px] font-bold uppercase tracking-widest mt-2">Certified Depth</p>
            </div>

            <div class="absolute -bottom-6 -right-6 bg-primary p-8 rounded-3xl hidden md:block shadow-2xl rotate-3">
               <p class="text-white font-black text-2xl italic leading-none">100%</p>
               <p class="text-white/70 text-[10px] font-bold uppercase tracking-widest mt-1">Coverage</p>
            </div>
         </div>
      </div>

      <div class="lg:w-1/2 reveal animation-delay-200">
        <h3 class="text-primary font-bold uppercase tracking-[0.4em] text-xs mb-4">Precision Installation</h3>
        <h2 class="text-white text-5xl md:text-7xl font-black font-heading leading-tight mb-8 tracking-tighter uppercase">
          ADVANCED <span class="text-primary italic">BLOWER</span> TECH
        </h2>
        <div class="space-y-6 text-white/60 text-lg leading-relaxed mb-12">
          <p>Unlike traditional rolled "batt" insulation that leaves gaps, our <span class="text-white font-bold">state-of-the-art blower equipment</span> forces material into every tight corner and hard-to-reach crevice.</p>
          <p>This ensures a perfectly consistent <span class="text-primary font-bold">R-Value (Thermal Resistance)</span> across your entire attic floor, eliminating the cold spots that compromise comfort and efficiency.</p>
        </div>

        <div class="glass-card p-10 rounded-[2.5rem] border-primary/20 shadow-2xl">
           <div class="space-y-8">
              <div class="space-y-3">
                <div class="flex justify-between items-end">
                  <span class="text-white font-black text-xs uppercase tracking-widest">Blower Precision Coverage</span>
                  <span class="text-primary font-black text-xl">100%</span>
                </div>
                <div class="w-full h-4 bg-white/5 rounded-full overflow-hidden shadow-inner p-0.5">
                  <div class="h-full bg-primary rounded-full reveal-grow shadow-[0_0_15px_rgba(131,183,53,0.5)]" style="--target-width: 100%"></div>
                </div>
              </div>
              <div class="space-y-3">
                <div class="flex justify-between items-end">
                  <span class="text-white/40 font-black text-xs uppercase tracking-widest">Traditional Batt Coverage</span>
                  <span class="text-white/40 font-black text-xl">65%</span>
                </div>
                <div class="w-full h-4 bg-white/5 rounded-full overflow-hidden shadow-inner p-0.5">
                  <div class="h-full bg-white/20 rounded-full reveal-grow" style="--target-width: 65%"></div>
                </div>
              </div>
           </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Process Section -->
<section class="py-20 md:py-32 bg-white relative overflow-hidden" id="process">
  <div class="absolute top-0 left-0 w-full h-32 bg-gradient-to-b from-secondary/[0.02] to-transparent"></div>
  <div class="absolute -right-20 top-1/4 w-64 md:w-96 h-64 md:h-96 bg-primary/5 rounded-full blur-[100px] pointer-events-none"></div>
  
  <div class="container mx-auto px-4 relative z-10">
    <div class="text-center mb-16 md:mb-24 reveal">
      <div class="inline-flex items-center space-x-2 bg-primary/10 px-4 py-2 rounded-full mb-6">
        <span class="w-2 h-2 bg-primary rounded-full animate-pulse"></span>
        <span class="text-primary font-bold uppercase tracking-widest text-[10px]">The Space Standards</span>
      </div>
      <h2 class="text-secondary text-4xl md:text-7xl font-black font-heading tracking-tighter mb-4 md:mb-6 uppercase leading-[0.9]">
        OUR WORKING <span class="text-primary italic">PROCESS</span>
      </h2>
      <p class="text-secondary/50 max-w-2xl mx-auto text-base md:text-lg leading-relaxed px-4">
        A rigorous 5-step engineering approach to transform your home's energy efficiency.
      </p>
    </div>

    <div class="relative">
      <div class="hidden lg:block absolute top-1/2 left-0 w-full h-px bg-gradient-to-r from-transparent via-gray-100 to-transparent -z-10"></div>
      
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-6 md:gap-8">
          <!-- Step 1 -->
          <div class="group relative reveal" style="transition-delay: 0ms">
            <span class="absolute -top-6 md:-top-12 left-0 text-[80px] md:text-[120px] font-black text-secondary/[0.03] leading-none select-none group-hover:text-primary/5 transition-colors duration-500">01</span>
            <div class="bg-white rounded-[2rem] md:rounded-[2.5rem] p-6 md:p-8 border border-gray-100 shadow-sm group-hover:shadow-2xl group-hover:-translate-y-2 transition-all duration-500 flex flex-col h-full relative z-10">
              <div class="mb-6 md:mb-8 flex items-center justify-between">
                <div class="bg-primary w-12 h-12 md:w-16 md:h-16 rounded-xl md:rounded-2xl flex items-center justify-center shadow-lg shadow-primary/30 transform group-hover:rotate-6 transition-transform">
                  <i data-lucide="clipboard-check" class="text-white w-6 h-6"></i>
                </div>
              </div>
              <div class="mb-4">
                <p class="text-primary font-black text-[9px] uppercase tracking-[0.2em] mb-1">Precise Inspection</p>
                <h3 class="text-xl md:text-2xl font-black text-secondary tracking-tight">On-Site Audit</h3>
              </div>
              <p class="text-secondary/60 text-xs md:text-sm leading-relaxed mb-6 flex-grow">Our certified energy consultants perform a 20-point thermal audit of your attic to identify energy leaks.</p>
              <div class="space-y-2 pt-4 border-t border-gray-50">
                  <div class="flex items-center text-[9px] font-bold text-secondary/40 uppercase tracking-widest"><div class="w-1 h-1 rounded-full bg-primary/40 mr-2"></div>Thermal Imaging</div>
                  <div class="flex items-center text-[9px] font-bold text-secondary/40 uppercase tracking-widest"><div class="w-1 h-1 rounded-full bg-primary/40 mr-2"></div>Ventilation Check</div>
              </div>
            </div>
          </div>
          <!-- Step 2 -->
          <div class="group relative reveal" style="transition-delay: 100ms">
            <span class="absolute -top-6 md:-top-12 left-0 text-[80px] md:text-[120px] font-black text-secondary/[0.03] leading-none select-none group-hover:text-primary/5 transition-colors duration-500">02</span>
            <div class="bg-white rounded-[2rem] md:rounded-[2.5rem] p-6 md:p-8 border border-gray-100 shadow-sm group-hover:shadow-2xl group-hover:-translate-y-2 transition-all duration-500 flex flex-col h-full relative z-10">
              <div class="mb-6 md:mb-8 flex items-center justify-between">
                <div class="bg-primary w-12 h-12 md:w-16 md:h-16 rounded-xl md:rounded-2xl flex items-center justify-center shadow-lg shadow-primary/30 transform group-hover:rotate-6 transition-transform">
                  <i data-lucide="target" class="text-white w-6 h-6"></i>
                </div>
              </div>
              <div class="mb-4">
                <p class="text-primary font-black text-[9px] uppercase tracking-[0.2em] mb-1">Tailored Planning</p>
                <h3 class="text-xl md:text-2xl font-black text-secondary tracking-tight">Thermal Strategy</h3>
              </div>
              <p class="text-secondary/60 text-xs md:text-sm leading-relaxed mb-6 flex-grow">We engineer a custom solution to reach R-60 performance, maximizing rebate eligibility.</p>
              <div class="space-y-2 pt-4 border-t border-gray-50">
                  <div class="flex items-center text-[9px] font-bold text-secondary/40 uppercase tracking-widest"><div class="w-1 h-1 rounded-full bg-primary/40 mr-2"></div>Material Selection</div>
                  <div class="flex items-center text-[9px] font-bold text-secondary/40 uppercase tracking-widest"><div class="w-1 h-1 rounded-full bg-primary/40 mr-2"></div>Cost Breakdown</div>
              </div>
            </div>
          </div>
          <!-- Step 3 -->
          <div class="group relative reveal" style="transition-delay: 200ms">
            <span class="absolute -top-6 md:-top-12 left-0 text-[80px] md:text-[120px] font-black text-secondary/[0.03] leading-none select-none group-hover:text-primary/5 transition-colors duration-500">03</span>
            <div class="bg-white rounded-[2rem] md:rounded-[2.5rem] p-6 md:p-8 border border-gray-100 shadow-sm group-hover:shadow-2xl group-hover:-translate-y-2 transition-all duration-500 flex flex-col h-full relative z-10">
              <div class="mb-6 md:mb-8 flex items-center justify-between">
                <div class="bg-primary w-12 h-12 md:w-16 md:h-16 rounded-xl md:rounded-2xl flex items-center justify-center shadow-lg shadow-primary/30 transform group-hover:rotate-6 transition-transform">
                  <i data-lucide="shield-check" class="text-white w-6 h-6"></i>
                </div>
              </div>
              <div class="mb-4">
                <p class="text-primary font-black text-[9px] uppercase tracking-[0.2em] mb-1">The Foundation</p>
                <h3 class="text-xl md:text-2xl font-black text-secondary tracking-tight">Air Sealing</h3>
              </div>
              <p class="text-secondary/60 text-xs md:text-sm leading-relaxed mb-6 flex-grow">Before adding material, we seal pot lights and plumbing stacks to prevent heat bypass.</p>
              <div class="space-y-2 pt-4 border-t border-gray-50">
                  <div class="flex items-center text-[9px] font-bold text-secondary/40 uppercase tracking-widest"><div class="w-1 h-1 rounded-full bg-primary/40 mr-2"></div>Precision Foaming</div>
                  <div class="flex items-center text-[9px] font-bold text-secondary/40 uppercase tracking-widest"><div class="w-1 h-1 rounded-full bg-primary/40 mr-2"></div>Baffle Install</div>
              </div>
            </div>
          </div>
          <!-- Step 4 -->
          <div class="group relative reveal" style="transition-delay: 300ms">
            <span class="absolute -top-6 md:-top-12 left-0 text-[80px] md:text-[120px] font-black text-secondary/[0.03] leading-none select-none group-hover:text-primary/5 transition-colors duration-500">04</span>
            <div class="bg-white rounded-[2rem] md:rounded-[2.5rem] p-6 md:p-8 border border-gray-100 shadow-sm group-hover:shadow-2xl group-hover:-translate-y-2 transition-all duration-500 flex flex-col h-full relative z-10">
              <div class="mb-6 md:mb-8 flex items-center justify-between">
                <div class="bg-primary w-12 h-12 md:w-16 md:h-16 rounded-xl md:rounded-2xl flex items-center justify-center shadow-lg shadow-primary/30 transform group-hover:rotate-6 transition-transform">
                  <i data-lucide="zap" class="text-white w-6 h-6"></i>
                </div>
              </div>
              <div class="mb-4">
                <p class="text-primary font-black text-[9px] uppercase tracking-[0.2em] mb-1">High-Tech Install</p>
                <h3 class="text-xl md:text-2xl font-black text-secondary tracking-tight">Blower Precision</h3>
              </div>
              <p class="text-secondary/60 text-xs md:text-sm leading-relaxed mb-6 flex-grow">Our high-volume blower systems deliver a seamless thermal blanket, filling every crevice.</p>
              <div class="space-y-2 pt-4 border-t border-gray-50">
                  <div class="flex items-center text-[9px] font-bold text-secondary/40 uppercase tracking-widest"><div class="w-1 h-1 rounded-full bg-primary/40 mr-2"></div>No Gaps/Cracks</div>
                  <div class="flex items-center text-[9px] font-bold text-secondary/40 uppercase tracking-widest"><div class="w-1 h-1 rounded-full bg-primary/40 mr-2"></div>Eco-Material</div>
              </div>
            </div>
          </div>
          <!-- Step 5 -->
          <div class="group relative reveal" style="transition-delay: 400ms">
            <span class="absolute -top-6 md:-top-12 left-0 text-[80px] md:text-[120px] font-black text-secondary/[0.03] leading-none select-none group-hover:text-primary/5 transition-colors duration-500">05</span>
            <div class="bg-white rounded-[2rem] md:rounded-[2.5rem] p-6 md:p-8 border border-gray-100 shadow-sm group-hover:shadow-2xl group-hover:-translate-y-2 transition-all duration-500 flex flex-col h-full relative z-10">
              <div class="mb-6 md:mb-8 flex items-center justify-between">
                <div class="bg-primary w-12 h-12 md:w-16 md:h-16 rounded-xl md:rounded-2xl flex items-center justify-center shadow-lg shadow-primary/30 transform group-hover:rotate-6 transition-transform">
                  <i data-lucide="sparkles" class="text-white w-6 h-6"></i>
                </div>
              </div>
              <div class="mb-4">
                <p class="text-primary font-black text-[9px] uppercase tracking-[0.2em] mb-1">Final Validation</p>
                <h3 class="text-xl md:text-2xl font-black text-secondary tracking-tight">Quality Mastery</h3>
              </div>
              <p class="text-secondary/60 text-xs md:text-sm leading-relaxed mb-6 flex-grow">We perform a final depth check and site cleanup, leaving your home spotless and optimized.</p>
              <div class="space-y-2 pt-4 border-t border-gray-50">
                  <div class="flex items-center text-[9px] font-bold text-secondary/40 uppercase tracking-widest"><div class="w-1 h-1 rounded-full bg-primary/40 mr-2"></div>Depth Verification</div>
                  <div class="flex items-center text-[9px] font-bold text-secondary/40 uppercase tracking-widest"><div class="w-1 h-1 rounded-full bg-primary/40 mr-2"></div>White-Glove Clean</div>
              </div>
            </div>
          </div>
      </div>
    </div>

    <!-- Bottom CTA -->
    <div class="mt-16 md:mt-24 text-center reveal">
      <div class="inline-block glass-card bg-secondary p-6 md:p-12 rounded-[2rem] md:rounded-[3rem] border border-white/5 shadow-2xl relative overflow-hidden group max-w-4xl mx-auto">
        <div class="absolute top-0 left-0 w-full h-full bg-primary/5 opacity-0 group-hover:opacity-100 transition-opacity"></div>
        <div class="relative z-10 flex flex-col md:flex-row items-center gap-6 md:gap-16">
          <div class="text-center md:text-left">
            <h4 class="text-white text-2xl md:text-3xl font-black mb-2">Ready to start?</h4>
            <p class="text-white/50 text-xs md:text-sm">Join hundreds of Ontario homeowners saving up to 25% today.</p>
          </div>
          <a href="<?php echo home_url('/contact'); ?>" class="w-full md:w-auto bg-primary text-white px-8 md:px-12 py-4 md:py-5 rounded-2xl font-black text-base md:text-lg hover:scale-105 active:scale-95 transition-all shadow-xl shadow-primary/20 whitespace-nowrap inline-block">BOOK YOUR AUDIT</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Cost & Rebate Section -->
<section class="py-24 bg-white relative">
  <div class="container mx-auto px-4">
    <div class="flex flex-col lg:flex-row items-center gap-16 lg:gap-24">
      <div class="lg:w-1/2 order-2 lg:order-1 reveal">
        <h3 class="text-primary font-bold uppercase tracking-[0.4em] text-xs mb-4">Investment & Incentives</h3>
        <h2 class="text-secondary text-5xl md:text-7xl font-black font-heading leading-none mb-8 tracking-tighter">
          ONTARIO <span class="text-primary italic">REBATES</span> & COST
        </h2>
        <p class="text-secondary/70 text-xl leading-relaxed mb-10">
          The <span class="text-secondary font-black">attic insulation cost</span> is a smart investment that pays for itself. We help you access provincial incentives that significantly lower your upfront cost.
        </p>
        
        <div class="grid gap-8">
            <div class="flex space-x-6 group">
              <div class="w-16 h-16 bg-gray-50 rounded-2xl flex-shrink-0 flex items-center justify-center group-hover:bg-primary/10 transition-colors">
                 <i data-lucide="percent" class="text-primary w-6 h-6"></i>
              </div>
              <div>
                <h4 class="text-xl font-bold text-secondary mb-1">Shorter Payback Period</h4>
                <p class="text-secondary/50 text-base">Rebates can cover up to 50% or more of project costs.</p>
              </div>
            </div>
            <div class="flex space-x-6 group">
              <div class="w-16 h-16 bg-gray-50 rounded-2xl flex-shrink-0 flex items-center justify-center group-hover:bg-primary/10 transition-colors">
                 <i data-lucide="trending-up" class="text-primary w-6 h-6"></i>
              </div>
              <div>
                <h4 class="text-xl font-bold text-secondary mb-1">Boost Home Resale Value</h4>
                <p class="text-secondary/50 text-base">Efficiency upgrades are highly attractive to modern buyers.</p>
              </div>
            </div>
            <div class="flex space-x-6 group">
              <div class="w-16 h-16 bg-gray-50 rounded-2xl flex-shrink-0 flex items-center justify-center group-hover:bg-primary/10 transition-colors">
                 <i data-lucide="handshake" class="text-primary w-6 h-6"></i>
              </div>
              <div>
                <h4 class="text-xl font-bold text-secondary mb-1">White-Glove Filing</h4>
                <p class="text-secondary/50 text-base">We connect you with energy advisors to handle the paperwork.</p>
              </div>
            </div>
        </div>
      </div>

      <div class="lg:w-1/2 order-1 lg:order-2 reveal">
        <div class="relative">
          <div class="rounded-[4rem] overflow-hidden shadow-[0_40px_80px_-15px_rgba(0,0,0,0.3)] border-4 border-gray-50 relative group">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/rebate.png" alt="Ontario Energy Efficiency Rebate Visual" class="w-full h-auto transform transition-transform duration-700 group-hover:scale-105" />
            <div class="absolute inset-0 bg-primary/10 group-hover:bg-transparent transition-colors"></div>
            
            <div class="absolute bottom-8 left-8 right-8 glass-card p-6 rounded-3xl animate-float">
              <div class="flex items-center justify-between">
                <div>
                  <p class="text-white text-[10px] font-black uppercase tracking-widest opacity-60 mb-1">Estimated Savings</p>
                  <p class="text-white text-3xl font-black">25% SAVINGS</p>
                </div>
                <div class="bg-primary/20 p-3 rounded-full">
                   <i data-lucide="info" class="text-primary w-6 h-6"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="absolute -bottom-10 -right-10 w-64 h-64 bg-primary/20 blur-[120px] rounded-full -z-10"></div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
