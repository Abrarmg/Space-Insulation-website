
import React from 'react';
import { ShoppingCart } from 'lucide-react';

const PRODUCTS = [
  {
    name: "Safe’n’sound 3×16 – Rockwool",
    price: "$80.50",
    category: "Insulation Material",
    img: "https://confirmedc.com/wp-content/uploads/2025/04/Johns-Manville-R24-Fibreglass-Batt-Insulation-38.51-Sq.-Ft-1.jpg"
  },
  {
    name: "Owens Corning R-22 Pink Batt",
    price: "$51.75",
    category: "Insulation Accessories",
    img: "https://confirmedc.com/wp-content/uploads/2025/02/p_1000525606.jpg"
  },
  {
    name: "Propink Blown-in Insulation",
    price: "$60.00",
    category: "Insulation Material",
    img: "https://confirmedc.com/wp-content/uploads/2024/10/6202220_loosefill_propink__front_1131120_en_6_.jpg"
  },
  {
    name: "Northern White Fiber Glass",
    price: "$45.00",
    category: "Insulation Material",
    img: "https://confirmedc.com/wp-content/uploads/2024/10/Johns-Manville-R24-Fibreglass-Batt-Insulation-38.51-Sq.-Ft.jpg"
  }
];

const ProductCarousel: React.FC = () => {
  return (
    <section className="py-24 bg-white">
      <div className="container mx-auto px-4">
        <div className="flex flex-col md:flex-row justify-between items-end mb-12">
          <div>
            <h3 className="text-primary font-bold uppercase tracking-widest text-sm mb-4">Our Supplies</h3>
            <h2 className="text-secondary text-4xl font-black font-heading">Featured Materials</h2>
          </div>
          <button className="mt-4 md:mt-0 px-8 py-3 bg-secondary text-white rounded-full font-bold hover:bg-primary transition-all">
            VIEW ALL PRODUCTS
          </button>
        </div>

        <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
          {PRODUCTS.map((product, i) => (
            <div key={i} className="group cursor-pointer">
              <div className="relative aspect-square rounded-3xl overflow-hidden bg-gray-100 mb-4 border border-gray-100">
                <img src={product.img} alt={product.name} className="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" />
                <div className="absolute inset-0 bg-secondary/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                  <button className="bg-white text-secondary p-4 rounded-full shadow-xl hover:bg-primary hover:text-white transition-all transform translate-y-10 group-hover:translate-y-0 duration-300">
                    <ShoppingCart size={24} />
                  </button>
                </div>
              </div>
              <p className="text-primary text-xs font-bold uppercase tracking-wider mb-1">{product.category}</p>
              <h3 className="text-secondary font-bold text-lg mb-2 group-hover:text-primary transition-colors">{product.name}</h3>
              <p className="text-secondary/40 font-black text-xl">{product.price}</p>
            </div>
          ))}
        </div>
      </div>
    </section>
  );
};

export default ProductCarousel;
