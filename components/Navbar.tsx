import React, { useState, useEffect } from 'react';
import { Phone, Menu, X } from 'lucide-react';
import Logo from './Logo';
import { PageID } from '../App';

interface NavbarProps {
  currentPage: PageID;
  onNavigate: (page: PageID) => void;
}

const Navbar: React.FC<NavbarProps> = ({ currentPage, onNavigate }) => {
  const [isScrolled, setIsScrolled] = useState(false);
  const [isMobileMenuOpen, setIsMobileMenuOpen] = useState(false);

  useEffect(() => {
    const handleScroll = () => {
      setIsScrolled(window.scrollY > 50);
    };
    window.addEventListener('scroll', handleScroll);
    return () => window.removeEventListener('scroll', handleScroll);
  }, []);

  const navItems: { label: string; id: PageID }[] = [
    { label: 'Home', id: 'home' },
    { label: 'Services', id: 'services' },
    { label: 'About Us', id: 'about' },
    { label: 'Contact Us', id: 'contact' },
    { label: 'Blog', id: 'blog' },
  ];

  const handleLinkClick = (e: React.MouseEvent, id: PageID) => {
    e.preventDefault();
    onNavigate(id);
    setIsMobileMenuOpen(false);
  };

  return (
    <header className={`fixed top-0 left-0 right-0 z-[100] transition-all duration-500 ${isScrolled || currentPage !== 'home' ? 'backdrop-blur-header shadow-xl py-2 border-b border-white/5' : 'bg-transparent py-4'}`}>
      <div className="container mx-auto px-4">
        {(!isScrolled && currentPage === 'home' && !isMobileMenuOpen) && (
          <div className="hidden lg:flex justify-end items-center space-x-6 pb-2 border-b border-white/10 mb-2">
             <span className="text-white text-xs font-semibold flex items-center">
                <Phone size={12} className="mr-2 text-primary" /> (647) 704-9021
             </span>
          </div>
        )}

        <div className="flex items-center justify-between">
          <div className="flex items-center">
            <a 
              href="#home" 
              onClick={(e) => handleLinkClick(e, 'home')}
              className="group flex items-center"
            >
              <Logo className={`transition-all duration-300 group-hover:scale-105 ${isScrolled || currentPage !== 'home' ? 'h-24 md:h-26' : 'h-28 md:h-34'}`} />
            </a>
          </div>

          <nav className="hidden lg:flex items-center space-x-10">
            {navItems.map((item) => (
              <a 
                key={item.label}
                href={`#${item.id}`} 
                onClick={(e) => handleLinkClick(e, item.id)}
                className={`text-sm uppercase font-bold tracking-widest transition-colors ${currentPage === item.id ? 'text-primary' : 'text-white hover:text-primary'}`}
              >
                {item.label}
              </a>
            ))}
          </nav>

          <div className="flex items-center space-x-4">
            <a href="tel:6477049021" className="hidden sm:flex items-center bg-primary text-white px-8 py-3 rounded-full font-black text-sm hover:bg-primary/90 transition-all shadow-lg hover:scale-105 active:scale-95 uppercase tracking-tighter">
               <Phone size={16} className="mr-2" /> <span>Call Today</span>
            </a>
            <button 
              className="lg:hidden text-white p-2"
              onClick={() => setIsMobileMenuOpen(!isMobileMenuOpen)}
            >
              {isMobileMenuOpen ? <X size={32} /> : <Menu size={32} />}
            </button>
          </div>
        </div>
      </div>

      {/* Mobile Menu */}
      <div className={`lg:hidden fixed inset-0 z-[90] bg-secondary transition-all duration-500 ${isMobileMenuOpen ? 'translate-x-0' : 'translate-x-full'}`}>
        <div className="flex justify-end p-8">
           <button onClick={() => setIsMobileMenuOpen(false)} className="text-white">
             <X size={32} />
           </button>
        </div>
        <nav className="flex flex-col p-12 space-y-8 h-[calc(100%-80px)] justify-center">
          {navItems.map((item) => (
            <a 
              key={item.label}
              href={`#${item.id}`} 
              onClick={(e) => handleLinkClick(e, item.id)}
              className={`text-4xl font-black italic transition-colors ${currentPage === item.id ? 'text-primary' : 'text-white hover:text-primary'}`}
            >
              {item.label}
            </a>
          ))}
          <a href="tel:6477049021" className="bg-primary text-white py-6 rounded-3xl text-center text-2xl font-black uppercase tracking-widest">Call Now</a>
        </nav>
      </div>
    </header>
  );
};

export default Navbar;