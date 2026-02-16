import React from 'react';

const Intro: React.FC = () => {
  return (
    <section className="py-16 md:py-24 bg-white overflow-hidden">
      <div className="container mx-auto px-4">
        <div className="flex flex-col lg:flex-row items-center gap-12 lg:gap-24">
          <div className="w-full lg:w-1/2 relative reveal">
            <div className="absolute -top-10 -left-10 w-48 md:w-64 h-48 md:h-64 bg-primary/10 rounded-full blur-3xl -z-10 animate-pulse"></div>
            
            {/* Visual: User Provided Project Image */}
            <div className="relative z-10 rounded-[2rem] md:rounded-[3rem] overflow-hidden shadow-2xl group border border-gray-100 bg-gray-50">
              <img 
                src="https://i.ibb.co/S4mHKxFV/Gemini-Generated-Image-euyetreuyetreuye.png" 
                alt="Space Insulation R-60 Depth Achievement" 
                className="w-full h-[350px] md:h-[550px] object-cover transition-transform duration-700 group-hover:scale-105"
                onError={(e) => {
                  (e.target as HTMLImageElement).src = "https://images.unsplash.com/photo-1621905235858-62bfd732ee19?q=80&w=2000&auto=format&fit=crop";
                }}
              />
              <div className="absolute inset-0 bg-gradient-to-t from-secondary/80 via-transparent to-transparent"></div>
              
              {/* Trust Badge - Scaled for mobile */}
              <div className="absolute top-4 md:top-8 left-4 md:left-8 bg-primary text-white px-4 md:px-6 py-2 md:py-3 rounded-xl md:rounded-2xl shadow-2xl flex items-center space-x-2 md:space-x-3 animate-fade-in">
                <div className="w-2 h-2 md:w-3 md:h-3 bg-white rounded-full animate-ping"></div>
                <span className="text-[9px] md:text-xs font-black uppercase tracking-[0.2em]">Our Actual Work</span>
              </div>
            </div>
            
            {/* Supporting Lifestyle Overlay has been removed */}
          </div>

          <div className="w-full lg:w-1/2 reveal animation-delay-200 text-center lg:text-left">
            <div className="inline-flex items-center space-x-2 bg-primary/10 px-4 py-2 rounded-full mb-6 md:mb-8">
              <span className="w-2 h-2 bg-primary rounded-full animate-pulse"></span>
              <span className="text-secondary font-bold uppercase tracking-widest text-[10px]">Ontario's Top Rated Team</span>
            </div>
            
            <h2 className="text-secondary text-4xl sm:text-5xl md:text-7xl font-black font-heading leading-[1.0] lg:leading-[0.9] mb-6 md:mb-8 tracking-tighter uppercase">
              ABOUT <br className="hidden sm:block" />
              <span className="text-primary italic">SPACE INSULATION</span>
            </h2>
            
            <div className="space-y-4 md:space-y-6 text-secondary/70 text-base md:text-lg leading-relaxed mb-8 md:mb-12">
              <p>
                <span className="text-secondary font-bold">Space Insulation</span> is a locally owned and operated insulation company proudly serving homeowners and businesses across Ontario. We specialize in energy-efficient insulation solutions designed specifically for Ontario’s climate, building codes, and housing styles.
              </p>
              <p>
                From older homes to new builds, we provide professional insulation services that improve indoor comfort, reduce energy costs, and increase property value.
              </p>
            </div>

            <div className="grid grid-cols-1 sm:grid-cols-2 gap-4 md:gap-6">
              {[
                { label: "Stop Thermal Bridging", icon: "M13 10V3L4 14h7v7l9-11h-7z" },
                { label: "Eliminate Drafts", icon: "M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" },
                { label: "Moisture Protection", icon: "M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z" },
                { label: "Lifetime Durability", icon: "M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" }
              ].map((item, i) => (
                <div key={i} className="flex items-center space-x-4 bg-gray-50 p-4 md:p-5 rounded-2xl border border-gray-100 hover:border-primary/40 hover:bg-white transition-all shadow-sm group">
                  <div className="w-10 h-10 rounded-full bg-white border border-gray-200 flex items-center justify-center group-hover:bg-primary group-hover:text-white transition-colors">
                     <svg className="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d={item.icon}></path></svg>
                  </div>
                  <span className="text-secondary font-bold text-xs md:text-sm uppercase tracking-tight">{item.label}</span>
                </div>
              ))}
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default Intro;