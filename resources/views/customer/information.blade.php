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
    <title>Paragon Airlines | Home</title>
    <link rel="stylesheet" href="{{ asset('css/information.css') }}">
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
        </section>
        <div class="information-container">
            <h1>Information</h1>
            <h2>Baggage and Travel Documentation</h2>
            <h3>Baggage Policy</h3>
            <h4>I. Handbag Policy</h4>
            <table>
                <tr>
                    <th>Baggage Type</th>
                    <th>Journey</th>
                    <th>Class</th>
                    <th>Quantity</th>
                    <th>Maximum weight per piece</th>
                    <th>Maximum dimension</th>
                </tr>
                <tr>
                    <td>Hand-baggage</td>
                    <td>All routing</td>
                    <td>All</td>
                    <td>1</td>
                    <td>7 kg (15lbs)</td>
                    <td>
                        <ul>115 cm (56cm x 36cm x 23cm)</ul>
                        <ul>45 inch (22’’x 11’’x 9’’)</ul>
                    </td>
                </tr>
                <tr>
                    <td>Small items (*)</td>
                    <td>All routing</td>
                    <td>All</td>
                    <td>1</td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
            <p>(*) A small handbag (include below bags):</p>
            <ul>
                <li>01 Lady handbag or book, magazine, camera, children food kit, duty free bag etc... with the
                    dimension not to exceed (H x W x D) 30cm × 20cm × 10 cm / 12’’ x 7,9” x 3,9”.</li>
                <li>01 jacket bag not to exceed 114cm × 60cm × 11cm / 45” x 24” x 4,3”.</li>
                <li>01 laptop bag not to exceed 40cm × 30cm × 10cm / 16” x 12” x 7,9”</li>
                <li>Passenger (except infant) are allowed a piece of hand baggage on the aircraft. Hand baggage must not
                    be larger than 115cm / 45inch and the maximum weight is 7kg.</li>
                <li>In case, passenger Free Hand-Baggage is over 7kg, passenger is required to buy for upgrading their
                    hand-baggage from 7kg to 10kg at the airport as follows:</li>
            </ul>
            <h4>II. Hand Baggage Option</h4>

            <table>
                <tr>
                    <th rowspan="2">Routing</th>
                    <th colspan="2">Price for Airport Purchase</th>
                </tr>
                <tr>
                    <th>Description</td>
                    <th>Price (USD)</td>
                </tr>
                <tr>
                    <td>All routes operate by K6</td>
                    <td>10Kg/1 hand-baggage</td>
                    <td>20 USD</td>
                </tr>
            </table>
            <ul>
                <li>In case, passenger Hand-Baggage is over 10kg, they must buy 23kg/piece at the airport and transfer
                    to checked baggage.</li>
                <li>Hand-Baggage must fit under the seat in front of you or in the baggage compartment in the cabin.
                    Baggage that is classified as overweight and/or is not properly packed is not allowed to be carried
                    on the plane.</li>
                <li>According to applicable laws and regulations, passengers can carry liquids in hand baggage, if that
                    Baggage meets the following conditions:
                    <ul>
                        <li>Liquids must be held in individual containers not exceeding 100ml.</li>
                        <li>The containers for any liquids carried on board in hand baggage must be carried in a
                            separate, clear-plastic, zip-top or re-sealable bag; the bag must not have a capacity
                            exceeding 1 liter.</li>
                    </ul>
                </li>
                <li>These plastic bags are subject to open in security zones. Passenger may be required to discard the
                    liquid if it does not meet the above requirements.</li>
                <li>Items that are prohibited in accordance with applicable laws, regulations, or orders of any state or
                    country of destination, departure, or transit point.</li>
                <li>Items which are, in our view, not suitable for carriage due to their weight, shape, size, or nature.
                </li>
            </ul>
            <h4>III. Free Checked Baggage Allowance</h4>
            <table>
                <tr>
                    <th>Type of Class</th>
                    <th>Checked Baggage Allowance</th>
                    <th>Maximum Dimension</th>
                </tr>
                <tr>
                    <td>Business, Premium Economy</td>
                    <td>1 piece, maximum 32kg</td>
                    <td>Maximum 158cm (62 linear inches)</td>
                </tr>
                <tr>
                    <td>Economy, Promotion, Low Budget</td>
                    <td>1 piece, maximum 23kg</td>
                    <td>Maximum 158cm (62 linear inches)</td>
                </tr>
            </table>
            <ul>
                <li>Children (CHD) will have the same check-in baggage allowance as adults.</li>
                <li>Infants (INF) will not be entitled to this baggage policy.</li>
                <li>Each infant may bring a collapsible stroller free of charge.</li>
                <li>Any piece/single item heavier than 32kg is not transported as baggage.</li>
                <li>Cambodia Angkor Air will not accept checked baggage over 320cm/126in in dimensions.</li>
                <li>If each dimension exceeds 119cm / 45”, it will be known as oversized baggage; you need to request in
                    advance and it's subject to aircraft arrangement/capacity.</li>
                <li>In case a passenger's Free Checked Baggage exceeds the provided allowance, the passenger is required
                    to buy an upgrade for their Checked Baggage at the airport.</li>
            </ul>
            <h4>IV. Exceed Baggage Option</h4>
            <table>
                <tr>
                    <th>Routing</th>
                    <th>23kg/piece</th>
                    <th>32kg/piece</th>
                    <th>Upgrade 15kg-23kg/piece</th>
                    <th>Upgrade 23kg-32kg/piece</th>
                    <th>Upgrade 15kg-32kg/piece</th>
                </tr>
                <tr>
                    <td>Domestic (included VAT)</td>
                    <td>69 USD</td>
                    <td>96 USD</td>
                    <td>50 USD</td>
                    <td>60 USD</td>
                    <td>80 USD</td>
                </tr>
                <tr>
                    <td>Between Cambodia and Vietnam</td>
                    <td>65 USD</td>
                    <td>85 USD</td>
                    <td>50 USD</td>
                    <td>60 USD</td>
                    <td>80 USD</td>
                </tr>
                <tr>
                    <td>Other routing</td>
                    <td>100 USD</td>
                    <td>130 USD</td>
                    <td>60 USD</td>
                    <td>70 USD</td>
                    <td>90 USD</td>
                </tr>
                <tr>
                    <td>From Cambodia to China</td>
                    <td>90 USD</td>
                    <td>120 USD</td>
                    <td>50 USD</td>
                    <td>60 USD</td>
                    <td>80 USD</td>
                </tr>
                <tr>
                    <td>From China to Cambodia</td>
                    <td>150 USD</td>
                    <td>200 USD</td>
                    <td>120 USD</td>
                    <td>170 USD</td>
                    <td>180 USD</td>
                </tr>
            </table>
            <strong>Note:</strong>
            <br>
            <ul>
                <li>Apply in case passengers who have more pieces of checked baggage than the limitation. Passengers can
                    purchase additional pieces of baggage, but no more than 10 pieces per passenger.</li>
                <li>Apply in case passengers have purchased Extra Baggage (advanced purchase) and would like to upgrade
                    more because their actual checked baggage is overweight at the airport.</li>
            </ul>
            <h4>V. Oversized Checked Baggage Charge</h4>
            <ul>
                <li>The Checked baggage which has one of the dimensions exceeding 119cm / 45” will be considered as
                    Oversized Checked Baggage.</li>
                <li>If the allowable weight for checked baggage is oversized, passengers are required to pay for an
                    oversized fee, as below:</li>
            </ul>
            <table>
                <tr>
                    <th rowspan="2">Description</th>
                    <th colspan="2">Airport Purchased Price</th>
                </tr>
                <tr>
                    <th>Domestic Routing</th>
                    <th>International Routing</th>
                </tr>
                <tr>
                    <td>Oversized Fee</td>
                    <td>$80/piece</td>
                    <td>$100/piece</td>
                </tr>
            </table>
            <h3>Baggage Security Checkpoint</h3>
            <ul>
                <li>For safety and security reasons, the carrier may request passengers to permit a search of their
                    person and baggage, and may search the passengers’ baggage in their absence if they are not
                    available for such permission to be sought, for the purpose of determining whether they are in
                    possession of, or whether their baggage contains any prohibited or limited items.</li>
                <li>If passengers are unwilling to comply with such a request, the carrier may refuse to carry them or
                    their baggage.</li>
                <li>In such case, the carrier will not accept liability for the carriage of passengers and their
                    baggage, except by refunding the ticket(s), applying the carrier’s current regulations.</li>
            </ul>
            <h3>Handled Baggage Issues</h3>
            <h4>1. Pilfered/Damaged Baggage</h4>
            <ul>
                <li>Upon receiving the baggage, passengers must immediately inform any irregularities (pilferage,
                    damage, delay) at the baggage claim (Lost and Found counter) for Cambodia Angkor Air's staff to open
                    a property irregular report (PIR).</li>
                <li>Receipt by the passenger without complaint is evidence that the baggage has been delivered in good
                    condition.</li>
                <li>In case of damage/pilferage, the entitled person must complain to the carrier within seven (7) days
                    from the date of receipt, in writing.</li>
            </ul>
            <strong>Note:</strong><br>
            <ul>
                <li>The carrier is not liable for damage to unchecked baggage unless caused by their negligence and
                    proven by the passenger or claimant.</li>
                <li>The carrier is not liable for baggage damage due to inherent defects or normal wear and tear
                    resulting from transportation.</li>
            </ul>

            <h4>2. Delayed/Lost Baggage</h4>
            <ul>
                <li>If you arrive at the destination without your checked baggage, Cambodia Angkor Air will assist you
                    in tracing and delivering your baggage as soon as possible.</li>
                <li>Baggage details are in a worldwide computerized tracing system.</li>
                <li>In case of delay, the entitled person must complain to the carrier within twenty-one (21) days from
                    the date the baggage is placed at their disposal, in writing.</li>
                <li>In the case of lost baggage, the entitled person must complain to the carrier within twenty-one (21)
                    days from the date the baggage should have been received by the passengers.</li>
                <li>Every complaint must be made in writing and dispatched within the mentioned time-limits. Any
                    complaints failing to arrive within the time-limits and not in writing form shall not be considered
                    to process.</li>
            </ul>
            <h4>3. Baggage Delivery</h4>
            <p>We will advise you as soon as your baggage is located and will deliver it to the address you specified,
                subject to local Customs regulations. Alternatively, you may collect your baggage at the airport.</p>
            <h4>4. Baggage Liability</h4>
            <p>For flights where the Warsaw Convention 1929 amended by Protocol Hague 1955 applies:</p>
            <ul>
                <li>The limits of Cambodia Angkor Air's liability for checked baggage is USD 20 per kg (or other
                    currency equivalent).</li>
                <li>Limits of Cambodia Angkor Air's liability for cabin baggage does not exceed USD 400 per passenger
                    (or local currency equivalent).</li>
            </ul>

            <p>For European routings (flight to or from a European Union (EU) country – where EC Regulation 785/2004
                dated 21/4/2004 applies):</p>
            <ul>
                <li>Limits of Cambodia Angkor Air's liability for damage of baggage (including cabin baggage,
                    belongings, checked baggage) is not exceeding 1000SDR/passenger (or local currency equivalent).</li>
                <li>In case of both cabin baggage and check baggage of a passenger being damaged for various reasons,
                    compensation is made according to the actual damage but not exceeding the limits of Cambodia Angkor
                    Air's liability for that passenger (SDR 1000 or local currency equivalent).</li>
                <li>This regulation does not apply for value-declared baggage.</li>
                <li>Limits of Cambodia Angkor Air's liability for baggage requiring a seat in the cabin (CBBG) does not
                    exceed the limits of Cambodia Angkor Air's liability for checked baggage.</li>
            </ul>

            <h2>Airport Navigation and Procedures</h2>
            <h3>Check-In Counter Timings</h3>
            <table>
                <tr>
                    <th>Airport</th>
                    <th>Check-In Start Time</th>
                    <th>Check-In End Time</th>
                </tr>
                <tr>
                    <td>SGN Airport</td>
                    <td>2 hours prior to Scheduled Time of Departure (STD)</td>
                    <td>50 minutes before STD</td>
                </tr>
                <tr>
                    <td>PNH Airport (International flights)</td>
                    <td>2 hours before STD</td>
                    <td>40 minutes before STD</td>
                </tr>
                <tr>
                    <td>PNH Airport (Domestic flights)</td>
                    <td>1 hour 30 minutes before STD</td>
                    <td>30 minutes before STD</td>
                </tr>
                <tr>
                    <td>REP Airport (International flights)</td>
                    <td>2 hours before STD</td>
                    <td>40 minutes before STD</td>
                </tr>
                <tr>
                    <td>REP Airport (Domestic flights)</td>
                    <td>1 hour 30 minutes before STD</td>
                    <td>30 minutes before STD</td>
                </tr>
            </table>

            <h3>Customs Procedures</h3>
            <ul>
                <li>In each country, passengers are expected to declare money, goods, or other allowances.</li>
                <li>Passengers are required to complete the declaration form.</li>
            </ul>

            <h3>Airport Tax Guidelines</h3>
            <p><strong>For international flights:</strong> The airport tax or charge may not be included in the ticket
                price. Passengers should verify this information when purchasing a ticket.</p>
            <p><strong>For domestic flights:</strong> The airport tax is already included in the ticket price.</p>

            <h3>Airport Facilities Guide</h3>
            <h4>PHNOM PENH AIRPORT</h4>
            <ul>
                <li><strong>Location:</strong> Situated approximately 10km from the capital city Phnom Penh.</li>
                <li><strong>Operated by Paragon Airlines:</strong> A single terminal caters to both domestic and
                    international flights.</li>
                <li><strong>Departure Information:</strong> The terminal offers 22 check-in counters, where Paragon
                    Airlines passengers can check in at counters ranging from No.15 to No.18 or simultaneously from
                    No.15 to No.20.</li>
            </ul>

            <h4>SIEMREAP AIRPORT</h4>
            <ul>
                <li><strong>Location:</strong> Located around 10km from the capital city Phnom Penh.</li>
                <li><strong>Operated by Paragon Airlines:</strong> A unified terminal caters to both domestic and
                    international flights.</li>
                <li><strong>Departure Information:</strong> The terminal houses 22 check-in counters, where Paragon
                    Airlines passengers can check in at counters ranging from No.15 to No.18 or simultaneously from
                    No.15 to No.20.</li>
            </ul>
            <h2>Special Assistance and Services</h2>
            <h3>In-Flight Services</h3>
            <table>
                <tr>
                    <th>Route</th>
                    <th>Passenger</th>
                    <th>On-Board Service</th>
                </tr>
                <tr>
                    <td>Guangzhou / Beijing / Shanghai (Regularity Flight)</td>
                    <td>No meal service in-flight</td>
                    <td>Selling on board: Snack/Hot meal/Beverage</td>
                </tr>
                <tr>
                    <td>Siem Reap / Hong Kong / Siem Reap</td>
                    <td>No meal, No Beverage providing</td>
                    <td>Selling on board: Snack/Hot meal/Beverage</td>
                </tr>
                <tr>
                    <td>Phnom Penh / Siem Reap / Ho Chi Minh / SihanoukVille / Da Nang</td>
                    <td>No Meal (water on demand)</td>
                    <td>Selling on board: Snack / Hot meal / Beverage</td>
                </tr>
            </table>
            <h3>Traveling with Infants and Children</h3>
            <ul>
                <li>Accompanied passengers with infants:</li>
                <ul>
                    <li>Infants under 14 days of age, premature, or unhealthy infants are not accepted for carriage.
                    </li>
                    <li>Infants are not accepted as Unaccompanied Minors (UM).</li>
                    <li>Each adult can travel with 1 infant.</li>
                </ul>
                <li>Accompanied passengers with infants (INF) and children (CHD):</li>
                <ul>
                    <li>An adult can escort 2 CHD of 2-6 years old.</li>
                    <li>An adult can escort 01 INF and 02 CHD under 6 years old with applicable fare for cabin crew
                        accompanied service.</li>
                </ul>
            </ul>
            <h3>Unaccompanied Minor Guidelines</h3>
            <ul>
                <li>Unaccompanied Minors (UM) aged between 2 and less than 4 years:</li>
                <ul>
                    <li>Each UM must be accompanied by one cabin crew.</li>
                </ul>
                <li>Unaccompanied Minors aged between 4 and less than 6 years:</li>
                <ul>
                    <li>Requires accompanying cabin crew service, one cabin crew allowed per group of maximum 2 UM.</li>
                </ul>
                <li>Unaccompanied Minors aged between 6 and less than 15 years:</li>
                <ul>
                    <li>UM can travel alone without cabin crew assistant service.</li>
                </ul>
            </ul>
            <h3>Passengers with Special Needs</h3>
            <ul>
                <li>Wheelchair service (WCHR/WCHS/WCHC) assists passengers with difficulties to walk or move about:</li>
            </ul>

            <h3>Pregnant Passengers Policies</h3>
            <ul>
                <li>Pregnant women in the period of 7 days before or after due date are not accepted for carriage.</li>
            </ul>
            <h3>Traveling while Pregnant</h3>
            <p>For ordering services or getting more information, please contact our Online Booking Helpdesk:</p>
            <p><strong>Online Booking Helpdesk (Headquarter)</strong></p>
            <ul>
                <li>Tel: +855 23 666 0330</li>
                <li>Email: helpdesk_online_2@paragonairlines.com</li>
                <li>Working Days: Monday to Friday (8:00am-12:00pm and 1:30pm-5:30pm)</li>
                <li><strong>Note:</strong> Please call us during working hours (GMT+7:00, Phnom Penh local time).
                    Outside working hours, please send us an email. We will try to reply to your queries promptly.</li>
            </ul>
            <h2>Destination Information and Guidelines</h2>
            <h3>Guidelines for Safe Travel</h3>
            <p>Safety procedures and regulations during the flight.</p>

            <ul>
                <li>Non-smoking</li>
                <li>Seating</li>
                <li>Baggage</li>
                <li>Use of Electronic Devices</li>
                <li>Requirements during Take-off/Landing</li>
                <li>Use of Seat Belt</li>
                <li>Use of Oxygen Mask</li>
                <li>EXIT light signs and Emergency exits</li>
                <li>Emergency Lights</li>
                <li>Use of life jacket when on-water landing</li>
                <li>Brace for Impact</li>
                <li>Safety Instruction Card</li>
            </ul>

            <h3>Travel Restrictions</h3>
            <p>Passenger restrictions, limitations, and conditions of carriage.</p>

            <p>Limitation on Carriage:</p>

            <ul>
                <li>Carrier may refuse carriage of any passenger and/or its passenger's baggage for reasons of safety.
                </li>
                <li>Carrier reserves the right to retain such ticket in such any case.</li>
            </ul>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <p>The structure and content of this page is taken from Cambodia Angkor Air. This is only taken for
                practical educational purposes only.</p>
            <div class="container1">
                <footer>
                    <div class="contact">
                        <div class="icon">
                            <a href="{{ url('https://paragoniu.edu.kh/') }}"><img
                                    src="{{ asset('img/facebook-f.svg') }}" alt="Facebook"></a>
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
