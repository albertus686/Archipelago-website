<?php include 'common_header.php'; ?>
<div id="loader"><div class="loader-box"><img src="assets/logo.png" class="loader-logo"><div class="loader-text text-white-50">Exporting Sustainable Wood Pellets Worldwide</div></div></div>

<main class="fade-slide-page">

<section 
  class="relative bg-cover bg-center bg-no-repeat min-h-screen flex items-center" /* << KELAS TINGGI & ALIGNMENT */
  style="background-image: url('assets/images/wood_pellet.jpeg'); background-size: cover; background-position: center; background-repeat: no-repeat;">

  <div class="absolute inset-0 bg-black/40"></div> <div class="absolute inset-0 bg-white/10"></div> <div class="relative z-10 container mx-auto px-6 md:px-12 lg:px-20"> 
    <div class="grid lg:grid-cols-2 items-center gap-10">

      <div class="text-white">
        <h1 class="text-5xl md:text-6xl font-extrabold drop-shadow-lg">
          <?php echo t('home_title'); ?>
        </h1>
        <br>
        <p class="text-lg text-gray-200 max-w-lg leading-relaxed">
          <?php echo t('home_sub'); ?>
        </p>
        <br>  
        <a href="products.php?lang=<?php echo $lang_code; ?>" class="px-8 py-3 bg-gradient-to-r from-green-500 to-teal-400 text-white font-semibold rounded-full shadow-lg hover:shadow-2xl hover:scale-105 transition-transform duration-300">
          <?php echo t('explore_products'); ?> 
        </a>
      </div>

      <div class="bg-white/10 backdrop-blur-md rounded-2xl p-8 shadow-2xl border border-white/20 mt-8"> 
        <h3 class="text-3xl font-semibold mb-2 text-white"><?php echo t('Get in Touch') ?: 'Request a Quote'; ?></h3> <p class="text-gray-200 mb-6">
          <?php echo t('We’d love to hear from you! Fill out the form below.') ?: 'Fill out the form below to get a quote.'; ?>
        
        <form class="space-y-4">
          <input type="text" placeholder="Company Name" class="w-full px-4 py-3 rounded-lg bg-white/20 placeholder-gray-200 text-white focus:outline-none focus:ring-2 focus:ring-teal-400">
          <input type="text" placeholder="Full Name" class="w-full px-4 py-3 rounded-lg bg-white/20 placeholder-gray-200 text-white focus:outline-none focus:ring-2 focus:ring-teal-400">
          <input type="email" placeholder="Email Address" class="w-full px-4 py-3 rounded-lg bg-white/20 placeholder-gray-200 text-white focus:outline-none focus:ring-2 focus:ring-teal-400">
          <input type="tel" placeholder="Phone Number" class="w-full px-4 py-3 rounded-lg bg-white/20 placeholder-gray-200 text-white focus:outline-none focus:ring-2 focus:ring-teal-400">
          <textarea rows="4" placeholder="Describe your inquiry..." class="w-full px-4 py-3 rounded-lg bg-white/20 placeholder-gray-200 text-white focus:outline-none focus:ring-2 focus:ring-teal-400"></textarea>

          <button type="submit" class="w-full py-3 bg-gradient-to-r from-teal-400 to-green-500 rounded-full font-semibold text-white hover:shadow-xl hover:scale-105 transition-all duration-300">
            Send Message
          </button>
        </form>

      </div>

    </div>
  </div>
</section>
  
