<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paragon Airlines | Phnom Penh</title>
    <link rel="stylesheet" href="{{ asset('css/city-guide.css') }}">
    <script src="">index.js</script>
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
        <h1>Welcome to Phnom Penh!</h1>
        <p>Explore the captivating history, vibrant culture, and bustling streets of Phnom Penh, Cambodia's charming capital. From its ancient temples to bustling markets, Phnom Penh offers a blend of tradition and modernity that will leave you enthralled.</p>
      </section>

      <section class="city-highlights">
        <h2>City Highlights</h2>
        <div class="highlight">
          <div class="highlight-1">
            <img src="{{ asset('img/phnom-penh_highlight1.jpg') }}" alt="Royal Palace">
            <div class="text">
              <h3>Royal Palace</h3>
              <p>Visit the iconic Royal Palace, a symbol of Cambodia's rich history and architectural elegance. Explore the Silver Pagoda, known for its stunning silver floors, and immerse yourself in the grandeur of the Throne Hall and other exquisite buildings.</p>
              <p>The palace complex is a testament to Cambodia's royal heritage and offers a glimpse into the country's cultural significance.</p>
            </div>
          </div>
        </div>
        <div class="highlight">
          <div class="highlight-1">
            <div class="text">
              <h3>Central Market</h3>
              <p>Experience the vibrant atmosphere of Phnom Penh's Central Market, locally known as Psar Thmei. This iconic market features a stunning Art Deco building that houses a variety of stalls selling jewelry, clothing, electronics, and local crafts.</p>
              <p>Exploring Central Market is not only a shopping adventure but also an opportunity to immerse yourself in the local culture and witness the daily lives of Phnom Penh's residents.</p>
            </div>
            <img src="{{ asset('img/phnom-penh_highlight2.jpg') }}" alt="Central Market">
          </div>
        </div>
      </section>

      <section class="city-culture">
        <h2>Cultural Delights</h2>
        <div class="culture-item">
          <div class="culture-item-1">
            <img src="{{ asset('img/phnom-penh_culture1.jpg') }}" alt="Wat Phnom">
            <div class="text">
              <h3>Wat Phnom</h3>
              <p>Pay a visit to Wat Phnom, a historic temple situated on a hill that offers panoramic views of the city. This sacred site is not only a religious landmark but also a place where locals and tourists alike come to seek blessings and tranquility.</p>
              <p>Explore the serene surroundings, learn about the temple's legends, and observe the rituals that take place here.</p>
            </div>
          </div>
        </div>
        <div class="culture-item">
          <div class="culture-item-1">
            <div class="text">
              <h3>National Museum</h3>
              <p>Delve into Cambodia's rich history and artistry at the National Museum. Discover a vast collection of artifacts, sculptures, and artworks that showcase the country's cultural heritage, spanning from the Khmer Empire to the present day.</p>
              <p>The museum provides valuable insights into Cambodia's past and its enduring cultural significance.</p>
            </div>
            <img src="{{ asset('img/phnom-penh_culture2.jpg') }}" alt="National Museum">
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
