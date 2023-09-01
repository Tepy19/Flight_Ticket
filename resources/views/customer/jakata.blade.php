<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paragon Airlines | Jakarta</title>
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
                <h1>Welcome to Jakarta!</h1>
                <p>Experience the vibrant energy of Jakarta, Indonesia's capital city. From its modern skyscrapers to
                    its cultural treasures, Jakarta offers a unique blend of urban lifestyle and rich heritage. Discover
                    a city where tradition and progress intertwine, creating a dynamic and unforgettable travel
                    destination.</p>
            </section>

            <section class="city-highlights">
                <h2>City Highlights</h2>
                <div class="highlight">
                    <div class="highlight-1">
                        <img src="{{ asset('img/jakarta_highlight1.jpeg') }}" alt="National Monument">
                        <div class="text">
                            <h3>National Monument</h3>
                            <p>Visit the National Monument, an iconic symbol of Indonesia's independence. This towering
                                structure stands as a reminder of the country's history and struggle for freedom. Take
                                an elevator to the observation deck for panoramic views of the city and learn about
                                Indonesia's past through various exhibits.</p>
                            <p>The beautifully landscaped park around the monument is a popular spot for relaxation and
                                picnics.</p>
                        </div>
                    </div>
                </div>
                <div class="highlight">
                    <div class="highlight-1">
                        <div class="text">
                            <h3>Old Batavia (Kota Tua)</h3>
                            <p>Step back in time by exploring Old Batavia, a historic area that showcases Jakarta's
                                colonial past. Walk along cobblestone streets, admire charming Dutch-style architecture,
                                and visit museums that provide insights into the city's history.</p>
                            <p>Kota Tua is a cultural hub where you can enjoy street performances, art exhibitions, and
                                local street food.</p>
                        </div>
                        <img src="{{ asset('img/jakarta_highlight2.jpeg') }}" alt="Old Batavia">
                    </div>
                </div>
            </section>

            <section class="city-culture">
                <h2>Cultural Delights</h2>
                <div class="culture-item">
                    <div class="culture-item-1">
                        <img src="{{ asset('img/jakarta_culture1.jpeg') }}" alt="Istiqlal Mosque">
                        <div class="text">
                            <h3>Istiqlal Mosque</h3>
                            <p>Visit the Istiqlal Mosque, the largest mosque in Southeast Asia. This impressive
                                structure stands as a symbol of religious harmony and unity in Indonesia. Explore its
                                grand architecture, peaceful ambiance, and learn about the principles of tolerance and
                                diversity.</p>
                            <p>The mosque is often visited by both locals and tourists seeking spiritual reflection.</p>
                        </div>
                    </div>
                    <div class="culture-item">
                        <div class="culture-item-1">
                            <div class="text">
                                <h3>Street Food Adventure</h3>
                                <p>Indulge in Jakarta's diverse street food scene, where you can find a wide variety of
                                    dishes from different regions of Indonesia. From savory nasi goreng to spicy sate,
                                    the city's street vendors offer a tantalizing culinary journey.</p>
                                <p>Join the locals in enjoying flavors that reflect Indonesia's rich culinary heritage
                                    and explore bustling markets and street corners filled with aromatic aromas.</p>
                            </div>
                            <img src="{{ asset('img/jakarta_culture2.jpeg') }}" alt="Street Food">
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
