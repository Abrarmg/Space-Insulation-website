import React from 'react';
import { PageID } from '../App';

interface HeroProps {
  onNavigate: (page: PageID) => void;
}

const Hero: React.FC<HeroProps> = ({ onNavigate }) => {
  return (
    <section className="relative h-[100dvh] min-h-[600px] md:min-h-[800px] flex items-center justify-center overflow-hidden bg-secondary" id="root">
      {/* Background Video Layer - Streamable Integration */}
      <div className="absolute inset-0 z-0 overflow-hidden bg-secondary">
        <div className="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[125vw] h-[125vh] min-w-[177.77vh] min-h-[56.25vw] pointer-events-none">
          <iframe 
            className="w-full h-full opacity-60 scale-105"
            src="https://streamable.com/e/ypgn2x?autoplay=1&muted=1&nocontrols=1"
            title="Space Insulation Background Video"
            frameBorder="0"
            allow="fullscreen;autoplay"
            style={{ border: 'none', width: '100%', height: '100%' }}
            tabIndex={-1}
          ></iframe>
        </div>
        
        {/* Deep Gradient Overlays for Maximum Legibility */}
        <div className="absolute inset-0 bg-gradient-to-b from-secondary/90 via-secondary/40 to-secondary/95 z-[1]"></div>
        <div className="absolute inset-0 bg-black/10 z-[1]"></div>
      </div>

      {/* Decorative Rotating Ring - Scaled for mobile */}
      <div className="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 z-[2] opacity-5 pointer-events-none">
        <div className="w-[800px] md:w-[1400px] h-[800px] md:h-[1400px] rounded-full border-[2px] border-primary/20 animate-[spin_180s_linear_infinite]"></div>
      </div>

      {/* Hero Content */}
      <div className="container mx-auto px-4 relative z-10 text-center text-white pt-10 md:pt-20">
        <div className="space-y-6 md:space-y-8 max-w-5xl mx-auto mb-10 md:mb-12">
          <div className="opacity-0 animate-fade-up fill-mode-forwards">
            <h1 className="text-4xl sm:text-5xl md:text-7xl lg:text-9xl font-heading font-black italic tracking-tighter leading-[0.9] md:leading-[0.85] drop-shadow-2xl">
              <span className="block text-primary mb-2 md:mb-4 drop-shadow-[0_10px_10px_rgba(0,0,0,0.3)]">EXPERT ATTIC</span>
              <span className="text-white">INSULATION</span>
            </h1>
            <div className="mt-4 md:mt-6 flex flex-col items-center">
              <div className="w-12 md:w-16 h-1 bg-primary mb-3 md:mb-4"></div>
              <p className="text-sm sm:text-lg md:text-2xl font-bold text-primary tracking-[0.2em] md:tracking-[0.3em] uppercase">Solutions in Ontario | Space Insulation</p>
            </div>
          </div>
          
          <div className="opacity-0 animate-fade-up animation-delay-200 fill-mode-forwards">
            <p className="text-white/90 text-base sm:text-xl md:text-2xl max-w-3xl mx-auto font-medium leading-relaxed drop-shadow-lg bg-black/10 backdrop-blur-sm p-4 md:p-6 rounded-2xl md:rounded-3xl border border-white/5">
              Upgrade your home’s comfort and lower your energy bills with Ontario’s trusted professionals. Don't let your money escape through the roof.
            </p>
          </div>
        </div>

        <div className="flex flex-col items-center justify-center opacity-0 animate-fade-up animation-delay-400 fill-mode-forwards">
           <button 
             onClick={() => onNavigate('contact')}
             className="group relative bg-primary text-white px-8 md:px-16 py-4 md:py-6 rounded-full font-black text-lg md:text-2xl hover:bg-primary/90 transition-all hover:scale-105 active:scale-95 shadow-[0_20px_50px_rgba(131,183,53,0.4)] min-w-[260px] md:min-w-[320px] uppercase tracking-widest overflow-hidden"
           >
             <span className="relative z-10 flex items-center justify-center">
               Book Free Estimate
               <span className="ml-3 transition-transform group-hover:translate-x-2">→</span>
             </span>
             <div className="absolute inset-0 bg-white/20 translate-y-full group-hover:translate-y-0 transition-transform duration-300"></div>
           </button>
        </div>
      </div>
      
      {/* Scroll Indicator */}
      <div className="absolute bottom-8 md:bottom-12 left-1/2 -translate-x-1/2 z-10 animate-bounce opacity-0 animate-fade-in animation-delay-600 fill-mode-forwards">
        <div className="flex flex-col items-center">
          <span className="text-white/30 text-[9px] md:text-[10px] uppercase tracking-[0.5em] mb-4">Scroll to explore</span>
          <div className="w-px h-12 md:h-16 bg-gradient-to-b from-primary to-transparent rounded-full opacity-40"></div>
        </div>
      </div>
    </section>
  );
};

export default Hero;