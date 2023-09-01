<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Paragon Airlines | Singapore</title>
  <link rel="stylesheet" href="{{ asset('css/singapore.css') }}">
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
        <h1>Welcome to Singapore!</h1>
        <p>Explore the enchanting blend of diverse cultures, stunning architecture, and lush landscapes that define Singapore. From futuristic skyscrapers to historical neighborhoods, Singapore offers an unforgettable journey through time and innovation.</p>
      </section>
      
      <section class="city-highlights">
        <h2>City Highlights</h2>
        <div class="highlight">
          <div class="highlight-1">
            <img src="{{ asset('img/singapore_highlight1.jpg') }}" alt="Marina Bay Sands">
            <div class="text">
              <h3>Marina Bay Sands</h3>
              <p>Experience the epitome of luxury at Marina Bay Sands, an iconic integrated resort that dominates Singapore's skyline. Marvel at the gravity-defying rooftop pool, which offers breathtaking views of the city's modern marvels. Whether you're exploring the elegant casino, indulging in world-class dining, or wandering through luxury boutiques, Marina Bay Sands offers an unparalleled escape.</p>
              <p>As day turns into night, witness the Spectra light and water show, a mesmerizing display of choreographed fountains and lights set against the backdrop of Marina Bay. Marina Bay Sands is not just a destination; it's a testament to Singapore's commitment to innovation and opulence.</p>
            </div>
          </div>
        </div>
        <div class="highlight">
          <div class="highlight-1">
            <div class="text">
              <h3>Chinatown Heritage Center</h3>
              <p>Step into the heart of Singapore's history at the Chinatown Heritage Center, where immersive exhibits and recreated scenes transport you back to the bustling streets of old Chinatown. Delve into the stories of early immigrants and gain insights into their lives, struggles, and contributions to Singapore's vibrant culture.</p>
              <p>Wander through authentically recreated shophouses and alleys, each showcasing a different chapter in Singapore's past. From traditional trades to the evolution of Chinatown, this center is a captivating journey through time that offers a deeper appreciation for Singapore's multicultural heritage.</p>
            </div>            
            <img src="{{ asset('img/singapore_highlight2.jpeg') }}" alt="Chinatown Heritage Center">
          </div>
        </div>
      </section>
      
      <section class="city-culture">
        <h2>Cultural Delights</h2>
        <div class="culture-item">
          <div class="culture-item-1">
            <img src="{{ asset('img/singapore_culture1.jpg') }}" alt="Singapore Botanic Gardens">
            <div class="text">
              <h3>Singapore Botanic Gardens</h3>
              <p>Escape the urban bustle and find tranquility in the lush embrace of the Singapore Botanic Gardens. This UNESCO-listed site is a haven of natural beauty, featuring a diverse collection of flora, including the stunning National Orchid Garden.</p>
              <p>Stroll along winding paths, relax by serene lakes, and immerse yourself in the rich biodiversity that thrives within this urban oasis. The Singapore Botanic Gardens is a testament to the city's commitment to preserving its natural heritage and offering a retreat for both locals and visitors.</p>
            </div>                           
          </div>
        <div class="culture-item">
          <div class="culture-item-1">
            <div class="text">
              <h3>Hawker Center Delights</h3>
              <p>Embark on a culinary journey at Singapore's famous hawker centers, where a world of flavors awaits. Sample delectable dishes from various cultures, from savory Hainanese chicken rice to spicy laksa and mouthwatering satay.</p>
              <p>These bustling food havens offer a glimpse into Singapore's food-loving culture, where locals and tourists come together to savor affordable yet incredibly delicious meals. Hawker centers are more than just places to eat; they're vibrant hubs of Singaporean life and gastronomic exploration.</p>
            </div>           
            <img src="{{ asset('img/singapore_culture2.webp') }}" alt="Hawker Center">
          </div>
        </div>
      </section> 
    </div>
  </main>
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
</body>

</html>
