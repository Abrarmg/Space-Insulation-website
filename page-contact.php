<?php
/* Template Name: Contact Page */
get_header();

// Form Processing
$form_status = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['consultation_form'])) {
    // Sanitize and Validate
    $name = sanitize_text_field($_POST['name']);
    $phone = sanitize_text_field($_POST['phone']);
    $address = sanitize_text_field($_POST['address']);
    $service = sanitize_text_field($_POST['service']);
    
    // Basic validation
    if (!empty($name) && !empty($phone)) {
        // Send Email
        $to = 'ibrarsargana7840@gmail.com';
        $subject = 'New Consultation Request from ' . $name;
        $message = "Name: $name\nPhone: $phone\nAddress: $address\nService: $service";
        $headers = array('Content-Type: text/plain; charset=UTF-8');
        
        if (wp_mail($to, $subject, $message, $headers)) {
            $form_status = 'success';
        } else {
            $form_status = 'error';
        }
    } else {
        $form_status = 'validation_error';
    }
}
?>

<!-- Contact Hero -->
<section class="pt-32 pb-12 bg-secondary">
   <div class="container mx-auto px-4 text-center">
      <h1 class="text-white text-5xl md:text-7xl font-black font-heading uppercase tracking-tighter animate-fade-up">Contact <span class="text-primary italic">Us</span></h1>
      <p class="text-white/40 mt-6 max-w-2xl mx-auto animate-fade-up animation-delay-200">Ready to save? Get in touch for a free professional estimate today.</p>
   </div>
</section>

<!-- Consultation Form Section -->
<section id="consultation" class="py-20 bg-white">
   <div class="container mx-auto px-4 max-w-5xl">
      <!-- Reusing Consultation Form Logic with PHP Processing -->
      <div class="bg-secondary rounded-[3rem] p-8 md:p-12 shadow-2xl relative overflow-hidden reveal">
        <div class="absolute top-0 right-0 w-64 h-64 bg-primary/10 rounded-full blur-[80px] pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 w-48 h-48 bg-white/5 rounded-full blur-[60px] pointer-events-none"></div>
        
        <div class="relative z-10">
          <div class="text-center mb-10">
            <h2 class="text-white text-3xl md:text-4xl font-black font-heading uppercase tracking-tighter mb-4">Get Your Free Estimate</h2>
            <p class="text-white/60">Fill out the form below and our team will contact you within 24 hours.</p>
          </div>

          <?php if ($form_status === 'success'): ?>
          <div class="bg-green-500/20 border border-green-500/50 text-white p-6 rounded-2xl text-center mb-8 animate-fade-in">
            <div class="flex justify-center mb-2">
               <i data-lucide="check-circle" class="w-8 h-8 text-green-400"></i>
            </div>
            <h3 class="font-bold text-xl mb-1">Request Received!</h3>
            <p class="text-white/80 text-sm">Thank you. We will be in touch shortly to schedule your assessment.</p>
          </div>
          <?php endif; ?>

          <form class="space-y-6" action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>#consultation" method="POST">
             <input type="hidden" name="consultation_form" value="1">
             <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
               <div class="space-y-2">
                 <label class="text-white/80 text-xs font-bold uppercase tracking-widest ml-4">Full Name</label>
                 <div class="relative">
                   <input 
                     type="text" 
                     name="name"
                     required
                     class="w-full bg-white/5 border border-white/10 rounded-2xl px-6 py-4 text-white placeholder-white/30 focus:outline-none focus:border-primary focus:bg-white/10 transition-all"
                     placeholder="John Doe"
                   />
                   <i data-lucide="user" class="absolute right-6 top-1/2 -translate-y-1/2 text-white/30 w-5 h-5"></i>
                 </div>
               </div>
               <div class="space-y-2">
                 <label class="text-white/80 text-xs font-bold uppercase tracking-widest ml-4">Phone Number</label>
                 <div class="relative">
                   <input 
                     type="tel" 
                     name="phone"
                     required
                     class="w-full bg-white/5 border border-white/10 rounded-2xl px-6 py-4 text-white placeholder-white/30 focus:outline-none focus:border-primary focus:bg-white/10 transition-all"
                     placeholder="(555) 123-4567"
                   />
                   <i data-lucide="phone" class="absolute right-6 top-1/2 -translate-y-1/2 text-white/30 w-5 h-5"></i>
                 </div>
               </div>
             </div>

             <div class="space-y-2">
               <label class="text-white/80 text-xs font-bold uppercase tracking-widest ml-4">Property Address</label>
               <div class="relative">
                 <input 
                   type="text" 
                   name="address"
                   required
                   class="w-full bg-white/5 border border-white/10 rounded-2xl px-6 py-4 text-white placeholder-white/30 focus:outline-none focus:border-primary focus:bg-white/10 transition-all"
                   placeholder="123 Street Name, City"
                 />
                 <i data-lucide="map-pin" class="absolute right-6 top-1/2 -translate-y-1/2 text-white/30 w-5 h-5"></i>
               </div>
             </div>

             <div class="space-y-2">
               <label class="text-white/80 text-xs font-bold uppercase tracking-widest ml-4">Service Required</label>
               <div class="relative">
                 <select 
                   name="service"
                   class="w-full bg-white/5 border border-white/10 rounded-2xl px-6 py-4 text-white focus:outline-none focus:border-primary focus:bg-white/10 transition-all appearance-none"
                 >
                   <option value="Attic Insulation" class="text-secondary">Attic Insulation (Top-Up)</option>
                   <option value="Insulation Removal" class="text-secondary">Insulation Removal</option>
                   <option value="New Construction" class="text-secondary">New Construction / Renovation</option>
                   <option value="General Inquiry" class="text-secondary">General Inquiry</option>
                 </select>
                 <i data-lucide="chevron-down" class="absolute right-6 top-1/2 -translate-y-1/2 text-white/30 w-5 h-5"></i>
               </div>
             </div>

             <button 
               type="submit"
               class="w-full bg-primary text-white font-black uppercase tracking-widest py-6 rounded-2xl hover:scale-[1.02] active:scale-[0.98] transition-all shadow-xl shadow-primary/20 flex items-center justify-center group"
             >
               Get Free Quote
               <i data-lucide="arrow-right" class="ml-2 group-hover:translate-x-1 transition-transform w-5 h-5"></i>
             </button>
             
             <p class="text-white/30 text-[10px] text-center uppercase tracking-widest mt-4">
               <i data-lucide="lock" class="inline w-3 h-3 mr-1 align-text-bottom"></i> Your information is secure and never shared.
             </p>
          </form>
        </div>
      </div>
   </div>
