import React from 'react';

const LocationMap: React.FC = () => {
  const address = "1070 Major MacKenzie Dr., Richmond Hill, ON L4S 1P3, Canada";
  const encodedAddress = encodeURIComponent(address);
  // Using a reliable public embed URL
  const mapUrl = `https://maps.google.com/maps?q=${encodedAddress}&t=&z=15&ie=UTF8&iwloc=&output=embed`;

  return (
    <section className="w-full h-[500px] relative overflow-hidden reveal">
      <iframe
        title="Space Insulation Location"
        className="w-full h-full grayscale-[10%] contrast-[1.05] hover:grayscale-0 transition-all duration-700"
        src={mapUrl}
        frameBorder="0"
        scrolling="no"
        marginHeight={0}
        marginWidth={0}
      ></iframe>
      
      {/* Floating Info Card */}
      <div className="absolute top-12 left-4 md:left-12 lg:left-24 bg-white/95 backdrop-blur-xl p-8 rounded-[2.5rem] shadow-2xl border border-gray-100 max-w-xs z-10 hidden sm:block">
        <div className="bg-primary/10 w-12 h-12 rounded-2xl flex items-center justify-center mb-6">
          <svg className="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
          </svg>
        </div>
        <h4 className="text-secondary font-black text-xl uppercase tracking-tighter italic mb-3">Our Office</h4>
        <p className="text-secondary/60 text-sm leading-relaxed mb-6">
          Stop by our Richmond Hill location for expert energy conservation advice and material samples.
        </p>
        <div className="flex items-center text-[10px] font-black uppercase tracking-[0.2em] text-primary">
           <div className="w-2 h-2 bg-primary rounded-full animate-ping mr-3"></div>
           On-Site Consultation Available
        </div>
      </div>

      {/* Aesthetic Overlay Gradient */}
      <div className="absolute inset-0 pointer-events-none bg-gradient-to-r from-secondary/5 to-transparent"></div>
    </section>
  );
};

export default LocationMap;