
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Paragon Airlines | Home</title>
  <link rel="stylesheet" href="{{ asset('css/about.css') }}">
  <script src="{{ asset('index.js') }}"></script>
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

  <main>
    <section class="main-pic">
      <img src="{{ asset('img/home1.jpg') }}" alt="">
    </section> 
    <div class="about-us-container">
        <div class="about-us-text">
            <h1>
                Connecting Cambodia and Beyond
            </h1>
            <p>Welcome to our small airline, based in the vibrant city of Phnom Penh, Cambodia. We take great pride in connecting people and places, bringing the world closer together through our extensive network of over 100 flying routes. As a local airline, we strive to provide a reliable and efficient travel experience, enabling our passengers to explore the beauty of Cambodia and venture beyond its borders.
            </p><p>Established with a vision to enhance regional connectivity, our airline has quickly grown to become a trusted name in the aviation industry. With a commitment to exceptional service, safety, and affordability, we have garnered a loyal customer base and earned a reputation for excellence.
            </p><p>Our fleet consists of state-of-the-art aircraft, equipped with the latest technology and amenities to ensure a comfortable journey for our passengers. We prioritize safety above all else and adhere to stringent maintenance standards, leaving no room for compromise.
            </p><p>At the heart of our operations lies our dedicated team of professionals who are passionate about delivering a seamless travel experience. From our skilled pilots and cabin crew to our ground staff and customer service representatives, we work together to ensure every aspect of your journey is smooth and enjoyable. We prioritize personalized service, going the extra mile to accommodate your needs and preferences.
            </p><p>As a small airline, we understand the importance of accessibility. That's why we have strategically developed an extensive network of flying routes, connecting Phnom Penh to various domestic and international destinations. Whether you are planning a business trip, a family vacation, or a weekend getaway, our wide range of routes offers convenience and flexibility, allowing you to reach your desired destination with ease.
            </p><p>But our commitment to service extends beyond air travel. We believe in giving back to the communities we serve and actively participate in various corporate social responsibility initiatives. From supporting local education and healthcare projects to promoting sustainable tourism practices, we strive to make a positive impact on society and the environment.
            </p><p>As we continue to grow, our focus remains on enhancing our services and expanding our route network to provide even more options for our passengers. We listen to your feedback and constantly innovate to meet your evolving travel needs.
            </p><p>Whether you're a frequent flyer or embarking on your first adventure, we invite you to experience the warmth of our hospitality, the efficiency of our operations, and the convenience of our extensive route network. Come fly with us and discover the wonders that Cambodia and the world have to offer. We are your gateway to unforgettable journeys.
            </p><p>At our small airline, we are dedicated to connecting Cambodia and beyond, one flight at a time.
            </p>
        </div>
        <div class="about-us-link">
            <h2>CITY GUIDES</h2>
            <a href="seoul.html">Seoul</a><br>
            <a href="singapore.html">Singapore</a><br>
            <a href="kuala_lumpur.html">Kuala Lumpur</a><br>
            <h2>USEFUL LINKS</h2>
            <a href="{{ route('customer') }}">Home</a><br>
            <a href="#">About</a><br>
            <a href="singapore.html">GUIDE</a><br>
            <a href="terms.html">TERMS</a></p>
        </div>
    </div>
            
    <div class="container1">
      <footer>
          <div class="contact">
              <div class="icon">
                  <a href="{{ url('https://paragoniu.edu.kh/') }}"><img src="{{ asset('img/facebook-f.svg') }}"
                          alt="Facebook"></a>
                  <a href="{{ url('https://paragoniu.edu.kh/') }}"><img src="{{ asset('img/tumblr.svg') }}"
                          alt="tumblr"></a>
                  <a href="{{ url('https://paragoniu.edu.kh/') }}"><img src="{{ asset('img/twitter.svg') }}"
                          alt="twitter" style="width: 25px;"></a>
                  <a href="{{ url('https://paragoniu.edu.kh/') }}"><img src="{{ asset('img/youtube.svg') }}"
                          alt="youtube" style="width: 25px;"></a>
                  <a href="{{ url('https://paragoniu.edu.kh/') }}"><img src="{{ asset('img/reddit.svg') }}"
                          alt="" style="width: 25px;"></a>
                  <a href="{{ url('https://paragoniu.edu.kh/') }}"><img src="{{ asset('img/tiktok.svg') }}"
                          alt="" style="width: 25px;"></a>
              </div>
          </div>
          <br><br><br>
          <hr>
          <div class="box0">
              <div class="na">
                  <h3>PARAGON AIRLINES</h3>
              </div>
              <div class="name">
                  <h3>CITY GUIDES</h3>
                  <p>
                      <a href="{{ route('customer.phnompenh') }}">Phnom Penh</a><br>
                      <a href="{{ route('customer.seoul') }}">Seoul</a><br>
                      <a href="{{ route('customer.singapore') }}">Singapore</a><br>
                      <a href="{{ route('customer.kuala') }}">Kuala Lumpur</a><br>
                      <a href="{{ route('customer.bangkork') }}">Bangkok</a><br>
                      <a href="{{ route('customer.jakata') }}">Jakarta</a><br>
                      <a href="{{ route('customer.beijing') }}">Beijing</a><br>
                      <a href="{{ route('customer.hanoi') }}">Hanoi</a><br>
                      <a href="{{ route('customer.dubai') }}">Dubai</a>
                  </p>
                  </p>
              </div>
              <div class="link">
                  <h3>USEFUL LINKS</h3>
                  <p><a href="{{ route('customer') }}">Home</a><br>
                      <a href="{{ route('customer.about') }}">About</a><br>
                      <a href="{{ route('customer.information') }}">Information</a><br>
                      <a href="{{ route('customer.contact.contact') }}">Contact</a>
                  </p>
              </div>
              <div class="add">
                  <h3>CONTACT</h3>
                  paragonair.com.kh<br>
                  No. 8, St. 315,<br>
                  Boeng Kak 1, Tuol Kork,<br>
                  Phnom Penh, Cambodia, 12151<br>
                  +855(0) 23 666 969<br>
                  +855(0) 23 168 168
              </div>
          </div>
      </footer>
  </div>
  </div>