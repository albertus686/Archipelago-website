// assets/app.js
document.addEventListener('DOMContentLoaded', function(){
  const themeToggle = document.getElementById('themeToggle');
  const body = document.body;
  const nav = document.querySelector('.nav-box');
  const loader = document.getElementById('loader');
  const current = localStorage.getItem('site-theme') || 'light';
  if(current === 'dark'){ body.classList.add('dark-mode'); if(themeToggle) themeToggle.innerHTML = '<i class="fa fa-sun"></i>'; }
  if(themeToggle) themeToggle.addEventListener('click', ()=>{ body.classList.toggle('dark-mode'); const isDark = body.classList.contains('dark-mode'); localStorage.setItem('site-theme', isDark ? 'dark' : 'light'); themeToggle.innerHTML = isDark ? '<i class="fa fa-sun"></i>' : '<i class="fa fa-moon"></i>'; });

  // loader fade
  setTimeout(()=>{ if(loader){ loader.style.opacity='0'; loader.style.pointerEvents='none'; setTimeout(()=>loader.remove(),700); } }, 1800);

  // navbar scroll behavior
  window.addEventListener('scroll', ()=>{ if(window.scrollY>40) nav.classList.add('scrolled'); else nav.classList.remove('scrolled'); });

  // swiper init
  if (window.Swiper) { new Swiper('.product-swiper', { loop: true, speed: 6000, freeMode: true, freeModeMomentum: false, reverseDirection: true,
    autoplay: {
      delay: 0, // jalan terus tanpa jeda
      disableOnInteraction: false,
    },
    slidesPerView: 1,
    spaceBetween: 30,
    breakpoints: {
      768: { slidesPerView: 1 },
      992: { slidesPerView: 3 }
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
}
  
  // AOS init for scroll animations
  if(window.AOS) AOS.init({duration:800,loop:true,offset:120});

  // page transition (fade + slide) on internal links
  document.querySelectorAll('a[href^="index.php"], a[href^="about.php"], a[href^="products.php"], a[href^="sustainability.php"], a[href^="contact.php"], a[href^="tech.php"]').forEach(link=>{
    link.addEventListener('click', function(e){
      const href = this.getAttribute('href');
      if(href && href.indexOf('#')===-1){ e.preventDefault(); document.documentElement.classList.add('fade-slide-enter'); setTimeout(()=>{ window.location = href; }, 300); }
    });
  });
});

// === NEWSLETTER FORM FEEDBACK ===
  const newsletterForm = document.getElementById('newsletterForm');
  const newsletterEmailInput = document.getElementById('newsletterEmail');
  const newsletterMessageDiv = document.getElementById('newsletterMessage');
  const newsletterSubmitBtn = document.getElementById('newsletterSubmitBtn');

  if (newsletterForm) {
    newsletterForm.addEventListener('submit', function(event) {
      event.preventDefault(); // Mencegah reload halaman

      // Tampilkan pesan sukses
      newsletterMessageDiv.textContent = 'Thank you for subscribing!';
      newsletterMessageDiv.style.display = 'block';

      // Opsional: Kosongkan input email
      newsletterEmailInput.value = '';

      // Opsional: Disable tombol sebentar
      newsletterSubmitBtn.disabled = true;
      newsletterSubmitBtn.innerHTML = '<i class="fa fa-check"></i>'; // Ganti ikon

      // Setelah beberapa detik, sembunyikan pesan & enable tombol lagi
      setTimeout(() => {
        newsletterMessageDiv.style.display = 'none';
        newsletterMessageDiv.textContent = '';
        newsletterSubmitBtn.disabled = false;
        newsletterSubmitBtn.innerHTML = '<i class="fa fa-paper-plane"></i>'; // Kembalikan ikon
      }, 4000); // Sembunyikan setelah 4 detik

      // === CATATAN PENTING ===
      // Di sini Anda SEHARUSNYA mengirim data email ke backend
      // menggunakan fetch() atau XMLHttpRequest.
      // Kode di atas hanya simulasi feedback visual.
      // Contoh fetch (membutuhkan endpoint backend):
      /*
      fetch('backend/subscribe_newsletter.php', {
          method: 'POST',
          headers: { 'Content-Type': 'application/json' },
          body: JSON.stringify({ email: newsletterEmailInput.value })
      })
      .then(response => response.json())
      .then(data => {
          if (data.success) {
              // Tampilkan pesan sukses (kode di atas)
          } else {
              // Tampilkan pesan error
              newsletterMessageDiv.textContent = 'Subscription failed. Please try again.';
              newsletterMessageDiv.style.color = 'red'; // Ganti warna jadi merah
              newsletterMessageDiv.style.display = 'block';
              // Logic reset tombol error
          }
      })
      .catch(error => {
          console.error('Error:', error);
          // Tampilkan pesan error umum
          newsletterMessageDiv.textContent = 'An error occurred.';
          newsletterMessageDiv.style.color = 'red';
          newsletterMessageDiv.style.display = 'block';
          // Logic reset tombol error
      });
      */

    });
  }
