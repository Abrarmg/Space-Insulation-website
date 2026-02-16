import React from 'react';
import { Percent, TrendingUp, Handshake, Info } from 'lucide-react';

const CostRebate: React.FC = () => {
  return (
    <section className="py-24 bg-white relative">
      <div className="container mx-auto px-4">
        <div className="flex flex-col lg:flex-row items-center gap-16 lg:gap-24">
          <div className="lg:w-1/2 order-2 lg:order-1 reveal">
            <h3 className="text-primary font-bold uppercase tracking-[0.4em] text-xs mb-4">Investment & Incentives</h3>
            <h2 className="text-secondary text-5xl md:text-7xl font-black font-heading leading-none mb-8 tracking-tighter">
              ONTARIO <span className="text-primary italic">REBATES</span> & COST
            </h2>
            <p className="text-secondary/70 text-xl leading-relaxed mb-10">
              The <span className="text-secondary font-black">attic insulation cost</span> is a smart investment that pays for itself. We help you access provincial incentives that significantly lower your upfront cost.
            </p>
            
            <div className="grid gap-8">
              {[
                {
                  icon: <Percent className="text-primary" />,
                  title: "Shorter Payback Period",
                  desc: "Rebates can cover up to 50% or more of project costs."
                },
                {
                  icon: <TrendingUp className="text-primary" />,
                  title: "Boost Home Resale Value",
                  desc: "Efficiency upgrades are highly attractive to modern buyers."
                },
                {
                  icon: <Handshake className="text-primary" />,
                  title: "White-Glove Filing",
                  desc: "We connect you with energy advisors to handle the paperwork."
                }
              ].map((item, i) => (
                <div key={i} className="flex space-x-6 group">
                  <div className="w-16 h-16 bg-gray-50 rounded-2xl flex-shrink-0 flex items-center justify-center group-hover:bg-primary/10 transition-colors">
                    {item.icon}
                  </div>
                  <div>
                    <h4 className="text-xl font-bold text-secondary mb-1">{item.title}</h4>
                    <p className="text-secondary/50 text-base">{item.desc}</p>
                  </div>
                </div>
              ))}
            </div>
          </div>

          <div className="lg:w-1/2 order-1 lg:order-2 reveal">
            <div className="relative">
              {/* Visual: Updated with User Provided Image */}
              <div className="rounded-[4rem] overflow-hidden shadow-[0_40px_80px_-15px_rgba(0,0,0,0.3)] border-4 border-gray-50 relative group">
                <img 
                  src="https://i.ibb.co/sdV6sTLt/Gemini-Generated-Image-93vmdx93vmdx93vm.png" 
                  alt="Ontario Energy Efficiency Rebate Visual" 
                  className="w-full h-auto transform transition-transform duration-700 group-hover:scale-105"
                />
                <div className="absolute inset-0 bg-primary/10 group-hover:bg-transparent transition-colors"></div>
                
                {/* Overlay Badge */}
                <div className="absolute bottom-8 left-8 right-8 glass-card p-6 rounded-3xl animate-float">
                  <div className="flex items-center justify-between">
                    <div>
                      <p className="text-white text-[10px] font-black uppercase tracking-widest opacity-60 mb-1">Estimated Savings</p>
                      <p className="text-white text-3xl font-black">25% SAVINGS</p>
                    </div>
                    <div className="bg-primary/20 p-3 rounded-full">
                      <Info className="text-primary" />
                    </div>
                  </div>
                </div>
              </div>

              {/* Decorative Glow */}
              <div className="absolute -bottom-10 -right-10 w-64 h-64 bg-primary/20 blur-[120px] rounded-full -z-10"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default CostRebate;