<!-- "

Names:
Sothea Seng
Suntei Leang
Natepy Vann

Online Flight Booking System
Paragon Airlines

" -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Paragon Airlines | Seoul</title>
  <link rel="stylesheet" href="{{ asset('css/seoul.css') }}">
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
    <div class="container">
      <section class="city-intro">
        <h1>Welcome to Seoul!</h1>
        <p>Discover the vibrant culture, rich history, and modern marvels of Seoul. Nestled between traditional palaces and gleaming skyscrapers, Seoul offers a mesmerizing blend of old and new, creating an unforgettable experience for travelers.</p>
      </section>
      
      <section class="city-highlights">
        <h2>City Highlights</h2>
        <div class="highlight">
          <div class="highlight-1">
            <img src="{{ asset('img/seoul_highlight1.jpg') }}" alt="Gyeongbokgung Palace">
            <div class="text">
              <h3>Gyeongbokgung Palace</h3>
              <p>Step into the grandeur of Gyeongbokgung Palace, a magnificent testament to Seoul's royal heritage. As the largest of the Five Grand Palaces, it stands as a living relic of the Joseon Dynasty. Admire its intricate architecture, from regal gates to serene pavilions, each whispering tales of a bygone era.</p>
              <p>Explore the palace grounds to witness the Changing of the Guard ceremony, a captivating tradition that transports you to the past. The palace also houses the National Palace Museum of Korea, offering a captivating glimpse into royal life. Gyeongbokgung Palace is not just a place; it's a gateway to Korea's storied history.</p>
            </div>
          </div>
        </div>
        <div class="highlight">
          <div class="highlight-1">
            <div class="text">
              <h3>Myeongdong Shopping Street</h3>
              <p>Indulge in retail therapy at Myeongdong, the pulsating heart of Seoul's shopping scene. A paradise for fashion enthusiasts, this bustling district boasts an array of international brands and local gems that beckon both fashionistas and casual shoppers alike.</p>
              <p>As you navigate through the vibrant streets, your senses are treated to a symphony of colors, scents, and flavors. Beyond fashion, Myeongdong is a culinary adventure with its street food stalls, offering tantalizing treats that fuel your shopping spree. Whether you're hunting for the latest trends or seeking delectable bites, Myeongdong is where style meets gastronomy.</p>
            </div>            
            <img src="{{ asset('img/seoul_highlight2.jpg') }}" alt="Myeongdong Shopping Street">
          </div>
        </div>
      </section>
      
      <section class="city-culture">
        <h2>Cultural Delights</h2>
        <div class="culture-item">
          <div class="culture-item-1">
            <img src="{{ asset('img/seoul_culture1.jpg') }}" alt="Traditional Hanbok">
            <div class="text">
              <h3>Try on a Hanbok</h3>
              <p>Immerse yourself in Korea's rich heritage by slipping into a graceful Hanbok, the traditional clothing that captures the essence of the past. Renting a Hanbok lets you blend history and modernity as you stroll through Seoul's streets, feeling the elegance of a bygone era.</p>
              <p>With vibrant colors and intricate patterns, the Hanbok experience is a gateway to understanding the nation's culture. As you explore the city dressed in this cultural gem, you'll not only create lasting memories against iconic backdrops but also connect with Seoul's deep-rooted traditions.</p>
            </div>                           
          </div>
        <div class="culture-item">
          <div class="culture-item-1">
            <div class="text">
              <h3>Bukchon Hanok Village</h3>
              <p>Step into a world frozen in time at Bukchon Hanok Village, where well-preserved traditional houses known as hanoks stand as witnesses to Seoul's history. Wander through its enchanting streets and gain insight into the daily rhythms of ancient Seoul, as the village captures the essence of bygone eras.</p>
              <p>This living museum transports you back in time, offering a captivating window into the past. Amidst the charming alleyways and historical architecture, you'll find yourself immersed in the heritage of the city, making Bukchon Hanok Village a must-visit destination for those seeking to connect with Seoul's roots.</p>
            </div>           
            <img src="{{ asset('img/seoul_culture2.webp') }}" alt="Bukchon Hanok Village">
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
