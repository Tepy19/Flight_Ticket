<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paragon Airlines | Home</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
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
            <div class="overlay">
                <div class="text-overlay">
                    <h1>Welcome to Paragon Airlines</h1>
                    <p>A sense of place when you're far from home.<br>You can trust us, we have over 50 years of
                        experience in the industry.</p>
                    <button type="button"><a href="{{ route('customer.about') }}">Learn More</a></button>
                </div>
            </div>
            <div class="flight-booking">
                <div class="container">
                    <div class="tabs">
                        <div class="book_flights">Book Flights</div>
                        <div class="manage_booking">Manage Booking</div>
                        <div class="check_in">Check In</div>
                        <div class="flight_status">Flight Status</div>
                        <div class="flight_schedule">Flight Schedule</div>
                    </div>
                    <form method="post">
                        <div class="left-half">
                            {{ csrf_field() }}
                            <label for="origin">From</label>
                            <select id="origin" name="from" onchange="updateDestinationOptions()">
                                <option value="" disabled selected>Select origin</option>
                                <option value="0">Phnom Penh International Airport (PNH) - Cambodia</option>
                                <option value="1">Siem Reap International Airport (REP) - Cambodia</option>
                                <option value="2">Sihanoukville International Airport (KOS) - Cambodia</option>
                                <option value="3">Bangkok Suvarnabhumi Airport (BKK) - Thailand</option>
                                <option value="4">Kuala Lumpur International Airport (KUL) - Malaysia</option>
                            </select>

                            <label for="destination">To</label>
                            <select id="destination" name="to" required>
                                <option value="" disabled selected>Select destination</option>
                                <option value="0">Phnom Penh International Airport (PNH) - Cambodia</option>
                                <option value="1">Siem Reap International Airport (REP) - Cambodia</option>
                                <option value="2">Sihanoukville International Airport (KOS) - Cambodia</option>
                                <option value="3">Bangkok Suvarnabhumi Airport (BKK) - Thailand</option>
                                <option value="4">Kuala Lumpur International Airport (KUL) - Malaysia</option>
                            </select>

                            <label for="class">Class</label>
                            <select id="class" name="class">
                                <option value="0">Economy</option>
                                <option value="1">Business</option>
                                <option value="2">First Class</option>
                            </select>
                        </div>
                        <div class="right-half">
                            <label for="departure">Departure Date</label>
                            <input type="date" id="departure" name="departure">
                            <label for="return">Return Date</label>
                            <input type="date" id="return" name="return">
                            <div class="passenger-input">
                                <div class="passenger-field">
                                    <label for="adults">Adults</label>
                                    <input type="text" id="adults" required name="adult" >
                                </div>
                                <div class="passenger-field">
                                    <label for="children">Children</label>
                                    <input type="text" id="children" required name="children">
                                </div>
                                <div class="passenger-field">
                                    <label for="infants">Infants</label>
                                    <input type="text" id="infants" required name="infants">
                                </div>
                                <div class="search-button">
                                    <button type="submit">BOOK</button>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </section>
    </main>

    <div class="login-bar-container" style="margin-top: 500px;">
        <div class="login-bar">
            <p>Do you want to see your flight record ? How many times you have flight with us ? How excited it was ? Wanna do it again?<a href="{{ route('record') }}"> Flight Record</a>.</p>
        </div>

        <div class="login-button">
            <button type="button"><a href="{{ route('logout') }}">Log Out</a></button>
        </div>
    </div>

    <div class="container0">
        <div class="box">
            <p class="high">Highlights</p>
        </div>
        <div class="firstrow">
            <div class="pic1">
                <img src="{{ asset('img/Phnom Penh.webp') }}" alt="">
                <div class="overlay0">
                    <p class="pp"><b>Phnom Penh</b><br>A vibrant capital of Cambodia, known for its rich history,
                        stunning architecture, bustling markets, and delicious cuisine.</p>
                </div>
            </div>
            <div class="pic2">
                <img src="{{ asset('img/Japan.jpeg') }}" alt="">
                <p class="jp"><b>Japan</b><br>A captivating country with a unique blend of ancient traditions and
                    modern marvels, renowned for its cherry blossoms, sushi, temples, and technological advancements.
                </p>
            </div>
        </div>
        <div class="secondrow">
            <div class="mal">
                <img src="{{ asset('img/Malaysia.webp') }}" alt="">
                <p><b>Malaysia</b><br>A diverse Southeast Asian nation with stunning landscapes, cultural fusion,
                    vibrant street food, towering skyscrapers, and a rich heritage..</p>
            </div>
            <div class="mal">
                <img src="{{ asset('img/Singapore.jpeg') }}" alt="">
                <p><b>Singapore</b><br>A bustling city-state known for its cleanliness, iconic skyline, world-class
                    cuisine, and efficient public transportation.</p>
            </div>
            <div class="mal">
                <img src="{{ asset('img/Thailand.webp') }}" alt="">
                <p><b>Thailand</b><br>A Southeast Asian country famous for its golden temples, tropical beaches,
                    floating markets, and warm hospitality.</p>
            </div>
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
</body>

</html>
