<?php include_once "header.php"; ?>




<section class="contact_section">
    <div class="container">
        <h1 class="about_section2_h1">Contact us</h1>
        <p class="about_section2_p1">The importance of SEO services for companies seeking to attract new customers</p>
        <div class="row">
            <div class="col-md-6">
                <img src="assets/img/home/contact_img2.png" alt="">
            </div>
            <div class="col-md-6 form_background">

                <form id="contact_form" method="post" novalidate="novalidate">
                    <div class="form-group">
                        <label for="name">First Name:</label>
                        <input type="text" name="your_name" id="your_name" placeholder="Enter your name...">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" name="your_email" id="your_email" placeholder="Enter your Email...">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number:</label>
                        <input type="tel" name="phone_number" id="phone_number" placeholder="+1 123 456 789">
                    </div>
                    <div class="form-group">
                        <label for="message">Message:</label>
                        <textarea id="message" name="message" rows="5" style="height:auto;" placeholder="Enter your message..."></textarea>
                    </div>
                    <button id="form-submit-contact" type="submit" class="submit-button" onclick="send_contact_us(event)">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include_once "footer.php"; ?>