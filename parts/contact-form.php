

<form name="sentMessage" id="contactForm" novalidate>
  <div class="row">
    <div class="form-group col-lg-4">
      <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Name is required">
        <p class="help-block text-danger"></p>
    </div>
    <div class="form-group col-lg-4">
      <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Email address is required">
        <p class="help-block text-danger"></p>
    </div>
    <div class="form-group col-lg-4">
      <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Phone number is required">
        <p class="help-block text-danger"></p>
    </div>
    <div class="clearfix"></div>
    <div class="form-group col-lg-12">
      <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Message is required" rows="16"></textarea>
        <p class="help-block text-danger"></p>
    </div>
    <div class="form-group col-lg-12">
      <div id="success"></div>
      <button type="submit" class="btn btn-primary btn-lg"> <i class="fa fa-cloud-upload"></i> Submit your enquiry</button>
    </div>
  </div>
</form>