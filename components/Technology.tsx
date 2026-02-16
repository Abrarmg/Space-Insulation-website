import React from 'react';

const Technology: React.FC = () => {
  return (
    <section className="py-24 bg-secondary relative overflow-hidden">
      {/* Background patterns */}
      <div className="absolute inset-0 opacity-5 pointer-events-none">
        <div className="absolute top-0 right-0 w-full h-full" style={{ backgroundImage: 'radial-gradient(#fff 1px, transparent 1px)', backgroundSize: '40px 40px' }}></div>
      </div>

      <div className="container mx-auto px-4">
        <div className="flex flex-col lg:flex-row items-center gap-16 lg:gap-24">
          <div className="lg:w-1/2 reveal">
             <div className="relative">
                {/* Visual: Equipment Scene - Enlarged and made the sole focus */}
                <div className="rounded-[3rem] overflow-hidden shadow-2xl group relative h-[500px] md:h-[650px] border border-white/5">
                  <img 
                    src="https://i.ibb.co/Qv3bbvbK/Gemini-Generated-Image-c8bmy1c8bmy1c8bm.png" 
                    alt="High performance blower system" 
                    className="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110" 
                  />
                  <div className="absolute inset-0 bg-gradient-to-t from-secondary/80 to-transparent flex items-end p-10">
                    <div className="space-y-2">
                       <div className="w-12 h-1 bg-primary rounded-full mb-4"></div>
                       <span className="text-white text-lg font-black tracking-widest uppercase italic">High-Volume Blower System</span>
                       <p className="text-white/40 text-xs font-bold uppercase tracking-widest">Industrial grade precision</p>
                    </div>
                  </div>
                </div>
                
                {/* Stat Overlays */}
                <div className="absolute -left-8 top-1/2 -translate-y-1/2 glass-card p-8 rounded-[2rem] hidden xl:block animate-float shadow-2xl">
                  <p className="text-primary font-black text-5xl leading-none">R-60</p>
                  <p className="text-white/40 text-[10px] font-bold uppercase tracking-widest mt-2">Certified Depth</p>
                </div>

                <div className="absolute -bottom-6 -right-6 bg-primary p-8 rounded-3xl hidden md:block shadow-2xl rotate-3">
                   <p className="text-white font-black text-2xl italic leading-none">100%</p>
                   <p className="text-white/70 text-[10px] font-bold uppercase tracking-widest mt-1">Coverage</p>
                </div>
             </div>
          </div>

          <div className="lg:w-1/2 reveal animation-delay-200">
            <h3 className="text-primary font-bold uppercase tracking-[0.4em] text-xs mb-4">Precision Installation</h3>
            <h2 className="text-white text-5xl md:text-7xl font-black font-heading leading-tight mb-8 tracking-tighter uppercase">
              ADVANCED <span className="text-primary italic">BLOWER</span> TECH
            </h2>
            <div className="space-y-6 text-white/60 text-lg leading-relaxed mb-12">
              <p>
                Unlike traditional rolled "batt" insulation that leaves gaps, our <span className="text-white font-bold">state-of-the-art blower equipment</span> forces material into every tight corner and hard-to-reach crevice.
              </p>
              <p>
                This ensures a perfectly consistent <span className="text-primary font-bold">R-Value (Thermal Resistance)</span> across your entire attic floor, eliminating the cold spots that compromise comfort and efficiency.
              </p>
            </div>

            <div className="glass-card p-10 rounded-[2.5rem] border-primary/20 shadow-2xl">
               <div className="space-y-8">
                  <div className="space-y-3">
                    <div className="flex justify-between items-end">
                      <span className="text-white font-black text-xs uppercase tracking-widest">Blower Precision Coverage</span>
                      <span className="text-primary font-black text-xl">100%</span>
                    </div>
                    <div className="w-full h-4 bg-white/5 rounded-full overflow-hidden shadow-inner p-0.5">
                      <div 
                        className="h-full bg-primary rounded-full reveal-grow shadow-[0_0_15px_rgba(131,183,53,0.5)]"
                        style={{ '--target-width': '100%' } as React.CSSProperties}
                      ></div>
                    </div>
                  </div>
                  <div className="space-y-3">
                    <div className="flex justify-between items-end">
                      <span className="text-white/40 font-black text-xs uppercase tracking-widest">Traditional Batt Coverage</span>
                      <span className="text-white/40 font-black text-xl">65%</span>
                    </div>
                    <div className="w-full h-4 bg-white/5 rounded-full overflow-hidden shadow-inner p-0.5">
                      <div 
                        className="h-full bg-white/20 rounded-full reveal-grow"
                        style={{ '--target-width': '65%' } as React.CSSProperties}
                      ></div>
                    </div>
                  </div>
               </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default Technology;