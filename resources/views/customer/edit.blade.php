<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paragon Airlines | Edit</title>
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
                                <option {{ old('from') ?? $getRecord->from == 0 ? 'selected' : '' }}
                                    value="{{ old('from') ?? $getRecord->from }}">Phnom Penh International Airport
                                    (PNH) - Cambodia</option>
                                <option {{ old('from') ?? $getRecord->from == 1 ? 'selected' : '' }} value="1">
                                    Siem Reap International Airport (REP) - Cambodia</option>
                                <option {{ old('from') ?? $getRecord->from == 2 ? 'selected' : '' }} value="2">
                                    Sihanoukville International Airport (KOS) - Cambodia</option>
                                <option {{ old('from') ?? $getRecord->from == 3 ? 'selected' : '' }} value="3">
                                    Bangkok Suvarnabhumi Airport (BKK) - Thailand</option>
                                <option {{ old('from') ?? $getRecord->from == 4 ? 'selected' : '' }} value="4">
                                    Kuala Lumpur International Airport (KUL) - Malaysia</option>
                            </select>

                            <label for="destination">To</label>
                            <select id="destination" name="to" required>
                                <option value="" disabled selected>Select destination</option>
                                <option {{ old('to') ?? $getRecord->to == 0 ? 'selected' : '' }}
                                    value="{{ old('to') ?? $getRecord->to }}">Phnom Penh International Airport (PNH) -
                                    Cambodia</option>
                                <option {{ old('to') ?? $getRecord->to == 1 ? 'selected' : '' }} value="1">Siem
                                    Reap International Airport (REP) - Cambodia</option>
                                <option {{ old('to') ?? $getRecord->to == 2 ? 'selected' : '' }} value="2">
                                    Sihanoukville International Airport (KOS) - Cambodia</option>
                                <option {{ old('to') ?? $getRecord->to == 3 ? 'selected' : '' }} value="3">Bangkok
                                    Suvarnabhumi Airport (BKK) - Thailand</option>
                                <option {{ old('to') ?? $getRecord->to == 4 ? 'selected' : '' }} value="4">Kuala
                                    Lumpur International Airport (KUL) - Malaysia</option>
                            </select>

                            <label for="class">Class</label>
                            <select id="class" name="class">
                                <option {{ old('class') ?? $getRecord->class == 0 ? 'selected' : '' }}
                                    value="{{ old('class') ?? $getRecord->class }}">Economy</option>
                                <option {{ old('class') ?? $getRecord->class == 1 ? 'selected' : '' }} value="1">
                                    Business</option>
                                <option {{ old('class') ?? $getRecord->class == 2 ? 'selected' : '' }} value="2">
                                    First Class</option>>
                            </select>
                        </div>
                        <div class="right-half">
                            <label for="departure">Departure Date</label>
                            <input type="date" value="{{ Carbon\Carbon::parse(old('departure') ?? $getRecord->departure)->format('Y-m-d') }}" id="departure" name="departure">
                            <label for="return">Return Date</label>
                            <input type="date" value="{{ Carbon\Carbon::parse(old('return') ?? $getRecord->return)->format('Y-m-d') }}" id="return" name="return">
                            <div class="passenger-input">
                                <div class="passenger-field">
                                    <label for="adults">Adults</label>
                                    <input type="text" value="{{ $getRecord->adult }}" id="adults" required
                                        name="adult">
                                </div>
                                <div class="passenger-field">
                                    <label for="children">Children</label>
                                    <input type="text" value="{{ $getRecord->children }}" id="children" required
                                        name="children">
                                </div>
                                <div class="passenger-field">
                                    <label for="infants">Infants</label>
                                    <input type="text" value="{{ $getRecord->infants }}" id="infants" required
                                        name="infants">
                                </div>
                                <div class="search-button">
                                    <button type="submit">UPDATE</button>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </section>
    </main>

    <div class="container1" style="margin-top: 500px;">
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
