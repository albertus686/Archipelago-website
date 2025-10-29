// app.js (Versi 2.1 - Perbaikan Error Newsletter)

document.addEventListener('DOMContentLoaded', function() {

  // === LOGIKA DARK MODE ===
  const themeToggle = document.getElementById('themeToggle');
  const htmlEl = document.documentElement;
  const bodyEl = document.body;
  const nav = document.querySelector('.nav-box'); // Pindahkan ke sini agar bisa dipakai di scroll

  const currentTheme = localStorage.getItem('site-theme') || 'light';
  if (currentTheme === 'dark') {
    htmlEl.classList.add('dark');
    bodyEl.classList.add('dark-mode');
    if(themeToggle) themeToggle.innerHTML = '<i class="fa fa-sun"></i>';
  }
  if (themeToggle) {
    themeToggle.addEventListener('click', () => {
      htmlEl.classList.toggle('dark');
      bodyEl.classList.toggle('dark-mode');
      const isDark = htmlEl.classList.contains('dark');
      localStorage.setItem('site-theme', isDark ? 'dark' : 'light');
      themeToggle.innerHTML = isDark ? '<i class="fa fa-sun"></i>' : '<i class="fa fa-moon"></i>';
    });
  }
  // === AKHIR LOGIKA DARK MODE ===

  // --- Kode Lainnya ---
  const loader = document.getElementById('loader');

  // loader fade
  setTimeout(()=>{
    if(loader){
      loader.style.opacity='0';
      loader.style.pointerEvents='none';
      setTimeout(()=>loader.remove(),700);
    }
  }, 1800);

  // navbar scroll behavior
  window.addEventListener('scroll', ()=>{
    // Pastikan 'nav' ada sebelum menambahkan/menghapus class
    if(nav) {
      if(window.scrollY > 40) {
        nav.classList.add('scrolled');
      } else {
        nav.classList.remove('scrolled');
      }
    }
  });

  // swiper init
  if (window.Swiper) {
    // Cek apakah elemen swiper ada sebelum inisialisasi
    const productSwiperElement = document.querySelector('.product-swiper');
    if (productSwiperElement) {
      new Swiper('.product-swiper', {
        loop: true,
        speed: 6000,
        freeMode: true,
        freeModeMomentum: false,
        reverseDirection: true,
        autoplay: {
          delay: 0,
          disableOnInteraction: false,
        },
        breakpoints: {
          320: { slidesPerView: 1.2, spaceBetween: 10 },
          640: { slidesPerView: 2, spaceBetween: 15 },
          1024: { slidesPerView: 4, spaceBetween: 20 },
        },
        grabCursor: true,
        pauseOnMouseEnter: true,
      });
    }
  }

  // GLightbox Init
  if (window.GLightbox) {
    // Tidak perlu cek elemen, GLightbox menangani jika tidak ada selector
    const lightbox = GLightbox({
      selector: '.glightbox'
    });
  }

  // AOS Init
  if (window.AOS) {
    AOS.init({
      duration: 800,
      once: true
    });
  }

  // ==========================================
  // PERBAIKAN: Form handling (Newsletter)
  // Hanya jalankan jika form-nya ada di halaman ini
  // ==========================================
  const newsletterForm = document.getElementById('newsletterForm');
  if (newsletterForm) { // <-- TAMBAHKAN PENGECEKAN INI
    const newsletterEmailInput = document.getElementById('newsletterEmail');
    const newsletterSubmitBtn = document.getElementById('newsletterSubmitBtn');
    const newsletterMessageDiv = document.getElementById('newsletterMessage');

    // Pastikan semua elemen di dalam form juga ada sebelum menambahkan event listener
    if (newsletterEmailInput && newsletterSubmitBtn && newsletterMessageDiv) {
      newsletterForm.addEventListener('submit', function(e) {
        e.preventDefault();

        newsletterSubmitBtn.disabled = true;
        newsletterSubmitBtn.innerHTML = '<i class="fa fa-spinner fa-spin"></i>';

        // --- Simulasi Sukses ---
        setTimeout(() => {
          newsletterMessageDiv.textContent = 'Thanks for subscribing!'; // Baris 101 sekarang aman
          newsletterMessageDiv.style.color = 'var(--green)';
          newsletterMessageDiv.style.display = 'block';
          newsletterEmailInput.value = '';
        }, 1500);

        setTimeout(() => {
          newsletterMessageDiv.style.display = 'none';
          newsletterSubmitBtn.disabled = false;
          newsletterSubmitBtn.innerHTML = '<i class="fa fa-paper-plane"></i>';
        }, 4000);
      });
    } else {
      console.warn("Newsletter form elements (email, button, or message div) not found.");
    }
  } // <-- Akhir dari pengecekan if (newsletterForm)

  // ========================================
  // Validasi Form Kontak (Kode dari sebelumnya)
  // Hanya jalankan jika form kontak ada
  // ========================================
  const contactForm = document.getElementById('contactForm');
  if (contactForm) { // <-- TAMBAHKAN PENGECEKAN INI
      const nameInput = document.getElementById('name');
      const emailInput = document.getElementById('email');
      const phoneInput = document.getElementById('phone');
      const messageInput = document.getElementById('message');
      // Ambil juga input Company jika ada
      const companyInput = document.getElementById('company');

      // Ambil elemen error (pastikan ID ini ada di HTML contact.php)
      const nameError = document.getElementById('nameError');
      const emailError = document.getElementById('emailError');
      const phoneError = document.getElementById('phoneError');
      const messageError = document.getElementById('messageError');
      // Tambahkan elemen error untuk Company jika ada
      const companyError = document.getElementById('companyError');

      // Pastikan semua elemen input dan error ada
      if (nameInput && emailInput && phoneInput && messageInput && companyInput &&
          nameError && emailError && phoneError && messageError && companyError) {

          contactForm.addEventListener('submit', function(event) {
              let isValid = true;

              // Hapus error sebelumnya
              nameError.textContent = '';
              emailError.textContent = '';
              phoneError.textContent = '';
              messageError.textContent = '';
              companyError.textContent = ''; // Hapus error company
              nameInput.classList.remove('border-red-500', 'dark:border-red-500');
              emailInput.classList.remove('border-red-500', 'dark:border-red-500');
              phoneInput.classList.remove('border-red-500', 'dark:border-red-500');
              messageInput.classList.remove('border-red-500', 'dark:border-red-500');
              companyInput.classList.remove('border-red-500', 'dark:border-red-500'); // Hapus border company

              // Validasi Nama
              if (nameInput.value.trim() === '') {
                  nameError.textContent = 'Nama wajib diisi.';
                  nameInput.classList.add('border-red-500', 'dark:border-red-500');
                  isValid = false;
              }

              // Validasi Company (jika required)
              if (companyInput.hasAttribute('required') && companyInput.value.trim() === '') {
                  companyError.textContent = 'Company wajib diisi.';
                  companyInput.classList.add('border-red-500', 'dark:border-red-500');
                  isValid = false;
              }

              // Validasi Email
              if (emailInput.value.trim() === '') {
                  emailError.textContent = 'Email wajib diisi.';
                  emailInput.classList.add('border-red-500', 'dark:border-red-500');
                  isValid = false;
              } else if (!validateEmail(emailInput.value)) {
                 emailError.textContent = 'Format email tidak valid.';
                 emailInput.classList.add('border-red-500', 'dark:border-red-500');
                 isValid = false;
              }

              // Validasi Phone (jika required)
              if (phoneInput.hasAttribute('required') && phoneInput.value.trim() === '') {
                  phoneError.textContent = 'Nomor telepon wajib diisi.';
                  phoneInput.classList.add('border-red-500', 'dark:border-red-500');
                  isValid = false;
              }

              // Validasi Message
              if (messageInput.value.trim() === '') {
                  messageError.textContent = 'Pesan wajib diisi.';
                  messageInput.classList.add('border-red-500', 'dark:border-red-500');
                  isValid = false;
              }

              if (!isValid) {
                  event.preventDefault();
              }
          });
      } else {
          console.warn("Contact form input or error elements not found. Validation skipped.");
      }
  } // <-- Akhir dari pengecekan if (contactForm)

}); // Akhir DOMContentLoaded

// Helper function validasi email (tetap di luar)
function validateEmail(email) {
  const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return re.test(String(email).toLowerCase());
}