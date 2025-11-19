import React, { useState } from 'react';
import { Menu, X, ArrowRight, Zap, Cloud, Globe } from 'lucide-react';

// --- Home Component ---
const Home = () => {
  return (
    <div className="min-h-screen bg-gray-50">
      
      {/* Hero Section */}
      <section className="bg-white py-20 md:py-32">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
          <h1 className="text-5xl sm:text-6xl lg:text-7xl font-extrabold text-gray-900 leading-tight">
            Build the Future with <span className="text-indigo-600">Unified Platforms</span>
          </h1>
          <p className="mt-6 text-xl sm:text-2xl text-gray-500 max-w-4xl mx-auto">
            We provide seamless cloud integration and robust digital solutions to transform your enterprise.
          </p>
          <div className="mt-10 flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-6">
            <a 
              href="#features" 
              className="bg-indigo-600 text-white py-3 px-8 rounded-xl text-lg font-semibold shadow-xl hover:bg-indigo-700 transition-all duration-300 transform hover:scale-[1.02] flex items-center justify-center sm:inline-flex"
            >
              Get Started Today
              <ArrowRight className="ml-2 w-5 h-5" />
            </a>
            <a 
              href="#contact" 
              className="bg-white text-indigo-600 border-2 border-indigo-600 py-3 px-8 rounded-xl text-lg font-semibold shadow-md hover:bg-indigo-50 transition-colors duration-300 flex items-center justify-center sm:inline-flex"
            >
              Request a Demo
            </a>
          </div>
        </div>
      </section>

      {/* Features Section */}
      <section id="features" className="py-16 md:py-24 bg-gray-50">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="text-center mb-16">
            <h2 className="text-base text-indigo-600 font-semibold tracking-wide uppercase">Why Choose Us</h2>
            <p className="mt-2 text-3xl sm:text-4xl font-extrabold text-gray-900">
              Technology Built for Scale
            </p>
          </div>

          <div className="grid grid-cols-1 md:grid-cols-3 gap-10">
            {/* Feature 1 */}
            <div className="bg-white p-8 rounded-xl shadow-lg border-t-4 border-indigo-500 hover:shadow-xl transition-shadow duration-300">
              <Zap className="w-10 h-10 text-indigo-600 mb-4 p-2 bg-indigo-100 rounded-full" />
              <h3 className="text-xl font-bold text-gray-900 mb-3">Lightning Fast Performance</h3>
              <p className="text-gray-600">
                Optimized architecture ensures low latency and high availability, capable of handling millions of requests per second.
              </p>
            </div>

            {/* Feature 2 */}
            <div className="bg-white p-8 rounded-xl shadow-lg border-t-4 border-indigo-500 hover:shadow-xl transition-shadow duration-300">
              <Cloud className="w-10 h-10 text-indigo-600 mb-4 p-2 bg-indigo-100 rounded-full" />
              <h3 className="text-xl font-bold text-gray-900 mb-3">Seamless Cloud Integration</h3>
              <p className="text-gray-600">
                Native support for AWS, GCP, and Azure, allowing for true multi-cloud deployment and vendor flexibility.
              </p>
            </div>

            {/* Feature 3 */}
            <div className="bg-white p-8 rounded-xl shadow-lg border-t-4 border-indigo-500 hover:shadow-xl transition-shadow duration-300">
              <Globe className="w-10 h-10 text-indigo-600 mb-4 p-2 bg-indigo-100 rounded-full" />
              <h3 className="text-xl font-bold text-gray-900 mb-3">Global Reach & Security</h3>
              <p className="text-gray-600">
                Built-in compliance and security measures ensure your application meets global standards, protecting data worldwide.
              </p>
            </div>
          </div>
        </div>
      </section>

      {/* Contact Placeholder */}
      <section id="contact" className="py-16 md:py-24 bg-indigo-800">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 className="text-4xl font-extrabold text-white">Ready to Transform?</h2>
            <p className="mt-4 text-xl text-indigo-200 max-w-2xl mx-auto">
                Schedule a consultation with our engineering team today to map out your migration strategy.
            </p>
            <button className="mt-8 bg-white text-indigo-800 py-3 px-10 rounded-xl text-lg font-bold shadow-2xl hover:bg-indigo-50 transition-all duration-300 transform hover:scale-105">
                Contact Sales
            </button>
        </div>
      </section>
      
    </div>
  );
};

// --- Main App Component ---
const App = () => {
  const [isMenuOpen, setIsMenuOpen] = useState(false);

  const toggleMenu = () => {
    setIsMenuOpen(!isMenuOpen);
  };

  return (
    <div className="min-h-screen antialiased">
      {/* Header/Navigation */}
      <header className="sticky top-0 z-50 bg-white shadow-md">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="flex justify-between items-center h-16">
            {/* Logo */}
            <a href="#" className="text-2xl font-black text-indigo-700">
              SYNTHESIS
            </a>
            
            {/* Desktop Navigation */}
            <nav className="hidden md:flex space-x-8">
              <a href="#" className="text-gray-600 hover:text-indigo-600 font-medium transition-colors">Home</a>
              <a href="#features" className="text-gray-600 hover:text-indigo-600 font-medium transition-colors">Services</a>
              <a href="#contact" className="text-gray-600 hover:text-indigo-600 font-medium transition-colors">Contact</a>
            </nav>

            {/* Mobile Menu Button */}
            <button 
              className="md:hidden p-2 rounded-lg text-gray-600 hover:bg-gray-100 transition-colors"
              onClick={toggleMenu}
              aria-label="Toggle navigation menu"
            >
              {isMenuOpen ? <X className="w-6 h-6" /> : <Menu className="w-6 h-6" />}
            </button>
          </div>
        </div>

        {/* Mobile Menu Content (Conditional Rendering) */}
        {isMenuOpen && (
          <div className="md:hidden border-t border-gray-100 pb-2">
            <div className="px-2 pt-2 pb-3 space-y-1 text-center">
              <a 
                href="#" 
                className="block py-2 px-3 rounded-md text-base font-medium text-gray-700 hover:bg-indigo-50"
                onClick={toggleMenu}
              >
                Home
              </a>
              <a 
                href="#features" 
                className="block py-2 px-3 rounded-md text-base font-medium text-gray-700 hover:bg-indigo-50"
                onClick={toggleMenu}
              >
                Services
              </a>
              <a 
                href="#contact" 
                className="block py-2 px-3 rounded-md text-base font-medium text-gray-700 hover:bg-indigo-50"
                onClick={toggleMenu}
              >
                Contact
              </a>
            </div>
          </div>
        )}
      </header>
      
      {/* Render the actual Home content */}
      <Home />

      {/* Footer */}
      <footer className="bg-gray-900 text-white py-8">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <p className="text-sm text-gray-400">
                &copy; 2025 Synthesis Digital. All rights reserved.
            </p>
        </div>
      </footer>
    </div>
  );
};

export default App;