<section id="about" class="py-20 relative overflow-hidden" data-aos="fade-left">
  <div class="container mx-auto px-6 lg:px-12">
    <div class="grid lg:grid-cols-2 gap-10 items-center">

      <div class="space-y-6" data-aos="fade-right">
        <div class="flex items-center space-x-3" data-aos="fade-left">
          <div class="w-3 h-3 rounded-full bg-emerald-600"></div>
          <span class="text-emerald-600 uppercase font-semibold tracking-wide">About Us</span>
        </div>

        <h3 class="text-3xl font-bold text-gray-900 leading-snug" style=" word-spacing: 1px;">
          <u>PT Archipelago Jaya Nusantara</u> is a company engaged in various sectors, including biomass energy.
        </h3>

        <p class="text-gray-600 leading-relaxed" style="text-align:justify;">
          Our vision is to support the global shift toward more environmentally friendly energy sources by providing high-quality products such as wood pellets.
        </p>

        <p class="text-gray-600 leading-relaxed" style="text-align:justify;">
          As an international wood pellet exporter, we are committed to helping buyers obtain the products they need through clear, fast, and efficient communication. We believe that strong business relationships are built on trust, transparency, and professionalism.
        </p>

        <p class="text-gray-600 leading-relaxed" style="text-align:justify;">
          Driven by sustainability and innovation, PT Archipelago Jaya Nusantara aims to be a trusted partner in providing green energy for a cleaner and more sustainable world.
        </p>

        <a href="contact.php" class="inline-flex items-center mt-6 px-6 py-3 bg-gradient-to-r from-green-400 to-blue-400 text-white font-semibold rounded-full hover:from-green-500 hover:to-blue-500 transition-all duration-300">
          View Our Work
          <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
          </svg>
        </a>
      </div>

      <div class="relative" data-aos="fade-left">
        <div class="rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500">
          <img src="assets/images/kantor.jpeg" alt="Archipelago Jaya Nusantara" class="w-full h-[500px] object-cover">
        </div>
        <div class="absolute -bottom-6 -left-6 bg-white p-5 rounded-xl shadow-lg hidden lg:flex items-center space-x-3">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v16h16V4H4zm4 4h8v8H8V8z" />
          </svg>
          <div>
            <h5 class="font-semibold text-gray-800">Trusted Exporter</h5>
            <p class="text-sm text-gray-500">Supplying sustainable Product solutions worldwide.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="grid md:grid-cols-3 gap-6 mt-20" data-aos="fade-up">
      <div class="p-8 bg-gray-50 rounded-2xl shadow-sm hover:shadow-md transition-all duration-300">
        <div class="text-emerald-600 mb-4">
          <i class="fa-solid fa-seedling text-3xl"></i>
        </div>
        <h4 class="font-bold text-lg mb-2">Deep Understanding</h4>
        <p class="text-gray-600 text-sm">
          We got into this business to tell compelling stories, collaborate with great thinkers, and connect ideas with people.
        </p>
      </div>

      <div class="p-8 bg-gray-50 rounded-2xl shadow-sm hover:shadow-md transition-all duration-300">
        <div class="text-emerald-600 mb-4">
          <i class="fa-solid fa-industry text-3xl"></i>
        </div>
        <h4 class="font-bold text-lg mb-2">Focus on Driving Results</h4>
        <p class="text-gray-600 text-sm">
          We are a creative production company that specializes in crafting unique stories to help connect you with your audience.
        </p>
      </div>

      <div class="p-8 bg-gray-50 rounded-2xl shadow-sm hover:shadow-md transition-all duration-300">
        <div class="text-emerald-600 mb-4">
          <i class="fa-solid fa-lightbulb text-3xl"></i>
        </div>
        <h4 class="font-bold text-lg mb-2">Thoughtful Solutions</h4>
        <p class="text-gray-600 text-sm">
          Every solution we create is carefully crafted to address specific challenges and opportunities for our partners.
        </p>
      </div>
    </div>
  </div>
  <br><br><br><br><br><br>
  <hr class="section-divider border-0 h-px my-10 -translate-y-2" data-aos="fade-left">
</section>

