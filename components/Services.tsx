import React from 'react';
import { Wind, Trash2, ShieldCheck, Zap } from 'lucide-react';
import { PageID } from '../App';

interface ServicesProps {
  onNavigate?: (page: PageID) => void;
}

const SERVICES_DATA = [
  {
    title: 'Blown-In Insulation',
    description: 'We utilize premium fiberglass or cellulose materials to create a seamless thermal blanket across your attic floor, filling every gap and crevice.',
    icon: <Wind className="text-white" size={32} />,
    image: 'https://i.ibb.co/Zp74mfPf/Gemini-Generated-Image-kfrihekfrihekfri.png', 
    badge: 'POPULAR'
  },
  {
    title: 'Spray Foam Insulation',
    description: 'The ultimate thermal barrier. We apply high-performance spray foam to roof decks and rim joists for maximum airtightness and structural strength.',
    icon: <Zap className="text-white" size={32} />,
    image: 'https://i.ibb.co/9kL6Fm50/Gemini-Generated-Image-zcmay5zcmay5zcma.png',
    badge: 'PREMIUM'
  },
  {
    title: 'Air Sealing',
    description: 'Insulation works best when air leaks are stopped. We seal pot lights, plumbing stacks, and top plates using precision foam application.',
    icon: <ShieldCheck className="text-white" size={32} />,
    image: 'https://i.ibb.co/5gfxvwGh/Gemini-Generated-Image-ii4klsii4klsii4k.png', 
    badge: 'CRITICAL'
  },
  {
    title: 'Insulation Removal',
    description: 'Safe removal of old, damaged, or pest-infested material before new installation. We ensure a clean slate for your efficiency upgrade.',
    icon: <Trash2 className="text-white" size={32} />,
    image: 'https://i.ibb.co/ccNxS2r0/Gemini-Generated-Image-gnnvdmgnnvdmgnnv.png',
    badge: 'ESSENTIAL'
  }
];

const Services: React.FC<ServicesProps> = ({ onNavigate }) => {
  const handleEstimateClick = () => {
    if (onNavigate) {
      onNavigate('contact');
    } else {
      document.getElementById('consultation')?.scrollIntoView({ behavior: 'smooth' });
    }
  };

  return (
    <section className="py-24 bg-secondary overflow-hidden">
      <div className="container mx-auto px-4">
        <div className="text-center mb-20 reveal">
          <h3 className="text-primary font-bold uppercase tracking-[0.4em] text-xs mb-4">Precision Craftsmanship</h3>
          <h2 className="text-white text-5xl md:text-7xl font-black font-heading mb-6 tracking-tighter uppercase">
            PROVEN <span className="text-primary italic">SERVICES</span>
          </h2>
          <p className="text-white/40 max-w-2xl mx-auto text-lg">
            Specialized solutions for Ontario homeowners. Beyond basic coverage, we provide high-performance thermal management for your entire home.
          </p>
        </div>

        {/* Main Service Cards Grid (2x2 on LG screens) */}
        <div className="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-6xl mx-auto">
          {SERVICES_DATA.map((service, i) => (
            <div 
              key={i} 
              className="relative h-[550px] rounded-[3rem] overflow-hidden group reveal shadow-2xl"
              style={{ transitionDelay: `${i * 150}ms` }}
            >
              <img 
                src={service.image} 
                alt={service.title} 
                className="absolute inset-0 w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110" 
                onError={(e) => {
                  (e.target as HTMLImageElement).src = 'https://images.unsplash.com/photo-1581094288338-2314dddb7ecc?q=80&w=2000';
                }}
              />
              <div className="absolute inset-0 bg-gradient-to-t from-secondary via-secondary/40 to-transparent"></div>
              
              <div className="absolute bottom-0 left-0 right-0 p-8 md:p-10 transform transition-transform duration-500 group-hover:-translate-y-4">
                <div className="inline-block p-4 bg-primary rounded-2xl mb-6 shadow-2xl shadow-primary/40 group-hover:scale-110 transition-transform">
                  {service.icon}
                </div>
                <h3 className="text-white text-3xl font-black mb-4 italic tracking-tight uppercase leading-none">{service.title}</h3>
                <p className="text-white/70 text-base max-w-md mb-8 leading-relaxed">
                  {service.description}
                </p>
                <button 
                   onClick={handleEstimateClick}
                   className="bg-white text-secondary px-8 py-4 rounded-full font-black text-xs uppercase tracking-widest hover:bg-primary hover:text-white transition-all shadow-2xl active:scale-95"
                >
                  Book Free Estimate
                </button>
              </div>
              <div className="absolute top-8 right-8 bg-white/10 backdrop-blur-md border border-white/20 text-white text-[10px] font-black px-5 py-2 rounded-full uppercase tracking-widest">
                {service.badge}
              </div>
            </div>
          ))}
        </div>
      </div>
    </section>
  );
};

export default Services;