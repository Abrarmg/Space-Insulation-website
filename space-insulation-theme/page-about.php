<?php
/* Template Name: About Page */
get_header();
?>

<!-- About Hero -->
<section class="pt-24 bg-white">
   <div class="container mx-auto px-4 py-20 text-center">
      <h1 class="text-secondary text-5xl md:text-7xl font-black font-heading uppercase tracking-tighter animate-fade-up">About <span class="text-primary italic">Us</span></h1>
      <p class="text-secondary/40 mt-6 max-w-2xl mx-auto animate-fade-up animation-delay-200">Discover the passion and precision behind Ontario's leading attic insulation specialists.</p>
   </div>
</section>

<!-- About Detailed Section -->
<div class="flex flex-col">
  <!-- Intro Section -->
  <section class="py-16 md:py-24 bg-white">
    <div class="container mx-auto px-4">
      <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-20">
         <div class="lg:w-1/2">
            <div class="relative rounded-[3rem] overflow-hidden shadow-2xl border border-gray-100 group">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-detailed.png" alt="About Space Insulation" class="w-full h-auto object-cover transition-transform duration-700 group-hover:scale-105" />
              <div class="absolute inset-0 bg-gradient-to-t from-secondary/60 to-transparent"></div>
              <div class="absolute bottom-8 left-8 bg-white/10 backdrop-blur-md p-6 rounded-2xl border border-white/20">
                <p class="text-white font-black text-xl uppercase italic">Locally Owned</p>
                <p class="text-white/80 text-xs tracking-widest uppercase mt-1">Ontario Operated</p>
              </div>
            </div>
         </div>
         <div class="lg:w-1/2">
            <h2 class="text-secondary text-4xl md:text-5xl font-black font-heading uppercase tracking-tighter mb-6">
              About <span class="text-primary italic">Space Insulation</span>
            </h2>
            <div class="space-y-6 text-secondary/70 text-lg leading-relaxed">
              <p>
                <span class="font-bold text-secondary">Space Insulation</span> is a locally owned and operated insulation company proudly serving homeowners and businesses across Ontario. We specialize in energy-efficient insulation solutions designed specifically for Ontario’s climate, building codes, and housing styles.
              </p>
              <p>
                From older homes to new builds, we provide professional insulation services that improve indoor comfort, reduce energy costs, and increase property value.
              </p>
            </div>
         </div>
      </div>
    </div>
  </section>

  <!-- Local Focus Section -->
  <section class="py-20 bg-secondary text-white overflow-hidden relative">
     <div class="absolute top-0 right-0 w-1/3 h-full bg-primary/5 -skew-x-12 transform translate-x-20"></div>
     <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-4xl mx-auto text-center mb-16">
           <div class="inline-block bg-primary px-4 py-1 rounded-full text-[10px] font-black uppercase tracking-widest mb-4">Not a Franchise</div>
           <h2 class="text-4xl md:text-5xl font-black font-heading uppercase tracking-tighter mb-6">Local Insulation Company <span class="text-primary italic">Serving Your Area</span></h2>
           <p class="text-white/60 text-lg leading-relaxed">
             We are a local insulation contractor, not a franchise or call center. Because we operate locally, we understand common insulation problems in Ontario homes — including heat loss, ice dams, moisture issues, and rising energy bills. This local expertise allows us to recommend the right insulation solution for your specific location.
           </p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4">
            <?php 
            $locations = ["Richmond Hill", "Mississauga", "Brampton", "London", "Newmarket", "Markham"];
            foreach($locations as $loc): ?>
             <div class="bg-white/5 border border-white/10 p-6 rounded-2xl text-center hover:bg-white/10 transition-colors group cursor-default">
                <i data-lucide="map-pin" class="mx-auto mb-3 text-primary group-hover:scale-110 transition-transform w-[24px] h-[24px]"></i>
                <span class="text-sm font-bold uppercase tracking-wide block"><?php echo $loc; ?></span>
             </div>
            <?php endforeach; ?>
        </div>
     </div>
  </section>

  <!-- Services Section -->
  <section class="py-24 bg-gray-50">
    <div class="container mx-auto px-4">
       <div class="text-center mb-16">
          <h2 class="text-secondary text-4xl md:text-6xl font-black font-heading uppercase tracking-tighter mb-4">
            Our Insulation <span class="text-primary italic">Services</span>
          </h2>
          <p class="text-secondary/50 max-w-2xl mx-auto text-lg">Full-service residential and commercial insulation solutions.</p>
       </div>

       <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
           <!-- Service 1 -->
           <div class="bg-white p-10 rounded-[2.5rem] shadow-xl border border-gray-100 hover:-translate-y-2 transition-transform duration-300 group">
               <div class="w-16 h-16 bg-secondary rounded-2xl flex items-center justify-center mb-6 shadow-lg shadow-secondary/20 group-hover:bg-primary transition-colors duration-300">
                  <i data-lucide="home" class="text-white w-8 h-8"></i>
               </div>
               <h3 class="text-xl font-black text-secondary uppercase tracking-tight mb-4 group-hover:text-primary transition-colors">Attic Insulation Services</h3>
               <p class="text-secondary/60 text-sm leading-relaxed">Proper attic insulation is one of the fastest ways to improve energy efficiency in Ontario homes. Our attic insulation services help prevent heat loss, reduce HVAC strain, and maintain consistent indoor temperatures.</p>
           </div>
           <!-- Service 2 -->
           <div class="bg-white p-10 rounded-[2.5rem] shadow-xl border border-gray-100 hover:-translate-y-2 transition-transform duration-300 group">
               <div class="w-16 h-16 bg-secondary rounded-2xl flex items-center justify-center mb-6 shadow-lg shadow-secondary/20 group-hover:bg-primary transition-colors duration-300">
                  <i data-lucide="trash-2" class="text-white w-8 h-8"></i>
               </div>
               <h3 class="text-xl font-black text-secondary uppercase tracking-tight mb-4 group-hover:text-primary transition-colors">Insulation Removal & Replacement</h3>
               <p class="text-secondary/60 text-sm leading-relaxed">Old or contaminated insulation can reduce efficiency and affect indoor air quality. We safely remove damaged insulation and replace it with modern, high-performance materials.</p>
           </div>
           <!-- Service 3 -->
           <div class="bg-white p-10 rounded-[2.5rem] shadow-xl border border-gray-100 hover:-translate-y-2 transition-transform duration-300 group">
               <div class="w-16 h-16 bg-secondary rounded-2xl flex items-center justify-center mb-6 shadow-lg shadow-secondary/20 group-hover:bg-primary transition-colors duration-300">
                  <i data-lucide="layers" class="text-white w-8 h-8"></i>
               </div>
               <h3 class="text-xl font-black text-secondary uppercase tracking-tight mb-4 group-hover:text-primary transition-colors">Basement Insulation</h3>
               <p class="text-secondary/60 text-sm leading-relaxed">Basements are a major source of heat loss. Our basement insulation services help control moisture, eliminate drafts, and improve comfort year-round.</p>
           </div>
           <!-- Service 4 -->
           <div class="bg-white p-10 rounded-[2.5rem] shadow-xl border border-gray-100 hover:-translate-y-2 transition-transform duration-300 group">
               <div class="w-16 h-16 bg-secondary rounded-2xl flex items-center justify-center mb-6 shadow-lg shadow-secondary/20 group-hover:bg-primary transition-colors duration-300">
                  <i data-lucide="layout-template" class="text-white w-8 h-8"></i>
               </div>
               <h3 class="text-xl font-black text-secondary uppercase tracking-tight mb-4 group-hover:text-primary transition-colors">Wall Insulation</h3>
               <p class="text-secondary/60 text-sm leading-relaxed">We install wall insulation for both new construction and existing homes, improving energy efficiency and sound control with minimal disruption.</p>
           </div>
           <!-- Service 5 -->
           <div class="bg-white p-10 rounded-[2.5rem] shadow-xl border border-gray-100 hover:-translate-y-2 transition-transform duration-300 group">
               <div class="w-16 h-16 bg-secondary rounded-2xl flex items-center justify-center mb-6 shadow-lg shadow-secondary/20 group-hover:bg-primary transition-colors duration-300">
                  <i data-lucide="wind" class="text-white w-8 h-8"></i>
               </div>
               <h3 class="text-xl font-black text-secondary uppercase tracking-tight mb-4 group-hover:text-primary transition-colors">Blown-In Insulation</h3>
               <p class="text-secondary/60 text-sm leading-relaxed">Blown-in insulation is ideal for attics and hard-to-reach areas. It provides even coverage and excellent thermal performance, making it a popular choice for Ontario properties.</p>
           </div>
       </div>
    </div>
  </section>

  <!-- Why Choose Us -->
  <section class="py-24 bg-white overflow-hidden">
     <div class="container mx-auto px-4">
        <div class="flex flex-col lg:flex-row gap-16 items-center">
           <div class="lg:w-1/2">
              <h2 class="text-secondary text-4xl md:text-5xl font-black font-heading uppercase tracking-tighter mb-8 leading-[0.9]">
                Why Homeowners Choose <span class="text-primary italic">Space Insulation</span>
              </h2>
              <p class="text-secondary/60 text-lg mb-10">
                We focus on long-term performance, not quick fixes. Our team is dedicated to providing the highest standard of service in Ontario.
              </p>
              <div class="grid gap-4">
                <?php 
                $reasons = [
                  "Local Ontario insulation specialists",
                  "Fully trained and experienced crews",
                  "High-quality, energy-efficient insulation materials",
                  "Clean, safe, and code-compliant installations",
                  "Honest pricing and free estimates",
                  "Residential and commercial projects"
                ];
                foreach($reasons as $reason): ?>
                  <div class="flex items-center space-x-4 bg-gray-50 p-5 rounded-2xl border border-gray-100 hover:border-primary/20 transition-colors">
                     <div class="bg-primary/20 p-2 rounded-full flex-shrink-0">
                       <i data-lucide="check-circle-2" class="text-primary w-5 h-5"></i>
                     </div>
                     <span class="font-bold text-secondary text-sm md:text-base"><?php echo $reason; ?></span>
                  </div>
                <?php endforeach; ?>
              </div>
           </div>
           <div class="lg:w-1/2 relative">
              <div class="absolute -inset-4 bg-primary/20 rounded-[3rem] rotate-3"></div>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/trusted-contractors.png" alt="Trusted Contractors" class="relative rounded-[3rem] shadow-2xl w-full object-cover h-[500px]" />
              <div class="absolute -bottom-10 -left-10 bg-white p-8 rounded-3xl shadow-xl border border-gray-100 hidden md:block animate-bounce" style="animation-duration: 3s">
                 <div class="flex items-center space-x-1 mb-2">
                    <i data-lucide="star" class="text-primary fill-primary w-5 h-5"></i>
                    <i data-lucide="star" class="text-primary fill-primary w-5 h-5"></i>
                    <i data-lucide="star" class="text-primary fill-primary w-5 h-5"></i>
                    <i data-lucide="star" class="text-primary fill-primary w-5 h-5"></i>
                    <i data-lucide="star" class="text-primary fill-primary w-5 h-5"></i>
                 </div>
                 <p class="text-secondary font-black text-lg">Top Rated Team</p>
              </div>
           </div>
        </div>
     </div>
  </section>

  <!-- Trusted Contractors SEO Block -->
  <section class="py-24 bg-secondary/5 border-t border-secondary/10">
     <div class="container mx-auto px-4 max-w-4xl text-center">
        <i data-lucide="shield-check" class="mx-auto text-primary mb-6 w-14 h-14"></i>
        <h2 class="text-3xl md:text-4xl font-black font-heading text-secondary uppercase tracking-tighter mb-8">Trusted Insulation Contractors Near You</h2>
        <div class="prose prose-lg mx-auto text-secondary/70">
          <p class="mb-6 leading-relaxed">
            When you search for “attic insulation near me”, “blown-in insulation Ontario”, or “insulation contractors in Richmond Hill / Mississauga / Brampton”, our goal is to be the company you can trust.
          </p>
          <p class="font-bold text-secondary text-xl">
            We build our reputation through consistent local service, quality workmanship, clear communication, and customer satisfaction.
          </p>
        </div>
     </div>
  </section>

  <!-- CTA Footer -->
  <section class="py-24 bg-primary relative overflow-hidden">
     <!-- Background pattern -->
     <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(#fff 1px, transparent 1px); background-size: 20px 20px"></div>
     <div class="absolute inset-0 bg-gradient-to-r from-secondary/20 to-transparent"></div>
     
     <div class="container mx-auto px-4 relative z-10 text-center text-white">
        <h2 class="text-4xl md:text-6xl font-black font-heading uppercase tracking-tighter mb-8">Proudly Serving Ontario <br/> Homes & Businesses</h2>
        <p class="text-white/90 text-xl max-w-2xl mx-auto mb-12 font-medium">
          Whether you’re upgrading attic insulation, removing old insulation, or insulating a basement or walls, Space Insulation is your trusted local partner.
        </p>
        <div class="flex flex-col sm:flex-row justify-center gap-6">
           <a 
            href="<?php echo home_url('/contact'); ?>"
            class="bg-white text-primary px-12 py-5 rounded-full font-black uppercase tracking-widest hover:bg-secondary hover:text-white transition-all shadow-xl hover:scale-105 active:scale-95"
           >
             Get Free Assessment
           </a>
           <a 
            href="tel:6477049021"
            class="bg-secondary text-white px-12 py-5 rounded-full font-black uppercase tracking-widest hover:bg-white hover:text-secondary transition-all shadow-xl flex items-center justify-center hover:scale-105 active:scale-95 border-2 border-transparent hover:border-secondary"
           >
             <i data-lucide="phone" class="mr-3 w-5 h-5"></i> Call Today
           </a>
        </div>
        <div class="mt-12 flex flex-wrap justify-center gap-6 text-xs font-bold uppercase tracking-widest opacity-70">
           <span class="flex items-center"><i data-lucide="map-pin" class="mr-2 w-3.5 h-3.5"></i> Serving Richmond Hill & GTA</span>
           <span class="hidden sm:inline">•</span>
           <span class="flex items-center"><i data-lucide="layers" class="mr-2 w-3.5 h-3.5"></i> Flexible scheduling available</span>
        </div>
     </div>
  </section>
</div>

<!-- Reused Sections from Home -->
<!-- Testimonials Section -->
<section class="py-24 bg-secondary relative overflow-hidden">
<!-- (Content similar to front-page but static for simplicity in this template, user wanted fidelity so I should ideally include it. I'll include the Testimonials content again here for completeness.) -->
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
      </div>
    </div>

    <!-- Static Testimonials -->
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
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
      <!-- Item 1 -->
      <div class="bg-white p-10 rounded-[3rem] shadow-xl hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 border border-gray-100 reveal">
        <div class="mb-8 bg-gray-50 w-20 h-20 rounded-3xl flex items-center justify-center shadow-inner group-hover:scale-110 transition-transform">
           <i data-lucide="map-pin" class="text-primary w-7 h-7"></i>
        </div>
        <h4 class="text-xl font-black text-secondary mb-4 uppercase tracking-tighter leading-tight italic">Local Ontario Expertise</h4>
        <p class="text-secondary/50 text-sm leading-relaxed">Deep understanding of the Ontario Building Code and R-60 insulation requirements.</p>
      </div>
      <!-- Item 2 -->
      <div class="bg-white p-10 rounded-[3rem] shadow-xl hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 border border-gray-100 reveal">
        <div class="mb-8 bg-gray-50 w-20 h-20 rounded-3xl flex items-center justify-center shadow-inner group-hover:scale-110 transition-transform">
           <i data-lucide="award" class="text-primary w-7 h-7"></i>
        </div>
        <h4 class="text-xl font-black text-secondary mb-4 uppercase tracking-tighter leading-tight italic">Certified Pros</h4>
        <p class="text-secondary/50 text-sm leading-relaxed">Fully licensed, insured, and rigorously trained in modern safety protocols.</p>
      </div>
      <!-- Item 3 -->
      <div class="bg-white p-10 rounded-[3rem] shadow-xl hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 border border-gray-100 reveal">
        <div class="mb-8 bg-gray-50 w-20 h-20 rounded-3xl flex items-center justify-center shadow-inner group-hover:scale-110 transition-transform">
           <i data-lucide="shield" class="text-primary w-7 h-7"></i>
        </div>
        <h4 class="text-xl font-black text-secondary mb-4 uppercase tracking-tighter leading-tight italic">Transparent Pricing</h4>
        <p class="text-secondary/50 text-sm leading-relaxed">Honest, upfront quotes with no hidden fees. High-impact ROI for homeowners.</p>
      </div>
      <!-- Item 4 -->
      <div class="bg-white p-10 rounded-[3rem] shadow-xl hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 border border-gray-100 reveal">
        <div class="mb-8 bg-gray-50 w-20 h-20 rounded-3xl flex items-center justify-center shadow-inner group-hover:scale-110 transition-transform">
           <i data-lucide="heart" class="text-primary w-7 h-7"></i>
        </div>
        <h4 class="text-xl font-black text-secondary mb-4 uppercase tracking-tighter leading-tight italic">100% Satisfaction</h4>
        <p class="text-secondary/50 text-sm leading-relaxed">White-glove service. We leave your home spotless and your attic perfect.</p>
      </div>
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

    <!-- (FAQs reused from front-page, simplified for brevity here but same content) -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
      <!-- Location Based -->
      <div class="space-y-6">
        <div class="flex items-center space-x-3 mb-8">
          <i data-lucide="map-pin" class="text-primary w-6 h-6"></i>
          <h3 class="text-2xl font-black italic uppercase tracking-tighter text-secondary">Location-Based</h3>
        </div>
        <div class="space-y-4">
            <details class="group border border-gray-100 rounded-3xl overflow-hidden hover:border-gray-200 transition-all duration-300">
               <summary class="flex justify-between items-center p-6 cursor-pointer list-none font-bold text-secondary"><span>What is the recommended R-Value?</span><i data-lucide="chevron-down" class="text-gray-400"></i></summary>
               <div class="px-6 pb-6 text-secondary/70 text-sm">To cope with our freezing winters and hot summers, the Ontario Building Code generally recommends upgrading to at least R-60.</div>
            </details>
             <details class="group border border-gray-100 rounded-3xl overflow-hidden hover:border-gray-200 transition-all duration-300">
               <summary class="flex justify-between items-center p-6 cursor-pointer list-none font-bold text-secondary"><span>Service areas?</span><i data-lucide="chevron-down" class="text-gray-400"></i></summary>
               <div class="px-6 pb-6 text-secondary/70 text-sm">Space Insulation serves homeowners across the Greater Toronto Area and Southern Ontario.</div>
            </details>
        </div>
      </div>
      <!-- Service Based -->
       <div class="space-y-6">
        <div class="flex items-center space-x-3 mb-8">
          <i data-lucide="settings" class="text-primary w-6 h-6"></i>
          <h3 class="text-2xl font-black italic uppercase tracking-tighter text-secondary">Service-Based</h3>
        </div>
        <div class="space-y-4">
            <details class="group border border-gray-100 rounded-3xl overflow-hidden hover:border-gray-200 transition-all duration-300">
               <summary class="flex justify-between items-center p-6 cursor-pointer list-none font-bold text-secondary"><span>Cost calculation?</span><i data-lucide="chevron-down" class="text-gray-400"></i></summary>
               <div class="px-6 pb-6 text-secondary/70 text-sm">Cost depends on square footage, material type, etc. We offer free onsite assessments.</div>
            </details>
             <details class="group border border-gray-100 rounded-3xl overflow-hidden hover:border-gray-200 transition-all duration-300">
               <summary class="flex justify-between items-center p-6 cursor-pointer list-none font-bold text-secondary"><span>Blower vs Rolls?</span><i data-lucide="chevron-down" class="text-gray-400"></i></summary>
               <div class="px-6 pb-6 text-secondary/70 text-sm">Yes. Blowers break up the material and fluff it, adding air pockets that increase insulating power.</div>
            </details>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
