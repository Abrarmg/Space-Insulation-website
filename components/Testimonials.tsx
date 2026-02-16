import React from 'react';
import { Star, Quote, ExternalLink } from 'lucide-react';

const REVIEWS = [
  {
    name: "Cathy Nelson",
    content: "We give 5 stars for their friendly service, professionalism and thoroughness. They hiring them over others because the initial quotation was very detailed. They took before and after photos which is greatly appreciated.",
    rating: 5,
    date: "2 months ago"
  },
  {
    name: "Mohammad Hamidfar",
    content: "I recently had my attic insulation upgraded. They used baffles and laser measurements to ensure a smooth layer at R60 rating. The entire process was professional and efficient.",
    rating: 5,
    date: "1 month ago"
  },
  {
    name: "Ayman Hamdavi",
    content: "I was impressed with the job they did leaving no corners behind, filling up the insulation to its standard. They were clean with moving tools, leaving no mess behind.",
    rating: 5,
    date: "3 weeks ago"
  }
];

const Testimonials: React.FC = () => {
  return (
    <section className="py-24 bg-secondary relative overflow-hidden">
       {/* Background Elements */}
       <div className="absolute top-0 right-0 w-96 h-96 bg-primary/5 rounded-full blur-[100px] pointer-events-none"></div>
       <div className="absolute bottom-0 left-0 w-64 h-64 bg-white/5 rounded-full blur-[80px] pointer-events-none"></div>

       <div className="container mx-auto px-4 relative z-10">
        <div className="flex flex-col md:flex-row justify-between items-end mb-16 gap-8">
          <div className="text-left">
             <div className="inline-flex items-center space-x-2 bg-white/10 px-4 py-2 rounded-full mb-6 backdrop-blur-sm border border-white/5">
                <span className="text-white font-bold uppercase tracking-widest text-[10px]">Verified Feedback</span>
                <div className="flex space-x-0.5">
                   {[1,2,3,4,5].map(i => <Star key={i} className="text-accent fill-accent" size={10} />)}
                </div>
             </div>
             <h2 className="text-white text-4xl md:text-6xl font-black font-heading tracking-tighter uppercase leading-none">
               Google <span className="text-primary italic">Reviews</span>
             </h2>
             <p className="text-white/50 mt-4 max-w-xl text-lg">
               See why homeowners across Ontario rate Space Insulation 5 stars for quality, cleanliness, and efficiency.
             </p>
          </div>
          
          <a 
            href="https://share.google/F5zYkSywVaSm7ljFD" 
            target="_blank" 
            rel="noopener noreferrer"
            className="group flex items-center bg-white text-secondary px-8 py-4 rounded-full font-black text-xs uppercase tracking-widest hover:bg-primary hover:text-white transition-all shadow-xl hover:scale-105 active:scale-95"
          >
            Review us on Google
            <ExternalLink size={16} className="ml-2 group-hover:rotate-45 transition-transform" />
          </a>
        </div>

        <div className="grid grid-cols-1 md:grid-cols-3 gap-8">
          {REVIEWS.map((review, i) => (
            <div 
              key={i} 
              className="bg-white/5 backdrop-blur-md border border-white/10 p-8 rounded-[2rem] relative group hover:bg-white/10 transition-colors duration-300 flex flex-col"
            >
              <div className="flex items-center justify-between mb-8">
                 <div className="flex items-center space-x-4">
                    <div className="w-12 h-12 bg-gradient-to-br from-primary to-green-600 rounded-full flex items-center justify-center text-white font-black text-xl shadow-lg">
                       {review.name[0]}
                    </div>
                    <div>
                       <p className="text-white font-bold text-base leading-tight">{review.name}</p>
                       <p className="text-white/40 text-[10px] uppercase tracking-widest">{review.date}</p>
                    </div>
                 </div>
                 <img src="https://upload.wikimedia.org/wikipedia/commons/c/c1/Google_%22G%22_logo.svg" alt="Google" className="w-6 h-6 opacity-50 group-hover:opacity-100 transition-opacity grayscale group-hover:grayscale-0" />
              </div>

              <div className="flex space-x-1 mb-4">
                {Array.from({length: review.rating}).map((_, i) => (
                  <Star key={i} className="text-accent fill-accent" size={16} />
                ))}
              </div>
              
              <p className="text-white/80 text-sm leading-relaxed mb-6 flex-grow">
                "{review.content}"
              </p>
            </div>
          ))}
        </div>
      </div>
    </section>
  );
};

export default Testimonials;