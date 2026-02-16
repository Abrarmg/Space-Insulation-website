import React, { useState } from 'react';
import { CheckCircle2, Loader2 } from 'lucide-react';

const ConsultationForm: React.FC = () => {
  const [submitted, setSubmitted] = useState(false);
  const [loading, setLoading] = useState(false);
  const [formData, setFormData] = useState({
    fullName: '',
    email: '',
    phone: '',
    address: '',
    service: '',
  });

  const handleChange = (e: React.ChangeEvent<HTMLInputElement | HTMLSelectElement>) => {
    const { name, value } = e.target;
    setFormData(prev => ({ ...prev, [name]: value }));
  };

  const handleSubmit = async (e: React.FormEvent) => {
    // Prevent the default page reload
    e.preventDefault();
    setLoading(true);

    // New Webhook URL provided by user
    const webhookUrl = 'https://services.leadconnectorhq.com/hooks/hESFYMsZ72wDGoalXSvh/webhook-trigger/cf1cf377-336f-42f1-9b71-78cd3f10d9ea';

    try {
      const response = await fetch(webhookUrl, {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
        },
        body: JSON.stringify({
          ...formData,
          source: 'Website Consultation Form',
          submittedAt: new Date().toISOString(),
        }),
      });

      if (response.ok) {
        // On success, hide the form and show the thank you message
        setSubmitted(true);
        setFormData({
          fullName: '',
          email: '',
          phone: '',
          address: '',
          service: '',
        });
      } else {
        console.error('Submission failed with status:', response.status);
        alert('There was an issue submitting your request. Please try again or call us directly.');
      }
    } catch (error) {
      console.error('Error submitting form:', error);
      alert('Could not connect to the server. Please check your internet connection.');
    } finally {
      setLoading(false);
    }
  };

  return (
    <div className="container mx-auto">
      <div className="bg-secondary/95 backdrop-blur-xl border border-white/10 p-6 md:p-10 rounded-3xl shadow-2xl overflow-hidden relative group min-h-[400px]">
        <div className="absolute -top-24 -left-24 w-48 h-48 bg-primary/20 blur-[100px] rounded-full"></div>
        
        {submitted ? (
          <div className="relative z-10 flex flex-col items-center justify-center h-full text-center py-20 animate-in fade-in zoom-in duration-500">
            <div className="w-20 h-20 bg-primary/20 rounded-full flex items-center justify-center mb-6">
              <CheckCircle2 className="text-primary" size={48} />
            </div>
            <h2 className="text-white text-3xl font-bold mb-2">Thank You!</h2>
            <p className="text-white/60">Thank You! We will contact you soon.</p>
            <button 
              onClick={() => setSubmitted(false)}
              className="mt-8 text-primary font-bold hover:underline"
            >
              Send another request
            </button>
          </div>
        ) : (
          <div className="relative z-10 flex flex-col md:flex-row items-center justify-between gap-8">
            <div className="w-full md:w-1/3">
              <h3 className="text-primary font-bold text-xl mb-2">Space Insulation</h3>
              <h2 className="text-white text-4xl font-extrabold tracking-tight">Book Free Estimate</h2>
              <p className="text-white/60 mt-4 text-sm leading-relaxed">
                Fill in your details and one of our qualified energy consultants will contact you to schedule a professional audit of your property.
              </p>
            </div>

            <form onSubmit={handleSubmit} className="w-full md:w-2/3 grid grid-cols-1 sm:grid-cols-2 gap-4">
              <div className="space-y-4">
                <input 
                  required
                  name="fullName"
                  value={formData.fullName}
                  onChange={handleChange}
                  type="text" 
                  placeholder="Your Full Name" 
                  className="w-full bg-black/30 border border-white/10 px-5 py-4 rounded-xl text-white focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all"
                />
                <input 
                  required
                  name="email"
                  value={formData.email}
                  onChange={handleChange}
                  type="email" 
                  placeholder="Email Address" 
                  className="w-full bg-black/30 border border-white/10 px-5 py-4 rounded-xl text-white focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all"
                />
                <input 
                  required
                  name="phone"
                  value={formData.phone}
                  onChange={handleChange}
                  type="tel" 
                  placeholder="Your Phone" 
                  className="w-full bg-black/30 border border-white/10 px-5 py-4 rounded-xl text-white focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all"
                />
              </div>
              <div className="space-y-4">
                <input 
                  required
                  name="address"
                  value={formData.address}
                  onChange={handleChange}
                  type="text" 
                  placeholder="Your Address" 
                  className="w-full bg-black/30 border border-white/10 px-5 py-4 rounded-xl text-white focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all"
                />
                <select 
                  required 
                  name="service"
                  value={formData.service}
                  onChange={handleChange}
                  className="w-full bg-black/30 border border-white/10 px-5 py-4 rounded-xl text-white/50 focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all appearance-none cursor-pointer"
                >
                  <option value="">- Select Service -</option>
                  <option value="attic">Attic Insulation</option>
                  <option value="energy-audit">Home Energy Audit</option>
                  <option value="air-sealing">Air Sealing</option>
                  <option value="heat-pump">Heat Pump</option>
                </select>
                <div className="bg-white/5 p-4 rounded-xl flex items-center space-x-3 border border-white/5">
                  <input type="checkbox" required className="w-5 h-5 accent-primary" />
                  <span className="text-white/70 text-xs">I confirm these details are correct</span>
                </div>
              </div>
              <div className="sm:col-span-2 mt-4">
                <button 
                  disabled={loading}
                  type="submit" 
                  className="w-full bg-primary text-white py-5 rounded-2xl font-black text-xl hover:bg-primary/90 transition-all hover:scale-[1.01] active:scale-95 shadow-[0_15px_30px_rgba(131,183,53,0.3)] uppercase tracking-widest flex items-center justify-center disabled:opacity-70 disabled:cursor-not-allowed"
                >
                  {loading ? (
                    <>
                      <Loader2 className="mr-2 animate-spin" size={24} />
                      SENDING...
                    </>
                  ) : (
                    'BOOK NOW'
                  )}
                </button>
              </div>
            </form>
          </div>
        )}
      </div>
    </div>
  );
};

export default ConsultationForm;