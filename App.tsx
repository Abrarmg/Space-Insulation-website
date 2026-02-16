import React, { useState, useEffect } from 'react';
import Navbar from './components/Navbar';
import Hero from './components/Hero';
import ConsultationForm from './components/ConsultationForm';
import Intro from './components/Intro';
import About from './components/About';
import AboutDetailed from './components/AboutDetailed';
import Services from './components/Services';
import CostRebate from './components/CostRebate';
import Technology from './components/Technology';
import Process from './components/Process';
import Blog from './components/Blog';
import Trust from './components/Trust';
import Testimonials from './components/Testimonials';
import FAQ from './components/FAQ';
import Footer from './components/Footer';
import LocationMap from './components/LocationMap';

export type PageID = 'home' | 'services' | 'about' | 'contact' | 'blog';

const App: React.FC = () => {
  const [currentPage, setCurrentPage] = useState<PageID>('home');

  const handleNavigate = (page: PageID) => {
    setCurrentPage(page);
    window.scrollTo({ top: 0, behavior: 'instant' });
    window.history.pushState(null, '', `#${page}`);
  };

  useEffect(() => {
    const initialHash = window.location.hash.replace('#', '') as PageID;
    if (['home', 'services', 'about', 'contact', 'blog'].includes(initialHash)) {
      setCurrentPage(initialHash);
    }

    const handlePopState = () => {
      const hash = window.location.hash.replace('#', '') as PageID;
      if (['home', 'services', 'about', 'contact', 'blog'].includes(hash)) {
        setCurrentPage(hash);
      }
    };

    window.addEventListener('popstate', handlePopState);
    return () => window.removeEventListener('popstate', handlePopState);
  }, []);

  const renderPage = () => {
    switch (currentPage) {
      case 'services':
        return (
          <>
            <section className="pt-24 bg-secondary">
               <div className="container mx-auto px-4 py-20 text-center">
                  <h1 className="text-white text-5xl md:text-7xl font-black font-heading uppercase tracking-tighter animate-fade-up">Our <span className="text-primary italic">Services</span></h1>
                  <p className="text-white/40 mt-6 max-w-2xl mx-auto animate-fade-up animation-delay-200">Comprehensive insulation and energy efficiency solutions designed for the unique Ontario climate.</p>
               </div>
            </section>
            <Services onNavigate={handleNavigate} />
            <Technology />
            <Process />
            <CostRebate />
          </>
        );
      case 'about':
        return (
          <>
            <section className="pt-24 bg-white">
               <div className="container mx-auto px-4 py-20 text-center">
                  <h1 className="text-secondary text-5xl md:text-7xl font-black font-heading uppercase tracking-tighter animate-fade-up">About <span className="text-primary italic">Us</span></h1>
                  <p className="text-secondary/40 mt-6 max-w-2xl mx-auto animate-fade-up animation-delay-200">Discover the passion and precision behind Ontario's leading attic insulation specialists.</p>
               </div>
            </section>
            <AboutDetailed />
            <Testimonials />
            <Trust />
            <FAQ />
          </>
        );
      case 'contact':
        return (
          <>
            <section className="pt-32 pb-12 bg-secondary">
               <div className="container mx-auto px-4 text-center">
                  <h1 className="text-white text-5xl md:text-7xl font-black font-heading uppercase tracking-tighter animate-fade-up">Contact <span className="text-primary italic">Us</span></h1>
                  <p className="text-white/40 mt-6 max-w-2xl mx-auto animate-fade-up animation-delay-200">Ready to save? Get in touch for a free professional estimate today.</p>
               </div>
            </section>
            <section id="consultation" className="py-20 bg-white">
               <div className="container mx-auto px-4 max-w-5xl">
                  <ConsultationForm />
               </div>
            </section>
            <section className="py-24 bg-gray-50">
               <div className="container mx-auto px-4 grid grid-cols-1 md:grid-cols-3 gap-8">
                  <div className="bg-white p-10 rounded-3xl shadow-xl text-center hover:shadow-2xl transition-shadow">
                     <div className="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-6 text-primary">
                        <svg className="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                     </div>
                     <h3 className="font-bold text-xl mb-2">Call Us</h3>
                     <p className="text-secondary/50 font-medium">(647) 704-9021</p>
                  </div>
                  <div className="bg-white p-10 rounded-3xl shadow-xl text-center hover:shadow-2xl transition-shadow">
                     <div className="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-6 text-primary">
                        <svg className="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                     </div>
                     <h3 className="font-bold text-xl mb-2">Email Us</h3>
                     <p className="text-secondary/50 font-medium">info@spaceinsulation.ca</p>
                  </div>
                  <div className="bg-white p-10 rounded-3xl shadow-xl text-center hover:shadow-2xl transition-shadow">
                     <div className="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-6 text-primary">
                        <svg className="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                     </div>
                     <h3 className="font-bold text-xl mb-2">Visit Us</h3>
                     <p className="text-secondary/50 font-medium">1070 Major MacKenzie Dr., Richmond Hill, ON L4S 1P3</p>
                  </div>
               </div>
            </section>
            <LocationMap />
          </>
        );
      case 'blog':
        return (
          <>
            <section className="pt-24 bg-gray-50">
               <div className="container mx-auto px-4 py-20 text-center">
                  <h1 className="text-secondary text-5xl md:text-7xl font-black font-heading uppercase tracking-tighter animate-fade-up">Energy <span className="text-primary italic">Blog</span></h1>
                  <p className="text-secondary/40 mt-6 max-w-2xl mx-auto animate-fade-up animation-delay-200">Stay informed with the latest tips, guides, and news on home energy efficiency and insulation technology.</p>
               </div>
            </section>
            {/* Main Blog Page - No Preview Mode */}
            <Blog isPreview={false} />
            <section className="py-24 bg-white">
               <div className="container mx-auto px-4 text-center">
                  <h2 className="text-3xl font-bold mb-8">Looking for specific advice?</h2>
                  <button 
                    onClick={() => handleNavigate('contact')}
                    className="bg-primary text-white px-12 py-5 rounded-full font-black uppercase tracking-widest hover:scale-105 transition-transform inline-block shadow-xl"
                  >
                    Contact an expert
                  </button>
               </div>
            </section>
          </>
        );
      case 'home':
      default:
        return (
          <>
            <Hero onNavigate={handleNavigate} />
            <section id="consultation" className="relative -mt-16 z-20 px-4">
               <ConsultationForm />
            </section>
            <Intro />
            <Services onNavigate={handleNavigate} />
            <About />
            <Testimonials />
            <Trust />
            {/* Home Page - Preview Mode */}
            <Blog isPreview={true} onNavigate={handleNavigate} />
            <FAQ />
          </>
        );
    }
  };

  return (
    <div className="flex flex-col min-h-screen scroll-smooth">
      <Navbar currentPage={currentPage} onNavigate={handleNavigate} />
      <main className="flex-grow">
        {renderPage()}
      </main>
      <Footer onNavigate={handleNavigate} />
    </div>
  );
};

export default App;