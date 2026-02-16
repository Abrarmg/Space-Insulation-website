import React from 'react';
import { MapPin, Award, Shield, Heart, ShieldCheck } from 'lucide-react';

const TRUST_DATA = [
  {
    title: 'Local Ontario Expertise',
    desc: 'Deep understanding of the Ontario Building Code and R-60 insulation requirements.',
    icon: <MapPin className="text-primary" size={28} />
  },
  {
    title: 'Certified Pros',
    desc: 'Fully licensed, insured, and rigorously trained in modern safety protocols.',
    icon: <Award className="text-primary" size={28} />
  },
  {
    title: 'Transparent Pricing',
    desc: 'Honest, upfront quotes with no hidden fees. High-impact ROI for homeowners.',
    icon: <Shield className="text-primary" size={28} />
  },
  {
    title: '100% Satisfaction',
    desc: 'White-glove service. We leave your home spotless and your attic perfect.',
    icon: <Heart className="text-primary" size={28} />
  }
];

const Trust: React.FC = () => {
  return (
    <section className="py-24 bg-gray-50 overflow-hidden">
      <div className="container mx-auto px-4">
        <div className="flex flex-col lg:flex-row items-center gap-16 lg:gap-24 mb-20">
          <div className="lg:w-1/3 reveal">
            <h3 className="text-primary font-bold uppercase tracking-[0.4em] text-xs mb-4">The Space Advantage</h3>
            <h2 className="text-secondary text-5xl font-black font-heading leading-none mb-6 tracking-tighter uppercase">
              WHY <span className="text-primary italic">TRUST</span> US?
            </h2>
            <p className="text-secondary/60 text-lg leading-relaxed mb-8">
              Finding reliable insulation companies near you can be difficult. We pride ourselves on precision, safety, and measurable results.
            </p>
            <div className="inline-flex items-center space-x-3 bg-white px-6 py-4 rounded-2xl shadow-sm border border-gray-100">
               <ShieldCheck className="text-primary" size={32} />
               <div>
                  <p className="text-secondary font-black leading-none">FULLY INSURED</p>
                  <p className="text-secondary/40 text-[10px] font-bold uppercase tracking-widest mt-1">WSIB & Liability Covered</p>
               </div>
            </div>
          </div>

          <div className="lg:w-2/3 reveal animation-delay-200">
             {/* Visual: Professional Service Scene - Updated with User Provided Image */}
             <div className="relative rounded-[3rem] overflow-hidden shadow-2xl group h-[400px]">
                <img 
                  src="https://i.ibb.co/FLnsW8Tq/Gemini-Generated-Image-uxlu6yuxlu6yuxlu.png" 
                  alt="Space Insulation professional team in action" 
                  className="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-105" 
                />
                <div className="absolute inset-0 bg-gradient-to-r from-secondary/40 to-transparent"></div>
                <div className="absolute top-8 left-8 bg-white/90 backdrop-blur px-6 py-3 rounded-full flex items-center space-x-2">
                   <div className="w-2 h-2 bg-primary rounded-full animate-pulse"></div>
                   <span className="text-secondary font-black text-xs uppercase tracking-widest italic">Professional Grade Equipment</span>
                </div>
             </div>
          </div>
        </div>

        <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
          {TRUST_DATA.map((item, i) => (
            <div 
              key={i} 
              className="bg-white p-10 rounded-[3rem] shadow-xl hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 border border-gray-100 reveal"
              style={{ transitionDelay: `${i * 100}ms` }}
            >
              <div className="mb-8 bg-gray-50 w-20 h-20 rounded-3xl flex items-center justify-center shadow-inner group-hover:scale-110 transition-transform">
                {item.icon}
              </div>
              <h4 className="text-xl font-black text-secondary mb-4 uppercase tracking-tighter leading-tight italic">{item.title}</h4>
              <p className="text-secondary/50 text-sm leading-relaxed">{item.desc}</p>
            </div>
          ))}
        </div>
      </div>
    </section>
  );
};

export default Trust;