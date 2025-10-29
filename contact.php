<?php include 'common_header.php'; ?>

<section id="contact" class="min-h-[calc(100vh-80px)] flex items-center justify-center py-12 bg-gray-50 dark:bg-gray-900 font-sans">
  <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 w-full"> 

    <div class="text-center mb-8 md:mb-10" data-aos="fade-up">
      <h1 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white">
        <?php echo t('contact_title') ?: 'Stay Connected with us'; ?> 
      </h1>
      <p class="mt-3 text-base text-gray-600 dark:text-gray-400 max-w-xl mx-auto">
        <?php echo t('contact_subtitle') ?: "Reach out for inquiries, support, or collaboration—we'd love to hear from you!"; ?> </p>
    </div>

    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-xl overflow-hidden" data-aos="fade-up" data-aos-delay="100">
      <div class="grid grid-cols-1 lg:grid-cols-2">

        <div class="p-6 md:p-8"> 
          <form id="contactForm" method="post" action="backend/save_complain.php"> 
            <div class="space-y-4"> 
              
              <div>
                <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1"><?php echo t('name'); ?></label>
                <input type="text" id="name" name="name" class="block w-full px-4 py-2.5 rounded-md border border-gray-300 dark:border-gray-600 bg-gray-50 dark:bg-gray-700 text-gray-900 dark:text-white placeholder-gray-400 dark:placeholder-gray-500 focus:ring-blue-500 focus:border-blue-500 shadow-sm" placeholder="<?php echo t('name'); ?>" required> 
              </div>

              <div>
                <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1"><?php echo t('email'); ?></label>
                <input type="email" id="email" name="email" class="block w-full px-4 py-2.5 rounded-md border border-gray-300 dark:border-gray-600 bg-gray-50 dark:bg-gray-700 text-gray-900 dark:text-white placeholder-gray-400 dark:placeholder-gray-500 focus:ring-blue-500 focus:border-blue-500 shadow-sm" placeholder="<?php echo t('email'); ?>" required> 
              </div>
              
              <div>
                <label for="subject" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1"><?php echo t('subject') ?: 'Subject'; ?></label> 
                <input type="text" id="subject" name="subject" class="block w-full px-4 py-2.5 rounded-md border border-gray-300 dark:border-gray-600 bg-gray-50 dark:bg-gray-700 text-gray-900 dark:text-white placeholder-gray-400 dark:placeholder-gray-500 focus:ring-blue-500 focus:border-blue-500 shadow-sm" placeholder="<?php echo t('subject_placeholder') ?: 'Enter subject...'; ?>"> </div>

              <div>
                <label for="message" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1"><?php echo t('message'); ?></label>
                <textarea id="message" name="message" rows="4" class="block w-full px-4 py-2.5 rounded-md border border-gray-300 dark:border-gray-600 bg-gray-50 dark:bg-gray-700 text-gray-900 dark:text-white placeholder-gray-400 dark:placeholder-gray-500 focus:ring-blue-500 focus:border-blue-500 shadow-sm resize-none" placeholder="<?php echo t('message_placeholder') ?: 'Type your message here...'; ?>" required></textarea> </div>

              <div class="pt-3"> 
                <button type="submit" id="contactSubmitBtn" class="w-full inline-flex items-center justify-center px-6 py-2.5 border border-transparent rounded-full shadow-sm text-base font-medium text-white bg-gradient-to-r from-green-500 to-blue-500 hover:from-green-600 hover:to-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition duration-300 ease-in-out transform hover:scale-105"> 
                  <?php echo t('contact_button') ?: 'Send Message'; ?> <i class="fa fa-paper-plane ml-2"></i>
                </button>
              </div>

            </div>
          </form>
          <div id="formMessage" class="mt-4 text-center"></div>
        </div>

        <div class="w-full h-full min-h-[450px] lg:min-h-0"> 
             <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.176489439345!2d106.6581753!3d-6.106922900000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6a021f5b199579%3A0x3c49188d7cdaf679!2sJl.%20Perimeter%20Utara%2C%20Banten!5e0!3m2!1sid!2sid!4v1761744383829!5m2!1sid!2sid" width="100%"
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