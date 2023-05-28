<section id="contact" data-stellar-background-ratio="0.5">
    <div class="container">
         <div class="row">
              <div class="wow fadeInUp col-md-6 col-sm-12" data-wow-delay="0.4s">
                   <div id="google-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d7304.147756614027!2d90.3685458915681!3d23.744744764696694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sdhanmondi%2010%2Fa!5e0!3m2!1sen!2sbd!4v1685241596969!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                   </div>
              </div>

              <div class="col-md-6 col-sm-12">

                   <div class="col-md-12 col-sm-12">
                        <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                             <h2>Reserve A Table</h2>
                        </div>
                   </div>

                   <!-- CONTACT FORM -->
                   <form action="{{url('/view_reservation')}}" method="post" class="wow fadeInUp" id="contact-form" role="form" data-wow-delay="0.8s">
                        @csrf
                        <!-- IF MAIL SENT SUCCESSFUL  // connect this with custom JS -->
                        <h6 class="text-success">Your message has been sent successfully.</h6>

                        <!-- IF MAIL NOT SENT -->
                        <h6 class="text-danger">E-mail must be valid and message must be longer than 1 character.</h6>

                        <div class="col-md-6 col-sm-6">
                             <input type="text" class="form-control" id="cf-name" name="name" placeholder="Full name">
                        </div>

                        <div class="col-md-6 col-sm-6">
                             <input type="email" class="form-control" id="cf-email" name="email" placeholder="Email address">
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <input type="time" class="form-control" id="cf-name" name="time">
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <input type="date" class="form-control" id="cf-email" name="date">
                        </div>

                        <div class="col-md-12 col-sm-12">
                             <input type="number" class="form-control" id="cf-subject" name="guest" placeholder="Enter Total Guest Number" min="1">

                             <textarea class="form-control" rows="6" id="cf-message" name="message" placeholder="Tell Us Your Message"></textarea>

                             <button type="submit" class="form-control" id="cf-submit" name="submit">Confirm Reservation</button>
                        </div>
                   </form>
              </div>

         </div>
    </div>
</section>
