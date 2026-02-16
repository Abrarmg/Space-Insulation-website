import React from 'react';
import { Target, Users, Leaf } from 'lucide-react';

const About: React.FC = () => {
  return (
    <section className="py-16 md:py-24 bg-white overflow-hidden" id="about">
      <div className="container mx-auto px-4">
        <div className="flex flex-col lg:flex-row items-center gap-12 lg:gap-24">
          {/* Visual Side: Image Mosaic */}
          <div className="w-full lg:w-1/2 relative reveal">
            <div className="relative z-10 grid grid-cols-2 gap-3 md:gap-4">
              <div className="space-y-3 md:space-y-4 pt-8 md:pt-12">
                <img 
                  src="https://i.ibb.co/zcTs2Pn/Gemini-Generated-Image-r7585hr7585hr758.png" 
                  alt="Space Insulation Professional Work" 
                  className="rounded-2xl md:rounded-3xl shadow-xl h-48 md:h-64 w-full object-cover border border-gray-100"
                />
                <div className="bg-primary p-6 md:p-8 rounded-2xl md:rounded-3xl shadow-2xl transform -rotate-3 hover:rotate-0 transition-transform duration-500">
                  <p className="text-white font-black text-3xl md:text-4xl leading-none">20+</p>
                  <p className="text-white/80 text-[8px] md:text-[10px] font-bold uppercase tracking-[0.2em] mt-2">Years of Excellence</p>
                </div>
              </div>
              <div className="space-y-3 md:space-y-4">
                <div className="bg-secondary p-6 md:p-8 rounded-2xl md:rounded-3xl shadow-2xl transform rotate-3 hover:rotate-0 transition-transform duration-500">
                  <Users className="text-primary mb-2 md:mb-4" size={24} />
                  <p className="text-white font-black text-xl md:text-2xl leading-none italic">15k+</p>
                  <p className="text-white/40 text-[8px] md:text-[10px] font-bold uppercase tracking-[0.2em] mt-2">Homes Optimized</p>
                </div>
                <img 
                  src="https://i.ibb.co/1tgSc9RQ/Whats-App-Image-2026-01-20-at-21-28-11.jpg" 
                  alt="Precision Thermal Installation" 
                  className="rounded-2xl md:rounded-3xl shadow-xl h-60 md:h-80 w-full object-cover border border-gray-100"
                />
              </div>
            </div>
          </div>

          {/* Content Side */}
          <div className="w-full lg:w-1/2 reveal animation-delay-200 text-center lg:text-left">
            <div className="inline-flex items-center space-x-2 bg-secondary/5 px-4 py-2 rounded-full mb-6 md:mb-8">
              <span className="w-2 h-2 bg-primary rounded-full animate-pulse"></span>
              <span className="text-secondary font-bold uppercase tracking-widest text-[10px]">Who We Are</span>
            </div>
            
            <h2 className="text-secondary text-4xl sm:text-5xl md:text-7xl font-black font-heading leading-[1.0] lg:leading-[0.9] mb-6 md:mb-8 tracking-tighter uppercase">
              ABOUT <br className="hidden sm:block" />
              <span className="text-primary italic">SPACE INSULATION</span>
            </h2>

            <div className="space-y-4 md:space-y-6 text-secondary/70 text-base md:text-lg leading-relaxed mb-8 md:mb-10 px-2 lg:px-0">
              <p>
                <span className="text-secondary font-bold">Space Insulation</span> is a locally owned and operated insulation company proudly serving homeowners and businesses across Ontario. We specialize in energy-efficient insulation solutions designed specifically for Ontario’s climate, building codes, and housing styles.
              </p>
              <p>
                From older homes to new builds, we provide professional insulation services that improve indoor comfort, reduce energy costs, and increase property value.
              </p>
            </div>

            <div className="grid grid-cols-1 sm:grid-cols-2 gap-6 border-t border-gray-100 pt-8 md:pt-10 text-left">
              <div className="flex items-start space-x-4">
                <div className="bg-primary/10 p-3 rounded-xl mt-1 flex-shrink-0">
                  <Target className="text-primary" size={20} />
                </div>
                <div>
                  <h4 className="font-black text-secondary uppercase tracking-tight italic text-sm md:text-base">Our Vision</h4>
                  <p className="text-[11px] md:text-sm text-secondary/50 leading-snug">To lead Ontario’s transition to net-zero residential living through technical precision.</p>
                </div>
              </div>
              <div className="flex items-start space-x-4">
                <div className="bg-primary/10 p-3 rounded-xl mt-1 flex-shrink-0">
                  <Leaf className="text-primary" size={20} />
                </div>
                <div>
                  <h4 className="font-black text-secondary uppercase tracking-tight italic text-sm md:text-base">Eco-Legacy</h4>
                  <p className="text-[11px] md:text-sm text-secondary/50 leading-snug">Every project removes thousands of pounds of CO2 from the atmosphere annually.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default About;