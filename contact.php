<?php
$message_sent = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get and sanitize form inputs
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Your email address
    $to = "youremail@example.com"; // <-- replace with your email
    $subject = "New Contact Form Message";
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        $message_sent = true;
    } else {
        echo "<script>alert('Sorry, your message could not be sent.');</script>";
    }
}
?>
<?php
if ($message_sent) {
    echo "<p style='color:green; text-align:center;'>Thank you! Your message has been sent.</p>";
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | Pathfinder Club</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header id="header">
        <div class="container nav-container">
            <div class="logo"><img src="logo.png" alt="Logo"><span>Pathfinder Club</span></div>
            <nav id="navbar">
                <ul class="nav-links">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="activities.html">Activities</a></li>
                    <li><a href="gallery.html">Gallery</a></li>
                    <li><a href="events.html">Events</a></li>
                    <li><a href="contact.html" class="active">Contact</a></li>
                </ul>
                <button id="darkModeToggle">🌙</button>
            </nav>
        </div>
    </header>

    <section class="hero-slider">
        <div class="slide active">
            <div class="hero-content">
                <h1>Contact Us</h1>
                <p>We would love to hear from you</p>
            </div>
        </div>
    </section>

    <section class="contact section" id="contact">
        <div class="container">
            <h2>Send a Message</h2>
          <form action="contact.php" method="POST">
  <input type="text" name="name" placeholder="Your Name" required>
  <input type="email" name="email" placeholder="Your Email" required>
  <textarea name="message" placeholder="Your Message" required></textarea>
  <button class="btn primary" type="submit">Send Message</button>
</form>


            <h2>Contact Information</h2>
            <p>Email: info@pathfinderclub.org</p>
            <p>Phone: +233 XXX XXX XXX</p>
            <p>Address: 123 Church Street, City, Country</p>
        </div>
    </section>

    <footer>
        <div class="footer-bottom">
            <p>© 2025 Pathfinder Club</p>
        </div>
    </footer>

    <script src="script.js"></script>
</body>

</html>