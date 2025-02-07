<footer class="cs_footer cs_bg_filed cs_shape_wrap cs_footer_shapes_1" data-src="assets/img/footer_bg1.png">

  <div class="container wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">

  </div>
  <div class="container wow fadeIn" data-wow-duration="1s" data-wow-delay="0.35s">
    <div class="cs_footer_row">
      <div class="cs_footer_col">
        <div class="cs_footer_widget">
          <div class="cs_text_widget">
            <img src="assets/img/home/logo_new.png" alt="Logo">
            <p>Iconic Web Media is dedicated
              to ethical marketing, sustainable
              growth, and making a positive
              impact.</p>

          </div>
        </div>
      </div>
      <div class="cs_footer_col">
        <div class="cs_footer_widget">
          <h2 class="cs_footer_widget_title">Quick Links</h2>
          <ul class="cs_footer_menu">
            <li><a href="/">Home</a></li>
            <li><a href="about_us">About Us</a></li>
            <li><a href="contact_us">Contact Us</a></li>
            <li><a href="blog">Blog</a></li>
          </ul>
        </div>
      </div>
      <div class="cs_footer_col">
        <div class="cs_footer_widget">
          <h2 class="cs_footer_widget_title">Services</h2>
          <ul class="cs_footer_menu">
            <li><a href="graphics-design">Graphics Designing</a></li>
            <li><a href="digital-marketing">Digital Marketing</a></li>
            <li><a href="web-development">Web Development</a></li>
            <li><a href="ui-ux-development">UI UX Design</a></li>
            <li><a href="ecommerce">Ecommerce Development</a></li>
            <li><a href="app-development">Application Development</a></li>
          </ul>
        </div>
      </div>

      <div class="cs_footer_col">
        <div class="cs_footer_widget">
          <h2 class="cs_footer_widget_title">Stay in Touch</h2>
          <p>Follow us on social media. <br>
            for more inspiring content!</p>
          <div class="cs_social_btns">
            <a href="https://www.facebook.com/people/Iconic-Web-Media/61568543876381/" target="_blank" class="cs_center"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/iconicwebmedia/" target="_blank" class="cs_center"><i class="fa-brands fa-instagram"></i></a>
            <!-- <a href="#" class="cs_center"><i class="fa-brands fa-telegram"></i></a> -->
            <a href="https://www.linkedin.com/authwall?trk=bf&trkInfo=AQEZvzUF-c01tgAAAZSZdO8I8pS8KMXu_ajkx1cZtOXqZWTR8RAVAO88ftGS9UWAXgFqCqB70KTO2Y_tI57jWC-co68HmJNGCXbLrG6aEn0H425x4qKEiqwNpBInu0aMS-3p6iA=&original_referer=&sessionRedirect=https%3A%2F%2Fwww.linkedin.com%2Fcompany%2Ficonic-web-media" target="_blank" class="cs_center"><i class="fa-brands fa-linkedin-in"></i></a>
          </div>
        </div>
      </div>
    </div>
    <div class="row">

    </div>

    <div class="cs_footer_bottom" style="text-align: center;">
      <p class="mb-0 cs_copyright">
        <i class="fa-solid fa-envelope" style="color: #ed00cf;"></i> Info@Iconicwebmedia.com
        &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
        <i class="fa-solid fa-phone" style="color: #ed00cf;"></i> +92 314 5520233
      </p>
    </div>

  </div>
</footer>
<!-- End Footer Section -->

<!--Start of Tawk.to Script-->
<script type="text/javascript">
  var Tawk_API = Tawk_API || {},
    Tawk_LoadStart = new Date();
  (function() {
    var s1 = document.createElement("script"),
      s0 = document.getElementsByTagName("script")[0];
    s1.async = true;
    s1.src = 'https://embed.tawk.to/6790ffe13a842732607302ce/1ii76f35c';
    s1.charset = 'UTF-8';
    s1.setAttribute('crossorigin', '*');
    s0.parentNode.insertBefore(s1, s0);
  })();
</script>
<!--End of Tawk.to Script-->

