import React, { useState } from 'react';
import { Calendar, User, ArrowRight, ArrowLeft, Clock, Share2 } from 'lucide-react';
import { PageID } from '../App';

interface BlogPost {
  id: number;
  title: string;
  excerpt: string;
  category: string;
  date: string;
  author: string;
  image: string;
  readTime: string;
  content: React.ReactNode;
}

const POSTS: BlogPost[] = [
  {
    id: 1,
    title: "Top 5 Benefits of Attic Insulation for Ontario Winters",
    excerpt: "Discover how upgrading your attic's thermal barrier can save you hundreds on heating bills this season.",
    category: "Efficiency",
    date: "May 12, 2025",
    author: "Technical Team",
    readTime: "5 min read",
    image: "https://images.unsplash.com/photo-1621905235858-62bfd732ee19?q=80&w=1200&auto=format&fit=crop",
    content: (
      <>
        <p className="mb-6 text-lg leading-relaxed text-secondary/80">
          Living in Ontario means dealing with some of the harshest winters in North America. As temperatures drop, your home's heating system works overtime to keep you comfortable. However, without proper attic insulation, much of that expensive heat is escaping directly through your roof via the "stack effect."
        </p>
        
        <h3 className="text-2xl font-black text-secondary mb-4 mt-8">1. Significant Cost Savings</h3>
        <p className="mb-6 leading-relaxed text-secondary/70">
          The most immediate benefit of upgrading your attic insulation to R-60 is the reduction in energy bills. Heat rises, and an under-insulated attic acts like an open window. By sealing this escape route, homeowners in the GTA often see heating cost reductions of up to 25% immediately after installation.
        </p>

        <h3 className="text-2xl font-black text-secondary mb-4 mt-8">2. Extended HVAC Lifespan</h3>
        <p className="mb-6 leading-relaxed text-secondary/70">
          When your furnace runs constantly to compensate for heat loss, it wears out faster. Proper insulation keeps the heat in, allowing your HVAC system to cycle less frequently. This not only saves fuel but can add years to the life of your expensive furnace equipment.
        </p>

        <h3 className="text-2xl font-black text-secondary mb-4 mt-8">3. Prevention of Ice Dams</h3>
        <p className="mb-6 leading-relaxed text-secondary/70">
          Ice dams form when heat escapes into the attic, melts snow on the roof, and then refreezes at the eaves. This can tear off gutters and force water under shingles, leading to costly leaks. Proper insulation keeps the roof deck cool, preventing this cycle entirely.
        </p>

        <h3 className="text-2xl font-black text-secondary mb-4 mt-8">4. Consistent Indoor Comfort</h3>
        <p className="mb-6 leading-relaxed text-secondary/70">
          Do you have upstairs bedrooms that are always colder than the main floor? This is often due to uneven or insufficient insulation. Upgrading ensures a consistent temperature throughout your home, eliminating drafts and cold spots that make winter miserable.
        </p>

        <div className="bg-primary/10 p-6 rounded-2xl border-l-4 border-primary my-8">
          <p className="font-bold text-secondary">Pro Tip:</p>
          <p className="text-sm text-secondary/70 mt-2">Check your current insulation depth. If you can see the floor joists in your attic, you likely have less than R-20 insulation and are due for an upgrade.</p>
        </div>
      </>
    )
  },
  {
    id: 2,
    title: "Understanding R-Value: What R-60 Means for Your Home",
    excerpt: "Demystifying insulation ratings and why R-60 is the new gold standard for energy codes.",
    category: "Technical",
    date: "April 28, 2025",
    author: "Mike Stevens",
    readTime: "4 min read",
    image: "https://images.unsplash.com/photo-1504328345606-18bbc8c9d7d1?q=80&w=1200&auto=format&fit=crop",
    content: (
      <>
        <p className="mb-6 text-lg leading-relaxed text-secondary/80">
          When shopping for insulation, you’ll constantly hear the term "R-Value." But what does it actually mean, and why is R-60 the magic number for Ontario homeowners?
        </p>

        <h3 className="text-2xl font-black text-secondary mb-4 mt-8">The Resistance Factor</h3>
        <p className="mb-6 leading-relaxed text-secondary/70">
          R-Value stands for "Thermal Resistance." It measures a material's ability to resist the flow of heat. The higher the number, the better the material is at keeping heat inside during winter and outside during summer.
        </p>

        <h3 className="text-2xl font-black text-secondary mb-4 mt-8">Why R-60?</h3>
        <p className="mb-6 leading-relaxed text-secondary/70">
          In the past, building codes required R-32 or R-40. However, with rising energy costs and climate awareness, the Ontario Building Code has evolved. R-60 is now recommended for attic spaces to achieve optimal energy efficiency. This typically translates to about 18-22 inches of blown-in insulation, depending on the material used.
        </p>

        <div className="grid grid-cols-1 md:grid-cols-2 gap-4 my-8">
           <div className="bg-gray-50 p-4 rounded-xl border border-gray-100">
              <span className="block font-black text-primary text-xl mb-1">R-30</span>
              <span className="text-xs text-secondary/60 uppercase tracking-wider">Older Homes (Pre-1990)</span>
           </div>
           <div className="bg-secondary text-white p-4 rounded-xl border border-secondary">
              <span className="block font-black text-primary text-xl mb-1">R-60</span>
              <span className="text-xs text-white/60 uppercase tracking-wider">Current Standard</span>
           </div>
        </div>

        <p className="mb-6 leading-relaxed text-secondary/70">
          Upgrading to R-60 isn't just about compliance; it's about comfort. A well-insulated attic stabilizes the temperature of the living spaces below, reducing the load on your air conditioner in July and your furnace in January.
        </p>
      </>
    )
  },
  {
    id: 3,
    title: "Blown-In vs. Batt Insulation: Which is Better?",
    excerpt: "A comprehensive comparison of the two most common installation methods.",
    category: "Comparison",
    date: "April 15, 2025",
    author: "Sarah Jenkins",
    readTime: "6 min read",
    image: "https://images.unsplash.com/photo-1599694239841-381a8f276228?q=80&w=1200&auto=format&fit=crop",
    content: (
      <>
        <p className="mb-6 text-lg leading-relaxed text-secondary/80">
          Homeowners often ask us: "Should I use the pink rolls or the fluffy stuff?" It's a valid question. While both fiberglass batts and blown-in cellulose/fiberglass have their place, they perform very differently in an attic environment.
        </p>

        <h3 className="text-2xl font-black text-secondary mb-4 mt-8">The Coverage Challenge</h3>
        <p className="mb-6 leading-relaxed text-secondary/70">
          Attics are not perfect squares. They have truss cords, electrical wires, pot lights, and plumbing stacks. 
          <br /><br />
          <strong>Batt Insulation:</strong> Think of this like laying a blanket. If you have to cut around a pipe or a wire, you leave small gaps. Over an entire attic, these small gaps add up to significant heat loss.
          <br /><br />
          <strong>Blown-In Insulation:</strong> This is like filling the space with liquid. The material flows around obstructions, filling every nook and cranny. This creates a monolithic thermal blanket with zero gaps.
        </p>

        <h3 className="text-2xl font-black text-secondary mb-4 mt-8">Speed and Efficiency</h3>
        <p className="mb-6 leading-relaxed text-secondary/70">
          Blown-in insulation is typically faster to install. A professional crew can upgrade an average home in 3-4 hours. Laying batts properly can take much longer and requires crawling into tight eaves, which often leads to poor installation quality in hard-to-reach areas.
        </p>

        <div className="bg-gray-50 p-6 rounded-2xl border border-gray-100 my-8">
          <h4 className="font-bold text-secondary mb-2">Verdict</h4>
          <p className="text-secondary/70">For open wall cavities during construction, batts are great. But for attic retrofits, <strong>blown-in insulation is superior</strong> due to its ability to provide 100% gap-free coverage.</p>
        </div>
      </>
    )
  }
];

