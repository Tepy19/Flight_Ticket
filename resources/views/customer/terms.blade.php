<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paragon Airlines | Terms and Conditions</title>
    <link rel="stylesheet" href="{{ asset('css/terms_and_conditions.css') }}">
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="logo">
                <img src="{{ asset('img/pii.png') }}" alt="">
                <div class="logo-text">
                    <h4>Paragon Airlines</h4>
                </div>
            </div>
            <ul>
                <li><a href="{{ route('customer') }}">HOME</a></li>
                <li><a href="{{ route('customer.about') }}">ABOUT</a></li>
                <li><a href="{{ route('customer.information') }}">INFORMATION</a></li>
                <li><a href="{{ route('customer.terms') }}">TERMS</a></li>
                <li><a href="{{ route('customer.contact.contact') }}">CONTACT</a></li>
            </ul>
        </nav>
    </header>

    <div class="content">
        <h1>Paragon Airlines: Terms and Conditions</h1>
        <p>Welcome to Paragon Airlines' Online Flight Booking System. By using this website, you agree to the following terms and conditions:</p>

        <ol>
            <li><strong>Acceptance of Terms:</strong> These terms and conditions govern your use of our Online Flight Booking System. By accessing or using the website, you acknowledge that you have read, understood, and agreed to these terms.</li>
            <li><strong>User Eligibility:</strong> You must be at least 18 years old to use this website. By using this platform, you represent and warrant that you have the legal right and capacity to enter into this agreement.</li>
            <li><strong>Booking Process:</strong> Our website allows you to search for flights, view prices, and make bookings. The availability of flights is subject to change and may not always be guaranteed.</li>
            <li><strong>Health and Safety:</strong> It's your responsibility to ensure that you meet any health or vaccination requirements for your travel destination. Additionally, you agree to comply with any health and safety protocols imposed by airlines or authorities.</li>
            <li><strong>Dispute Resolution:</strong> Any disputes arising from your use of the website or related to your bookings will be resolved in accordance with the laws of the jurisdiction where Paragon Airlines is based.</li>
            <li><strong>Prohibited Activities:</strong> You agree not to use the website for any illegal, fraudulent, or unauthorized purposes. This includes not engaging in any activities that could harm the website's functionality or security.</li>
        </ol>

        <p>By using Paragon Airlines' Online Flight Booking System, you agree to abide by these terms and conditions. If you do not agree with any part of these terms, please refrain from using the website. Thank you for choosing Paragon Airlines for your travel needs.</p>

        <div class="button">
            <a href="{{ route('customer') }}">
                <button class="back-btn">Book Now</button>
            </a>              
        </div>
    </div>
</body>
</html>

