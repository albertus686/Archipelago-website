<?php include 'common_header.php'; ?>

<section id="contact" class="py-16 md:py-24 bg-gray-50 dark:bg-dark font-sans">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <div class="text-center mb-12 md:mb-16">
      <h1 class="text-4xl md:text-5xl font-bold text-gray-900 dark:text-black">Stay Connected with us</h1>
      <p class="mt-4 text-lg text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
        Reach out for inquiries, support, or collaboration—we'd love to hear from you!
      </p>
    </div>

    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-xl overflow-hidden" data-aos="fade-up">
      <div class="grid grid-cols-1 lg:grid-cols-2">

        <div class="p-8 sm:p-10">
          <form id="contactForm" method="post" action="backend/save_complain.php">
            <div class="space-y-6">
              <div>
                <label for="name" class="block text-sm font-medium text-gray-700 dark:text-black-300 mb-1"><?php echo t('name'); ?></label>
                <input type="text" id="name" name="name" class="block w-full px-4 py-3 rounded-md border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-black placeholder-gray-400 dark:placeholder-gray-500 focus:ring-blue-500 focus:border-blue-500" placeholder="<?php echo t('name_placeholder'); ?>" required>
              </div>
              <div>
                <label for="company" class="block text-sm font-medium text-gray-700 dark:text-black-300 mb-1"><?php echo t('company'); ?></label>
                <input type="com" id="company" name="company" class="block w-full px-4 py-3 rounded-md border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-black placeholder-gray-400 dark:placeholder-gray-500 focus:ring-blue-500 focus:border-blue-500" placeholder="<?php echo t('company_placeholder'); ?>" required>
              </div>
              <div>
                <label for="email" class="block text-sm font-medium text-gray-700 dark:text-black-300 mb-1"><?php echo t('email'); ?></label>
                <input type="email" id="email" name="email" class="block w-full px-4 py-3 rounded-md border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-black placeholder-gray-400 dark:placeholder-gray-500 focus:ring-blue-500 focus:border-blue-500" placeholder="<?php echo t('email_placeholder'); ?>" required>
              </div>
              <div>
                <label for="phone" class="block text-sm font-medium text-gray-700 dark:text-black-300 mb-1"><?php echo t('phone'); ?></label>
                <input type="tel" id="phone" name="phone" class="block w-full px-4 py-3 rounded-md border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-black placeholder-gray-400 dark:placeholder-gray-500 focus:ring-blue-500 focus:border-blue-500" placeholder="<?php echo t('phone_placeholder'); ?>" required>
              </div>
              <div>
                <label for="message" class="block text-sm font-medium text-gray-700 dark:text-black-300 mb-1"><?php echo t('message'); ?></label>
                <textarea id="message" name="message" rows="5" class="block w-full px-4 py-3 rounded-md border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-black placeholder-gray-400 dark:placeholder-gray-500 focus:ring-blue-500 focus:border-blue-500" placeholder="<?php echo t('message_placeholder'); ?>" required></textarea>
              </div>

              <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-black-300 mb-2">Services</label>
                <div class="grid grid-cols-2 gap-y-2">
                  <div class="flex items-center">
                    <input id="service1" type="checkbox" name="services[]" value="Website Design" class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600">
                    <label for="service1" class="ml-2 text-sm text-gray-700 dark:text-black-300">Wood Pellet</label>
                  </div>
                  <div class="flex items-center">
                    <input id="service2" type="checkbox" name="services[]" value="Content Creation" class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600">
                    <label for="service2" class="ml-2 text-sm text-gray-700 dark:text-black-300">Recyle Wood Pellet</label>
                  </div>
                  <div class="flex items-center">
                    <input id="service3" type="checkbox" name="services[]" value="UX Design" class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600">
                    <label for="service3" class="ml-2 text-sm text-gray-700 dark:text-black-300">Industrial Wood Pellet</label>
                  </div>
                </div>
              </div>

              <div class="text-center pt-4">
                <button type="submit" class="btn-cta inline-flex items-center justify-center px-6 py-3 rounded-md text-base font-medium text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition duration-300 ease-in-out hover:brightness-110">
                  <?php echo t('contact_button'); ?> <i class="fa fa-paper-plane ml-2"></i>\
                </button>
              </div>
            </div>
          </form>
        </div>

        <div class="w-full h-96 lg:h-full">
             <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.176489439345!2d106.6581753!3d-6.106922900000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6a021f5b199579%3A0x3c49188d7cdaf679!2sJl.%20Perimeter%20Utara%2C%20Banten!5e0!3m2!1sid!2sid!4v1761744383829!5m2!1sid!2sid"  <-- GANTI SRC INI DENGAN URL EMBED GOOGLE MAPS YANG BENAR
                width="100%"
                height="100%"
                style="border:0;"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'common_footer.php'; ?>