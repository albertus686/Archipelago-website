<?php include 'common_header.php'; ?>
<div id="loader"><div class="loader-box"><img src="assets/logo.png" class="loader-logo"><div class="loader-text">Exporting Sustainable Wood Pellets Worldwide</div></div></div>

<main class="fade-slide-page">
  <section class="hero" id="home">
    <div class="container hero-inner" data-aos="fade-up">
      <h1><?php echo t('home_title'); ?></h1>
      <p class="lead"><?php echo t('home_sub'); ?></p>
      <div class="mt-3"><a class="btn btn-cta me-2" href="products.php?lang=<?php echo $lang_code; ?>">Explore Products</a><a class="btn btn-outline-dark btn-hero-quote" href="contact.php?lang=<?php echo $lang_code; ?>">Get Quote</a></div>
    </div>
  </section>

  <section class="section" id="about">
    <div class="container">
      <div class="row align-items-center">
       <div class="col-md-6" data-aos="fade-right"><img src="assets/images/office-skyscrapers-business-district.jpg" class="img-fluid rounded about-section-image"></div>
       <div class="col-md-6" data-aos="fade-left"><h2><?php echo t('about_title'); ?></h2><?php echo t('about_text'); ?></div>
      </div>
    </div>
  </section>

  <section class="section bg-light" id="products">
    <div class="container">
      <h2 data-aos="fade-up"><?php echo t('products_title'); ?></h2>
      <div class="products-grid mt-4" data-aos="fade-up">
        <div class="product-card card-clean"><img src="assets/images/img1.png"><h5 class="mt-3">Premium Wood Pellets</h5><p>Low ash, high calorific value.</p><a href="contact.php?lang=<?php echo $lang_code; ?>" class="btn btn-cta">Get Quote</a></div>
        <div class="product-card card-clean"><img src="assets/images/img2.png"><h5 class="mt-3">Industrial Pellets</h5><p>High-density pellets for power plants.</p><a href="contact.php?lang=<?php echo $lang_code; ?>" class="btn btn-cta">Get Quote</a></div>
        <div class="product-card card-clean"><img src="assets/images/img3.png"><h5 class="mt-3">Biomass Blends</h5><p>Tailored biomass solutions.</p><a href="contact.php?lang=<?php echo $lang_code; ?>" class="btn btn-cta">Get Quote</a></div>
      </div>
    </div>
  </section>

  <section class="section" id="commitment">
    <div class="container">
      <h2 data-aos="fade-up">Our Commitment</h2>
      <div class="row mt-4">
        <div class="col-md-4" data-aos="fade-up"><div class="card-clean"><h5>Responsible Forestry</h5><p>Traceable and certified sourcing.</p></div></div>
        <div class="col-md-4" data-aos="fade-up"><div class="card-clean"><h5>Low Emission Production</h5><p>Efficient production with emission controls.</p></div></div>
        <div class="col-md-4" data-aos="fade-up"><div class="card-clean"><h5>Global Logistics</h5><p>Reliable shipping and export services.</p></div></div>
      </div>
    </div>
  </section>
</main>

<?php include 'common_footer.php'; ?>