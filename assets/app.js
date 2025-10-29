// assets/app.js
document.addEventListener('DOMContentLoaded', function(){ // <-- Mulai Listener
  const themeToggle = document.getElementById('themeToggle');
  const body = document.body;
  const nav = document.querySelector('.nav-box');
  const loader = document.getElementById('loader');

  // Cek tema saat halaman dimuat
  const currentTheme = localStorage.getItem('site-theme') || 'light';
  const isCurrentlyDark = currentTheme === 'dark';
  if(isCurrentlyDark) {
      body.classList.add('dark-mode'); 
      if(themeToggle) themeToggle.innerHTML = '<i class="fa fa-sun"></i>'; 
  } else {
      if(themeToggle) themeToggle.innerHTML = '<i class="fa fa-moon"></i>';
  }
  // Panggil fungsi update card (jika ada) saat halaman dimuat
  if (typeof updateCardBackgrounds === 'function') { 
      updateCardBackgrounds(isCurrentlyDark); 
  }

  // Event listener untuk tombol toggle
  if(themeToggle) {
    themeToggle.addEventListener('click', ()=>{ 
      body.classList.toggle('dark-mode'); 
      const isNowDark = body.classList.contains('dark-mode'); 
      localStorage.setItem('site-theme', isNowDark ? 'dark' : 'light'); 
      themeToggle.innerHTML = isNowDark ? '<i class="fa fa-sun"></i>' : '<i class="fa fa-moon"></i>'; 
      if (typeof updateCardBackgrounds === 'function') { 
          updateCardBackgrounds(isNowDark); 
      }
    });
  }

  // loader fade
  setTimeout(()=>{ if(loader){ loader.style.opacity='0'; loader.style.pointerEvents='none'; setTimeout(()=>loader.remove(),700); } }, 1800);

  // navbar scroll behavior
  window.addEventListener('scroll', ()=>{ 
    if(window.scrollY > 150) nav.classList.add('scrolled'); 
    else nav.classList.remove('scrolled'); 
  });

  // swiper init 
  if (window.Swiper && document.querySelector('.product-swiper')) { 
     new Swiper('.product-swiper', { 
         loop: true, speed: 6000, freeMode: true, freeModeMomentum: false, 
         autoplay: { delay: 0, disableOnInteraction: false },
         slidesPerView: 1, spaceBetween: 30,
         breakpoints: { 768: { slidesPerView: 2 }, 992: { slidesPerView: 3 } },
         pagination: { el: '.swiper-pagination', clickable: true },
     });
  }
  
  // AOS init 
  if(window.AOS) AOS.init({duration:800, once: true, offset:120}); 

  // page transition 
  document.querySelectorAll('a[href^="index.php"], a[href^="about.php"], a[href^="products.php"], a[href^="sustainability.php"], a[href^="contact.php"], a[href^="tech.php"]').forEach(link=>{
    link.addEventListener('click', function(e){
      const href = this.getAttribute('href');
      if(href && href.indexOf('#')===-1 && !link.classList.contains('dropdown-toggle')){ 
        e.preventDefault(); 
        document.documentElement.classList.add('fade-slide-enter'); 
        setTimeout(()=>{ window.location = href; }, 300); 
      }
    });
  });

  // === MEGA MENU HOVER LOGIC (DI DALAM DOMCONTENTLOADED) ===
  const megaMenuTrigger = document.querySelector('.dropdown-mega'); 
  const megaMenuDropdown = document.querySelector('.dropdown-menu-mega'); 
  let hideMenuTimeout; 

  if (megaMenuTrigger && megaMenuDropdown) {
    
    megaMenuTrigger.addEventListener('mouseenter', () => {
      clearTimeout(hideMenuTimeout); 
      megaMenuDropdown.classList.add('show-mega-menu'); 
    });

    megaMenuTrigger.addEventListener('mouseleave', () => {
      hideMenuTimeout = setTimeout(() => {
        megaMenuDropdown.classList.remove('show-mega-menu');
      }, 200); 
    });

    megaMenuDropdown.addEventListener('mouseenter', () => {
      clearTimeout(hideMenuTimeout); 
    });

    megaMenuDropdown.addEventListener('mouseleave', () => {
      hideMenuTimeout = setTimeout(() => {
        megaMenuDropdown.classList.remove('show-mega-menu');
      }, 200);
    });
  }
  // === AKHIR MEGA MENU HOVER LOGIC ===


  // === NEWSLETTER FORM FEEDBACK (DI DALAM DOMCONTENTLOADED) ===
  const newsletterForm = document.getElementById('newsletterForm');
  const newsletterEmailInput = document.getElementById('newsletterEmail');
  const newsletterMessageDiv = document.getElementById('newsletterMessage');
  const newsletterSubmitBtn = document.getElementById('newsletterSubmitBtn');

  if (newsletterForm) {
    newsletterForm.addEventListener('submit', function(event) {
      event.preventDefault(); 
      newsletterMessageDiv.textContent = 'Thank you for subscribing!';
      newsletterMessageDiv.style.display = 'block';
      newsletterEmailInput.value = '';
      newsletterSubmitBtn.disabled = true;
      newsletterSubmitBtn.innerHTML = '<i class="fa fa-check"></i>'; 
      setTimeout(() => {
        newsletterMessageDiv.style.display = 'none';
        newsletterMessageDiv.textContent = '';
        newsletterSubmitBtn.disabled = false;
        newsletterSubmitBtn.innerHTML = '<i class="fa fa-paper-plane"></i>'; 
      }, 4000); 
      // fetch(...)
    });
  }
  // === AKHIR NEWSLETTER FORM FEEDBACK ===
// === CONTACT FORM FEEDBACK ===
  const contactForm = document.getElementById('contactForm');
  const formMessageDiv = document.getElementById('formMessage');
  const contactSubmitBtn = document.getElementById('contactSubmitBtn');
  const contactBtnOriginalText = contactSubmitBtn ? contactSubmitBtn.innerHTML : '';

  if (contactForm && formMessageDiv && contactSubmitBtn) {
    contactForm.addEventListener('submit', function(event) {
      event.preventDefault(); // Mencegah submit form biasa

      // Tampilkan status "Loading..."
      contactSubmitBtn.disabled = true;
      contactSubmitBtn.innerHTML = '<i class="fa fa-spinner fa-spin"></i> Sending...';
      formMessageDiv.textContent = ''; // Kosongkan pesan
      formMessageDiv.className = 'mt-4 text-center'; // Reset class

      // Buat FormData untuk mengirim data
      const formData = new FormData(contactForm);

      // Kirim data ke backend
      fetch('backend/save_complain.php', {
        method: 'POST',
        body: formData
      })
      .then(response => response.json())
      .then(data => {
        if (data.success) {
          // Sukses
          formMessageDiv.textContent = 'Message Sent! We will get back to you soon.';
          formMessageDiv.classList.add('text-green-600', 'dark:text-green-400');
          contactForm.reset(); // Kosongkan form
          contactSubmitBtn.innerHTML = '<i class="fa fa-check"></i> Sent!';
          // Kembalikan tombol ke normal setelah beberapa detik
          setTimeout(() => {
            contactSubmitBtn.disabled = false;
            contactSubmitBtn.innerHTML = contactBtnOriginalText;
            formMessageDiv.textContent = '';
          }, 5000);
        } else {
          // Gagal (misal: field kosong)
          throw new Error(data.error || 'Submission failed.');
        }
      })
      .catch(error => {
        // Error Jaringan atau error lain
        formMessageDiv.textContent = 'An error occurred. Please try again.';
        formMessageDiv.classList.add('text-red-600', 'dark:text-red-400');
        contactSubmitBtn.disabled = false; // Enable tombol lagi
        contactSubmitBtn.innerHTML = contactBtnOriginalText; // Kembalikan teks tombol
      });
    });
  }
  // === AKHIR CONTACT FORM FEEDBACK ===

}); // <-- Pastikan ini ada di dalam DOMContentLoaded