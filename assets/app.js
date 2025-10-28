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

  const egg = document.getElementById('egg');
  const popup = document.getElementById('chickPopup');
  const closeBtn = popup.querySelector('.close-popup');

  egg.addEventListener('click', () => {
    egg.classList.add('active'); // Telur netas
    setTimeout(() => {
      popup.classList.add('active'); // Popup muncul
    }, 1000);
  });

  closeBtn.addEventListener('click', () => {
    popup.classList.remove('active');
    egg.classList.remove('active');
  });
  
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