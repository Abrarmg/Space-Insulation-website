import React from 'react';

interface LogoProps {
  className?: string;
}

const Logo: React.FC<LogoProps> = ({ className = "h-12" }) => {
  return (
    <div className={`flex items-center justify-center ${className} select-none`}>
      <img 
        src="https://i.ibb.co/sJNHBPv6/Gemini-Generated-Image-mvesvwmvesvwmves-removebg-preview.png" 
        alt="Space Insulation Logo" 
        className="h-full w-auto object-contain drop-shadow-lg"
      />
    </div>
  );
};

export default Logo;