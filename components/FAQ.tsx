
import React, { useState } from 'react';
import { ChevronDown, ChevronUp, MapPin, Settings } from 'lucide-react';

const FAQS = [
  {
    category: "Location-Based",
    questions: [
      {
        q: "What is the recommended R-Value for attic insulation in Ontario?",
        a: "To cope with our freezing winters and hot summers, the Ontario Building Code generally recommends upgrading to at least R-60. This ensures maximum thermal resistance and qualifies you for most rebate programs."
      },
      {
        q: "Do you provide services in my area?",
        a: "Space Insulation serves homeowners across the Greater Toronto Area and Southern Ontario, including Toronto, Mississauga, Brampton, and surrounding regions."
      },
      {
        q: "How do I apply for the attic insulation rebate in Ontario?",
        a: "Typically, you need an energy audit before and after the work. We can connect you with registered energy advisors to ensure your paperwork is filed correctly."
      }
    ]
  },
  {
    category: "Service-Based",
    questions: [
      {
        q: "How is the attic insulation cost calculated?",
        a: "Cost depends on square footage, material type (cellulose vs fiberglass), and whether old insulation needs removal. We offer free onsite assessments for accurate pricing."
      },
      {
        q: "Is using an attic insulation blower better than laying rolls?",
        a: "Yes. Blowers break up the material and fluff it, adding air pockets that increase insulating power. It also fills obstructions like pipes and wires much more effectively."
      },
      {
        q: "How do I know if I need to hire insulation companies near me?",
        a: "Warning signs include high energy bills, drafty rooms, ice dams (icicles on gutters), or if your upstairs is significantly hotter than the downstairs in summer."
      }
    ]
  }
];

const FAQ: React.FC = () => {
  const [openId, setOpenId] = useState<string | null>("Location-Based-0");

  return (
    <section className="py-24 bg-white border-t border-gray-100">
      <div className="container mx-auto px-4 max-w-5xl">
        <div className="text-center mb-16">
          <h3 className="text-primary font-bold uppercase tracking-widest text-sm mb-4">Common Questions</h3>
          <h2 className="text-secondary text-4xl md:text-5xl font-black font-heading">Frequently Asked Questions</h2>
        </div>

        <div className="grid grid-cols-1 lg:grid-cols-2 gap-12">
          {FAQS.map((cat, catIdx) => (
            <div key={catIdx} className="space-y-6">
              <div className="flex items-center space-x-3 mb-8">
                {catIdx === 0 ? <MapPin className="text-primary" /> : <Settings className="text-primary" />}
                <h3 className="text-2xl font-black italic uppercase tracking-tighter text-secondary">{cat.category}</h3>
              </div>
              
              <div className="space-y-4">
                {cat.questions.map((faq, i) => {
                  const id = `${cat.category}-${i}`;
                  const isOpen = openId === id;
                  return (
                    <div key={i} className={`border rounded-3xl transition-all duration-300 ${isOpen ? 'border-primary bg-primary/5' : 'border-gray-100 hover:border-gray-200'}`}>
                      <button 
                        onClick={() => setOpenId(isOpen ? null : id)}
                        className="w-full flex items-center justify-between p-6 text-left"
                      >
                        <span className="font-bold text-secondary">{faq.q}</span>
                        {isOpen ? <ChevronUp className="text-primary" /> : <ChevronDown className="text-gray-400" />}
                      </button>
                      {isOpen && (
                        <div className="px-6 pb-6 text-secondary/70 leading-relaxed text-sm animate-in fade-in slide-in-from-top-2">
                          {faq.a}
                        </div>
                      )}
                    </div>
                  );
                })}
              </div>
            </div>
          ))}
        </div>
      </div>
    </section>
  );
};

export default FAQ;