interface BlogProps {
  isPreview?: boolean;
  onNavigate?: (page: PageID) => void;
}

const Blog: React.FC<BlogProps> = ({ isPreview = false, onNavigate }) => {
  const [selectedPost, setSelectedPost] = useState<BlogPost | null>(null);

  const handlePostClick = (post: BlogPost) => {
    if (isPreview && onNavigate) {
      onNavigate('blog');
      // Scroll to top is handled by App.tsx, but logically we just switch views
    } else {
      setSelectedPost(post);
      window.scrollTo({ top: 0, behavior: 'smooth' });
    }
  };

  if (selectedPost && !isPreview) {
    return (
      <article className="pt-24 pb-24 bg-white min-h-screen">
        {/* Progress Bar */}
        <div className="fixed top-0 left-0 w-full h-1 bg-gray-100 z-50">
           <div className="h-full bg-primary w-full origin-left animate-[grow_1s_ease-out]"></div>
        </div>

        <div className="container mx-auto px-4 max-w-4xl">
          <button 
            onClick={() => setSelectedPost(null)}
            className="group flex items-center text-secondary/50 hover:text-primary font-bold uppercase tracking-widest text-xs mb-8 transition-colors"
          >
            <div className="bg-gray-100 p-2 rounded-full mr-3 group-hover:bg-primary group-hover:text-white transition-all">
               <ArrowLeft size={16} />
            </div>
            Back to Articles
          </button>

          <header className="mb-12">
             <div className="flex items-center space-x-4 mb-6">
                <span className="px-4 py-1 bg-primary/10 text-primary rounded-full text-[10px] font-black uppercase tracking-widest">
                  {selectedPost.category}
                </span>
                <span className="flex items-center text-secondary/40 text-xs font-bold uppercase tracking-wider">
                  <Clock size={14} className="mr-1" /> {selectedPost.readTime}
                </span>
             </div>
             
             <h1 className="text-3xl md:text-5xl lg:text-6xl font-black font-heading text-secondary leading-tight mb-8">
               {selectedPost.title}
             </h1>

             <div className="flex items-center justify-between border-y border-gray-100 py-6">
                <div className="flex items-center space-x-4">
                   <div className="w-12 h-12 bg-gray-100 rounded-full flex items-center justify-center">
                      <User className="text-secondary/50" />
                   </div>
                   <div>
                      <p className="text-secondary font-bold text-sm">{selectedPost.author}</p>
                      <p className="text-secondary/40 text-xs uppercase tracking-wider">{selectedPost.date}</p>
                   </div>
                </div>
                <button className="text-secondary/40 hover:text-primary transition-colors">
                   <Share2 size={20} />
                </button>
             </div>
          </header>

          <div className="rounded-[2rem] overflow-hidden mb-12 shadow-2xl">
             <img src={selectedPost.image} alt={selectedPost.title} className="w-full h-[400px] object-cover" />
          </div>

          <div className="prose prose-lg prose-headings:font-heading prose-headings:font-black prose-p:text-secondary/70 prose-a:text-primary max-w-none">
            {selectedPost.content}
          </div>

          <div className="mt-20 pt-10 border-t border-gray-100 text-center">
             <h3 className="text-2xl font-black text-secondary mb-6">Enjoyed this article?</h3>
             <button 
               onClick={() => setSelectedPost(null)}
               className="bg-secondary text-white px-8 py-3 rounded-full font-bold uppercase tracking-widest text-xs hover:bg-primary transition-colors"
             >
               Read More Posts
             </button>
          </div>
        </div>
      </article>
    );
  }

  const displayPosts = isPreview ? POSTS.slice(0, 3) : POSTS;

  return (
    <section className={`bg-white ${isPreview ? 'py-24' : 'py-12'}`} id="blog">
      <div className="container mx-auto px-4">
        {isPreview && (
          <div className="flex flex-col md:flex-row justify-between items-end mb-16">
            <div className="reveal">
              <h3 className="text-primary font-bold uppercase tracking-[0.4em] text-xs mb-4">Knowledge Base</h3>
              <h2 className="text-secondary text-5xl font-black font-heading uppercase tracking-tighter">
                Latest <span className="text-primary italic">News</span>
              </h2>
            </div>
            {onNavigate && (
              <button 
                onClick={() => onNavigate('blog')}
                className="hidden md:flex items-center space-x-2 text-secondary font-bold uppercase tracking-widest text-xs hover:text-primary transition-colors mt-6 md:mt-0"
              >
                <span>View All Articles</span>
                <ArrowRight size={16} />
              </button>
            )}
          </div>
        )}

        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          {displayPosts.map((post, i) => (
            <article 
              key={post.id} 
              onClick={() => handlePostClick(post)}
              className="group cursor-pointer flex flex-col h-full reveal"
              style={{ transitionDelay: `${i * 100}ms` }}
            >
              <div className="relative h-64 rounded-[2rem] overflow-hidden mb-6 shadow-lg">
                <img 
                  src={post.image} 
                  alt={post.title} 
                  className="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                />
                <div className="absolute inset-0 bg-secondary/20 group-hover:bg-transparent transition-colors"></div>
                <div className="absolute top-4 left-4 bg-white/90 backdrop-blur-sm px-4 py-2 rounded-full text-[10px] font-black uppercase tracking-widest text-secondary">
                  {post.category}
                </div>
              </div>

              <div className="flex items-center space-x-4 text-xs text-secondary/40 font-bold uppercase tracking-wider mb-4">
                <span className="flex items-center"><Calendar size={12} className="mr-1" /> {post.date}</span>
                <span className="flex items-center"><Clock size={12} className="mr-1" /> {post.readTime}</span>
              </div>

              <h3 className="text-2xl font-black text-secondary leading-tight mb-4 group-hover:text-primary transition-colors">
                {post.title}
              </h3>
              
              <p className="text-secondary/60 text-sm leading-relaxed mb-6 line-clamp-3 flex-grow">
                {post.excerpt}
              </p>

              <div className="flex items-center text-primary font-black uppercase tracking-widest text-xs group-hover:translate-x-2 transition-transform">
                Read Article <ArrowRight size={14} className="ml-2" />
              </div>
            </article>
          ))}
        </div>

        {isPreview && onNavigate && (
           <div className="mt-12 text-center md:hidden">
              <button 
                onClick={() => onNavigate('blog')}
                className="bg-secondary text-white px-8 py-3 rounded-full font-bold uppercase tracking-widest text-xs hover:bg-primary transition-colors shadow-xl"
              >
                View All Articles
              </button>
           </div>
        )}
      </div>
    </section>
  );
};

export default Blog;