<section id="commitment" class="py-20 relative overflow-hidden">
  <div class="container mx-auto px-6">
    <div class="flex items-center space-x-3" data-aos="fade-left">
      <div class="w-3 h-3 rounded-full bg-emerald-600"></div>
      <span class="text-emerald-600 uppercase font-semibold tracking-wide">Our Commitment</span>
    </div>
    <h2 class="text-center text-4xl md:text-5xl font-bold mb-16 underline underline-offset-4 decoration-1 decoration-green-500" data-aos="fade-up">
      Our Commitment
    </h2>

    <div class="grid md:grid-cols-2 gap-10" data-aos="fade-up">

      <div class="bg-white rounded-2xl shadow-md border border-green-100 p-8 transition duration-500 transform hover:-translate-y-2 hover:shadow-xl hover:border-green-300 hover:bg-gradient-to-br hover:from-green-50 hover:to-white">
        <div class="flex items-center mb-4">
          <div class="text-green-600 text-4xl mr-4">
            <i class="fa-solid fa-bullseye"></i>
          </div>
          <h4 class="text-2xl font-semibold">Take Action</h4>
        </div>
        <p class="text-gray-600 leading-relaxed">
          Good story feels like it just happened by accident, and it’s been there all along waiting to be found.
        </p>
      </div>

      <div class="bg-white rounded-2xl shadow-md border border-green-100 p-8 transition duration-500 transform hover:-translate-y-2 hover:shadow-xl hover:border-green-300 hover:bg-gradient-to-br hover:from-green-50 hover:to-white">
        <div class="flex items-center mb-4">
          <div class="text-green-600 text-4xl mr-4">
            <i class="fa-solid fa-lightbulb"></i>
          </div>
          <h4 class="text-2xl font-semibold">Innovation</h4>
        </div>
        <p class="text-gray-600 leading-relaxed">
          An international digital design studio reimagining how people connect with brands.
        </p>
      </div>

      <div class="bg-white rounded-2xl shadow-md border border-green-100 p-8 transition duration-500 transform hover:-translate-y-2 hover:shadow-xl hover:border-green-300 hover:bg-gradient-to-br hover:from-green-50 hover:to-white">
        <div class="flex items-center mb-4">
          <div class="text-green-600 text-4xl mr-4">
            <i class="fa-solid fa-window-restore"></i>
          </div>
          <h4 class="text-2xl font-semibold">Unique Projects</h4>
        </div>
        <p class="text-gray-600 leading-relaxed">
          We’ve got you covered, from commercials, animation, customer stories, branded content, and more.
        </p>
      </div>

      <div class="bg-white rounded-2xl shadow-md border border-green-100 p-8 transition duration-500 transform hover:-translate-y-2 hover:shadow-xl hover:border-green-300 hover:bg-gradient-to-br hover:from-green-50 hover:to-white">
        <div class="flex items-center mb-4">
          <div class="text-green-600 text-4xl mr-4">
            <i class="fa-solid fa-circle-play"></i>
          </div>
          <h4 class="text-2xl font-semibold">Experience</h4>
        </div>
        <p class="text-gray-600 leading-relaxed">
          We think of our agency as an ecosystem composed of our customers, colleagues, suppliers, and ourselves.
        </p>
      </div>

    </div>
  </div>
  <br><br><br><br><br><br>
  <hr class="section-divider border-0 h-px my-10 -translate-y-2" data-aos="fade-left">
</section>

