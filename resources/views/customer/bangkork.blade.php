<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Paragon Airlines | Bangkok</title>
  <link rel="stylesheet" href="{{ asset('css/city-guide.css') }}">
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
        <h1>Welcome to Bangkok!</h1>
        <p>Explore the bustling metropolis of Bangkok, where ancient temples stand alongside modern skyscrapers, and street markets offer a feast for the senses. With its vibrant culture, incredible street food, and historical landmarks, Bangkok promises an unforgettable journey through Thailand's capital city.</p>
      </section>
      
      <section class="city-highlights">
        <h2>City Highlights</h2>
        <div class="highlight">
          <div class="highlight-1">
            <img src="{{ asset('img/bangkok_highlight1.jpeg') }}" alt="Grand Palace">
            <div class="text">
              <h3>Grand Palace</h3>
              <p>Discover the exquisite architecture and intricate details of the Grand Palace, a stunning testament to Thailand's rich history and culture. Marvel at the intricate designs, golden spires, and stunning Emerald Buddha statue that make this palace a true gem of Bangkok.</p>
              <p>Walking through the palace grounds feels like stepping into a different world, where royal heritage and artistic brilliance come together in a harmonious blend.</p>
            </div>
          </div>
        </div>
        <div class="highlight">
          <div class="highlight-1">
            <div class="text">
              <h3>Chatuchak Weekend Market</h3>
              <p>Experience the vibrant atmosphere of the Chatuchak Weekend Market, a shopping haven with over 8,000 stalls offering everything from clothing and accessories to antiques and local handicrafts. This sprawling market is a treasure trove of unique finds and a great place to immerse yourself in Bangkok's local culture.</p>
              <p>Navigate through the labyrinthine alleys, sample delicious street food, and bargain for souvenirs that capture the essence of the city. Chatuchak Market is a must-visit for shopaholics and culture enthusiasts alike.</p>
            </div>            
            <img src="{{ asset('img/bangkok_highlight2.jpeg') }}" alt="Chatuchak Weekend Market">
          </div>
        </div>
      </section>
      
      <section class="city-culture">
        <h2>Cultural Delights</h2>
        <div class="culture-item">
          <div class="culture-item-1">
            <img src="{{ asset('img/bangkok_culture1.webp') }}" alt="Wat Arun">
            <div class="text">
              <h3>Wat Arun</h3>
              <p>Explore the iconic Wat Arun, also known as the Temple of Dawn, renowned for its stunning riverside location and intricate architectural details. Climb the steep steps of the central prang to enjoy panoramic views of the Chao Phraya River and the surrounding cityscape.</p>
              <p>As the sun sets, witness the temple's spires illuminated against the night sky, creating a magical and serene ambiance that captures the heart of Bangkok's spirituality.</p>
            </div>                           
          </div>
        <div class="culture-item">
          <div class="culture-item-1">
            <div class="text">
              <h3>Street Food Delicacies</h3>
              <p>Embark on a culinary adventure through Bangkok's vibrant street food scene. From the savory goodness of pad Thai to the flavorful skewers of satay, the city's bustling street corners are a paradise for food lovers.</p>
              <p>Indulge in the bold flavors and aromatic spices of Thai cuisine, and don't forget to try the tantalizing mango sticky rice for a sweet finish to your culinary journey.</p>
            </div>           
            <img src="{{ asset('img/bangkok_culture2.jpeg') }}" alt="Street Food">
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