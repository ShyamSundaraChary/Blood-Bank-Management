<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Welcome to the Blood Bank Donor Management System. Our mission is to connect those in need of blood with potential donors.">
    <title>About Us - Blood Bank Donor Management System</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Roboto+Condensed:300,400,700" rel="stylesheet">
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
        }
        .lead {
            font-size: 1.25rem;
        }
        .toll-free {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 5px;
        }
        .about-section {
            padding: 60px 0;
            background: url('images/blood-bank-background.jpg') no-repeat center center;
            background-size: cover;
            color: black; /* Ensure text is readable on the background */
            border-radius: 10px;
        }
        .testimonial-carousel .carousel-item {
            min-height: 200px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }
        .testimonial-carousel .carousel-item p {
            font-size: 1.1rem;
            font-style: italic;
        }
        .testimonial-carousel .carousel-item img {
            border-radius: 50%;
            margin-bottom: 20px;
        }
        @keyframes scroll {
            0% {
                transform: translateX(100%);
            }
            100% {
                transform: translateX(-100%);
            }
        }
        .scrolling-text {
            white-space: nowrap;
            overflow: hidden;
            box-sizing: border-box;
        }
        .scrolling-text p {
            display: inline-block;
            animation: scroll 10s linear infinite;
            color: red; /* Set text color to red */
            font-size: 2rem; /* Adjust font size as needed */
            padding-left: 25%;
            padding-right: -25%;
        }
    </style>
</head>
<body>
    <?php include("shortcode/nav.php"); ?>

    <div class="container about-section mt-5">
        <div class="text-center m-lg-5">
            <h1 class="mb-4">About Us</h1>
        </div>
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <p class="fw-bold fs-5">
                    Welcome to the Blood Bank Donor Management System. We are dedicated to providing a critical service in connecting those in need of blood with potential blood donors. Our mission is to ensure that no one has to suffer due to a lack of available blood donors.
                </p>
                <p>
                    Our platform is designed to offer a seamless and efficient way for individuals and healthcare providers to find and connect with suitable blood donors. We understand the urgency and importance of blood donations and strive to make the process as smooth and stress-free as possible.
                </p>
                <p>
                    It's important to note that we do not store or provide blood. Instead, we focus on providing detailed information about potential blood donors. Our database is regularly updated and includes donors of various blood types ready to help in times of need.
                </p>
                <p>
                    The Blood Bank Donor Management System is equipped with advanced features to manage donor information, schedule donations, and send reminders to both donors and recipients. We also offer educational resources about the importance of blood donation and guidelines for donors.
                </p>
                <p>
                    We collaborate with hospitals, clinics, and community organizations to expand our reach and ensure a robust and reliable network of blood donors. Our platform is secure and complies with all data protection regulations to safeguard the privacy and confidentiality of our users.
                </p>
                <p>
                    For any queries or assistance, feel free to reach out to us through our toll-free number. Our dedicated support team is available 24/7 to assist you with any questions or concerns you might have.
                </p>
                <div class="text-center my-4 toll-free">
                    <h3 class="display-5">Toll-Free Number</h3>
                    <div class="scrolling-text">
                        <p class="lead">1-800-123-4567</p>
                    </div>
                    <p class="lead">Available 24/7 for your assistance</p>
                </div>
                <p>
                    Thank you for trusting us to help you find the right donors. Together, we can make a difference and save lives.
                </p>
            </div>
        </div>
        <div class="text-center mt-5">
            <h2>What Our Users Say</h2>
            <div id="testimonialCarousel" class="carousel slide testimonial-carousel" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="testimonial-content">
                            <img src="images/about.jpg" class="d-block mx-auto" alt="shyam, a satisfied blood donor" width="100">
                             <p> 
                                 "Be a blood donor, be a life changer!"</p>
                               <p>"Donate blood, save lives, "</p>
                               <p> "Give blood, give hope for life "</p>
                               <p>"Donating blood: the coolest way to save lives!"</p>
                               <p>"One small act, one big impact: donate blood today!"</p>
                               <p>"This platform has been a lifesaver. I found a donor quickly and easily!" - </p>
                        </div>
                    </div>
                    <!-- Add more testimonials as needed -->
                </div>            </div>
        </div>
    </div>

    <?php include('shortcode/footer.php'); ?>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
