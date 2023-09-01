<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paragon Airlines | Edit Contact Us</title>
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
    <script src="contact.js"></script>
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
        <div class="contact-image-container">
            <div class="contact-us-container">
                <h1>Edit Contact Us</h1>
                <p>Have a question or concern? We're here to help. Please fill out the form below and we will get back
                    to you as soon as possible.</p>
                <form method="post">
                    {{ csrf_field() }}
                    <label for="email">Email</label><br>
                    <input type="email" id="email" value="{{ $getRecord->email }}" name="email"><br>
                    <label for="issue">Issue</label><br>
                    <select name="issue" id="issue">
                        <option {{ old('issue') ?? $getRecord->issue == 0 ? 'selected' : '' }} value="{{ old('issue') ?? $getRecord->issue }}">Booking Issue</option>
                        <option {{ old('issue') ?? $getRecord->issue == 1 ? 'selected' : '' }} value="{{ old('issue') ?? $getRecord->issue }}">Flight Cancellation</option>
                        <option {{ old('issue') ?? $getRecord->issue == 2 ? 'selected' : '' }} value="{{ old('issue') ?? $getRecord->issue }}">Flight Change</option>
                        <option {{ old('issue') ?? $getRecord->issue == 3 ? 'selected' : '' }} value="{{ old('issue') ?? $getRecord->issue }}">Refund Request</option>
                        <option {{ old('issue') ?? $getRecord->issue == 4 ? 'selected' : '' }} value="{{ old('issue') ?? $getRecord->issue }}">Payment Problem</option>
                        <option {{ old('issue') ?? $getRecord->issue == 5 ? 'selected' : '' }} value="{{ old('issue') ?? $getRecord->issue }}">Baggage Concerns</option>
                        <option {{ old('issue') ?? $getRecord->issue == 6 ? 'selected' : '' }} value="{{ old('issue') ?? $getRecord->issue }}">Special Assistance Request</option>
                        <option {{ old('issue') ?? $getRecord->issue == 7 ? 'selected' : '' }} value="{{ old('issue') ?? $getRecord->issue }}">Other</option>
                    </select>
                    <label for="massage">Message</label><br>
                    <textarea id="message" name="massage" rows="4" value="{{ $getRecord->massage }}" style="resize: vertical;"></textarea>
                    <div class="search-button">
                        <button type="submit">UPDATE</button>
                    </div>
                </form>
            </div>
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
