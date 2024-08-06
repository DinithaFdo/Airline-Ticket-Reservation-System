<?php
    include_once 'import/header.php';
?>

<div class="contact-container">
        <h1>Contact Us</h1>
        <div class="contact-info">
            <div class="contact-item">
                <i class="fas fa-map-marker-alt"></i>
                <p>123 Main Street</p>
                <p>City, Country</p>
            </div>
            <div class="contact-item">
                <i class="fa fa-phone"></i>
                <p>Phone: +123 456 789</p>
            </div>
            <div class="contact-item">
                <i class="fa fa-envelope"></i>
                <p>Email: info@example.com</p>
            </div>
        </div>
        <form class="contact-form">
            <input type="text" placeholder="Your Name" required>
            <input type="email" placeholder="Your Email" required>
            <textarea placeholder="Your Message" rows="4" required></textarea>
            <button type="submit">Send Message</button>
        </form>
</div>

<div class="faq-container">
    <h1>Frequently Asked Questions (FAQs)</h1>

    <div class="faq-item">
        <h2>1. How can I book a flight?</h2>
        <p>You can easily book a flight by going to our homepage and using our flight booking form. Enter your travel details, select a flight, and complete the booking process.</p>
    </div>

    <div class="faq-item">
        <h2>2. Can I change my booking?</h2>
        <p>Yes, you can change your booking by logging into your account and accessing the Manage Booking section. Follow the instructions to modify your reservation.</p>
    </div>

    <div class="faq-item">
        <h2>10. How can I contact customer support?</h2>
        <p>You can reach our customer support team through our Contact Us page or by calling our customer service hotline at +123 456 789.</p>
    </div>
</div>


    <!-- this section is hidden. only applied when user clicked sign up or login button -->
    <?php
    include_once 'login.php';
    ?>

<?php
    include_once 'import/footer.php';
?>