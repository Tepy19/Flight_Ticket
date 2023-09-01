<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dubai City Guide</title>
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
                <h1>Welcome to Dubai!</h1>
                <p>Discover the opulence, innovation, and captivating attractions of Dubai. This cosmopolitan city in
                    the United Arab Emirates boasts towering skyscrapers, luxurious shopping malls, and a unique blend
                    of traditional and modern experiences.</p>
            </section>

            <section class="city-highlights">
                <h2>City Highlights</h2>
                <div class="highlight">
                    <div class="highlight-1">
                        <img src="{{ asset('img/dubai_highlight1.webp') }}" alt="Burj Khalifa">
                        <div class="text">
                            <h3>Burj Khalifa</h3>
                            <p>Experience the awe-inspiring Burj Khalifa, the world's tallest building, which stands as
                                a testament to Dubai's architectural prowess. Take an elevator ride to the observation
                                decks for breathtaking views of the city's skyline, desert, and ocean.</p>
                            <p>Visiting Burj Khalifa offers a glimpse into Dubai's futuristic vision and commitment to
                                pushing boundaries.</p>
                        </div>
                    </div>
                </div>
                <div class="highlight">
                    <div class="highlight-1">
                        <div class="text">
                            <h3>Dubai Mall</h3>
                            <p>Indulge in shopping and entertainment at Dubai Mall, one of the world's largest shopping
                                complexes. With an array of designer boutiques, international brands, and entertainment
                                options, this mall is a destination in itself.</p>
                            <p>Be sure to explore attractions like the Dubai Aquarium, where you can witness marine life
                                up close, and the Dubai Fountain, a mesmerizing water and light show set against the
                                backdrop of Burj Khalifa.</p>
                        </div>
                        <img src="{{ asset('img/dubai_highlight2.jpeg') }}" alt="Dubai Mall">
                    </div>
                </div>
            </section>

            <section class="city-culture">
                <h2>Cultural Experiences</h2>
                <div class="culture-item">
                    <div class="culture-item-1">
                        <img src="{{ asset('img/dubai_culture1.jpeg') }}" alt="Dubai Souks">
                        <div class="text">
                            <h3>Traditional Souks</h3>
                            <p>Immerse yourself in Dubai's heritage by exploring its traditional souks (markets). Visit
                                the Gold Souk to marvel at intricate jewelry, and explore the Spice Souk for an array of
                                aromatic spices and herbs.</p>
                            <p>These souks offer a glimpse into Dubai's past as a trading hub and provide a unique
                                shopping experience unlike any other.</p>
                        </div>
                    </div>
                </div>
                <div class="culture-item">
                    <div class="culture-item-1">
                        <div class="text">
                            <h3>Dubai Desert Safari</h3>
                            <p>Embark on a desert adventure with a Dubai desert safari. Experience the serenity of the
                                desert landscapes, take a thrilling dune bashing ride, and enjoy traditional
                                entertainment and cuisine at a desert camp.</p>
                            <p>The desert safari offers a chance to connect with the natural beauty of the region and
                                indulge in authentic cultural experiences.</p>
                        </div>
                        <img src="{{ asset('img/dubai_culture2.jpeg') }}" alt="Dubai Desert Safari">
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
