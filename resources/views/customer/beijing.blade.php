<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Paragon Airlines | Beijing</title>
  <link rel="stylesheet" href="{{ asset('css/city-guide.css') }}">
  <script src="index.js"></script>
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
    <div class="container">
      <section class="city-intro">
        <h1>Welcome to Beijing!</h1>
        <p>Explore the captivating history and modern wonders of Beijing, China's capital city. From ancient landmarks like the Great Wall and the Forbidden City to the vibrant street markets, Beijing offers a journey through time and culture. Immerse yourself in the rich traditions and rapid development that define this global metropolis.</p>
      </section>
      
      <section class="city-highlights">
        <h2>City Highlights</h2>
        <div class="highlight">
          <div class="highlight-1">
            <img src="{{ asset('img/beijing_highlight1.jpeg') }}" alt="The Great Wall">
            <div class="text">
              <h3>The Great Wall</h3>
              <p>Experience the awe-inspiring majesty of the Great Wall of China, one of the world's most iconic landmarks. Stretching across rugged landscapes, this ancient fortification is a testament to human engineering and determination.</p>
              <p>Explore various sections of the wall, each with its own unique charm and panoramic views. Stand atop its ancient stones and reflect on its historical significance and cultural significance.</p>
            </div>
          </div>
        </div>
        <div class="highlight">
          <div class="highlight-1">
            <div class="text">
              <h3>Forbidden City</h3>
              <p>Step into the imperial past by visiting the Forbidden City, a magnificent palace complex that once housed emperors of the Ming and Qing dynasties. Marvel at its grand architecture, intricate courtyards, and ornate decorations.</p>
              <p>Explore the many halls and chambers that were once off-limits to the public, and gain insights into China's imperial history and cultural heritage. The Forbidden City is a treasure trove of historical artifacts and architectural marvels.</p>
            </div>            
            <img src="{{ asset('img/beijing_highlight2.jpeg') }}" alt="Forbidden City">
          </div>
        </div>
      </section>
      
      <section class="city-culture">
        <h2>Cultural Delights</h2>
        <div class="culture-item">
          <div class="culture-item-1">
            <img src="{{ asset('img/beijing_culture1.jpeg') }}" alt="Temple of Heaven">
            <div class="text">
              <h3>Temple of Heaven</h3>
              <p>Visit the Temple of Heaven, a serene and spiritual complex where emperors once performed rituals to ensure a bountiful harvest. The intricate architecture, expansive park, and historical significance make it a must-visit destination.</p>
              <p>Take a stroll through its tranquil gardens, witness locals engaging in various traditional activities, and soak in the peaceful ambiance that continues to draw visitors seeking spiritual connection.</p>
            </div>                           
          </div>
        <div class="culture-item">
          <div class="culture-item-1">
            <div class="text">
              <h3>Wangfujing Street</h3>
              <p>Explore the bustling Wangfujing Street, a vibrant shopping district that offers a mix of modern retail outlets and traditional street food stalls. Experience the energy of Beijing's urban life as you browse through international brands and sample local delicacies.</p>
              <p>From designer boutiques to night markets, Wangfujing Street provides a snapshot of Beijing's contemporary consumer culture and its connection to the past.</p>
            </div>           
            <img src="{{ asset('img/beijing_culture2.jpeg') }}" alt="Wangfujing Street">
          </div>
        </div>
      </section> 
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
  </main>
</body>

</html>
