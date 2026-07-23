<?php
/* Template Name: Attic Insulation Upgrades Page */
get_header();
?>

<!-- Inject JSON-LD Schema on Page Load -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "serviceType": "Complete Attic Insulation & Upgrade Services",
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
  "description": "Full-scope attic insulation upgrades across the GTA including professional assessment, old insulation removal, air sealing, and premium R-60 code-compliant installation."
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "What is R-60, and why does it matter?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "R-60 is the current Ontario Building Code standard for attic insulation in most of southern Ontario, including the entire GTA. It measures how well your insulation resists heat flow. Many older homes fall short of this standard, which means they're losing more heat (and money) than they should."
      }
    },
    {
      "@type": "Question",
      "name": "How do I know if I need a top-up or full replacement?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "It depends on the condition of your existing insulation. If it's dry, clean, and undamaged, a top-up is often enough. If there's moisture, pests, or significant wear, a full replacement is usually the better long-term choice. We'll tell you which one your attic needs during the assessment."
      }
    },
    {
      "@type": "Question",
      "name": "Are rebates guaranteed?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "No, eligibility depends on your home, your heating source, and current program rules, which can change. We'll help you understand what may be available, but we won't promise a specific rebate amount upfront."
      }
    },
    {
      "@type": "Question",
      "name": "How do I know if my current insulation is failing?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Common signs include rising energy bills, cold or drafty rooms, ice damming along your roofline in winter, and visibly thin or uneven insulation in your attic."
      }
    },
    {
      "@type": "Question",
      "name": "Do you handle the full job, or just the insulation part?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "We handle the complete process, assessment, removal (if needed), air sealing, and installation, so you're not coordinating multiple contractors for one upgrade."
      }
    }
  ]
}
</script>