<section id="slider-products" class="py-20 relative overflow-hidden">
  <div class="container mx-auto px-6">
    <div class="flex items-center space-x-3" data-aos="fade-left">
      <div class="w-3 h-3 rounded-full bg-emerald-600"></div>
      <span class="text-emerald-600 uppercase font-semibold tracking-wide">Our Product</span>
    </div>
    <h2 class="text-center text-4xl md:text-5xl font-bold mb-16 underline underline-offset-4 decoration-1 decoration-green-500">
      Our Products
    </h2>

    <div class="overflow-hidden relative">
      <div id="productSlider" class="flex transition-transform duration-700 ease-in-out">
        <div class="min-w-full flex flex-col md:flex-row items-center gap-10">
          <div class="md:w-1/2">
            <video autoplay muted loop playsinline class="rounded-2xl shadow-xl border border-green-100">
              <source src="https://videos.pexels.com/video-files/3196062/3196062-uhd_2560_1440_25fps.mp4" type="video/mp4">
            </video>
          </div>
          <div class="md:w-1/2">
            <h3 class="text-3xl font-bold">Premium Wood Pellets</h3>
            <p class="text-gray-600 mt-4">Low ash content and high calorific value, perfect for home and commercial heating.</p>
            <a href="#" class="inline-block mt-4 bg-gradient-to-r from-green-400 to-blue-400 text-white font-semibold px-6 py-3 rounded-lg shadow-md hover:from-green-500 hover:to-blue-500 transition-transform hover:scale-105">
              Learn More
            </a>
          </div>
        </div>

        <div class="min-w-full flex flex-col md:flex-row items-center gap-10">
          <div class="md:w-1/2">
            <video autoplay muted loop playsinline class="rounded-2xl shadow-xl border border-green-100">
              <source src="https://videos.pexels.com/video-files/9808528/9808528-uhd_2732_1440_25fps.mp4" type="video/mp4">
            </video>
          </div>
          <div class="md:w-1/2">
            <h3 class="text-3xl font-bold">Industrial Pellets</h3>
            <p class="text-gray-600 mt-4">High-density wood pellets for efficient large-scale combustion and energy production.</p>
            <a href="#" class="inline-block mt-4 bg-gradient-to-r from-green-400 to-blue-400 text-white font-semibold px-6 py-3 rounded-lg shadow-md hover:from-green-500 hover:to-blue-500 transition-transform hover:scale-105">
              Learn More
            </a>
          </div>
        </div>

        <div class="min-w-full flex flex-col md:flex-row items-center gap-10">
          <div class="md:w-1/2">
            <video autoplay muted loop playsinline class="rounded-2xl shadow-xl border border-green-100">
              <source src="https://videos.pexels.com/video-files/5092427/5092427-hd_1920_1080_30fps.mp4" type="video/mp4">
            </video>
          </div>
          <div class="md:w-1/2">
            <h3 class="text-3xl font-bold">Biomass Blends</h3>
            <p class="text-gray-600 mt-4">Custom biomass mixtures for tailored renewable energy applications.</p>
            <a href="#" class="inline-block mt-4 bg-gradient-to-r from-green-400 to-blue-400 text-white font-semibold px-6 py-3 rounded-lg shadow-md hover:from-green-500 hover:to-blue-500 transition-transform hover:scale-105">
              Learn More
            </a>
          </div>
        </div>
      </div>
      

      <div class="flex justify-center mt-10 space-x-3">
        <button class="dot w-3 h-3 rounded-full bg-green-300"></button>
        <button class="dot w-3 h-3 rounded-full bg-green-200"></button>
        <button class="dot w-3 h-3 rounded-full bg-green-200"></button>
      </div>
    </div>
  </div>
</section>
</main>

<script>
  // simple auto slider JS
  const slider = document.getElementById('productSlider');
  const dots = document.querySelectorAll('.dot');
  let index = 0;
  function changeSlide() {
    index = (index + 1) % 3;
    slider.style.transform = `translateX(-${index * 100}%)`;
    dots.forEach((dot, i) => {
      dot.classList.toggle('bg-green-300', i === index);
      dot.classList.toggle('bg-green-200', i !== index);
    });
  }
  setInterval(changeSlide, 5000);

  document.addEventListener("DOMContentLoaded", () => {
    // Check if hero-text exists before trying to access its properties
    const title = document.querySelector(".hero-text"); // This class might be missing
    if (title) { // Add this check
      const text = title.textContent;
      title.textContent = "";
      [...text].forEach((letter, i) => {
        const span = document.createElement("span");
        span.textContent = letter;
        span.style.animationDelay = `${i * 0.05}s`;
        title.appendChild(span);
      });
    } // End of check
  });
</script>

<?php include 'common_footer.php'; ?>