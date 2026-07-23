<?php
/* Template Name: Blown-In Insulation Page */
get_header();
?>

<!-- Inject JSON-LD Schema on Page Load -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "serviceType": "Blown-In Attic Insulation",
  "provider": {
    "@type": "LocalBusiness",
    "name": "Space Insulation",
    "telephone": "(647) 704-9021",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "1070 Major MacKenzie Dr.",
      "addressLocality": "Richmond Hill",
      "addressRegion": "ON",
      "postalCode": "L4S 1P3",
      "addressCountry": "CA"
    }
  },
  "areaServed": [
    { "@type": "City", "name": "Markham" },
    { "@type": "City", "name": "Mississauga" },
    { "@type": "City", "name": "Richmond Hill" },
    { "@type": "City", "name": "Brampton" },
    { "@type": "City", "name": "Newmarket" },
    { "@type": "City", "name": "North York" },
    { "@type": "City", "name": "Aurora" },
    { "@type": "City", "name": "London" }
  ],
  "description": "Professional blown-in fiberglass and cellulose insulation services for homeowners and businesses in the GTA to improve home thermal performance and reduce energy costs."
}
</script>

<div class="bg-white text-secondary font-sans overflow-x-hidden">
  
  <!-- 1. HERO SECTION -->
  <section class="relative pt-32 pb-24 md:pt-40 md:pb-36 bg-secondary text-white overflow-hidden">
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_30%_30%,rgba(131,183,53,0.15),transparent)] pointer-events-none"></div>
    <div class="container mx-auto px-4 max-w-6xl relative z-10">
      <div class="flex flex-col lg:flex-row items-center gap-12">
        <div class="w-full lg:w-7/12 text-center lg:text-left animate-fade-up">
          <span class="inline-flex items-center space-x-2 bg-primary/20 text-primary border border-primary/30 px-4 py-2 rounded-full mb-6 font-bold uppercase tracking-widest text-[10px] md:text-xs">
            <span class="w-2 h-2 bg-primary rounded-full animate-ping"></span>
            <span>GTA Attic Specialists</span>
          </span>
          <h1 class="text-4xl sm:text-5xl md:text-6xl font-black font-heading leading-[1.0] uppercase tracking-tighter mb-6">
            Blown-In Insulation <br />
            <span class="text-primary italic">In The GTA</span> That Works
          </h1>
          <p class="text-white/70 text-base md:text-lg max-w-2xl mx-auto lg:mx-0 leading-relaxed mb-8">
            Is your attic making your energy bills climb every winter? A lot of homes across the Greater Toronto Area are losing valuable heat through old, thinned out, or uneven insulation. Space Insulation stops the heat loss and saves you hundreds annually.
          </p>
          <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
            <a
              href="<?php echo home_url('/#consultation'); ?>"
              class="bg-primary text-white hover:bg-primary/90 hover:scale-105 active:scale-95 transition-all px-8 py-5 rounded-full font-black text-sm uppercase tracking-widest shadow-xl flex items-center justify-center gap-2 group"
            >
              Get Free Estimate
              <i data-lucide="arrow-right" class="w-4 h-4 transition-transform group-hover:translate-x-1"></i>
            </a>
            <a
              href="tel:6477049021"
              class="bg-white/10 hover:bg-white/20 border border-white/20 px-8 py-5 rounded-full font-black text-sm uppercase tracking-widest text-white transition-all flex items-center justify-center gap-2"
            >
              <i data-lucide="phone" class="w-4 h-4"></i> (647) 704-9021
            </a>
          </div>
        </div>
        
        <div class="w-full lg:w-5/12 animate-fade-up animation-delay-200">
          <div class="relative rounded-[2.5rem] overflow-hidden border border-white/10 shadow-2xl group">
            <img 
              src="https://i.ibb.co/Zp74mfPf/Gemini-Generated-Image-kfrihekfrihekfri.png" 
              alt="Blown-In Insulation Work by Space Insulation" 
              class="w-full h-[320px] md:h-[400px] object-cover transition-transform duration-700 group-hover:scale-105"
            />
            <div class="absolute inset-0 bg-gradient-to-t from-secondary/85 via-transparent to-transparent"></div>
            <div class="absolute bottom-6 left-6 right-6 bg-white/5 backdrop-blur-md border border-white/15 p-5 rounded-2xl">
              <div class="text-[10px] font-black text-primary uppercase tracking-[0.2em] mb-1">Guaranteed Performance</div>
              <div class="text-white font-bold text-sm">Achieve Up to R-60 Thermal Protection Value</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 2. BENEFITS / FEATURES -->
  <section class="py-20 md:py-28 bg-gray-50 overflow-hidden">
    <div class="container mx-auto px-4 max-w-6xl">
      <div class="text-center mb-16 reveal">
        <h3 class="text-primary font-bold uppercase tracking-[0.4em] text-xs mb-3">Why Work With Us</h3>
        <h2 class="text-secondary text-3xl md:text-5xl font-black font-heading mb-6 uppercase tracking-tight">
          WHY GTA HOMEOWNERS <span class="text-primary italic">TRUST US</span>
        </h2>
        <p class="text-secondary/50 max-w-2xl mx-auto text-base">
          Not all insulation companies are built the same. Here is how Space Insulation delivers value on every attic service.
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Benefit 1 -->
        <div class="bg-white p-8 rounded-3xl border border-gray-100 hover:border-primary/30 shadow-lg hover:shadow-xl hover:-translate-y-1 transition-all duration-300 reveal" style="transition-delay: 0ms">
          <div class="w-12 h-12 bg-primary/10 rounded-2xl flex items-center justify-center mb-6">
            <i data-lucide="check-circle-2" class="text-primary w-6 h-6"></i>
          </div>
          <h4 class="text-secondary font-black text-lg mb-3 uppercase tracking-tight">Free, No-Pressure Estimates</h4>
          <p class="text-secondary/60 text-sm leading-relaxed">We'll come take a look at your attic and give you a straight answer. No upselling, no confusing quotes.</p>
        </div>

        <!-- Benefit 2 -->
        <div class="bg-white p-8 rounded-3xl border border-gray-100 hover:border-primary/30 shadow-lg hover:shadow-xl hover:-translate-y-1 transition-all duration-300 reveal" style="transition-delay: 100ms">
          <div class="w-12 h-12 bg-primary/10 rounded-2xl flex items-center justify-center mb-6">
            <i data-lucide="map-pin" class="text-primary w-6 h-6"></i>
          </div>
          <h4 class="text-secondary font-black text-lg mb-3 uppercase tracking-tight">We Know GTA Homes</h4>
          <p class="text-secondary/60 text-sm leading-relaxed">From older character homes in North York to newer builds in Markham, we've worked on it all. Different homes need different approaches, and we know the difference.</p>
        </div>

        <!-- Benefit 3 -->
        <div class="bg-white p-8 rounded-3xl border border-gray-100 hover:border-primary/30 shadow-lg hover:shadow-xl hover:-translate-y-1 transition-all duration-300 reveal" style="transition-delay: 200ms">
          <div class="w-12 h-12 bg-primary/10 rounded-2xl flex items-center justify-center mb-6">
            <i data-lucide="wind" class="text-primary w-6 h-6"></i>
          </div>
          <h4 class="text-secondary font-black text-lg mb-3 uppercase tracking-tight">Fast, Clean Installation</h4>
          <p class="text-secondary/60 text-sm leading-relaxed">Most blown-in insulation jobs are done in a single day. We protect your home during the process and clean up after ourselves.</p>
        </div>

        <!-- Benefit 4 -->
        <div class="bg-white p-8 rounded-3xl border border-gray-100 hover:border-primary/30 shadow-lg hover:shadow-xl hover:-translate-y-1 transition-all duration-300 reveal" style="transition-delay: 300ms">
          <div class="w-12 h-12 bg-primary/10 rounded-2xl flex items-center justify-center mb-6">
            <i data-lucide="shield-check" class="text-primary w-6 h-6"></i>
          </div>
          <h4 class="text-secondary font-black text-lg mb-3 uppercase tracking-tight">We Stand Behind Our Work</h4>
          <p class="text-secondary/60 text-sm leading-relaxed">Our team is experienced, careful, and focused on getting the job done right the first time.</p>
        </div>

        <!-- Benefit 5 -->
        <div class="bg-white p-8 rounded-3xl border border-gray-100 hover:border-primary/30 shadow-lg hover:shadow-xl hover:-translate-y-1 transition-all duration-300 reveal" style="transition-delay: 400ms">
          <div class="w-12 h-12 bg-primary/10 rounded-2xl flex items-center justify-center mb-6">
            <i data-lucide="check-circle-2" class="text-primary w-6 h-6"></i>
          </div>
          <h4 class="text-secondary font-black text-lg mb-3 uppercase tracking-tight">We Use Quality Materials</h4>
          <p class="text-secondary/60 text-sm leading-relaxed">Better material means better R-value, which means your home actually stays warmer in winter and cooler in summer.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 3. SIGNS YOU NEED INSULATION -->
  <section class="py-20 md:py-28 bg-white overflow-hidden">
    <div class="container mx-auto px-4 max-w-6xl">
      <div class="flex flex-col lg:flex-row items-center gap-16">
        <div class="w-full lg:w-1/2 relative reveal">
          <div class="absolute -top-10 -left-10 w-64 h-64 bg-primary/10 rounded-full blur-3xl -z-10 animate-pulse"></div>
          <div class="rounded-[3rem] overflow-hidden border border-gray-100 shadow-2xl group">
            <img 
              src="<?php echo get_template_directory_uri(); ?>/assets/images/house-diagram.png" 
              alt="Attic signs poor insulation diagram" 
              class="w-full h-auto object-contain transition-transform duration-700 group-hover:scale-105"
            />
          </div>
        </div>

        <div class="w-full lg:w-1/2 reveal">
          <span class="text-primary font-bold uppercase tracking-[0.3em] text-xs mb-3 block">Inspection Checklist</span>
          <h2 class="text-secondary text-3xl md:text-5xl font-black font-heading mb-8 uppercase tracking-tight leading-none">
            SIGNS YOUR ATTIC <br />
            <span class="text-primary italic">NEEDS AN UPGRADE</span>
          </h2>
          
          <div class="space-y-6">
            <!-- Sign 1 -->
            <div class="flex items-start gap-4 p-4 rounded-2xl border border-gray-50 hover:border-primary/20 hover:bg-gray-50/50 transition-all">
              <div class="mt-1 text-primary shrink-0">
                <i data-lucide="alert-circle" class="w-5 h-5 text-accent"></i>
              </div>
              <div>
                <h4 class="text-secondary font-bold text-base mb-1">Your energy bills keep climbing</h4>
                <p class="text-secondary/60 text-sm leading-relaxed font-medium">If your heating and cooling costs feel higher than they should be, poor insulation is often the reason why.</p>
              </div>
            </div>

            <!-- Sign 2 -->
            <div class="flex items-start gap-4 p-4 rounded-2xl border border-gray-50 hover:border-primary/20 hover:bg-gray-50/50 transition-all">
              <div class="mt-1 text-primary shrink-0">
                <i data-lucide="alert-circle" class="w-5 h-5 text-accent"></i>
              </div>
              <div>
                <h4 class="text-secondary font-bold text-base mb-1">Some rooms are always cold</h4>
                <p class="text-secondary/60 text-sm leading-relaxed font-medium">Uneven temperatures from room to room usually point to insulation gaps.</p>
              </div>
            </div>

            <!-- Sign 3 -->
            <div class="flex items-start gap-4 p-4 rounded-2xl border border-gray-50 hover:border-primary/20 hover:bg-gray-50/50 transition-all">
              <div class="mt-1 text-primary shrink-0">
                <i data-lucide="alert-circle" class="w-5 h-5 text-accent"></i>
              </div>
              <div>
                <h4 class="text-secondary font-bold text-base mb-1">You notice ice damming in winter</h4>
                <p class="text-secondary/60 text-sm leading-relaxed font-medium">Icicles hanging off your roof edge are actually a sign that heat is escaping through your attic.</p>
              </div>
            </div>

            <!-- Sign 4 -->
            <div class="flex items-start gap-4 p-4 rounded-2xl border border-gray-50 hover:border-primary/20 hover:bg-gray-50/50 transition-all">
              <div class="mt-1 text-primary shrink-0">
                <i data-lucide="alert-circle" class="w-5 h-5 text-accent"></i>
              </div>
              <div>
                <h4 class="text-secondary font-bold text-base mb-1">Your insulation looks thin or uneven</h4>
                <p class="text-secondary/60 text-sm leading-relaxed font-medium">If you can see wood beams poking through your attic insulation, it's time for more.</p>
              </div>
            </div>

            <!-- Sign 5 -->
            <div class="flex items-start gap-4 p-4 rounded-2xl border border-gray-50 hover:border-primary/20 hover:bg-gray-50/50 transition-all">
              <div class="mt-1 text-primary shrink-0">
                <i data-lucide="alert-circle" class="w-5 h-5 text-accent"></i>
              </div>
              <div>
                <h4 class="text-secondary font-bold text-base mb-1">Your home is older and has never been upgraded</h4>
                <p class="text-secondary/60 text-sm leading-relaxed font-medium">A lot of GTA homes still have insulation from decades ago that just doesn't perform the way modern materials do.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 4. PROCESS - HOW IT WORKS -->
  <section class="py-20 md:py-28 bg-secondary text-white overflow-hidden">
    <div class="container mx-auto px-4 max-w-6xl">
      <div class="text-center mb-20 reveal">
        <h3 class="text-primary font-bold uppercase tracking-[0.4em] text-xs mb-3">Our Framework</h3>
        <h2 class="text-white text-3xl md:text-5xl font-black font-heading mb-6 uppercase tracking-tight">
          OUR STEP-BY-STEP <span class="text-primary italic">PROCESS</span>
        </h2>
        <p class="text-white/40 max-w-xl mx-auto text-base">
          Getting new insulation shouldn't feel complicated. Here is how it works with us.
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 relative z-10">
        <!-- Step 1 -->
        <div class="bg-white/5 border border-white/10 p-8 rounded-[2rem] hover:bg-white/10 transition-all duration-300 relative group reveal" style="transition-delay: 0ms">
          <div class="text-5xl font-black font-heading text-primary/30 group-hover:text-primary transition-colors mb-6">01</div>
          <h4 class="text-white font-bold text-lg mb-3 tracking-tight">Free Estimate & Inspection</h4>
          <p class="text-white/60 text-sm leading-relaxed">We start by inspecting your attic in person. We check your current insulation levels, look for gaps, and talk through what you're noticing. Then we give you a clear, honest quote.</p>
        </div>

        <!-- Step 2 -->
        <div class="bg-white/5 border border-white/10 p-8 rounded-[2rem] hover:bg-white/10 transition-all duration-300 relative group reveal" style="transition-delay: 100ms">
          <div class="text-5xl font-black font-heading text-primary/30 group-hover:text-primary transition-colors mb-6">02</div>
          <h4 class="text-white font-bold text-lg mb-3 tracking-tight">We Prep the Space</h4>
          <p class="text-white/60 text-sm leading-relaxed">Before we bring in any equipment, we protect your home. We lay down coverings and make sure your space is ready for a clean install.</p>
        </div>

        <!-- Step 3 -->
        <div class="bg-white/5 border border-white/10 p-8 rounded-[2rem] hover:bg-white/10 transition-all duration-300 relative group reveal" style="transition-delay: 200ms">
          <div class="text-5xl font-black font-heading text-primary/30 group-hover:text-primary transition-colors mb-6">03</div>
          <h4 class="text-white font-bold text-lg mb-3 tracking-tight">Installation Day</h4>
          <p class="text-white/60 text-sm leading-relaxed">Using professional blown-in equipment, we fill your attic evenly, covering areas that traditional batt insulation often misses, like corners, around pipes, and along the edges.</p>
        </div>

        <!-- Step 4 -->
        <div class="bg-white/5 border border-white/10 p-8 rounded-[2rem] hover:bg-white/10 transition-all duration-300 relative group reveal" style="transition-delay: 300ms">
          <div class="text-5xl font-black font-heading text-primary/30 group-hover:text-primary transition-colors mb-6">04</div>
          <h4 class="text-white font-bold text-lg mb-3 tracking-tight">Final Walkthrough</h4>
          <p class="text-white/60 text-sm leading-relaxed">Once we're done, we walk you through the finished job. We make sure you're happy with the coverage and answer any last questions before we head out.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- 5. LOCATIONS GRID (SEO INTERNAL LINKING) -->
  <section class="py-20 bg-gray-50 border-b border-gray-100">
    <div class="container mx-auto px-4 max-w-4xl text-center">
      <div class="reveal mb-12">
        <h3 class="text-primary font-bold uppercase tracking-[0.4em] text-xs mb-3">Service Coverage</h3>
        <h2 class="text-secondary text-2xl md:text-4xl font-black font-heading uppercase mb-4">
          SERVING HOMEOWNERS <span class="text-primary italic">ACROSS THE GTA</span>
        </h2>
        <p class="text-secondary/50 text-sm max-w-xl mx-auto">
          We proudly serve homeowners and businesses throughout the Greater Toronto Area.
        </p>
      </div>

      <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 reveal">
        <?php 
        $gta_locations = [
          "Markham" => "/#consultation",
          "Mississauga" => "/#consultation",
          "Richmond Hill" => "/#consultation",
          "Brampton" => "/#consultation",
          "Newmarket" => "/#consultation",
          "North York" => "/#consultation",
          "Aurora" => "/#consultation",
          "London, ON" => "/#consultation"
        ];
        foreach($gta_locations as $name => $anchor): ?>
          <a
            href="<?php echo home_url($anchor); ?>"
            class="bg-white p-4 border border-gray-100 hover:border-primary rounded-2xl hover:shadow-md text-secondary hover:text-primary font-bold text-xs uppercase tracking-wider transition-all block"
          >
            📍 <?php echo $name; ?>
          </a>
        <?php endforeach; ?>
      </div>
      
      <div class="mt-8 text-secondary/40 text-xs italic reveal">
        *Don't see your city listed? <a href="<?php echo home_url('/#consultation'); ?>" class="text-primary underline font-bold hover:text-primary/80">Contact us</a> to see if we service your area.
      </div>
    </div>
  </section>

  <!-- 6. FAQs ACCORDION -->
  <section class="py-20 md:py-28 bg-white overflow-hidden">
    <div class="container mx-auto px-4 max-w-3xl">
      <div class="text-center mb-16 reveal">
        <h3 class="text-primary font-bold uppercase tracking-[0.4em] text-xs mb-3">Got Questions?</h3>
        <h2 class="text-secondary text-3xl md:text-5xl font-black font-heading mb-6 uppercase tracking-tight">
          FREQUENTLY ASKED <span class="text-primary italic">QUESTIONS</span>
        </h2>
      </div>

      <div class="space-y-4 reveal">
        <?php
        $faqs = [
          [
            "q" => "What is blown-in insulation?",
            "a" => "Blown-in insulation is loose fill material (usually cellulose or fiberglass) that's blown into your attic using special equipment. It fills gaps and uneven spaces better than traditional rolled insulation, especially around corners and tight areas."
          ],
          [
            "q" => "How long does a blown-in insulation job take?",
            "a" => "Most residential attic jobs are completed in a single day. Larger homes or commercial spaces may take a bit longer, but we'll let you know upfront during your free estimate."
          ],
          [
            "q" => "How much does blown-in insulation cost?",
            "a" => "Cost depends on your attic size, current insulation levels, and the material used. That's exactly why we offer free estimates. We'll give you real numbers based on your actual home."
          ],
          [
            "q" => "Is blown-in insulation messy?",
            "a" => "Not with us. We prep and protect your home before starting, and we clean up thoroughly once the job is done."
          ],
          [
            "q" => "What's the best time of year to get blown-in insulation?",
            "a" => "Any time, really. But a lot of homeowners like to get it done before winter hits so they can start saving on heating right away."
          ]
        ];
        foreach($faqs as $idx => $faq): ?>
          <div class="wp-faq-item border border-gray-100 rounded-3xl overflow-hidden shadow-sm hover:shadow-md transition-shadow">
            <button
              class="w-full flex items-center justify-between p-6 text-left font-bold text-secondary text-base md:text-lg hover:text-primary transition-colors bg-gray-50/50 faq-trigger"
              onclick="toggleWpFaq(<?php echo $idx; ?>)"
            >
              <span><?php echo $faq['q']; ?></span>
              <i data-lucide="chevron-down" class="text-primary faq-icon-<?php echo $idx; ?>"></i>
            </button>
            <div 
              class="faq-content-<?php echo $idx; ?> transition-all duration-300 overflow-hidden max-h-0"
            >
              <p class="p-6 text-secondary/60 text-sm md:text-base leading-relaxed bg-white">
                <?php echo $faq['a']; ?>
              </p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- Script for FAQ accordion functionality on WordPress -->
  <script>
    function toggleWpFaq(index) {
      const content = document.querySelector('.faq-content-' + index);
      const icon = document.querySelector('.faq-icon-' + index);
      const allContents = document.querySelectorAll('[class^="faq-content-"]');
      const allIcons = document.querySelectorAll('[class^="faq-icon-"]');
      
      // Close all others
      allContents.forEach((c, idx) => {
        if (idx !== index) {
          c.style.maxHeight = '0px';
          if (allIcons[idx]) {
            allIcons[idx].style.transform = 'rotate(0deg)';
          }
        }
      });

      // Toggle current
      if (content.style.maxHeight === '0px' || !content.style.maxHeight) {
        content.style.maxHeight = '300px';
        icon.style.transform = 'rotate(180deg)';
      } else {
        content.style.maxHeight = '0px';
        icon.style.transform = 'rotate(0deg)';
      }
    }
  </script>

  <!-- 7. CLOSING CTA -->
  <section class="py-20 md:py-24 bg-secondary text-white relative overflow-hidden">
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_70%_70%,rgba(131,183,53,0.12),transparent)] pointer-events-none"></div>
    <div class="container mx-auto px-4 max-w-4xl text-center relative z-10 reveal">
      <h2 class="text-3xl md:text-5xl font-black font-heading mb-6 uppercase leading-tight">
        Ready for a Warmer, <br />
        <span class="text-primary italic">More Efficient Home?</span>
      </h2>
      <p class="text-white/60 text-base md:text-lg max-w-xl mx-auto mb-10 leading-relaxed">
        Stop losing money through a poorly insulated attic. Space Insulation offers free estimates to homeowners and businesses across the GTA, from Markham to Mississauga, Brampton to Aurora, and everywhere in between.
      </p>
      <a
        href="<?php echo home_url('/#consultation'); ?>"
        class="bg-primary text-white hover:bg-primary/90 hover:scale-105 active:scale-95 transition-all px-12 py-6 rounded-full font-black text-base uppercase tracking-widest shadow-xl inline-flex items-center gap-2 group"
      >
        Get My Free Estimate
        <i data-lucide="arrow-right" class="w-5 h-5 transition-transform group-hover:translate-x-1"></i>
      </a>
    </div>
  </section>

</div>

<?php get_footer(); ?>
