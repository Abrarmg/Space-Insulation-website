import React, { useState, useEffect } from 'react';
import { Shield, ShieldAlert, CheckCircle, ChevronDown, ChevronUp, MapPin, AlertCircle, Phone, ArrowRight, ClipboardCopy, Trash2, Wind, Eye } from 'lucide-react';
import { PageID } from '../App';
import atticWork1 from '../attic-work-1.jpg';
import atticWork2 from '../attic-work-2.jpg';

interface AtticInsulationUpgradesProps {
  onNavigate: (page: PageID) => void;
}

const AtticInsulationUpgrades: React.FC<AtticInsulationUpgradesProps> = ({ onNavigate }) => {
  const [activeFaq, setActiveFaq] = useState<number | null>(null);

  // Set document title, meta tags for SEO, and inject schemas
  useEffect(() => {
    document.title = "Complete Attic Insulation Upgrades GTA | R-60 Code Compliant | Space Insulation";
    
    // Manage Meta Description
    let metaDesc = document.querySelector('meta[name="description"]');
    const originalDesc = metaDesc ? metaDesc.getAttribute('content') : '';
    if (!metaDesc) {
      metaDesc = document.createElement('meta');
      metaDesc.setAttribute('name', 'description');
      document.head.appendChild(metaDesc);
    }
    metaDesc.setAttribute('content', 'Full-scope attic insulation upgrades across the GTA — assessment, removal, air sealing, and R-60 installation. Book your free assessment today.');

    // Inject Service and FAQ schemas
    const serviceSchema = {
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
    };

    const faqSchema = {
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
    };

    const scriptService = document.createElement('script');
    scriptService.type = 'application/ld+json';
    scriptService.id = 'attic-service-schema';
    scriptService.innerHTML = JSON.stringify(serviceSchema);
    document.head.appendChild(scriptService);

    const scriptFaq = document.createElement('script');
    scriptFaq.type = 'application/ld+json';
    scriptFaq.id = 'attic-faq-schema';
    scriptFaq.innerHTML = JSON.stringify(faqSchema);
    document.head.appendChild(scriptFaq);

    return () => {
      document.title = "Space Insulation | Home Insulation & Energy Solutions";
      if (metaDesc && originalDesc) {
        metaDesc.setAttribute('content', originalDesc);
      }
      const existingServiceScript = document.getElementById('attic-service-schema');
      if (existingServiceScript) existingServiceScript.remove();
      const existingFaqScript = document.getElementById('attic-faq-schema');
      if (existingFaqScript) existingFaqScript.remove();
    };
  }, []);

  const toggleFaq = (index: number) => {
    setActiveFaq(activeFaq === index ? null : index);
  };

  const steps = [
    {
      number: "1",
      title: "Free assessment",
      desc: "We inspect your attic, check current insulation levels, and look for air leaks or moisture issues, at no cost to you.",
      icon: <ClipboardCopy className="w-6 h-6 text-white" />
    },
    {
      number: "2",
      title: "Old insulation removal",
      desc: "If your existing insulation is contaminated or too degraded to build on, we remove it safely and prepare the space for new material.",
      icon: <Trash2 className="w-6 h-6 text-white" />
    },
    {
      number: "3",
      title: "Air sealing",
      desc: "Before adding new insulation, we seal the leak points that let heat escape: pot lights, plumbing stacks, and top plates. Insulation performs far better once these are addressed.",
      icon: <Wind className="w-6 h-6 text-white" />
    },
    {
      number: "4",
      title: "New insulation installation",
      desc: "We install new material to bring your attic up to R-60, using quality fiberglass or cellulose depending on your home's needs.",
      icon: <CheckCircle className="w-6 h-6 text-white" />
    },
    {
      number: "5",
      title: "Ventilation check",
      desc: "Proper attic ventilation prevents moisture buildup and helps your new insulation perform the way it should long-term.",
      icon: <Eye className="w-6 h-6 text-white" />
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
    { name: "London, Ontario", link: "London" }
  ];

  const faqs = [
    {
      q: "What is R-60, and why does it matter?",
      a: "R-60 is the current Ontario Building Code standard for attic insulation in most of southern Ontario, including the entire GTA. It measures how well your insulation resists heat flow. Many older homes fall short of this standard, which means they're losing more heat (and money) than they should."
    },
    {
      q: "How do I know if I need a top-up or full replacement?",
      a: "It depends on the condition of your existing insulation. If it's dry, clean, and undamaged, a top-up is often enough. If there's moisture, pests, or significant wear, a full replacement is usually the better long-term choice. We'll tell you which one your attic needs during the assessment."
    },
    {
      q: "Are rebates guaranteed?",
      a: "No, eligibility depends on your home, your heating source, and current program rules, which can change. We'll help you understand what may be available, but we won't promise a specific rebate amount upfront."
    },
    {
      q: "How do I know if my current insulation is failing?",
      a: "Common signs include rising energy bills, cold or drafty rooms, ice damming along your roofline in winter, and visibly thin or uneven insulation in your attic."
    },
    {
      q: "Do you handle the full job, or just the insulation part?",
      a: "We handle the complete process, assessment, removal (if needed), air sealing, and installation, so you're not coordinating multiple contractors for one upgrade."
    }
  ];

  return (
    <div className="bg-white text-secondary font-sans overflow-x-hidden">
      
      {/* HERO SECTION */}
      <section className="relative pt-32 pb-24 md:pt-40 md:pb-36 bg-secondary text-white overflow-hidden">
        <div className="absolute inset-0 bg-[radial-gradient(circle_at_30%_30%,rgba(131,183,53,0.15),transparent)] pointer-events-none"></div>
        <div className="container mx-auto px-4 max-w-6xl relative z-10 text-center lg:text-left">
          <div className="flex flex-col lg:flex-row items-center gap-12">
            <div className="w-full lg:w-7/12 animate-fade-up">
              <span className="inline-flex items-center space-x-2 bg-primary/20 text-primary border border-primary/30 px-4 py-2 rounded-full mb-6 font-bold uppercase tracking-widest text-[10px] md:text-xs">
                <span className="w-2 h-2 bg-primary rounded-full animate-ping"></span>
                <span>Code Compliant Upgrades</span>
              </span>
              <h1 className="text-4xl sm:text-5xl md:text-6xl font-black font-heading leading-[1.0] uppercase tracking-tighter mb-6">
                Complete Attic Insulation <br />
                <span className="text-primary italic">&amp; Upgrade Services</span>
              </h1>
              <p className="text-white/70 text-base md:text-lg max-w-2xl mx-auto lg:mx-0 leading-relaxed mb-8">
                Full-scope attic insulation upgrades across the GTA — assessment, removal, air sealing, and R-60 installation. Book your free assessment today.
              </p>
              <div className="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                <button
                  onClick={() => onNavigate('contact')}
                  className="bg-primary text-white hover:bg-primary/90 hover:scale-105 active:scale-95 transition-all px-8 py-5 rounded-full font-black text-sm uppercase tracking-widest shadow-xl flex items-center justify-center gap-2 group"
                >
                  Book My Free Assessment
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
                  src={atticWork1} 
                  alt="Professional Attic Insulation Assessment" 
                  className="w-full h-[320px] md:h-[400px] object-cover transition-transform duration-700 group-hover:scale-105"
                />
                <div className="absolute inset-0 bg-gradient-to-t from-secondary/85 via-transparent to-transparent"></div>
                <div className="absolute bottom-6 left-6 right-6 bg-white/5 backdrop-blur-md border border-white/15 p-5 rounded-2xl">
                  <div className="text-[10px] font-black text-primary uppercase tracking-[0.2em] mb-1">Ontario SB-12 Code</div>
                  <div className="text-white font-bold text-sm">Bring Your Home up to R-60 Standard</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* MORE THAN JUST ADDING INSULATION */}
      <section className="py-20 md:py-28 bg-white overflow-hidden">
        <div className="container mx-auto px-4 max-w-6xl">
          <div className="flex flex-col lg:flex-row items-center gap-16">
            <div className="w-full lg:w-1/2 relative reveal">
              <div className="absolute -top-10 -left-10 w-64 h-64 bg-primary/10 rounded-full blur-3xl -z-10 animate-pulse"></div>
              <div className="rounded-[3rem] overflow-hidden border border-gray-100 shadow-2xl group bg-gray-50">
                <img 
                  src={atticWork2} 
                  alt="Attic insulation upgrade technology" 
                  className="w-full h-[350px] md:h-[500px] object-cover transition-transform duration-700 group-hover:scale-105"
                />
              </div>
            </div>

            <div className="w-full lg:w-1/2 reveal">
              <span className="text-primary font-bold uppercase tracking-[0.3em] text-xs mb-3 block">Complete Solutions</span>
              <h2 className="text-secondary text-3xl md:text-5xl font-black font-heading mb-6 uppercase tracking-tight leading-[1.0] lg:leading-[0.9]">
                More Than Just <br className="hidden sm:block" />
                <span className="text-primary italic">Adding Insulation</span>
              </h2>
              
              <div className="space-y-6 text-secondary/70 text-base md:text-lg leading-relaxed">
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

      {/* IS YOUR ATTIC MEETING ONTARIO'S CODE? */}
      <section className="py-20 md:py-28 bg-gray-50 overflow-hidden">
        <div className="container mx-auto px-4 max-w-4xl text-center">
          <div className="reveal mb-12">
            <span className="text-primary font-bold uppercase tracking-[0.3em] text-xs mb-3 block">Building Standards</span>
            <h2 className="text-secondary text-3xl md:text-5xl font-black font-heading mb-6 uppercase tracking-tight">
              Is Your Attic Meeting <span className="text-primary italic">Ontario's Code?</span>
            </h2>
            <div className="space-y-6 text-secondary/75 text-base md:text-lg leading-relaxed text-left max-w-3xl mx-auto">
              <p>
                Ontario's Building Code (SB-12) sets minimum insulation standards for attics, and for most homes across the GTA, that standard is <strong className="text-secondary">R-60</strong>. If your home was insulated decades ago, or hasn't been touched since it was built, there's a good chance it's falling well short of that.
              </p>
              <p>
                The tricky part is that most homeowners have no way of knowing where their attic stands. Insulation settles over time, gaps form around vents and framing, and older material simply doesn't perform the way it did when it was first installed. A free assessment is the easiest way to find out where your home actually sits, and what it would take to bring it up to code.
              </p>
            </div>
          </div>
        </div>
      </section>

      {/* TOP-UP OR FULL REPLACEMENT? */}
      <section className="py-20 md:py-28 bg-white overflow-hidden">
        <div className="container mx-auto px-4 max-w-6xl">
          <div className="text-center mb-16 reveal">
            <h3 className="text-primary font-bold uppercase tracking-[0.4em] text-xs mb-3">Custom Treatment</h3>
            <h2 className="text-secondary text-3xl md:text-5xl font-black font-heading mb-6 uppercase tracking-tight">
              Top-Up or Full Replacement? <br className="hidden sm:block" />
              <span className="text-primary italic">We'll Tell You Honestly</span>
            </h2>
            <p className="text-secondary/50 max-w-2xl mx-auto text-base">
              Not every attic needs to be gutted and started over. Some just need a top-up. Others need a full removal first. Here's the general difference:
            </p>
          </div>

          <div className="grid grid-cols-1 lg:grid-cols-2 gap-8 max-w-5xl mx-auto">
            {/* Top-up card */}
            <div className="bg-white p-8 md:p-10 rounded-[2.5rem] border border-gray-100 hover:border-primary/20 shadow-xl transition-all duration-300 reveal flex flex-col h-full">
              <div className="w-14 h-14 bg-primary/10 rounded-2xl flex items-center justify-center mb-6">
                <Shield className="w-7 h-7 text-primary" />
              </div>
              <h3 className="text-secondary font-black text-2xl uppercase mb-6 tracking-tight">A top-up usually makes sense when:</h3>
              <ul className="space-y-4 text-secondary/70 text-sm md:text-base leading-relaxed flex-grow">
                <li className="flex items-start gap-3">
                  <span className="mt-1 text-primary shrink-0"><CheckCircle size={18} /></span>
                  <span>Your existing insulation is dry, clean, and in reasonably good condition.</span>
                </li>
                <li className="flex items-start gap-3">
                  <span className="mt-1 text-primary shrink-0"><CheckCircle size={18} /></span>
                  <span>You just need to add depth to reach current R-value standards.</span>
                </li>
                <li className="flex items-start gap-3">
                  <span className="mt-1 text-primary shrink-0"><CheckCircle size={18} /></span>
                  <span>There's no sign of pest activity, mold, or water damage.</span>
                </li>
              </ul>
            </div>

            {/* Full Removal card */}
            <div className="bg-white p-8 md:p-10 rounded-[2.5rem] border border-gray-100 hover:border-accent/20 shadow-xl transition-all duration-300 reveal flex flex-col h-full">
              <div className="w-14 h-14 bg-accent/10 rounded-2xl flex items-center justify-center mb-6">
                <ShieldAlert className="w-7 h-7 text-accent" />
              </div>
              <h3 className="text-secondary font-black text-2xl uppercase mb-6 tracking-tight">Full removal &amp; replacement is needed when:</h3>
              <ul className="space-y-4 text-secondary/70 text-sm md:text-base leading-relaxed flex-grow">
                <li className="flex items-start gap-3">
                  <span className="mt-1 text-accent shrink-0"><AlertCircle size={18} /></span>
                  <span>The existing insulation is wet, moldy, or contaminated.</span>
                </li>
                <li className="flex items-start gap-3">
                  <span className="mt-1 text-accent shrink-0"><AlertCircle size={18} /></span>
                  <span>There's evidence of pests (droppings, nesting material, damage).</span>
                </li>
                <li className="flex items-start gap-3">
                  <span className="mt-1 text-accent shrink-0"><AlertCircle size={18} /></span>
                  <span>The insulation is old enough that its performance has significantly degraded.</span>
                </li>
                <li className="flex items-start gap-3">
                  <span className="mt-1 text-accent shrink-0"><AlertCircle size={18} /></span>
                  <span>You're dealing with older materials that may pose safety concerns.</span>
                </li>
              </ul>
            </div>
          </div>
          
          <div className="text-center mt-12 reveal">
            <p className="text-secondary font-bold text-lg max-w-xl mx-auto italic">
              "We'll give you a straight answer after seeing your attic in person. No pushing a bigger job than you actually need."
            </p>
          </div>
        </div>
      </section>

      {/* WHAT'S INCLUDED IN A COMPLETE UPGRADE */}
      <section className="py-20 md:py-28 bg-secondary text-white overflow-hidden">
        <div className="container mx-auto px-4 max-w-6xl">
          <div className="text-center mb-20 reveal">
            <h3 className="text-primary font-bold uppercase tracking-[0.4em] text-xs mb-3">Our Scope</h3>
            <h2 className="text-white text-3xl md:text-5xl font-black font-heading mb-6 uppercase tracking-tight">
              What's Included in a <span className="text-primary italic">Complete Upgrade</span>
            </h2>
            <p className="text-white/40 max-w-xl mx-auto text-base">
              A full attic upgrade with Space Insulation can include the following comprehensive steps.
            </p>
          </div>

          <div className="grid grid-cols-1 lg:grid-cols-5 gap-6 relative z-10">
            {steps.map((step, i) => (
              <div
                key={i}
                className="bg-white/5 border border-white/10 p-8 rounded-[2rem] hover:bg-white/10 transition-all duration-300 relative group reveal flex flex-col"
                style={{ transitionDelay: `${i * 100}ms` }}
              >
                <div className="w-12 h-12 bg-primary rounded-2xl flex items-center justify-center mb-6 shadow-lg shadow-primary/20 group-hover:scale-110 transition-transform">
                  {step.icon}
                </div>
                <div className="text-primary text-xs font-black uppercase tracking-[0.2em] mb-2">Step {step.number}</div>
                <h4 className="text-white font-bold text-lg mb-3 tracking-tight">{step.title}</h4>
                <p className="text-white/60 text-sm leading-relaxed flex-grow">{step.desc}</p>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* REBATES & INCENTIVES */}
      <section className="py-20 md:py-28 bg-gray-50 overflow-hidden">
        <div className="container mx-auto px-4 max-w-4xl text-center">
          <div className="reveal">
            <span className="text-primary font-bold uppercase tracking-[0.3em] text-xs mb-3 block">Energy Rebates</span>
            <h2 className="text-secondary text-3xl md:text-5xl font-black font-heading mb-6 uppercase tracking-tight">
              Rebates &amp; Incentives <span className="text-primary italic">for GTA Homeowners</span>
            </h2>
            <p className="text-secondary/75 text-base md:text-lg leading-relaxed max-w-3xl mx-auto mb-8 text-left">
              There are provincial and utility-run programs that may help offset the cost of an attic insulation upgrade, depending on your home type, current heating source, and eligibility. Programs and amounts change over time, so rather than promising a specific number, we'll walk you through what may apply to your home during your free assessment and point you toward the current program details.
            </p>
            <button
              onClick={() => onNavigate('contact')}
              className="bg-primary text-white hover:bg-primary/90 hover:scale-105 active:scale-95 transition-all px-8 py-4 rounded-full font-black text-xs uppercase tracking-widest shadow-xl"
            >
              Ask About Rebates
            </button>
          </div>
        </div>
      </section>

      {/* SERVING HOMEOWNERS ACROSS THE GTA */}
      <section className="py-20 bg-white border-b border-gray-100">
        <div className="container mx-auto px-4 max-w-4xl text-center">
          <div className="reveal mb-12">
            <h3 className="text-primary font-bold uppercase tracking-[0.4em] text-xs mb-3">Service Areas</h3>
            <h2 className="text-secondary text-2xl md:text-4xl font-black font-heading uppercase mb-4">
              Serving Homeowners <span className="text-primary italic">Across the GTA</span>
            </h2>
            <p className="text-secondary/50 text-sm max-w-xl mx-auto">
              We provide complete attic insulation and upgrade services throughout these regions:
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
        </div>
      </section>

      {/* FAQs ACCORDION */}
      <section className="py-20 md:py-28 bg-gray-50 overflow-hidden">
        <div className="container mx-auto px-4 max-w-3xl">
          <div className="text-center mb-16 reveal">
            <h3 className="text-primary font-bold uppercase tracking-[0.4em] text-xs mb-3">Clear Answers</h3>
            <h2 className="text-secondary text-3xl md:text-5xl font-black font-heading mb-6 uppercase tracking-tight">
              Frequently Asked <span className="text-primary italic">Questions</span>
            </h2>
          </div>

          <div className="space-y-4 reveal">
            {faqs.map((faq, idx) => (
              <div 
                key={idx} 
                className="border border-gray-100 rounded-3xl overflow-hidden shadow-sm hover:shadow-md transition-shadow bg-white"
              >
                <button
                  onClick={() => toggleFaq(idx)}
                  className="w-full flex items-center justify-between p-6 text-left font-bold text-secondary text-base md:text-lg hover:text-primary transition-colors bg-gray-50/20"
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

      {/* CLOSING CTA */}
      <section className="py-20 md:py-24 bg-secondary text-white relative overflow-hidden">
        <div className="absolute inset-0 bg-[radial-gradient(circle_at_70%_70%,rgba(131,183,53,0.12),transparent)] pointer-events-none"></div>
        <div className="container mx-auto px-4 max-w-4xl text-center relative z-10 reveal">
          <h2 className="text-3xl md:text-5xl font-black font-heading mb-6 uppercase leading-tight">
            Ready to Find Out <br />
            <span className="text-primary italic">Where Your Attic Stands?</span>
          </h2>
          <p className="text-white/60 text-base md:text-lg max-w-xl mx-auto mb-10 leading-relaxed">
            Book a free, no-obligation assessment and get a clear picture of what your attic needs, no guesswork, no pressure.
          </p>
          <button
            onClick={() => onNavigate('contact')}
            className="bg-primary text-white hover:bg-primary/90 hover:scale-105 active:scale-95 transition-all px-12 py-6 rounded-full font-black text-base uppercase tracking-widest shadow-xl inline-flex items-center gap-2 group"
          >
            Book My Free Assessment
            <ArrowRight size={18} className="transition-transform group-hover:translate-x-1" />
          </button>
        </div>
      </section>

    </div>
  );
};

export default AtticInsulationUpgrades;