<div class="bg-white text-secondary font-sans overflow-x-hidden">
  
  <!-- HERO SECTION -->
  <section class="relative pt-32 pb-24 md:pt-40 md:pb-36 bg-secondary text-white overflow-hidden">
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_30%_30%,rgba(131,183,53,0.15),transparent)] pointer-events-none"></div>
    <div class="container mx-auto px-4 max-w-6xl relative z-10 text-center lg:text-left">
      <div class="flex flex-col lg:flex-row items-center gap-12">
        <div class="w-full lg:w-7/12 animate-fade-up">
          <span class="inline-flex items-center space-x-2 bg-primary/20 text-primary border border-primary/30 px-4 py-2 rounded-full mb-6 font-bold uppercase tracking-widest text-[10px] md:text-xs">
            <span class="w-2 h-2 bg-primary rounded-full animate-ping"></span>
            <span>Code Compliant Upgrades</span>
          </span>
          <h1 class="text-4xl sm:text-5xl md:text-6xl font-black font-heading leading-[1.0] uppercase tracking-tighter mb-6">
            Complete Attic Insulation <br />
            <span class="text-primary italic">&amp; Upgrade Services</span>
          </h1>
          <p class="text-white/70 text-base md:text-lg max-w-2xl mx-auto lg:mx-0 leading-relaxed mb-8">
            Full-scope attic insulation upgrades across the GTA — assessment, removal, air sealing, and R-60 installation. Book your free assessment today.
          </p>
          <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
            <a
              href="<?php echo home_url('/#consultation'); ?>"
              class="bg-primary text-white hover:bg-primary/90 hover:scale-105 active:scale-95 transition-all px-8 py-5 rounded-full font-black text-sm uppercase tracking-widest shadow-xl flex items-center justify-center gap-2 group"
            >
              Book My Free Assessment
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
              src="<?php echo get_template_directory_uri(); ?>/assets/images/attic-work-1.jpg" 
              alt="Professional Attic Insulation Assessment" 
              class="w-full h-[320px] md:h-[400px] object-cover transition-transform duration-700 group-hover:scale-105"
            />
            <div class="absolute inset-0 bg-gradient-to-t from-secondary/85 via-transparent to-transparent"></div>
            <div class="absolute bottom-6 left-6 right-6 bg-white/5 backdrop-blur-md border border-white/15 p-5 rounded-2xl">
              <div class="text-[10px] font-black text-primary uppercase tracking-[0.2em] mb-1">Ontario SB-12 Code</div>
              <div class="text-white font-bold text-sm">Bring Your Home up to R-60 Standard</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- MORE THAN JUST ADDING INSULATION -->
  <section class="py-20 md:py-28 bg-white overflow-hidden">
    <div class="container mx-auto px-4 max-w-6xl">
      <div class="flex flex-col lg:flex-row items-center gap-16">
        <div class="w-full lg:w-1/2 relative reveal">
          <div class="absolute -top-10 -left-10 w-64 h-64 bg-primary/10 rounded-full blur-3xl -z-10 animate-pulse"></div>
          <div class="rounded-[3rem] overflow-hidden border border-gray-100 shadow-2xl group bg-gray-50">
            <img 
              src="<?php echo get_template_directory_uri(); ?>/assets/images/attic-work-2.jpg" 
              alt="Attic insulation upgrade technology" 
              class="w-full h-[350px] md:h-[500px] object-cover transition-transform duration-700 group-hover:scale-105"
            />
          </div>
        </div>

        <div class="w-full lg:w-1/2 reveal">
          <span class="text-primary font-bold uppercase tracking-[0.3em] text-xs mb-3 block">Complete Solutions</span>
          <h2 class="text-secondary text-3xl md:text-5xl font-black font-heading mb-6 uppercase tracking-tight leading-[1.0] lg:leading-[0.9]">
            More Than Just <br class="hidden sm:block" />
            <span class="text-primary italic">Adding Insulation</span>
          </h2>
          
          <div class="space-y-6 text-secondary/70 text-base md:text-lg leading-relaxed">
            <p>
              A lot of homeowners assume attic insulation is a simple job: add more, save more. In reality, a proper attic upgrade involves several steps, and skipping any of them can leave you with the same drafts, cold rooms, and high bills you started with.
            </p>
            <p>
              <strong className="text-secondary">Space Insulation</strong> offers complete attic insulation and upgrade services across the GTA. That means we don't just add material on top of what's already there. We assess your attic, determine what it actually needs, and bring it up to current standards from the ground up.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- IS YOUR ATTIC MEETING ONTARIO'S CODE? -->
  <section class="py-20 md:py-28 bg-gray-50 overflow-hidden">
    <div class="container mx-auto px-4 max-w-4xl text-center">
      <div class="reveal mb-12">
        <span class="text-primary font-bold uppercase tracking-[0.3em] text-xs mb-3 block">Building Standards</span>
        <h2 class="text-secondary text-3xl md:text-5xl font-black font-heading mb-6 uppercase tracking-tight">
          Is Your Attic Meeting <span class="text-primary italic">Ontario's Code?</span>
        </h2>
        <div class="space-y-6 text-secondary/75 text-base md:text-lg leading-relaxed text-left max-w-3xl mx-auto">
          <p>
            Ontario's Building Code (SB-12) sets minimum insulation standards for attics, and for most homes across the GTA, that standard is <strong class="text-secondary">R-60</strong>. If your home was insulated decades ago, or hasn't been touched since it was built, there's a good chance it's falling well short of that.
          </p>
          <p>
            The tricky part is that most homeowners have no way of knowing where their attic stands. Insulation settles over time, gaps form around vents and framing, and older material simply doesn't perform the way it did when it was first installed. A free assessment is the easiest way to find out where your home actually sits, and what it would take to bring it up to code.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- TOP-UP OR FULL REPLACEMENT? -->
  <section class="py-20 md:py-28 bg-white overflow-hidden">
    <div class="container mx-auto px-4 max-w-6xl">
      <div class="text-center mb-16 reveal">
        <h3 class="text-primary font-bold uppercase tracking-[0.4em] text-xs mb-3">Custom Treatment</h3>
        <h2 class="text-secondary text-3xl md:text-5xl font-black font-heading mb-6 uppercase tracking-tight">
          Top-Up or Full Replacement? <br className="hidden sm:block" />
          <span class="text-primary italic">We'll Tell You Honestly</span>
        </h2>
        <p className="text-secondary/50 max-w-2xl mx-auto text-base">
          Not every attic needs to be gutted and started over. Some just need a top-up. Others need a full removal first. Here's the general difference:
        </p>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 max-w-5xl mx-auto">
        <!-- Top-up card -->
        <div class="bg-white p-8 md:p-10 rounded-[2.5rem] border border-gray-100 hover:border-primary/20 shadow-xl transition-all duration-300 reveal flex flex-col h-full" style="transition-delay: 0ms">
          <div class="w-14 h-14 bg-primary/10 rounded-2xl flex items-center justify-center mb-6">
            <i data-lucide="shield" class="w-7 h-7 text-primary"></i>
          </div>
          <h3 class="text-secondary font-black text-2xl uppercase mb-6 tracking-tight">A top-up usually makes sense when:</h3>
          <ul class="space-y-4 text-secondary/70 text-sm md:text-base leading-relaxed flex-grow">
            <li class="flex items-start gap-3">
              <span class="mt-1 text-primary shrink-0"><i data-lucide="check-circle" class="w-5 h-5"></i></span>
              <span>Your existing insulation is dry, clean, and in reasonably good condition.</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="mt-1 text-primary shrink-0"><i data-lucide="check-circle" class="w-5 h-5"></i></span>
              <span>You just need to add depth to reach current R-value standards.</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="mt-1 text-primary shrink-0"><i data-lucide="check-circle" class="w-5 h-5"></i></span>
              <span>There's no sign of pest activity, mold, or water damage.</span>
            </li>
          </ul>
        </div>

        <!-- Full Removal card -->
        <div class="bg-white p-8 md:p-10 rounded-[2.5rem] border border-gray-100 hover:border-accent/20 shadow-xl transition-all duration-300 reveal flex flex-col h-full" style="transition-delay: 150ms">
          <div class="w-14 h-14 bg-accent/10 rounded-2xl flex items-center justify-center mb-6">
            <i data-lucide="shield-alert" class="w-7 h-7 text-accent"></i>
          </div>
          <h3 class="text-secondary font-black text-2xl uppercase mb-6 tracking-tight">Full removal &amp; replacement is needed when:</h3>
          <ul class="space-y-4 text-secondary/70 text-sm md:text-base leading-relaxed flex-grow">
            <li class="flex items-start gap-3">
              <span class="mt-1 text-accent shrink-0"><i data-lucide="alert-circle" class="w-5 h-5"></i></span>
              <span>The existing insulation is wet, moldy, or contaminated.</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="mt-1 text-accent shrink-0"><i data-lucide="alert-circle" class="w-5 h-5"></i></span>
              <span>There's evidence of pests (droppings, nesting material, damage).</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="mt-1 text-accent shrink-0"><i data-lucide="alert-circle" class="w-5 h-5"></i></span>
              <span>The insulation is old enough that its performance has significantly degraded.</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="mt-1 text-accent shrink-0"><i data-lucide="alert-circle" class="w-5 h-5"></i></span>
              <span>You're dealing with older materials that may pose safety concerns.</span>
            </li>
          </ul>
        </div>
      </div>
      
      <div class="text-center mt-12 reveal">
        <p class="text-secondary font-bold text-lg max-w-xl mx-auto italic">
          "We'll give you a straight answer after seeing your attic in person. No pushing a bigger job than you actually need."
        </p>
      </div>
    </div>
  </section>

  <!-- WHAT'S INCLUDED IN A COMPLETE UPGRADE -->
  <section class="py-20 md:py-28 bg-secondary text-white overflow-hidden">
    <div class="container mx-auto px-4 max-w-6xl">
      <div class="text-center mb-20 reveal">
        <h3 class="text-primary font-bold uppercase tracking-[0.4em] text-xs mb-3">Our Scope</h3>
        <h2 class="text-white text-3xl md:text-5xl font-black font-heading mb-6 uppercase tracking-tight">
          What's Included in a <span class="text-primary italic">Complete Upgrade</span>
        </h2>
        <p class="text-white/40 max-w-xl mx-auto text-base">
          A full attic upgrade with Space Insulation can include the following comprehensive steps.
        </p>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-5 gap-6 relative z-10">
        <!-- Steps loop -->
        <?php
        $wp_steps = [
          [
            "num" => "1",
            "title" => "Free assessment",
            "desc" => "We inspect your attic, check current insulation levels, and look for air leaks or moisture issues, at no cost to you.",
            "icon" => "clipboard-copy"
          ],
          [
            "num" => "2",
            "title" => "Old insulation removal",
            "desc" => "If your existing insulation is contaminated or too degraded to build on, we remove it safely and prepare the space for new material.",
            "icon" => "trash-2"
          ],
          [
            "num" => "3",
            "title" => "Air sealing",
            "desc" => "Before adding new insulation, we seal the leak points that let heat escape: pot lights, plumbing stacks, and top plates. Insulation performs far better once these are addressed.",
            "icon" => "wind"
          ],
          [
            "num" => "4",
            "title" => "New insulation installation",
            "desc" => "We install new material to bring your attic up to R-60, using quality fiberglass or cellulose depending on your home's needs.",
            "icon" => "check-circle"
          ],
          [
            "num" => "5",
            "title" => "Ventilation check",
            "desc" => "Proper attic ventilation prevents moisture buildup and helps your new insulation perform the way it should long-term.",
            "icon" => "eye"
          ]
        ];
        foreach($wp_steps as $idx => $step): ?>
          <div
            class="bg-white/5 border border-white/10 p-8 rounded-[2rem] hover:bg-white/10 transition-all duration-300 relative group reveal flex flex-col"
            style="transition-delay: <?php echo $idx * 100; ?>ms"
          >
            <div class="w-12 h-12 bg-primary rounded-2xl flex items-center justify-center mb-6 shadow-lg shadow-primary/20 group-hover:scale-110 transition-transform">
              <i data-lucide="<?php echo $step['icon']; ?>" class="w-6 h-6 text-white"></i>
            </div>
            <div class="text-primary text-xs font-black uppercase tracking-[0.2em] mb-2">Step <?php echo $step['num']; ?></div>
            <h4 class="text-white font-bold text-lg mb-3 tracking-tight"><?php echo $step['title']; ?></h4>
            <p class="text-white/60 text-sm leading-relaxed flex-grow"><?php echo $step['desc']; ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- REBATES & INCENTIVES -->
  <section class="py-20 md:py-28 bg-gray-50 overflow-hidden">
    <div class="container mx-auto px-4 max-w-4xl text-center">
      <div class="reveal">
        <span class="text-primary font-bold uppercase tracking-[0.3em] text-xs mb-3 block">Energy Rebates</span>
        <h2 class="text-secondary text-3xl md:text-5xl font-black font-heading mb-6 uppercase tracking-tight">
          Rebates &amp; Incentives <span class="text-primary italic">for GTA Homeowners</span>
        </h2>
        <p class="text-secondary/75 text-base md:text-lg leading-relaxed max-w-3xl mx-auto mb-8 text-left">
          There are provincial and utility-run programs that may help offset the cost of an attic insulation upgrade, depending on your home type, current heating source, and eligibility. Programs and amounts change over time, so rather than promising a specific number, we'll walk you through what may apply to your home during your free assessment and point you toward the current program details.
        </p>
        <a
          href="<?php echo home_url('/#consultation'); ?>"
          class="bg-primary text-white hover:bg-primary/90 hover:scale-105 active:scale-95 transition-all px-8 py-4 rounded-full font-black text-xs uppercase tracking-widest shadow-xl inline-block"
        >
          Ask About Rebates
        </a>
      </div>
    </div>
  </section>

  <!-- SERVING HOMEOWNERS ACROSS THE GTA -->
  <section class="py-20 bg-white border-b border-gray-100">
    <div class="container mx-auto px-4 max-w-4xl text-center">
      <div class="reveal mb-12">
        <h3 class="text-primary font-bold uppercase tracking-[0.4em] text-xs mb-3">Service Areas</h3>
        <h2 class="text-secondary text-2xl md:text-4xl font-black font-heading uppercase mb-4">
          Serving Homeowners <span class="text-primary italic">Across the GTA</span>
        </h2>
        <p class="text-secondary/50 text-sm max-w-xl mx-auto">
          We provide complete attic insulation and upgrade services throughout these regions:
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
          "London, Ontario" => "/#consultation"
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
    </div>
  </section>

  <!-- FAQs ACCORDION -->
  <section class="py-20 md:py-28 bg-gray-50 overflow-hidden">
    <div class="container mx-auto px-4 max-w-3xl">
      <div class="text-center mb-16 reveal">
        <h3 class="text-primary font-bold uppercase tracking-[0.4em] text-xs mb-3">Clear Answers</h3>
        <h2 class="text-secondary text-3xl md:text-5xl font-black font-heading mb-6 uppercase tracking-tight">
          Frequently Asked <span class="text-primary italic">Questions</span>
        </h2>
      </div>

      <div class="space-y-4 reveal">
        <?php
        $faqs = [
          [
            "q" => "What is R-60, and why does it matter?",
            "a" => "R-60 is the current Ontario Building Code standard for attic insulation in most of southern Ontario, including the entire GTA. It measures how well your insulation resists heat flow. Many older homes fall short of this standard, which means they're losing more heat (and money) than they should."
          ],
          [
            "q" => "How do I know if I need a top-up or full replacement?",
            "a" => "It depends on the condition of your existing insulation. If it's dry, clean, and undamaged, a top-up is often enough. If there's moisture, pests, or significant wear, a full replacement is usually the better long-term choice. We'll tell you which one your attic needs during the assessment."
          ],
          [
            "q" => "Are rebates guaranteed?",
            "a" => "No, eligibility depends on your home, your heating source, and current program rules, which can change. We'll help you understand what may be available, but we won't promise a specific rebate amount upfront."
          ],
          [
            "q" => "How do I know if my current insulation is failing?",
            "a" => "Common signs include rising energy bills, cold or drafty rooms, ice damming along your roofline in winter, and visibly thin or uneven insulation in your attic."
          ],
          [
            "q" => "Do you handle the full job, or just the insulation part?",
            "a" => "We handle the complete process, assessment, removal (if needed), air sealing, and installation, so you're not coordinating multiple contractors for one upgrade."
          ]
        ];
        foreach($faqs as $idx => $faq): ?>
          <div class="wp-faq-item border border-gray-100 rounded-3xl overflow-hidden shadow-sm hover:shadow-md transition-shadow bg-white">
            <button
              class="w-full flex items-center justify-between p-6 text-left font-bold text-secondary text-base md:text-lg hover:text-primary transition-colors bg-gray-50/20 faq-trigger"
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

  <!-- CLOSING CTA -->
  <section class="py-20 md:py-24 bg-secondary text-white relative overflow-hidden">
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_70%_70%,rgba(131,183,53,0.12),transparent)] pointer-events-none"></div>
    <div class="container mx-auto px-4 max-w-4xl text-center relative z-10 reveal">
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

</div>

<?php get_footer(); ?>
