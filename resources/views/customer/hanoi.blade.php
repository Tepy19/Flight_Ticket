<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paragon Airlines | Hanoi City Guide</title>
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
                <h1>Welcome to Hanoi!</h1>
                <p>Discover the enchanting blend of ancient traditions and modern dynamism in Hanoi, the capital city of
                    Vietnam. With its picturesque lakes, historical landmarks, and bustling streets, Hanoi offers a
                    captivating journey through Vietnam's rich cultural heritage.</p>
            </section>

            <section class="city-highlights">
                <h2>City Highlights</h2>
                <div class="highlight">
                    <div class="highlight-1">
                        <img src="{{ asset('img/hanoi_highlight1.jpg') }}" alt="Hoan Kiem Lake">
                        <div class="text">
                            <h3>Hoan Kiem Lake</h3>
                            <p>Explore the heart of Hanoi at Hoan Kiem Lake, surrounded by historic temples and vibrant
                                streets. Visit Ngoc Son Temple, situated on an islet within the lake, and take a stroll
                                across the iconic red Huc Bridge.</p>
                            <p>Hoan Kiem Lake is not only a scenic spot but also a cultural hub where locals and
                                visitors gather to relax and enjoy the city's charm.</p>
                        </div>
                    </div>
                </div>
                <div class="highlight">
                    <div class="highlight-1">
                        <div class="text">
                            <h3>Hanoi Old Quarter</h3>
                            <p>Step into the charming chaos of the Hanoi Old Quarter, where narrow streets are lined
                                with centuries-old architecture, boutique shops, and bustling markets. Experience the
                                energy of street vendors, taste traditional dishes, and immerse yourself in the city's
                                history.</p>
                            <p>The Old Quarter preserves Hanoi's heritage and provides a glimpse into the daily life of
                                its residents.</p>
                        </div>
                        <img src="{{ asset('img/hanoi_highlight2.jpeg') }}" alt="Hanoi Old Quarter">
                    </div>
                </div>
            </section>

            <section class="city-culture">
                <h2>Cultural Delights</h2>
                <div class="culture-item">
                    <div class="culture-item-1">
                        <img src="{{ asset('img/hanoi_culture1.jpg') }}" alt="Temple of Literature">
                        <div class="text">
                            <h3>Temple of Literature</h3>
                            <p>Visit the Temple of Literature, Vietnam's first university and a symbol of Confucian
                                education. Explore the well-preserved courtyards, pavilions, and statues that pay homage
                                to scholars and learning.</p>
                            <p>The temple complex is a testament to Hanoi's intellectual history and offers a serene
                                escape from the bustling streets.</p>
                        </div>
                    </div>
                </div>
                <div class="culture-item">
                    <div class="culture-item-1">
                        <div class="text">
                            <h3>Ho Chi Minh Mausoleum</h3>
                            <p>Pay your respects to the iconic leader at the Ho Chi Minh Mausoleum. The solemn mausoleum
                                houses the embalmed body of Ho Chi Minh, the founding father of modern Vietnam. Explore
                                the surrounding grounds, including the Presidential Palace and Ho Chi Minh's stilt
                                house.</p>
                            <p>The mausoleum reflects the profound influence of Ho Chi Minh on Vietnam's history and its
                                ongoing significance.</p>
                        </div>
                        <img src="{{ asset('img/hanoi_culture2.jpg') }}" alt="Ho Chi Minh Mausoleum">
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
    </main>
</body>
