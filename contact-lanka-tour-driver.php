<?php include_once 'components/header.php'; ?>

<title>Contact Your Guide in Sri Lanka | Lanka Tour Driver</title>

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
  <div id="nav">
    <?php include_once 'components/header-nav.php'; ?>
  </div>

  <section class="inner-page-header">
    <div class="inner-page-header-background"
      style="background-image: url('assets/img/page-headers/lankatourdriver.com-natural-attractions-sri-lanka-headerImage-1400x500.webp')">
    </div>
    <div class="page-heading">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="inne-page-title">Contact Your Guide in Sri Lanka</h1>
            <p class="inner-page-sub-title">Let's plan your next trip to Sri Lanka</p>
          </div>

        </div>
      </div>
    </div>



  </section>

  <section class="home-section text-center" style="padding-bottom: 10px; padding-top: 20px">
    <div class="container">
      <div class="text-left">
        <p>
          Get in touch with Lanka Tour Driver today, and we'll provide you with a free, no-obligation quote for the
          vacation of your dreams. The same holds true if you have any other questions concerning our trips, transfers,
          or suggested lodgings. Please don't hesitate to get in touch with us, and we will be pleased to offer you any
          and all assistance we can.
        </p>

      </div>
    </div>
  </section>

  <section id="contact" class="text-center" style="padding-top: 10px">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="boxed-grey">
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <form id="contact-form" action="" method="post" role="form" class="contactForm" _lpchecked="1">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="name"> Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                      data-rule="minlen:4" data-msg="Please enter at least 4 chars" style="
                          background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==');
                          background-repeat: no-repeat;
                          background-attachment: scroll;
                          background-size: 16px 18px;
                          background-position: 98% 50%;
                          cursor: auto;
                        " />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group">
                    <label for="email"> Email Address</label>
                    <div class="form-group">
                      <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                        data-rule="email" data-msg="Please enter a valid email" />
                      <div class="validation"></div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="name"> Message</label>
                    <textarea class="form-control" name="message" rows="5" data-rule="required"
                      data-msg="Please write something for us" placeholder="Message"></textarea>
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div id="recaptcha" class="g-recaptcha" data-sitekey="6Lestr0UAAAAAOOJLHRpaEmlzkMTTRTnEYB1rCU7"
                    data-callback="onSubmit" data-size="invisible"></div>
                  <button type="submit" class="btn btn-bg-clr-1 pull-right" id="btnContactUs">
                    Send Message
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>

        <div class="col-lg-6">
          <iframe
          rel="preconnect" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d112656.02224320214!2d80.86939089796674!3d7.933950370107724!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf30dcf6cf788c7c1!2sLanka%20Tour%20Driver!5e0!3m2!1sen!2slk!4v1570927808128!5m2!1sen!2slk"
            width="100%" height="450" frameborder="0" style="border: 0" allowfullscreen=""></iframe>
        </div>
      </div>
    </div>
  </section>



  <footer>
    <?php include_once 'components/footer.php' ?>

    <!-- Custom JavaScript -->
    <script async src="contactform/contactform.js" type="text/javascript"></script>
    <!-- reCAPTCHA JavaScript -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</body>

</html>