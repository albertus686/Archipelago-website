<?php
// (Baris <?php ini mungkin sudah ada di file Anda, tidak perlu didobel)
?>
<footer class="footer-new pt-5 pb-4" data-aos="fade-up">
  <div class="container">
    <div class="row gy-4">

      <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
        <img src="assets/logoacpfooter.png" class="footer-logo mb-3" alt="Archipelago Jaya Nusantara Logo"> 
        <p class="footer-tagline text-muted">Sustainable Biomass Exporter delivering responsibly sourced biomass fuel to global markets.</p>
        <div class="footer-social mt-3">
          <a href="https://api.whatsapp.com/send?phone=6285700800872&text=Thanks%20for%20reaching%20out%20to%20Archipelago%20Jaya%20Nusantara!%20Let%20us%20know%20what%20you%27re%C2%A0looking%C2%A0for." class="social-icon me-3" target="_blank" rel="noopener noreferrer"><i class="fab fa-whatsapp"></i></a>
          <a href="https://www.instagram.com/archipelagojayanusantara/" class="social-icon me-3" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a>
          <a href="https://www.facebook.com/archipelagojayanusantara" class="social-icon me-3" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-f"></i></a>
          <a href="https://www.linkedin.com/company/107803014" class="social-icon me-3" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin-in"></i></a>
          </div>
      </div>

      <div class="col-lg-2 col-md-6 col-sm-6 mb-4 mb-lg-0">
        <h6 class="footer-heading mb-3">Quick Links</h6>
        <ul class="list-unstyled footer-links">
          <li><a href="index.php?lang=<?php echo $lang_code; ?>">Home</a></li>
          <li><a href="about.php?lang=<?php echo $lang_code; ?>"><?php echo t('about_title'); ?></a></li>
          <li><a href="products.php?lang=<?php echo $lang_code; ?>"><?php echo t('products_title'); ?></a></li>
          <li><a href="sustainability.php?lang=<?php echo $lang_code; ?>"><?php echo t('sustainability_title'); ?></a></li>
        </ul>
      </div>

      <div class="col-lg-2 col-md-6 col-sm-6 mb-4 mb-lg-0">
        <h6 class="footer-heading mb-3">Services</h6>
        <ul class="list-unstyled footer-links">
          <li><a href="#">Wood Pellets</a></li>
          <li><a href="#">Biomass Supply</a></li>
          <li><a href="#">Export Logistics</a></li>
          <li><a href="#">Consultation</a></li>
        </ul>
      </div>

      <div class="col-lg-2 col-md-6 col-sm-6 mb-4 mb-lg-0">
        <h6 class="footer-heading mb-3">Support</h6>
        <ul class="list-unstyled footer-links">
          <li><a href="contact.php?lang=<?php echo $lang_code; ?>"><?php echo t('contact_title'); ?></a></li>
          <li><a href="#"><?php echo t('terms'); ?></a></li>
          <li><a href="#"><?php echo t('privacy'); ?></a></li>
          <li><a href="#">FAQ</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6">
        <h6 class="footer-heading mb-3">Newsletter</h6>
        <p class="small text-muted mb-3">Subscribe to receive future updates.</p>
        <form id="newsletterForm" method="post" class="newsletter-form"> 
          <div class="input-group">
            <input type="email" id="newsletterEmail" class="form-control" placeholder="Email address" required>
            <button class="btn btn-outline-secondary" type="submit" id="newsletterSubmitBtn"><i class="fa fa-paper-plane"></i></button>
          </div>
        </form>
        <div id="newsletterMessage" class="small mt-2" style="display: none; color: var(--green);"></div> 
      </div>

    </div>

    <hr class="footer-divider my-4">

    <div class="row align-items-center">
      <div class="col-md-6 text-center text-md-start mb-2 mb-md-0">
         <a href="#" class="footer-bottom-link me-3">English</a>
         <a href="#" class="footer-bottom-link me-3"><?php echo t('privacy'); ?></a>
         <a href="#" class="footer-bottom-link">Support</a>
      </div>
      <div class="col-md-6 text-center text-md-end">
        <p class="small text-muted mb-0">&copy; <?php echo date('Y'); ?> PT Archipelago Jaya Nusantara. All rights reserved.</p>
      </div>
    </div>

  </div>
</footer>
<a class="whatsapp-float" href="https://api.whatsapp.com/send?phone=6285700800872&text=Thanks%20for%20reaching%20out%20to%20Archipelago%20Jaya%20Nusantara!%20Let%20us%20know%20what%20you%27re%C2%A0looking%C2%A0for." target="_blank" rel="noopener"><i class="fab fa-whatsapp"></i></a>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/prism.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.0/gsap.min.js"></script>
<script src="assets/app.js"></script>
</body></html>