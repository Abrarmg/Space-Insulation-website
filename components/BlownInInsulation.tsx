import React, { useState, useEffect } from 'react';
import { Wind, ShieldCheck, CheckCircle2, ChevronDown, ChevronUp, MapPin, AlertCircle, Phone, ArrowRight } from 'lucide-react';
import { PageID } from '../App';
import houseDiagram from '../house-diagram.png';

interface BlownInInsulationProps {
  onNavigate: (page: PageID) => void;
}

const BlownInInsulation: React.FC<BlownInInsulationProps> = ({ onNavigate }) => {
  const [activeFaq, setActiveFaq] = useState<number | null>(null);

  // Set document title and meta tags for SEO, inject JSON-LD schema
  useEffect(() => {
    document.title = "Blown-In Insulation Services GTA | Space Insulation";
    
    // Manage Meta Description
    let metaDesc = document.querySelector('meta[name="description"]');
    const originalDesc = metaDesc ? metaDesc.getAttribute('content') : '';
    if (!metaDesc) {
      metaDesc = document.createElement('meta');
      metaDesc.setAttribute('name', 'description');
      document.head.appendChild(metaDesc);
    }
    metaDesc.setAttribute('content', 'Stop overpaying for heating and cooling. Space Insulation provides professional, energy-efficient blown-in insulation across the Greater Toronto Area. Request your free estimate today.');

    // Inject JSON-LD Schema
    const schema = {
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
    };

    const script = document.createElement('script');
    script.type = 'application/ld+json';
    script.id = 'blown-in-schema';
    script.innerHTML = JSON.stringify(schema);
    document.head.appendChild(script);

    return () => {
      document.title = "Space Insulation | Home Insulation & Energy Solutions";
      if (metaDesc && originalDesc) {
        metaDesc.setAttribute('content', originalDesc);
      }
      const existingScript = document.getElementById('blown-in-schema');
      if (existingScript) {
        existingScript.remove();
      }
    };
  }, []);

  const toggleFaq = (index: number) => {
    setActiveFaq(activeFaq === index ? null : index);
  };

  const benefits = [
    {
      title: "Free, No-Pressure Estimates",
      desc: "We will inspect your attic in person and give you a straight answer. No upselling, no confusing quotes.",
      icon: <CheckCircle2 className="text-primary w-6 h-6" />
    },
    {
      title: "We Know GTA Homes",
      desc: "From older character homes in North York to newer builds in Markham, we have successfully insulated them all.",
      icon: <MapPin className="text-primary w-6 h-6" />
    },
    {
      title: "Fast, Clean Installation",
      desc: "Most attic jobs are done in a single day. We protect your living space during install and leave it spotless.",
      icon: <Wind className="text-primary w-6 h-6" />
    },
    {
      title: "We Stand Behind Our Work",
      desc: "Our experienced insulation crew gets it right the first time. We stand behind our energy-efficiency guarantee.",
      icon: <ShieldCheck className="text-primary w-6 h-6" />
    },
    {
      title: "Premium Materials",
      desc: "We use top-grade loose fill fiberglass or cellulose with superior R-value, keeping your home comfortable year-round.",
      icon: <CheckCircle2 className="text-primary w-6 h-6" />
    }
  ];

  const signs = [
    { title: "Your energy bills keep climbing", desc: "If heating and cooling costs rise every season, heat is escaping through poor attic insulation." },
    { title: "Some rooms are always cold", desc: "Drafty rooms and uneven indoor temperatures usually indicate thin insulation or gaps." },
    { title: "You notice ice damming in winter", desc: "Icicles forming on your roof eaves mean warm air is rising, melting roof snow, and forming dangerous ice dams." },
    { title: "Your insulation looks thinned out or uneven", desc: "If you can see structural wooden floor joists peeking through, you do not have enough insulation thickness." },
    { title: "Your home is older and has never been upgraded", desc: "Older insulation thins, settles, and loses its performance value. Modern loose fill provides a much tighter seal." }
  ];

  const steps = [
    { step: "01", title: "Free Estimate & Attic Inspection", desc: "We check your current insulation depths, look for gaps, inspect attic ventilation, and provide a transparent, upfront quote." },
    { step: "02", title: "We Prep & Protect the Space", desc: "We place protective drop sheets and shields from your entrance to the attic hatch to keep your home completely clean." },
    { step: "03", title: "Professional Installation Day", desc: "Using advanced blown-in pneumatic equipment, we blow cellulose or fiberglass evenly into every tight space and corner." },
    { step: "04", title: "Final Walkthrough & Review", desc: "We clean up the work area, show you the completed job, check the depth labels, and ensure you are 100% satisfied." }
  ];

  const faqs = [
    {
      q: "What is blown-in insulation?",
      a: "Blown-in insulation is a loose-fill insulation material (typically fiberglass or cellulose) that is blown into attic spaces and walls using a heavy-duty pneumatic blowing machine and hose. It fills tight spaces, corners, and irregular gaps much more effectively than standard insulation batts."
    },
    {
      q: "How long does a blown-in insulation job take?",
      a: "Most residential attic insulation upgrades are completed within a single day (usually taking 4 to 6 hours depending on attic size and current setup)."
    },
    {
      q: "How much does blown-in insulation cost?",
      a: "Cost is calculated based on total square footage, the depth of existing insulation, ventilation requirements, and material type. We provide exact quotes during our free, no-obligation attic inspections."
    },
    {
      q: "Is blown-in insulation messy?",
      a: "Not when installed by Space Insulation. We shield your floors, seal the workspace, and clean up completely post-installation with industrial vacuum systems."
    },
    {
      q: "What's the best time of year to get blown-in insulation?",
      a: "While you can install it year-round, doing it prior to major temperature shifts (early fall or late spring) allows you to maximize your utility savings immediately."
    }
  ];

  const gtaCities = [
    { name: "Markham", link: "Markham" },
    { name: "Mississauga", link: "Mississauga" },
    { name: "Richmond Hill", link: "Richmond Hill" },
    { name: "Brampton", link: "Brampton" },
    { name: "Newmarket", link: "Newmarket" },
    { name: "North York", link: "North York" },
    { name: "Aurora", link: "Aurora" },
    { name: "London, ON", link: "London" }
  ];

  return (
    <div className="bg-white text-secondary font-sans overflow-x-hidden">
      
      {/* 1. HERO SECTION */}
      <section className="relative pt-32 pb-24 md:pt-40 md:pb-36 bg-secondary text-white overflow-hidden">
        <div className="absolute inset-0 bg-[radial-gradient(circle_at_30%_30%,rgba(131,183,53,0.15),transparent)] pointer-events-none"></div>
        <div className="container mx-auto px-4 max-w-6xl relative z-10">
          <div className="flex flex-col lg:flex-row items-center gap-12">
            <div className="w-full lg:w-7/12 text-center lg:text-left animate-fade-up">
              <span className="inline-flex items-center space-x-2 bg-primary/20 text-primary border border-primary/30 px-4 py-2 rounded-full mb-6 font-bold uppercase tracking-widest text-[10px] md:text-xs">
                <span className="w-2 h-2 bg-primary rounded-full animate-ping"></span>
                <span>GTA Attic Specialists</span>
              </span>
              <h1 className="text-4xl sm:text-5xl md:text-6xl font-black font-heading leading-[1.0] uppercase tracking-tighter mb-6">
                Blown-In Insulation <br />
                <span className="text-primary italic">In The GTA</span> That Works
              </h1>
              <p className="text-white/70 text-base md:text-lg max-w-2xl mx-auto lg:mx-0 leading-relaxed mb-8">
                Is your attic making your energy bills climb every winter? A lot of homes across the Greater Toronto Area are losing valuable heat through old, thinned out, or uneven insulation. Space Insulation stops the heat loss and saves you hundreds annually.
              </p>
              <div className="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                <button
                  onClick={() => onNavigate('contact')}
                  className="bg-primary text-white hover:bg-primary/90 hover:scale-105 active:scale-95 transition-all px-8 py-5 rounded-full font-black text-sm uppercase tracking-widest shadow-xl flex items-center justify-center gap-2 group"
                >
                  Get Free Estimate
                  <ArrowRight size={16} className="transition-transform group-hover:translate-x-1" />
                </button>
                <a
                  href="tel:6477049021"
                  className="bg-white/10 hover:bg-white/20 border border-white/20 px-8 py-5 rounded-full font-black text-sm uppercase tracking-widest text-white transition-all flex items-center justify-center gap-2"
                >
                  <Phone size={16} /> (647) 704-9021
                </a>
              </div>
            </div>
            
            <div className="w-full lg:w-5/12 animate-fade-up animation-delay-200">
              <div className="relative rounded-[2.5rem] overflow-hidden border border-white/10 shadow-2xl group">
                <img 
                  src="https://i.ibb.co/Zp74mfPf/Gemini-Generated-Image-kfrihekfrihekfri.png" 
                  alt="Blown-In Insulation Work by Space Insulation" 
                  className="w-full h-[320px] md:h-[400px] object-cover transition-transform duration-700 group-hover:scale-105"
                  onError={(e) => {
                    (e.target as HTMLImageElement).src = "https://images.unsplash.com/photo-1581094288338-2314dddb7ecc?q=80&w=2000";
                  }}
                />
                <div className="absolute inset-0 bg-gradient-to-t from-secondary/85 via-transparent to-transparent"></div>
                <div className="absolute bottom-6 left-6 right-6 bg-white/5 backdrop-blur-md border border-white/15 p-5 rounded-2xl">
                  <div className="text-[10px] font-black text-primary uppercase tracking-[0.2em] mb-1">Guaranteed Performance</div>
                  <div className="text-white font-bold text-sm">Achieve Up to R-60 Thermal Protection Value</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* 2. BENEFITS / FEATURES */}
      <section className="py-20 md:py-28 bg-gray-50 overflow-hidden">
        <div className="container mx-auto px-4 max-w-6xl">
          <div className="text-center mb-16 reveal">
            <h3 className="text-primary font-bold uppercase tracking-[0.4em] text-xs mb-3">Why Work With Us</h3>
            <h2 className="text-secondary text-3xl md:text-5xl font-black font-heading mb-6 uppercase tracking-tight">
              WHY GTA HOMEOWNERS <span className="text-primary italic">TRUST US</span>
            </h2>
            <p className="text-secondary/50 max-w-2xl mx-auto text-base">
              Not all insulation companies are built the same. Here is how Space Insulation delivers value on every attic service.
            </p>
          </div>

          <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            {benefits.map((b, i) => (
              <div
                key={i}
                className="bg-white p-8 rounded-3xl border border-gray-100 hover:border-primary/30 shadow-lg hover:shadow-xl hover:-translate-y-1 transition-all duration-300 reveal"
                style={{ transitionDelay: `${i * 100}ms` }}
              >
                <div className="w-12 h-12 bg-primary/10 rounded-2xl flex items-center justify-center mb-6">
                  {b.icon}
                </div>
                <h4 className="text-secondary font-black text-lg mb-3 uppercase tracking-tight">{b.title}</h4>
                <p className="text-secondary/60 text-sm leading-relaxed">{b.desc}</p>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* 3. SIGNS YOU NEED INSULATION */}
      <section className="py-20 md:py-28 bg-white overflow-hidden">
        <div className="container mx-auto px-4 max-w-6xl">
          <div className="flex flex-col lg:flex-row items-center gap-16">
            <div className="w-full lg:w-1/2 relative reveal">
              <div className="absolute -top-10 -left-10 w-64 h-64 bg-primary/10 rounded-full blur-3xl -z-10 animate-pulse"></div>
              <div className="rounded-[3rem] overflow-hidden border border-gray-100 shadow-2xl group">
                <img 
                  src={houseDiagram} 
                  alt="Attic signs poor insulation diagram" 
                  className="w-full h-auto object-contain transition-transform duration-700 group-hover:scale-105"
                />
              </div>
            </div>

            <div className="w-full lg:w-1/2 reveal">
              <span className="text-primary font-bold uppercase tracking-[0.3em] text-xs mb-3 block">Inspection Checklist</span>
              <h2 className="text-secondary text-3xl md:text-5xl font-black font-heading mb-8 uppercase tracking-tight leading-none">
                SIGNS YOUR ATTIC <br />
                <span className="text-primary italic">NEEDS AN UPGRADE</span>
              </h2>
              
              <div className="space-y-6">
                {signs.map((s, i) => (
                  <div key={i} className="flex items-start gap-4 p-4 rounded-2xl border border-gray-50 hover:border-primary/20 hover:bg-gray-50/50 transition-all">
                    <div className="mt-1 text-primary shrink-0">
                      <AlertCircle className="w-5 h-5 text-accent" />
                    </div>
                    <div>
                      <h4 className="text-secondary font-bold text-base mb-1">{s.title}</h4>
                      <p className="text-secondary/60 text-sm leading-relaxed">{s.desc}</p>
                    </div>
                  </div>
                ))}
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* 4. PROCESS - HOW IT WORKS */}
      <section className="py-20 md:py-28 bg-secondary text-white overflow-hidden">
        <div className="container mx-auto px-4 max-w-6xl">
          <div className="text-center mb-20 reveal">
            <h3 className="text-primary font-bold uppercase tracking-[0.4em] text-xs mb-3">Our Framework</h3>
            <h2 className="text-white text-3xl md:text-5xl font-black font-heading mb-6 uppercase tracking-tight">
              OUR STEP-BY-STEP <span className="text-primary italic">PROCESS</span>
            </h2>
            <p className="text-white/40 max-w-xl mx-auto text-base">
              Upgrading your home efficiency should be hassle-free. Here is what you can expect on installation day.
            </p>
          </div>

          <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 relative z-10">
            {steps.map((step, i) => (
              <div
                key={i}
                className="bg-white/5 border border-white/10 p-8 rounded-[2rem] hover:bg-white/10 transition-all duration-300 relative group reveal"
                style={{ transitionDelay: `${i * 100}ms` }}
              >
                <div className="text-5xl font-black font-heading text-primary/30 group-hover:text-primary transition-colors mb-6">{step.step}</div>
                <h4 className="text-white font-bold text-lg mb-3 tracking-tight">{step.title}</h4>
                <p className="text-white/60 text-sm leading-relaxed">{step.desc}</p>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* 5. LOCATIONS GRID (SEO INTERNAL LINKING) */}
      <section className="py-20 bg-gray-50 border-b border-gray-100">
        <div className="container mx-auto px-4 max-w-4xl text-center">
          <div className="reveal mb-12">
            <h3 className="text-primary font-bold uppercase tracking-[0.4em] text-xs mb-3">Service Coverage</h3>
            <h2 className="text-secondary text-2xl md:text-4xl font-black font-heading uppercase mb-4">
              SERVING HOMEOWNERS <span className="text-primary italic">ACROSS THE GTA</span>
            </h2>
            <p className="text-secondary/50 text-sm max-w-xl mx-auto">
              Our crews cover local municipalities to provide swift service estimates and prompt insulation upgrades.
            </p>
          </div>

          <div className="grid grid-cols-2 sm:grid-cols-4 gap-4 reveal">
            {gtaCities.map((city, i) => (
              <button
                key={i}
                onClick={() => onNavigate('contact')}
                className="bg-white p-4 border border-gray-100 hover:border-primary rounded-2xl hover:shadow-md text-secondary hover:text-primary font-bold text-xs uppercase tracking-wider transition-all"
              >
                📍 {city.name}
              </button>
            ))}
          </div>
          
          <div className="mt-8 text-secondary/40 text-xs italic reveal">
            *Don't see your city listed? <span onClick={() => onNavigate('contact')} className="text-primary underline font-bold cursor-pointer hover:text-primary/80">Contact us</span> to see if we service your area.
          </div>
        </div>
      </section>

      {/* 6. FAQs ACCORDION */}
      <section className="py-20 md:py-28 bg-white overflow-hidden">
        <div className="container mx-auto px-4 max-w-3xl">
          <div className="text-center mb-16 reveal">
            <h3 className="text-primary font-bold uppercase tracking-[0.4em] text-xs mb-3">Got Questions?</h3>
            <h2 className="text-secondary text-3xl md:text-5xl font-black font-heading mb-6 uppercase tracking-tight">
              FREQUENTLY ASKED <span className="text-primary italic">QUESTIONS</span>
            </h2>
          </div>

          <div className="space-y-4 reveal">
            {faqs.map((faq, idx) => (
              <div 
                key={idx} 
                className="border border-gray-100 rounded-3xl overflow-hidden shadow-sm hover:shadow-md transition-shadow"
              >
                <button
                  onClick={() => toggleFaq(idx)}
                  className="w-full flex items-center justify-between p-6 text-left font-bold text-secondary text-base md:text-lg hover:text-primary transition-colors bg-gray-50/50"
                >
                  <span>{faq.q}</span>
                  {activeFaq === idx ? <ChevronUp className="text-primary" /> : <ChevronDown className="text-primary" />}
                </button>
                <div 
                  className={`transition-all duration-300 overflow-hidden ${activeFaq === idx ? 'max-h-[300px] border-t border-gray-50' : 'max-h-0'}`}
                >
                  <p className="p-6 text-secondary/60 text-sm md:text-base leading-relaxed bg-white">
                    {faq.a}
                  </p>
                </div>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* 7. CLOSING CTA */}
      <section className="py-20 md:py-24 bg-secondary text-white relative overflow-hidden">
        <div className="absolute inset-0 bg-[radial-gradient(circle_at_70%_70%,rgba(131,183,53,0.12),transparent)] pointer-events-none"></div>
        <div className="container mx-auto px-4 max-w-4xl text-center relative z-10 reveal">
          <h2 className="text-3xl md:text-5xl font-black font-heading mb-6 uppercase leading-tight">
            Ready for a Warmer, <br />
            <span className="text-primary italic">More Efficient Home?</span>
          </h2>
          <p className="text-white/60 text-base md:text-lg max-w-xl mx-auto mb-10 leading-relaxed">
            Stop losing energy and money through your attic. Space Insulation offers free estimates to homeowners and businesses across the GTA.
          </p>
          <button
            onClick={() => onNavigate('contact')}
            className="bg-primary text-white hover:bg-primary/90 hover:scale-105 active:scale-95 transition-all px-12 py-6 rounded-full font-black text-base uppercase tracking-widest shadow-xl inline-flex items-center gap-2 group"
          >
            Get My Free Estimate
            <ArrowRight size={18} className="transition-transform group-hover:translate-x-1" />
          </button>
        </div>
      </section>

    </div>
  );
};

export default BlownInInsulation;
