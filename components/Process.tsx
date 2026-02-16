import React from 'react';
import { ClipboardCheck, Target, ShieldCheck, Zap, Sparkles, ArrowRight } from 'lucide-react';

const STEPS = [
  {
    number: "01",
    title: "On-Site Audit",
    subtitle: "Precise Inspection",
    icon: <ClipboardCheck className="text-white" size={24} />,
    desc: "Our certified energy consultants perform a 20-point thermal audit of your attic to identify energy leaks.",
    items: ["Thermal Imaging", "Ventilation Check"]
  },
  {
    number: "02",
    title: "Thermal Strategy",
    subtitle: "Tailored Planning",
    icon: <Target className="text-white" size={24} />,
    desc: "We engineer a custom solution to reach R-60 performance, maximizing rebate eligibility.",
    items: ["Material Selection", "Cost Breakdown"]
  },
  {
    number: "03",
    title: "Air Sealing",
    subtitle: "The Foundation",
    icon: <ShieldCheck className="text-white" size={24} />,
    desc: "Before adding material, we seal pot lights and plumbing stacks to prevent heat bypass.",
    items: ["Precision Foaming", "Baffle Install"]
  },
  {
    number: "04",
    title: "Blower Precision",
    subtitle: "High-Tech Install",
    icon: <Zap className="text-white" size={24} />,
    desc: "Our high-volume blower systems deliver a seamless thermal blanket, filling every crevice.",
    items: ["No Gaps/Cracks", "Eco-Material"]
  },
  {
    number: "05",
    title: "Quality Mastery",
    subtitle: "Final Validation",
    icon: <Sparkles className="text-white" size={24} />,
    desc: "We perform a final depth check and site cleanup, leaving your home spotless and optimized.",
    items: ["Depth Verification", "White-Glove Clean"]
  }
];

const Process: React.FC = () => {
  return (
    <section className="py-20 md:py-32 bg-white relative overflow-hidden" id="process">
      {/* Decorative Background Elements */}
      <div className="absolute top-0 left-0 w-full h-32 bg-gradient-to-b from-secondary/[0.02] to-transparent"></div>
      <div className="absolute -right-20 top-1/4 w-64 md:w-96 h-64 md:h-96 bg-primary/5 rounded-full blur-[100px] pointer-events-none"></div>
      
      <div className="container mx-auto px-4 relative z-10">
        <div className="text-center mb-16 md:mb-24 reveal">
          <div className="inline-flex items-center space-x-2 bg-primary/10 px-4 py-2 rounded-full mb-6">
            <span className="w-2 h-2 bg-primary rounded-full animate-pulse"></span>
            <span className="text-primary font-bold uppercase tracking-widest text-[10px]">The Space Standards</span>
          </div>
          <h2 className="text-secondary text-4xl md:text-7xl font-black font-heading tracking-tighter mb-4 md:mb-6 uppercase leading-[0.9]">
            OUR WORKING <span className="text-primary italic">PROCESS</span>
          </h2>
          <p className="text-secondary/50 max-w-2xl mx-auto text-base md:text-lg leading-relaxed px-4">
            A rigorous 5-step engineering approach to transform your home's energy efficiency.
          </p>
        </div>

        <div className="relative">
          {/* Visual Path Connector */}
          <div className="hidden lg:block absolute top-1/2 left-0 w-full h-px bg-gradient-to-r from-transparent via-gray-100 to-transparent -z-10"></div>
          
          <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-6 md:gap-8">
            {STEPS.map((step, idx) => (
              <div 
                key={idx} 
                className="group relative reveal"
                style={{ transitionDelay: `${idx * 100}ms` }}
              >
                {/* Large Background Number - Adjusted for mobile scale */}
                <span className="absolute -top-6 md:-top-12 left-0 text-[80px] md:text-[120px] font-black text-secondary/[0.03] leading-none select-none group-hover:text-primary/5 transition-colors duration-500">
                  {step.number}
                </span>

                <div className="bg-white rounded-[2rem] md:rounded-[2.5rem] p-6 md:p-8 border border-gray-100 shadow-sm group-hover:shadow-2xl group-hover:-translate-y-2 transition-all duration-500 flex flex-col h-full relative z-10">
                  <div className="mb-6 md:mb-8 flex items-center justify-between">
                    <div className="bg-primary w-12 h-12 md:w-16 md:h-16 rounded-xl md:rounded-2xl flex items-center justify-center shadow-lg shadow-primary/30 transform group-hover:rotate-6 transition-transform">
                      {step.icon}
                    </div>
                  </div>

                  <div className="mb-4">
                    <p className="text-primary font-black text-[9px] uppercase tracking-[0.2em] mb-1">{step.subtitle}</p>
                    <h3 className="text-xl md:text-2xl font-black text-secondary tracking-tight">{step.title}</h3>
                  </div>

                  <p className="text-secondary/60 text-xs md:text-sm leading-relaxed mb-6 flex-grow">
                    {step.desc}
                  </p>

                  <div className="space-y-2 pt-4 border-t border-gray-50">
                    {step.items.map((item, i) => (
                      <div key={i} className="flex items-center text-[9px] font-bold text-secondary/40 uppercase tracking-widest">
                        <div className="w-1 h-1 rounded-full bg-primary/40 mr-2"></div>
                        {item}
                      </div>
                    ))}
                  </div>
                </div>
              </div>
            ))}
          </div>
        </div>

        {/* Bottom CTA */}
        <div className="mt-16 md:mt-24 text-center reveal">
          <div className="inline-block glass-card bg-secondary p-6 md:p-12 rounded-[2rem] md:rounded-[3rem] border border-white/5 shadow-2xl relative overflow-hidden group max-w-4xl mx-auto">
            <div className="absolute top-0 left-0 w-full h-full bg-primary/5 opacity-0 group-hover:opacity-100 transition-opacity"></div>
            <div className="relative z-10 flex flex-col md:flex-row items-center gap-6 md:gap-16">
              <div className="text-center md:text-left">
                <h4 className="text-white text-2xl md:text-3xl font-black mb-2">Ready to start?</h4>
                <p className="text-white/50 text-xs md:text-sm">Join hundreds of Ontario homeowners saving up to 25% today.</p>
              </div>
              <button 
                onClick={() => window.scrollTo({ top: document.getElementById('consultation')?.offsetTop || 0, behavior: 'smooth' })}
                className="w-full md:w-auto bg-primary text-white px-8 md:px-12 py-4 md:py-5 rounded-2xl font-black text-base md:text-lg hover:scale-105 active:scale-95 transition-all shadow-xl shadow-primary/20 whitespace-nowrap"
              >
                BOOK YOUR AUDIT
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default Process;