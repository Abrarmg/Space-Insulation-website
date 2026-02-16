import React from 'react';
import { MapPin, Home, Trash2, LayoutTemplate, Wind, CheckCircle2, Star, ShieldCheck, Phone, Layers } from 'lucide-react';

const AboutDetailed: React.FC = () => {
  const locations = ["Richmond Hill", "Mississauga", "Brampton", "London", "Newmarket", "Markham"];
  
  const services = [
    {
      title: "Attic Insulation Services",
      desc: "Proper attic insulation is one of the fastest ways to improve energy efficiency in Ontario homes. Our attic insulation services help prevent heat loss, reduce HVAC strain, and maintain consistent indoor temperatures.",
      icon: <Home className="w-8 h-8 text-white" />
    },
    {
      title: "Insulation Removal & Replacement",
      desc: "Old or contaminated insulation can reduce efficiency and affect indoor air quality. We safely remove damaged insulation and replace it with modern, high-performance materials.",
      icon: <Trash2 className="w-8 h-8 text-white" />
    },
    {
      title: "Basement Insulation",
      desc: "Basements are a major source of heat loss. Our basement insulation services help control moisture, eliminate drafts, and improve comfort year-round.",
      icon: <Layers className="w-8 h-8 text-white" />
    },
    {
      title: "Wall Insulation",
      desc: "We install wall insulation for both new construction and existing homes, improving energy efficiency and sound control with minimal disruption.",
      icon: <LayoutTemplate className="w-8 h-8 text-white" />
    },
    {
      title: "Blown-In Insulation",
      desc: "Blown-in insulation is ideal for attics and hard-to-reach areas. It provides even coverage and excellent thermal performance, making it a popular choice for Ontario properties.",
      icon: <Wind className="w-8 h-8 text-white" />
    }
  ];

  const reasons = [
    "Local Ontario insulation specialists",
    "Fully trained and experienced crews",
    "High-quality, energy-efficient insulation materials",
    "Clean, safe, and code-compliant installations",
    "Honest pricing and free estimates",
    "Residential and commercial projects"
  ];

  return (
    <div className="flex flex-col">
      {/* Intro Section */}
      <section className="py-16 md:py-24 bg-white">
        <div className="container mx-auto px-4">
          <div className="flex flex-col lg:flex-row items-center gap-12 lg:gap-20">
             <div className="lg:w-1/2">
                <div className="relative rounded-[3rem] overflow-hidden shadow-2xl border border-gray-100 group">
                  <img src="https://i.ibb.co/zcTs2Pn/Gemini-Generated-Image-r7585hr7585hr758.png" alt="About Space Insulation" className="w-full h-auto object-cover transition-transform duration-700 group-hover:scale-105" />
                  <div className="absolute inset-0 bg-gradient-to-t from-secondary/60 to-transparent"></div>
                  <div className="absolute bottom-8 left-8 bg-white/10 backdrop-blur-md p-6 rounded-2xl border border-white/20">
                    <p className="text-white font-black text-xl uppercase italic">Locally Owned</p>
                    <p className="text-white/80 text-xs tracking-widest uppercase mt-1">Ontario Operated</p>
                  </div>
                </div>
             </div>
             <div className="lg:w-1/2">
                <h2 className="text-secondary text-4xl md:text-5xl font-black font-heading uppercase tracking-tighter mb-6">
                  About <span className="text-primary italic">Space Insulation</span>
                </h2>
                <div className="space-y-6 text-secondary/70 text-lg leading-relaxed">
                  <p>
                    <span className="font-bold text-secondary">Space Insulation</span> is a locally owned and operated insulation company proudly serving homeowners and businesses across Ontario. We specialize in energy-efficient insulation solutions designed specifically for Ontario’s climate, building codes, and housing styles.
                  </p>
                  <p>
                    From older homes to new builds, we provide professional insulation services that improve indoor comfort, reduce energy costs, and increase property value.
                  </p>
                </div>
             </div>
          </div>
        </div>
      </section>

      {/* Local Focus Section */}
      <section className="py-20 bg-secondary text-white overflow-hidden relative">
         <div className="absolute top-0 right-0 w-1/3 h-full bg-primary/5 -skew-x-12 transform translate-x-20"></div>
         <div className="container mx-auto px-4 relative z-10">
            <div className="max-w-4xl mx-auto text-center mb-16">
               <div className="inline-block bg-primary px-4 py-1 rounded-full text-[10px] font-black uppercase tracking-widest mb-4">Not a Franchise</div>
               <h2 className="text-4xl md:text-5xl font-black font-heading uppercase tracking-tighter mb-6">Local Insulation Company <span className="text-primary italic">Serving Your Area</span></h2>
               <p className="text-white/60 text-lg leading-relaxed">
                 We are a local insulation contractor, not a franchise or call center. Because we operate locally, we understand common insulation problems in Ontario homes — including heat loss, ice dams, moisture issues, and rising energy bills. This local expertise allows us to recommend the right insulation solution for your specific location.
               </p>
            </div>

            <div className="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4">
               {locations.map((loc, i) => (
                 <div key={i} className="bg-white/5 border border-white/10 p-6 rounded-2xl text-center hover:bg-white/10 transition-colors group cursor-default">
                    <MapPin className="mx-auto mb-3 text-primary group-hover:scale-110 transition-transform" size={24} />
                    <span className="text-sm font-bold uppercase tracking-wide">{loc}</span>
                 </div>
               ))}
            </div>
         </div>
      </section>

      {/* Services Section */}
      <section className="py-24 bg-gray-50">
        <div className="container mx-auto px-4">
           <div className="text-center mb-16">
              <h2 className="text-secondary text-4xl md:text-6xl font-black font-heading uppercase tracking-tighter mb-4">
                Our Insulation <span className="text-primary italic">Services</span>
              </h2>
              <p className="text-secondary/50 max-w-2xl mx-auto text-lg">Full-service residential and commercial insulation solutions.</p>
           </div>

           <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
              {services.map((service, i) => (
                <div key={i} className="bg-white p-10 rounded-[2.5rem] shadow-xl border border-gray-100 hover:-translate-y-2 transition-transform duration-300 group">
                   <div className="w-16 h-16 bg-secondary rounded-2xl flex items-center justify-center mb-6 shadow-lg shadow-secondary/20 group-hover:bg-primary transition-colors duration-300">
                      {service.icon}
                   </div>
                   <h3 className="text-xl font-black text-secondary uppercase tracking-tight mb-4 group-hover:text-primary transition-colors">{service.title}</h3>
                   <p className="text-secondary/60 text-sm leading-relaxed">{service.desc}</p>
                </div>
              ))}
           </div>
        </div>
      </section>

      {/* Why Choose Us */}
      <section className="py-24 bg-white overflow-hidden">
         <div className="container mx-auto px-4">
            <div className="flex flex-col lg:flex-row gap-16 items-center">
               <div className="lg:w-1/2">
                  <h2 className="text-secondary text-4xl md:text-5xl font-black font-heading uppercase tracking-tighter mb-8 leading-[0.9]">
                    Why Homeowners Choose <span className="text-primary italic">Space Insulation</span>
                  </h2>
                  <p className="text-secondary/60 text-lg mb-10">
                    We focus on long-term performance, not quick fixes. Our team is dedicated to providing the highest standard of service in Ontario.
                  </p>
                  <div className="grid gap-4">
                    {reasons.map((reason, i) => (
                      <div key={i} className="flex items-center space-x-4 bg-gray-50 p-5 rounded-2xl border border-gray-100 hover:border-primary/20 transition-colors">
                         <div className="bg-primary/20 p-2 rounded-full flex-shrink-0">
                           <CheckCircle2 className="text-primary" size={20} />
                         </div>
                         <span className="font-bold text-secondary text-sm md:text-base">{reason}</span>
                      </div>
                    ))}
                  </div>
               </div>
               <div className="lg:w-1/2 relative">
                  <div className="absolute -inset-4 bg-primary/20 rounded-[3rem] rotate-3"></div>
                  <img src="https://i.ibb.co/FLnsW8Tq/Gemini-Generated-Image-uxlu6yuxlu6yuxlu.png" alt="Trusted Contractors" className="relative rounded-[3rem] shadow-2xl w-full object-cover h-[500px]" />
                  <div className="absolute -bottom-10 -left-10 bg-white p-8 rounded-3xl shadow-xl border border-gray-100 hidden md:block animate-bounce" style={{ animationDuration: '3s' }}>
                     <div className="flex items-center space-x-1 mb-2">
                        {[1,2,3,4,5].map(s => <Star key={s} size={20} className="text-primary fill-primary" />)}
                     </div>
                     <p className="text-secondary font-black text-lg">Top Rated Team</p>
                  </div>
               </div>
            </div>
         </div>
      </section>

      {/* Trusted Contractors SEO Block */}
      <section className="py-24 bg-secondary/5 border-t border-secondary/10">
         <div className="container mx-auto px-4 max-w-4xl text-center">
            <ShieldCheck className="mx-auto text-primary mb-6" size={56} />
            <h2 className="text-3xl md:text-4xl font-black font-heading text-secondary uppercase tracking-tighter mb-8">Trusted Insulation Contractors Near You</h2>
            <div className="prose prose-lg mx-auto text-secondary/70">
              <p className="mb-6 leading-relaxed">
                When you search for “attic insulation near me”, “blown-in insulation Ontario”, or “insulation contractors in Richmond Hill / Mississauga / Brampton”, our goal is to be the company you can trust.
              </p>
              <p className="font-bold text-secondary text-xl">
                We build our reputation through consistent local service, quality workmanship, clear communication, and customer satisfaction.
              </p>
            </div>
         </div>
      </section>

      {/* CTA Footer */}
      <section className="py-24 bg-primary relative overflow-hidden">
         {/* Background pattern */}
         <div className="absolute inset-0 opacity-10" style={{ backgroundImage: 'radial-gradient(#fff 1px, transparent 1px)', backgroundSize: '20px 20px' }}></div>
         <div className="absolute inset-0 bg-gradient-to-r from-secondary/20 to-transparent"></div>
         
         <div className="container mx-auto px-4 relative z-10 text-center text-white">
            <h2 className="text-4xl md:text-6xl font-black font-heading uppercase tracking-tighter mb-8">Proudly Serving Ontario <br/> Homes & Businesses</h2>
            <p className="text-white/90 text-xl max-w-2xl mx-auto mb-12 font-medium">
              Whether you’re upgrading attic insulation, removing old insulation, or insulating a basement or walls, Space Insulation is your trusted local partner.
            </p>
            <div className="flex flex-col sm:flex-row justify-center gap-6">
               <button 
                onClick={() => document.getElementById('consultation')?.scrollIntoView({ behavior: 'smooth' })}
                className="bg-white text-primary px-12 py-5 rounded-full font-black uppercase tracking-widest hover:bg-secondary hover:text-white transition-all shadow-xl hover:scale-105 active:scale-95"
               >
                 Get Free Assessment
               </button>
               <a 
                href="tel:6477049021"
                className="bg-secondary text-white px-12 py-5 rounded-full font-black uppercase tracking-widest hover:bg-white hover:text-secondary transition-all shadow-xl flex items-center justify-center hover:scale-105 active:scale-95 border-2 border-transparent hover:border-secondary"
               >
                 <Phone className="mr-3" size={20} /> Call Today
               </a>
            </div>
            <div className="mt-12 flex flex-wrap justify-center gap-6 text-xs font-bold uppercase tracking-widest opacity-70">
               <span className="flex items-center"><MapPin size={14} className="mr-2" /> Serving Richmond Hill & GTA</span>
               <span className="hidden sm:inline">•</span>
               <span className="flex items-center"><Layers size={14} className="mr-2" /> Flexible scheduling available</span>
            </div>
         </div>
      </section>
    </div>
  );
};

export default AboutDetailed;