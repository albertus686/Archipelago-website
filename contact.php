<?php include 'common_header.php'; ?>
<section class="section">
  <div class="container">
    <h1 data-aos="fade-up"><?php echo t('contact_title'); ?></h1>
    <div class="row mt-3">
      <div class="col-md-6" data-aos="fade-up">
        <form id="contactForm" method="post" action="backend/save_complain.php">
          <div class="mb-2"><label class="form-label"><?php echo t('name'); ?></label><input name="name" class="form-control" required></div>
          <div class="mb-2"><label class="form-label"><?php echo t('email'); ?></label><input type="email" name="email" class="form-control" required></div>
          <div class="mb-2"><label class="form-label"><?php echo t('message'); ?></label><textarea name="message" class="form-control" rows="5" required></textarea></div>
          <button type="submit" class="btn btn-cta"><?php echo t('contact_button'); ?></button>
        </form>
      </div>
      <div class="col-md-6" data-aos="fade-up">
        <h5>Location</h5>
        <p><?php echo t('address'); ?></p>
        <div style="width:100%;height:320px;border-radius:8px;overflow:hidden;border:1px solid #eee">
          <iframe src="https://www.google.com/maps?q=Jakarta&amp;output=embed" width="100%" height="100%" style="border:0" loading="lazy"></iframe>
        </div>
      </div>
    </div>
  </div>
</section>
<?php include 'common_footer.php'; ?>