<!-- Script -->
<script src="assets/js/jquery-3.6.0.min.js"></script>
<script src="assets/js/gsap.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/jquery.slick.min.js"></script>
<script src="assets/js/odometer.js"></script>
<script src="assets/js/main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
  // Function to animate the counters
  function animateCounter(element) {
    const countTo = parseInt(element.getAttribute('data-count'), 10);
    let count = 0;
    const speed = 200; // Adjust the speed (lower means faster)
    const isPercentage = element.textContent.includes('%'); // Check if it's a percentage

    const step = () => {
      const increment = Math.ceil(countTo / speed);
      count += increment;

      // Ensure count does not exceed countTo
      if (count < countTo) {
        element.textContent = count + (isPercentage ? '%' : '+'); // Add sign dynamically
        requestAnimationFrame(step);
      } else {
        element.textContent = countTo + (isPercentage ? '%' : '+'); // Add sign on completion
      }
    };

    requestAnimationFrame(step);
  }

  // Observe when the section comes into view
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const counters = entry.target.querySelectorAll('.homesection_4_h1');
        counters.forEach(counter => animateCounter(counter));
        observer.unobserve(entry.target); // Stop observing once counters start
      }
    });
  }, {
    threshold: 0.5
  });

  // Apply observer to the section
  const section = document.querySelector('.homesection_4');
  if (section) {
    observer.observe(section);
  }
</script>

<script>
  function changeBackground(imageUrl) {
    const tabContent = document.getElementById('v-pills-tabContent');
    tabContent.style.backgroundImage = `url('${imageUrl}')`;
  }

  // Set default background image on page load
  document.addEventListener('DOMContentLoaded', () => {
    changeBackground('assets/img/digital33.png');
  });
</script>

<!-- banner slider -->
<script>
  // JavaScript for background slider
  document.addEventListener("DOMContentLoaded", function() {
    const section = document.querySelector(".background_section");
    const images = [
      "assets/img/home_banner2.png",
      "assets/img/home_banner3.png",
      "assets/img/home_banner4.png"
    ];
    let currentIndex = 0;

    // Function to update the background image
    const updateBackground = () => {
      currentIndex = (currentIndex + 1) % images.length;
      section.style.backgroundImage = `url('${images[currentIndex]}')`;
    };

    // Change background every 10 seconds
    setInterval(updateBackground, 5000);
  });
</script>
<!-- banner slider -->

<script>
  function send_contact_us(event) {
    // Prevent form from submitting and refreshing the page
    event.preventDefault();

    var your_name = $('#your_name').val();
    var your_email = $('#your_email').val();
    var regex = /^([a-zA-Z0-9_.+-])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$/;
    var phone_number = $('#phone_number').val() || '-';
    var message = $('#message').val() || '-';

    if (your_name) {
      if (regex.test(your_email)) {
        $("#form-submit-contact").empty().append('<i class="fa fa-spinner fa-spin"></i>');
        document.getElementById("contact_form").disabled = true;

        $.ajax({
          url: 'flaski.php',
          type: "POST",
          data: {
            your_name: your_name,
            your_email: your_email,
            phone_number: phone_number,
            message: message,
            contact_us: 'btn'
          },
          success: function(res) {
            console.log('success', res);
            swal({
              title: "Message Sent!",
              text: "We will contact you Shortly",
              icon: "success",
              button: "Ok",
            });
            $("#form-submit-contact").empty().append('Send Message');
            document.getElementById("form-submit-contact").disabled = false;
            $('#contact_form')[0].reset();
          },
          error: function(res) {
            console.log('error', res);
            swal({
              title: "Error",
              text: "Something went wrong, please try again later",
              icon: "error",
              button: "Ok",
            });
          }
        });
      } else {
        swal({
          title: "Email Address Error",
          text: "Please Enter Valid Email Address",
          icon: "error",
          button: "Ok",
        });
      }
    } else {
      swal({
        title: "First Name Error",
        text: "Please Enter Your First Name",
        icon: "error",
        button: "Ok",
      });
    }
  }
</script>

<script>
  var url = 'https://wati-integration-prod-service.clare.ai/v2/watiWidget.js?27141';
  var s = document.createElement('script');
  s.type = 'text/javascript';
  s.async = true;
  s.src = url;
  var options = {
    "enabled": true,
    "chatButtonSetting": {
      "backgroundColor": "#00ff00",
      "ctaText": "Chat with us",
      "borderRadius": "25",
      "marginLeft": "0",
      "marginRight": "20",
      "marginBottom": "20",
      "ctaIconWATI": false,
      "position": "left"
    },
    "brandSetting": {
      "brandName": "Wati",
      "brandSubTitle": "undefined",
      "brandImg": "https://www.wati.io/wp-content/uploads/2023/04/Wati-logo.svg",
      "welcomeText": "Hi there!\nHow can I help you?",
      "messageText": "Hello, %0A I have a question about {{page_link}}",
      "backgroundColor": "#00ff00",
      "ctaText": "Chat with us",
      "borderRadius": "25",
      "autoShow": true,
      "phoneNumber": "93145520233"
    }
  };
  s.onload = function() {
    CreateWhatsappChatWidget(options);
  };
  var x = document.getElementsByTagName('script')[0];
  x.parentNode.insertBefore(s, x);
</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</body>

</html>