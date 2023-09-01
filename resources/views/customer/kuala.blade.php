<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paragon Airlines | Kuala Lumpur</title>
    <link rel="stylesheet" href="{{ asset('css/kuala-lumpur.css') }}">
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
                <h1>Welcome to Kuala Lumpur!</h1>
                <p>Discover the dynamic fusion of cultures, towering skyscrapers, and vibrant street life that define
                    Kuala Lumpur. From awe-inspiring architecture to tantalizing street food, Kuala Lumpur offers an
                    unforgettable journey through Malaysia's capital city.</p>
            </section>

            <section class="city-highlights">
                <h2>City Highlights</h2>
                <div class="highlight">
                    <div class="highlight-1">
                        <img src="{{ asset('img/kl_highlight1.webp') }}" alt="Petronas Twin Towers">
                        <div class="text">
                            <h3>Petronas Twin Towers</h3>
                            <p>Experience the magnificence of the Petronas Twin Towers, an iconic symbol of Kuala
                                Lumpur's modernity and ambition. Soaring into the sky, these twin skyscrapers offer
                                breathtaking views from their observation deck, showcasing the city's skyline and
                                surrounding beauty.</p>
                            <p>As the sun sets, witness the towers come alive with a stunning light show that
                                illuminates the night. The Petronas Twin Towers not only represent architectural
                                brilliance but also stand as a testament to Kuala Lumpur's status as a global city.</p>
                        </div>
                    </div>
                </div>
                <div class="highlight">
                    <div class="highlight-1">
                        <div class="text">
                            <h3>Batu Caves</h3>
                            <p>Embark on a spiritual and natural journey at Batu Caves, a complex of limestone caves and
                                Hindu temples. The grand entrance featuring a towering golden statue leads to a series
                                of awe-inspiring caverns, each adorned with intricate shrines and formations.</p>
                            <p>Climb the steep stairs to reach the main temple cave, where you'll be rewarded with
                                panoramic views of the city and a sense of tranquility amidst the natural beauty. Batu
                                Caves is not just a place of worship; it's a remarkable fusion of nature and culture.
                            </p>
                        </div>
                        <img src="{{ asset('img/kl_highlight2.jpg') }}" alt="Batu Caves">
                    </div>
                </div>
            </section>

            <section class="city-culture">
                <h2>Cultural Delights</h2>
                <div class="culture-item">
                    <div class="culture-item-1">
                        <img src="{{ asset('img/kl_culture1.jpeg') }}" alt="Central Market">
                        <div class="text">
                            <h3>Central Market</h3>
                            <p>Immerse yourself in Kuala Lumpur's artistic soul at Central Market, a vibrant hub of
                                local crafts, art, and culture. This historic market showcases a diverse array of
                                traditional and contemporary creations, from intricate batik fabrics to handcrafted
                                jewelry.</p>
                            <p>Wander through its colorful alleys, engage with local artisans, and discover unique
                                souvenirs that capture the essence of Malaysia. Central Market is a celebration of
                                creativity and heritage, making it an essential stop for anyone seeking to experience
                                Kuala Lumpur's artistic spirit.</p>
                        </div>
                    </div>
                    <div class="culture-item">
                        <div class="culture-item-1">
                            <div class="text">
                                <h3>Hawker Food Adventures</h3>
                                <p>Embark on a culinary exploration through Kuala Lumpur's lively hawker stalls, where a
                                    world of flavors awaits. Indulge in an array of mouthwatering dishes, from aromatic
                                    nasi lemak to savory char kway teow.</p>
                                <p>These bustling food havens offer a true taste of Malaysia's diverse culinary
                                    heritage, where every bite tells a story. Join the locals in savoring these
                                    delectable treats and immerse yourself in the heart of Kuala Lumpur's gastronomic
                                    scene.</p>
                            </div>
                            <img src="{{ asset('img/kl_culture2.jpeg') }}" alt="Hawker Food">
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
