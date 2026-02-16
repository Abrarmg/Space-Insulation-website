import React from 'react';
import { Mail, MapPin, Phone, Instagram, Facebook, ArrowRight } from 'lucide-react';
import Logo from './Logo';
import { PageID } from '../App';

interface FooterProps {
  onNavigate: (page: PageID) => void;
}

const Footer: React.FC<FooterProps> = ({ onNavigate }) => {
  const handleLinkClick = (e: React.MouseEvent, id: PageID) => {
    e.preventDefault();
    onNavigate(id);
  };

  const quickLinks: { label: string; id: PageID }[] = [
    { label: 'Home', id: 'home' },
    { label: 'Services', id: 'services' },
    { label: 'About Us', id: 'about' },
    { label: 'Contact Us', id: 'contact' },
    { label: 'Blog', id: 'blog' },
  ];

  return (
    <footer className="bg-secondary pt-24 text-white">
      {/* Newsletter / CTA Top */}
      <div className="container mx-auto px-4 pb-16 border-b border-white/10">
        <div className="flex flex-col lg:flex-row items-center justify-between gap-8">
          <div className="lg:w-1/2">
            <h2 className="text-3xl md:text-4xl font-black font-heading mb-4">Subscribe for Future Updates</h2>
            <p className="text-white/50">Provide us with your email to receive energy-saving tips and exclusive quotes.</p>
          </div>
          <div className="w-full lg:w-1/2 flex">
             <input 
               type="email" 
               placeholder="Email Address" 
               className="flex-grow bg-white/5 border border-white/10 px-6 py-4 rounded-l-2xl outline-none focus:border-primary transition-all text-white"
             />
             <button className="bg-primary px-8 rounded-r-2xl font-bold flex items-center group active:scale-95 transition-transform whitespace-nowrap">
               SUBSCRIBE <ArrowRight size={18} className="ml-2 group-hover:translate-x-1 transition-transform" />
             </button>
          </div>
        </div>
      </div>

      {/* Main Footer Content */}
      <div className="container mx-auto px-4 py-20">
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
          {/* Brand */}
          <div className="space-y-6">
             <div className="flex flex-col items-start -ml-2">
                <Logo className="h-28 md:h-36" />
             </div>
             <p className="text-white/50 text-sm leading-relaxed">
               With over two decades of experience, Space Insulation stands as your trusted partner for comprehensive eco solutions in Ontario.
             </p>
             <div className="flex space-x-4">
                <a 
                  href="https://www.instagram.com/space_insulation0/" 
                  target="_blank" 
                  rel="noopener noreferrer" 
                  className="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center hover:bg-primary transition-colors" 
                  aria-label="Instagram"
                >
                  <Instagram size={20} />
                </a>
                <a 
                  href="https://web.facebook.com/profile.php?id=61564451241982" 
                  target="_blank" 
                  rel="noopener noreferrer" 
                  className="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center hover:bg-primary transition-colors" 
                  aria-label="Facebook"
                >
                  <Facebook size={20} />
                </a>
             </div>
          </div>

          {/* Quick Links */}
          <div>
            <h4 className="text-xl font-bold mb-8 relative inline-block">
              Quick Links
              <span className="absolute -bottom-2 left-0 w-1/2 h-1 bg-primary rounded-full"></span>
            </h4>
            <ul className="space-y-4 text-white/60 text-sm">
              {quickLinks.map((link) => (
                <li key={link.label}>
                  <a 
                    href={`#${link.id}`} 
                    onClick={(e) => handleLinkClick(e, link.id)}
                    className="hover:text-primary transition-colors text-left block"
                  >
                    {link.label}
                  </a>
                </li>
              ))}
            </ul>
          </div>

          {/* Services */}
          <div>
            <h4 className="text-xl font-bold mb-8 relative inline-block">
              Services
              <span className="absolute -bottom-2 left-0 w-1/2 h-1 bg-primary rounded-full"></span>
            </h4>
            <ul className="space-y-4 text-white/60 text-sm">
              <li><a href="#services" onClick={(e) => handleLinkClick(e, 'services')} className="hover:text-primary transition-colors block">Attic Insulation</a></li>
              <li><a href="#services" onClick={(e) => handleLinkClick(e, 'services')} className="hover:text-primary transition-colors block">Energy Audit</a></li>
              <li><a href="#services" onClick={(e) => handleLinkClick(e, 'services')} className="hover:text-primary transition-colors block">Heat Pumps</a></li>
              <li><a href="#services" onClick={(e) => handleLinkClick(e, 'services')} className="hover:text-primary transition-colors block">Air Sealing</a></li>
              <li><a href="#services" onClick={(e) => handleLinkClick(e, 'services')} className="hover:text-primary transition-colors block">Insulation Removal</a></li>
            </ul>
          </div>

          {/* Contact Info */}
          <div>
            <h4 className="text-xl font-bold mb-8 relative inline-block">
              Contact Us
              <span className="absolute -bottom-2 left-0 w-1/2 h-1 bg-primary rounded-full"></span>
            </h4>
            <ul className="space-y-6">
              <li className="flex items-start">
                <MapPin className="text-primary mr-4 flex-shrink-0" size={20} />
                <span className="text-white/60 text-sm">1070 Major MacKenzie Dr., Richmond Hill, ON L4S 1P3, Canada</span>
              </li>
              <li className="flex items-center">
                <Phone className="text-primary mr-4 flex-shrink-0" size={20} />
                <span className="text-white/60 text-sm">(647) 704-9021</span>
              </li>
              <li className="flex items-center">
                <Mail className="text-primary mr-4 flex-shrink-0" size={20} />
                <span className="text-white/60 text-sm">info@spaceinsulation.ca</span>
              </li>
            </ul>
          </div>
        </div>
      </div>

      {/* Copyright */}
      <div className="bg-black/20 py-8">
        <div className="container mx-auto px-4 text-center text-white/30 text-xs">
          <p>© 2025 Space Insulation. All Rights Reserved. Designed for Excellence.</p>
        </div>
      </div>
    </footer>
  );
};

export default Footer;