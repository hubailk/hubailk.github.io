<?php
  <section id="contact" class="contact">
  <div class="container">
    <!-- ... keep existing title ... -->

    <div class="row" data-aos="fade-in">
      <div class="col-lg-5 d-flex align-items-stretch">
        <!-- ... keep existing contact info ... -->
      </div>

      <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
        <form action="https://formspree.io/f/manelwwk" method="POST" class="email-form">
          <div class="row">
            <div class="form-group col-md-6">
              <label for="name">Your Name</label>
              <input type="text" name="name" class="form-control" required>
            </div>
            <div class="form-group col-md-6">
              <label for="email">Your Email</label>
              <input type="email" name="email" class="form-control" required>
            </div>
          </div>
          <div class="form-group">
            <label for="subject">Subject</label>
            <input type="text" name="subject" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="message">Message</label>
            <textarea name="message" class="form-control" rows="10" required></textarea>
          </div>
          <div class="text-center">
            <button type="submit">Send Message</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

?>
