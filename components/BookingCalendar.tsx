import React, { useState } from 'react';
import { ChevronLeft, ChevronRight, Clock, Calendar as CalendarIcon } from 'lucide-react';

const BookingCalendar: React.FC = () => {
  const [currentDate, setCurrentDate] = useState(new Date());
  const [selectedDate, setSelectedDate] = useState<number | null>(new Date().getDate());

  const daysInMonth = (year: number, month: number) => new Date(year, month + 1, 0).getDate();
  const firstDayOfMonth = (year: number, month: number) => new Date(year, month, 1).getDay();

  const monthNames = ["January", "February", "March", "April", "May", "June",
    "July", "August", "September", "October", "November", "December"
  ];

  const handlePrevMonth = () => {
    setCurrentDate(new Date(currentDate.getFullYear(), currentDate.getMonth() - 1, 1));
  };

  const handleNextMonth = () => {
    setCurrentDate(new Date(currentDate.getFullYear(), currentDate.getMonth() + 1, 1));
  };

  const days = [];
  const totalDays = daysInMonth(currentDate.getFullYear(), currentDate.getMonth());
  const startDay = firstDayOfMonth(currentDate.getFullYear(), currentDate.getMonth());

  // Padding for start of month
  for (let i = 0; i < startDay; i++) {
    days.push(<div key={`pad-${i}`} className="h-12 w-full"></div>);
  }

  // Days of the month
  for (let d = 1; d <= totalDays; d++) {
    const isToday = d === new Date().getDate() && currentDate.getMonth() === new Date().getMonth();
    const isSelected = selectedDate === d;
    const isPast = d < new Date().getDate() && currentDate.getMonth() <= new Date().getMonth();

    days.push(
      <button
        key={d}
        onClick={() => !isPast && setSelectedDate(d)}
        className={`h-12 w-full flex items-center justify-center rounded-xl text-sm font-bold transition-all relative group
          ${isPast ? 'text-gray-200 cursor-not-allowed' : 'text-secondary hover:bg-primary/10'}
          ${isSelected ? 'bg-primary text-white shadow-lg shadow-primary/30 scale-110 z-10' : ''}
          ${isToday && !isSelected ? 'border-2 border-primary text-primary' : ''}
        `}
      >
        {d}
        {!isPast && !isSelected && (
          <span className="absolute bottom-1 left-1/2 -translate-x-1/2 w-1 h-1 bg-primary rounded-full opacity-0 group-hover:opacity-100"></span>
        )}
      </button>
    );
  }

  const timeSlots = ["09:00 AM", "11:00 AM", "01:30 PM", "04:00 PM"];

  return (
    <div className="bg-white rounded-[2.5rem] shadow-2xl border border-gray-100 overflow-hidden reveal">
      <div className="bg-secondary p-8 text-white">
        <div className="flex items-center justify-between mb-6">
          <h4 className="text-xl font-black uppercase tracking-tighter italic">Schedule Visit</h4>
          <div className="flex space-x-2">
            <button onClick={handlePrevMonth} className="p-2 hover:bg-white/10 rounded-lg transition-colors"><ChevronLeft size={20} /></button>
            <button onClick={handleNextMonth} className="p-2 hover:bg-white/10 rounded-lg transition-colors"><ChevronRight size={20} /></button>
          </div>
        </div>
        <div className="text-center">
          <p className="text-primary font-black text-3xl mb-1">{monthNames[currentDate.getMonth()]}</p>
          <p className="text-white/40 font-bold uppercase tracking-widest text-[10px]">{currentDate.getFullYear()}</p>
        </div>
      </div>

      <div className="p-8">
        <div className="grid grid-cols-7 gap-1 mb-4 text-center">
          {['S', 'M', 'T', 'W', 'T', 'F', 'S'].map(day => (
            <div key={day} className="text-[10px] font-black text-secondary/30 uppercase tracking-widest py-2">{day}</div>
          ))}
          {days}
        </div>

        <div className="mt-8 pt-8 border-t border-gray-100">
          <div className="flex items-center space-x-2 mb-4">
            <Clock size={16} className="text-primary" />
            <span className="text-xs font-black uppercase tracking-widest text-secondary">Available Windows</span>
          </div>
          <div className="grid grid-cols-2 gap-3">
            {timeSlots.map(slot => (
              <button key={slot} className="py-3 px-4 rounded-xl border border-gray-100 text-[10px] font-bold text-secondary hover:border-primary hover:text-primary transition-all text-center uppercase tracking-widest">
                {slot}
              </button>
            ))}
          </div>
        </div>

        <div className="mt-8 flex items-center space-x-4 bg-gray-50 p-4 rounded-2xl border border-gray-100">
           <div className="bg-primary/20 p-3 rounded-xl">
              <CalendarIcon className="text-primary" size={20} />
           </div>
           <div>
              <p className="text-[10px] font-black text-secondary/40 uppercase tracking-widest leading-none mb-1">Current selection</p>
              <p className="text-sm font-bold text-secondary">{selectedDate} {monthNames[currentDate.getMonth()]}, {currentDate.getFullYear()}</p>
           </div>
        </div>
      </div>
    </div>
  );
};

export default BookingCalendar;