</section>

<!-- Contact Info Cards -->
<section class="py-24 bg-gray-50">
   <div class="container mx-auto px-4 grid grid-cols-1 md:grid-cols-3 gap-8">
      <!-- Card 1 -->
      <div class="bg-white p-10 rounded-3xl shadow-xl text-center hover:shadow-2xl transition-shadow">
         <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-6 text-primary">
            <i data-lucide="phone" class="w-8 h-8"></i>
         </div>
         <h3 class="font-bold text-xl mb-2">Call Us</h3>
         <p class="text-secondary/50 font-medium">(647) 704-9021</p>
      </div>
      <!-- Card 2 -->
      <div class="bg-white p-10 rounded-3xl shadow-xl text-center hover:shadow-2xl transition-shadow">
         <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-6 text-primary">
            <i data-lucide="mail" class="w-8 h-8"></i>
         </div>
         <h3 class="font-bold text-xl mb-2">Email Us</h3>
         <p class="text-secondary/50 font-medium">info@spaceinsulation.ca</p>
      </div>
      <!-- Card 3 -->
      <div class="bg-white p-10 rounded-3xl shadow-xl text-center hover:shadow-2xl transition-shadow">
         <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-6 text-primary">
            <i data-lucide="map-pin" class="w-8 h-8"></i>
         </div>
         <h3 class="font-bold text-xl mb-2">Visit Us</h3>
         <p class="text-secondary/50 font-medium">1070 Major MacKenzie Dr., Richmond Hill, ON L4S 1P3</p>
      </div>
   </div>
</section>

<!-- Location Map -->
<section class="w-full h-[500px] relative overflow-hidden reveal">
  <iframe
    title="Space Insulation Location"
    class="w-full h-full grayscale-[10%] contrast-[1.05] hover:grayscale-0 transition-all duration-700"
    src="https://maps.google.com/maps?q=1070%20Major%20MacKenzie%20Dr.,%20Richmond%20Hill,%20ON%20L4S%201P3,%20Canada&t=&z=15&ie=UTF8&iwloc=&output=embed"
    frameBorder="0"
    scrolling="no"
    marginHeight="0"
    marginWidth="0"
  ></iframe>
  
  <!-- Floating Info Card -->
  <div class="absolute top-12 left-4 md:left-12 lg:left-24 bg-white/95 backdrop-blur-xl p-8 rounded-[2.5rem] shadow-2xl border border-gray-100 max-w-xs z-10 hidden sm:block">
    <div class="bg-primary/10 w-12 h-12 rounded-2xl flex items-center justify-center mb-6">
      <i data-lucide="map-pin" class="w-6 h-6 text-primary"></i>
    </div>
    <h4 class="text-secondary font-black text-xl uppercase tracking-tighter italic mb-3">Our Office</h4>
    <p class="text-secondary/60 text-sm leading-relaxed mb-6">
      Stop by our Richmond Hill location for expert energy conservation advice and material samples.
    </p>
    <div class="flex items-center text-[10px] font-black uppercase tracking-[0.2em] text-primary">
       <div class="w-2 h-2 bg-primary rounded-full animate-ping mr-3"></div>
       On-Site Consultation Available
    </div>
  </div>

  <!-- Aesthetic Overlay Gradient -->
  <div class="absolute inset-0 pointer-events-none bg-gradient-to-r from-secondary/5 to-transparent"></div>
</section>

<?php get_footer(); ?>
